@extends('frontend.master')
@section('content')

    <div class="website">
    <!--Start Header-->
    @include('frontend/components/aheader')
    <!--End Header-->

    <!-- header image  -->
    <div>
        <img src="assets/img/admissions/all-banners/programmes/fees.svg" alt="" />
      </div>
      <!-- header image  -->

      <!-- heading  -->
      <div
        style="margin-top: 40px"
        class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
        data-id="e22f91b"
        data-element_type="widget"
        data-widget_type="go-s-heading.default"
      >
        <div class="elementor-widget-container">
          <div class="prthalign">
            <h1
              style="font-weight: 600"
              class="headd2 text-dark kd-title-ani kd-split-text"
            >
              For Academic Session 2025 - 2026
            </h1>
          </div>
        </div>
      </div>
      <!-- heading  -->

      <!-- table  -->
      <section class="sptb bg-white">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <h3 class="fw-bold pt-4 pb-2 text-dark text-capitalize headd3">
                A. Registration & Admission Fees (To Be Paid Once Only)
              </h3>

              <table
                class="table border table-responsive table-striped vertical-scroll"
              >
                <thead class="text-light para1" style="font-size: 14px">
                  <th class="text-light font-weight-bold">SL. NO.</th>
                  <th class="text-light font-weight-bold"></th>
                  <th class="text-light font-weight-bold">AMOUNT ($)</th>
                </thead>
                <tbody class="para1">
                  <tr>
                    <td>A.</td>
                    <td>Prospectus & Form</td>
                    <td>14.12</td>
                  </tr>
                  <tr>
                    <td>B.</td>
                    <td>
                      Registration (To be paid during the admission for all courses)
                    </td>
                    <td>120</td>
                  </tr>
                  <tr>
                    <td>C.</td>
                    <td>Caution Money (Common for all streams) - Refundable</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>D.</td>
                    <td>Admission Fee (To be Paid during the admission)</td>
                    <td>720</td>
                  </tr>
                </tbody>
              </table>

              <hr />

              <h3 class="fw-bold pt-4 pb-3 text-dark text-capitalize headd3">
                B. Institutions /Schools /Programmes fee to be paid yearly/Semester
                Payment for New Students 2025-26
              </h3>

                <!-- ----- new ----- -->
                <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Architecture (RSA)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Arch.</strong>
                                  <br>
                                  </p>
                              </td>
                              <td>1800</td>
                              <td>2640</td>
                              <td><a href="{{route('international-programs-B-Arch')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Applied & Pure Sciences (RSAPS)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light para1" style="font-size: 14px;">
                          <th class="text-light font-weight-bold">SL. NO.</th>
                          <th class="text-light font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Physics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Physics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Chemistry</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Chemistry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Mathematics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Mathematics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. Physics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Physics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. Chemistry</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Chemistry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. Mathematics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Mathematics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Business (RSB)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: MBA - (Finance, Marketing, HRM, Operations Management, Entrepreneurship & Small Business Management, Business Analytics)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1800</td>
                              <td>2640</td>
                              <td><a href="{{route('international-programs-MBA-Finance')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BBA</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1800</td>
                              <td>2640</td>
                              <td><a href="{{route('international-programs-BBA')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>



                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Behavioral & Allied Sciences (RSBAS)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: MA - Psychology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Psychology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: MA - Clinical Psychology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Clinical-Psychology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA -  Psychology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-Psychology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - Applied Psychology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-Applied-Psychology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Bio-Sciences (RSBSC)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Biotechnology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Bio-Technology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Microbiology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Microbiology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Food Technology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Food-Technology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. Biotechnology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Bio-Technology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. Microbiology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Microbiology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. Food Technology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Food-Technology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Commerce (RSC)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Com</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MCom')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Com - (Day Shift)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BCom')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Com - (Morning Shift)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BCom(Morning-shift)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Com - Finance with ICA / B.Com with ACCA / B.Com with CMA</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BCom-Finance-with-ICA')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
      <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
          <th>Royal School of Communications & Media (RSCOM)</th>
      </div>

      <table class="table border table-responsive table-striped  vertical-scroll">
          <thead class="text-light  para1" style="font-size: 14px;">
              <th class="text-light  font-weight-bold">SL. NO.</th>
              <th class="text-light  font-weight-bold">COURSES</th>
              <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
              <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
              <th class="text-light  font-weight-bold">DETAILS</th>
          </thead>
          <tbody class="para1">
              <tr>
                  <td>1.</td>
                  <td><p>
                      <strong style="color: #023e8a;" class="#">Course: MA - (J & MC)</strong>
                      <br>

                      </p>
                  </td>
                  <td>1020</td>
                  <td>1860</td>
                  <td><a href="{{route('international-programs-MA-J&MC')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
              </tr>

              <tr>
                  <td>2.</td>
                  <td><p>
                      <strong style="color: #1b4332;" class="#">Course: BA - (J & MC)</strong>
                      <br>

                      </p>
                  </td>
                  <td>1020</td>
                  <td>1860</td>
                  <td><a href="{{route('international-programs-BA-J&MC')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
              </tr>

              <tr>
                  <td>3.</td>
                  <td><p>
                      <strong style="color: #1b4332;" class="#">Course: M.Sc. (Animation and Visual Effects)</strong>
                      <br>

                      </p>
                  </td>
                  <td>1020</td>
                  <td>1860</td>
                  <td><a href="{{route('international-programs-MSc-Animation-Visual-Effects')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
              </tr>

              <tr>
                  <td>4.</td>
                  <td><p>
                      <strong style="color: #1b4332;" class="#">Course: B.Sc. - (Animation and Visual Effects)</strong>
                      <br>

                      </p>
                  </td>
                  <td>1020</td>
                  <td>1860</td>
                  <td><a href="{{route('international-programs-BSc-Animation-Visual-Effects')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
              </tr>
          </tbody>
      </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Design (RSD)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: Bachelor in Interior Design (BID)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BachelorInterior-Design(BID)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: Bachelor in Interior Design (BID) (Lateral Entry)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Des (FD)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BDes-FD(Fashion-Design)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Des (FD) (Lateral Entry)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Design-(Fashion-Design)Lateral-Entry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Des - Communication Design</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Design-(Communication-Design)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Des - Graphic Design</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Design-(Graphic-Design)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>7.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Des - Product Design</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Design-(Product-Design)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Environmental & Earth Sciences (RSEES)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Geography</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Geography')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: MA Geography</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Geography')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. Geology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Geology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. Geoinformatics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-in-Geoinformatics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">Course: B.Sc. /BA Geography</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Geography')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">Course: B.Sc. Geology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Geology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Engineering & Technology (RSET)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Tech CSE in Artificial Intelligence</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-MTech-CSE-in-Artifical-Intelligence')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Tech CSE in IOT</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-MTech-CSE-in-Internet-of-Things')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Tech CE - (Water Resources Development & Management) WRDM</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-MTech-CE-in-Water-Resources')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Tech CE - Structural Engineering</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-MTech-CE-in-Structural-Engineering')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Tech CE - CAD</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-MTech-CAD')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech - CE</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(CE)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>7.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech - CSE</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(CSE)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>8.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech - ME</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(ME)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>9.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech - Artificial Intelligence-AI</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech-Artifical-Intelligence-AI')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>10.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech - Mechatronics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="international-programs-BTech-Mechatronics"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>11.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech - (Lateral Entry) - CE/CSE/ME</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(Lateral-Entry)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>12.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech in Electrical & Electronics Engineering</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(Electrical-Electronics-Engineering)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>13.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech. in Electronics and Communication Engineering</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(Electronics-Communication-Engineering)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>14.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Tech for Working Professional (CE & CSE)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>2160</td>
                              <td>3000</td>
                              <td><a href="{{route('international-programs-BTech(CE&CSE)-working')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Fine Arts (RSFA)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td>
                                  <p>
                                      <strong style="color: #023e8a;" class="#">Course: MFA</strong>
                                      <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-Master-of-Fine-Arts(MFA)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td>
                                  <p>
                                      <strong style="color: #1b4332;" class="#">Course: BFA</strong>
                                      <br>

                                  </p>
                              </td>
                              <td>900</td>
                              <td>1740</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Fine-Arts(BFA)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Fashion Design & Technology (RSFT)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Des (FD)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BDes-FD(Fashion-Design)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Humanities & Social Sciences (RSHSS)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: MA Economics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Economics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: MA Sociology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Sociology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: MA (Public Administration)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Public-Administration')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: MA (Political Science)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-Political-Science')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: MA (History)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-History')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: MSW</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSW')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>7.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BSW</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSW')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>8.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - Sociology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-Sociology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>9.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - Economics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-Economics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>10.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - Public Administration</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-Public-Administration')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>11.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - Political Science</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-Political-Science')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>12.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - History</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-History')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Hotel Management (RSHM)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Sc./BA - Hotel Management</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-HotelManagement')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - Culinary Arts</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-in-Culinary-Arts')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. Hotel Management / MHM</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Hotel-Management')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: Bachelor of Hotel Management - BHM</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Hotel-Management-BHM')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Information Technology (RSIT)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: BCA</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-BCA')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: MCA</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MCA')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Sc. (IT)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-IT')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. (IT)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-IT')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Languages (RSL)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: MA - English</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MA-English')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: BA - English</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BA-English')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Law & Administration (RSLA)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">LLM - Day Shift</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-LLM-Day-Shift')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">LLM - Morning Shift</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-LLM-Morning-Shift')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">BA/BBA - LLB (Hons)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programBA-BBA-LLB(Hons)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>                        </tr>

                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1e3a8a;" class="#">LLB - (Hons.)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programBA-LLB-(Hons)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>                        </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>Royal School of Library & Information Sciences (RSLIS)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Master of Library & Information Sciences (MLISc)</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-Master-of-Library-&-Information-Sciences')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>ROYAL SCHOOL OF LIFE SCIENCES (RSLSC)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. Botany</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Botany')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. Zoology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Zoology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. Forensic Science</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-ForensicScience')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: M.Sc. Forestry</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Forestry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Sc. Botany</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Botany')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Sc. Zoology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Zoology')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>7.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Sc. Forensic Science</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-ForensicScience')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>8.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B.Sc. Forestry</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Forestry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>ROYAL SCHOOL OF MEDICAL & ALLIED SCIENCES (RSMAS)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: Bachelor of Physiotherapy - BPT</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1200</td>
                              <td>2040</td>
                              <td><a href="{{route('international-programs-Bachelor-of-Physiotherapy-(BPT)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: Masters in Physiotherapy - MPT</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MasterofPhysiotherapy(MPT)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc. in Nutrition and Dietetics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Nutrition-and-Dietetics')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>4.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M.Sc. in Nutrition and Dietetics</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-Nutrition')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>5.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: M. Optometry</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-M-Optometry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>6.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: B. Optometry</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-B-Optometry')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>7.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">Course: B.Sc. in Medical Laboratory Technology- BMLT</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-B-ScMedical-Technology-BMLT')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>8.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">Course: M.Sc. in Medical Laboratory Technology- MMLT</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-MSc-MedicalLaboratory(MMLT)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>9.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">Course: B.Sc. in Dialysis Tech</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Dialysis')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>10.</td>
                              <td><p>
                                  <strong style="color: #7f5539;" class="#">Course: B.Sc. in Operation Theatre Technology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-Technology(OTT)')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>11.</td>
                              <td><p>
                                  <strong style="color: #7f5539;" class="#">Course: B.Sc. in Radiography & Advance Imaging Technology</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-Radiography')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>12.</td>
                              <td><p>
                                  <strong style="color: #7f5539;" class="#">Course: B.Sc. in Emergency & Critical Care</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-in-Emergency')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                  <div style="background-color: #c7daf9; display: flex; justify-content: center; align-items: center; margin-top: 40px;" class="text-dark fw-bold para1 p-2">
                      <th>ROYAL SCHOOL OF TRAVEL & TOURISM MANAGEMENT(RSTTM)</th>
                  </div>

                  <table class="table border table-responsive table-striped  vertical-scroll">
                      <thead class="text-light  para1" style="font-size: 14px;">
                          <th class="text-light  font-weight-bold">SL. NO.</th>
                          <th class="text-light  font-weight-bold">COURSES</th>
                          <th class="text-light  font-weight-bold">TUTION FEE ($)</th>
                          <th class="text-light  font-weight-bold">TOTAL FEE ($)</th>
                          <th class="text-light  font-weight-bold">DETAILS</th>
                      </thead>
                      <tbody class="para1">
                          <tr>
                              <td>1.</td>
                              <td><p>
                                  <strong style="color: #1b4332;" class="#">Course: B.Sc./BA Travel & Tourism Management</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-BSc-BA-Travel')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>2.</td>
                              <td><p>
                                  <strong style="color: #023e8a;" class="#">Course: Master of Travel & Tourism Management - MTTM</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-Master-Travel&Tourism')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>
                          <tr>
                              <td>3.</td>
                              <td><p>
                                  <strong style="color: #3c096c;" class="#">Course: Bachelor of Travel & Tourism Management - BTTM</strong>
                                  <br>

                                  </p>
                              </td>
                              <td>1020</td>
                              <td>1860</td>
                              <td><a href="{{route('international-programs-Bachelor-Travel')}}"><button type="button" class="btn btn-primary btn-sm custom-details-btn">Details</button></a></td>
                          </tr>

                      </tbody>
                  </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                <h3
                  class="headd3 p-2"
                  style="
                    color: #343a40;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                    padding-bottom: 10px;
                  "
                >
                  On Campus Residence Information
                </h3>
                <table
                  class="table border table-responsive table-striped vertical-scroll"
                >
                  <thead class="text-light para1" style="font-size: 14px">
                    <th class="text-light font-weight-bold">SL. NO.</th>
                    <th class="text-light font-weight-bold">AMOUNT(RS.)</th>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>A) Caution Money (Common for all streams) - Refundable</td>
                      <td>0</td>
                    </tr>
                    <tr>
                        <td>Admission Fee (To be paid during the time of admission)</td>
                        <td>180</td>
                      </tr>
                      <tr>
                        <td>Annual Fee</td>
                        <td>180</td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                <table
                  class="table border table-responsive table-striped vertical-scroll"
                >
                  <thead class="text-light para1" style="font-size: 14px">
                    <th class="text-light font-weight-bold">SL. NO.</th>
                    <th class="text-light font-weight-bold">HOSTEL FEE</th>
                    <th class="text-light font-weight-bold">YLY PAY(RS.)</th>
                  </thead>
                  <tbody class="para1">
                    <tr>
                      <td>1.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 2 Seater(Suit)(Heyansh House -
                            Boys)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>2874</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 2 Seater(Premium)(Heyansh House - Boys,
                            Samaya House - Girls)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>2515</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 2 Seater(Premium)(Aditya House - Boys,
                            Harsha House - Girls)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>2515</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 2 Seater(Heyansh House - Boys)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>2300</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 2 Seater(Aditya House - Boys, Harsha
                            House - Girls)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>2300</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 3 Seater(Heyansh House - Boys, Samaya
                            House - Girls, Aditya House - Boys, Harsha House -
                            Girls)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>2156</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 4 Seater(Samaya House - Girls, Aditya
                            House - Boys, Harsha House - Girls)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>1581</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - 5 Seater(Heyansh House - Boys)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>1286</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - Dormitory(Heyansh House - Boys)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>1078</td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <td>
                        <p>
                          <strong style="color: #1b4332" class="#"
                            >*** Hostel Fee - Dormitory(Aditya House - Boys, Harsha
                            House - Girls)</strong
                          >
                          <br />
                        </p>
                      </td>
                      <td>1078</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- ----- new ----- -->

              <!-- ----- new ----- -->
              <div>
                <h3
                  class="headd3 p-2"
                  style="
                    color: #343a40;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                    padding-bottom: 10px;
                  "
                >
                  Residential accomodation is compulsory for all international students.
                </h3>
              </div>
              <!-- ----- new ----- -->

              <hr />
              <td>
                <a href="https://heyzine.com/flip-book/3fa20e1aae.html"
                  ><button
                    type="button"
                    class="btn btn-primary btn-lg custom-details-btn"
                  >
                    Fee Structure 2025-26
                  </button></a
                >
              </td>
              <h3
                class="headd3 p-2"
                style="
                  color: #343a40;
                  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                  margin-top: 20px;
                  padding-bottom: 10px;
                "
              >
                Ms. Gurpreet Kaur Anand, Deputy Director, The Office of International
                Affairs
              </h3>
              <div class="row g-3">
                <div class="col-lg-4">
                  <div class="card border-0 shadow-lg" style="border-radius: 10px">
                    <div class="card-body text-center fw-bold text-dark">
                      <i
                        class="fa-solid fa-phone fa-beat me-2"
                        style="color: #007bff"
                      ></i
                      >+91 9864049818
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card border-0 shadow-lg" style="border-radius: 10px">
                    <div class="card-body text-center fw-bold text-dark">
                      <i
                        class="fa-solid fa-envelope fa-beat me-2"
                        style="color: #007bff"
                      ></i
                      >gkanand@rgu.ac
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <div>
                <h2
                  class="headd2"
                  style="
                    color: #343a40;
                    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
                    margin-top: 20px;
                    padding-bottom: 10px;
                  "
                >
                  **NOTE
                </h2>
                <h5
                  class="text-center text-danger fw-bold"
                  style="font-size: 1.5rem; margin-bottom: 20px"
                >
                  ** Clinical Posting Charges of Rs.5000/- Per Semester as applicable
                  will be charged additional paid by the student over & above the
                  prescribed semester fee.
                </h5>
              </div>
            </div>
          </div>
          <hr />
        </div>
      </section>
      <!-- table  -->
    </div>
@endsection

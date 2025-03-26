@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <div>
                <img src="mobile-assets/intern-how-to-apply/mob-ban.png" alt="">
            </div>

            <div style="background-color: #fffaf5;">
                <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-4"
                    style="color: #27467A; font-weight: 900;">
                    Checklist <span style="color: #FF9A1E; font-weight: 500;">Documents</span></h2>

                <p class="text-center mobile-headd3 fw-bold mb-2" style="color: #264273;">Self-attested scanned copies of the
                    following documents need to be uploaded:</p>

                <div class="pb-2">
                    <div class="mobile-container">

                        <div class="mobile-row">

                            <div class="mobile-column">
                                <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-center pb-2 pt-2">
                                    Under-Graduate <span style="color: #FF9A1E; font-weight: 600;">Application</span></h2>
                                <hr>

                                <ul style="list-style: none; padding: 0; color: #444;" class="para1 pt-2">
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Passport Size Photo</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class X Mark Sheet</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class X Pass Certificate</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class XII Mark Sheet</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class XII Pass Certificate</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Age Proof (Birth Certificate/Class X Admit)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Recommendation form 1 & 2 (should be downloaded, then fill, scan and
                                            upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Parents Undertaking (should be downloaded, then fill, scan and upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Medical Report (should be downloaded, then fill, scan and upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Character Certificate of Last Institution</span>
                                    </li>
                                </ul>

                            </div>

                            <div class="mobile-column">
                                <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-center pb-2 pt-2">
                                    Post-Graduate <span style="color: #FF9A1E; font-weight: 600;">Application</span></h2>
                                <hr>

                                <ul style="list-style: none; padding: 0; color: #444;" class="para1 pt-2">
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Passport Size Photo</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class X Mark Sheet</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class X Pass Certificate</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class XII Mark Sheet</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class XII Pass Certificate</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Graduation All Marksheets</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Age Proof (Birth Certificate/Class X Admit)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Recommendation form 1 & 2 (should be downloaded, then fill, scan and
                                            upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Parents Undertaking (should be downloaded, then fill, scan and upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Medical Report (should be downloaded, then fill, scan and upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Character Certificate of Last Institution</span>
                                    </li>
                                </ul>

                            </div>

                            <div class="mobile-column">
                                <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-center pb-2 pt-2">Ph.D. <span
                                        style="color: #FF9A1E; font-weight: 600;">Application</span></h2>
                                <hr>

                                <ul style="list-style: none; padding: 0; color: #444;" class="para1 pt-2">
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Passport Size Photo</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class X Mark Sheet</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class X Pass Certificate</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class XII Mark Sheet</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Class XII Pass Certificate</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Graduation All Marksheets</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Post-Graduation All Marksheets</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Age Proof (Birth Certificate/Class X Admit)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Recommendation form 1 & 2 (should be downloaded, then fill, scan and
                                            upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Parents Undertaking (should be downloaded, then fill, scan and upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Medical Report (should be downloaded, then fill, scan and upload)</span>
                                    </li>
                                    <li style="display: flex; align-items: flex-start; gap: 8px;">
                                        <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                                        <span>Character Certificate of Last Institution</span>
                                    </li>
                                </ul>


                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div style="background-color: #F9E7D7; padding: 20px 0px;">
                <div class="container">
                    <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-4"
                        style="color: #27467A; font-weight: 900;">
                        Once you are ready to apply <br><span style="color: #FF9A1E; font-weight: 500;">follow the steps
                            below</span></h2>

                    <div style="text-align: center;">
                        <img style="height: 330px; max-width: 100%;" src="mobile-assets/intern-how-to-apply/1.png" alt="">
                        <img style="height: 330px; max-width: 100%;" src="mobile-assets/intern-how-to-apply/2.png" alt="">
                        <img style="height: 330px; max-width: 100%;" src="mobile-assets/intern-how-to-apply/3.png" alt="">
                        <img style="height: 330px; max-width: 100%;" src="mobile-assets/intern-how-to-apply/4.png" alt="">
                        <img style="height: 330px; max-width: 100%;" src="mobile-assets/intern-how-to-apply/5.png" alt="">
                        <img style="height: 330px; max-width: 100%;" src="mobile-assets/intern-how-to-apply/6.png" alt="">
                    </div>


                </div>
            </div>

        </div>
    </div>

            <div class="website">
    <!--Start Header-->
                @include('frontend/components/aheader')
    <!--End Header-->

    <img src="mobile-assets/intern-how-to-apply/how-to-apply.png" alt="">

    <div style="background-color: #fffaf5;">
    <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5" style="color: #27467A; font-weight: 900;">
      Checklist <span style="color: #FF9A1E; font-weight: 500;">Documents</span></h2>

          <p class="text-center headd3 fw-bold mb-5" style="color: #264273;">Self-attested scanned copies of the following documents need to be uploaded:</p>

      <div class="pb-5">
          <div class="custom-container">

              <div class="custom-row">

                <div class="custom-column">
                  <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-center pb-2 pt-2">Under-Graduate <span style="color: #FF9A1E; font-weight: 600;">Application</span></h2>
                  <hr>

                  <ul style="list-style: none; padding: 0; color: #444;" class="para1 pt-2">
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Passport Size Photo</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class X Mark Sheet</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class X Pass Certificate</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class XII Mark Sheet</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class XII Pass Certificate</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Age Proof (Birth Certificate/Class X Admit)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Recommendation form 1 & 2 (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Parents Undertaking (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Medical Report (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Character Certificate of Last Institution</span>
                      </li>
                  </ul>

                </div>

                <div class="custom-column">
                  <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-center pb-2 pt-2">Post-Graduate <span style="color: #FF9A1E; font-weight: 600;">Application</span></h2>
                  <hr>

                  <ul style="list-style: none; padding: 0; color: #444;" class="para1 pt-2">
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Passport Size Photo</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class X Mark Sheet</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class X Pass Certificate</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class XII Mark Sheet</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class XII Pass Certificate</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Graduation All Marksheets</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Age Proof (Birth Certificate/Class X Admit)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Recommendation form 1 & 2 (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Parents Undertaking (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Medical Report (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Character Certificate of Last Institution</span>
                      </li>
                  </ul>

                </div>

                <div class="custom-column">
                  <h2 style="color: #0056b3 !important;" class="headd3 fw-bold text-center pb-2 pt-2">Ph.D. <span style="color: #FF9A1E; font-weight: 600;">Application</span></h2>
                  <hr>

                  <ul style="list-style: none; padding: 0; color: #444;" class="para1 pt-2">
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Passport Size Photo</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class X Mark Sheet</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class X Pass Certificate</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class XII Mark Sheet</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Class XII Pass Certificate</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Graduation All Marksheets</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Post-Graduation All Marksheets</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Age Proof (Birth Certificate/Class X Admit)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Recommendation form 1 & 2 (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Parents Undertaking (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Medical Report (should be downloaded, then fill, scan and upload)</span>
                      </li>
                      <li style="display: flex; align-items: flex-start; gap: 8px;">
                          <i class="fa fa-check-circle text-success" style="flex-shrink: 0; margin-top: 3px;"></i>
                          <span>Character Certificate of Last Institution</span>
                      </li>
                  </ul>


                </div>

              </div>

          </div>
      </div>
    </div>

          <div>
              <img src="mobile-assets/intern-how-to-apply/steps.svg" alt="">
          </div>
            </div>
@endsection

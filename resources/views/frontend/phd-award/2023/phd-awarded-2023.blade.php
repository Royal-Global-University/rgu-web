@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-5" style="padding-top: 90px;">
            <img src="home-banner/nirf-mob.png" />
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img class="mb-5" src="home-banner/nirf-web.png" />

    </div>

    <div class="container mb-5 mt-5">
        <div class="row text-center">

            <!-- July 2023 (Popup Trigger) -->
            <div class="col-lg-3 p-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#julyModal"
                    style="padding:60px 60px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>July</p>
                        <p>2023</p>
                    </div>
                </a>
            </div>

            <!-- August -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2023/Ph.D. Award Notification 31-8-2023.pdf"
                    style="padding:60px 60px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>August</p>
                        <p>2023</p>
                    </div>
                </a>
            </div>

            <!-- October -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2023/Ph.D. Award Notification 19-10-2023.pdf"
                    style="padding:60px 60px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>October</p>
                        <p>2023</p>
                    </div>
                </a>
            </div>

            <!-- November -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2023/Ph.D. Award Notification 30-11-2023.pdf"
                    style="padding:60px 60px;font-size:40px;font-weight:700;background-color:#f3e4d3;color:#264678;text-decoration:none;display:inline-block;border-radius:10px;transition:0.3s;"
                    onmouseover="this.style.transform='scale(1.05)';this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)'"
                    onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none'">
                    <div>
                        <p>November</p>
                        <p>2023</p>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="julyModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">

                <div class="modal-header">
                    <h5 class="modal-title">July 2023 Award Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row text-center">

                        <!-- Notification 1 -->
                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2023/Ph.D. Award Notification 31-07-2023.pdf" style="text-decoration:none;">
                                <div style="padding:30px;background:#f3e4d3;border-radius:10px;font-weight:600;color:#264678;transition:0.3s;"
                                    onmouseover="this.style.background='#264678';this.style.color='#fff';this.style.transform='scale(1.05)'"
                                    onmouseout="this.style.background='#f3e4d3';this.style.color='#264678';this.style.transform='scale(1)'">
                                    Notification 1
                                </div>
                            </a>
                        </div>

                        <!-- Notification 2 -->
                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2023/Ph.D. Award Notification 31-07-2023(1).pdf" style="text-decoration:none;">
                                <div style="padding:30px;background:#f3e4d3;border-radius:10px;font-weight:600;color:#264678;transition:0.3s;"
                                    onmouseover="this.style.background='#264678';this.style.color='#fff';this.style.transform='scale(1.05)'"
                                    onmouseout="this.style.background='#f3e4d3';this.style.color='#264678';this.style.transform='scale(1)'">
                                    Notification 2
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

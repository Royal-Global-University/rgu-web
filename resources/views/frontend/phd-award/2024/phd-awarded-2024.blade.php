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

            <!-- February -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 28-02-2024.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    February
                </a>
            </div>

            <!-- March -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 30-03-2024.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    March
                </a>
            </div>

            <!-- May -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 31-05-2024.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    May
                </a>
            </div>

            <!-- June -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 28-06-2024.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    June
                </a>
            </div>

            <!-- July -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 31-07-2024.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    July
                </a>
            </div>

            <!-- August -->
            <div class="col-lg-3 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 30-08-2024.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    August
                </a>
            </div>

            <!-- October -->
            <div class="col-lg-3 p-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#octModal"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    October
                </a>
            </div>

            <!-- November -->
            <div class="col-lg-3 p-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#novModal"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    November
                </a>
            </div>

        </div>
    </div>

    <!-- October Modal -->
    <div class="modal fade" id="octModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">

                <div class="modal-header">
                    <h5 class="modal-title">October Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row text-center">

                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 30-10-2024.pdf" target="_blank" style="text-decoration:none;">
                                <div
                                    style="padding:25px;background:#f3e4d3;border-radius:10px;color:#264678;font-weight:600;">
                                    Notification 1
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 30-10-2024(1).pdf" target="_blank" style="text-decoration:none;">
                                <div
                                    style="padding:25px;background:#f3e4d3;border-radius:10px;color:#264678;font-weight:600;">
                                    Notification 2
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- November Modal -->
    <div class="modal fade" id="novModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-3">

                <div class="modal-header">
                    <h5 class="modal-title">November Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row text-center">

                        <div class="col-4 p-2">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 20-11-2024.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    1</div>
                            </a>
                        </div>

                        <div class="col-4 p-2">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 21-11-2024.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    2</div>
                            </a>
                        </div>

                        <div class="col-4 p-2">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 22-11-2024.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    3</div>
                            </a>
                        </div>

                        <div class="col-4 p-2">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 25-11-2024.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    4</div>
                            </a>
                        </div>

                        <div class="col-4 p-2">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 26-11-2024.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    5</div>
                            </a>
                        </div>

                        <div class="col-4 p-2">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2024/Ph.D. Award Notification 26-11-2024(1).pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    6</div>
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

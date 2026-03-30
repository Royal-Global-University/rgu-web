@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div class="pb-5" style="padding-top: 90px;">
            <img src="/mobile-assets/phd-awarded/phdaward.png" />
        </div>
    </div>

    <div class="website">
        <!--head image Section-->
        @include('frontend/components/aheader')
        <img class="mb-5" src="/mobile-assets/phd-awarded/phdaward-web.png" />

    </div>

    <div class="container mb-5 mt-5">
        <div class="row text-center">

            <!-- February -->
            <div class="col-lg-4 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 28-02-2025.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    February
                </a>
            </div>

            <!-- April (Popup) -->
            <div class="col-lg-4 p-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#aprModal"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    April
                </a>
            </div>

            <!-- May (Popup) -->
            <div class="col-lg-4 p-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#mayModal"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    May
                </a>
            </div>

            <!-- July -->
            <div class="col-lg-4 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-07-2025.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    July
                </a>
            </div>

            <!-- August -->
            <div class="col-lg-4 p-2">
                <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-08-2025.pdf"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    August
                </a>
            </div>

            <!-- October (Popup) -->
            <div class="col-lg-4 p-2">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#octModal"
                    style="padding:40px;font-size:28px;font-weight:700;background:#f3e4d3;color:#264678;text-decoration:none;display:block;border-radius:10px;">
                    October
                </a>
            </div>

        </div>
    </div>

    <!-- April Modal (3 Cards) -->
    <div class="modal fade" id="aprModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title">April Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row text-center">

                        <div class="col-4">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 01-04-2025.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    1</div>
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-04-2025.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    2</div>
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-04-2025(1).pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    3</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- May Modal (2 Cards) -->
    <div class="modal fade" id="mayModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5 class="modal-title">May Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="row text-center">

                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-05-2025.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    1</div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-05-2025(1).pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    2</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- October Modal (2 Cards) -->
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
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 13-10-2025.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    1</div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="/mobile-assets/phd-awarded/Ph.D. Award Notification Year 2025/Ph.D. Award Notification 30-10-2025.pdf" target="_blank" style="text-decoration:none;">
                                <div style="padding:20px;background:#f3e4d3;border-radius:10px;color:#264678;">Notification
                                    2</div>
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

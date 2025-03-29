@extends('frontend.master')
@section('content')
<div class="mobile">
@include('frontend/components/mobileheader')
<div style="background-image: url(assets/img/banner_adv/s2-bg-img-1.webp); padding-top: 90px; position: relative;">
 

            <h2 class="mobile-headd2 kd-title-ani kd-split pb-1 pt-3 text-center" style="color: #264273; font-weight: 700;">B. Pharm. (Lateral Entry)
            </h2>
        
            <p class="mobile-headd3 text-dark text-center" style="line-height: 1.3;">Duration - 03 Years <br> Royal School of Pharmacy (RSP)
            </p>
        
        
                    <!-- YouTube-Style Fixed Tabs Start -->
        <div class="container mt-4" style="max-width: 900px;">
            
            <ul class="nav nav-tabs justify-content-center border-0 shadow-sm" id="infoTabs" role="tablist" 
                style="display: flex; gap: 10px; padding: 10px; background: #ffffff; border-radius: 8px;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active border" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" 
                        aria-controls="tab1" aria-selected="true" 
                        style="font-size: 16px; font-weight: 500; color: white; padding: 10px 18px; border: none; background: #27467A; border-radius: 6px; transition: all 0.3s ease-in-out;">
                        Fee
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab"
                        aria-controls="tab2" aria-selected="false"
                        style="font-size: 16px; font-weight: 500; color: #333; padding: 10px 18px; border: none; background: transparent; border-radius: 6px; transition: all 0.3s ease-in-out;">
                        Eligibility
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab"
                        aria-controls="tab3" aria-selected="false"
                        style="font-size: 16px; font-weight: 500; color: #333; padding: 10px 18px; border: none; background: transparent; border-radius: 6px; transition: all 0.3s ease-in-out;">
                        Brochure
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab"
                        aria-controls="tab4" aria-selected="false"
                        style="font-size: 16px; font-weight: 500; color: #333; padding: 10px 18px; border: none; background: transparent; border-radius: 6px; transition: all 0.3s ease-in-out;">
                        Scholarship
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab"
                        aria-controls="tab5" aria-selected="false"
                        style="font-size: 16px; font-weight: 500; color: #333; padding: 10px 18px; border: none; background: transparent; border-radius: 6px; transition: all 0.3s ease-in-out;">
                        How to Apply
                    </button>
                </li>
              
            </ul>
        
            <div style="padding: 20px 0px 0px 0px;">
            <div class="tab-content p-4 border rounded bg-white" id="infoTabsContent" >
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <p class="mobile-headd3 fw-bold text-dark">A.) Registration & Admission Fees (To Be Paid Once Only)
                    </p>
        
                    <ol class="mobile-para1 text-dark">
                        <li>Prospectus & Form - 1000.00</li>
                        <li>Registration (To be paid during the admission for all courses) - 10000.00</li>
                        <li>Admission Fee - 60000.00</li>
                        <li>Caution Money (Common for all streams) - Refundable 10000.00</li>
                    </ol>
        
                    <p class="mobile-headd3 fw-bold text-dark">B.) Programmes fee to be paid Yearly / semester payment for New Students 2025-26
                    </p>
        
                    <ol class="mobile-para1 text-dark">
                        <li>Yearly Payment (Rs. - 173000.00)</li>
                        <li>Semester Payment (Rs. - 88000.00)</li>
                    </ol>
                    
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <p class="mobile-headd3 fw-bold text-dark">Eligibility Criteria
                    </p>
        
                    <p class="mobile-para1 text-dark">10+2 in science stream or equivalent from a recognized Board/ Council with English as one of the subjects and Physics, Chemistry and Mathematics /Biology as compulsory subjects with minimum 50% marks or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
        
                    <p class="mobile-headd3 fw-bold text-dark">Selection Process
                    </p>
        
                    <p class="mobile-para1 text-dark">Based on overall performance in last examination followed by Personal Interview.
                    </p>
        
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    
                <div class="text-center">
                    <img class="mb-3 rounded shadow-sm" style="width: 200px;" src="assets/img/File/brochurethumb.png" alt="">
        
                    <a href="mobile-assets/Domestic/brochure for web_compressed-min.pdf" target="_blank" class="btn mobile-para1" style="background-color: #27467A; color: white; font-weight: bold; padding: 10px 15px; border-radius: 5px; text-decoration: none; line-height: 1.3; display: flex; align-items: center; justify-content: center; gap: 8px;">
                        <i class="fa fa-download"></i> Download Brochure
                    </a>
                </div>
                    
                </div>
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <p class="mobile-headd3 fw-bold text-dark">Scholarships
                    </p>
        
                    <p class="mobile-para1 text-dark">Royal Global University offers several scholarships to help students pay for their education.<br>
                        Generally, merit scholarships are reserved for students with special qualifications, such as academic performance, athletic or artistic talent and other endowment schemes.
                    </p>
        
                    <p class="mobile-headd3 fw-bold text-dark">Application Process
                    </p>
        
                    <p class="mobile-para1 text-dark">
                        Students seeking Scholarships will have to submit an application as per the category for which the student seeks scholarship. <br>
                        For fresh students seeking admission, if interested for applying scholarship can select the scholarship facility during the online application process. <br>
                        Existing students can seek help from their departmental coordinators to keep themselves updated for the scholarship application deadlines and process.
                    </p>
        
                    <p class="mobile-headd3 fw-bold text-dark">For More Details,</p>
                    <a href="scholarship&funding.html" target="_blank" class="btn mobile-para1" style="background-color: #27467A; color: white; font-weight: bold; padding: 10px 15px; border-radius: 5px; text-decoration: none; line-height: 1.3; display: flex; align-items: center; justify-content: center; gap: 8px;">
                       Click Here
                    </a>
        
                </div>
                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                    <p class="mobile-headd3 fw-bold text-dark">How to Apply
                    </p>
        
                    <p class="mobile-para1 text-dark">Admission to Royal Global University is highly competitive. You need to meet both admissions & subject requirements before we make an unconditional offer of admission. At RGU you will learn from outstanding teachers, access groundbreaking research and state-of-the-art facilities, and make invaluable contacts and lifelong friends.
                    </p>
        
                    <p class="mobile-headd3 fw-bold text-dark">For More Details,</p>
                    <a href="scholarship&funding.html" target="_blank" class="btn mobile-para1" style="background-color: #27467A; color: white; font-weight: bold; padding: 10px 15px; border-radius: 5px; text-decoration: none; line-height: 1.3; display: flex; align-items: center; justify-content: center; gap: 8px;">
                       Click Here
                    </a>
        
                    <hr>
        
                </div>
            </div>
        </div>
        
        
        </div>
        <!-- YouTube-Style Fixed Tabs End -->
        
        
        <!-- Floating Section with Frosted Background -->
        <div class="container pb-4">
            <div class="floating-wrapper" style="
                position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);
                width: 90%; max-width: 400px; z-index: 999;
                backdrop-filter: blur(10px);
                background: rgba(12, 30, 96, 0.938); /* Frosty effect */
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
                border: 1px solid rgba(255, 255, 255, 0.4);
                padding: 15px;">
                
                <div class="d-flex align-items-center justify-content-between" style="gap: 10px;">
                    <span class="mobile-para1" style="
                        font-weight: bold; font-size: 16px; line-height: 1.3;
                        color: #FFD700; flex-grow: 1;">
                        FULLY ONLINE ADMISSION PROCESS
                    </span>
        
                    <a href="https://admissions.rgu.ac" target="_blank"
                        class="btn mobile-para1 pulse-btn" style="
                        background-color: #FFD700; color: #27467A;
                        font-weight: bold; padding: 10px 14px; border-radius: 5px;
                        text-decoration: none; white-space: nowrap;">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- JavaScript to Handle Active Tab Highlighting -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tabs = document.querySelectorAll(".nav-link");
        
                tabs.forEach(tab => {
                    tab.addEventListener("click", function() {
                        tabs.forEach(t => {
                            t.style.background = "transparent";
                            t.style.color = "#333";
                        });
        
                        this.style.background = "#27467A";
                        this.style.color = "white";
                    });
                });
            });
        </script>
        </div>
</div>
<div class="website">
@include('frontend/components/aheader')
<div class="pt-4" style="background-image: url(assets/img/banner_adv/s2-bg-img-1.webp);">
            <div class="text-center">
                <h2 class="text-center headd2 text-dark">B. Pharm. (Lateral Entry)</h3>
                    <h3 class="text-center headd3 text-dark">Duration - 03 Years<br>
                        <span class="text-center" style="font-size: 22px;">Royal School of Pharmacy (RSP)</span>
                    </h3>
            </div>
            <p class="d-flex justify-content-center gap-4 rounded pb-3 pt-3 text-center">
                <button type="button" class="btn p-3 text-white active" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Fee')"
                    style="padding-left: 40px !important; padding-right: 40px !important; font-size: 20px; font-weight: 600; background-color: #004085; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Fee
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Eligibility')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Eligibility
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Brochure')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Brochure
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Scholarship')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    Scholarship
                </button>
                <button type="button" class="btn p-3 text-white" data-bs-toggle="button"
                    onclick="setActiveButton(this); openCity('Apply')"
                    style="font-size: 20px; font-weight: 600; background-color: #a4a4a4dc; border: 2px solid #a4a4a4dc; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0,0,0,0.2); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer;">
                    How To Apply
                </button>
            </p>
            <div class="container pb-5">
                <div id="Fee" class="w3-container city card p-5 shadow" style="display:block">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0"> A.) Registration & Admission Fees (To Be Paid Once Only)
                        </p>
                        <p class="text-dark pt-2 m-0">a. Prospectus & Form - 1000.00</p>
                        <p class="text-dark pt-2 m-0">b. Registration(To be paid during the admission for all courses) -
                            10000.00</p>
                        <p class="text-dark pt-2 m-0">c. Admission Fee - 60000.00</p>
                        <p class="text-dark pt-2 m-0">d. Caution Money (Common for all streams) - Refundable 10000.00
                        </p>
                        <p class="text-dark pt-2 fw-bold m-0">B.) Programmes fee to be paid Yearly / semester payment for
                            New
                            Students 2025-26</p>
                        <p class="text-dark pt-2 m-0">Yearly Payment (Rs. - 173000.00)</p>
                        <p class="text-dark pt-2 m-0">Semester Payment (Rs. - 88000.00)</p>
                    </div>
                </div>
                <div id="Eligibility" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">Eligibility Criteria</p>
                        <p class="text-dark pt-2 m-0">10+2 in science stream or equivalent from a recognized Board/ Council with English as one of the subjects and Physics, Chemistry and Mathematics /Biology as compulsory subjects with minimum 50% marks or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                        <p class="text-dark pt-2 fw-bold m-0">Selection Process</p>
                        <p class="text-dark pt-2 m-0">Based on overall performance in last examination followed by
                            Personal
                            Interview.</p>
                    </div>
                </div>
                <div id="Brochure" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body text-center">
                        <img class="rounded shadow" src="assets/img/File/brochurethumb.png">
                        <p class="text-dark pt-2 fw-bold m-0"><a
                                href="mobile-assets/Domestic/brochure for web_compressed-min.pdf">Brochure 2025-26<i
                                    class="fas fa-download ms-2"></i></a>
                        </p>
                    </div>
                </div>
                <div id="Scholarship" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">Scholarships</p>
                        <p class="text-dark pt-2 m-0">
                            Royal Global University offers several scholarships to help students pay for their
                            education.<br>
                            Generally, merit scholarships are reserved for students with special qualifications, such as
                            academic performance, athletic or artistic talent and other endowment schemes.</p>

                        <p class="text-dark pt-2 fw-bold m-0">Application Process</p>
                        <p class="text-dark pt-2 m-0">
                            Students seeking Scholarships will have to submit an application as per the category for
                            which
                            the
                            student seeks scholarship.<br>
                            For fresh students seeking admission, if interested for applying scholarship can select the
                            scholarship facility during the online application process.<br>
                            Existing students can seek help from their departmental coordinators to keep themselves
                            updated
                            for
                            the scholarship application deadlines and process.</p>

                            <p class="pt-2 fw-bold" style="color: #FF9A1E;"><a href="scholarship&funding.html">More details, click to view...</a></p>
                    </div>
                </div>
                <div id="Apply" class="w3-container city card p-5 shadow" style="display:none">
                    <div class="card-body para1">
                        <p class="text-dark pt-2 fw-bold m-0">How to Apply</p>
                        <p class="text-dark pt-2 m-0">
                            Admission to Royal Global University is highly competitive. You need to meet both admissions
                            &
                            subject requirements before we make an unconditional offer of admission. At RGU you will
                            learn
                            from outstanding teachers, access groundbreaking research and state-of-the-art facilities,
                            and
                            make invaluable contacts and lifelong friends.</p>

                            <p class="pt-2 fw-bold" style="color: #FF9A1E;"><a href="admission-how-to-apply.html"> more details click to view... </a></p><br>

                        <p class="text-dark pt-2 fw-bold m-0">FULLY ONLINE ADMISSION PROCESS</p>

                        </p>
                        <div>
                            <a href="https://admissions.rgu.ac">
                            <button type="button" class="fw-bold text-white rounded p-3"
                                style="background-color: #27467A; font-size: 16px; width: 30%;">
                                Apply Now<span>
                            </button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
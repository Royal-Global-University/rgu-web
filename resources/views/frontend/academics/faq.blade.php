@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <div>
                <img src="mobile-assets/admission-faq/mobile-faq.png" alt="">
            </div>

            <!-- accordion  -->
            <div class="container">

                <!-- search  -->
                <div class="search-box pt-4 pb-4">

                    <div class="row height d-flex justify-content-center align-items-center">

                        <div class="col-md-6">

                            <div class="form d-flex justify-content-center align-items-center">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control form-input para1" placeholder="Search anything...">
                                <a style="margin-left: 20px; display: flex; align-items: center; justify-content: center; background-color: #27467A; color: #fff; padding: 10px 20px 10px 20px;"
                                    class="btn btn para1 fw-bold" href="#" role="button">Search</a>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- search  -->

                <div class="row">

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    Q. What is the fee structure of M.Tech programme?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        60,000-Semester Payment - Rs 51, 500/- Or YearlyPayment - 1,00,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Q. What is the selection criteria for B.Tech ?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Candidates must obtain a valid score in JEE/CEE or R-JEE (Royal
                                        Joint Entrance Examinations) and will have to sit for a Personal Interview (PI).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Q. What are the career opportunities after completing B.Tech ?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. A B.Tech. degree holder is highly sought- after by industries.
                                        B.Tech. candidates are known for their creative thinking, problem solving abilities and
                                        teamwork. Civil Engineers plans, designs and manages construction projects. Mechanical
                                        Engineers, design advanced materials like supersonic and hypersonic space travel, design
                                        robots and automatic control systems etc. Computer Science Engineers design mobile
                                        applications, softwares, networks etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Q. What are the career opportunities for BBA students ?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. BBA lays the foundation based on which students can further
                                        explore the ﬁeld of management education. BBA is beneﬁcial for all those students who
                                        wants to do managerial jobs. Both the government as well as the privatesector offers
                                        career opportunities to BBA graduates. Management professionals are hired by a wide
                                        variety of industries, MNCs and organizations. Students can also prepare for bank
                                        entrance examinations for building a career in the banking domain. BBA graduates are
                                        quickly absorbed in different private and public sector banks like ICICI, HSBC, State
                                        Bank of India, Standard Chartered, YES Bank, Axis bank etc. Private companies offer
                                        various job roles to BBA graduates such as ﬁnancial analyst, management trainee,
                                        accountant etc. Companies providing sales and marketing jobs to BBA candidates are SBI
                                        Life Insurance, Deutsche Bank, Nestle, Cadbury, Marico, Asian paints, Mudra, Leo Burnett
                                        etc. Some sales and marketing companies train the BBA graduates as per their company
                                        norms for delivering the required sales targets. Service based companies like IBM,
                                        Accenture, and Deloitte also provide ample employment opportunities and offer various
                                        managerial roles. BBA Graduates can also enroll for professional courses such as CA and
                                        ICWAI which are very much in demand these days. They can also enroll for post-graduate
                                        courses such as MBA and MCA depending upon their choice. The BBA graduates can even opt
                                        for part-time jobs and enroll for some short duration computer courses which will be an
                                        added advantage. Students interested in taking up government jobs can prepare for civil
                                        service exams like UPSC, NDA (National Defense Academy) etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Q. So what really is Management education all about?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. It is a two-year full time or a three year part time course • It
                                        will give exposure to subjects like Finance, Marketing, Operations, Human Resource etc.
                                        • It will help to develop good logical, analytical and presentation skills• You will be
                                        able to look at problems/situations from different perspectives and arrive at an
                                        effective solution for the same.• The course teaches teamwork, time management and helps
                                        develop a good business perspective.• On an average, you get to study 40 - 45 subjects
                                        in the MBA programme. The programme also involves written exams, presentations, short
                                        projects, case studies, assignments, summer projects, winter projects etc</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Q. What are the specializations under MBA Programme?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Finance, Marketing, HRM, Operations Management, Entrepreneurship
                                        & Small Business Management, Business Analytics</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Q. What are the career opportunities after completing a M.Com course ?
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Those who are looking for a career opportunity in the banking
                                        sector after M.Com can join nationalized banks like State Bank of India, Union Bank of
                                        India etc. as Probationary Ofﬁcer or Customer Relationship Executive. They can also join
                                        public sector undertakings like Bharat Sanchar Nigam Limited (BSNL), National Small
                                        Industries Corporation Limited (NSIC), Heavy Engineering Corporation Limited (HEC Ltd)
                                        etc. FMCG companies like Hindustan Unilever Ltd, Nestle India, and Cadbury India etc.
                                        are reputed private companies where they can apply. They may also join insurance
                                        companies as Financial Analyst, Credit Ofﬁcer or Loan Ofﬁcer etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    Q. What is B.Com Finance with ACCA?
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. ACCA (the Association of Chartered Certified Accountants) is the
                                        Global Body for Professional Accountants. ACCA prepares the students for international
                                        careers and champions the needs of small and medium sized business (SMEs) and emerging
                                        economies, and promote the value of sustainable business. ACCA supports 219,000 members
                                        and 527,000 students in 181 countries,helping them to develop successful careers in
                                        accounting and business, with the skills needed by employers. ACCA works through a
                                        network of 95 offices and centres and more than 8,500 Approved Employers worldwide, who
                                        provide high standards of employee learning and development.
                                        For more details pertaining to the course, visit "</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    Q. What is B.Com Finance with CMA?
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Com with CERTIFIED MANAGEMENT ACCOUNTANT (CMA) is an IMA
                                        ACCREDITED UG PROGRAM. IMA (Institute of Management Accountants) is the worldwide
                                        association of accountants and financial professionals in business. Founded in 1919, we
                                        are one of the largest and most respected associations focused exclusively on advancing
                                        the management accounting profession. We are committed to empowering our 100,000+
                                        members—and those throughout the rest of the profession—to strengthen on-the-job skills,
                                        better manage companies, and accelerate careers. We invite our members to discover the
                                        myriad possibilities within the profession and build an actionable future in management
                                        accounting.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    Q. What is the Fee structure of B.Arch ?
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission
                                        Fee-60,000/-Semester Payment - Rs 86, 500/- Or Yearly Payment - 1,70,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Q. What is the eligibility criteria for B.Arch ?
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks or equivalent grade in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer) along with Physics, Chemistry and Mathematics. OR 3-Years Diploma, recognized by
                                        Central/State Government with minimum 50% marks or equivalent grade in aggregate (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer) along with Mathematics and English as
                                        compulsory subjects.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    Q. What is the selection criteria for B.Arch.?
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Candidates must obtain a valid score in NATA (National Aptitude
                                        Test in Architecture) or JEE (Mains) Paper II (subject to clearance by COA) and will
                                        have to sit for a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading13">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    Q. What are the career opportunities after B. Arch.?
                                </button>
                            </h2>
                            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Career opportunities in Architecture field is attractive,
                                        lucrative, and has lots of potential. The architectural degree is designed in such a way
                                        that it fulfills the criteria of professional certifying bodies. This field covers
                                        different kinds of work such as spatial design, safety management, aesthetics, material
                                        management, etc. A B.Arch. graduate is equipped to design right from iconic buildings to
                                        simple and comfortable living spaces and is sensitive to the various needs of the
                                        society. An architect is a combination of Artist, Professional & Entrepreneur who works
                                        as per the need of the client. An architecture graduate can also get into various fields
                                        such as film making, set designing, management etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading14">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                    Q. What is the fee structure of BID ?
                                </button>
                            </h2>
                            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        60,000-Semester Payment - 56,500/- Or Yearly Payment - 1,10,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading15">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                    Q. What is the eligibility criteria for BID ?
                                </button>
                            </h2>
                            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or 3-Years Diploma in any branch, recognized by
                                        Central/State Government or equivalent qualification from any board with minimum 50%
                                        marks or equivalent grade(5% relaxation to SC/ST/OBC-Non-creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading16">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                    Q. What is the selection criteria for BID ?
                                </button>
                            </h2>
                            <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on the candidate’s overall performance in the last
                                        examination followed by Personal Interview (PI).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading17">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    Q. What is the fee structure of BID Lateral Entry ?
                                </button>
                            </h2>
                            <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        60,000-Semester Payment - 56,500/- Or Yearly Payment - 1,10,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading18">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                    Q. What is the eligibility criteria for BID Lateral Entry ?
                                </button>
                            </h2>
                            <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in any stream with one year Diploma in Interior
                                        design/equivalent qualification from a recognized Central/State Government institution
                                        OR 3 years diploma in Architecture/Interior Design from a recognized Central/State
                                        Government institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading19">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                    Q. What is the selection criteria for BID Lateral Entry ?
                                </button>
                            </h2>
                            <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading20">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                    Q. What is the duration of B.Arch. course?
                                </button>
                            </h2>
                            <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The course duration of B.Arch course is 5years.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading21">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                    Q. What is the duration of Bachelor in Interior Designing?
                                </button>
                            </h2>
                            <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The course duration of Bachelor in Interior Designing is 4 years
                                        and 3 years for lateral entry.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading22">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    Q. What is the fee structure of B.Des (Fashion Design) ?
                                </button>
                            </h2>
                            <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading23">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                    Q. What is the eligibility criteria for B.Des (Fashion Design) ?
                                </button>
                            </h2>
                            <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy
                                        Layer.)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading24">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                    Q. What is the selection criteria for B.Des (Fashion Design) ?
                                </button>
                            </h2>
                            <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading25">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    Q. How are students evaluated in regular programs?
                                </button>
                            </h2>
                            <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Students will be evaluated and assessed throughout the semester
                                        by way of assignments, projects, internships and presentations. Juries comprising of
                                        academicians and industry professionals assess student’s work and capabilities. The aim
                                        is to closely monitor students' evolution as competent professionals and provide
                                        critical feedback to students on their performance and development.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading26">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                    Q. What are the campus facilities available for students?
                                </button>
                            </h2>
                            <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. On campus resources for students includes, but are not limited to
                                        central library, departmental libraries, hostel facilities, canteens, sports zone,
                                        campus doctor, high speed internet access, transportation facilities etc. Check out our
                                        website (www.rgu.ac) for more details.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading27">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                    Q. Are there any seats reserved for SC/ST/OBC students?
                                </button>
                            </h2>
                            <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, 5% relaxation is given to SC/ST/OBC candidates- non creamy
                                        Layer</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading28">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                    Q. In which bank can I apply for education loan?
                                </button>
                            </h2>
                            <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Education loan is offered by Punjab National Bank. For more
                                        details kindly visit our website.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading29">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                    Q. What is the fee structure of B.Des (Communication Design) ?
                                </button>
                            </h2>
                            <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading30">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                    Q. What is the eligibility criteria for B.Des (Communication Design) ?
                                </button>
                            </h2>
                            <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy
                                        Layer.)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading31">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                    Q. What is the selection criteria for B.Des (Communication Design) ?
                                </button>
                            </h2>
                            <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading32">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                    Q. What is the fee structure of B.Des (Graphic Design) ?
                                </button>
                            </h2>
                            <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading33">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                    Q. What is the eligibility criteria for B.Des (Graphic Design) ?
                                </button>
                            </h2>
                            <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy
                                        Layer.)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading34">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                    Q. What is the selection criteria for B.Des (Graphic Design) ?
                                </button>
                            </h2>
                            <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall the performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading35">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                    Q. What is the fee structure of B.Des (Product Design) ?
                                </button>
                            </h2>
                            <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading36">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                    Q. What is the eligibility criteria for B.Des (Product Design) ?
                                </button>
                            </h2>
                            <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council minimum 50%
                                        marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading37">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                    Q. What is the selection criteria for B.Des (Product Design) ?
                                </button>
                            </h2>
                            <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall the performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading38">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                    Q. What is the fee structure of BFA ?
                                </button>
                            </h2>
                            <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs
                                        10000- Semester Payment - 36500/- Or Yearly Payment - 70000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading39">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                    Q. What is the eligibility criteria for BFA ?
                                </button>
                            </h2>
                            <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council minimum 50%
                                        marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading40">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                    Q. What is the selection criteria for BFA ?
                                </button>
                            </h2>
                            <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading41">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                    Q. What is the duration of a Bachelor Degree of Fine Arts?
                                </button>
                            </h2>
                            <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Duration of Bachelor of Fine Arts (BFA) degree is 4 years.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading42">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                    Q. What are the career opportunities available for Fine Arts Graduates in India?
                                </button>
                            </h2>
                            <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Graduates holding a BFA degree may ﬁnd careers as: craft or fine
                                        artists, multimedia artists, actors, art directors, art teachers or writers etc.
                                        Candidates who have completed their master’s in fine arts can avail career options in
                                        various ﬁelds such as art studios, advertising companies, publishing houses, product
                                        design companies, manufacturing companies, magazines, television, teaching, theater
                                        productions and many more.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading43">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                    Q. What is the remuneration of a Fine Arts Graduate in India?
                                </button>
                            </h2>
                            <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The remuneration of a fine arts graduate after graduation depends
                                        on the nature of work he/she is engaged in. Graduates working in textile industries,
                                        advertising agencies and publishing houses initially obtain a package of nearly Rs.
                                        12,000 – Rs. 25,000. Fine arts professionals working in production houses obtain a
                                        salary of nearly Rs. 8,000 – Rs. 20,000 monthly. Students in teaching profession are
                                        also earning well. The career opportunities for the fine arts graduates in India is
                                        growing at a rapid rate and numerous students are opting for a career in this field.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading44">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                    Q. What is the fee structure of M.Sc Physics ?
                                </button>
                            </h2>
                            <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading45">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                    Q. What is the eligibility criteria for M.Sc Physics ?
                                </button>
                            </h2>
                            <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc.(H) from any recognized University/Institution Or B.Sc. with
                                        minimum 50% marks in aggregate and minimum 50% in the subjects opted, from any
                                        recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading46">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                    Q. What is the selection criteria for M.Sc Physics ?
                                </button>
                            </h2>
                            <div id="collapse46" class="accordion-collapse collapse" aria-labelledby="heading46"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection in based on the overall performance in the last
                                        examination followed by a Personal Interview (PI).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading47">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                    Q. What are the career opportunities after doing M.Sc Physics ?
                                </button>
                            </h2>
                            <div id="collapse47" class="accordion-collapse collapse" aria-labelledby="heading47"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. M.Sc. is a demanding degree & students can gain a respectable job
                                        in this area after completing the programme. There are various specializations that one
                                        can pursue in a M.Sc. programme. On completion of the course, students can opt for
                                        research studies in top organizations such as ISRO, DRDO etc. They can also work in
                                        government or private sector in various technical and non-technical posts. Some of the
                                        job profiles for M.Sc. Physics Postgraduates are: Junior Research Fellow, Research
                                        Scientist, Medical Physicist, Radiation Physicist, Research Associate, Online Tutor,
                                        Subject Matter Expert, Assistant Professor etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading48">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                    Q. What kind of learning facilities does the Physics Department provide?
                                </button>
                            </h2>
                            <div id="collapse48" class="accordion-collapse collapse" aria-labelledby="heading48"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The Physics Department provides an inclusive and competitive
                                        atmosphere for excellence in teaching, learning and research with state-of-the-art
                                        infrastructure facilities. Royal Global University provides lab facilities to carry out
                                        different experiments. Some of the major equipment in the physics lab includes: Dual
                                        Trace Oscilloscopes, Hall effect setup, Ultrasonic interferometer, Curie Temperature
                                        determination setup, Function generators, Power supplies of different ranges, LCR-Q
                                        meter, LCD projector etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading49">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                    Q. What are the career opportunities after completing B.Sc Physics ?
                                </button>
                            </h2>
                            <div id="collapse49" class="accordion-collapse collapse" aria-labelledby="heading49"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc. Physics is an undergraduate course. The course study
                                        educates the participants with various aspects of matter, motion, energy, time etc.
                                        Candidate can seek career opportunities in research organizations, and other related
                                        areas. Pursuing higher education after completing B.Sc. Physics increases the scope of
                                        getting into a high profile job with rewarding compensation packages.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading50">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                    Q. What is the fee structure of M.Sc Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse50" class="accordion-collapse collapse" aria-labelledby="heading50"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading51">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                    Q. What is the eligibility criteria for M.Sc Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse51" class="accordion-collapse collapse" aria-labelledby="heading51"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc.(H) from any recognized University/Institution Or B.Sc. with
                                        minimum 50% marks in aggregate and minimum 50% in the subjects opted, from any
                                        recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading52">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                    Q. What is the selection criteria for M.Sc Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse52" class="accordion-collapse collapse" aria-labelledby="heading52"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading53">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                    Q. What is the fee structure of M.Sc. Mathematics ?
                                </button>
                            </h2>
                            <div id="collapse53" class="accordion-collapse collapse" aria-labelledby="heading53"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading54">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                    Q. What is the eligibility criteria for M.Sc. Mathematics ?
                                </button>
                            </h2>
                            <div id="collapse54" class="accordion-collapse collapse" aria-labelledby="heading54"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc.(H) from any recognized University/Institution Or B.Sc. with
                                        minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized
                                        University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading55">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                    Q. What is the selection criteria for M.Sc. Mathematics ?
                                </button>
                            </h2>
                            <div id="collapse55" class="accordion-collapse collapse" aria-labelledby="heading55"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading56">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                    Q. What is the fee structure of B.Sc. Physics?
                                </button>
                            </h2>
                            <div id="collapse56" class="accordion-collapse collapse" aria-labelledby="heading56"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs
                                        10,000-Semester Payment - 39000/- Or Yearly Payment - 75000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading57">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                    Q. What is the eligibility criteria for B.Sc.Physics?
                                </button>
                            </h2>
                            <div id="collapse57" class="accordion-collapse collapse" aria-labelledby="heading57"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading58">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                    Q. What is the selection criteria for B.Sc Physics?
                                </button>
                            </h2>
                            <div id="collapse58" class="accordion-collapse collapse" aria-labelledby="heading58"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in the last examination
                                        followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading59">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                    Q. What is the fee structure of B.Sc Chemistry?
                                </button>
                            </h2>
                            <div id="collapse59" class="accordion-collapse collapse" aria-labelledby="heading59"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading60">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
                                    Q. What is the eligibility criteria for B.Sc - Chemistry?
                                </button>
                            </h2>
                            <div id="collapse60" class="accordion-collapse collapse" aria-labelledby="heading60"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in the
                                        subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading61">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                    Q. What is the selection criteria for B.Sc Chemistry?
                                </button>
                            </h2>
                            <div id="collapse61" class="accordion-collapse collapse" aria-labelledby="heading61"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in the last examination
                                        followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading62">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse62" aria-expanded="false" aria-controls="collapse62">
                                    Q. What is the fee structure of B.Sc Mathematics ?
                                </button>
                            </h2>
                            <div id="collapse62" class="accordion-collapse collapse" aria-labelledby="heading62"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading63">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
                                    Q. What is the eligibility criteria for B.Sc.- Mathematics?
                                </button>
                            </h2>
                            <div id="collapse63" class="accordion-collapse collapse" aria-labelledby="heading63"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in the
                                        subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading64">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse64" aria-expanded="false" aria-controls="collapse64">
                                    Q. What is the selection criteria for B.Sc Mathematics ?
                                </button>
                            </h2>
                            <div id="collapse64" class="accordion-collapse collapse" aria-labelledby="heading64"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is done based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading65">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse65" aria-expanded="false" aria-controls="collapse65">
                                    Q. What is the fee structure of BCA ?
                                </button>
                            </h2>
                            <div id="collapse65" class="accordion-collapse collapse" aria-labelledby="heading65"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 51,500/- Or Yearly Payment - 100000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading66">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse66" aria-expanded="false" aria-controls="collapse66">
                                    Q. What is the eligibility criteria for BCA ?
                                </button>
                            </h2>
                            <div id="collapse66" class="accordion-collapse collapse" aria-labelledby="heading66"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with
                                        Mathematics/ Computer Science / Information Technology as one of the compulsory
                                        subjects, with minimum 50% marks in aggregate or equivalent grade (5% relaxation to
                                        SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading67">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse67" aria-expanded="false" aria-controls="collapse67">
                                    Q. What is the selection criteria for BCA ?
                                </button>
                            </h2>
                            <div id="collapse67" class="accordion-collapse collapse" aria-labelledby="heading67"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading68">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse68" aria-expanded="false" aria-controls="collapse68">
                                    Q. What is the fee structure of MCA ?
                                </button>
                            </h2>
                            <div id="collapse68" class="accordion-collapse collapse" aria-labelledby="heading68"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading69">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse69" aria-expanded="false" aria-controls="collapse69">
                                    Q. What is the eligibility criteria for MCA ?
                                </button>
                            </h2>
                            <div id="collapse69" class="accordion-collapse collapse" aria-labelledby="heading69"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Tech./BE (CS/IT) or BCA or B.Sc. (IT), from any recognized
                                        University/Institution with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer)
                                        OR
                                        3-Year Bachelor’s Degree from any recognized University/Institution in any field with
                                        Mathematics as mandatory subject either in 10+2 or at Graduation Level and minimum 50%
                                        marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)"
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading70">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse70" aria-expanded="false" aria-controls="collapse70">
                                    Q. What is the selection criteria for MCA ?
                                </button>
                            </h2>
                            <div id="collapse70" class="accordion-collapse collapse" aria-labelledby="heading70"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Candidates must obtain a valid score in JMEE or RJMEE and will
                                        have to sit for a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading71">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse71" aria-expanded="false" aria-controls="collapse71">
                                    Q. What is the fee structure of B.Sc.(IT) ?
                                </button>
                            </h2>
                            <div id="collapse71" class="accordion-collapse collapse" aria-labelledby="heading71"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000-Semester Payment - 46,500/- Or Yearly Payment - 90,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading72">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse72" aria-expanded="false" aria-controls="collapse72">
                                    Q. What is the eligibility criteria for B.Sc.(IT)?
                                </button>
                            </h2>
                            <div id="collapse72" class="accordion-collapse collapse" aria-labelledby="heading72"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with
                                        Mathematics/ Computer Science / Information Technology as one of the compulsory
                                        subjects, with minimum 50% marks in aggregate or equivalent grade (5% relaxation to
                                        SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading73">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse73" aria-expanded="false" aria-controls="collapse73">
                                    Q. What is the selection criteria for B.Sc.(IT)?
                                </button>
                            </h2>
                            <div id="collapse73" class="accordion-collapse collapse" aria-labelledby="heading73"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in the last examination
                                        followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading74">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse74" aria-expanded="false" aria-controls="collapse74">
                                    Q. What is the fee structure of M.Sc (IT) ?
                                </button>
                            </h2>
                            <div id="collapse74" class="accordion-collapse collapse" aria-labelledby="heading74"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs
                                        10,000-Semester Payment - 39000/- Or Yearly Payment - 75000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading75">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse75" aria-expanded="false" aria-controls="collapse75">
                                    Q. What is the eligibility criteria for M.Sc (IT) ?
                                </button>
                            </h2>
                            <div id="collapse75" class="accordion-collapse collapse" aria-labelledby="heading75"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Tech./BE (CS/IT) or BCA or B.Sc. (IT), from any recognized
                                        University/Institution with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer) OR 3-year bachelor’s degree from any recognized University/Institution
                                        in any field with Mathematics as mandatory subject either in 10+2 or at Graduation Level
                                        and minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading76">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse76" aria-expanded="false" aria-controls="collapse76">
                                    Q. What is the selection criteria for M.Sc (IT) ?
                                </button>
                            </h2>
                            <div id="collapse76" class="accordion-collapse collapse" aria-labelledby="heading76"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in the last examination
                                        followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading77">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse77" aria-expanded="false" aria-controls="collapse77">
                                    Q. What is the fee structure of M.Sc Botany ?
                                </button>
                            </h2>
                            <div id="collapse77" class="accordion-collapse collapse" aria-labelledby="heading77"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading78">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse78" aria-expanded="false" aria-controls="collapse78">
                                    Q. What is the eligibility criteria for M.Sc Botany ?
                                </button>
                            </h2>
                            <div id="collapse78" class="accordion-collapse collapse" aria-labelledby="heading78"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc. from any recognized University/Institution in relevant
                                        field Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects
                                        opted, from any recognized University/Institution or equivalent grade (5% relaxation to
                                        SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading79">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse79" aria-expanded="false" aria-controls="collapse79">
                                    Q. What is the selection criteria for M.Sc Botany ?
                                </button>
                            </h2>
                            <div id="collapse79" class="accordion-collapse collapse" aria-labelledby="heading79"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading80">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse80" aria-expanded="false" aria-controls="collapse80">
                                    Q. What is the fee structure of M.Sc Zoology ?
                                </button>
                            </h2>
                            <div id="collapse80" class="accordion-collapse collapse" aria-labelledby="heading80"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading81">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse81" aria-expanded="false" aria-controls="collapse81">
                                    Q. What is the eligibility criteria for M.Sc Zoology ?
                                </button>
                            </h2>
                            <div id="collapse81" class="accordion-collapse collapse" aria-labelledby="heading81"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc.(H) from any recognized University/Institution in relevant
                                        field Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects
                                        opted, from any recognized University/Institution or equivalent grade (5% relaxation to
                                        SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading82">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse82" aria-expanded="false" aria-controls="collapse82">
                                    Q. What is the selection criteria for M.Sc Zoology ?
                                </button>
                            </h2>
                            <div id="collapse82" class="accordion-collapse collapse" aria-labelledby="heading82"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading83">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse83" aria-expanded="false" aria-controls="collapse83">
                                    Q. What is the fee structure of B.Sc Botany ?
                                </button>
                            </h2>
                            <div id="collapse83" class="accordion-collapse collapse" aria-labelledby="heading83"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading84">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse84" aria-expanded="false" aria-controls="collapse84">
                                    Q. What is the eligibility criteria for B.Sc Botany ?
                                </button>
                            </h2>
                            <div id="collapse84" class="accordion-collapse collapse" aria-labelledby="heading84"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading85">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse85" aria-expanded="false" aria-controls="collapse85">
                                    Q. What is the selection criteria for B.Sc Botany ?
                                </button>
                            </h2>
                            <div id="collapse85" class="accordion-collapse collapse" aria-labelledby="heading85"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading86">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse86" aria-expanded="false" aria-controls="collapse86">
                                    Q. What is the fee structure of B.Sc Zoology ?
                                </button>
                            </h2>
                            <div id="collapse86" class="accordion-collapse collapse" aria-labelledby="heading86"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading87">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse87" aria-expanded="false" aria-controls="collapse87">
                                    Q. What is the eligibility criteria for B.Sc.Zoology ?
                                </button>
                            </h2>
                            <div id="collapse87" class="accordion-collapse collapse" aria-labelledby="heading87"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading88">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse88" aria-expanded="false" aria-controls="collapse88">
                                    Q. What is the selection criteria for B.Sc Zoology ?
                                </button>
                            </h2>
                            <div id="collapse88" class="accordion-collapse collapse" aria-labelledby="heading88"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading89">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse89" aria-expanded="false" aria-controls="collapse89">
                                    Q. What is the fee structure of B.Sc Forensic Science ?
                                </button>
                            </h2>
                            <div id="collapse89" class="accordion-collapse collapse" aria-labelledby="heading89"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading90">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse90" aria-expanded="false" aria-controls="collapse90">
                                    Q. What is the selection criteria of B.Sc Forensic Science ?
                                </button>
                            </h2>
                            <div id="collapse90" class="accordion-collapse collapse" aria-labelledby="heading90"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in last examination
                                        followed by Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading91">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse91" aria-expanded="false" aria-controls="collapse91">
                                    Q. What is the fee structure of M.Sc Forensic Science ?
                                </button>
                            </h2>
                            <div id="collapse91" class="accordion-collapse collapse" aria-labelledby="heading91"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading92">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse92" aria-expanded="false" aria-controls="collapse92">
                                    Q. What is the selection criteria of M.Sc Forensic Science ?
                                </button>
                            </h2>
                            <div id="collapse92" class="accordion-collapse collapse" aria-labelledby="heading92"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading93">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse93" aria-expanded="false" aria-controls="collapse93">
                                    Q. Does RGU provides Forestry Course?
                                </button>
                            </h2>
                            <div id="collapse93" class="accordion-collapse collapse" aria-labelledby="heading93"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, RGU provides Forestry Course, both B.Sc Forestry and M.Sc
                                        Forestry.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading94">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse94" aria-expanded="false" aria-controls="collapse94">
                                    Q. What is the fee structure of B.Sc Forestry?
                                </button>
                            </h2>
                            <div id="collapse94" class="accordion-collapse collapse" aria-labelledby="heading94"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading95">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse95" aria-expanded="false" aria-controls="collapse95">
                                    Q. What is the eligibility criteria for B.Sc Forestry?
                                </button>
                            </h2>
                            <div id="collapse95" class="accordion-collapse collapse" aria-labelledby="heading95"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading96">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse96" aria-expanded="false" aria-controls="collapse96">
                                    Q. What is the fee structure of M.Sc Forestry?
                                </button>
                            </h2>
                            <div id="collapse96" class="accordion-collapse collapse" aria-labelledby="heading96"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading97">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse97" aria-expanded="false" aria-controls="collapse97">
                                    Q. What is the eligibility criteria for M.Sc Forestry?
                                </button>
                            </h2>
                            <div id="collapse97" class="accordion-collapse collapse" aria-labelledby="heading97"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc. in Agriculture/Forestry/Horticulture
                                        /Biology or related field with minimum 50%
                                        marks in aggregate or equivalent grade from any
                                        recognized University/Institution (5% relaxation
                                        to SC/ST/OBC – Non Creamy Layer)"</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading98">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse98" aria-expanded="false" aria-controls="collapse98">
                                    Q. What is the fee structure of M.Sc Bio-Technology ?
                                </button>
                            </h2>
                            <div id="collapse98" class="accordion-collapse collapse" aria-labelledby="heading98"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading99">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse99" aria-expanded="false" aria-controls="collapse99">
                                    Q. What is the eligibility criteria for M.Sc Bio-Technology ?
                                </button>
                            </h2>
                            <div id="collapse99" class="accordion-collapse collapse" aria-labelledby="heading99"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s degree in any branch of Biology (B.Sc. in
                                        Botany/Zoology/Bio-Technology/Food Science/Nutrition/Agriculture Sciences etc.), Medical
                                        Sciences (MBBS/B.Pharm), Veterinary Sciences (B.V.Sc.)/Bio-Tech/Biomedical Eng.
                                        (B.E/B.Tech.) or Ayurveda (BAMS) from any recognized University/Institution with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading100">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse100" aria-expanded="false" aria-controls="collapse100">
                                    Q. What is the selection criteria for M.Sc Bio-Technology ?
                                </button>
                            </h2>
                            <div id="collapse100" class="accordion-collapse collapse" aria-labelledby="heading100"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading101">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse101" aria-expanded="false" aria-controls="collapse101">
                                    Q. What is the fee structure of M.Sc Bio-Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse101" class="accordion-collapse collapse" aria-labelledby="heading101"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading102">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse102" aria-expanded="false" aria-controls="collapse102">
                                    Q. What is the eligibility criteria for M.Sc Bio-Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse102" class="accordion-collapse collapse" aria-labelledby="heading102"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s degree in any branch of Biology (B.Sc. in
                                        Bio-Chemistry/Botany/Zoology/Bio-Technology/Food Science/Nutrition/Agriculture Sciences
                                        etc.), Medical Sciences (MBBS/B.Pharm), Veterinary Sciences
                                        (B.V.Sc.)/Bio-Tech/Biomedical Eng. (B.E/B.Tech.), Ayurveda (BAMS) or Chemistry from any
                                        recognized University/Institution with minimum 50% marks in aggregate or equivalent
                                        grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading103">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse103" aria-expanded="false" aria-controls="collapse103">
                                    Q. What is the selection criteria for M.Sc Bio-Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse103" class="accordion-collapse collapse" aria-labelledby="heading103"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading104">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse104" aria-expanded="false" aria-controls="collapse104">
                                    Q. What is the fee structure of M.Sc Micro-Biology ?
                                </button>
                            </h2>
                            <div id="collapse104" class="accordion-collapse collapse" aria-labelledby="heading104"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading105">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse105" aria-expanded="false" aria-controls="collapse105">
                                    Q. What is the eligibility criteria for M.Sc Micro-Biology ?
                                </button>
                            </h2>
                            <div id="collapse105" class="accordion-collapse collapse" aria-labelledby="heading105"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. B.Sc.(H) from any recognized University/Institution in relevant
                                        field Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in subject opted,
                                        from any recognized University/Institution or equivalent grade (5% relaxation to
                                        SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading106">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse106" aria-expanded="false" aria-controls="collapse106">
                                    Q. What is the selection criteria for M.Sc Micro-Biology ?
                                </button>
                            </h2>
                            <div id="collapse106" class="accordion-collapse collapse" aria-labelledby="heading106"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading107">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse107" aria-expanded="false" aria-controls="collapse107">
                                    Q. What is the fee structure of B.Sc Bio-Technology ?
                                </button>
                            </h2>
                            <div id="collapse107" class="accordion-collapse collapse" aria-labelledby="heading107"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading108">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse108" aria-expanded="false" aria-controls="collapse108">
                                    Q. What is the eligibility criteria for B.Sc Bio-Technology ?
                                </button>
                            </h2>
                            <div id="collapse108" class="accordion-collapse collapse" aria-labelledby="heading108"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading109">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse109" aria-expanded="false" aria-controls="collapse109">
                                    Q. What is the selection criteria for B.Sc Bio-Technology ?
                                </button>
                            </h2>
                            <div id="collapse109" class="accordion-collapse collapse" aria-labelledby="heading109"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in the last examination
                                        followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading110">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse110" aria-expanded="false" aria-controls="collapse110">
                                    Q. What is the fee structure of B.Sc. Bio-Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse110" class="accordion-collapse collapse" aria-labelledby="heading110"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading111">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse111" aria-expanded="false" aria-controls="collapse111">
                                    Q. What is the eligibility criteria for B.Sc. Bio-Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse111" class="accordion-collapse collapse" aria-labelledby="heading111"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading112">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse112" aria-expanded="false" aria-controls="collapse112">
                                    Q. What is the selection criteria for B.Sc. Bio-Chemistry ?
                                </button>
                            </h2>
                            <div id="collapse112" class="accordion-collapse collapse" aria-labelledby="heading112"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on the overall performance in the last
                                        examination followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading113">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse113" aria-expanded="false" aria-controls="collapse113">
                                    Q. What is the fee structure of B.Sc Microbiology ?
                                </button>
                            </h2>
                            <div id="collapse113" class="accordion-collapse collapse" aria-labelledby="heading113"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading114">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse114" aria-expanded="false" aria-controls="collapse114">
                                    Q. What is the eligibility criteria for B.Sc Microbiology ?
                                </button>
                            </h2>
                            <div id="collapse114" class="accordion-collapse collapse" aria-labelledby="heading114"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in
                                        subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading115">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse115" aria-expanded="false" aria-controls="collapse115">
                                    Q. What is the selection criteria for B.Sc Microbiology ?
                                </button>
                            </h2>
                            <div id="collapse115" class="accordion-collapse collapse" aria-labelledby="heading115"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Selection is based on overall performance in the last examination
                                        followed by a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading116">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse116" aria-expanded="false" aria-controls="collapse116">
                                    Q. What is the fee structure of B.Sc Food Technology ?
                                </button>
                            </h2>
                            <div id="collapse116" class="accordion-collapse collapse" aria-labelledby="heading116"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading117">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse117" aria-expanded="false" aria-controls="collapse117">
                                    Q. What are the career prospects after doing M.Sc. Biochemistry?
                                </button>
                            </h2>
                            <div id="collapse117" class="accordion-collapse collapse" aria-labelledby="heading117"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Due to its multidisciplinary nature, the course allows students
                                        to enter different research areas including interdisciplinary research areas like
                                        bioengineering and tissue engineering and thus open a lot of opportunities for students
                                        to join as PhD Students, junior research fellow in research institutes and universities.
                                        Biochemists are in great demand in research institutes, government departments, forensic
                                        laboratories and environment agencies. Students can also apply in the private sector
                                        like pharmaceutical, food, biotechnology, water and agricultural industries. This course
                                        also encourages students to take research and teaching as a career and work as lecturer
                                        and assistant professor.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading118">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse118" aria-expanded="false" aria-controls="collapse118">
                                    Q. What are the career prospects after completing M.Sc. Biotechnology?
                                </button>
                            </h2>
                            <div id="collapse118" class="accordion-collapse collapse" aria-labelledby="heading118"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Postgraduates are hired in industries such as pharmaceuticals,
                                        manufacturing, biotechnology, research organizations, FMCG and as teachers in colleges
                                        and universities. After completing the course students can also work as agricultural
                                        scientist, bioinformatics specialist, environmental/food biotechnologist, genetic
                                        engineer, pharmacognosist, proteome and genome analyst. Postgraduates are also
                                        encouraged to undertake research as a career.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading119">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse119" aria-expanded="false" aria-controls="collapse119">
                                    Q. What are the career prospects after completing M.Sc. Microbiology ?
                                </button>
                            </h2>
                            <div id="collapse119" class="accordion-collapse collapse" aria-labelledby="heading119"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Microbiology as a field has seen a radical growth in recent
                                        years. Owing to its rapid expansion, a number of job opportunities open up for
                                        microbiology graduates every year in industries such as food industries, pharmaceutical
                                        industries, hospitals, chemical industries etc. Some of the job profiles for
                                        microbiology graduates are Microbiologist, Medical Writer, Clinical Researcher,
                                        Molecular Biologist, Medical Officer, Nutritionist, Lecturer etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading120">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse120" aria-expanded="false" aria-controls="collapse120">
                                    Q. What is the eligibility criteria for B.Sc Food Technology ?
                                </button>
                            </h2>
                            <div id="collapse120" class="accordion-collapse collapse" aria-labelledby="heading120"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with English as one of the subjects and Physics, Chemistry and Mathematics
                                        /Biology as compulsory subjects with minimum 50% marks in aggregate or equivalent grade
                                        (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading121">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse121" aria-expanded="false" aria-controls="collapse121">
                                    Q. What is the selection criteria for B.Sc Food Technology ?
                                </button>
                            </h2>
                            <div id="collapse121" class="accordion-collapse collapse" aria-labelledby="heading121"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading122">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse122" aria-expanded="false" aria-controls="collapse122">
                                    Q. What is the fee structure of M.Sc Food Technology ?
                                </button>
                            </h2>
                            <div id="collapse122" class="accordion-collapse collapse" aria-labelledby="heading122"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading123">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse123" aria-expanded="false" aria-controls="collapse123">
                                    Q. What is the selection criteria of M.Sc Food Technology ?
                                </button>
                            </h2>
                            <div id="collapse123" class="accordion-collapse collapse" aria-labelledby="heading123"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading124">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse124" aria-expanded="false" aria-controls="collapse124">
                                    Q. What is the fee structure of M.Sc. Geography ?
                                </button>
                            </h2>
                            <div id="collapse124" class="accordion-collapse collapse" aria-labelledby="heading124"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading125">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse125" aria-expanded="false" aria-controls="collapse125">
                                    Q. What is the eligibility criteria for M.Sc. Geography ?
                                </button>
                            </h2>
                            <div id="collapse125" class="accordion-collapse collapse" aria-labelledby="heading125"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in Science from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading126">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse126" aria-expanded="false" aria-controls="collapse126">
                                    Q. What is the selection criteria for M.Sc. Geography ?
                                </button>
                            </h2>
                            <div id="collapse126" class="accordion-collapse collapse" aria-labelledby="heading126"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading127">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse127" aria-expanded="false" aria-controls="collapse127">
                                    Q. What is the fee structure of MA Geography ?
                                </button>
                            </h2>
                            <div id="collapse127" class="accordion-collapse collapse" aria-labelledby="heading127"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading128">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse128" aria-expanded="false" aria-controls="collapse128">
                                    Q. What is the eligibility criteria for MA Geography ?
                                </button>
                            </h2>
                            <div id="collapse128" class="accordion-collapse collapse" aria-labelledby="heading128"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in Geography / Major from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer) OR Bachelor’s Degree in any stream with
                                        minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading129">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse129" aria-expanded="false" aria-controls="collapse129">
                                    Q. What is the selection criteria for MA Geography ?
                                </button>
                            </h2>
                            <div id="collapse129" class="accordion-collapse collapse" aria-labelledby="heading129"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading130">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse130" aria-expanded="false" aria-controls="collapse130">
                                    Q. What is the fee structure of M.Sc. Geology ?
                                </button>
                            </h2>
                            <div id="collapse130" class="accordion-collapse collapse" aria-labelledby="heading130"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading131">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse131" aria-expanded="false" aria-controls="collapse131">
                                    Q. What is the eligibility criteria for M.Sc. Geology ?
                                </button>
                            </h2>
                            <div id="collapse131" class="accordion-collapse collapse" aria-labelledby="heading131"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor's Degree with Geology Honours or a bachelor’s degree
                                        with Geology as a subject from any recognized University/Institution with minimum 50%
                                        marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading132">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse132" aria-expanded="false" aria-controls="collapse132">
                                    Q. What is the selection criteria for M.Sc. Geology ?
                                </button>
                            </h2>
                            <div id="collapse132" class="accordion-collapse collapse" aria-labelledby="heading132"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading133">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse133" aria-expanded="false" aria-controls="collapse133">
                                    Q. What is the fee structure of M.Sc. Geoinformatics ?
                                </button>
                            </h2>
                            <div id="collapse133" class="accordion-collapse collapse" aria-labelledby="heading133"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading134">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse134" aria-expanded="false" aria-controls="collapse134">
                                    Q. What is the selection criteria for M.Sc. Geoinformatics?
                                </button>
                            </h2>
                            <div id="collapse134" class="accordion-collapse collapse" aria-labelledby="heading134"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading135">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse135" aria-expanded="false" aria-controls="collapse135">
                                    Q. What is the fee structure of B.Sc.Geography ?
                                </button>
                            </h2>
                            <div id="collapse135" class="accordion-collapse collapse" aria-labelledby="heading135"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading136">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse136" aria-expanded="false" aria-controls="collapse136">
                                    Q. What is the eligibility criteria for B.Sc.Geography ?
                                </button>
                            </h2>
                            <div id="collapse136" class="accordion-collapse collapse" aria-labelledby="heading136"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized
                                        board/council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to
                                        SC/ST/OBC-Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading137">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse137" aria-expanded="false" aria-controls="collapse137">
                                    Q. What is the selection criteria for B.Sc.Geography ?
                                </button>
                            </h2>
                            <div id="collapse137" class="accordion-collapse collapse" aria-labelledby="heading137"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading138">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse138" aria-expanded="false" aria-controls="collapse138">
                                    Q. What is the fee structure of BA Geography ?
                                </button>
                            </h2>
                            <div id="collapse138" class="accordion-collapse collapse" aria-labelledby="heading138"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading139">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse139" aria-expanded="false" aria-controls="collapse139">
                                    Q. What is the eligibility criteria for BA Geography ?
                                </button>
                            </h2>
                            <div id="collapse139" class="accordion-collapse collapse" aria-labelledby="heading139"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in Arts or equivalent from a recognized board/council with
                                        minimum 50% marks in aggregate or equivalent grade (5% relaxation to
                                        SC/ST/OBC-Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading140">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse140" aria-expanded="false" aria-controls="collapse140">
                                    Q. What is the selection criteria for BA Geography ?
                                </button>
                            </h2>
                            <div id="collapse140" class="accordion-collapse collapse" aria-labelledby="heading140"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading141">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse141" aria-expanded="false" aria-controls="collapse141">
                                    Q. What is the fee structure of B.Sc. Geology ?
                                </button>
                            </h2>
                            <div id="collapse141" class="accordion-collapse collapse" aria-labelledby="heading141"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading142">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse142" aria-expanded="false" aria-controls="collapse142">
                                    Q. What is the eligibility criteria for B.Sc. Geology ?
                                </button>
                            </h2>
                            <div id="collapse142" class="accordion-collapse collapse" aria-labelledby="heading142"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to
                                        SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading143">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse143" aria-expanded="false" aria-controls="collapse143">
                                    Q. What is the selection criteria for B.Sc. Geology ?
                                </button>
                            </h2>
                            <div id="collapse143" class="accordion-collapse collapse" aria-labelledby="heading143"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading144">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse144" aria-expanded="false" aria-controls="collapse144">
                                    Q. What is the fee structure of MA (J & MC) ?
                                </button>
                            </h2>
                            <div id="collapse144" class="accordion-collapse collapse" aria-labelledby="heading144"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 51,500/- Or Yearly Payment - 100000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading145">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse145" aria-expanded="false" aria-controls="collapse145">
                                    Q. What is the eligibility criteria for MA (J & MC) ?
                                </button>
                            </h2>
                            <div id="collapse145" class="accordion-collapse collapse" aria-labelledby="heading145"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in relevant field from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC-Non-Creamy Layer).OR A Bachelor’s Degree in any field with
                                        1-year diploma in relevant field, from any recognized University/Institution with
                                        minimum 50% marks in aggregate or equivalent grade (5% relaxation to
                                        SC/ST/OBC-Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading146">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse146" aria-expanded="false" aria-controls="collapse146">
                                    Q. What is the selection criteria for MA (J & MC) ?
                                </button>
                            </h2>
                            <div id="collapse146" class="accordion-collapse collapse" aria-labelledby="heading146"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading147">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse147" aria-expanded="false" aria-controls="collapse147">
                                    Q. What are some of the highlights of M.A. in Communication at RGU ?
                                </button>
                            </h2>
                            <div id="collapse147" class="accordion-collapse collapse" aria-labelledby="heading147"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The intensive two-years/four-semester course of MA in Mass
                                        Communication allows a systematic progression with practical work and theory classes
                                        that helps students to experience the full range of technical expertise, conceptual
                                        skills and artistic expression required to become accomplished media practitioners.
                                        Though it is a comprehensive course comprising of Screenwriting, Photography, Sound &
                                        Radio study, Television Production, New Media Storytelling and Digital Media Arts, the
                                        revised curriculum encourages the students to adopt a creative, professional, and
                                        scholarly approach to both traditional and new media practices. The reinvented
                                        curriculum engages students with the rapidly transforming mediascape while retaining the
                                        MCRC tradition of combining professional media expertise with social commitment.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading148">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse148" aria-expanded="false" aria-controls="collapse148">
                                    Q. What is the fee structure of BA (J & MC)?
                                </button>
                            </h2>
                            <div id="collapse148" class="accordion-collapse collapse" aria-labelledby="heading148"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 59000/- Or Yearly Payment - 110000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading149">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse149" aria-expanded="false" aria-controls="collapse149">
                                    Q. What is the eligibility criteria for BA (J & MC)?
                                </button>
                            </h2>
                            <div id="collapse149" class="accordion-collapse collapse" aria-labelledby="heading149"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading150">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse150" aria-expanded="false" aria-controls="collapse150">
                                    Q. What is the selection criteria for BA (J & MC)?
                                </button>
                            </h2>
                            <div id="collapse150" class="accordion-collapse collapse" aria-labelledby="heading150"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading151">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse151" aria-expanded="false" aria-controls="collapse151">
                                    Q. What is the fee structure of M.Sc. Animation and Visual Effects?
                                </button>
                            </h2>
                            <div id="collapse151" class="accordion-collapse collapse" aria-labelledby="heading151"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading152">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse152" aria-expanded="false" aria-controls="collapse152">
                                    Q. What is the selection criteria for M.Sc. Animation and Visual Effects ?
                                </button>
                            </h2>
                            <div id="collapse152" class="accordion-collapse collapse" aria-labelledby="heading152"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading153">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse153" aria-expanded="false" aria-controls="collapse153">
                                    Q. What is the fee structure of B.Sc Animation and Visual Effects?
                                </button>
                            </h2>
                            <div id="collapse153" class="accordion-collapse collapse" aria-labelledby="heading153"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading154">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse154" aria-expanded="false" aria-controls="collapse154">
                                    Q. What is the eligibility criteria for B.Sc Animation and Visual Effects?
                                </button>
                            </h2>
                            <div id="collapse154" class="accordion-collapse collapse" aria-labelledby="heading154"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in any stream or equivalent from a recognized Board /Council
                                        with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC -
                                        Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading155">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse155" aria-expanded="false" aria-controls="collapse155">
                                    Q. What is the selection criteria for B.Sc.Animation and Visual Effects?
                                </button>
                            </h2>
                            <div id="collapse155" class="accordion-collapse collapse" aria-labelledby="heading155"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading156">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse156" aria-expanded="false" aria-controls="collapse156">
                                    Q. What is the fee structure of MA - Psychology ?
                                </button>
                            </h2>
                            <div id="collapse156" class="accordion-collapse collapse" aria-labelledby="heading156"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading157">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse157" aria-expanded="false" aria-controls="collapse157">
                                    Q. What is the eligibility criteria for MA - Psychology ?
                                </button>
                            </h2>
                            <div id="collapse157" class="accordion-collapse collapse" aria-labelledby="heading157"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in any field from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading158">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse158" aria-expanded="false" aria-controls="collapse158">
                                    Q. What is the selection criteria for MA - Psychology ?
                                </button>
                            </h2>
                            <div id="collapse158" class="accordion-collapse collapse" aria-labelledby="heading158"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading159">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse159" aria-expanded="false" aria-controls="collapse159">
                                    Q. What is the fee structure of MA - Clinical Psychology ?
                                </button>
                            </h2>
                            <div id="collapse159" class="accordion-collapse collapse" aria-labelledby="heading159"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading160">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse160" aria-expanded="false" aria-controls="collapse160">
                                    Q. What is the eligibility criteria for MA - Clinical Psychology ?
                                </button>
                            </h2>
                            <div id="collapse160" class="accordion-collapse collapse" aria-labelledby="heading160"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree with Psychology Honors or a Bachelor's Degree
                                        with Psychology as Major/Minor (minimum 12 credits) from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading161">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse161" aria-expanded="false" aria-controls="collapse161">
                                    Q. What is the selection criteria for MA - Clinical Psychology ?
                                </button>
                            </h2>
                            <div id="collapse161" class="accordion-collapse collapse" aria-labelledby="heading161"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading162">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse162" aria-expanded="false" aria-controls="collapse162">
                                    Q. What is the fee structure of BA - Psychology ?
                                </button>
                            </h2>
                            <div id="collapse162" class="accordion-collapse collapse" aria-labelledby="heading162"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading163">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse163" aria-expanded="false" aria-controls="collapse163">
                                    Q. What is the eligibility criteria for BA - Psychology ?
                                </button>
                            </h2>
                            <div id="collapse163" class="accordion-collapse collapse" aria-labelledby="heading163"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading164">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse164" aria-expanded="false" aria-controls="collapse164">
                                    Q. What is the selection criteria for BA- Psychology ?
                                </button>
                            </h2>
                            <div id="collapse164" class="accordion-collapse collapse" aria-labelledby="heading164"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading165">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse165" aria-expanded="false" aria-controls="collapse165">
                                    Q. What is the fee structure of BA - Applied Psychology ?
                                </button>
                            </h2>
                            <div id="collapse165" class="accordion-collapse collapse" aria-labelledby="heading165"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading166">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse166" aria-expanded="false" aria-controls="collapse166">
                                    Q. What is the eligibility criteria for BA - Applied Psychology ?
                                </button>
                            </h2>
                            <div id="collapse166" class="accordion-collapse collapse" aria-labelledby="heading166"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading167">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse167" aria-expanded="false" aria-controls="collapse167">
                                    Q. What is the selection criteria for BA - Applied Psychology ?
                                </button>
                            </h2>
                            <div id="collapse167" class="accordion-collapse collapse" aria-labelledby="heading167"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading168">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse168" aria-expanded="false" aria-controls="collapse168">
                                    Q. What is the fee structure of MA - English ?
                                </button>
                            </h2>
                            <div id="collapse168" class="accordion-collapse collapse" aria-labelledby="heading168"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading169">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse169" aria-expanded="false" aria-controls="collapse169">
                                    Q. What is the eligibility criteria for MA - English ?
                                </button>
                            </h2>
                            <div id="collapse169" class="accordion-collapse collapse" aria-labelledby="heading169"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree with English Honours/ Major from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer) Or Bachelor’s Degree in any stream with
                                        minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading170">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse170" aria-expanded="false" aria-controls="collapse170">
                                    Q. What is the selection criteria for MA - English ?
                                </button>
                            </h2>
                            <div id="collapse170" class="accordion-collapse collapse" aria-labelledby="heading170"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading171">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse171" aria-expanded="false" aria-controls="collapse171">
                                    Q. What is the fee structure of BA English ?
                                </button>
                            </h2>
                            <div id="collapse171" class="accordion-collapse collapse" aria-labelledby="heading171"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading172">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse172" aria-expanded="false" aria-controls="collapse172">
                                    Q. What is the eligibility criteria for BA English ?
                                </button>
                            </h2>
                            <div id="collapse172" class="accordion-collapse collapse" aria-labelledby="heading172"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading173">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse173" aria-expanded="false" aria-controls="collapse173">
                                    Q. What is the selection criteria for BA English ?
                                </button>
                            </h2>
                            <div id="collapse173" class="accordion-collapse collapse" aria-labelledby="heading173"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading174">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse174" aria-expanded="false" aria-controls="collapse174">
                                    Q. What is the fee structure of MSW ?
                                </button>
                            </h2>
                            <div id="collapse174" class="accordion-collapse collapse" aria-labelledby="heading174"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading175">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse175" aria-expanded="false" aria-controls="collapse175">
                                    Q. What is the eligibility criteria for MSW ?
                                </button>
                            </h2>
                            <div id="collapse175" class="accordion-collapse collapse" aria-labelledby="heading175"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in any field from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading176">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse176" aria-expanded="false" aria-controls="collapse176">
                                    Q. What is the selection criteria for MSW ?
                                </button>
                            </h2>
                            <div id="collapse176" class="accordion-collapse collapse" aria-labelledby="heading176"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading177">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse177" aria-expanded="false" aria-controls="collapse177">
                                    Q. What are the specializations provided in MSW?
                                </button>
                            </h2>
                            <div id="collapse177" class="accordion-collapse collapse" aria-labelledby="heading177"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The specializations under MSW are Community Development and
                                        Family & Child Welfare</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading178">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse178" aria-expanded="false" aria-controls="collapse178">
                                    Q. What is the fee structure of BSW ?
                                </button>
                            </h2>
                            <div id="collapse178" class="accordion-collapse collapse" aria-labelledby="heading178"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading179">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse179" aria-expanded="false" aria-controls="collapse179">
                                    Q. What is the eligibility criteria for BSW ?
                                </button>
                            </h2>
                            <div id="collapse179" class="accordion-collapse collapse" aria-labelledby="heading179"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/ OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading180">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse180" aria-expanded="false" aria-controls="collapse180">
                                    Q. What is the selection criteria for BSW ?
                                </button>
                            </h2>
                            <div id="collapse180" class="accordion-collapse collapse" aria-labelledby="heading180"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading181">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse181" aria-expanded="false" aria-controls="collapse181">
                                    Q. What is the fee structure of BA Sociology ?
                                </button>
                            </h2>
                            <div id="collapse181" class="accordion-collapse collapse" aria-labelledby="heading181"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading182">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse182" aria-expanded="false" aria-controls="collapse182">
                                    Q. What is the eligibility criteria for BA Sociology ?
                                </button>
                            </h2>
                            <div id="collapse182" class="accordion-collapse collapse" aria-labelledby="heading182"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/ OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading183">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse183" aria-expanded="false" aria-controls="collapse183">
                                    Q. What is the selection criteria for BA Sociology ?
                                </button>
                            </h2>
                            <div id="collapse183" class="accordion-collapse collapse" aria-labelledby="heading183"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading184">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse184" aria-expanded="false" aria-controls="collapse184">
                                    Q. What is the fee structure of BA Economics ?
                                </button>
                            </h2>
                            <div id="collapse184" class="accordion-collapse collapse" aria-labelledby="heading184"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading185">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse185" aria-expanded="false" aria-controls="collapse185">
                                    Q. What is the eligibility criteria for BA Economics ?
                                </button>
                            </h2>
                            <div id="collapse185" class="accordion-collapse collapse" aria-labelledby="heading185"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ ST/ OBC – Non-Creamy
                                        Layer) along with Mathematics or Economics as one of the compulsory subjects.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading186">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse186" aria-expanded="false" aria-controls="collapse186">
                                    Q. What is the selection criteria for BA Economics ?
                                </button>
                            </h2>
                            <div id="collapse186" class="accordion-collapse collapse" aria-labelledby="heading186"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading187">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse187" aria-expanded="false" aria-controls="collapse187">
                                    Q. What is the fee structure of BA Administrative Service ?
                                </button>
                            </h2>
                            <div id="collapse187" class="accordion-collapse collapse" aria-labelledby="heading187"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading188">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse188" aria-expanded="false" aria-controls="collapse188">
                                    Q. What is the eligibility criteria for BA Administrative Service ?
                                </button>
                            </h2>
                            <div id="collapse188" class="accordion-collapse collapse" aria-labelledby="heading188"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading189">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse189" aria-expanded="false" aria-controls="collapse189">
                                    Q. What is the selection criteria for BA Administrative Service ?
                                </button>
                            </h2>
                            <div id="collapse189" class="accordion-collapse collapse" aria-labelledby="heading189"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading190">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse190" aria-expanded="false" aria-controls="collapse190">
                                    Q. What is the fee structure of BA Public Administration?
                                </button>
                            </h2>
                            <div id="collapse190" class="accordion-collapse collapse" aria-labelledby="heading190"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading191">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse191" aria-expanded="false" aria-controls="collapse191">
                                    Q. What is the eligibility criteria for BA Public Administration ?
                                </button>
                            </h2>
                            <div id="collapse191" class="accordion-collapse collapse" aria-labelledby="heading191"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading192">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse192" aria-expanded="false" aria-controls="collapse192">
                                    Q. What is the selection criteria for BA Public Administration ?
                                </button>
                            </h2>
                            <div id="collapse192" class="accordion-collapse collapse" aria-labelledby="heading192"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading193">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse193" aria-expanded="false" aria-controls="collapse193">
                                    Q. What is the fee structure of MA Public Administration ?
                                </button>
                            </h2>
                            <div id="collapse193" class="accordion-collapse collapse" aria-labelledby="heading193"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading194">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse194" aria-expanded="false" aria-controls="collapse194">
                                    Q. What is the eligibility criteria for MA Public Administration ?
                                </button>
                            </h2>
                            <div id="collapse194" class="accordion-collapse collapse" aria-labelledby="heading194"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in any field from recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading195">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse195" aria-expanded="false" aria-controls="collapse195">
                                    Q. What is the selection criteria for MA Public Administration ?
                                </button>
                            </h2>
                            <div id="collapse195" class="accordion-collapse collapse" aria-labelledby="heading195"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading196">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse196" aria-expanded="false" aria-controls="collapse196">
                                    Q. What is the fee structure of MA Pol.Science ?
                                </button>
                            </h2>
                            <div id="collapse196" class="accordion-collapse collapse" aria-labelledby="heading196"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading197">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse197" aria-expanded="false" aria-controls="collapse197">
                                    Q. What is the eligibility criteria for MA Pol.Science ?
                                </button>
                            </h2>
                            <div id="collapse197" class="accordion-collapse collapse" aria-labelledby="heading197"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree with Political Science Honours/ Major from any
                                        recognized University/Institution with minimum 50% marks in aggregate or equivalent
                                        grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) OR Bachelor’s Degree in any stream
                                        with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading198">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse198" aria-expanded="false" aria-controls="collapse198">
                                    Q. What is the selection criteria for MA Pol.Science ?
                                </button>
                            </h2>
                            <div id="collapse198" class="accordion-collapse collapse" aria-labelledby="heading198"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading199">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse199" aria-expanded="false" aria-controls="collapse199">
                                    Q. What is the fee structure of MA History ?
                                </button>
                            </h2>
                            <div id="collapse199" class="accordion-collapse collapse" aria-labelledby="heading199"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading200">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse200" aria-expanded="false" aria-controls="collapse200">
                                    Q. What is the eligibility criteria for MA History ?
                                </button>
                            </h2>
                            <div id="collapse200" class="accordion-collapse collapse" aria-labelledby="heading200"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree with History Honours/ Major from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer) OR Bachelor’s Degree in any stream with
                                        minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading201">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse201" aria-expanded="false" aria-controls="collapse201">
                                    Q. What is the selection criteria for MA History ?
                                </button>
                            </h2>
                            <div id="collapse201" class="accordion-collapse collapse" aria-labelledby="heading201"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading202">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse202" aria-expanded="false" aria-controls="collapse202">
                                    Q. What is the fee structure of BA Pol.Science ?
                                </button>
                            </h2>
                            <div id="collapse202" class="accordion-collapse collapse" aria-labelledby="heading202"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading203">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse203" aria-expanded="false" aria-controls="collapse203">
                                    Q. What is the eligibility criteria for BA Pol.Science ?
                                </button>
                            </h2>
                            <div id="collapse203" class="accordion-collapse collapse" aria-labelledby="heading203"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading204">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse204" aria-expanded="false" aria-controls="collapse204">
                                    Q. What is the selection criteria for BA Pol.Science ?
                                </button>
                            </h2>
                            <div id="collapse204" class="accordion-collapse collapse" aria-labelledby="heading204"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading205">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse205" aria-expanded="false" aria-controls="collapse205">
                                    Q. What is the fee structure of BA History ?
                                </button>
                            </h2>
                            <div id="collapse205" class="accordion-collapse collapse" aria-labelledby="heading205"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading206">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse206" aria-expanded="false" aria-controls="collapse206">
                                    Q. What is the eligibility criteria for BA History ?
                                </button>
                            </h2>
                            <div id="collapse206" class="accordion-collapse collapse" aria-labelledby="heading206"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading207">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse207" aria-expanded="false" aria-controls="collapse207">
                                    Q. What is the selection criteria for BA History ?
                                </button>
                            </h2>
                            <div id="collapse207" class="accordion-collapse collapse" aria-labelledby="heading207"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in the last examination followed by
                                        a Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading208">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse208" aria-expanded="false" aria-controls="collapse208">
                                    Q. What is the fee structure of an LLM course ?
                                </button>
                            </h2>
                            <div id="collapse208" class="accordion-collapse collapse" aria-labelledby="heading208"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 65000/- Or Yearly Payment - 1,30,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading209">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse209" aria-expanded="false" aria-controls="collapse209">
                                    Q. What is the eligibility criteria for an LLM course ?
                                </button>
                            </h2>
                            <div id="collapse209" class="accordion-collapse collapse" aria-labelledby="heading209"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in Law, from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer).NO AGE LIMIT</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading210">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse210" aria-expanded="false" aria-controls="collapse210">
                                    Q. What is the selection criteria of the LLM course ?
                                </button>
                            </h2>
                            <div id="collapse210" class="accordion-collapse collapse" aria-labelledby="heading210"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading211">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse211" aria-expanded="false" aria-controls="collapse211">
                                    Q. What is the fee structure of LLM Morning Shift course ?
                                </button>
                            </h2>
                            <div id="collapse211" class="accordion-collapse collapse" aria-labelledby="heading211"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 75000/- Or Yearly Payment - 1,50,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading212">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse212" aria-expanded="false" aria-controls="collapse212">
                                    Q. What is the eligibility criteria for the LLM Morning Shift course ?
                                </button>
                            </h2>
                            <div id="collapse212" class="accordion-collapse collapse" aria-labelledby="heading212"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in Law, from any recognized
                                        University/Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer).NO AGE LIMIT</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading213">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse213" aria-expanded="false" aria-controls="collapse213">
                                    Q. What is the selection criteria of LLM Morning Shift course ?
                                </button>
                            </h2>
                            <div id="collapse213" class="accordion-collapse collapse" aria-labelledby="heading213"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading214">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse214" aria-expanded="false" aria-controls="collapse214">
                                    Q. What is the fee structure of BA - LLB(H) course?
                                </button>
                            </h2>
                            <div id="collapse214" class="accordion-collapse collapse" aria-labelledby="heading214"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 71500/- Or Yearly Payment - 1,40,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading215">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse215" aria-expanded="false" aria-controls="collapse215">
                                    Q. What is the eligibility criteria for BA - LLB(H) course ?
                                </button>
                            </h2>
                            <div id="collapse215" class="accordion-collapse collapse" aria-labelledby="heading215"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading216">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse216" aria-expanded="false" aria-controls="collapse216">
                                    Q. What is the selection criteria for BA - LLB (H) course ?
                                </button>
                            </h2>
                            <div id="collapse216" class="accordion-collapse collapse" aria-labelledby="heading216"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. An entrance test will be conducted by Royal Global University
                                        followed by Personal Interview. Candidates with a valid score of CLAT (Common Law
                                        Admission Test) will be exempted from appearing in the entrance test conducted by Royal
                                        Global University</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading217">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse217" aria-expanded="false" aria-controls="collapse217">
                                    Q. What is the fee structure of B.Sc./BA - Hotel Management course ?
                                </button>
                            </h2>
                            <div id="collapse217" class="accordion-collapse collapse" aria-labelledby="heading217"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 54000/- Or Yearly Payment - 105000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading218">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse218" aria-expanded="false" aria-controls="collapse218">
                                    Q. What is the eligibility criteria for B.Sc./BA - Hotel Management course ?
                                </button>
                            </h2>
                            <div id="collapse218" class="accordion-collapse collapse" aria-labelledby="heading218"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with with
                                        minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC –
                                        Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading219">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse219" aria-expanded="false" aria-controls="collapse219">
                                    Q. What is the selection criteria for B.Sc./BA - Hotel Management course ?
                                </button>
                            </h2>
                            <div id="collapse219" class="accordion-collapse collapse" aria-labelledby="heading219"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading220">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse220" aria-expanded="false" aria-controls="collapse220">
                                    Q. What is the fee structure of M.Sc. - Hotel Management/MHM course ?
                                </button>
                            </h2>
                            <div id="collapse220" class="accordion-collapse collapse" aria-labelledby="heading220"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 46500/- Or Yearly Payment - 90000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading221">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse221" aria-expanded="false" aria-controls="collapse221">
                                    Q. What is the eligibility criteria for M.Sc. - Hotel Management/MHM course ?
                                </button>
                            </h2>
                            <div id="collapse221" class="accordion-collapse collapse" aria-labelledby="heading221"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in Hotel Management from any recognized
                                        University/ Institution with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading222">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse222" aria-expanded="false" aria-controls="collapse222">
                                    Q. What is the selection criteria for M.Sc. - Hotel Management/MHM course?
                                </button>
                            </h2>
                            <div id="collapse222" class="accordion-collapse collapse" aria-labelledby="heading222"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading223">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse223" aria-expanded="false" aria-controls="collapse223">
                                    Q. What is the fee structure of Bachelor in Hotel Management - BHM course ?
                                </button>
                            </h2>
                            <div id="collapse223" class="accordion-collapse collapse" aria-labelledby="heading223"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 54000/- Or Yearly Payment - 105000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading224">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse224" aria-expanded="false" aria-controls="collapse224">
                                    Q. What is the eligibility criteria for Bachelor of Hotel Management - BHM course ?
                                </button>
                            </h2>
                            <div id="collapse224" class="accordion-collapse collapse" aria-labelledby="heading224"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading225">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse225" aria-expanded="false" aria-controls="collapse225">
                                    Q. What is the selection criteria for Bachelor of Hotel Management - BHM course ?
                                </button>
                            </h2>
                            <div id="collapse225" class="accordion-collapse collapse" aria-labelledby="heading225"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading226">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse226" aria-expanded="false" aria-controls="collapse226">
                                    Q. What is the fee structure for BA Culinary Arts?
                                </button>
                            </h2>
                            <div id="collapse226" class="accordion-collapse collapse" aria-labelledby="heading226"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 54000/- Or Yearly Payment - 105000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading227">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse227" aria-expanded="false" aria-controls="collapse227">
                                    Q. What is the eligibility criteria for BA Culinary Arts?
                                </button>
                            </h2>
                            <div id="collapse227" class="accordion-collapse collapse" aria-labelledby="heading227"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading228">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse228" aria-expanded="false" aria-controls="collapse228">
                                    Q. What is the selection criteria for BA Culinary Arts?
                                </button>
                            </h2>
                            <div id="collapse228" class="accordion-collapse collapse" aria-labelledby="heading228"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading229">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse229" aria-expanded="false" aria-controls="collapse229">
                                    Q. What is the fee structure of B.Sc./BA Travel & Tourism Management course?
                                </button>
                            </h2>
                            <div id="collapse229" class="accordion-collapse collapse" aria-labelledby="heading229"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading230">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse230" aria-expanded="false" aria-controls="collapse230">
                                    Q. What is the eligibility criteria for B.Sc./BA Travel & Tourism Management course ?
                                </button>
                            </h2>
                            <div id="collapse230" class="accordion-collapse collapse" aria-labelledby="heading230"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading231">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse231" aria-expanded="false" aria-controls="collapse231">
                                    Q. What is the selection criteria for B.Sc./BA Travel & Tourism Management course ?
                                </button>
                            </h2>
                            <div id="collapse231" class="accordion-collapse collapse" aria-labelledby="heading231"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading232">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse232" aria-expanded="false" aria-controls="collapse232">
                                    Q. What is the fee structure of Master in Travel & Tourism Management - MTTM course ?
                                </button>
                            </h2>
                            <div id="collapse232" class="accordion-collapse collapse" aria-labelledby="heading232"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading233">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse233" aria-expanded="false" aria-controls="collapse233">
                                    Q. What is the eligibility criteria for Master in Travel & Tourism Management - MTTM course
                                    ?
                                </button>
                            </h2>
                            <div id="collapse233" class="accordion-collapse collapse" aria-labelledby="heading233"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Bachelor’s Degree in Travel & Tourism Management / Major from any
                                        recognized University/Institution with minimum 50% marks in aggregate or equivalent
                                        grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) Or Bachelor’s Degree in any stream
                                        with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading234">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse234" aria-expanded="false" aria-controls="collapse234">
                                    Q. What is the selection criteria for Master in Travel & Tourism Management - MTTM course ?
                                </button>
                            </h2>
                            <div id="collapse234" class="accordion-collapse collapse" aria-labelledby="heading234"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading235">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse235" aria-expanded="false" aria-controls="collapse235">
                                    Q. What is the fee structure of Bachelor of Travel & Tourism Management - BTTM course ?
                                </button>
                            </h2>
                            <div id="collapse235" class="accordion-collapse collapse" aria-labelledby="heading235"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading236">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse236" aria-expanded="false" aria-controls="collapse236">
                                    Q. What is the eligibility criteria for Bachelor of Travel & Tourism Management - BTTM
                                    course ?
                                </button>
                            </h2>
                            <div id="collapse236" class="accordion-collapse collapse" aria-labelledby="heading236"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum
                                        50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy
                                        Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading237">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse237" aria-expanded="false" aria-controls="collapse237">
                                    Q. What is the selection criteria for Bachelor of Travel & Tourism Management - BTTM course?
                                </button>
                            </h2>
                            <div id="collapse237" class="accordion-collapse collapse" aria-labelledby="heading237"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading238">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse238" aria-expanded="false" aria-controls="collapse238">
                                    Q. What is the fee structure of B.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse238" class="accordion-collapse collapse" aria-labelledby="heading238"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 88,000/- Or Yearly Payment - 1,73,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading239">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse239" aria-expanded="false" aria-controls="collapse239">
                                    Q. What is the eligibility criteria of B.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse239" class="accordion-collapse collapse" aria-labelledby="heading239"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with English as one of the subjects and Physics, Chemistry and Mathematics
                                        /Biology as compulsory subjects with minimum 50% marks in aggregate or equivalent grade
                                        and minimum 50% in subject</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading240">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse240" aria-expanded="false" aria-controls="collapse240">
                                    Q. What is the selection criteria for the B.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse240" class="accordion-collapse collapse" aria-labelledby="heading240"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading241">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse241" aria-expanded="false" aria-controls="collapse241">
                                    Q. What is the fee structure of D.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse241" class="accordion-collapse collapse" aria-labelledby="heading241"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 76,500/- Or Yearly Payment - 150000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading242">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse242" aria-expanded="false" aria-controls="collapse242">
                                    Q. What is the eligibility criteria of D.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse242" class="accordion-collapse collapse" aria-labelledby="heading242"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized Board/
                                        Council with English as one of the subjects and Physics, Chemistry and Mathematics
                                        /Biology as compulsory subjects with minimum 50% marks in aggregate or equivalent grade
                                        and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading243">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse243" aria-expanded="false" aria-controls="collapse243">
                                    Q. What is the selection criteria for D.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse243" class="accordion-collapse collapse" aria-labelledby="heading243"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading244">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse244" aria-expanded="false" aria-controls="collapse244">
                                    Q. What is the fee structure of the M.Pharm course ?
                                </button>
                            </h2>
                            <div id="collapse244" class="accordion-collapse collapse" aria-labelledby="heading244"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs
                                        10,000-Semester Payment - 74500/- Or Yearly Payment - 145000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading245">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse245" aria-expanded="false" aria-controls="collapse245">
                                    Q. What is the fee structure for Bachelor in Physiotherapy - BPT course ?
                                </button>
                            </h2>
                            <div id="collapse245" class="accordion-collapse collapse" aria-labelledby="heading245"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        60,000-Semester Payment - 61500/- Or Yearly Payment - 120000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading246">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse246" aria-expanded="false" aria-controls="collapse246">
                                    Q. What is the eligibility criteria for Bachelor in Physiotherapy - BPT course ?
                                </button>
                            </h2>
                            <div id="collapse246" class="accordion-collapse collapse" aria-labelledby="heading246"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream with minimum 50% marks in aggregate or
                                        equivalent grade in Physics, Chemistry, Biology and English as a core subject from a
                                        recognized Board/Council. (5% relaxation to SC/ST/OBC - Non-Creamy Layer).Age Limit:
                                        Minimum 17 years and maximum 30 years of age as on 31st December of the year in which
                                        the admission is sought.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading247">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse247" aria-expanded="false" aria-controls="collapse247">
                                    Q. What is the selection criteria for Bachelor in Physiotherapy - BPT course ?
                                </button>
                            </h2>
                            <div id="collapse247" class="accordion-collapse collapse" aria-labelledby="heading247"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading248">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse248" aria-expanded="false" aria-controls="collapse248">
                                    Q. What is the fee structure of Masters in Physiotherapy - MPT course ?
                                </button>
                            </h2>
                            <div id="collapse248" class="accordion-collapse collapse" aria-labelledby="heading248"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000-Semester Payment - 46500/- Or Yearly Payment - 90,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading249">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse249" aria-expanded="false" aria-controls="collapse249">
                                    Q. What is the eligibility criteria for Masters in Physiotherapy - MPT course ?
                                </button>
                            </h2>
                            <div id="collapse249" class="accordion-collapse collapse" aria-labelledby="heading249"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. BPT from a recognized University with minimum 50% marks in
                                        aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading250">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse250" aria-expanded="false" aria-controls="collapse250">
                                    Q. What is the selection criteria for Masters in Physiotherapy - MPT course ?
                                </button>
                            </h2>
                            <div id="collapse250" class="accordion-collapse collapse" aria-labelledby="heading250"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading251">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse251" aria-expanded="false" aria-controls="collapse251">
                                    Q. What are the specializations provided in MPT?
                                </button>
                            </h2>
                            <div id="collapse251" class="accordion-collapse collapse" aria-labelledby="heading251"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The specializations under MPT are -
                                        <br> 1. Musculoskeletal Disorders & Sports.
                                        <br> 2. Adult Neurology
                                        <br> 3. Cardio respiratory Disorders and Rehabilitation-I
                                        <br> 4. Community Based Rehabilitation.
                                    </p>
                                </div>
                            </div>
                        </div>



                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading253">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse253" aria-expanded="false" aria-controls="collapse253">
                                    Q. What is the fee structure of B.Sc. in Nutrition and Dietetics course ?
                                </button>
                            </h2>
                            <div id="collapse253" class="accordion-collapse collapse" aria-labelledby="heading253"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading254">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse254" aria-expanded="false" aria-controls="collapse254">
                                    Q. What is the eligibility criteria for B.Sc.in Nutrition and Dietetics course ?
                                </button>
                            </h2>
                            <div id="collapse254" class="accordion-collapse collapse" aria-labelledby="heading254"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream (Biology/Life Science) or equivalent from
                                        a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5%
                                        relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading255">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse255" aria-expanded="false" aria-controls="collapse255">
                                    Q. What is the selection criteria for B.Sc. in Nutrition and Dietetics course ?
                                </button>
                            </h2>
                            <div id="collapse255" class="accordion-collapse collapse" aria-labelledby="heading255"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading256">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse256" aria-expanded="false" aria-controls="collapse256">
                                    Q. What is the fee structure of M.Sc. in Nutrition and Dietetics course ?
                                </button>
                            </h2>
                            <div id="collapse256" class="accordion-collapse collapse" aria-labelledby="heading256"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000-Semester Payment - 43500/- Or Yearly Payment - 85,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading257">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse257" aria-expanded="false" aria-controls="collapse257">
                                    Q. What is the fee structure of B.Sc Emergency & Critical Care course ?
                                </button>
                            </h2>
                            <div id="collapse257" class="accordion-collapse collapse" aria-labelledby="heading257"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000-Semester Payment - 46500/- Or Yearly Payment - 90,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading258">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse258" aria-expanded="false" aria-controls="collapse258">
                                    Q. What is the eligibility criteria for a B.Sc Emergency & Critical Care course ?
                                </button>
                            </h2>
                            <div id="collapse258" class="accordion-collapse collapse" aria-labelledby="heading258"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream with minimum 50% marks in aggregate or
                                        equivalent grade in Physics, Chemistry, Biology taken together from a recognized
                                        Board/Council.(5% relaxation to SC/ST/OBC - Non-Creamy Layer).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading259">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse259" aria-expanded="false" aria-controls="collapse259">
                                    Q. What is the selection criteria for B.Sc Emergency & Critical Care course ?
                                </button>
                            </h2>
                            <div id="collapse259" class="accordion-collapse collapse" aria-labelledby="heading259"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading260">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse260" aria-expanded="false" aria-controls="collapse260">
                                    Q. What is the fee structure of M.Optometry course ?
                                </button>
                            </h2>
                            <div id="collapse260" class="accordion-collapse collapse" aria-labelledby="heading260"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000-Semester Payment - 46,500/- Or Yearly Payment - 90,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading261">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse261" aria-expanded="false" aria-controls="collapse261">
                                    Q. What is the fee structure of the B.Optometry course ?
                                </button>
                            </h2>
                            <div id="collapse261" class="accordion-collapse collapse" aria-labelledby="heading261"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000-Semester Payment - 46,500/- Or Yearly Payment - 90,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading262">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse262" aria-expanded="false" aria-controls="collapse262">
                                    Q. What is the eligibility criteria for the B. Optometry course ?
                                </button>
                            </h2>
                            <div id="collapse262" class="accordion-collapse collapse" aria-labelledby="heading262"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in Science Stream or equivalent from a recognized Board/
                                        Council with Physics, Chemistry, Mathematics/ Biology & English as compulsory subjects
                                        and with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)
                                        *Candidates passing with PCM without Biology in 10+2 will have to undergo remedial
                                        classes/ bridge course for Biology.
                                        *Candidates passing with PCB without Mathematics in 10+2 will have to undergo remedial
                                        classes/ bridge course for Mathematics."</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading263">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse263" aria-expanded="false" aria-controls="collapse263">
                                    Q. What is the selection criteria for the B. Optometry course ?
                                </button>
                            </h2>
                            <div id="collapse263" class="accordion-collapse collapse" aria-labelledby="heading263"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading264">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse264" aria-expanded="false" aria-controls="collapse264">
                                    Q. What is the fee structure of B.Sc. in Medical Laboratory Technology- BMLT course ?
                                </button>
                            </h2>
                            <div id="collapse264" class="accordion-collapse collapse" aria-labelledby="heading264"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        60,000-Semester Payment - 51,500/- Or Yearly Payment - 1,00,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading265">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse265" aria-expanded="false" aria-controls="collapse265">
                                    Q. What is the eligibility criteria for B.Sc in Medical Laboratory Technology- BMLT course ?
                                </button>
                            </h2>
                            <div id="collapse265" class="accordion-collapse collapse" aria-labelledby="heading265"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No answer found</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading266">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse266" aria-expanded="false" aria-controls="collapse266">
                                    Q. What is the selection criteria for B.Sc. in Medical Laboratory Technology- BMLT ?
                                </button>
                            </h2>
                            <div id="collapse266" class="accordion-collapse collapse" aria-labelledby="heading266"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading267">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse267" aria-expanded="false" aria-controls="collapse267">
                                    Q. What is the fee structure of M.Sc. in Medical Laboratory Technology- MMLT course ?
                                </button>
                            </h2>
                            <div id="collapse267" class="accordion-collapse collapse" aria-labelledby="heading267"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable – Rs 10000/-Admission Fee-
                                        Rs 10,000-Semester Payment - 50000/- Or Yearly Payment - 85000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading268">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse268" aria-expanded="false" aria-controls="collapse268">
                                    Q. What are the specializations under MMLT Programme?
                                </button>
                            </h2>
                            <div id="collapse268" class="accordion-collapse collapse" aria-labelledby="heading268"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The specializations under MMLT are
                                        1.Hematology& Blood Banking
                                        2.Microbiology</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading269">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse269" aria-expanded="false" aria-controls="collapse269">
                                    Q. What is the fee structure of B.Sc.in Operation Theatre Technology course ?
                                </button>
                            </h2>
                            <div id="collapse269" class="accordion-collapse collapse" aria-labelledby="heading269"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 51500/- Or Yearly Payment - 1,00,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading270">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse270" aria-expanded="false" aria-controls="collapse270">
                                    Q. What is the eligibility criteria for B.Sc.in Operation Theatre Technology course?
                                </button>
                            </h2>
                            <div id="collapse270" class="accordion-collapse collapse" aria-labelledby="heading270"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized
                                        Board/Council, with minimum 50% marks or equivalent grade in Physics, Chemistry &
                                        Biology taken together (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading271">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse271" aria-expanded="false" aria-controls="collapse271">
                                    Q. What is the selection criteria for B.Sc. in Operation Theatre Technology?
                                </button>
                            </h2>
                            <div id="collapse271" class="accordion-collapse collapse" aria-labelledby="heading271"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading272">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse272" aria-expanded="false" aria-controls="collapse272">
                                    Q. What is the fee structure of B.Sc. in Radiography & Advance Imaging Technology course?
                                </button>
                            </h2>
                            <div id="collapse272" class="accordion-collapse collapse" aria-labelledby="heading272"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000-Semester Payment - 51500/- Or Yearly Payment - 1,00,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading273">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse273" aria-expanded="false" aria-controls="collapse273">
                                    Q. What is the eligibility criteria for B.Sc. in Radiography & Advance Imaging Technology
                                    course ?
                                </button>
                            </h2>
                            <div id="collapse273" class="accordion-collapse collapse" aria-labelledby="heading273"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 10+2 in science stream or equivalent from a recognized
                                        Board/Council, with minimum 50% marks or equivalent grade in Physics, Chemistry &
                                        Biology taken together (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading274">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse274" aria-expanded="false" aria-controls="collapse274">
                                    Q. What is the selection criteria for B.Sc. in Radiography & Advance Imaging Technology ?
                                </button>
                            </h2>
                            <div id="collapse274" class="accordion-collapse collapse" aria-labelledby="heading274"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading275">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse275" aria-expanded="false" aria-controls="collapse275">
                                    Q. What is the fee structure of B.Sc.Nursing course ?
                                </button>
                            </h2>
                            <div id="collapse275" class="accordion-collapse collapse" aria-labelledby="heading275"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        60,000/-Semester Payment - 1,01,500/- Or Yearly Payment - 200000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading276">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse276" aria-expanded="false" aria-controls="collapse276">
                                    Q. What is the eligibility criteria for B.Sc.Nursing course ?
                                </button>
                            </h2>
                            <div id="collapse276" class="accordion-collapse collapse" aria-labelledby="heading276"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. i) 10+2 in Science Stream and should have passed in PCB & English
                                        as compulsory subject ii) Scored, minimum 50% marks in PCB taken together iii) (5%
                                        relaxation to SC/ST/OBC – Non-Creamy layer) iv) Student should be medically fit and,v)
                                        Student must be minimum 17 years of age as on 31st December of the year in which
                                        admission is sought.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading277">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse277" aria-expanded="false" aria-controls="collapse277">
                                    Q. What is the selection criteria for B.Sc. Nursing ?
                                </button>
                            </h2>
                            <div id="collapse277" class="accordion-collapse collapse" aria-labelledby="heading277"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading278">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse278" aria-expanded="false" aria-controls="collapse278">
                                    Q. What is the fee structure of B.Sc. Nursing - Post Basic course ?
                                </button>
                            </h2>
                            <div id="collapse278" class="accordion-collapse collapse" aria-labelledby="heading278"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000/-Semester Payment - 81500/- Or Yearly Payment - 160000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading279">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse279" aria-expanded="false" aria-controls="collapse279">
                                    Q. What is the eligibility criteria for B.Sc. Nursing - Post Basic course ?
                                </button>
                            </h2>
                            <div id="collapse279" class="accordion-collapse collapse" aria-labelledby="heading279"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Passed the Higher Secondary or Senior Secondary or intermediate
                                        or 10+2 or an equivalent examination recognized by the university for this purpose.
                                        Those who have done 10+1 in or before 1986, will be eligible for admission .Obtained a
                                        certificate in General Nursing and Midwifery and is registered as R.N.R.M. with the
                                        State Nurses Registration Council. A male nurse, trained before the implementation of
                                        the new integrated course besides being registered as a nurse with State Nurses
                                        Registration Council, shall produce evidence of training approved by Indian Nursing
                                        Council for a similar duration in lieu of midwifery in any one of the following areas:
                                        O.T, Techniques , Ophthalmic Nursing, Leprosy Nursing ,TB Nursing , Psychiatric Nursing
                                        , Neurological and Neuro surgical Nursing, Community Health Nursing, Cancer Nursing
                                        ,Orthopedic Nursing.
                                        Candidates must also be medically fit.
                                        Student shall be admitted once in a year"</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading280">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse280" aria-expanded="false" aria-controls="collapse280">
                                    Q. What is the selection criteria for B.Sc. Nursing - Post Basic ?
                                </button>
                            </h2>
                            <div id="collapse280" class="accordion-collapse collapse" aria-labelledby="heading280"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading281">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse281" aria-expanded="false" aria-controls="collapse281">
                                    Q. What is the fee structure of the General Nursing & Midwifery course ?
                                </button>
                            </h2>
                            <div id="collapse281" class="accordion-collapse collapse" aria-labelledby="heading281"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs
                                        50,000/-Semester Payment - 76500/- Or Yearly Payment - 150000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading282">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse282" aria-expanded="false" aria-controls="collapse282">
                                    Q. What is the eligibility criteria for the General Nursing & Midwifery course ?
                                </button>
                            </h2>
                            <div id="collapse282" class="accordion-collapse collapse" aria-labelledby="heading282"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. i) 10+2 with English and must obtained a minimum of 40% in the
                                        qualifying examination and English individually from any recognized board. Candidates
                                        who have passed from State Open School recognized by the State Government and National
                                        Institute of Open School (NIOS) recognized by the Central Government are eligible for
                                        application. However, Science is preferable.
                                        ii) 10+2 with English with 40% marks in a vocational ANM course from a school recognized
                                        by Indian Nursing Council
                                        iii) 10+2 with English having 40% of marks in Vocational Stream-Health care Science from
                                        a recognized State/Central board.Registered ANM with pass mark.
                                        iv) Registered ANM with pass mark."</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading283">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse283" aria-expanded="false" aria-controls="collapse283">
                                    Q. What is the selection criteria for General Nursing & Midwifery ?
                                </button>
                            </h2>
                            <div id="collapse283" class="accordion-collapse collapse" aria-labelledby="heading283"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Based on overall performance in last examination followed by
                                        Personal Interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading284">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse284" aria-expanded="false" aria-controls="collapse284">
                                    Q. What is the fee structure of M.Sc. Nursing course ?
                                </button>
                            </h2>
                            <div id="collapse284" class="accordion-collapse collapse" aria-labelledby="heading284"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000/-Semester Payment - 81500/- Or Yearly Payment - 160000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading285">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse285" aria-expanded="false" aria-controls="collapse285">
                                    Q. What is the fee structure of Ph.D. course ?
                                </button>
                            </h2>
                            <div id="collapse285" class="accordion-collapse collapse" aria-labelledby="heading285"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs
                                        50,000/- Per Semester-Rs 64500 OR Rs 1,25,000/- Yearly</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading286">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse286" aria-expanded="false" aria-controls="collapse286">
                                    Q. Does RGU offer Ph.D. degree?
                                </button>
                            </h2>
                            <div id="collapse286" class="accordion-collapse collapse" aria-labelledby="heading286"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading287">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse287" aria-expanded="false" aria-controls="collapse287">
                                    Q. What are the subjects in which RGU offers Ph.D.?
                                </button>
                            </h2>
                            <div id="collapse287" class="accordion-collapse collapse" aria-labelledby="heading287"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Royal Global University offers Ph.D.in the following areas-
                                        MATHEMATICS •PHYSICS •CHEMISTRY •MECHANICAL ENGINEERING •COMPUTER SCIENCE& ENGINEERING
                                        •CIVIL ENGINEERING •MANAGEMENT •PSYCHOLOGY •FINEARTS •JOURNALISM&MASS COMMUNICATION
                                        •HOTEL MANAGEMENT •ENGLISH •COMMERCE •HISTORY •LAW •BOTANY •ZOOLOGY •BIO-TECHNOLOGY
                                        •BIO-CHEMISTRY •MICRO-BIOLOGY •ENVIRONMENTAL SCIENCE •GEOGRAPHY •GEOLOGY •ECONOMICS
                                        •SOCIOLOGY •POLITICAL SCIENCE •SOCIAL WORK •PUBLIC ADMINISTRATION •PHARMACY •NURSING
                                        •PHYSIOTHERAPY •TRAVEL & TOURISM etc</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading288">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse288" aria-expanded="false" aria-controls="collapse288">
                                    Q. Is the written exam compulsory for Ph.D?
                                </button>
                            </h2>
                            <div id="collapse288" class="accordion-collapse collapse" aria-labelledby="heading288"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Candidates with NET/SLET are exempted from the written
                                        examination. However, they will have to appear for the personal interview.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading289">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse289" aria-expanded="false" aria-controls="collapse289">
                                    Q. What is the exam pattern of the Ph.D entrance exam ?
                                </button>
                            </h2>
                            <div id="collapse289" class="accordion-collapse collapse" aria-labelledby="heading289"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The Ph.D. entrance examination comprises of two parts - Written
                                        exam followed by a personal interview.The written exam consist of both objective &
                                        descriptive questions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading290">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse290" aria-expanded="false" aria-controls="collapse290">
                                    Q. Can I get the syllabus for the Ph.D. examination ?
                                </button>
                            </h2>
                            <div id="collapse290" class="accordion-collapse collapse" aria-labelledby="heading290"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. There is no prescribed syllabus as such. You may follow the
                                        NET/SLET syllabus pattern.The written exam consists of two parts - Part I deals with
                                        research methodology and generally consists of multiple choice questions & Part II is
                                        subject specific and is descriptive in nature.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading291">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse291" aria-expanded="false" aria-controls="collapse291">
                                    Q. How will I get to know that my application has been accepted and how will I know the date
                                    and time of the entrance exam?
                                </button>
                            </h2>
                            <div id="collapse291" class="accordion-collapse collapse" aria-labelledby="heading291"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. You will get a time to time follow up from a RGU counselor. Also,
                                        you will get a call letter in your registered mail id which will contain the details of
                                        the entrance examination.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading292">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse292" aria-expanded="false" aria-controls="collapse292">
                                    Q. When will the Ph.D Entrance Examination be held ?
                                </button>
                            </h2>
                            <div id="collapse292" class="accordion-collapse collapse" aria-labelledby="heading292"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. There are two sessions in a year for Ph.D. admission (January to
                                        June)&( July to December).Check our website for Ph.D admission notifications.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading293">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse293" aria-expanded="false" aria-controls="collapse293">
                                    Q. I am a working person, will I have to submit a NOC from my employer to get enrolled in
                                    part-time Ph.D ?
                                </button>
                            </h2>
                            <div id="collapse293" class="accordion-collapse collapse" aria-labelledby="heading293"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, you will have to submit an NOC at the time of admission.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading294">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse294" aria-expanded="false" aria-controls="collapse294">
                                    Q. Will I have to submit migration certificate if I enroll myself for a Ph.D programme ?
                                </button>
                            </h2>
                            <div id="collapse294" class="accordion-collapse collapse" aria-labelledby="heading294"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, one will have to submit your migration certificate at the
                                        time of registration.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading295">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse295" aria-expanded="false" aria-controls="collapse295">
                                    Q. What is the fee structure for the Hostel Room - 2 Seater(Suit) ?
                                </button>
                            </h2>
                            <div id="collapse295" class="accordion-collapse collapse" aria-labelledby="heading295"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 2,40,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading296">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse296" aria-expanded="false" aria-controls="collapse296">
                                    Q. What is the fee structure for the Hostel Room- 2 Seater (Premium)?
                                </button>
                            </h2>
                            <div id="collapse296" class="accordion-collapse collapse" aria-labelledby="heading296"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 2,10,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading297">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse297" aria-expanded="false" aria-controls="collapse297">
                                    Q. What is the fee structure for the Hostel Room- 2 Seater(Aditya &Harsha House) ?
                                </button>
                            </h2>
                            <div id="collapse297" class="accordion-collapse collapse" aria-labelledby="heading297"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,92,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading298">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse298" aria-expanded="false" aria-controls="collapse298">
                                    Q. What is the fee structure for the Hostel Room - 3 Seater (Samaya & Heyansh House) ?
                                </button>
                            </h2>
                            <div id="collapse298" class="accordion-collapse collapse" aria-labelledby="heading298"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,80,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading299">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse299" aria-expanded="false" aria-controls="collapse299">
                                    Q. What is the fee structure for the Hostel Room - 3 Seater(Aditya &Harsha House)?
                                </button>
                            </h2>
                            <div id="collapse299" class="accordion-collapse collapse" aria-labelledby="heading299"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,50,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading300">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse300" aria-expanded="false" aria-controls="collapse300">
                                    Q. What is the fee structure for the Hostel Room - 4 Seater(Cat.-N) (Samaya & Heyansh House)
                                    ?
                                </button>
                            </h2>
                            <div id="collapse300" class="accordion-collapse collapse" aria-labelledby="heading300"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,32,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading301">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse301" aria-expanded="false" aria-controls="collapse301">
                                    Q. What is the fee structure for the Hostel Room - 4 Seater(Cat.-O) (Aditya &Harsha House)?
                                </button>
                            </h2>
                            <div id="collapse301" class="accordion-collapse collapse" aria-labelledby="heading301"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,20,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading302">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse302" aria-expanded="false" aria-controls="collapse302">
                                    Q. What is the fee structure for the Hostel Room – 5 seater (Heyansh House)?
                                </button>
                            </h2>
                            <div id="collapse302" class="accordion-collapse collapse" aria-labelledby="heading302"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,08,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading303">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse303" aria-expanded="false" aria-controls="collapse303">
                                    Q. What is the fee structure for the Hostel Room – Dormitory(Both Boys and Girls) All
                                    hostels?
                                </button>
                            </h2>
                            <div id="collapse303" class="accordion-collapse collapse" aria-labelledby="heading303"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-,
                                        Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,20,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading304">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse304" aria-expanded="false" aria-controls="collapse304">
                                    Q. What are the facilities provided in the Hostels ?
                                </button>
                            </h2>
                            <div id="collapse304" class="accordion-collapse collapse" aria-labelledby="heading304"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 1. Television Set in the Hostel Mess 2. Gymnasium 3. Infirmary 4.
                                        Bed 5. Study Table with Chair 6. Almirah 7. AC Rooms etc.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading305">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse305" aria-expanded="false" aria-controls="collapse305">
                                    Q. Is Non veg food allowed inside the hostel ?
                                </button>
                            </h2>
                            <div id="collapse305" class="accordion-collapse collapse" aria-labelledby="heading305"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No. Non-veg food is not allowed inside the hostel. However the
                                        Hostel Kitchen serves Non veg food 3 days a week at an eating facility called The Dhaba,
                                        that is outside the campus approximately 200 meters from the University Gate. Bringing
                                        non-veg food from outside to the hostel is also not allowed.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading306">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse306" aria-expanded="false" aria-controls="collapse306">
                                    Q. Can Hostel Boarders take food to their rooms ?
                                </button>
                            </h2>
                            <div id="collapse306" class="accordion-collapse collapse" aria-labelledby="heading306"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel Boarders cannot take food from the Hostel Mess to their
                                        rooms. However, they may take packaged snacks (e.g. chips/crisps, biscuits, etc.) to
                                        their rooms after getting it duly checked at the hostel entry point.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading307">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse307" aria-expanded="false" aria-controls="collapse307">
                                    Q. Does Ragging takes place in the Hostel ?
                                </button>
                            </h2>
                            <div id="collapse307" class="accordion-collapse collapse" aria-labelledby="heading307"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No. Ragging is strictly prohibited in the hostel. The entire
                                        campus of Royal Global University is a ragging free zone.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading308">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse308" aria-expanded="false" aria-controls="collapse308">
                                    Q. What are the Hostel Entry Timings ?
                                </button>
                            </h2>
                            <div id="collapse308" class="accordion-collapse collapse" aria-labelledby="heading308"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No Hostel Boarder is allowed to stay outside hostel after 7:30pm.
                                        If a boarder opts for night stay/out of campus, he/she must return to the hostel by 8:00
                                        am on weekdays (Monday to Friday) or 7:30pm on weekends (Saturday/Sunday) or other
                                        holidays.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading309">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse309" aria-expanded="false" aria-controls="collapse309">
                                    Q. What are the Hostel Exit Timings ?
                                </button>
                            </h2>
                            <div id="collapse309" class="accordion-collapse collapse" aria-labelledby="heading309"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Boarders must be out of the hostel by 8:50am sharp on all
                                        weekdays (Monday to Friday). They will not be allowed inside the hostel during class
                                        hours (9:00am to 5:15 pm) without permission. Boarders are also not allowed to come out
                                        of or enter the hostel after 9:30pm. Boarders pursuing B.Com.(H) Morning Shift or LLM
                                        Morning Shift may leave the hostel at 6:30am to pursue their classes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading310">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse310" aria-expanded="false" aria-controls="collapse310">
                                    Q. When can Parents/Local Guardians meet a student ?
                                </button>
                            </h2>
                            <div id="collapse310" class="accordion-collapse collapse" aria-labelledby="heading310"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 5:15 pm to 6:30 pm on weekdays 10:00 am to 6:00 pm on holidays
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading311">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse311" aria-expanded="false" aria-controls="collapse311">
                                    Q. Who can enter the hostel to meet the Boarders ?
                                </button>
                            </h2>
                            <div id="collapse311" class="accordion-collapse collapse" aria-labelledby="heading311"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. For Girls' Hostels: No male family member/friend other than
                                        father is allowed to enter the Girls' Hostels/Visitors' Lounge. Any outside visitor may
                                        be allowed to visit only if accompanied by the parents of the concerned boarder(s). For
                                        Boys' Hostels: No female family member/friend other than mother is allowed to enter the
                                        Boys' Hostels/Visitors' Lounge.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading312">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse312" aria-expanded="false" aria-controls="collapse312">
                                    Q. What happens when a hostel boarder gets ill or injured ?
                                </button>
                            </h2>
                            <div id="collapse312" class="accordion-collapse collapse" aria-labelledby="heading312"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. If a hostel boarder gets ill or injured, then depending on the
                                        graveness of the illness or injury, the rules are:(a) boarders may be allowed to stay in
                                        the infirmary, under the observation of the Hostel Warden/Assistant Warden/Medical staff
                                        on the advice of the Doctor/Head of the Department/Institution(b) In case of minor
                                        injury or illness, first aid and/or medicines will be provided at the campus
                                        infirmary.(c) In case of serious illness or injury, the hostel management may shift a
                                        boarder to a govt./private hospital and duly inform the boarder's parents and/or local
                                        guardian. The charges of the treatment will be borne by the boarder's parents and/or
                                        local guardian.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading313">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse313" aria-expanded="false" aria-controls="collapse313">
                                    Q. What is the Transportation Fee?
                                </button>
                            </h2>
                            <div id="collapse313" class="accordion-collapse collapse" aria-labelledby="heading313"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Transportation Form Fee - 100/- , Admission fee-Rs 1000/- ,
                                        Yearly Fee-60,000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading314">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse314" aria-expanded="false" aria-controls="collapse314">
                                    Q. What are the available transport/bus routes?
                                </button>
                            </h2>
                            <div id="collapse314" class="accordion-collapse collapse" aria-labelledby="heading314"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Route 1- SECTOR 1- NOONMATI- NARENGI- PRATIKSHA- BORBARI- SACHAL-
                                        KHANAPARA- N.H-37- RGU
                                        Route 2- SATGAON- PATHARQUARRY- BORBARI- SIX MILE- JAYANAGAR- BELTOLA-BHETAPARA
                                        CHARIALI- GAMES VILLAGE- N.H-37- RGU
                                        Route 3- NEW GHY- GUWAHATI COLLEGE-ANURADHA- GOVT. PRESS- CHANDMARI- GCC- RAJGARH-
                                        BHANGAGARH- ROOPNAGAR- BIRUBARI TINIALI- CYCLE FACTORY- KALAPAHAR- LALGANESH-LOKHRA- RGU
                                        Route 4- CHANDMARI- SILPUKHURI- GUWAHATI CLUB- CHENIKUTHI- UZANBAZARLATASHIL- PANBAZAR-
                                        FANCY BAZAR- FATASHIL AMBARI- RGU
                                        Route 5- PANJABARI- BAGHORBORI- KALAKSHETRA- JURIPAR- JAYA NAGAR- BELTOLA- BASISTHA
                                        CHARIALI- RGU
                                        Route 6-KHANAPARA- FARM GATE- SIX MILE- RUKMINIGAON- DOWN TOWN- SUPER MARKET- LAST GATE-
                                        RAJDHANI MASJID- GHORAMARA- BEHARBARI- RGU
                                        Route 7- DGP OFFICE- NEPALI MANDIR- PALTAN BAZAR- APSARA- ULUBARI- LACHIT NAGAR- BORA
                                        SERVICE- S.B DEORAH COLLEGE- BHANGAGARH- ABC- RGU
                                        Route 8- 2 NO. MATHGHARIA- GEETAMANDIR- NARIKALBASTI- HATIGARH CHARIALI- ZOO ROAD
                                        TINIALI- AIDC- GANESHGURI- GANESH MANDIR- JATIA- GANESH TURNING- DAKHINGAON-MANIRAM
                                        DEWAN TRADE CENTER- RGU
                                        Route 9-SHANTIPUR- BHOOTNATH- KALIPUR- KAMAKHYA GATE- MALIGAON- BORIPARA- ADABARI-
                                        JALUKBARI- RGU
                                        Route 10-SHANTIPUR- BHOOTNATH- KALIPUR- KAMAKHYA GATE- MALIGAON- BORIPARA- ADABARI-
                                        JALUKBARI- RGU
                                        Route 11-CHRISTIAN BASTI- WALLFORD- GANESHGURI- SUPER MARKET- LAST GATE-
                                        HOUSEFED-SURVEY- BELTOLA TINIALI- SANKARDEVA NETRALAYA- LAKHIMANDIR- BASISTHA CHARIALI
                                        Route 12-SPANISH GARDEN- SUNDARPUR- GANESHGURI- RAJDHANI MASJID-HATIGAON- BHETAPARA
                                        CHARIALI- HOCKEY STADIUM- BEHARBARI- RGU
                                        Route 13-GANESH MANDIR- JATIA- GANESH TURNING- KAHILIPARA POWERHOUSE- ODALBAKRA-
                                        LALGANESH- ADAGODOWN- RGU
                                        Route 14-KUMARPARA- BHARALUMUKH- A.T ROAD- HIMATSINGKA PETROL PUMP- PALTAN BAZAR- NEPALI
                                        MANDIR- REHABARI- SERABHATI-LALGANESH-RGU
                                        Route 15- NORTH GUWAHATI- IIT- AMINGAON- JALUKBARI- RGU"</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading315">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse315" aria-expanded="false" aria-controls="collapse315">
                                    Q. What are the pick up and drop timings ?
                                </button>
                            </h2>
                            <div id="collapse315" class="accordion-collapse collapse" aria-labelledby="heading315"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The first pickup on each route is at 7:45 am. In the evening,
                                        buses leave the campus by 5:30 pm. To know the pick-up timing of a specific location,
                                        students may contact the Transport Incharge or Helper/Driver, whose numbers will be
                                        provided to them after they apply for Transport Services.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading316">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse316" aria-expanded="false" aria-controls="collapse316">
                                    Q. Are the Buses AC or Non -AC ?
                                </button>
                            </h2>
                            <div id="collapse316" class="accordion-collapse collapse" aria-labelledby="heading316"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The buses are Non- AC.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading317">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse317" aria-expanded="false" aria-controls="collapse317">
                                    Q. What kind of scholarships does RGU offer?
                                </button>
                            </h2>
                            <div id="collapse317" class="accordion-collapse collapse" aria-labelledby="heading317"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The following are the four categories of scholarships offered by
                                        RGU:A. ROYAL MERIT - ON ADMISSION SCHOLARSHIP (For Indian Students) B. ROYAL ENDOWMENT &
                                        OTHER SCHOLARSHIP (Forlndian Students) C. 100% Scholarship to two students from the
                                        Chakma community of Miao Sub-division, Arunachal Pradesh D. MONTHLY SCHOLARSHIP FOR
                                        SEMESTER TOPPERS</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading318">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse318" aria-expanded="false" aria-controls="collapse318">
                                    Q. What is the minimum percentage required in order to apply for 25% ROYAL MERIT - ON
                                    ADMISSION SCHOLARSHIP for Under Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse318" class="accordion-collapse collapse" aria-labelledby="heading318"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage required for applying for 25% ROYAL MERIT
                                        - ON ADMISSION SCHOLARSHIP for Under Graduate students is 86% in 10 +2 Examination
                                        (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading319">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse319" aria-expanded="false" aria-controls="collapse319">
                                    Q. What is the minimum percentage required in order to for apply for 50% ROYAL MERIT - ON
                                    ADMISSION SCHOLARSHIP for Under Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse319" class="accordion-collapse collapse" aria-labelledby="heading319"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for 50% ROYAL MERIT
                                        - ON ADMISSION SCHOLARSHIP for Under Graduate students is 92% in 10 +2 Examination
                                        (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading320">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse320" aria-expanded="false" aria-controls="collapse320">
                                    Q. What is the minimum percentage required in order to apply for 100% ROYAL MERIT - ON
                                    ADMISSION SCHOLARSHIP for Under Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse320" class="accordion-collapse collapse" aria-labelledby="heading320"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for 100% ROYAL MERIT
                                        - ON ADMISSION SCHOLARSHIP for Under Graduate students is 96% in 10 +2 Examination
                                        (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading321">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse321" aria-expanded="false" aria-controls="collapse321">
                                    Q. What is the minimum percentage required in order to apply for 25% ROYAL MERIT - ON
                                    ADMISSION SCHOLARSHIP for Post Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse321" class="accordion-collapse collapse" aria-labelledby="heading321"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for 25% ROYAL MERIT
                                        - ON ADMISSION SCHOLARSHIP for Post Graduate students is 80% in Graduation
                                        (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading322">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse322" aria-expanded="false" aria-controls="collapse322">
                                    Q. What is the minimum percentage required in order to apply for 50% ROYAL MERIT - ON
                                    ADMISSION SCHOLARSHIP for Post Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse322" class="accordion-collapse collapse" aria-labelledby="heading322"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for 50% ROYAL MERIT
                                        - ON ADMISSION SCHOLARSHIP for Post Graduate students is 84% in Graduation
                                        (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading323">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse323" aria-expanded="false" aria-controls="collapse323">
                                    Q. What is the minimum percentage required in order to apply for 100% ROYAL MERIT - ON
                                    ADMISSION SCHOLARSHIP for Post Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse323" class="accordion-collapse collapse" aria-labelledby="heading323"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for 100% ROYAL MERIT
                                        - ON ADMISSION SCHOLARSHIP for Post Graduate students is 88% in Graduation
                                        (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading324">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse324" aria-expanded="false" aria-controls="collapse324">
                                    Q. Will my percentage be the only eligibility criteria for applying for ROYAL MERIT- ON
                                    ADMISSION SCHOLARSHIP?
                                </button>
                            </h2>
                            <div id="collapse324" class="accordion-collapse collapse" aria-labelledby="heading324"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No, apart from fulfilling the percentage criteria in the last
                                        qualifying examination, a student must also secure overall 60% marks in Written Test (if
                                        any), Group Discussion (GD) (if any) and Personal Interview (PI) conducted by the
                                        University at the time of admission.(SC/ST/Non-Creamy-Layer OBC students will get 5%
                                        relaxation in aggregate marks for all categories of scholarship.)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading325">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse325" aria-expanded="false" aria-controls="collapse325">
                                    Q. What are the norms for continuation of Royal Merit - On Admission scholarships ?
                                </button>
                            </h2>
                            <div id="collapse325" class="accordion-collapse collapse" aria-labelledby="heading325"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Royal Merit - On Admission Scholarship holders will be eligible
                                        for continuation of scholarship in the subsequent years of the programme, subject to
                                        fulfillment of the following terms and conditions:a) To continue availing 100 %
                                        scholarship, a student must secure/maintain a position amongst the top 5% students in
                                        the merit list of their respective programme/course.b) To continue availing 50%
                                        scholarship, a student will have to secure/maintain a position amongst top 10% of the
                                        students in the merit list of their respective programme/course.c) To continue availing
                                        25% scholarship, students will have to secure/maintain a position amongst top 25% of the
                                        students in the merit list of their respective programme/course.d) To continue availing
                                        scholarship, a student must clear all the papers in each semester and should not carry
                                        any back log in any semester e) To continue availing scholarship, a student must have
                                        attendance of at least 90% in all the subjects in each semester from the previous
                                        academic year.The category in which a student is awarded a scholarship cannot be
                                        converted to any other category. In case a student fails to secure a position to
                                        maintain (continue) scholarship in a particular category, he/she will not be eligible
                                        for continuation of scholarship in any other category. For example, if a student
                                        availing 100% scholarship does not secure/maintain a position in top 5% but
                                        secures/maintains a position in top 10%, then he/she will be disqualified for 100%
                                        scholarship and at the same time will not be eligible for 50% scholarship.A student
                                        availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousand only) as
                                        security deposit and Rs. 5000.00 (Rupees Five Thousand only) as caution money deposit at
                                        the time of admission. If the student continues qualifying for scholarship for all the
                                        years during the programme, the amount of Rs. 55,000.00 (paid as security and caution
                                        money) will be refunded after the completion of his/her respective programme of study.
                                        The security money will not be refunded in case of a student withdraws/drops
                                        out.Students found guilty of involvement in any untoward incident or indiscipline
                                        (including ragging) will be disqualified for award of scholarship.In case a student,
                                        availing Royal Merit - On Admission scholarship, fails to fulfill the condition for
                                        continuation of scholarship in the subsequent years, he/she will have to pay the full
                                        fee for subsequent year/years, as prescribed for other students. The security deposit of
                                        Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the
                                        fee to be paid for subsequent year/years. In case a student, availing Royal Merit - On
                                        Admission Scholarship, wishes to avail hostel/ transportation facilities, he/she will
                                        have to pay the full hostel/ transportation fees as prescribed for other students. A
                                        student, once disqualified/suffers a break in scholarship, will not be eligible for
                                        further scholarship. Final decision of granting scholarship lies with the University
                                        Scholarship Committee and or Competent Authority/s.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading326">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse326" aria-expanded="false" aria-controls="collapse326">
                                    Q. What is the minimum percentage required in order to apply for Royal Endowment & Other
                                    Scholarship under 25% category for Under Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse326" class="accordion-collapse collapse" aria-labelledby="heading326"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for Royal Endowment
                                        & Other Scholarship under 25% category for Under Graduate students is 80% and above in
                                        10+2</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading327">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse327" aria-expanded="false" aria-controls="collapse327">
                                    Q. What is the minimum percentage required in order to apply for Royal Endowment & Other
                                    Scholarship under 50% category for Under Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse327" class="accordion-collapse collapse" aria-labelledby="heading327"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage required in order to apply for Royal
                                        Endowment & Other Scholarship under 50% category for Under Graduate students is 85% and
                                        above in 10+2</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading328">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse328" aria-expanded="false" aria-controls="collapse328">
                                    Q. What is the minimum percentage required in order to apply for Royal Endowment & Other
                                    Scholarship under 25% category for Post Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse328" class="accordion-collapse collapse" aria-labelledby="heading328"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for Royal Endowment
                                        & Other Scholarship under 25% category for Post Graduate students is 75% and above in
                                        Graduation</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading329">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse329" aria-expanded="false" aria-controls="collapse329">
                                    Q. What is the minimum percentage required in order to apply for Royal Endowment & Other
                                    Scholarship under 50% category for Post Graduate students ?
                                </button>
                            </h2>
                            <div id="collapse329" class="accordion-collapse collapse" aria-labelledby="heading329"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The minimum percentage criteria for applying for Royal Endowment
                                        & Other Scholarship under 50% category for Post Graduate students is 80% and above in
                                        Graduation</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading330">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse330" aria-expanded="false" aria-controls="collapse330">
                                    Q. Which categories can apply for Royal Endowment & Other Scholarship ?
                                </button>
                            </h2>
                            <div id="collapse330" class="accordion-collapse collapse" aria-labelledby="heading330"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The categories that are eligible to apply are: i). Annual family
                                        income less than Rs. 2.5 lac.ii) Ward of a mother who is a single parent.iii) Ward of a
                                        parent who is a teaching professional with annual income less than 4.5 lac. iv) Sports
                                        people who have participated in State/National level/Music and Fine Arts. v) Ward of a
                                        Defense Personnel with annual income less than 4.5 lac. vi) Ward of an Ex-Serviceman
                                        (Defense)/War Widow with annual pension less than 4.5 lac. vii) Differently-abled
                                        students. Students availing Endowment Scholarship should fulfill the following criteria:
                                        i). Students should be eligible under the endowment scheme.ii) Student should submit
                                        relevant documents from competent authority for verifying the stated category required
                                        for qualifying the Royal Endowment Scheme.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading331">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse331" aria-expanded="false" aria-controls="collapse331">
                                    Q. What are the terms for continuation of Royal Merit - On Admission scholarships ?
                                </button>
                            </h2>
                            <div id="collapse331" class="accordion-collapse collapse" aria-labelledby="heading331"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The terms and conditions for the continuation of Royal Endowment
                                        & Other Scholarship in 2nd and subsequent years -i). Class attendance of the students
                                        must be 90% and above in all the subjects in each semester from the previous academic
                                        year.ii) To continue availing scholarship, a student must clear all the papers in each
                                        semester and should not carry any back logs in any semester from the previous academic
                                        -year and pass the semester/annual examination for promotion to the next year. iii)
                                        Students found guilty of involvement in any untoward incident (including ragging) will
                                        be disqualified for award of scholarship.iv) In case a student, availing Royal Endowment
                                        & Other scholarship, fails to fulfill the condition for continuation of scholarship in
                                        the subsequent year/years, he/she will have to pay the full fee for subsequent years, as
                                        prescribed for other students.v) In case a student, availing Royal Endowment & Other
                                        Scholarship, wishes to avail hostel/ transportation facilities, he/she will have to pay
                                        the full hostel/ transportation fees as prescribed for other students. vi) A student,
                                        once disqualified/suffers a break in scholarship, will not be eligible for further
                                        scholarship.vii) The category in which a student is awarded a scholarship cannot be
                                        converted to any other category. In case a student fails to secure a position to
                                        maintain (continue) scholarship in a particular category, he/she will not be eligible
                                        for continuation of scholarship in any other category.viii) Final decision of granting
                                        scholarship lies with the University Scholarship Committee.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading332">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse332" aria-expanded="false" aria-controls="collapse332">
                                    Q. How many students from the Chakma Community are awarded 100% Scholarship?
                                </button>
                            </h2>
                            <div id="collapse332" class="accordion-collapse collapse" aria-labelledby="heading332"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Two students are awarded 100% Scholarship from the Chakma
                                        Community of Miao Sub-division, Arunachal Pradesh.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading333">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse333" aria-expanded="false" aria-controls="collapse333">
                                    Q. What is the eligibility criteria for the 100% Scholarship for the Chakma Community of
                                    Miao Sub-division, Arunachal Pradesh ?
                                </button>
                            </h2>
                            <div id="collapse333" class="accordion-collapse collapse" aria-labelledby="heading333"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. i). A letter of recommendation from competent authority to avail
                                        100% Scholarship must be submitted in the admission office along with the necessary
                                        admission forms/application of scholarship, latest by 31st July (for under-graduate
                                        programme) and 31st August (for post-graduate programme), respectively, every academic
                                        year or as notified from time to time.ii). Selection is done based onthe screening and
                                        identification of meritorious students, as laid down by competent authority. iii) This
                                        scholarship will be applicable for any programme/course offered by the University,
                                        except for few courses viz. Nursing, Pharmacy and Architecture due to statutory
                                        requirements. iv) The students must fulfill the minimum eligibility criteria for
                                        admission in the programme/course they have applied for, as laid down by the
                                        University.v) A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees
                                        Fifty Thousandonly) as security deposit and Rs. 5,000.00 (Rupees Five Thousand only) as
                                        caution money deposit at the time of admission.vi) The scholarships will be awarded
                                        annually.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading334">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse334" aria-expanded="false" aria-controls="collapse334">
                                    Q. What is the criteria for the continuation of 100% Scholarship for students from the
                                    Chakma Community of Miao Sub-division, Arunachal Pradesh ?
                                </button>
                            </h2>
                            <div id="collapse334" class="accordion-collapse collapse" aria-labelledby="heading334"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. 100% Scholarship holder from Chakma community of Miao
                                        Sub-division, Arunachal Pradesh will be eligible for continuation of scholarship in the
                                        subsequent year of the programme, subject to fulfillment of the following terms and
                                        conditions:1). To continue availing scholarship, a student must secure/ maintain a
                                        position amongst the top 15% of the students in the merit list of their respective
                                        programme/ course.2). To continue, a student must clear all the papers in each semester
                                        and should not carry any back log in any semester from the previous academic year.3). To
                                        continue, a student must have an attendance of at least 85% in all the subjects in each
                                        semester from the previous academic year.4). A student availing 100% scholarship from
                                        Chakma community will have to pay Rs.50,000.00 (Rupees Fifty Thousand only) as security
                                        deposit and Rs. 5000.00 (Rupees FiveThousand only) as caution money deposit at the time
                                        of admission. If the student continues qualifying for scholarship for all the years
                                        during the programme, the amount of Rs. 55,000.00 (paid as security and caution deposit)
                                        will be refunded after the completion of his/her respective programme of study. The
                                        security money will not be refunded in case of a student withdraws/drops out.5).
                                        Students found guilty of involvement in any untoward incident or indiscipline
                                        activities(including ragging) will be disqualified for award of scholarship.6). In case
                                        a student, availing 100% Scholarship from Chakma community of Miao Subdivision,
                                        Arunachal Pradesh, fails to fulfill the condition for continuation of scholarship in the
                                        subsequent years, he/she will have to pay the full fee for subsequent years, as per
                                        rules of the University and prescribed for other students. The security deposit of
                                        Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the
                                        fee to be paid for subsequent year/years.7). In case a student, availing 100%
                                        Scholarship from Chakma community of Miao Subdivision, Arunachal Pradesh, wishes to
                                        avail hostel/ transportation facilities, he/she will have to pay the full hostel/
                                        transportation fees as per rules of the university and prescribed for other students.8).
                                        A student, once disqualified/suffers a break in scholarship, will not be eligible for
                                        further scholarship.9). Final decision of granting scholarship lies with the University
                                        Scholarship Committee.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading335">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse335" aria-expanded="false" aria-controls="collapse335">
                                    Q. Are there any scholarships for semester toppers ?
                                </button>
                            </h2>
                            <div id="collapse335" class="accordion-collapse collapse" aria-labelledby="heading335"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, RGU provides scholarships for semester toppers. Semester
                                        Toppers for each programme will be awarded a Monthly Scholarship of Rs. 3000.00 (Rupees
                                        Three Thousand Only) per month in the consequent semester.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading336">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse336" aria-expanded="false" aria-controls="collapse336">
                                    Q. What is the amount of scholarship awarded to semester toppers ?
                                </button>
                            </h2>
                            <div id="collapse336" class="accordion-collapse collapse" aria-labelledby="heading336"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Semester Toppers for each programme will be awarded a Monthly
                                        Scholarship of Rs. 3000.00 (Rupees Three Thousand Only) per month in the consequent
                                        semester.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading337">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse337" aria-expanded="false" aria-controls="collapse337">
                                    Q. Does RGU provide any scholarships to International students ?
                                </button>
                            </h2>
                            <div id="collapse337" class="accordion-collapse collapse" aria-labelledby="heading337"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, RGU provides ROYAL MERIT - ON ADMISSION 100% SCHOLARSHIP TO
                                        STUDENTS FROM FIVE COUNTRIES (from neighboring countries like Thailand, Bangladesh,
                                        Nepal, Bhutan and Myanmar)</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading338">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse338" aria-expanded="false" aria-controls="collapse338">
                                    Q. What is the minimum percentage criteria to avail 100% scholarship for International
                                    Students?
                                </button>
                            </h2>
                            <div id="collapse338" class="accordion-collapse collapse" aria-labelledby="heading338"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. For a Under Graduate course it is 80% and above in 10+2 & for
                                        Post Graduate it is 80% and above in graduation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading339">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse339" aria-expanded="false" aria-controls="collapse339">
                                    Q. What are the other criteria needed for availing a 100% scholarship for International
                                    Students ?
                                </button>
                            </h2>
                            <div id="collapse339" class="accordion-collapse collapse" aria-labelledby="heading339"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The other criteria needed for availing a 100% scholarship for
                                        International Students are:i) A student availing 100% scholarship will have to pay Rs.
                                        50,000.00 (Rupees Fifty Thousand only) as security deposit and Rs. 5,000.00 (Rupees Five
                                        Thousand only) as caution money deposit at the time of admission.ii) Apart from
                                        fulfilling the above criteria, a student must also secure overall 60% marks in Written
                                        Test, Group Discussion (GD) if any and Personal Interview (PI) conducted by the
                                        University at the time of admission.iii) The scholarships will be awarded annually. For
                                        subsequent year/years the grant of scholarship to the awardees will be governed by
                                        Continuation of Royal Merit – On Admission 100% Scholarship to International Students.
                                        iv) Any applications for Royal Merit - On Admission 100% Scholarship to International
                                        Students forunder-graduate students and post-graduate students will not be accepted
                                        after 31st July and 31st August, respectively, of respective academic year or as
                                        notified from time to time.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading340">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse340" aria-expanded="false" aria-controls="collapse340">
                                    Q. What are the terms and conditions for the continuationof 100% scholarship for
                                    International Students ?
                                </button>
                            </h2>
                            <div id="collapse340" class="accordion-collapse collapse" aria-labelledby="heading340"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Royal Merit - On Admission 100% Scholarship for International
                                        Students will be eligible for continuation in the subsequent year of the programme,
                                        subject to fulfillment of the following terms and conditions: a) To continue availing
                                        100% scholarship, a student must secure/maintain a position amongst top 5 % of the
                                        students in the merit list of their respective programme/course.b) To continue availing
                                        scholarship, a student must clear all the papers in each semester and should not carry
                                        any back log in any semester, from the previous academic year.c) To continue availing
                                        scholarship, a student must have an attendance of at least 90% in all the subjects in
                                        each semester from the previous academic year.d) A student availing 100% scholarship
                                        will have to pay Rs. 50,000.00 (Rupees Fifty Thousandonly) as security deposit and Rs.
                                        5000.00 (Rupees Five Thousand only) as caution money deposit at the time of admission.
                                        If the student continues qualifying for scholarship for all the years during the
                                        programme, the amount of Rs. 55,000.00 (paid as security and caution deposit) will be
                                        refunded after the completion of his/her respective programme of study. The security
                                        money will not be refunded in case a student withdraws/drops out. Students found guilty
                                        of involvement in any untoward incident or indiscipline activity (including ragging)
                                        will be disqualified for award of scholarship. In case a student, availing Royal Merit -
                                        On Admission 100% Scholarship to International Students, fails to fulfill the condition
                                        for continuation of scholarship in the subsequent years, he/she will have to pay the
                                        full fee for subsequent years, as prescribed for other students. The security deposit of
                                        Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the
                                        fee to be paid for subsequent year/years. In case a student, availing Royal Merit - On
                                        Admission 100% Scholarship to International Students, wishes to avail hostel/
                                        transportation facilities, he/she will have to pay the full hostel/ transportation fees
                                        as prescribed for other students. A student, once disqualified/suffers a break in
                                        scholarship, will not be eligible for further scholarship. Final decision of granting
                                        scholarship lies with the University Scholarship Committee.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading341">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse341" aria-expanded="false" aria-controls="collapse341">
                                    Q. Is there any distance education programme in RGU?
                                </button>
                            </h2>
                            <div id="collapse341" class="accordion-collapse collapse" aria-labelledby="heading341"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No RGU does not provide any courses on distance mode.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading342">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse342" aria-expanded="false" aria-controls="collapse342">
                                    Q. Is the Ph.D programme recognized by UGC?
                                </button>
                            </h2>
                            <div id="collapse342" class="accordion-collapse collapse" aria-labelledby="heading342"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, all the programmes & courses at RGU are recognised by UGC
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading343">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse343" aria-expanded="false" aria-controls="collapse343">
                                    Q. Are the hostels inside the university campus?
                                </button>
                            </h2>
                            <div id="collapse343" class="accordion-collapse collapse" aria-labelledby="heading343"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, hostel facilities are available inside the RGU campus</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading344">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse344" aria-expanded="false" aria-controls="collapse344">
                                    Q. Can I apply for B.sc in speech and hearing course ?
                                </button>
                            </h2>
                            <div id="collapse344" class="accordion-collapse collapse" aria-labelledby="heading344"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Unfortunately, RGU doesn't offer B.Sc in Speech & Hearing course
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading345">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse345" aria-expanded="false" aria-controls="collapse345">
                                    Q. I am having trouble submitting my registration form. What to do?
                                </button>
                            </h2>
                            <div id="collapse345" class="accordion-collapse collapse" aria-labelledby="heading345"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Please contact your concerned counselor for help. Or you may call
                                        our admission helpline number that is- +91 78799-98811</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading346">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse346" aria-expanded="false" aria-controls="collapse346">
                                    Q. I am from a different university can I transfer to Royal Global University?
                                </button>
                            </h2>
                            <div id="collapse346" class="accordion-collapse collapse" aria-labelledby="heading346"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, transfer of student from another university to RGU is
                                        possible. But there are certain formalities which needs to be followed. Contact our
                                        admission department to know more about the same.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading347">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse347" aria-expanded="false" aria-controls="collapse347">
                                    Q. What is the fee structure for SC/ST/OBC students for B.Sc nursing?
                                </button>
                            </h2>
                            <div id="collapse347" class="accordion-collapse collapse" aria-labelledby="heading347"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs
                                        10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fees- Rs
                                        60,000/-Semester Payment - 101500/- Or Yearly Payment - 200000/-</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading348">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse348" aria-expanded="false" aria-controls="collapse348">
                                    Q. Do I have to register myself in my department after completion of the admission process?
                                </button>
                            </h2>
                            <div id="collapse348" class="accordion-collapse collapse" aria-labelledby="heading348"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Once admitted students are given step by step guidance in their
                                        Orientation Programme.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading349">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse349" aria-expanded="false" aria-controls="collapse349">
                                    Q. How do I reach RGU ?
                                </button>
                            </h2>
                            <div id="collapse349" class="accordion-collapse collapse" aria-labelledby="heading349"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Our Address - THE ASSAM ROYAL GLOBAL UNIVERSITY, Betkuchi, Opp.
                                        Tirupati Balaji Temple/ ISBT, NH-37, Guwahati-35, Dist- Kamrup(Metro), Assam, India.
                                        Admission Helpline No: +91 78799-98811</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading350">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse350" aria-expanded="false" aria-controls="collapse350">
                                    Q. I want to do Ph.D. in Psychology. Is the admission process going on?
                                </button>
                            </h2>
                            <div id="collapse350" class="accordion-collapse collapse" aria-labelledby="heading350"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Ph.D. admissions are done on the basis of an entrance examination
                                        which is conducted twice a year. You can check our website at www.rgu.ac for Ph.D.
                                        notification and apply for the same accordingly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading351">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse351" aria-expanded="false" aria-controls="collapse351">
                                    Q. What is the minimum percentage required for availing scholarship ?
                                </button>
                            </h2>
                            <div id="collapse351" class="accordion-collapse collapse" aria-labelledby="heading351"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. For applying for Royal Merit Scholarship you will need to have
                                        minimum 80% or above (5% relaxation for ST, SC & OBC Non-Creamy). For applying for Royal
                                        Endowment Scholarship you will need to have minimum 75% or above (5% relaxation for ST,
                                        SC & OBC Non Creamy layer) Q.I am a working professional with 11 years of experience.
                                        Can I apply for B.Tech lateral entry?</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading352">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse352" aria-expanded="false" aria-controls="collapse352">
                                    Q. Is there any age limit for B.Pharm admission ?
                                </button>
                            </h2>
                            <div id="collapse352" class="accordion-collapse collapse" aria-labelledby="heading352"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. There is no age limit for admission in B.Pharm.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading353">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse353" aria-expanded="false" aria-controls="collapse353">
                                    Q. What is the last date of admission?
                                </button>
                            </h2>
                            <div id="collapse353" class="accordion-collapse collapse" aria-labelledby="heading353"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The last date of admission will be notified once fixed by the
                                        university.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading354">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse354" aria-expanded="false" aria-controls="collapse354">
                                    Q. What is the admission helpline number?
                                </button>
                            </h2>
                            <div id="collapse354" class="accordion-collapse collapse" aria-labelledby="heading354"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Admission Helpline No of RGU is: +91 78799-98811</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading355">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse355" aria-expanded="false" aria-controls="collapse355">
                                    Q. When will the classes start?
                                </button>
                            </h2>
                            <div id="collapse355" class="accordion-collapse collapse" aria-labelledby="heading355"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Batch commencement dates will be notified once fixed by the
                                        university.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading356">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse356" aria-expanded="false" aria-controls="collapse356">
                                    Q. What is the last date of application for MSc botany?
                                </button>
                            </h2>
                            <div id="collapse356" class="accordion-collapse collapse" aria-labelledby="heading356"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Last date of PG admissions will be notified once fixed by the
                                        university.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading357">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse357" aria-expanded="false" aria-controls="collapse357">
                                    Q. Can I apply for more than 1 subject?
                                </button>
                            </h2>
                            <div id="collapse357" class="accordion-collapse collapse" aria-labelledby="heading357"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading358">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse358" aria-expanded="false" aria-controls="collapse358">
                                    Q. Who are the heads of the departments?
                                </button>
                            </h2>
                            <div id="collapse358" class="accordion-collapse collapse" aria-labelledby="heading358"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Kindly visit our website at www.rgu.ac and go to the academics
                                        section for faculty details at https://rgu.ac/schools-rgu.php</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading359">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse359" aria-expanded="false" aria-controls="collapse359">
                                    Q. After submitting the admission form can I make any changes ?
                                </button>
                            </h2>
                            <div id="collapse359" class="accordion-collapse collapse" aria-labelledby="heading359"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. After final submission of the application form, the candidate
                                        cannot edit the form anymore. However, our counselors/ admission department can help you
                                        in this regard.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading360">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse360" aria-expanded="false" aria-controls="collapse360">
                                    Q. Do both boys and girls study in the same campus ?
                                </button>
                            </h2>
                            <div id="collapse360" class="accordion-collapse collapse" aria-labelledby="heading360"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading361">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse361" aria-expanded="false" aria-controls="collapse361">
                                    Q. What is the minimum percentage of attendance required per semester?
                                </button>
                            </h2>
                            <div id="collapse361" class="accordion-collapse collapse" aria-labelledby="heading361"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. As per UGC norms, a student must have a minimum 75% attendance in
                                        class.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading362">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse362" aria-expanded="false" aria-controls="collapse362">
                                    Q. How do I apply for the hostel facilities?
                                </button>
                            </h2>
                            <div id="collapse362" class="accordion-collapse collapse" aria-labelledby="heading362"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. You will have to apply for the hostel facility online by visiting
                                        our official websitewww.rgu.ac. After filling the application form our counselor will
                                        call you and guide you accordingly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading363">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse363" aria-expanded="false" aria-controls="collapse363">
                                    Q. Can you give me the breakup of the fee structure?
                                </button>
                            </h2>
                            <div id="collapse363" class="accordion-collapse collapse" aria-labelledby="heading363"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Kindly visit our official website www.rgu.ac to know about the
                                        course fees and other details. Or you can call us at our Admission Helpline No: +91
                                        78799-98811?</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading364">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse364" aria-expanded="false" aria-controls="collapse364">
                                    Q. Can I pay my tuition fees in installment?
                                </button>
                            </h2>
                            <div id="collapse364" class="accordion-collapse collapse" aria-labelledby="heading364"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. You can pay your course fees either per semester or on yearly
                                        basis.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading365">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse365" aria-expanded="false" aria-controls="collapse365">
                                    Q. How much should I pay at the time of admission?
                                </button>
                            </h2>
                            <div id="collapse365" class="accordion-collapse collapse" aria-labelledby="heading365"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Details of amount to be paid at the time of admission will be
                                        mentioned in your provisional admission offer letter.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading366">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse366" aria-expanded="false" aria-controls="collapse366">
                                    Q. Do I have to pay the entire course fees at once?
                                </button>
                            </h2>
                            <div id="collapse366" class="accordion-collapse collapse" aria-labelledby="heading366"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No, you can either pay once in every six months or annually.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading367">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse367" aria-expanded="false" aria-controls="collapse367">
                                    Q. May I know the documents which are required when applying for scholarship ?
                                </button>
                            </h2>
                            <div id="collapse367" class="accordion-collapse collapse" aria-labelledby="heading367"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. The application form for scholarship clearly mentions the
                                        supporting documents that are required like last qualifying marksheet, caste certificate
                                        (if any) etc. If you are applying for Royal Endowment Scholarship you will have to
                                        submit the relevant documents supporting the category that you are applying.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading368">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse368" aria-expanded="false" aria-controls="collapse368">
                                    Q. Does RGU offer distance education programme?
                                </button>
                            </h2>
                            <div id="collapse368" class="accordion-collapse collapse" aria-labelledby="heading368"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No, we don’t offer any distance education programme.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading369">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse369" aria-expanded="false" aria-controls="collapse369">
                                    Q. Does the university provide laptops to B.Tech students?
                                </button>
                            </h2>
                            <div id="collapse369" class="accordion-collapse collapse" aria-labelledby="heading369"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No, laptops are not provided to any students.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading370">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse370" aria-expanded="false" aria-controls="collapse370">
                                    Q. Is there any dress code?
                                </button>
                            </h2>
                            <div id="collapse370" class="accordion-collapse collapse" aria-labelledby="heading370"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, RGU has a dress code for students.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading371">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse371" aria-expanded="false" aria-controls="collapse371">
                                    Q. When will the admission process start?
                                </button>
                            </h2>
                            <div id="collapse371" class="accordion-collapse collapse" aria-labelledby="heading371"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Admissions for various courses in the university usually begins
                                        around March - April. So keep a track of the university's website www.rgu.ac for any
                                        information.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading372">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse372" aria-expanded="false" aria-controls="collapse372">
                                    Q. Where can I apply for a course?
                                </button>
                            </h2>
                            <div id="collapse372" class="accordion-collapse collapse" aria-labelledby="heading372"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Once the admission schedule is announced, the application form
                                        will be available online in the official university website. For more details keep
                                        checking our website www.rgu.ac</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading373">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse373" aria-expanded="false" aria-controls="collapse373">
                                    Q. Can I pursue two courses together, like B.Com and BBA ?
                                </button>
                            </h2>
                            <div id="collapse373" class="accordion-collapse collapse" aria-labelledby="heading373"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No, you can’t pursue two courses together.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading374">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse374" aria-expanded="false" aria-controls="collapse374">
                                    Q. Is the university COA recognized?
                                </button>
                            </h2>
                            <div id="collapse374" class="accordion-collapse collapse" aria-labelledby="heading374"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes. The B.Arch. course of RGU is recognized by COA(Council of
                                        Architecture).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading375">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse375" aria-expanded="false" aria-controls="collapse375">
                                    Q. What kind of measures has the university taken to prevent ragging?
                                </button>
                            </h2>
                            <div id="collapse375" class="accordion-collapse collapse" aria-labelledby="heading375"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Each student taking admission in RGU must submit a Non-Judiciary
                                        Anti-Ragging Affidavit.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading376">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse376" aria-expanded="false" aria-controls="collapse376">
                                    Q. What kind of security system do you have in your university?
                                </button>
                            </h2>
                            <div id="collapse376" class="accordion-collapse collapse" aria-labelledby="heading376"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. RGU is a highly secured campus with high boundary walls and round
                                        the clock surveillance. Well trained security guards patrol the campus 24x7 which makes
                                        the campus safe and secure. CCTV cameras, fire alarms, and anti-ragging squad further
                                        adds to the safety of our students and staff. No one can enter or leave the campus
                                        without proper authorization.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading377">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse377" aria-expanded="false" aria-controls="collapse377">
                                    Q. Are the books provided by the university?
                                </button>
                            </h2>
                            <div id="collapse377" class="accordion-collapse collapse" aria-labelledby="heading377"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. We have the provision of a Book Bank under which we issue 6-7
                                        books to every student. Also, there is a well-stocked library in the university campus
                                        from where students can get their books. However, if you wish to purchase any book, you
                                        will have to get it from the market at your own cost.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading378">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse378" aria-expanded="false" aria-controls="collapse378">
                                    Q. Is there any facility for payment of course fees in installments?
                                </button>
                            </h2>
                            <div id="collapse378" class="accordion-collapse collapse" aria-labelledby="heading378"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes. There are two ways of paying the course fees. You can pay
                                        per semester or annually.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading379">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse379" aria-expanded="false" aria-controls="collapse379">
                                    Q. Is there a capitation fee?
                                </button>
                            </h2>
                            <div id="collapse379" class="accordion-collapse collapse" aria-labelledby="heading379"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading380">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse380" aria-expanded="false" aria-controls="collapse380">
                                    Q. Are there any scholarship facilities?
                                </button>
                            </h2>
                            <div id="collapse380" class="accordion-collapse collapse" aria-labelledby="heading380"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes. Visit our official website www.rgu.ac to know more about our
                                        scholarship schemes.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading381">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse381" aria-expanded="false" aria-controls="collapse381">
                                    Q. Do we have to pay anything extra besides the fees mentioned in the prospectus?
                                </button>
                            </h2>
                            <div id="collapse381" class="accordion-collapse collapse" aria-labelledby="heading381"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading382">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse382" aria-expanded="false" aria-controls="collapse382">
                                    Q. Are extracurricular activities taken into consideration?
                                </button>
                            </h2>
                            <div id="collapse382" class="accordion-collapse collapse" aria-labelledby="heading382"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Extracurricular activities are taken into consideration while
                                        applying for scholarships only.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading383">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse383" aria-expanded="false" aria-controls="collapse383">
                                    Q. Will I get hostel accommodation ?
                                </button>
                            </h2>
                            <div id="collapse383" class="accordion-collapse collapse" aria-labelledby="heading383"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel accommodation is provided on a first come first serve
                                        basis and is subject to availability of seats.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading384">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse384" aria-expanded="false" aria-controls="collapse384">
                                    Q. Will I be allotted a hostel at the time of admission?
                                </button>
                            </h2>
                            <div id="collapse384" class="accordion-collapse collapse" aria-labelledby="heading384"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Hostel allotment is done on the day of admission.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading385">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse385" aria-expanded="false" aria-controls="collapse385">
                                    Q. Is the mess fee included in the hostel fees?
                                </button>
                            </h2>
                            <div id="collapse385" class="accordion-collapse collapse" aria-labelledby="heading385"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading386">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse386" aria-expanded="false" aria-controls="collapse386">
                                    Q. Are hostels compulsory for the first year students ?
                                </button>
                            </h2>
                            <div id="collapse386" class="accordion-collapse collapse" aria-labelledby="heading386"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. No. First year students may or may not opt for hostel facilities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading387">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse387" aria-expanded="false" aria-controls="collapse387">
                                    Q. What kind of medical assistance does RGU provide to students?
                                </button>
                            </h2>
                            <div id="collapse387" class="accordion-collapse collapse" aria-labelledby="heading387"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. On-call medical professionals are available in the campus. Also
                                        all our university buses contain a first aid kit for any emergency.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading388">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse388" aria-expanded="false" aria-controls="collapse388">
                                    Q. My child has been advised to use a hot water bag because of an operation he underwent. Do
                                    you have theprovisions for the same ?
                                </button>
                            </h2>
                            <div id="collapse388" class="accordion-collapse collapse" aria-labelledby="heading388"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes. Our hostels provide hot water bags to students when
                                        required.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading389">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse389" aria-expanded="false" aria-controls="collapse389">
                                    Q. I lost my marksheet but I have the provisional marksheet downloaded from the university
                                    website. Would that suffice?
                                </button>
                            </h2>
                            <div id="collapse389" class="accordion-collapse collapse" aria-labelledby="heading389"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. You can submit the provisional marksheet for the time being. But
                                        you will have to eventually apply for the duplicate mark sheet and submit the same.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading390">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse390" aria-expanded="false" aria-controls="collapse390">
                                    Q. I wanted to know which courses the university offers in distance mode
                                </button>
                            </h2>
                            <div id="collapse390" class="accordion-collapse collapse" aria-labelledby="heading390"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Royal Global University do not offer any course in distance mode.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading391">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse391" aria-expanded="false" aria-controls="collapse391">
                                    Q. How can I pay my tuition fees?
                                </button>
                            </h2>
                            <div id="collapse391" class="accordion-collapse collapse" aria-labelledby="heading391"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. You can pay through - Demand draft/ NEFT/RTGS/ online banking/
                                        online transfer etc</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading392">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse392" aria-expanded="false" aria-controls="collapse392">
                                    Q. I got 90% in class 12. Am I eligible for scholarship ?
                                </button>
                            </h2>
                            <div id="collapse392" class="accordion-collapse collapse" aria-labelledby="heading392"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, you are eligible for RGU scholarship.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading393">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse393" aria-expanded="false" aria-controls="collapse393">
                                    Q. How will the Ph.D. exam be conducted?
                                </button>
                            </h2>
                            <div id="collapse393" class="accordion-collapse collapse" aria-labelledby="heading393"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Ph.D. exams will be conducted in the offline mode.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading394">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse394" aria-expanded="false" aria-controls="collapse394">
                                    Q. Can I get lateral entry in Electrical Engineering ?
                                </button>
                            </h2>
                            <div id="collapse394" class="accordion-collapse collapse" aria-labelledby="heading394"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Sorry, RGU does not offer Electrical Engineering Programme.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading395">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse395" aria-expanded="false" aria-controls="collapse395">
                                    Q. How to apply for scholarship?
                                </button>
                            </h2>
                            <div id="collapse395" class="accordion-collapse collapse" aria-labelledby="heading395"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. You can apply for scholarship while filling up your admission
                                        application form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading396">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse396" aria-expanded="false" aria-controls="collapse396">
                                    Q. Will you please tell me the fees structure of all the courses.
                                </button>
                            </h2>
                            <div id="collapse396" class="accordion-collapse collapse" aria-labelledby="heading396"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. To know about the fee structure of different courses kindly visit
                                        our website at https://rgu.ac/fee-structure.php Or you can call us at our Admission
                                        Helpline No: +91 78799-98811?</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading397">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse397" aria-expanded="false" aria-controls="collapse397">
                                    Q. Are there any scholarships?
                                </button>
                            </h2>
                            <div id="collapse397" class="accordion-collapse collapse" aria-labelledby="heading397"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, RGU offers scholarships. For details kindly refer to our
                                        scholarship policies at www.rgu.ac</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading398">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse398" aria-expanded="false" aria-controls="collapse398">
                                    Q. Is it worth joining the university?
                                </button>
                            </h2>
                            <div id="collapse398" class="accordion-collapse collapse" aria-labelledby="heading398"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. With experienced faculties and world class infrastructure &
                                        facilities, Royal Global University is one of the finest universities of the country.
                                        RGU offers a unique educational experience that prepares the next generation of global
                                        citizens to lead and make a difference in the world. RGU ensures that its students are
                                        transformed into all-rounded, industry-ready individuals, who are equipped to take on
                                        leadership responsibilities. RGU stands to be recognized for its world-class
                                        infrastructure, cultural events, campus recruitment programmes and updated facilities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading399">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse399" aria-expanded="false" aria-controls="collapse399">
                                    Q. Is RGU implementing NEP 2020(New Education Policy)?
                                </button>
                            </h2>
                            <div id="collapse399" class="accordion-collapse collapse" aria-labelledby="heading399"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Yes, RGU is implementing New Education Policy (NEP).</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading400">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse400" aria-expanded="false" aria-controls="collapse400">
                                    Q. What is the concept of NEP?
                                </button>
                            </h2>
                            <div id="collapse400" class="accordion-collapse collapse" aria-labelledby="heading400"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. NEP focuses on bringing universal access to school education to
                                        ensure the holistic development of students right from the beginning. According to this
                                        policy, students' progress and their learning capacity will be tracked timely.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading401">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse401" aria-expanded="false" aria-controls="collapse401">
                                    Q. How will RGU implement /carry out NEP?
                                </button>
                            </h2>
                            <div id="collapse401" class="accordion-collapse collapse" aria-labelledby="heading401"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Our programme under NEP 2020 will be a Four-Year Undergraduate
                                        Programme with multiple entries and exits in each academic year.The syllabus &
                                        curriculum for each course implementing NEP can be found at https://rgu.ac/syllabus.php
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading402">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse402" aria-expanded="false" aria-controls="collapse402">
                                    Q. What is ABC ID?
                                </button>
                            </h2>
                            <div id="collapse402" class="accordion-collapse collapse" aria-labelledby="heading402"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. Academic Bank of Credits (ABC) is a virtual/digital storehouse
                                        that contains the information of the credits earned by individual students throughout
                                        their learning journey.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading403">
                                <button class="accordion-button mobile-headd3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse403" aria-expanded="false" aria-controls="collapse403">
                                    Q. How do I register/Create ABC ID?
                                </button>
                            </h2>
                            <div id="collapse403" class="accordion-collapse collapse" aria-labelledby="heading403"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="mobile-para1">A. ABC ID can be created by visiting <a class="text-primary"
                                            href="https://digilocker.meripehchaan.gov.in/">https://digilocker.meripehchaan.gov.in/</a>
                                        and registering from this portal. After completion of registration, a 12-digit ABC ID
                                        will be created. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- accordion  -->
        </div>
    </div>

        <div class="website">
           <!--Start Header-->
            @include('frontend/components/aheader')
        <!--End Header-->

    <!-- header image  -->
           <div>
            <img src="mobile-assets/admission-faq/admission-faq.png" alt="">
           </div>
    <!-- header image  -->

          <!-- accordion  -->
          <div class="container-fluid accordionnew">

             <!-- search  -->
          <div class="search-box pt-2 pb-4">

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-6">

                <div class="form d-flex justify-content-center align-items-center">
                  <i class="fa fa-search"></i>
                  <input type="text" class="form-control form-input para1" placeholder="Search anything...">
                  <a style="margin-left: 20px; display: flex; align-items: center; justify-content: center; background-color: #27467A; color: #fff; padding: 10px 20px 10px 20px;" class="btn btn para1 fw-bold" href="#" role="button">Search</a>
                </div>

              </div>

            </div>

          </div>
          <!-- search  -->


            <div class="row">

                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Q.  What is the fee structure of M.Tech programme?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 60,000-Semester Payment - Rs 51, 500/- Or YearlyPayment - 1,00,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Q.  What is the selection criteria for B.Tech ?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Candidates must obtain a valid score in JEE/CEE or R-JEE (Royal Joint Entrance Examinations) and will have to sit for a Personal Interview (PI).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Q.  What are the career opportunities after completing B.Tech ?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. A B.Tech. degree holder is highly sought- after by industries. B.Tech. candidates are known for their creative thinking, problem solving abilities and teamwork. Civil Engineers plans, designs and manages construction projects. Mechanical Engineers, design advanced materials like supersonic and hypersonic space travel, design robots and automatic control systems etc. Computer Science Engineers design mobile applications, softwares, networks etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Q.  What are the career opportunities for BBA students ?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. BBA lays the foundation based on which students can further explore the ﬁeld of management education. BBA is beneﬁcial for all those students who wants to do managerial jobs. Both the government as well as the privatesector offers career opportunities to BBA graduates. Management professionals are hired by a wide variety of industries, MNCs and organizations. Students can also prepare for bank entrance examinations for building a career in the banking domain. BBA graduates are quickly absorbed in different private and public sector banks like ICICI, HSBC, State Bank of India, Standard Chartered, YES Bank, Axis bank etc. Private companies offer various job roles to BBA graduates such as ﬁnancial analyst, management trainee, accountant etc. Companies providing sales and marketing jobs to BBA candidates are SBI Life Insurance, Deutsche Bank, Nestle, Cadbury, Marico, Asian paints, Mudra, Leo Burnett etc. Some sales and marketing companies train the BBA graduates as per their company norms for delivering the required sales targets. Service based companies like IBM, Accenture, and Deloitte also provide ample employment opportunities and offer various managerial roles. BBA Graduates can also enroll for professional courses such as CA and ICWAI which are very much in demand these days. They can also enroll for post-graduate courses such as MBA and MCA depending upon their choice. The BBA graduates can even opt for part-time jobs and enroll for some short duration computer courses which will be an added advantage. Students interested in taking up government jobs can prepare for civil service exams like UPSC, NDA (National Defense Academy) etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Q.  So what really is Management education all about?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. It is a two-year full time or a three year part time course • It will give exposure to subjects like Finance, Marketing, Operations, Human Resource etc. • It will help to develop good logical, analytical and presentation skills• You will be able to look at problems/situations from different perspectives and arrive at an effective solution for the same.• The course teaches teamwork, time management and helps develop a good business perspective.• On an average, you get to study 40 - 45 subjects in the MBA programme. The programme also involves written exams, presentations, short projects, case studies, assignments, summer projects, winter projects etc</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Q.  What are the specializations under MBA Programme?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Finance, Marketing, HRM, Operations Management, Entrepreneurship & Small Business Management, Business Analytics</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading7">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Q.  What are the career opportunities after completing a M.Com course ?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Those who are looking for a career opportunity in the banking sector after M.Com can join nationalized banks like State Bank of India, Union Bank of India etc. as Probationary Ofﬁcer or Customer Relationship Executive. They can also join public sector undertakings like Bharat Sanchar Nigam Limited (BSNL), National Small Industries Corporation Limited (NSIC), Heavy Engineering Corporation Limited (HEC Ltd) etc. FMCG companies like Hindustan Unilever Ltd, Nestle India, and Cadbury India etc. are reputed private companies where they can apply. They may also join insurance companies as Financial Analyst, Credit Ofﬁcer or Loan Ofﬁcer etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading8">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Q.  What is B.Com Finance with ACCA?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. ACCA (the Association of Chartered Certified Accountants) is the Global Body for Professional Accountants. ACCA prepares the students for international careers and champions the needs of small and medium sized business (SMEs) and emerging economies, and promote the value of sustainable business. ACCA supports 219,000 members and 527,000 students in 181 countries,helping them to develop successful careers in accounting and business, with the skills needed by employers. ACCA works through a network of 95 offices and centres and more than 8,500 Approved Employers worldwide, who provide high standards of employee learning and development.
                For more details pertaining to the course, visit "</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading9">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Q.  What is B.Com Finance with CMA?
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Com with CERTIFIED MANAGEMENT ACCOUNTANT (CMA) is an  IMA ACCREDITED UG PROGRAM. IMA (Institute of Management Accountants) is the worldwide association of accountants and financial professionals in business. Founded in 1919, we are one of the largest and most respected associations focused exclusively on advancing the management accounting profession. We are committed to empowering our 100,000+ members—and those throughout the rest of the profession—to strengthen on-the-job skills, better manage companies, and accelerate careers. We invite our members to discover the myriad possibilities within the profession and build an actionable future in management accounting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading10">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Q.  What is the Fee structure of B.Arch ?
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee-60,000/-Semester Payment - Rs 86, 500/- Or Yearly Payment - 1,70,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading11">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                Q.  What is the eligibility criteria for B.Arch ?
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks or equivalent grade in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer) along with Physics, Chemistry and Mathematics. OR 3-Years Diploma, recognized by Central/State Government with minimum 50% marks or equivalent grade in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer) along with Mathematics and English as compulsory subjects.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading12">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Q.  What is the selection criteria for B.Arch.?
                            </button>
                        </h2>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Candidates must obtain a valid score in NATA (National Aptitude Test in Architecture) or JEE (Mains) Paper II (subject to clearance by COA) and will have to sit for a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading13">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Q.  What are the career opportunities after B. Arch.?
                            </button>
                        </h2>
                        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Career opportunities in Architecture field is attractive, lucrative, and has lots of potential. The architectural degree is designed in such a way that it fulfills the criteria of professional certifying bodies. This field covers different kinds of work such as spatial design, safety management, aesthetics, material management, etc. A B.Arch. graduate is equipped to design right from iconic buildings to simple and comfortable living spaces and is sensitive to the various needs of the society. An architect is a combination of Artist, Professional & Entrepreneur who works as per the need of the client. An architecture graduate can also get into various fields such as film making, set designing, management etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading14">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Q.  What is the fee structure of BID ?
                            </button>
                        </h2>
                        <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 60,000-Semester Payment - 56,500/- Or Yearly Payment - 1,10,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading15">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Q.  What is the eligibility criteria for BID ?
                            </button>
                        </h2>
                        <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or 3-Years Diploma in any branch, recognized by Central/State Government or equivalent qualification from any board with minimum 50% marks or equivalent grade(5% relaxation to SC/ST/OBC-Non-creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading16">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Q.  What is the selection criteria for BID ?
                            </button>
                        </h2>
                        <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on the candidate’s overall performance in the last examination followed by Personal Interview (PI).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading17">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Q.  What is the fee structure of BID Lateral Entry ?
                            </button>
                        </h2>
                        <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 60,000-Semester Payment - 56,500/- Or Yearly Payment - 1,10,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading18">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Q.  What is the eligibility criteria for BID Lateral Entry ?
                            </button>
                        </h2>
                        <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in any stream with one year Diploma in Interior design/equivalent qualification from a recognized Central/State Government institution OR 3 years diploma in Architecture/Interior Design from a recognized Central/State Government institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading19">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Q.  What is the selection criteria for BID Lateral Entry ?
                            </button>
                        </h2>
                        <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading20">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Q.  What is the duration of B.Arch. course?
                            </button>
                        </h2>
                        <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The course duration of B.Arch course is 5years.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading21">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Q.  What is the duration of Bachelor in Interior Designing?
                            </button>
                        </h2>
                        <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The course duration of Bachelor in Interior Designing is 4 years and 3 years for lateral entry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading22">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                Q.  What is the fee structure of B.Des (Fashion Design) ?
                            </button>
                        </h2>
                        <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading23">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                Q.  What is the eligibility criteria for B.Des (Fashion Design) ?
                            </button>
                        </h2>
                        <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading24">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                Q.  What is the selection criteria for B.Des (Fashion Design) ?
                            </button>
                        </h2>
                        <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading25">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                Q.  How are students evaluated in regular programs?
                            </button>
                        </h2>
                        <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Students will be evaluated and assessed throughout the semester by way of assignments, projects, internships and presentations. Juries comprising of academicians and industry professionals assess student’s work and capabilities. The aim is to closely monitor students' evolution as competent professionals and provide critical feedback to students on their performance and development.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading26">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                Q.  What are the campus facilities available for students?
                            </button>
                        </h2>
                        <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. On campus resources for students includes, but are not limited to central library, departmental libraries, hostel facilities, canteens, sports zone, campus doctor, high speed internet access, transportation facilities etc. Check out our website (www.rgu.ac) for more details.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading27">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                Q.  Are there any seats reserved for SC/ST/OBC students?
                            </button>
                        </h2>
                        <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, 5% relaxation is given to SC/ST/OBC candidates- non creamy Layer</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading28">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                Q.  In which bank can I apply for education loan?
                            </button>
                        </h2>
                        <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Education loan is offered by Punjab National Bank. For more details kindly visit our website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading29">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                Q.  What is the fee structure of B.Des (Communication Design) ?
                            </button>
                        </h2>
                        <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading30">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                Q.  What is the eligibility criteria for B.Des (Communication Design) ?
                            </button>
                        </h2>
                        <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading31">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                Q.  What is the selection criteria for B.Des (Communication Design) ?
                            </button>
                        </h2>
                        <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading32">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                Q.  What is the fee structure of B.Des (Graphic Design) ?
                            </button>
                        </h2>
                        <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading33">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                Q.  What is the eligibility criteria for B.Des (Graphic Design) ?
                            </button>
                        </h2>
                        <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading34">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                Q.  What is the selection criteria for B.Des (Graphic Design) ?
                            </button>
                        </h2>
                        <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall the performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading35">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                Q.  What is the fee structure of B.Des (Product Design) ?
                            </button>
                        </h2>
                        <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60000-Semester Payment - 56500/- Or Yearly Payment - 110000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading36">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                Q.  What is the eligibility criteria for B.Des (Product Design) ?
                            </button>
                        </h2>
                        <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading37">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                Q.  What is the selection criteria for B.Des (Product Design) ?
                            </button>
                        </h2>
                        <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall the performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading38">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                Q.  What is the fee structure of BFA ?
                            </button>
                        </h2>
                        <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs 10000- Semester Payment - 36500/- Or Yearly Payment - 70000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading39">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                Q.  What is the eligibility criteria for BFA ?
                            </button>
                        </h2>
                        <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non- Creamy Layer.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading40">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                Q.  What is the selection criteria for BFA ?
                            </button>
                        </h2>
                        <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading41">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                Q.  What is the duration of a Bachelor Degree of Fine Arts?
                            </button>
                        </h2>
                        <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Duration of Bachelor of Fine Arts (BFA) degree is 4 years.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading42">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                Q.  What are the career opportunities available for Fine Arts Graduates in India?
                            </button>
                        </h2>
                        <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Graduates holding a BFA degree may ﬁnd careers as: craft or fine artists, multimedia artists, actors, art directors, art teachers or writers etc. Candidates who have completed their master’s in fine arts can avail career options in various ﬁelds such as art studios, advertising companies, publishing houses, product design companies, manufacturing companies, magazines, television, teaching, theater productions and many more.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading43">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                Q.  What is the remuneration of a Fine Arts Graduate in India?
                            </button>
                        </h2>
                        <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The remuneration of a fine arts graduate after graduation depends on the nature of work he/she is engaged in. Graduates working in textile industries, advertising agencies and publishing houses initially obtain a package of nearly Rs. 12,000 – Rs. 25,000. Fine arts professionals working in production houses obtain a salary of nearly Rs. 8,000 – Rs. 20,000 monthly. Students in teaching profession are also earning well. The career opportunities for the fine arts graduates in India is growing at a rapid rate and numerous students are opting for a career in this field.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading44">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                Q.  What is the fee structure of M.Sc Physics ?
                            </button>
                        </h2>
                        <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading45">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                Q.  What is the eligibility criteria for M.Sc Physics ?
                            </button>
                        </h2>
                        <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc.(H) from any recognized University/Institution Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted, from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading46">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                Q.  What is the selection criteria for M.Sc Physics ?
                            </button>
                        </h2>
                        <div id="collapse46" class="accordion-collapse collapse" aria-labelledby="heading46" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection in based on the overall performance in the last examination followed by a Personal Interview (PI).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading47">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                Q.  What are the career opportunities after doing M.Sc Physics ?
                            </button>
                        </h2>
                        <div id="collapse47" class="accordion-collapse collapse" aria-labelledby="heading47" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. M.Sc. is a demanding degree & students can gain a respectable job in this area after completing the programme. There are various specializations that one can pursue in a M.Sc. programme. On completion of the course, students can opt for research studies in top organizations such as ISRO, DRDO etc. They can also work in government or private sector in various technical and non-technical posts. Some of the job profiles for M.Sc. Physics Postgraduates are: Junior Research Fellow, Research Scientist, Medical Physicist, Radiation Physicist, Research Associate, Online Tutor, Subject Matter Expert, Assistant Professor etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading48">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                Q.  What kind of learning facilities does the Physics Department provide?
                            </button>
                        </h2>
                        <div id="collapse48" class="accordion-collapse collapse" aria-labelledby="heading48" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The Physics Department provides an inclusive and competitive atmosphere for excellence in teaching, learning and research with state-of-the-art infrastructure facilities. Royal Global University provides lab facilities to carry out different experiments. Some of the major equipment in the physics lab includes: Dual Trace Oscilloscopes, Hall effect setup, Ultrasonic interferometer, Curie Temperature determination setup, Function generators, Power supplies of different ranges, LCR-Q meter, LCD projector etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading49">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                Q.  What are the career opportunities after completing B.Sc Physics ?
                            </button>
                        </h2>
                        <div id="collapse49" class="accordion-collapse collapse" aria-labelledby="heading49" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc. Physics is an undergraduate course. The course study educates the participants with various aspects of matter, motion, energy, time etc. Candidate can seek career opportunities in research organizations, and other related areas. Pursuing higher education after completing B.Sc. Physics increases the scope of getting into a high profile job with rewarding compensation packages.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading50">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                Q.  What is the fee structure of M.Sc Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse50" class="accordion-collapse collapse" aria-labelledby="heading50" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading51">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                Q.  What is the eligibility criteria for M.Sc Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse51" class="accordion-collapse collapse" aria-labelledby="heading51" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc.(H) from any recognized University/Institution Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted, from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading52">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                Q.  What is the selection criteria for M.Sc Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse52" class="accordion-collapse collapse" aria-labelledby="heading52" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading53">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                Q.  What is the fee structure of M.Sc. Mathematics ?
                            </button>
                        </h2>
                        <div id="collapse53" class="accordion-collapse collapse" aria-labelledby="heading53" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading54">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                Q.  What is the eligibility criteria for M.Sc. Mathematics ?
                            </button>
                        </h2>
                        <div id="collapse54" class="accordion-collapse collapse" aria-labelledby="heading54" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc.(H) from any recognized University/Institution Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading55">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                Q.  What is the selection criteria for M.Sc. Mathematics ?
                            </button>
                        </h2>
                        <div id="collapse55" class="accordion-collapse collapse" aria-labelledby="heading55" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading56">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                Q.  What is the fee structure of B.Sc. Physics?
                            </button>
                        </h2>
                        <div id="collapse56" class="accordion-collapse collapse" aria-labelledby="heading56" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs 10,000-Semester Payment - 39000/- Or Yearly Payment - 75000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading57">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                Q.  What is the eligibility criteria for B.Sc.Physics?
                            </button>
                        </h2>
                        <div id="collapse57" class="accordion-collapse collapse" aria-labelledby="heading57" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading58">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                Q.  What is the selection criteria for B.Sc Physics?
                            </button>
                        </h2>
                        <div id="collapse58" class="accordion-collapse collapse" aria-labelledby="heading58" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading59">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                Q.  What is the fee structure of B.Sc Chemistry?
                            </button>
                        </h2>
                        <div id="collapse59" class="accordion-collapse collapse" aria-labelledby="heading59" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading60">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
                                Q.  What is the eligibility criteria for B.Sc - Chemistry?
                            </button>
                        </h2>
                        <div id="collapse60" class="accordion-collapse collapse" aria-labelledby="heading60" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading61">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                Q.  What is the selection criteria for B.Sc Chemistry?
                            </button>
                        </h2>
                        <div id="collapse61" class="accordion-collapse collapse" aria-labelledby="heading61" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading62">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse62" aria-expanded="false" aria-controls="collapse62">
                                Q.  What is the fee structure of B.Sc Mathematics ?
                            </button>
                        </h2>
                        <div id="collapse62" class="accordion-collapse collapse" aria-labelledby="heading62" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading63">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
                                Q.  What is the eligibility criteria for B.Sc.- Mathematics?
                            </button>
                        </h2>
                        <div id="collapse63" class="accordion-collapse collapse" aria-labelledby="heading63" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in the subjects opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading64">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse64" aria-expanded="false" aria-controls="collapse64">
                                Q.  What is the selection criteria for B.Sc Mathematics ?
                            </button>
                        </h2>
                        <div id="collapse64" class="accordion-collapse collapse" aria-labelledby="heading64" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is done based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading65">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse65" aria-expanded="false" aria-controls="collapse65">
                                Q.  What is the fee structure of BCA ?
                            </button>
                        </h2>
                        <div id="collapse65" class="accordion-collapse collapse" aria-labelledby="heading65" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 51,500/- Or Yearly Payment - 100000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading66">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse66" aria-expanded="false" aria-controls="collapse66">
                                Q.  What is the eligibility criteria for BCA ?
                            </button>
                        </h2>
                        <div id="collapse66" class="accordion-collapse collapse" aria-labelledby="heading66" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with Mathematics/ Computer Science / Information Technology as one of the compulsory subjects, with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading67">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse67" aria-expanded="false" aria-controls="collapse67">
                                Q.  What is the selection criteria for BCA ?
                            </button>
                        </h2>
                        <div id="collapse67" class="accordion-collapse collapse" aria-labelledby="heading67" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading68">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse68" aria-expanded="false" aria-controls="collapse68">
                                Q.  What is the fee structure of MCA ?
                            </button>
                        </h2>
                        <div id="collapse68" class="accordion-collapse collapse" aria-labelledby="heading68" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading69">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse69" aria-expanded="false" aria-controls="collapse69">
                                Q.  What is the eligibility criteria for MCA ?
                            </button>
                        </h2>
                        <div id="collapse69" class="accordion-collapse collapse" aria-labelledby="heading69" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Tech./BE (CS/IT) or BCA or B.Sc. (IT), from any recognized University/Institution with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)
                                                           OR
                3-Year Bachelor’s Degree from any recognized University/Institution in any field with Mathematics as mandatory subject either in 10+2 or at Graduation Level and minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)"</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading70">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse70" aria-expanded="false" aria-controls="collapse70">
                                Q.  What is the selection criteria for MCA ?
                            </button>
                        </h2>
                        <div id="collapse70" class="accordion-collapse collapse" aria-labelledby="heading70" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Candidates must obtain a valid score in JMEE or RJMEE and will have to sit for a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading71">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse71" aria-expanded="false" aria-controls="collapse71">
                                Q.  What is the fee structure of B.Sc.(IT) ?
                            </button>
                        </h2>
                        <div id="collapse71" class="accordion-collapse collapse" aria-labelledby="heading71" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000-Semester Payment - 46,500/- Or Yearly Payment - 90,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading72">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse72" aria-expanded="false" aria-controls="collapse72">
                                Q.  What is the eligibility criteria for B.Sc.(IT)?
                            </button>
                        </h2>
                        <div id="collapse72" class="accordion-collapse collapse" aria-labelledby="heading72" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with Mathematics/ Computer Science / Information Technology as one of the compulsory subjects, with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading73">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse73" aria-expanded="false" aria-controls="collapse73">
                                Q.  What is the selection criteria for B.Sc.(IT)?
                            </button>
                        </h2>
                        <div id="collapse73" class="accordion-collapse collapse" aria-labelledby="heading73" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading74">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse74" aria-expanded="false" aria-controls="collapse74">
                                Q.  What is the fee structure of M.Sc (IT) ?
                            </button>
                        </h2>
                        <div id="collapse74" class="accordion-collapse collapse" aria-labelledby="heading74" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs 10,000-Semester Payment - 39000/- Or Yearly Payment - 75000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading75">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse75" aria-expanded="false" aria-controls="collapse75">
                                Q.  What is the eligibility criteria for M.Sc (IT) ?
                            </button>
                        </h2>
                        <div id="collapse75" class="accordion-collapse collapse" aria-labelledby="heading75" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Tech./BE (CS/IT) or BCA or B.Sc. (IT), from any recognized University/Institution with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer) OR 3-year bachelor’s degree from any recognized University/Institution in any field with Mathematics as mandatory subject either in 10+2 or at Graduation Level and minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading76">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse76" aria-expanded="false" aria-controls="collapse76">
                                Q.  What is the selection criteria for M.Sc (IT) ?
                            </button>
                        </h2>
                        <div id="collapse76" class="accordion-collapse collapse" aria-labelledby="heading76" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading77">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse77" aria-expanded="false" aria-controls="collapse77">
                                Q.  What is the fee structure of M.Sc Botany ?
                            </button>
                        </h2>
                        <div id="collapse77" class="accordion-collapse collapse" aria-labelledby="heading77" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading78">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse78" aria-expanded="false" aria-controls="collapse78">
                                Q.  What is the eligibility criteria for M.Sc Botany ?
                            </button>
                        </h2>
                        <div id="collapse78" class="accordion-collapse collapse" aria-labelledby="heading78" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc. from any recognized University/Institution in relevant field Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted, from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading79">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse79" aria-expanded="false" aria-controls="collapse79">
                                Q.  What is the selection criteria for M.Sc Botany ?
                            </button>
                        </h2>
                        <div id="collapse79" class="accordion-collapse collapse" aria-labelledby="heading79" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading80">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse80" aria-expanded="false" aria-controls="collapse80">
                                Q.  What is the fee structure of M.Sc Zoology ?
                            </button>
                        </h2>
                        <div id="collapse80" class="accordion-collapse collapse" aria-labelledby="heading80" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading81">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse81" aria-expanded="false" aria-controls="collapse81">
                                Q.  What is the eligibility criteria for M.Sc Zoology ?
                            </button>
                        </h2>
                        <div id="collapse81" class="accordion-collapse collapse" aria-labelledby="heading81" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc.(H) from any recognized University/Institution in relevant field Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in the subjects opted, from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading82">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse82" aria-expanded="false" aria-controls="collapse82">
                                Q.  What is the selection criteria for M.Sc Zoology ?
                            </button>
                        </h2>
                        <div id="collapse82" class="accordion-collapse collapse" aria-labelledby="heading82" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading83">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse83" aria-expanded="false" aria-controls="collapse83">
                                Q.  What is the fee structure of B.Sc Botany ?
                            </button>
                        </h2>
                        <div id="collapse83" class="accordion-collapse collapse" aria-labelledby="heading83" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading84">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse84" aria-expanded="false" aria-controls="collapse84">
                                Q.  What is the eligibility criteria for B.Sc Botany ?
                            </button>
                        </h2>
                        <div id="collapse84" class="accordion-collapse collapse" aria-labelledby="heading84" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading85">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse85" aria-expanded="false" aria-controls="collapse85">
                                Q.  What is the selection criteria for B.Sc Botany ?
                            </button>
                        </h2>
                        <div id="collapse85" class="accordion-collapse collapse" aria-labelledby="heading85" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading86">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse86" aria-expanded="false" aria-controls="collapse86">
                                Q.  What is the fee structure of B.Sc Zoology ?
                            </button>
                        </h2>
                        <div id="collapse86" class="accordion-collapse collapse" aria-labelledby="heading86" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading87">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse87" aria-expanded="false" aria-controls="collapse87">
                                Q.  What is the eligibility criteria for B.Sc.Zoology ?
                            </button>
                        </h2>
                        <div id="collapse87" class="accordion-collapse collapse" aria-labelledby="heading87" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading88">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse88" aria-expanded="false" aria-controls="collapse88">
                                Q.  What is the selection criteria for B.Sc Zoology ?
                            </button>
                        </h2>
                        <div id="collapse88" class="accordion-collapse collapse" aria-labelledby="heading88" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading89">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse89" aria-expanded="false" aria-controls="collapse89">
                                Q.  What is the fee structure of B.Sc Forensic Science ?
                            </button>
                        </h2>
                        <div id="collapse89" class="accordion-collapse collapse" aria-labelledby="heading89" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading90">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse90" aria-expanded="false" aria-controls="collapse90">
                                Q.  What is the selection criteria of B.Sc Forensic Science ?
                            </button>
                        </h2>
                        <div id="collapse90" class="accordion-collapse collapse" aria-labelledby="heading90" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading91">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse91" aria-expanded="false" aria-controls="collapse91">
                                Q.  What is the fee structure of M.Sc Forensic Science ?
                            </button>
                        </h2>
                        <div id="collapse91" class="accordion-collapse collapse" aria-labelledby="heading91" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading92">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse92" aria-expanded="false" aria-controls="collapse92">
                                Q.  What is the selection criteria of M.Sc Forensic Science ?
                            </button>
                        </h2>
                        <div id="collapse92" class="accordion-collapse collapse" aria-labelledby="heading92" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading93">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse93" aria-expanded="false" aria-controls="collapse93">
                                Q. Does RGU provides Forestry Course?
                            </button>
                        </h2>
                        <div id="collapse93" class="accordion-collapse collapse" aria-labelledby="heading93" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, RGU provides Forestry Course, both B.Sc Forestry and M.Sc Forestry.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading94">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse94" aria-expanded="false" aria-controls="collapse94">
                                Q.  What is the fee structure of B.Sc Forestry?
                            </button>
                        </h2>
                        <div id="collapse94" class="accordion-collapse collapse" aria-labelledby="heading94" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading95">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse95" aria-expanded="false" aria-controls="collapse95">
                                Q.  What is the eligibility criteria for B.Sc Forestry?
                            </button>
                        </h2>
                        <div id="collapse95" class="accordion-collapse collapse" aria-labelledby="heading95" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading96">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse96" aria-expanded="false" aria-controls="collapse96">
                                Q.  What is the fee structure of M.Sc Forestry?
                            </button>
                        </h2>
                        <div id="collapse96" class="accordion-collapse collapse" aria-labelledby="heading96" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading97">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse97" aria-expanded="false" aria-controls="collapse97">
                                Q.  What is the eligibility criteria for M.Sc Forestry?
                            </button>
                        </h2>
                        <div id="collapse97" class="accordion-collapse collapse" aria-labelledby="heading97" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc. in Agriculture/Forestry/Horticulture
                /Biology or related field with minimum 50%
                marks in aggregate or equivalent grade from any
                recognized University/Institution (5% relaxation
                to SC/ST/OBC – Non Creamy Layer)"</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading98">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse98" aria-expanded="false" aria-controls="collapse98">
                                Q.  What is the fee structure of M.Sc Bio-Technology ?
                            </button>
                        </h2>
                        <div id="collapse98" class="accordion-collapse collapse" aria-labelledby="heading98" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading99">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse99" aria-expanded="false" aria-controls="collapse99">
                                Q.  What is the eligibility criteria for M.Sc Bio-Technology ?
                            </button>
                        </h2>
                        <div id="collapse99" class="accordion-collapse collapse" aria-labelledby="heading99" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s degree in any branch of Biology (B.Sc. in Botany/Zoology/Bio-Technology/Food Science/Nutrition/Agriculture Sciences etc.), Medical Sciences (MBBS/B.Pharm), Veterinary Sciences (B.V.Sc.)/Bio-Tech/Biomedical Eng. (B.E/B.Tech.) or Ayurveda (BAMS) from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading100">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse100" aria-expanded="false" aria-controls="collapse100">
                                Q.  What is the selection criteria for M.Sc Bio-Technology ?
                            </button>
                        </h2>
                        <div id="collapse100" class="accordion-collapse collapse" aria-labelledby="heading100" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading101">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse101" aria-expanded="false" aria-controls="collapse101">
                                Q.  What is the fee structure of M.Sc Bio-Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse101" class="accordion-collapse collapse" aria-labelledby="heading101" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading102">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse102" aria-expanded="false" aria-controls="collapse102">
                                Q.  What is the eligibility criteria for M.Sc Bio-Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse102" class="accordion-collapse collapse" aria-labelledby="heading102" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s degree in any branch of Biology (B.Sc. in Bio-Chemistry/Botany/Zoology/Bio-Technology/Food Science/Nutrition/Agriculture Sciences etc.), Medical Sciences (MBBS/B.Pharm), Veterinary Sciences (B.V.Sc.)/Bio-Tech/Biomedical Eng. (B.E/B.Tech.), Ayurveda (BAMS) or Chemistry from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading103">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse103" aria-expanded="false" aria-controls="collapse103">
                                Q.  What is the selection criteria for M.Sc Bio-Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse103" class="accordion-collapse collapse" aria-labelledby="heading103" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading104">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse104" aria-expanded="false" aria-controls="collapse104">
                                Q.  What is the fee structure of M.Sc Micro-Biology ?
                            </button>
                        </h2>
                        <div id="collapse104" class="accordion-collapse collapse" aria-labelledby="heading104" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading105">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse105" aria-expanded="false" aria-controls="collapse105">
                                Q.  What is the eligibility criteria for M.Sc Micro-Biology ?
                            </button>
                        </h2>
                        <div id="collapse105" class="accordion-collapse collapse" aria-labelledby="heading105" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. B.Sc.(H) from any recognized University/Institution in relevant field Or B.Sc. with minimum 50% marks in aggregate and minimum 50% in subject opted, from any recognized University/Institution or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading106">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse106" aria-expanded="false" aria-controls="collapse106">
                                Q.  What is the selection criteria for M.Sc Micro-Biology ?
                            </button>
                        </h2>
                        <div id="collapse106" class="accordion-collapse collapse" aria-labelledby="heading106" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading107">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse107" aria-expanded="false" aria-controls="collapse107">
                                Q.  What is the fee structure of B.Sc Bio-Technology ?
                            </button>
                        </h2>
                        <div id="collapse107" class="accordion-collapse collapse" aria-labelledby="heading107" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading108">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse108" aria-expanded="false" aria-controls="collapse108">
                                Q.  What is the eligibility criteria for B.Sc  Bio-Technology ?
                            </button>
                        </h2>
                        <div id="collapse108" class="accordion-collapse collapse" aria-labelledby="heading108" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading109">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse109" aria-expanded="false" aria-controls="collapse109">
                                Q.  What is the selection criteria for B.Sc Bio-Technology ?
                            </button>
                        </h2>
                        <div id="collapse109" class="accordion-collapse collapse" aria-labelledby="heading109" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading110">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse110" aria-expanded="false" aria-controls="collapse110">
                                Q.  What is the fee structure of B.Sc. Bio-Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse110" class="accordion-collapse collapse" aria-labelledby="heading110" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading111">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse111" aria-expanded="false" aria-controls="collapse111">
                                Q.  What is the eligibility criteria for B.Sc. Bio-Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse111" class="accordion-collapse collapse" aria-labelledby="heading111" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading112">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse112" aria-expanded="false" aria-controls="collapse112">
                                Q.  What is the selection criteria for B.Sc. Bio-Chemistry ?
                            </button>
                        </h2>
                        <div id="collapse112" class="accordion-collapse collapse" aria-labelledby="heading112" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on the overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading113">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse113" aria-expanded="false" aria-controls="collapse113">
                                Q.  What is the fee structure of B.Sc Microbiology ?
                            </button>
                        </h2>
                        <div id="collapse113" class="accordion-collapse collapse" aria-labelledby="heading113" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading114">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse114" aria-expanded="false" aria-controls="collapse114">
                                Q.  What is the eligibility criteria for B.Sc Microbiology ?
                            </button>
                        </h2>
                        <div id="collapse114" class="accordion-collapse collapse" aria-labelledby="heading114" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading115">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse115" aria-expanded="false" aria-controls="collapse115">
                                Q.  What is the selection criteria for B.Sc Microbiology ?
                            </button>
                        </h2>
                        <div id="collapse115" class="accordion-collapse collapse" aria-labelledby="heading115" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Selection is based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading116">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse116" aria-expanded="false" aria-controls="collapse116">
                                Q.  What is the fee structure of B.Sc  Food Technology ?
                            </button>
                        </h2>
                        <div id="collapse116" class="accordion-collapse collapse" aria-labelledby="heading116" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading117">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse117" aria-expanded="false" aria-controls="collapse117">
                                Q.  What are the career prospects after doing M.Sc. Biochemistry?
                            </button>
                        </h2>
                        <div id="collapse117" class="accordion-collapse collapse" aria-labelledby="heading117" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Due to its multidisciplinary nature, the course allows students to enter different research areas including interdisciplinary research areas like bioengineering and tissue engineering and thus open a lot of opportunities for students to join as PhD Students, junior research fellow in research institutes and universities. Biochemists are in great demand in research institutes, government departments, forensic laboratories and environment agencies. Students can also apply in the private sector like pharmaceutical, food, biotechnology, water and agricultural industries. This course also encourages students to take research and teaching as a career and work as lecturer and assistant professor.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading118">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse118" aria-expanded="false" aria-controls="collapse118">
                                Q.  What are the career prospects after completing M.Sc. Biotechnology?
                            </button>
                        </h2>
                        <div id="collapse118" class="accordion-collapse collapse" aria-labelledby="heading118" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Postgraduates are hired in industries such as pharmaceuticals, manufacturing, biotechnology, research organizations, FMCG and as teachers in colleges and universities. After completing the course students can also work as agricultural scientist, bioinformatics specialist, environmental/food biotechnologist, genetic engineer, pharmacognosist, proteome and genome analyst. Postgraduates are also encouraged to undertake research as a career.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading119">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse119" aria-expanded="false" aria-controls="collapse119">
                                Q.  What are the career prospects after completing M.Sc. Microbiology ?
                            </button>
                        </h2>
                        <div id="collapse119" class="accordion-collapse collapse" aria-labelledby="heading119" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Microbiology as a field has seen a radical growth in recent years. Owing to its rapid expansion, a number of job opportunities open up for microbiology graduates every year in industries such as food industries, pharmaceutical industries, hospitals, chemical industries etc. Some of the job profiles for microbiology graduates are Microbiologist, Medical Writer, Clinical Researcher, Molecular Biologist, Medical Officer, Nutritionist, Lecturer etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading120">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse120" aria-expanded="false" aria-controls="collapse120">
                                Q.  What is the eligibility criteria for B.Sc Food Technology ?
                            </button>
                        </h2>
                        <div id="collapse120" class="accordion-collapse collapse" aria-labelledby="heading120" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with English as one of the subjects and Physics, Chemistry and Mathematics /Biology as compulsory subjects with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading121">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse121" aria-expanded="false" aria-controls="collapse121">
                                Q.  What is the selection criteria for B.Sc Food Technology ?
                            </button>
                        </h2>
                        <div id="collapse121" class="accordion-collapse collapse" aria-labelledby="heading121" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading122">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse122" aria-expanded="false" aria-controls="collapse122">
                                Q.  What is the fee structure of M.Sc Food Technology ?
                            </button>
                        </h2>
                        <div id="collapse122" class="accordion-collapse collapse" aria-labelledby="heading122" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading123">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse123" aria-expanded="false" aria-controls="collapse123">
                                Q.  What is the selection criteria of M.Sc Food Technology ?
                            </button>
                        </h2>
                        <div id="collapse123" class="accordion-collapse collapse" aria-labelledby="heading123" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading124">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse124" aria-expanded="false" aria-controls="collapse124">
                                Q.  What is the fee structure of M.Sc. Geography ?
                            </button>
                        </h2>
                        <div id="collapse124" class="accordion-collapse collapse" aria-labelledby="heading124" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading125">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse125" aria-expanded="false" aria-controls="collapse125">
                                Q.  What is the eligibility criteria for M.Sc. Geography ?
                            </button>
                        </h2>
                        <div id="collapse125" class="accordion-collapse collapse" aria-labelledby="heading125" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in Science from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading126">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse126" aria-expanded="false" aria-controls="collapse126">
                                Q.  What is the selection criteria for M.Sc. Geography ?
                            </button>
                        </h2>
                        <div id="collapse126" class="accordion-collapse collapse" aria-labelledby="heading126" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading127">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse127" aria-expanded="false" aria-controls="collapse127">
                                Q.  What is the fee structure of MA Geography ?
                            </button>
                        </h2>
                        <div id="collapse127" class="accordion-collapse collapse" aria-labelledby="heading127" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading128">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse128" aria-expanded="false" aria-controls="collapse128">
                                Q.  What is the eligibility criteria for MA Geography ?
                            </button>
                        </h2>
                        <div id="collapse128" class="accordion-collapse collapse" aria-labelledby="heading128" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in Geography / Major from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) OR Bachelor’s Degree in any stream with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading129">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse129" aria-expanded="false" aria-controls="collapse129">
                                Q.  What is the selection criteria for MA Geography ?
                            </button>
                        </h2>
                        <div id="collapse129" class="accordion-collapse collapse" aria-labelledby="heading129" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading130">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse130" aria-expanded="false" aria-controls="collapse130">
                                Q.  What is the fee structure of M.Sc. Geology ?
                            </button>
                        </h2>
                        <div id="collapse130" class="accordion-collapse collapse" aria-labelledby="heading130" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading131">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse131" aria-expanded="false" aria-controls="collapse131">
                                Q.  What is the eligibility criteria for M.Sc. Geology ?
                            </button>
                        </h2>
                        <div id="collapse131" class="accordion-collapse collapse" aria-labelledby="heading131" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor's Degree with Geology Honours or a bachelor’s degree with Geology as a subject from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading132">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse132" aria-expanded="false" aria-controls="collapse132">
                                Q.  What is the selection criteria for M.Sc. Geology ?
                            </button>
                        </h2>
                        <div id="collapse132" class="accordion-collapse collapse" aria-labelledby="heading132" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading133">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse133" aria-expanded="false" aria-controls="collapse133">
                                Q.  What is the fee structure of M.Sc. Geoinformatics ?
                            </button>
                        </h2>
                        <div id="collapse133" class="accordion-collapse collapse" aria-labelledby="heading133" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading134">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse134" aria-expanded="false" aria-controls="collapse134">
                                Q.  What is the selection criteria for M.Sc. Geoinformatics?
                            </button>
                        </h2>
                        <div id="collapse134" class="accordion-collapse collapse" aria-labelledby="heading134" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading135">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse135" aria-expanded="false" aria-controls="collapse135">
                                Q.  What is the fee structure of B.Sc.Geography ?
                            </button>
                        </h2>
                        <div id="collapse135" class="accordion-collapse collapse" aria-labelledby="heading135" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading136">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse136" aria-expanded="false" aria-controls="collapse136">
                                Q.  What is the eligibility criteria for B.Sc.Geography ?
                            </button>
                        </h2>
                        <div id="collapse136" class="accordion-collapse collapse" aria-labelledby="heading136" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized board/council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading137">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse137" aria-expanded="false" aria-controls="collapse137">
                                Q.  What is the selection criteria for B.Sc.Geography ?
                            </button>
                        </h2>
                        <div id="collapse137" class="accordion-collapse collapse" aria-labelledby="heading137" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading138">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse138" aria-expanded="false" aria-controls="collapse138">
                                Q.  What is the fee structure of BA Geography ?
                            </button>
                        </h2>
                        <div id="collapse138" class="accordion-collapse collapse" aria-labelledby="heading138" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading139">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse139" aria-expanded="false" aria-controls="collapse139">
                                Q.  What is the eligibility criteria for BA Geography ?
                            </button>
                        </h2>
                        <div id="collapse139" class="accordion-collapse collapse" aria-labelledby="heading139" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in Arts or equivalent from a recognized board/council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading140">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse140" aria-expanded="false" aria-controls="collapse140">
                                Q.  What is the selection criteria for BA Geography ?
                            </button>
                        </h2>
                        <div id="collapse140" class="accordion-collapse collapse" aria-labelledby="heading140" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading141">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse141" aria-expanded="false" aria-controls="collapse141">
                                Q.  What is the fee structure of B.Sc. Geology ?
                            </button>
                        </h2>
                        <div id="collapse141" class="accordion-collapse collapse" aria-labelledby="heading141" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43,500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading142">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse142" aria-expanded="false" aria-controls="collapse142">
                                Q.  What is the eligibility criteria for B.Sc. Geology ?
                            </button>
                        </h2>
                        <div id="collapse142" class="accordion-collapse collapse" aria-labelledby="heading142" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading143">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse143" aria-expanded="false" aria-controls="collapse143">
                                Q.  What is the selection criteria for B.Sc. Geology ?
                            </button>
                        </h2>
                        <div id="collapse143" class="accordion-collapse collapse" aria-labelledby="heading143" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading144">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse144" aria-expanded="false" aria-controls="collapse144">
                                Q.  What is the fee structure of MA (J & MC) ?
                            </button>
                        </h2>
                        <div id="collapse144" class="accordion-collapse collapse" aria-labelledby="heading144" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 51,500/- Or Yearly Payment - 100000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading145">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse145" aria-expanded="false" aria-controls="collapse145">
                                Q.  What is the eligibility criteria for MA (J & MC) ?
                            </button>
                        </h2>
                        <div id="collapse145" class="accordion-collapse collapse" aria-labelledby="heading145" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in relevant field from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer).OR A Bachelor’s Degree in any field with 1-year diploma in relevant field, from any recognized University/Institution with  minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading146">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse146" aria-expanded="false" aria-controls="collapse146">
                                Q.  What is the selection criteria for MA (J & MC) ?
                            </button>
                        </h2>
                        <div id="collapse146" class="accordion-collapse collapse" aria-labelledby="heading146" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading147">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse147" aria-expanded="false" aria-controls="collapse147">
                                Q.  What are some of the highlights of M.A. in Communication at RGU ?
                            </button>
                        </h2>
                        <div id="collapse147" class="accordion-collapse collapse" aria-labelledby="heading147" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The intensive two-years/four-semester course of MA in Mass Communication allows a systematic progression with practical work and theory classes that helps students to experience the full range of technical expertise, conceptual skills and artistic expression required to become accomplished media practitioners. Though it is a comprehensive course comprising of Screenwriting, Photography, Sound & Radio study, Television Production, New Media Storytelling and Digital Media Arts, the revised curriculum encourages the students to adopt a creative, professional, and scholarly approach to both traditional and new media practices. The reinvented curriculum engages students with the rapidly transforming mediascape while retaining the MCRC tradition of combining professional media expertise with social commitment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading148">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse148" aria-expanded="false" aria-controls="collapse148">
                                Q.  What is the fee structure of BA (J & MC)?
                            </button>
                        </h2>
                        <div id="collapse148" class="accordion-collapse collapse" aria-labelledby="heading148" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 59000/- Or Yearly Payment - 110000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading149">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse149" aria-expanded="false" aria-controls="collapse149">
                                Q.  What is the eligibility criteria for BA (J & MC)?
                            </button>
                        </h2>
                        <div id="collapse149" class="accordion-collapse collapse" aria-labelledby="heading149" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading150">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse150" aria-expanded="false" aria-controls="collapse150">
                                Q.  What is the selection criteria for BA (J & MC)?
                            </button>
                        </h2>
                        <div id="collapse150" class="accordion-collapse collapse" aria-labelledby="heading150" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading151">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse151" aria-expanded="false" aria-controls="collapse151">
                                Q.  What is the fee structure of M.Sc. Animation and Visual Effects?
                            </button>
                        </h2>
                        <div id="collapse151" class="accordion-collapse collapse" aria-labelledby="heading151" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading152">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse152" aria-expanded="false" aria-controls="collapse152">
                                Q.  What is the selection criteria for M.Sc. Animation and Visual Effects ?
                            </button>
                        </h2>
                        <div id="collapse152" class="accordion-collapse collapse" aria-labelledby="heading152" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading153">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse153" aria-expanded="false" aria-controls="collapse153">
                                Q.  What is the fee structure of  B.Sc Animation and Visual Effects?
                            </button>
                        </h2>
                        <div id="collapse153" class="accordion-collapse collapse" aria-labelledby="heading153" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading154">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse154" aria-expanded="false" aria-controls="collapse154">
                                Q.  What is the eligibility criteria for B.Sc Animation and Visual Effects?
                            </button>
                        </h2>
                        <div id="collapse154" class="accordion-collapse collapse" aria-labelledby="heading154" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in any stream or equivalent from a recognized Board /Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading155">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse155" aria-expanded="false" aria-controls="collapse155">
                                Q.  What is the selection criteria for B.Sc.Animation and Visual Effects?
                            </button>
                        </h2>
                        <div id="collapse155" class="accordion-collapse collapse" aria-labelledby="heading155" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading156">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse156" aria-expanded="false" aria-controls="collapse156">
                                Q.  What is the fee structure of MA - Psychology ?
                            </button>
                        </h2>
                        <div id="collapse156" class="accordion-collapse collapse" aria-labelledby="heading156" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading157">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse157" aria-expanded="false" aria-controls="collapse157">
                                Q.  What is the eligibility criteria for MA - Psychology ?
                            </button>
                        </h2>
                        <div id="collapse157" class="accordion-collapse collapse" aria-labelledby="heading157" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in any field from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading158">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse158" aria-expanded="false" aria-controls="collapse158">
                                Q.  What is the selection criteria for MA - Psychology ?
                            </button>
                        </h2>
                        <div id="collapse158" class="accordion-collapse collapse" aria-labelledby="heading158" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading159">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse159" aria-expanded="false" aria-controls="collapse159">
                                Q.  What is the fee structure of MA - Clinical Psychology ?
                            </button>
                        </h2>
                        <div id="collapse159" class="accordion-collapse collapse" aria-labelledby="heading159" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading160">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse160" aria-expanded="false" aria-controls="collapse160">
                                Q.  What is the eligibility criteria for MA - Clinical Psychology ?
                            </button>
                        </h2>
                        <div id="collapse160" class="accordion-collapse collapse" aria-labelledby="heading160" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree with Psychology Honors or a Bachelor's Degree with Psychology as Major/Minor (minimum 12 credits) from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading161">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse161" aria-expanded="false" aria-controls="collapse161">
                                Q.  What is the selection criteria for MA - Clinical Psychology ?
                            </button>
                        </h2>
                        <div id="collapse161" class="accordion-collapse collapse" aria-labelledby="heading161" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading162">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse162" aria-expanded="false" aria-controls="collapse162">
                                Q.  What is the fee structure of BA  - Psychology ?
                            </button>
                        </h2>
                        <div id="collapse162" class="accordion-collapse collapse" aria-labelledby="heading162" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading163">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse163" aria-expanded="false" aria-controls="collapse163">
                                Q.  What is the eligibility criteria for BA - Psychology ?
                            </button>
                        </h2>
                        <div id="collapse163" class="accordion-collapse collapse" aria-labelledby="heading163" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading164">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse164" aria-expanded="false" aria-controls="collapse164">
                                Q.  What is the selection criteria for BA- Psychology ?
                            </button>
                        </h2>
                        <div id="collapse164" class="accordion-collapse collapse" aria-labelledby="heading164" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading165">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse165" aria-expanded="false" aria-controls="collapse165">
                                Q.  What is the fee structure of BA - Applied Psychology ?
                            </button>
                        </h2>
                        <div id="collapse165" class="accordion-collapse collapse" aria-labelledby="heading165" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading166">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse166" aria-expanded="false" aria-controls="collapse166">
                                Q.  What is the eligibility criteria for BA - Applied Psychology ?
                            </button>
                        </h2>
                        <div id="collapse166" class="accordion-collapse collapse" aria-labelledby="heading166" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading167">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse167" aria-expanded="false" aria-controls="collapse167">
                                Q.  What is the selection criteria for BA - Applied Psychology ?
                            </button>
                        </h2>
                        <div id="collapse167" class="accordion-collapse collapse" aria-labelledby="heading167" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading168">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse168" aria-expanded="false" aria-controls="collapse168">
                                Q.  What is the fee structure of MA - English ?
                            </button>
                        </h2>
                        <div id="collapse168" class="accordion-collapse collapse" aria-labelledby="heading168" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading169">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse169" aria-expanded="false" aria-controls="collapse169">
                                Q.  What is the eligibility criteria for MA - English ?
                            </button>
                        </h2>
                        <div id="collapse169" class="accordion-collapse collapse" aria-labelledby="heading169" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree with English Honours/ Major from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) Or Bachelor’s Degree in any stream with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading170">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse170" aria-expanded="false" aria-controls="collapse170">
                                Q.  What is the selection criteria for MA - English ?
                            </button>
                        </h2>
                        <div id="collapse170" class="accordion-collapse collapse" aria-labelledby="heading170" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading171">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse171" aria-expanded="false" aria-controls="collapse171">
                                Q.  What is the fee structure of BA English ?
                            </button>
                        </h2>
                        <div id="collapse171" class="accordion-collapse collapse" aria-labelledby="heading171" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading172">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse172" aria-expanded="false" aria-controls="collapse172">
                                Q.  What is the eligibility criteria for BA English ?
                            </button>
                        </h2>
                        <div id="collapse172" class="accordion-collapse collapse" aria-labelledby="heading172" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading173">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse173" aria-expanded="false" aria-controls="collapse173">
                                Q.  What is the selection criteria for BA English ?
                            </button>
                        </h2>
                        <div id="collapse173" class="accordion-collapse collapse" aria-labelledby="heading173" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading174">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse174" aria-expanded="false" aria-controls="collapse174">
                                Q.  What is the fee structure of MSW ?
                            </button>
                        </h2>
                        <div id="collapse174" class="accordion-collapse collapse" aria-labelledby="heading174" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading175">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse175" aria-expanded="false" aria-controls="collapse175">
                                Q.  What is the eligibility criteria for MSW ?
                            </button>
                        </h2>
                        <div id="collapse175" class="accordion-collapse collapse" aria-labelledby="heading175" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in any field from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading176">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse176" aria-expanded="false" aria-controls="collapse176">
                                Q.  What is the selection criteria for MSW ?
                            </button>
                        </h2>
                        <div id="collapse176" class="accordion-collapse collapse" aria-labelledby="heading176" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading177">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse177" aria-expanded="false" aria-controls="collapse177">
                                Q. What are the specializations provided in MSW?
                            </button>
                        </h2>
                        <div id="collapse177" class="accordion-collapse collapse" aria-labelledby="heading177" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The specializations under MSW are Community Development and Family & Child Welfare</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading178">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse178" aria-expanded="false" aria-controls="collapse178">
                                Q.  What is the fee structure of BSW ?
                            </button>
                        </h2>
                        <div id="collapse178" class="accordion-collapse collapse" aria-labelledby="heading178" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading179">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse179" aria-expanded="false" aria-controls="collapse179">
                                Q.  What is the eligibility criteria for BSW ?
                            </button>
                        </h2>
                        <div id="collapse179" class="accordion-collapse collapse" aria-labelledby="heading179" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/ OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading180">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse180" aria-expanded="false" aria-controls="collapse180">
                                Q.  What is the selection criteria for BSW ?
                            </button>
                        </h2>
                        <div id="collapse180" class="accordion-collapse collapse" aria-labelledby="heading180" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading181">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse181" aria-expanded="false" aria-controls="collapse181">
                                Q.  What is the fee structure of BA Sociology ?
                            </button>
                        </h2>
                        <div id="collapse181" class="accordion-collapse collapse" aria-labelledby="heading181" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading182">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse182" aria-expanded="false" aria-controls="collapse182">
                                Q.  What is the eligibility criteria for BA Sociology ?
                            </button>
                        </h2>
                        <div id="collapse182" class="accordion-collapse collapse" aria-labelledby="heading182" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/ OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading183">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse183" aria-expanded="false" aria-controls="collapse183">
                                Q.  What is the selection criteria for BA Sociology ?
                            </button>
                        </h2>
                        <div id="collapse183" class="accordion-collapse collapse" aria-labelledby="heading183" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading184">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse184" aria-expanded="false" aria-controls="collapse184">
                                Q.  What is the fee structure of BA Economics ?
                            </button>
                        </h2>
                        <div id="collapse184" class="accordion-collapse collapse" aria-labelledby="heading184" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading185">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse185" aria-expanded="false" aria-controls="collapse185">
                                Q.  What is the eligibility criteria for BA Economics ?
                            </button>
                        </h2>
                        <div id="collapse185" class="accordion-collapse collapse" aria-labelledby="heading185" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ ST/ OBC – Non-Creamy Layer) along with Mathematics or Economics as one of the compulsory subjects.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading186">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse186" aria-expanded="false" aria-controls="collapse186">
                                Q.  What is the selection criteria for BA  Economics ?
                            </button>
                        </h2>
                        <div id="collapse186" class="accordion-collapse collapse" aria-labelledby="heading186" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading187">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse187" aria-expanded="false" aria-controls="collapse187">
                                Q.  What is the fee structure of BA Administrative Service ?
                            </button>
                        </h2>
                        <div id="collapse187" class="accordion-collapse collapse" aria-labelledby="heading187" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading188">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse188" aria-expanded="false" aria-controls="collapse188">
                                Q.  What is the eligibility criteria for BA Administrative Service ?
                            </button>
                        </h2>
                        <div id="collapse188" class="accordion-collapse collapse" aria-labelledby="heading188" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading189">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse189" aria-expanded="false" aria-controls="collapse189">
                                Q.  What is the selection criteria for BA Administrative Service ?
                            </button>
                        </h2>
                        <div id="collapse189" class="accordion-collapse collapse" aria-labelledby="heading189" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading190">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse190" aria-expanded="false" aria-controls="collapse190">
                                Q.  What is the fee structure of BA Public Administration?
                            </button>
                        </h2>
                        <div id="collapse190" class="accordion-collapse collapse" aria-labelledby="heading190" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading191">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse191" aria-expanded="false" aria-controls="collapse191">
                                Q.  What is the eligibility criteria for BA Public Administration ?
                            </button>
                        </h2>
                        <div id="collapse191" class="accordion-collapse collapse" aria-labelledby="heading191" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading192">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse192" aria-expanded="false" aria-controls="collapse192">
                                Q.  What is the selection criteria for BA Public Administration ?
                            </button>
                        </h2>
                        <div id="collapse192" class="accordion-collapse collapse" aria-labelledby="heading192" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading193">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse193" aria-expanded="false" aria-controls="collapse193">
                                Q.  What is the fee structure of MA  Public Administration ?
                            </button>
                        </h2>
                        <div id="collapse193" class="accordion-collapse collapse" aria-labelledby="heading193" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading194">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse194" aria-expanded="false" aria-controls="collapse194">
                                Q.  What is the eligibility criteria for MA  Public Administration ?
                            </button>
                        </h2>
                        <div id="collapse194" class="accordion-collapse collapse" aria-labelledby="heading194" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in any field from recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading195">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse195" aria-expanded="false" aria-controls="collapse195">
                                Q.  What is the selection criteria for MA Public Administration ?
                            </button>
                        </h2>
                        <div id="collapse195" class="accordion-collapse collapse" aria-labelledby="heading195" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading196">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse196" aria-expanded="false" aria-controls="collapse196">
                                Q.  What is the fee structure of MA Pol.Science ?
                            </button>
                        </h2>
                        <div id="collapse196" class="accordion-collapse collapse" aria-labelledby="heading196" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading197">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse197" aria-expanded="false" aria-controls="collapse197">
                                Q.  What is the eligibility criteria for MA Pol.Science ?
                            </button>
                        </h2>
                        <div id="collapse197" class="accordion-collapse collapse" aria-labelledby="heading197" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree with Political Science Honours/ Major from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) OR Bachelor’s Degree in any stream with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading198">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse198" aria-expanded="false" aria-controls="collapse198">
                                Q.  What is the selection criteria for MA Pol.Science ?
                            </button>
                        </h2>
                        <div id="collapse198" class="accordion-collapse collapse" aria-labelledby="heading198" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading199">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse199" aria-expanded="false" aria-controls="collapse199">
                                Q.  What is the fee structure of MA History ?
                            </button>
                        </h2>
                        <div id="collapse199" class="accordion-collapse collapse" aria-labelledby="heading199" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading200">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse200" aria-expanded="false" aria-controls="collapse200">
                                Q.  What is the eligibility criteria for MA History ?
                            </button>
                        </h2>
                        <div id="collapse200" class="accordion-collapse collapse" aria-labelledby="heading200" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree with History Honours/ Major from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) OR Bachelor’s Degree in any stream with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading201">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse201" aria-expanded="false" aria-controls="collapse201">
                                Q.  What is the selection criteria for MA History ?
                            </button>
                        </h2>
                        <div id="collapse201" class="accordion-collapse collapse" aria-labelledby="heading201" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading202">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse202" aria-expanded="false" aria-controls="collapse202">
                                Q.  What is the fee structure of BA Pol.Science ?
                            </button>
                        </h2>
                        <div id="collapse202" class="accordion-collapse collapse" aria-labelledby="heading202" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading203">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse203" aria-expanded="false" aria-controls="collapse203">
                                Q.  What is the eligibility criteria for BA Pol.Science ?
                            </button>
                        </h2>
                        <div id="collapse203" class="accordion-collapse collapse" aria-labelledby="heading203" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading204">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse204" aria-expanded="false" aria-controls="collapse204">
                                Q.  What is the selection criteria for BA Pol.Science ?
                            </button>
                        </h2>
                        <div id="collapse204" class="accordion-collapse collapse" aria-labelledby="heading204" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading205">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse205" aria-expanded="false" aria-controls="collapse205">
                                Q.  What is the fee structure of BA History ?
                            </button>
                        </h2>
                        <div id="collapse205" class="accordion-collapse collapse" aria-labelledby="heading205" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading206">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse206" aria-expanded="false" aria-controls="collapse206">
                                Q.  What is the eligibility criteria for BA History ?
                            </button>
                        </h2>
                        <div id="collapse206" class="accordion-collapse collapse" aria-labelledby="heading206" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading207">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse207" aria-expanded="false" aria-controls="collapse207">
                                Q.  What is the selection criteria for BA History ?
                            </button>
                        </h2>
                        <div id="collapse207" class="accordion-collapse collapse" aria-labelledby="heading207" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in the last examination followed by a Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading208">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse208" aria-expanded="false" aria-controls="collapse208">
                                Q.  What is the fee structure of an LLM course ?
                            </button>
                        </h2>
                        <div id="collapse208" class="accordion-collapse collapse" aria-labelledby="heading208" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 65000/- Or Yearly Payment - 1,30,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading209">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse209" aria-expanded="false" aria-controls="collapse209">
                                Q.  What is the eligibility criteria for an LLM course ?
                            </button>
                        </h2>
                        <div id="collapse209" class="accordion-collapse collapse" aria-labelledby="heading209" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in Law, from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).NO AGE LIMIT</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading210">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse210" aria-expanded="false" aria-controls="collapse210">
                                Q.  What is the selection criteria of the LLM course ?
                            </button>
                        </h2>
                        <div id="collapse210" class="accordion-collapse collapse" aria-labelledby="heading210" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading211">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse211" aria-expanded="false" aria-controls="collapse211">
                                Q.  What is the fee structure of LLM Morning Shift course ?
                            </button>
                        </h2>
                        <div id="collapse211" class="accordion-collapse collapse" aria-labelledby="heading211" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 75000/- Or Yearly Payment - 1,50,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading212">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse212" aria-expanded="false" aria-controls="collapse212">
                                Q.  What is the eligibility criteria for the LLM Morning Shift course ?
                            </button>
                        </h2>
                        <div id="collapse212" class="accordion-collapse collapse" aria-labelledby="heading212" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in Law, from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).NO AGE LIMIT</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading213">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse213" aria-expanded="false" aria-controls="collapse213">
                                Q.  What is the selection criteria of LLM Morning Shift course ?
                            </button>
                        </h2>
                        <div id="collapse213" class="accordion-collapse collapse" aria-labelledby="heading213" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading214">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse214" aria-expanded="false" aria-controls="collapse214">
                                Q.  What is the fee structure of BA - LLB(H) course?
                            </button>
                        </h2>
                        <div id="collapse214" class="accordion-collapse collapse" aria-labelledby="heading214" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 71500/- Or Yearly Payment - 1,40,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading215">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse215" aria-expanded="false" aria-controls="collapse215">
                                Q.  What is the eligibility criteria for BA - LLB(H) course ?
                            </button>
                        </h2>
                        <div id="collapse215" class="accordion-collapse collapse" aria-labelledby="heading215" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading216">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse216" aria-expanded="false" aria-controls="collapse216">
                                Q.  What is the selection criteria for BA - LLB (H) course ?
                            </button>
                        </h2>
                        <div id="collapse216" class="accordion-collapse collapse" aria-labelledby="heading216" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. An entrance test will be conducted by Royal Global University followed by Personal Interview. Candidates with a valid score of CLAT (Common Law Admission Test) will be exempted from appearing in the entrance test conducted by Royal Global University</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading217">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse217" aria-expanded="false" aria-controls="collapse217">
                                Q.  What is the fee structure of B.Sc./BA - Hotel Management course ?
                            </button>
                        </h2>
                        <div id="collapse217" class="accordion-collapse collapse" aria-labelledby="heading217" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 54000/- Or Yearly Payment - 105000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading218">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse218" aria-expanded="false" aria-controls="collapse218">
                                Q.  What is the eligibility criteria for B.Sc./BA - Hotel Management course ?
                            </button>
                        </h2>
                        <div id="collapse218" class="accordion-collapse collapse" aria-labelledby="heading218" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading219">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse219" aria-expanded="false" aria-controls="collapse219">
                                Q.  What is the selection criteria for B.Sc./BA - Hotel Management course ?
                            </button>
                        </h2>
                        <div id="collapse219" class="accordion-collapse collapse" aria-labelledby="heading219" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading220">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse220" aria-expanded="false" aria-controls="collapse220">
                                Q.  What is the fee structure of M.Sc. - Hotel Management/MHM course ?
                            </button>
                        </h2>
                        <div id="collapse220" class="accordion-collapse collapse" aria-labelledby="heading220" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 46500/- Or Yearly Payment - 90000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading221">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse221" aria-expanded="false" aria-controls="collapse221">
                                Q.  What is the eligibility criteria for M.Sc. - Hotel Management/MHM course ?
                            </button>
                        </h2>
                        <div id="collapse221" class="accordion-collapse collapse" aria-labelledby="heading221" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in Hotel Management from any recognized University/ Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading222">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse222" aria-expanded="false" aria-controls="collapse222">
                                Q.  What is the selection criteria for M.Sc. - Hotel Management/MHM course?
                            </button>
                        </h2>
                        <div id="collapse222" class="accordion-collapse collapse" aria-labelledby="heading222" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading223">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse223" aria-expanded="false" aria-controls="collapse223">
                                Q.  What is the fee structure of Bachelor in Hotel Management - BHM course ?
                            </button>
                        </h2>
                        <div id="collapse223" class="accordion-collapse collapse" aria-labelledby="heading223" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 54000/- Or Yearly Payment - 105000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading224">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse224" aria-expanded="false" aria-controls="collapse224">
                                Q.  What is the eligibility criteria for Bachelor of Hotel Management - BHM course ?
                            </button>
                        </h2>
                        <div id="collapse224" class="accordion-collapse collapse" aria-labelledby="heading224" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading225">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse225" aria-expanded="false" aria-controls="collapse225">
                                Q.  What is the selection criteria for Bachelor of Hotel Management - BHM course ?
                            </button>
                        </h2>
                        <div id="collapse225" class="accordion-collapse collapse" aria-labelledby="heading225" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading226">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse226" aria-expanded="false" aria-controls="collapse226">
                                Q.  What is the fee structure for BA Culinary Arts?
                            </button>
                        </h2>
                        <div id="collapse226" class="accordion-collapse collapse" aria-labelledby="heading226" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 54000/- Or Yearly Payment - 105000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading227">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse227" aria-expanded="false" aria-controls="collapse227">
                                Q.  What is the eligibility criteria for BA Culinary Arts?
                            </button>
                        </h2>
                        <div id="collapse227" class="accordion-collapse collapse" aria-labelledby="heading227" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading228">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse228" aria-expanded="false" aria-controls="collapse228">
                                Q.  What is the selection criteria for BA Culinary Arts?
                            </button>
                        </h2>
                        <div id="collapse228" class="accordion-collapse collapse" aria-labelledby="heading228" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading229">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse229" aria-expanded="false" aria-controls="collapse229">
                                Q.  What is the fee structure of B.Sc./BA Travel & Tourism Management course?
                            </button>
                        </h2>
                        <div id="collapse229" class="accordion-collapse collapse" aria-labelledby="heading229" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading230">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse230" aria-expanded="false" aria-controls="collapse230">
                                Q.  What is the eligibility criteria for B.Sc./BA Travel & Tourism Management course ?
                            </button>
                        </h2>
                        <div id="collapse230" class="accordion-collapse collapse" aria-labelledby="heading230" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading231">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse231" aria-expanded="false" aria-controls="collapse231">
                                Q.  What is the selection criteria for B.Sc./BA Travel & Tourism Management course ?
                            </button>
                        </h2>
                        <div id="collapse231" class="accordion-collapse collapse" aria-labelledby="heading231" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading232">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse232" aria-expanded="false" aria-controls="collapse232">
                                Q.  What is the fee structure of Master in Travel & Tourism Management - MTTM course ?
                            </button>
                        </h2>
                        <div id="collapse232" class="accordion-collapse collapse" aria-labelledby="heading232" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading233">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse233" aria-expanded="false" aria-controls="collapse233">
                                Q.  What is the eligibility criteria for Master in Travel & Tourism Management - MTTM course ?
                            </button>
                        </h2>
                        <div id="collapse233" class="accordion-collapse collapse" aria-labelledby="heading233" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Bachelor’s Degree in Travel & Tourism Management / Major from any recognized University/Institution with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer) Or Bachelor’s Degree in any stream with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading234">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse234" aria-expanded="false" aria-controls="collapse234">
                                Q.  What is the selection criteria for Master in Travel & Tourism Management - MTTM course ?
                            </button>
                        </h2>
                        <div id="collapse234" class="accordion-collapse collapse" aria-labelledby="heading234" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading235">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse235" aria-expanded="false" aria-controls="collapse235">
                                Q.  What is the fee structure of Bachelor of Travel & Tourism Management - BTTM course ?
                            </button>
                        </h2>
                        <div id="collapse235" class="accordion-collapse collapse" aria-labelledby="heading235" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading236">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse236" aria-expanded="false" aria-controls="collapse236">
                                Q.  What is the eligibility criteria for Bachelor of Travel & Tourism Management - BTTM course ?
                            </button>
                        </h2>
                        <div id="collapse236" class="accordion-collapse collapse" aria-labelledby="heading236" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading237">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse237" aria-expanded="false" aria-controls="collapse237">
                                Q.  What is the selection criteria for Bachelor of Travel & Tourism Management - BTTM course?
                            </button>
                        </h2>
                        <div id="collapse237" class="accordion-collapse collapse" aria-labelledby="heading237" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading238">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse238" aria-expanded="false" aria-controls="collapse238">
                                Q.  What is the fee structure of B.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse238" class="accordion-collapse collapse" aria-labelledby="heading238" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 88,000/- Or Yearly Payment - 1,73,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading239">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse239" aria-expanded="false" aria-controls="collapse239">
                                Q.  What is the eligibility criteria of B.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse239" class="accordion-collapse collapse" aria-labelledby="heading239" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with English as one of the subjects and Physics, Chemistry and Mathematics /Biology as compulsory subjects with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading240">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse240" aria-expanded="false" aria-controls="collapse240">
                                Q.  What is the selection criteria for the B.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse240" class="accordion-collapse collapse" aria-labelledby="heading240" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading241">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse241" aria-expanded="false" aria-controls="collapse241">
                                Q.  What is the fee structure of D.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse241" class="accordion-collapse collapse" aria-labelledby="heading241" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 76,500/- Or Yearly Payment - 150000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading242">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse242" aria-expanded="false" aria-controls="collapse242">
                                Q.  What is the eligibility criteria of D.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse242" class="accordion-collapse collapse" aria-labelledby="heading242" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/ Council with English as one of the subjects and Physics, Chemistry and Mathematics /Biology as compulsory subjects with minimum 50% marks in aggregate or equivalent grade and minimum 50% in subject opted (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading243">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse243" aria-expanded="false" aria-controls="collapse243">
                                Q.  What is the selection criteria for D.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse243" class="accordion-collapse collapse" aria-labelledby="heading243" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading244">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse244" aria-expanded="false" aria-controls="collapse244">
                                Q.  What is the fee structure of the M.Pharm course ?
                            </button>
                        </h2>
                        <div id="collapse244" class="accordion-collapse collapse" aria-labelledby="heading244" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 40,000/-Caution Money (Common for all streams) - Refundable - 5000/-Admission Fee- Rs 10,000-Semester Payment - 74500/- Or Yearly Payment - 145000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading245">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse245" aria-expanded="false" aria-controls="collapse245">
                                Q.  What is the fee structure for Bachelor in Physiotherapy - BPT course ?
                            </button>
                        </h2>
                        <div id="collapse245" class="accordion-collapse collapse" aria-labelledby="heading245" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 60,000-Semester Payment - 61500/- Or Yearly Payment - 120000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading246">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse246" aria-expanded="false" aria-controls="collapse246">
                                Q.  What is the eligibility criteria for Bachelor in Physiotherapy - BPT course ?
                            </button>
                        </h2>
                        <div id="collapse246" class="accordion-collapse collapse" aria-labelledby="heading246" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream with minimum 50% marks in aggregate or equivalent grade in Physics, Chemistry, Biology and English as a core subject from a recognized Board/Council. (5% relaxation to SC/ST/OBC - Non-Creamy Layer).Age Limit: Minimum 17 years and maximum 30 years of age as on 31st December of the year in which the admission is sought.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading247">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse247" aria-expanded="false" aria-controls="collapse247">
                                Q.  What is the selection criteria for Bachelor in Physiotherapy - BPT course ?
                            </button>
                        </h2>
                        <div id="collapse247" class="accordion-collapse collapse" aria-labelledby="heading247" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading248">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse248" aria-expanded="false" aria-controls="collapse248">
                                Q.  What is the fee structure of Masters in Physiotherapy - MPT course ?
                            </button>
                        </h2>
                        <div id="collapse248" class="accordion-collapse collapse" aria-labelledby="heading248" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000-Semester Payment - 46500/- Or Yearly Payment - 90,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading249">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse249" aria-expanded="false" aria-controls="collapse249">
                                Q.  What is the eligibility criteria for Masters in Physiotherapy - MPT course ?
                            </button>
                        </h2>
                        <div id="collapse249" class="accordion-collapse collapse" aria-labelledby="heading249" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. BPT from a recognized University with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC – Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading250">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse250" aria-expanded="false" aria-controls="collapse250">
                                Q.  What is the selection criteria for Masters in Physiotherapy - MPT course ?
                            </button>
                        </h2>
                        <div id="collapse250" class="accordion-collapse collapse" aria-labelledby="heading250" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading251">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse251" aria-expanded="false" aria-controls="collapse251">
                                Q. What are the specializations provided in MPT?
                            </button>
                        </h2>
                        <div id="collapse251" class="accordion-collapse collapse" aria-labelledby="heading251" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The specializations under MPT are -
                                   <br> 1. Musculoskeletal Disorders & Sports.
                                   <br> 2. Adult Neurology
                                   <br> 3. Cardio respiratory Disorders and Rehabilitation-I
                                   <br> 4. Community Based Rehabilitation.</p>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading253">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse253" aria-expanded="false" aria-controls="collapse253">
                                Q.  What is the fee structure of B.Sc. in Nutrition and Dietetics course ?
                            </button>
                        </h2>
                        <div id="collapse253" class="accordion-collapse collapse" aria-labelledby="heading253" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading254">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse254" aria-expanded="false" aria-controls="collapse254">
                                Q.  What is the eligibility criteria for B.Sc.in Nutrition and Dietetics course ?
                            </button>
                        </h2>
                        <div id="collapse254" class="accordion-collapse collapse" aria-labelledby="heading254" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream (Biology/Life Science) or equivalent from a recognized Board/ Council with minimum 50% marks in aggregate or equivalent grade (5% relaxation to SC/ST/OBC - Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading255">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse255" aria-expanded="false" aria-controls="collapse255">
                                Q.  What is the selection criteria for B.Sc. in Nutrition and Dietetics course ?
                            </button>
                        </h2>
                        <div id="collapse255" class="accordion-collapse collapse" aria-labelledby="heading255" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading256">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse256" aria-expanded="false" aria-controls="collapse256">
                                Q.  What is the fee structure of M.Sc. in Nutrition and Dietetics course ?
                            </button>
                        </h2>
                        <div id="collapse256" class="accordion-collapse collapse" aria-labelledby="heading256" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000-Semester Payment - 43500/- Or Yearly Payment - 85,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading257">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse257" aria-expanded="false" aria-controls="collapse257">
                                Q.  What is the fee structure of B.Sc Emergency & Critical Care course ?
                            </button>
                        </h2>
                        <div id="collapse257" class="accordion-collapse collapse" aria-labelledby="heading257" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000-Semester Payment - 46500/- Or Yearly Payment - 90,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading258">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse258" aria-expanded="false" aria-controls="collapse258">
                                Q.  What is the eligibility criteria for a B.Sc Emergency & Critical Care course ?
                            </button>
                        </h2>
                        <div id="collapse258" class="accordion-collapse collapse" aria-labelledby="heading258" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream with minimum 50% marks in aggregate or equivalent grade in Physics, Chemistry, Biology taken together from a recognized Board/Council.(5% relaxation to SC/ST/OBC - Non-Creamy Layer).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading259">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse259" aria-expanded="false" aria-controls="collapse259">
                                Q.  What is the selection criteria for B.Sc Emergency & Critical Care course ?
                            </button>
                        </h2>
                        <div id="collapse259" class="accordion-collapse collapse" aria-labelledby="heading259" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading260">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse260" aria-expanded="false" aria-controls="collapse260">
                                Q.  What is the fee structure of M.Optometry course ?
                            </button>
                        </h2>
                        <div id="collapse260" class="accordion-collapse collapse" aria-labelledby="heading260" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000-Semester Payment - 46,500/- Or Yearly Payment - 90,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading261">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse261" aria-expanded="false" aria-controls="collapse261">
                                Q.  What is the fee structure of the B.Optometry course ?
                            </button>
                        </h2>
                        <div id="collapse261" class="accordion-collapse collapse" aria-labelledby="heading261" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000-Semester Payment - 46,500/- Or Yearly Payment - 90,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading262">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse262" aria-expanded="false" aria-controls="collapse262">
                                Q.  What is the eligibility criteria for the B. Optometry course ?
                            </button>
                        </h2>
                        <div id="collapse262" class="accordion-collapse collapse" aria-labelledby="heading262" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in Science Stream or equivalent from a recognized Board/ Council with Physics, Chemistry, Mathematics/ Biology & English as compulsory subjects and with minimum 50% marks in aggregate (5% relaxation to SC/ST/OBC – Non-Creamy Layer)
                *Candidates passing with PCM without Biology in 10+2 will have to undergo remedial classes/ bridge course for Biology.
                *Candidates passing with PCB without Mathematics in 10+2 will have to undergo remedial classes/ bridge course for Mathematics."</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading263">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse263" aria-expanded="false" aria-controls="collapse263">
                                Q.  What is the selection criteria for the B. Optometry course ?
                            </button>
                        </h2>
                        <div id="collapse263" class="accordion-collapse collapse" aria-labelledby="heading263" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading264">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse264" aria-expanded="false" aria-controls="collapse264">
                                Q.  What is the fee structure of B.Sc. in Medical Laboratory Technology- BMLT course ?
                            </button>
                        </h2>
                        <div id="collapse264" class="accordion-collapse collapse" aria-labelledby="heading264" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 60,000-Semester Payment - 51,500/- Or Yearly Payment - 1,00,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading265">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse265" aria-expanded="false" aria-controls="collapse265">
                                Q.  What is the eligibility criteria for B.Sc in Medical Laboratory Technology- BMLT course ?
                            </button>
                        </h2>
                        <div id="collapse265" class="accordion-collapse collapse" aria-labelledby="heading265" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No answer found</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading266">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse266" aria-expanded="false" aria-controls="collapse266">
                                Q.  What is the selection criteria for B.Sc. in Medical Laboratory Technology- BMLT ?
                            </button>
                        </h2>
                        <div id="collapse266" class="accordion-collapse collapse" aria-labelledby="heading266" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading267">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse267" aria-expanded="false" aria-controls="collapse267">
                                Q.  What is the fee structure of M.Sc. in Medical Laboratory Technology- MMLT course ?
                            </button>
                        </h2>
                        <div id="collapse267" class="accordion-collapse collapse" aria-labelledby="heading267" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable – Rs 10000/-Admission Fee- Rs 10,000-Semester Payment - 50000/- Or Yearly Payment - 85000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading268">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse268" aria-expanded="false" aria-controls="collapse268">
                                Q.  What are the specializations under MMLT Programme?
                            </button>
                        </h2>
                        <div id="collapse268" class="accordion-collapse collapse" aria-labelledby="heading268" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The specializations under MMLT are
                1.Hematology& Blood Banking
                2.Microbiology</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading269">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse269" aria-expanded="false" aria-controls="collapse269">
                                Q.  What is the fee structure of B.Sc.in Operation Theatre Technology course ?
                            </button>
                        </h2>
                        <div id="collapse269" class="accordion-collapse collapse" aria-labelledby="heading269" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 51500/- Or Yearly Payment - 1,00,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading270">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse270" aria-expanded="false" aria-controls="collapse270">
                                Q.  What is the eligibility criteria for B.Sc.in Operation Theatre Technology course?
                            </button>
                        </h2>
                        <div id="collapse270" class="accordion-collapse collapse" aria-labelledby="heading270" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/Council, with minimum 50% marks or equivalent grade in Physics, Chemistry & Biology taken together (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading271">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse271" aria-expanded="false" aria-controls="collapse271">
                                Q.  What is the selection criteria for B.Sc. in Operation Theatre Technology?
                            </button>
                        </h2>
                        <div id="collapse271" class="accordion-collapse collapse" aria-labelledby="heading271" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading272">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse272" aria-expanded="false" aria-controls="collapse272">
                                Q.  What is the fee structure of B.Sc. in Radiography & Advance Imaging Technology course?
                            </button>
                        </h2>
                        <div id="collapse272" class="accordion-collapse collapse" aria-labelledby="heading272" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000-Semester Payment - 51500/- Or Yearly Payment - 1,00,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading273">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse273" aria-expanded="false" aria-controls="collapse273">
                                Q.  What is the eligibility criteria for B.Sc. in Radiography & Advance Imaging Technology course ?
                            </button>
                        </h2>
                        <div id="collapse273" class="accordion-collapse collapse" aria-labelledby="heading273" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 10+2 in science stream or equivalent from a recognized Board/Council, with minimum 50% marks or equivalent grade in Physics, Chemistry & Biology taken together (5% relaxation to SC/ST/OBC-Non-Creamy Layer)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading274">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse274" aria-expanded="false" aria-controls="collapse274">
                                Q.  What is the selection criteria for B.Sc. in Radiography & Advance Imaging Technology ?
                            </button>
                        </h2>
                        <div id="collapse274" class="accordion-collapse collapse" aria-labelledby="heading274" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading275">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse275" aria-expanded="false" aria-controls="collapse275">
                                Q.  What is the fee structure of B.Sc.Nursing course ?
                            </button>
                        </h2>
                        <div id="collapse275" class="accordion-collapse collapse" aria-labelledby="heading275" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 60,000/-Semester Payment - 1,01,500/- Or Yearly Payment - 200000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading276">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse276" aria-expanded="false" aria-controls="collapse276">
                                Q.  What is the eligibility criteria for B.Sc.Nursing course ?
                            </button>
                        </h2>
                        <div id="collapse276" class="accordion-collapse collapse" aria-labelledby="heading276" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. i) 10+2 in Science Stream and should have passed in PCB & English as compulsory subject ii) Scored, minimum 50% marks in PCB taken together iii) (5% relaxation to SC/ST/OBC – Non-Creamy layer) iv) Student should be medically fit and,v) Student must be minimum 17 years of age as on 31st December of the year in which admission is sought.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading277">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse277" aria-expanded="false" aria-controls="collapse277">
                                Q.  What is the selection criteria for B.Sc. Nursing ?
                            </button>
                        </h2>
                        <div id="collapse277" class="accordion-collapse collapse" aria-labelledby="heading277" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading278">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse278" aria-expanded="false" aria-controls="collapse278">
                                Q.  What is the fee structure of B.Sc. Nursing - Post Basic course ?
                            </button>
                        </h2>
                        <div id="collapse278" class="accordion-collapse collapse" aria-labelledby="heading278" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000/-Semester Payment - 81500/- Or Yearly Payment - 160000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading279">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse279" aria-expanded="false" aria-controls="collapse279">
                                Q.  What is the eligibility criteria for B.Sc. Nursing - Post Basic course ?
                            </button>
                        </h2>
                        <div id="collapse279" class="accordion-collapse collapse" aria-labelledby="heading279" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Passed the Higher Secondary or Senior Secondary or intermediate or 10+2 or an equivalent examination recognized by the university for this purpose. Those who have done 10+1 in or before 1986, will be eligible for admission .Obtained a certificate in General Nursing and Midwifery and is registered as R.N.R.M. with the State Nurses Registration Council. A male nurse, trained before the implementation of the new integrated course besides being registered as a nurse with State Nurses Registration Council, shall produce evidence of training approved by Indian Nursing Council for a similar duration in lieu of midwifery in any one of the following areas:
                O.T, Techniques , Ophthalmic Nursing,  Leprosy Nursing ,TB Nursing , Psychiatric Nursing , Neurological and Neuro surgical Nursing, Community Health Nursing, Cancer Nursing ,Orthopedic Nursing.
                Candidates must also be medically fit.
                Student shall be admitted once in a year"</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading280">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse280" aria-expanded="false" aria-controls="collapse280">
                                Q.  What is the selection criteria for B.Sc. Nursing - Post Basic ?
                            </button>
                        </h2>
                        <div id="collapse280" class="accordion-collapse collapse" aria-labelledby="heading280" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading281">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse281" aria-expanded="false" aria-controls="collapse281">
                                Q.  What is the fee structure of the General Nursing & Midwifery course ?
                            </button>
                        </h2>
                        <div id="collapse281" class="accordion-collapse collapse" aria-labelledby="heading281" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10,000/-Admission Fee- Rs 50,000/-Semester Payment - 76500/- Or Yearly Payment - 150000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading282">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse282" aria-expanded="false" aria-controls="collapse282">
                                Q.  What is the eligibility criteria for the General Nursing & Midwifery course ?
                            </button>
                        </h2>
                        <div id="collapse282" class="accordion-collapse collapse" aria-labelledby="heading282" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. i) 10+2 with English and must obtained a minimum of 40% in the qualifying examination and English individually from any recognized board. Candidates who have passed from State Open School recognized by the State Government and National Institute of Open School (NIOS) recognized by the Central Government are eligible for application. However, Science is preferable.
                ii) 10+2 with English with 40% marks in a vocational ANM course from a school recognized by Indian Nursing Council
                iii) 10+2 with English having 40% of marks in Vocational Stream-Health care Science from a recognized State/Central board.Registered ANM with pass mark.
                iv) Registered ANM with pass mark."</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading283">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse283" aria-expanded="false" aria-controls="collapse283">
                                Q.  What is the selection criteria for General Nursing & Midwifery ?
                            </button>
                        </h2>
                        <div id="collapse283" class="accordion-collapse collapse" aria-labelledby="heading283" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Based on overall performance in last examination followed by Personal Interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading284">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse284" aria-expanded="false" aria-controls="collapse284">
                                Q.  What is the fee structure of M.Sc. Nursing course ?
                            </button>
                        </h2>
                        <div id="collapse284" class="accordion-collapse collapse" aria-labelledby="heading284" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000/-Semester Payment - 81500/- Or Yearly Payment - 160000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading285">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse285" aria-expanded="false" aria-controls="collapse285">
                                Q.  What is the fee structure of Ph.D. course ?
                            </button>
                        </h2>
                        <div id="collapse285" class="accordion-collapse collapse" aria-labelledby="heading285" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fee- Rs 50,000/- Per Semester-Rs 64500 OR Rs 1,25,000/- Yearly</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading286">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse286" aria-expanded="false" aria-controls="collapse286">
                                Q.  Does RGU offer Ph.D. degree?
                            </button>
                        </h2>
                        <div id="collapse286" class="accordion-collapse collapse" aria-labelledby="heading286" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading287">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse287" aria-expanded="false" aria-controls="collapse287">
                                Q.  What are the subjects in which RGU offers Ph.D.?
                            </button>
                        </h2>
                        <div id="collapse287" class="accordion-collapse collapse" aria-labelledby="heading287" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Royal Global University offers Ph.D.in the following areas- MATHEMATICS •PHYSICS •CHEMISTRY •MECHANICAL ENGINEERING •COMPUTER SCIENCE& ENGINEERING •CIVIL ENGINEERING •MANAGEMENT •PSYCHOLOGY •FINEARTS •JOURNALISM&MASS COMMUNICATION •HOTEL MANAGEMENT •ENGLISH •COMMERCE •HISTORY •LAW •BOTANY •ZOOLOGY •BIO-TECHNOLOGY •BIO-CHEMISTRY •MICRO-BIOLOGY •ENVIRONMENTAL SCIENCE •GEOGRAPHY •GEOLOGY •ECONOMICS •SOCIOLOGY •POLITICAL SCIENCE •SOCIAL WORK •PUBLIC ADMINISTRATION •PHARMACY •NURSING •PHYSIOTHERAPY •TRAVEL & TOURISM etc</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading288">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse288" aria-expanded="false" aria-controls="collapse288">
                                Q.  Is the written exam compulsory for Ph.D?
                            </button>
                        </h2>
                        <div id="collapse288" class="accordion-collapse collapse" aria-labelledby="heading288" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Candidates with NET/SLET are exempted from the written examination. However, they will have to appear for the personal interview.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading289">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse289" aria-expanded="false" aria-controls="collapse289">
                                Q.  What is the exam pattern of the Ph.D entrance exam ?
                            </button>
                        </h2>
                        <div id="collapse289" class="accordion-collapse collapse" aria-labelledby="heading289" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The Ph.D. entrance examination comprises of two parts - Written exam followed by a personal interview.The written exam consist of both objective & descriptive questions.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading290">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse290" aria-expanded="false" aria-controls="collapse290">
                                Q.  Can I get the syllabus for the Ph.D. examination ?
                            </button>
                        </h2>
                        <div id="collapse290" class="accordion-collapse collapse" aria-labelledby="heading290" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. There is no prescribed syllabus as such. You may follow the NET/SLET syllabus pattern.The written exam consists of two parts - Part I deals with research methodology and generally consists of multiple choice questions & Part II is subject specific and is descriptive in nature.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading291">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse291" aria-expanded="false" aria-controls="collapse291">
                                Q.  How will I get to know that my application has been accepted and how will I know the date and time of the entrance exam?
                            </button>
                        </h2>
                        <div id="collapse291" class="accordion-collapse collapse" aria-labelledby="heading291" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. You will get a time to time follow up from a RGU counselor. Also, you will get a call letter in your registered mail id which will contain the details of the entrance examination.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading292">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse292" aria-expanded="false" aria-controls="collapse292">
                                Q.  When will the Ph.D Entrance Examination be held ?
                            </button>
                        </h2>
                        <div id="collapse292" class="accordion-collapse collapse" aria-labelledby="heading292" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. There are two sessions in a year for Ph.D. admission (January to June)&( July to December).Check our website for Ph.D admission notifications.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading293">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse293" aria-expanded="false" aria-controls="collapse293">
                                Q.  I am a working person, will I have to submit a NOC from my employer to get enrolled in part-time Ph.D ?
                            </button>
                        </h2>
                        <div id="collapse293" class="accordion-collapse collapse" aria-labelledby="heading293" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, you will have to submit an NOC at the time of admission.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading294">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse294" aria-expanded="false" aria-controls="collapse294">
                                Q.  Will I have to submit migration certificate if I enroll myself for a Ph.D programme ?
                            </button>
                        </h2>
                        <div id="collapse294" class="accordion-collapse collapse" aria-labelledby="heading294" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, one will have to submit your migration certificate at the time of registration.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading295">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse295" aria-expanded="false" aria-controls="collapse295">
                                Q.  What is the fee structure for the Hostel Room - 2 Seater(Suit) ?
                            </button>
                        </h2>
                        <div id="collapse295" class="accordion-collapse collapse" aria-labelledby="heading295" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 2,40,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading296">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse296" aria-expanded="false" aria-controls="collapse296">
                                Q.  What is the fee structure for the Hostel Room- 2 Seater (Premium)?
                            </button>
                        </h2>
                        <div id="collapse296" class="accordion-collapse collapse" aria-labelledby="heading296" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 2,10,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading297">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse297" aria-expanded="false" aria-controls="collapse297">
                                Q.  What is the fee structure for the Hostel Room- 2 Seater(Aditya &Harsha House) ?
                            </button>
                        </h2>
                        <div id="collapse297" class="accordion-collapse collapse" aria-labelledby="heading297" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,92,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading298">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse298" aria-expanded="false" aria-controls="collapse298">
                                Q.  What is the fee structure for the Hostel Room - 3 Seater (Samaya & Heyansh House) ?
                            </button>
                        </h2>
                        <div id="collapse298" class="accordion-collapse collapse" aria-labelledby="heading298" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,80,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading299">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse299" aria-expanded="false" aria-controls="collapse299">
                                Q.  What is the fee structure for the Hostel Room - 3 Seater(Aditya &Harsha House)?
                            </button>
                        </h2>
                        <div id="collapse299" class="accordion-collapse collapse" aria-labelledby="heading299" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,50,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading300">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse300" aria-expanded="false" aria-controls="collapse300">
                                Q.  What is the fee structure for the Hostel Room - 4 Seater(Cat.-N) (Samaya & Heyansh House) ?
                            </button>
                        </h2>
                        <div id="collapse300" class="accordion-collapse collapse" aria-labelledby="heading300" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,32,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading301">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse301" aria-expanded="false" aria-controls="collapse301">
                                Q.  What is the fee structure for the Hostel Room - 4 Seater(Cat.-O) (Aditya &Harsha House)?
                            </button>
                        </h2>
                        <div id="collapse301" class="accordion-collapse collapse" aria-labelledby="heading301" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,20,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading302">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse302" aria-expanded="false" aria-controls="collapse302">
                                Q.  What is the fee structure for the Hostel Room – 5 seater (Heyansh House)?
                            </button>
                        </h2>
                        <div id="collapse302" class="accordion-collapse collapse" aria-labelledby="heading302" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,08,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading303">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse303" aria-expanded="false" aria-controls="collapse303">
                                Q.  What is the fee structure for the Hostel Room – Dormitory(Both Boys and Girls) All hostels?
                            </button>
                        </h2>
                        <div id="collapse303" class="accordion-collapse collapse" aria-labelledby="heading303" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Form Fee - 100/-Hostel Annual Fee(Yearly) - 15,000/-, Admission fee-(One time)-Rs 15,000/- , Hostel Yearly Fee- Rs 1,20,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading304">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse304" aria-expanded="false" aria-controls="collapse304">
                                Q.  What are the facilities provided in the Hostels ?
                            </button>
                        </h2>
                        <div id="collapse304" class="accordion-collapse collapse" aria-labelledby="heading304" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 1. Television Set in the Hostel Mess 2. Gymnasium 3. Infirmary 4. Bed 5. Study Table with Chair 6. Almirah 7. AC Rooms etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading305">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse305" aria-expanded="false" aria-controls="collapse305">
                                Q.  Is Non veg food allowed inside the hostel ?
                            </button>
                        </h2>
                        <div id="collapse305" class="accordion-collapse collapse" aria-labelledby="heading305" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No. Non-veg food is not allowed inside the hostel. However the Hostel Kitchen serves Non veg food 3 days a week at an eating facility called The Dhaba, that is outside the campus approximately 200 meters from the University Gate. Bringing non-veg food from outside to the hostel is also not allowed.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading306">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse306" aria-expanded="false" aria-controls="collapse306">
                                Q.  Can Hostel Boarders take food to their rooms ?
                            </button>
                        </h2>
                        <div id="collapse306" class="accordion-collapse collapse" aria-labelledby="heading306" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel Boarders cannot take food from the Hostel Mess to their rooms. However, they may take packaged snacks (e.g. chips/crisps, biscuits, etc.) to their rooms after getting it duly checked at the hostel entry point.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading307">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse307" aria-expanded="false" aria-controls="collapse307">
                                Q.  Does Ragging takes place in the Hostel ?
                            </button>
                        </h2>
                        <div id="collapse307" class="accordion-collapse collapse" aria-labelledby="heading307" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No. Ragging is strictly prohibited in the hostel. The entire campus of Royal Global University is a ragging free zone.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading308">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse308" aria-expanded="false" aria-controls="collapse308">
                                Q.  What are the Hostel Entry Timings ?
                            </button>
                        </h2>
                        <div id="collapse308" class="accordion-collapse collapse" aria-labelledby="heading308" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No Hostel Boarder is allowed to stay outside hostel after 7:30pm. If a boarder opts for night stay/out of campus, he/she must return to the hostel by 8:00 am on weekdays (Monday to Friday) or 7:30pm on weekends (Saturday/Sunday) or other holidays.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading309">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse309" aria-expanded="false" aria-controls="collapse309">
                                Q.  What are the Hostel Exit Timings ?
                            </button>
                        </h2>
                        <div id="collapse309" class="accordion-collapse collapse" aria-labelledby="heading309" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Boarders must be out of the hostel by 8:50am sharp on all weekdays (Monday to Friday). They will not be allowed inside the hostel during class hours (9:00am to 5:15 pm) without permission. Boarders are also not allowed to come out of or enter the hostel after 9:30pm. Boarders pursuing B.Com.(H) Morning Shift or LLM Morning Shift may leave the hostel at 6:30am to pursue their classes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading310">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse310" aria-expanded="false" aria-controls="collapse310">
                                Q.  When can Parents/Local Guardians meet a student ?
                            </button>
                        </h2>
                        <div id="collapse310" class="accordion-collapse collapse" aria-labelledby="heading310" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 5:15 pm to 6:30 pm on weekdays 10:00 am to 6:00 pm on holidays</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading311">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse311" aria-expanded="false" aria-controls="collapse311">
                                Q.  Who can enter the hostel to meet the Boarders ?
                            </button>
                        </h2>
                        <div id="collapse311" class="accordion-collapse collapse" aria-labelledby="heading311" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. For Girls' Hostels: No male family member/friend other than father is allowed to enter the Girls' Hostels/Visitors' Lounge. Any outside visitor may be allowed to visit only if accompanied by the parents of the concerned boarder(s). For Boys' Hostels: No female family member/friend other than mother is allowed to enter the Boys' Hostels/Visitors' Lounge.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading312">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse312" aria-expanded="false" aria-controls="collapse312">
                                Q.  What happens when a hostel boarder gets ill or injured ?
                            </button>
                        </h2>
                        <div id="collapse312" class="accordion-collapse collapse" aria-labelledby="heading312" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. If a hostel boarder gets ill or injured, then depending on the graveness of the illness or injury, the rules are:(a) boarders may be allowed to stay in the infirmary, under the observation of the Hostel Warden/Assistant Warden/Medical staff on the advice of the Doctor/Head of the Department/Institution(b) In case of minor injury or illness, first aid and/or medicines will be provided at the campus infirmary.(c) In case of serious illness or injury, the hostel management may shift a boarder to a govt./private hospital and duly inform the boarder's parents and/or local guardian. The charges of the treatment will be borne by the boarder's parents and/or local guardian.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading313">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse313" aria-expanded="false" aria-controls="collapse313">
                                Q.  What is the Transportation Fee?
                            </button>
                        </h2>
                        <div id="collapse313" class="accordion-collapse collapse" aria-labelledby="heading313" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Transportation Form Fee - 100/- , Admission fee-Rs 1000/- , Yearly Fee-60,000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading314">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse314" aria-expanded="false" aria-controls="collapse314">
                                Q.  What are the available transport/bus routes?
                            </button>
                        </h2>
                        <div id="collapse314" class="accordion-collapse collapse" aria-labelledby="heading314" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Route 1- SECTOR 1- NOONMATI- NARENGI- PRATIKSHA- BORBARI- SACHAL- KHANAPARA- N.H-37- RGU
                Route 2- SATGAON- PATHARQUARRY- BORBARI- SIX MILE- JAYANAGAR- BELTOLA-BHETAPARA CHARIALI- GAMES VILLAGE- N.H-37- RGU
                Route 3- NEW GHY- GUWAHATI COLLEGE-ANURADHA- GOVT. PRESS- CHANDMARI- GCC- RAJGARH- BHANGAGARH- ROOPNAGAR- BIRUBARI TINIALI- CYCLE FACTORY- KALAPAHAR- LALGANESH-LOKHRA- RGU
                Route 4- CHANDMARI- SILPUKHURI- GUWAHATI CLUB- CHENIKUTHI- UZANBAZARLATASHIL- PANBAZAR- FANCY BAZAR- FATASHIL AMBARI- RGU
                Route 5- PANJABARI- BAGHORBORI- KALAKSHETRA- JURIPAR- JAYA NAGAR- BELTOLA- BASISTHA CHARIALI- RGU
                Route 6-KHANAPARA- FARM GATE- SIX MILE- RUKMINIGAON- DOWN TOWN- SUPER MARKET- LAST GATE- RAJDHANI MASJID- GHORAMARA- BEHARBARI- RGU
                Route 7- DGP OFFICE- NEPALI MANDIR- PALTAN BAZAR- APSARA- ULUBARI- LACHIT NAGAR- BORA SERVICE- S.B DEORAH COLLEGE- BHANGAGARH- ABC- RGU
                Route 8- 2 NO. MATHGHARIA- GEETAMANDIR- NARIKALBASTI- HATIGARH CHARIALI- ZOO ROAD TINIALI- AIDC- GANESHGURI- GANESH MANDIR- JATIA- GANESH TURNING- DAKHINGAON-MANIRAM DEWAN TRADE CENTER- RGU
                Route 9-SHANTIPUR- BHOOTNATH- KALIPUR- KAMAKHYA GATE- MALIGAON- BORIPARA- ADABARI- JALUKBARI- RGU
                Route 10-SHANTIPUR- BHOOTNATH- KALIPUR- KAMAKHYA GATE- MALIGAON- BORIPARA- ADABARI- JALUKBARI- RGU
                Route 11-CHRISTIAN BASTI- WALLFORD- GANESHGURI- SUPER MARKET- LAST GATE- HOUSEFED-SURVEY- BELTOLA TINIALI- SANKARDEVA NETRALAYA- LAKHIMANDIR- BASISTHA CHARIALI
                Route 12-SPANISH GARDEN- SUNDARPUR- GANESHGURI- RAJDHANI MASJID-HATIGAON- BHETAPARA CHARIALI- HOCKEY STADIUM- BEHARBARI- RGU
                Route 13-GANESH MANDIR- JATIA- GANESH TURNING- KAHILIPARA POWERHOUSE- ODALBAKRA- LALGANESH- ADAGODOWN- RGU
                Route 14-KUMARPARA- BHARALUMUKH- A.T ROAD- HIMATSINGKA PETROL PUMP- PALTAN BAZAR- NEPALI MANDIR- REHABARI- SERABHATI-LALGANESH-RGU
                Route 15- NORTH GUWAHATI- IIT- AMINGAON- JALUKBARI- RGU"</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading315">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse315" aria-expanded="false" aria-controls="collapse315">
                                Q.  What are the pick up and drop timings ?
                            </button>
                        </h2>
                        <div id="collapse315" class="accordion-collapse collapse" aria-labelledby="heading315" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The first pickup on each route is at 7:45 am. In the evening, buses leave the campus by 5:30 pm. To know the pick-up timing of a specific location, students may contact the Transport Incharge or Helper/Driver, whose numbers will be provided to them after they apply for Transport Services.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading316">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse316" aria-expanded="false" aria-controls="collapse316">
                                Q.  Are the Buses AC or Non -AC ?
                            </button>
                        </h2>
                        <div id="collapse316" class="accordion-collapse collapse" aria-labelledby="heading316" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The buses are Non- AC.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading317">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse317" aria-expanded="false" aria-controls="collapse317">
                                Q.  What kind of scholarships does RGU offer?
                            </button>
                        </h2>
                        <div id="collapse317" class="accordion-collapse collapse" aria-labelledby="heading317" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The following are the four categories of scholarships offered by RGU:A. ROYAL MERIT - ON ADMISSION SCHOLARSHIP (For Indian Students) B. ROYAL ENDOWMENT & OTHER SCHOLARSHIP (Forlndian Students) C. 100% Scholarship to two students from the Chakma community of Miao Sub-division, Arunachal Pradesh D. MONTHLY SCHOLARSHIP FOR SEMESTER TOPPERS</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading318">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse318" aria-expanded="false" aria-controls="collapse318">
                                Q.  What is the minimum percentage required in order to apply for 25% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Under Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse318" class="accordion-collapse collapse" aria-labelledby="heading318" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage required for applying for 25% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Under Graduate students is 86% in 10 +2 Examination (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading319">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse319" aria-expanded="false" aria-controls="collapse319">
                                Q.  What is the minimum percentage required in order to for apply for 50% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Under Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse319" class="accordion-collapse collapse" aria-labelledby="heading319" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for 50% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Under Graduate students is 92% in 10 +2 Examination (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading320">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse320" aria-expanded="false" aria-controls="collapse320">
                                Q.  What is the minimum percentage required in order to apply for 100% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Under Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse320" class="accordion-collapse collapse" aria-labelledby="heading320" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for 100% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Under Graduate students is 96% in 10 +2 Examination (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading321">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse321" aria-expanded="false" aria-controls="collapse321">
                                Q.  What is the minimum percentage required in order to apply for 25% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Post Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse321" class="accordion-collapse collapse" aria-labelledby="heading321" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for 25% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Post Graduate students is 80% in Graduation (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading322">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse322" aria-expanded="false" aria-controls="collapse322">
                                Q.  What is the minimum percentage required in order to apply for 50% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Post Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse322" class="accordion-collapse collapse" aria-labelledby="heading322" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for 50% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Post Graduate students is 84% in Graduation (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading323">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse323" aria-expanded="false" aria-controls="collapse323">
                                Q.  What is the minimum percentage required in order to apply for 100% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Post Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse323" class="accordion-collapse collapse" aria-labelledby="heading323" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for 100% ROYAL MERIT - ON ADMISSION SCHOLARSHIP for Post Graduate students is 88% in Graduation (SC/ST/Non-Creamy-Layer OBC students will have relaxation of 5% in aggregate marks)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading324">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse324" aria-expanded="false" aria-controls="collapse324">
                                Q.  Will my percentage be the only eligibility criteria for applying for ROYAL MERIT- ON ADMISSION SCHOLARSHIP?
                            </button>
                        </h2>
                        <div id="collapse324" class="accordion-collapse collapse" aria-labelledby="heading324" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No, apart from fulfilling the percentage criteria in the last qualifying examination, a student must also secure overall 60% marks in Written Test (if any), Group Discussion (GD) (if any) and Personal Interview (PI) conducted by the University at the time of admission.(SC/ST/Non-Creamy-Layer OBC students will get 5% relaxation in aggregate marks for all categories of scholarship.)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading325">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse325" aria-expanded="false" aria-controls="collapse325">
                                Q.  What are the norms for continuation of Royal Merit - On Admission scholarships ?
                            </button>
                        </h2>
                        <div id="collapse325" class="accordion-collapse collapse" aria-labelledby="heading325" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Royal Merit - On Admission Scholarship holders will be eligible for continuation of scholarship in the subsequent years of the programme, subject to fulfillment of the following terms and conditions:a) To continue availing 100 % scholarship, a student must secure/maintain a position amongst the top 5% students in the merit list of their respective programme/course.b) To continue availing 50% scholarship, a student will have to secure/maintain a position amongst top 10% of the students in the merit list of their respective programme/course.c) To continue availing 25% scholarship, students will have to secure/maintain a position amongst top 25% of the students in the merit list of their respective programme/course.d) To continue availing scholarship, a student must clear all the papers in each semester and should not carry any back log in any semester e) To continue availing scholarship, a student must have attendance of at least 90% in all the subjects in each semester from the previous academic year.The category in which a student is awarded a scholarship cannot be converted to any other category. In case a student fails to secure a position to maintain (continue) scholarship in a particular category, he/she will not be eligible for continuation of scholarship in any other category. For example, if a student availing 100% scholarship does not secure/maintain a position in top 5% but secures/maintains a position in top 10%, then he/she will be disqualified for 100% scholarship and at the same time will not be eligible for 50% scholarship.A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousand only) as security deposit and Rs. 5000.00 (Rupees Five Thousand only) as caution money deposit at the time of admission. If the student continues qualifying for scholarship for all the years during the programme, the amount of Rs. 55,000.00 (paid as security and caution money) will be refunded after the completion of his/her respective programme of study. The security money will not be refunded in case of a student withdraws/drops out.Students found guilty of involvement in any untoward incident or indiscipline (including ragging) will be disqualified for award of scholarship.In case a student, availing Royal Merit - On Admission scholarship, fails to fulfill the condition for continuation of scholarship in the subsequent years, he/she will have to pay the full fee for subsequent year/years, as prescribed for other students. The security deposit of Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the fee to be paid for subsequent year/years. In case a student, availing Royal Merit - On Admission Scholarship, wishes to avail hostel/ transportation facilities, he/she will have to pay the full hostel/ transportation fees as prescribed for other students. A student, once disqualified/suffers a break in scholarship, will not be eligible for further scholarship. Final decision of granting scholarship lies with the University Scholarship Committee and or Competent Authority/s.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading326">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse326" aria-expanded="false" aria-controls="collapse326">
                                Q.  What is the minimum percentage required in order to apply for Royal Endowment & Other Scholarship under 25% category for Under Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse326" class="accordion-collapse collapse" aria-labelledby="heading326" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for Royal Endowment & Other Scholarship under 25% category for Under Graduate students is 80% and above in 10+2</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading327">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse327" aria-expanded="false" aria-controls="collapse327">
                                Q.  What is the minimum percentage required in order to apply for Royal Endowment & Other Scholarship under 50% category for Under Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse327" class="accordion-collapse collapse" aria-labelledby="heading327" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage required in order to apply for Royal Endowment & Other Scholarship under 50% category for Under Graduate students is 85% and above in 10+2</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading328">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse328" aria-expanded="false" aria-controls="collapse328">
                                Q.  What is the minimum percentage required in order to apply for Royal Endowment & Other Scholarship under 25% category for Post Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse328" class="accordion-collapse collapse" aria-labelledby="heading328" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for Royal Endowment & Other Scholarship under 25% category for Post Graduate students is 75% and above in Graduation</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading329">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse329" aria-expanded="false" aria-controls="collapse329">
                                Q.  What is the minimum percentage required in order to apply for Royal Endowment & Other Scholarship under 50% category for Post Graduate students ?
                            </button>
                        </h2>
                        <div id="collapse329" class="accordion-collapse collapse" aria-labelledby="heading329" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The minimum percentage criteria for applying for Royal Endowment & Other Scholarship under 50% category for Post Graduate students is 80% and above in Graduation</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading330">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse330" aria-expanded="false" aria-controls="collapse330">
                                Q.  Which categories can apply for Royal Endowment & Other Scholarship ?
                            </button>
                        </h2>
                        <div id="collapse330" class="accordion-collapse collapse" aria-labelledby="heading330" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The categories that are eligible to apply are: i). Annual family income less than Rs. 2.5 lac.ii) Ward of a mother who is a single parent.iii) Ward of a parent who is a teaching professional with annual income less than 4.5 lac. iv) Sports people who have participated in State/National level/Music and Fine Arts. v) Ward of a Defense Personnel with annual income less than 4.5 lac. vi) Ward of an Ex-Serviceman (Defense)/War Widow with annual pension less than 4.5 lac. vii) Differently-abled students. Students availing Endowment Scholarship should fulfill the following criteria: i). Students should be eligible under the endowment scheme.ii) Student should submit relevant documents from competent authority for verifying the stated category required for qualifying the Royal Endowment Scheme.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading331">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse331" aria-expanded="false" aria-controls="collapse331">
                                Q.  What are the terms for continuation of Royal Merit - On Admission scholarships ?
                            </button>
                        </h2>
                        <div id="collapse331" class="accordion-collapse collapse" aria-labelledby="heading331" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The terms and conditions for the continuation of Royal Endowment & Other Scholarship in 2nd and subsequent years -i). Class attendance of the students must be 90% and above in all the subjects in each semester from the previous academic year.ii) To continue availing scholarship, a student must clear all the papers in each semester and should not carry any back logs in any semester from the previous academic -year and pass the semester/annual examination for promotion to the next year. iii) Students found guilty of involvement in any untoward incident (including ragging) will be disqualified for award of scholarship.iv) In case a student, availing Royal Endowment & Other scholarship, fails to fulfill the condition for continuation of scholarship in the subsequent year/years, he/she will have to pay the full fee for subsequent years, as prescribed for other students.v) In case a student, availing Royal Endowment & Other Scholarship, wishes to avail hostel/ transportation facilities, he/she will have to pay the full hostel/ transportation fees as prescribed for other students. vi) A student, once disqualified/suffers a break in scholarship, will not be eligible for further scholarship.vii) The category in which a student is awarded a scholarship cannot be converted to any other category. In case a student fails to secure a position to maintain (continue) scholarship in a particular category, he/she will not be eligible for continuation of scholarship in any other category.viii) Final decision of granting scholarship lies with the University Scholarship Committee.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading332">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse332" aria-expanded="false" aria-controls="collapse332">
                                Q.  How many students from the Chakma Community are awarded 100% Scholarship?
                            </button>
                        </h2>
                        <div id="collapse332" class="accordion-collapse collapse" aria-labelledby="heading332" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Two students are awarded 100% Scholarship from the Chakma Community of Miao Sub-division, Arunachal Pradesh.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading333">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse333" aria-expanded="false" aria-controls="collapse333">
                                Q.  What is the eligibility criteria for the 100% Scholarship for the Chakma Community of Miao Sub-division, Arunachal Pradesh ?
                            </button>
                        </h2>
                        <div id="collapse333" class="accordion-collapse collapse" aria-labelledby="heading333" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. i). A letter of recommendation from competent authority to avail 100% Scholarship must be submitted in the admission office along with the necessary admission forms/application of scholarship, latest by 31st July (for under-graduate programme) and 31st August (for post-graduate programme), respectively, every academic year or as notified from time to time.ii). Selection is done based onthe screening and identification of meritorious students, as laid down by competent authority. iii) This scholarship will be applicable for any programme/course offered by the University, except for few courses viz. Nursing, Pharmacy and Architecture due to statutory requirements. iv) The students must fulfill the minimum eligibility criteria for admission in the programme/course they have applied for, as laid down by the University.v) A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousandonly) as security deposit and Rs. 5,000.00 (Rupees Five Thousand only) as caution money deposit at the time of admission.vi) The scholarships will be awarded annually.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading334">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse334" aria-expanded="false" aria-controls="collapse334">
                                Q.  What is the criteria for the continuation of 100% Scholarship for students from the Chakma Community of Miao Sub-division, Arunachal Pradesh ?
                            </button>
                        </h2>
                        <div id="collapse334" class="accordion-collapse collapse" aria-labelledby="heading334" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. 100% Scholarship holder from Chakma community of Miao Sub-division, Arunachal Pradesh will be eligible for continuation of scholarship in the subsequent year of the programme, subject to fulfillment of the following terms and conditions:1). To continue availing scholarship, a student must secure/ maintain a position amongst the top 15% of the students in the merit list of their respective programme/ course.2). To continue, a student must clear all the papers in each semester and should not carry any back log in any semester from the previous academic year.3). To continue, a student must have an attendance of at least 85% in all the subjects in each semester from the previous academic year.4). A student availing 100% scholarship from Chakma community will have to pay Rs.50,000.00 (Rupees Fifty Thousand only) as security deposit and Rs. 5000.00 (Rupees FiveThousand only) as caution money deposit at the time of admission. If the student continues qualifying for scholarship for all the years during the programme, the amount of Rs. 55,000.00 (paid as security and caution deposit) will be refunded after the completion of his/her respective programme of study. The security money will not be refunded in case of a student withdraws/drops out.5). Students found guilty of involvement in any untoward incident or indiscipline activities(including ragging) will be disqualified for award of scholarship.6). In case a student, availing 100% Scholarship from Chakma community of Miao Subdivision, Arunachal Pradesh, fails to fulfill the condition for continuation of scholarship in the subsequent years, he/she will have to pay the full fee for subsequent years, as per rules of the University and prescribed for other students. The security deposit of Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the fee to be paid for subsequent year/years.7). In case a student, availing 100% Scholarship from Chakma community of Miao Subdivision, Arunachal Pradesh, wishes to avail hostel/ transportation facilities, he/she will have to pay the full hostel/ transportation fees as per rules of the university and prescribed for other students.8). A student, once disqualified/suffers a break in scholarship, will not be eligible for further scholarship.9). Final decision of granting scholarship lies with the University Scholarship Committee.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading335">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse335" aria-expanded="false" aria-controls="collapse335">
                                Q.  Are there any scholarships for semester toppers ?
                            </button>
                        </h2>
                        <div id="collapse335" class="accordion-collapse collapse" aria-labelledby="heading335" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, RGU provides scholarships for semester toppers. Semester Toppers for each programme will be awarded a Monthly Scholarship of Rs. 3000.00 (Rupees Three Thousand Only) per month in the consequent semester.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading336">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse336" aria-expanded="false" aria-controls="collapse336">
                                Q.  What is the amount of scholarship awarded to semester toppers ?
                            </button>
                        </h2>
                        <div id="collapse336" class="accordion-collapse collapse" aria-labelledby="heading336" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Semester Toppers for each programme will be awarded a Monthly Scholarship of Rs. 3000.00 (Rupees Three Thousand Only) per month in the consequent semester.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading337">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse337" aria-expanded="false" aria-controls="collapse337">
                                Q.  Does RGU provide any scholarships to International students ?
                            </button>
                        </h2>
                        <div id="collapse337" class="accordion-collapse collapse" aria-labelledby="heading337" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, RGU provides ROYAL MERIT - ON ADMISSION 100% SCHOLARSHIP TO STUDENTS FROM FIVE COUNTRIES (from neighboring countries like Thailand, Bangladesh, Nepal, Bhutan and Myanmar)</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading338">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse338" aria-expanded="false" aria-controls="collapse338">
                                Q.  What is the minimum percentage criteria to avail 100% scholarship for International Students?
                            </button>
                        </h2>
                        <div id="collapse338" class="accordion-collapse collapse" aria-labelledby="heading338" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. For a Under Graduate course it is 80% and above in 10+2 & for Post Graduate it is 80% and above in graduation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading339">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse339" aria-expanded="false" aria-controls="collapse339">
                                Q.  What are the other criteria needed for availing a 100% scholarship for International Students ?
                            </button>
                        </h2>
                        <div id="collapse339" class="accordion-collapse collapse" aria-labelledby="heading339" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The other criteria needed for availing a 100% scholarship for International Students are:i) A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousand only) as security deposit and Rs. 5,000.00 (Rupees Five Thousand only) as caution money deposit at the time of admission.ii) Apart from fulfilling the above criteria, a student must also secure overall 60% marks in Written Test, Group Discussion (GD) if any and Personal Interview (PI) conducted by the University at the time of admission.iii) The scholarships will be awarded annually. For subsequent year/years the grant of scholarship to the awardees will be governed by Continuation of Royal Merit – On Admission 100% Scholarship to International Students. iv) Any applications for Royal Merit - On Admission 100% Scholarship to International Students forunder-graduate students and post-graduate students will not be accepted after 31st July and 31st August, respectively, of respective academic year or as notified from time to time.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading340">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse340" aria-expanded="false" aria-controls="collapse340">
                                Q.  What are the terms and conditions for the continuationof 100% scholarship for International Students ?
                            </button>
                        </h2>
                        <div id="collapse340" class="accordion-collapse collapse" aria-labelledby="heading340" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Royal Merit - On Admission 100% Scholarship for International Students will be eligible for continuation in the subsequent year of the programme, subject to fulfillment of the following terms and conditions: a) To continue availing 100% scholarship, a student must secure/maintain a position amongst top 5 % of the students in the merit list of their respective programme/course.b) To continue availing scholarship, a student must clear all the papers in each semester and should not carry any back log in any semester, from the previous academic year.c) To continue availing scholarship, a student must have an attendance of at least 90% in all the subjects in each semester from the previous academic year.d) A student availing 100% scholarship will have to pay Rs. 50,000.00 (Rupees Fifty Thousandonly) as security deposit and Rs. 5000.00 (Rupees Five Thousand only) as caution money deposit at the time of admission. If the student continues qualifying for scholarship for all the years during the programme, the amount of Rs. 55,000.00 (paid as security and caution deposit) will be refunded after the completion of his/her respective programme of study. The security money will not be refunded in case a student withdraws/drops out. Students found guilty of involvement in any untoward incident or indiscipline activity (including ragging) will be disqualified for award of scholarship. In case a student, availing Royal Merit - On Admission 100% Scholarship to International Students, fails to fulfill the condition for continuation of scholarship in the subsequent years, he/she will have to pay the full fee for subsequent years, as prescribed for other students. The security deposit of Rs.50,000/- (Rupees Fifty Thousand only) of such students shall be adjusted against the fee to be paid for subsequent year/years. In case a student, availing Royal Merit - On Admission 100% Scholarship to International Students, wishes to avail hostel/ transportation facilities, he/she will have to pay the full hostel/ transportation fees as prescribed for other students. A student, once disqualified/suffers a break in scholarship, will not be eligible for further scholarship. Final decision of granting scholarship lies with the University Scholarship Committee.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading341">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse341" aria-expanded="false" aria-controls="collapse341">
                                Q.  Is there any distance education programme in RGU?
                            </button>
                        </h2>
                        <div id="collapse341" class="accordion-collapse collapse" aria-labelledby="heading341" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No RGU does not provide any courses on distance mode.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading342">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse342" aria-expanded="false" aria-controls="collapse342">
                                Q.  Is the Ph.D programme recognized by UGC?
                            </button>
                        </h2>
                        <div id="collapse342" class="accordion-collapse collapse" aria-labelledby="heading342" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, all the programmes & courses at RGU are recognised by UGC</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading343">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse343" aria-expanded="false" aria-controls="collapse343">
                                Q.  Are the hostels inside the university campus?
                            </button>
                        </h2>
                        <div id="collapse343" class="accordion-collapse collapse" aria-labelledby="heading343" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, hostel facilities are available inside the RGU campus</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading344">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse344" aria-expanded="false" aria-controls="collapse344">
                                Q.  Can I apply for B.sc in speech and hearing course ?
                            </button>
                        </h2>
                        <div id="collapse344" class="accordion-collapse collapse" aria-labelledby="heading344" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Unfortunately, RGU doesn't offer B.Sc in Speech & Hearing course</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading345">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse345" aria-expanded="false" aria-controls="collapse345">
                                Q.  I am having trouble submitting my registration form. What to do?
                            </button>
                        </h2>
                        <div id="collapse345" class="accordion-collapse collapse" aria-labelledby="heading345" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Please contact your concerned counselor for help. Or you may call our admission helpline number that is- +91 78799-98811</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading346">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse346" aria-expanded="false" aria-controls="collapse346">
                                Q.  I am from a different university can I transfer to Royal Global University?
                            </button>
                        </h2>
                        <div id="collapse346" class="accordion-collapse collapse" aria-labelledby="heading346" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, transfer of student from another university to RGU is possible. But there are certain formalities which needs to be followed. Contact our admission department to know more about the same.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading347">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse347" aria-expanded="false" aria-controls="collapse347">
                                Q.  What is the fee structure for SC/ST/OBC students for B.Sc nursing?
                            </button>
                        </h2>
                        <div id="collapse347" class="accordion-collapse collapse" aria-labelledby="heading347" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Prospectus & Form Fee - Rs 1000/-Registration Fee - Rs 10,000/-Caution Money (Common for all streams) - Refundable - 10000/-Admission Fees- Rs 60,000/-Semester Payment - 101500/- Or Yearly Payment - 200000/-</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading348">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse348" aria-expanded="false" aria-controls="collapse348">
                                Q.  Do I have to register myself in my department after completion of the admission process?
                            </button>
                        </h2>
                        <div id="collapse348" class="accordion-collapse collapse" aria-labelledby="heading348" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Once admitted students are given step by step guidance in their Orientation Programme.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading349">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse349" aria-expanded="false" aria-controls="collapse349">
                                Q.  How do I reach RGU ?
                            </button>
                        </h2>
                        <div id="collapse349" class="accordion-collapse collapse" aria-labelledby="heading349" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Our Address - THE ASSAM ROYAL GLOBAL UNIVERSITY, Betkuchi, Opp. Tirupati Balaji Temple/ ISBT, NH-37, Guwahati-35, Dist- Kamrup(Metro), Assam, India. Admission Helpline No: +91 78799-98811</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading350">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse350" aria-expanded="false" aria-controls="collapse350">
                                Q.  I want to do Ph.D. in Psychology. Is the admission process going on?
                            </button>
                        </h2>
                        <div id="collapse350" class="accordion-collapse collapse" aria-labelledby="heading350" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Ph.D. admissions are done on the basis of an entrance examination which is conducted twice a year. You can check our website at www.rgu.ac for Ph.D. notification and apply for the same accordingly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading351">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse351" aria-expanded="false" aria-controls="collapse351">
                                Q.  What is the minimum percentage required for availing scholarship ?
                            </button>
                        </h2>
                        <div id="collapse351" class="accordion-collapse collapse" aria-labelledby="heading351" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. For applying for Royal Merit Scholarship you will need to have minimum 80% or above (5% relaxation for ST, SC & OBC Non-Creamy). For applying for Royal Endowment Scholarship you will need to have minimum 75% or above (5% relaxation for ST, SC & OBC Non Creamy layer) Q.I am a working professional with 11 years of experience. Can I apply for B.Tech lateral entry?</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading352">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse352" aria-expanded="false" aria-controls="collapse352">
                                Q.  Is there any age limit for B.Pharm admission ?
                            </button>
                        </h2>
                        <div id="collapse352" class="accordion-collapse collapse" aria-labelledby="heading352" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. There is no age limit for admission in B.Pharm.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading353">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse353" aria-expanded="false" aria-controls="collapse353">
                                Q.  What is the last date of admission?
                            </button>
                        </h2>
                        <div id="collapse353" class="accordion-collapse collapse" aria-labelledby="heading353" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The last date of admission will be notified once fixed by the university.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading354">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse354" aria-expanded="false" aria-controls="collapse354">
                                Q.  What is the admission helpline number?
                            </button>
                        </h2>
                        <div id="collapse354" class="accordion-collapse collapse" aria-labelledby="heading354" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Admission Helpline No of RGU is: +91 78799-98811</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading355">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse355" aria-expanded="false" aria-controls="collapse355">
                                Q.  When will the classes start?
                            </button>
                        </h2>
                        <div id="collapse355" class="accordion-collapse collapse" aria-labelledby="heading355" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Batch commencement dates will be notified once fixed by the university.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading356">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse356" aria-expanded="false" aria-controls="collapse356">
                                Q.  What is the last date of application for MSc botany?
                            </button>
                        </h2>
                        <div id="collapse356" class="accordion-collapse collapse" aria-labelledby="heading356" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Last date of PG admissions will be notified once fixed by the university.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading357">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse357" aria-expanded="false" aria-controls="collapse357">
                                Q.  Can I apply for more than 1 subject?
                            </button>
                        </h2>
                        <div id="collapse357" class="accordion-collapse collapse" aria-labelledby="heading357" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading358">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse358" aria-expanded="false" aria-controls="collapse358">
                                Q.  Who are the heads of the departments?
                            </button>
                        </h2>
                        <div id="collapse358" class="accordion-collapse collapse" aria-labelledby="heading358" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Kindly visit our website at www.rgu.ac and go to the academics section for faculty details at https://rgu.ac/schools-rgu.php</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading359">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse359" aria-expanded="false" aria-controls="collapse359">
                                Q.  After submitting the admission form can I make any changes ?
                            </button>
                        </h2>
                        <div id="collapse359" class="accordion-collapse collapse" aria-labelledby="heading359" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. After final submission of the application form, the candidate cannot edit the form anymore. However, our counselors/ admission department can help you in this regard.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading360">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse360" aria-expanded="false" aria-controls="collapse360">
                                Q.  Do both boys and girls study in the same campus ?
                            </button>
                        </h2>
                        <div id="collapse360" class="accordion-collapse collapse" aria-labelledby="heading360" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading361">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse361" aria-expanded="false" aria-controls="collapse361">
                                Q.  What is the minimum percentage of attendance required per semester?
                            </button>
                        </h2>
                        <div id="collapse361" class="accordion-collapse collapse" aria-labelledby="heading361" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. As per UGC norms, a student must have a minimum 75% attendance in class.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading362">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse362" aria-expanded="false" aria-controls="collapse362">
                                Q.  How do I apply for the hostel facilities?
                            </button>
                        </h2>
                        <div id="collapse362" class="accordion-collapse collapse" aria-labelledby="heading362" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. You will have to apply for the hostel facility online by visiting our official websitewww.rgu.ac. After filling the application form our counselor will call you and guide you accordingly.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading363">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse363" aria-expanded="false" aria-controls="collapse363">
                                Q.  Can you give me the breakup of the fee structure?
                            </button>
                        </h2>
                        <div id="collapse363" class="accordion-collapse collapse" aria-labelledby="heading363" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Kindly visit our official website www.rgu.ac to know about the course fees and other details. Or you can call us at our Admission Helpline No: +91 78799-98811?</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading364">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse364" aria-expanded="false" aria-controls="collapse364">
                                Q.  Can I pay my tuition fees in installment?
                            </button>
                        </h2>
                        <div id="collapse364" class="accordion-collapse collapse" aria-labelledby="heading364" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. You can pay your course fees either per semester or on yearly basis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading365">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse365" aria-expanded="false" aria-controls="collapse365">
                                Q.  How much should I pay at the time of admission?
                            </button>
                        </h2>
                        <div id="collapse365" class="accordion-collapse collapse" aria-labelledby="heading365" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Details of amount to be paid at the time of admission will be mentioned in your provisional admission offer letter.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading366">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse366" aria-expanded="false" aria-controls="collapse366">
                                Q.  Do I have to pay the entire course fees at once?
                            </button>
                        </h2>
                        <div id="collapse366" class="accordion-collapse collapse" aria-labelledby="heading366" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No, you can either pay once in every six months or annually.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading367">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse367" aria-expanded="false" aria-controls="collapse367">
                                Q.  May I know the documents which are required when applying for scholarship ?
                            </button>
                        </h2>
                        <div id="collapse367" class="accordion-collapse collapse" aria-labelledby="heading367" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. The application form for scholarship clearly mentions the supporting documents that are required like last qualifying marksheet, caste certificate (if any) etc. If you are applying for Royal Endowment Scholarship you will have to submit the relevant documents supporting the category that you are applying.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading368">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse368" aria-expanded="false" aria-controls="collapse368">
                                Q.  Does RGU offer distance education programme?
                            </button>
                        </h2>
                        <div id="collapse368" class="accordion-collapse collapse" aria-labelledby="heading368" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No, we don’t offer any distance education programme.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading369">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse369" aria-expanded="false" aria-controls="collapse369">
                                Q.  Does the university provide laptops to B.Tech students?
                            </button>
                        </h2>
                        <div id="collapse369" class="accordion-collapse collapse" aria-labelledby="heading369" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No, laptops are not provided to any students.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading370">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse370" aria-expanded="false" aria-controls="collapse370">
                                Q.  Is there any dress code?
                            </button>
                        </h2>
                        <div id="collapse370" class="accordion-collapse collapse" aria-labelledby="heading370" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, RGU has a dress code for students.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading371">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse371" aria-expanded="false" aria-controls="collapse371">
                                Q.  When will the admission process start?
                            </button>
                        </h2>
                        <div id="collapse371" class="accordion-collapse collapse" aria-labelledby="heading371" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Admissions for various courses in the university usually begins around March - April. So keep a track of the university's website www.rgu.ac for any information.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading372">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse372" aria-expanded="false" aria-controls="collapse372">
                                Q.  Where can I apply for a course?
                            </button>
                        </h2>
                        <div id="collapse372" class="accordion-collapse collapse" aria-labelledby="heading372" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Once the admission schedule is announced, the application form will be available online in the official university website. For more details keep checking our website www.rgu.ac</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading373">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse373" aria-expanded="false" aria-controls="collapse373">
                                Q.  Can I pursue two courses together, like B.Com and BBA ?
                            </button>
                        </h2>
                        <div id="collapse373" class="accordion-collapse collapse" aria-labelledby="heading373" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No, you can’t pursue two courses together.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading374">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse374" aria-expanded="false" aria-controls="collapse374">
                                Q.  Is the university COA recognized?
                            </button>
                        </h2>
                        <div id="collapse374" class="accordion-collapse collapse" aria-labelledby="heading374" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes. The B.Arch. course of RGU is recognized by COA(Council of Architecture).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading375">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse375" aria-expanded="false" aria-controls="collapse375">
                                Q.  What kind of measures has the university taken to prevent ragging?
                            </button>
                        </h2>
                        <div id="collapse375" class="accordion-collapse collapse" aria-labelledby="heading375" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Each student taking admission in RGU must submit a Non-Judiciary Anti-Ragging Affidavit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading376">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse376" aria-expanded="false" aria-controls="collapse376">
                                Q.  What kind of security system do you have in your university?
                            </button>
                        </h2>
                        <div id="collapse376" class="accordion-collapse collapse" aria-labelledby="heading376" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. RGU is a highly secured campus with high boundary walls and round the clock surveillance. Well trained security guards patrol the campus 24x7 which makes the campus safe and secure. CCTV cameras, fire alarms, and anti-ragging squad further adds to the safety of our students and staff. No one can enter or leave the campus without proper authorization.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading377">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse377" aria-expanded="false" aria-controls="collapse377">
                                Q.  Are the books provided by the university?
                            </button>
                        </h2>
                        <div id="collapse377" class="accordion-collapse collapse" aria-labelledby="heading377" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. We have the provision of a Book Bank under which we issue 6-7 books to every student. Also, there is a well-stocked library in the university campus from where students can get their books. However, if you wish to purchase any book, you will have to get it from the market at your own cost.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading378">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse378" aria-expanded="false" aria-controls="collapse378">
                                Q.  Is there any facility for payment of course fees in installments?
                            </button>
                        </h2>
                        <div id="collapse378" class="accordion-collapse collapse" aria-labelledby="heading378" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes. There are two ways of paying the course fees. You can pay per semester or annually.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading379">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse379" aria-expanded="false" aria-controls="collapse379">
                                Q.  Is there a capitation fee?
                            </button>
                        </h2>
                        <div id="collapse379" class="accordion-collapse collapse" aria-labelledby="heading379" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading380">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse380" aria-expanded="false" aria-controls="collapse380">
                                Q.  Are there any scholarship facilities?
                            </button>
                        </h2>
                        <div id="collapse380" class="accordion-collapse collapse" aria-labelledby="heading380" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes. Visit our official website www.rgu.ac to know more about our scholarship schemes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading381">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse381" aria-expanded="false" aria-controls="collapse381">
                                Q.  Do we have to pay anything extra besides the fees mentioned in the prospectus?
                            </button>
                        </h2>
                        <div id="collapse381" class="accordion-collapse collapse" aria-labelledby="heading381" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading382">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse382" aria-expanded="false" aria-controls="collapse382">
                                Q.  Are extracurricular activities taken into consideration?
                            </button>
                        </h2>
                        <div id="collapse382" class="accordion-collapse collapse" aria-labelledby="heading382" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Extracurricular activities are taken into consideration while applying for scholarships only.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading383">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse383" aria-expanded="false" aria-controls="collapse383">
                                Q.  Will I get hostel accommodation ?
                            </button>
                        </h2>
                        <div id="collapse383" class="accordion-collapse collapse" aria-labelledby="heading383" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel accommodation is provided on a first come first serve basis and is subject to availability of seats.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading384">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse384" aria-expanded="false" aria-controls="collapse384">
                                Q.  Will I be allotted a hostel at the time of admission?
                            </button>
                        </h2>
                        <div id="collapse384" class="accordion-collapse collapse" aria-labelledby="heading384" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Hostel allotment is done on the day of admission.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading385">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse385" aria-expanded="false" aria-controls="collapse385">
                                Q.  Is the mess fee included in the hostel fees?
                            </button>
                        </h2>
                        <div id="collapse385" class="accordion-collapse collapse" aria-labelledby="heading385" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading386">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse386" aria-expanded="false" aria-controls="collapse386">
                                Q.  Are hostels compulsory for the first year students ?
                            </button>
                        </h2>
                        <div id="collapse386" class="accordion-collapse collapse" aria-labelledby="heading386" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. No. First year students may or may not opt for hostel facilities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading387">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse387" aria-expanded="false" aria-controls="collapse387">
                                Q.  What kind of medical assistance does RGU provide to students?
                            </button>
                        </h2>
                        <div id="collapse387" class="accordion-collapse collapse" aria-labelledby="heading387" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. On-call medical professionals are available in the campus. Also all our university buses contain a first aid kit for any emergency.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading388">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse388" aria-expanded="false" aria-controls="collapse388">
                                Q.  My child has been advised to use a hot water bag because of an operation he underwent. Do you have theprovisions for the same ?
                            </button>
                        </h2>
                        <div id="collapse388" class="accordion-collapse collapse" aria-labelledby="heading388" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes. Our hostels provide hot water bags to students when required.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading389">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse389" aria-expanded="false" aria-controls="collapse389">
                                Q.  I lost my marksheet but I have the provisional marksheet downloaded from the university website. Would that suffice?
                            </button>
                        </h2>
                        <div id="collapse389" class="accordion-collapse collapse" aria-labelledby="heading389" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. You can submit the provisional marksheet for the time being. But you will have to eventually apply for the duplicate mark sheet and submit the same.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading390">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse390" aria-expanded="false" aria-controls="collapse390">
                                Q.  I wanted to know which courses the university offers in distance mode
                            </button>
                        </h2>
                        <div id="collapse390" class="accordion-collapse collapse" aria-labelledby="heading390" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Royal Global University do not offer any course in distance mode.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading391">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse391" aria-expanded="false" aria-controls="collapse391">
                                Q.  How can I pay my tuition fees?
                            </button>
                        </h2>
                        <div id="collapse391" class="accordion-collapse collapse" aria-labelledby="heading391" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. You can pay through - Demand draft/ NEFT/RTGS/ online banking/ online transfer etc</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading392">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse392" aria-expanded="false" aria-controls="collapse392">
                                Q.  I got 90% in class 12. Am I eligible for scholarship ?
                            </button>
                        </h2>
                        <div id="collapse392" class="accordion-collapse collapse" aria-labelledby="heading392" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, you are eligible for RGU scholarship.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading393">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse393" aria-expanded="false" aria-controls="collapse393">
                                Q.  How will the Ph.D. exam be conducted?
                            </button>
                        </h2>
                        <div id="collapse393" class="accordion-collapse collapse" aria-labelledby="heading393" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Ph.D. exams will be conducted in the offline mode.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading394">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse394" aria-expanded="false" aria-controls="collapse394">
                                Q.  Can I get lateral entry in Electrical Engineering ?
                            </button>
                        </h2>
                        <div id="collapse394" class="accordion-collapse collapse" aria-labelledby="heading394" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Sorry, RGU does not offer Electrical Engineering Programme.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading395">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse395" aria-expanded="false" aria-controls="collapse395">
                                Q.  How to apply for scholarship?
                            </button>
                        </h2>
                        <div id="collapse395" class="accordion-collapse collapse" aria-labelledby="heading395" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. You can apply for scholarship while filling up your admission application form.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading396">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse396" aria-expanded="false" aria-controls="collapse396">
                                Q.  Will you please tell me the fees structure of all the courses.
                            </button>
                        </h2>
                        <div id="collapse396" class="accordion-collapse collapse" aria-labelledby="heading396" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. To know about the fee structure of different courses kindly visit our website at https://rgu.ac/fee-structure.php Or you can call us at our Admission Helpline No: +91 78799-98811?</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading397">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse397" aria-expanded="false" aria-controls="collapse397">
                                Q.  Are there any scholarships?
                            </button>
                        </h2>
                        <div id="collapse397" class="accordion-collapse collapse" aria-labelledby="heading397" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, RGU offers scholarships. For details kindly refer to our scholarship policies at www.rgu.ac</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading398">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse398" aria-expanded="false" aria-controls="collapse398">
                                Q.  Is it worth joining the university?
                            </button>
                        </h2>
                        <div id="collapse398" class="accordion-collapse collapse" aria-labelledby="heading398" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. With experienced faculties and world class infrastructure & facilities, Royal Global University is one of the finest universities of the country. RGU offers a unique educational experience that prepares the next generation of global citizens to lead and make a difference in the world. RGU ensures that its students are transformed into all-rounded, industry-ready individuals, who are equipped to take on leadership responsibilities. RGU stands to be recognized for its world-class infrastructure, cultural events, campus recruitment programmes and updated facilities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading399">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse399" aria-expanded="false" aria-controls="collapse399">
                                Q. Is RGU implementing NEP 2020(New Education Policy)?
                            </button>
                        </h2>
                        <div id="collapse399" class="accordion-collapse collapse" aria-labelledby="heading399" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Yes, RGU is implementing New Education Policy (NEP).</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading400">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse400" aria-expanded="false" aria-controls="collapse400">
                                Q. What is the concept of NEP?
                            </button>
                        </h2>
                        <div id="collapse400" class="accordion-collapse collapse" aria-labelledby="heading400" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. NEP focuses on bringing universal access to school education to ensure the holistic development of students right from the beginning. According to this policy, students' progress and their learning capacity will be tracked timely.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading401">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse401" aria-expanded="false" aria-controls="collapse401">
                                Q.  How will RGU implement /carry out NEP?
                            </button>
                        </h2>
                        <div id="collapse401" class="accordion-collapse collapse" aria-labelledby="heading401" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Our programme under NEP 2020 will be a Four-Year Undergraduate Programme with multiple entries and exits in each academic year.The syllabus & curriculum for each course implementing NEP can be found at https://rgu.ac/syllabus.php</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading402">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse402" aria-expanded="false" aria-controls="collapse402">
                                Q.  What is ABC ID?
                            </button>
                        </h2>
                        <div id="collapse402" class="accordion-collapse collapse" aria-labelledby="heading402" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. Academic Bank of Credits (ABC) is a virtual/digital storehouse that contains the information of the credits earned by individual students throughout their learning journey.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading403">
                            <button class="accordion-button headd3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse403" aria-expanded="false" aria-controls="collapse403">
                                Q.  How do I register/Create  ABC ID?
                            </button>
                        </h2>
                        <div id="collapse403" class="accordion-collapse collapse" aria-labelledby="heading403" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="para1">A. ABC ID can be created by visiting <a class="text-primary" href="https://digilocker.meripehchaan.gov.in/">https://digilocker.meripehchaan.gov.in/</a> and registering from this portal. After completion of registration, a 12-digit ABC ID will be created.                            </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
          </div>
          <!-- accordion  -->
        </div>
@endsection

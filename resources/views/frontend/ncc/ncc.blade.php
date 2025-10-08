@extends('frontend.master')
@section('content')
    <section>

        <div class="mobile">
            @include('frontend/components/mobileheader')
            <section style="padding-top: 90px;">
                <img src="mobile-assets/ncc/ncc-banner-mob.png" alt="">
            </section>
        </div>

        <div class="website">
            @include('frontend/components/aheader')
            <section>
                <img src="mobile-assets/ncc/ncc-banner.png" alt="">
            </section>
        </div>


        <div class="container mt-4">
            <h1 style="color: #27467A;" class="mobile-headd1">National Cadet Corps (NCC) at The Assam Royal Global
                University</h1>
            <p class="mobile-para1 text-dark ">The National Cadet Corps (NCC) at The Assam Royal Global University
                (RGU) stands as a beacon of discipline, leadership, and national service.
                Affiliated with the 30 Assam Battalion NCC (Army) and 50 Assam Air Squadron NCC, the unit
                plays a pivotal role in shaping responsible, resilient, and service-oriented citizens.</p>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Empowering Youth Through Excellence</h2>
            <p class="mobile-para1 text-dark ">RGU’s NCC unit is committed to the holistic development of its cadets,
                instilling values of character, courage, and commitment. Through structured
                training and active participation in camps, cadets are groomed to become future leaders and contributors
                to society.</p>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">About NCC</h2>
            <p class="mobile-para1 text-dark ">The National Cadet Corps was formed in India with the National Cadet
                Corps Act of 1948, with the purpose of recruit regular students as cadets for basic military training in
                small arms and parades during their study from high schools, colleges and Universities all over India on
                voluntary basis.</p>
            <p class="mobile-para1 text-dark ">Once they complete their NCC training, they are given preference over
                normal candidates during selections based on the achievements in the active military service, various
                other services and also in admission in the higher education.</p>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Motto of NCC</h2>
            <p class="mobile-headd3">Unity and Discipline (Ekta aur Anushasan)</p>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Four Cardinal Principals of Discipline</h2>
            <ol class="mobile-para1 text-dark ">
                <li>Obey with a smile</li>
                <li>Be Punctual</li>
                <li>Work hard and without fuss</li>
                <li>Make no excuses and tell no lies</li>
            </ol>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Aims of NCC</h2>
            <ol class="mobile-para1 text-dark ">
                <li>To develop qualities of character, courage, comradeship, discipline, leadership, secular
                    outlook, spirit of adventure and sportsmanship and the ideals of selfless service among the youth to
                    make them useful citizen.</li>
                <li>To create a human resource of organised trained and motivated youth to provide
                    leadership in all walks of life including the Armed Forces and be always available for the service
                    of the nation.</li>
            </ol>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Achievements and Recognition</h2>
            <p style="color: #27467A;" class="mobile-headd3 fw-bold">Despite being a relatively new unit, RGU’s NCC cadets
                have consistently
                demonstrated excellence:</p>
            <ol class="mobile-para1 text-dark ">
                <li><strong>Best Institute Award:</strong> Conferred for two consecutive years at major NCC
                    camps, reflecting the quality of training and cadet performance.</li>
                <li><strong>CATC-85 Camp Success:</strong> Under the Yuva Aapda Mitra Scheme (YAMS), the RGU
                    contingent led by the NCC Coordinator and five Senior Wing (SW) girl cadets excelled in disaster
                    preparedness training.</li>
                <li><strong>Medal Wins:</strong>
                    <ol class="mobile-para1  text-dark">
                        <li>Gold in Volleyball (SW)</li>
                        <li>Gold in Debate</li>
                        <li>Silver in Extempore Speech</li>
                    </ol>
                </li>
                <li><strong>Best Cadet (SW):</strong> One cadet was honored with the prestigious Best Cadet
                    award.</li>
            </ol>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Core Focus Areas</h2>
            <ol class="mobile-para1 text-dark">
                <li><strong>Character & Leadership Development:</strong> Cadets undergo rigorous training to
                    build resilience, confidence, and leadership skills.</li>
                <li><strong>Disaster Preparedness & Community Service:</strong> Programs like YAMS equip
                    cadets with life-saving skills and a strong sense of social responsibility.</li>
                <li><strong>Military & Adventure Training:</strong> Exposure to basic military drills and
                    adventure activities fosters teamwork, physical fitness, and an adventurous spirit.</li>
            </ol>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">NCC Camps</h2>
            <p style="color: #27467A;" class="mobile-headd3 fw-bold">The participation in camps is compulsory for appearing
                in NCC
                examination. Major NCC camps are as under:</p>
            <div class="row">
                <div class="col-md-6">
                    <ol class="mobile-para1 text-dark">
                        <li>Leadership Camp</li>
                        <li>ThalSainik Camp</li>
                        <li>VayuSainik Camp</li>
                        <li>NauSainik Camp</li>
                        <li>Rock Climbing Camp</li>
                        <li>Trekking camp</li>
                        <li>National Integration Camp (NIC)</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <ol class="mobile-para1 text-dark">
                        <li>ThalSainik Camp (TSC)</li>
                        <li>Army Attachment Camp (AAC)</li>
                        <li>Air force Attachment Camp (AAC)</li>
                        <li>Ship Attachment Camp</li>
                        <li>Republic Day Camp (RDC)</li>
                        <li>Annual training Camp (ATC)</li>
                    </ol>
                </div>
            </div>

            <h2 style="color: #27467A;" class="mobile-headd2 mt-4">Certification Programme</h2>

            <h3 style="color: #27467A;" class="mobile-headd2 mt-3">General</h3>
            <p class="mobile-para1 text-dark">The eligibility conditions and the general procedure for the conduct of
                the Certificate Examination for Cadets of Senior and Junior Division/Wings NCC (All wings) have been
                issued by respective HQ from time to time. The aim of this Directive is to
                consolidate all such instruction and revise these, where necessary.</p>

            <h3 style="color: #27467A;" class="mobile-headd2 mt-3">Type of Examination</h3>
            <p class="mobile-para1 text-dark">The type of Certificate Examination and the unit in which these are
                held are given below:</p>
            <p class="mobile-para1 text-dark">Certificate 'B' & 'C' - Senior Division NCC</p>

            <h3 style="color: #27467A;" class="mobile-headd2 mt-3">For "B" Certificate Examination</h3>
            <ol class="mobile-para1 text-dark">
                <li>Cadet must be in second year of SD/SW NCC Training.</li>
                <li>Must have attended one Annual Training Camp/NIC/Attachment training with regular Army,
                    Navy, Air Force Units.</li>
                <li>Cadet must have attended a minimum of 75% of total training period laid down in the
                    syllabus for the first and second years for Senior Division Wing NCC (All Wings).</li>
                <li>Break in the NCC service of the cadet SD/SE prior to appearing in the exam should not
                    exceed more than 18 months at one time, after his discharge to count his service for Certificate 'B'
                    Examination.</li>
                <li>In case the break exceeds 18 months the following procedure will be adopted.
                    <blockquote style="color: #FF9A1E;" class="blockquote-footer mt-2">"If cadet had been on the unit rolls
                        for a
                        minimum of two years before his discharge and had attended 75% of the total periods during his
                        NCC service he will need another 45 periods of training to become eligible for certificate 'B'
                        Examination. In all other cases where above conditions are not fulfilled, the cadet must attend
                        a minimum 75% periods of the first and second years of training."</blockquote>
                </li>
                <li>An Air Wing Cadet must do a minimum of 10 Glide launches.</li>
            </ol>

            <h3 style="color: #27467A;" class="mobile-headd2 mt-3">For "C" Certificate Examination</h3>
            <ol class="mobile-para1 text-dark">
                <li>Cadet must have passed 'B' certificate.</li>
                <li>The Cadet must be in second/third year of SD/SW NCC Training.</li>
                <li>The Cadet must have attended a minimum of 75% of the periods of 3rd year syllabus during
                    the academic session.</li>
                <li>Break in the NCC Service of the SD/SW Cadet prior to appearing in the exam should not
                    exceed more than 18 months at one time, after his discharge to count his previous service for
                    Certificate 'C' examination.</li>
                <li>In case the break exceeds 18 months, the following procedure will be adopted.
                    <blockquote style="color: #FF9A1E;" class="blockquote-footer mt-2">"If cadet had been on the Unit rolls
                        for a
                        minimum of two years before his discharge and had attended 75% of the total period during his
                        NCC service, he will need another 45 periods of training to become eligible for Certificate 'C'
                        examination. In all other cases where above conditions are not fulfilled, the Cadet must attend
                        a minimum of 75% periods of the first and second year of training."</blockquote>
                </li>
                <li>Must have attended two Camp.</li>
            </ol>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>


    </section>
@endsection

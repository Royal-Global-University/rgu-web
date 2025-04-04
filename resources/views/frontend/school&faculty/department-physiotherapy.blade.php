@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/dept-physiotherapy/s2-bg-img-1.webp);">
      <div class="mobile" >
        @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-physiotherapy/mob-physiotherapy.png" alt="">

             <div class="container pb-5 pt-3">

        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              5. Events & Achievements
            </h3>
            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="font-weight-bold text-white">S.No.</th>
                    <th class="font-weight-bold text-white">Name</th>
                    <th class="font-weight-bold text-white">
                      EVENT NAME (CONFERENCE/SEMIN AR/ GUEST LECTURE ETC.)
                    </th>
                    <th class="font-weight-bold text-white">VENUE</th>
                    <th class="font-weight-bold text-white">
                      NAME OF RESOURCE PERSON/GUEST/ CELEBRITY ETC, ALONG WITH
                      DESIGNATION, PLACE OF WORK
                    </th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>29.2.2024</td>
                    <td>"Guest lecture on Basics of ECG and its interpretations"</td>
                    <td>"Seminar Hall,first floor ,Block D"</td>
                    <td>
                      "Dr.Amal Sarma ,Divisional Medical Officer ,Anaesthesia and
                      critical care ,Railway Hospital,Lumding"
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>10.2.2024</td>
                    <td>
                      Guest lecture on overview of recent trends in ACL injury
                      rehabilitation
                    </td>
                    <td>"G – lock seminar hall ,ground floor"</td>
                    <td>
                      "Dr.Abhay Agarwal ,M.S ortho ,consultant Apollo Excelcare
                      Hospital ,Guwahati ."
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>24.5. 2024</td>
                    <td>Guest lecture on Advanced sports Nutrition</td>
                    <td>G block, Seminar Hall, Ground floor</td>
                    <td>Mr.Prateek Barbora, Health and fitness coach.</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>22.7.2024</td>
                    <td>
                      "Guest lecture on Career in Physiotherapy – Prospects,
                      Challenges &amp; Essentials"
                    </td>
                    <td>A block, Seminar Hall, 1st floor</td>
                    <td>
                      Dr. Madhusmita Koch, MPT Ortho, PhD, Physiotherapist, PMRT, GMCH
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>9.8.2024</td>
                    <td>Guest lecture on Physical Fitness</td>
                    <td>Block D, 5th floor, Room No- D501</td>
                    <td>
                      Dr. Goma Gewali (PT), Senior Physiotherapist Abhinav Bindra
                      Targeting Performance, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>9.9.2024</td>
                    <td>
                      Guest lecture :Low back pain and the role of physiotherapy in
                      the management and prevention.
                    </td>
                    <td>A block ,5th floor Auditorium</td>
                    <td>
                      Dr.Sanjib Goswami(chief consultant,orthopaedic department ,Agile
                      hospital)
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>17.2.2023</td>
                    <td>Guest Lecture on Ergonomics in Physiotherapy</td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>
                      Dr. Pallabi Goswami (PT), Principal, CPMS, PEWS group of
                      Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>22.3.2023</td>
                    <td>
                      "Guest lecture on Introduction to Pelvic Floor Rehabilitation"
                    </td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>
                      "Dr. Inndu Kashyap (PT), Associate Professor, ITS Institute of
                      Allied Health Sciences, Noida, UP"
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>6.4.2023</td>
                    <td>Guest Lecture on Health for all</td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>"Dr.Bibhuti Bhusan Goswami ,Director ,BBCI."</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>4.2.2022</td>
                    <td>
                      "Webinar on “Cancer and Rehabilitation” on occasion of World
                      Cancer Day"
                    </td>
                    <td>Online</td>
                    <td>Dr. Twist Lahan (PT), Consultant Physiotherapist, BBCI</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>5.5.2022</td>
                    <td>Guest Lecture on “Myths &amp; Facts of Asthma”</td>
                    <td>"RGU Auditorium"</td>
                    <td>
                      Dr. Kripesh Ranjan Sharma,Consultant Pulmonologist, Apollo
                      Hospitals, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>16.8.2022</td>
                    <td>Guest lecture on occasion of World Patient Safety Day</td>
                    <td>Block A, MP Hall, 5th Floor RGU</td>
                    <td>
                      Dr Gitartha Roymedhi Facility Director Parthona Orthopaedic and
                      Superspeciality Hospital, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>8.9.2022</td>
                    <td>
                      Guest Lecture on Role of Physiotherapy in Osteoarthritis on
                      occasion of World Physiotherapy Day
                    </td>
                    <td>Seminar Hall, A block, RGU</td>
                    <td>
                      "Dr. Raman Kumar, Consultant Orthopaedic Surgeon, Parthona
                      Orthopaedic &amp; Superspeciality Hospital"
                    </td>
                  </tr>

                  <tr>
                    <td>14</td>
                    <td>12.4.2021</td>
                    <td>Guest Lecture on Cyriax Concepts’</td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>
                      Dr. Chatrajit Das (PT), Vice Principal, CPMS, PEWS Group of
                      Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>6.5. 2021</td>
                    <td>
                      "Webinar on Understanding Bronchial Asthma – a consensus
                      approach on occasion of World Asthma Day"
                    </td>
                    <td>Online</td>
                    <td>
                      "Dr. Barnali Bhattacharjee (PT), Assistant Professor ,USTM,
                      Meghalaya"
                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>11.8.2021</td>
                    <td>"Guest Lecture on Interferential Therapy"</td>
                    <td>Online</td>
                    <td>
                      Dr. Amrita Hazarika (PT), Assistant Professor. CPMS, PEWS Group
                      of Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>12.8.2021</td>
                    <td>Guest lecture on Frozen Shoulder</td>
                    <td>Online</td>
                    <td>
                      "Dr. Mayur Das (PT), Principal In charge, RIPT Group of
                      Institutions"
                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>13.8.2021</td>
                    <td>
                      Guest Lecture on Hand Hygiene &amp; Physiology of Respiratory
                      System
                    </td>
                    <td>Online</td>
                    <td>
                      Dr. Somyata Sharma (PT), Assistant Professor, CPMS, PEWS Group
                      of Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>15.5.2021</td>
                    <td>Webinar on “Upper Cross Syndrome”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Subanjan Das (PT), Former Principal &amp; Associate
                      Professor at Burdavan Institutes of Medical &amp; Life Sciences,
                      WB"
                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>29.5.2021</td>
                    <td>Webinar on “Spinal stability and Pilates”</td>
                    <td>Online</td>
                    <td>Dr, Nitu Verma (PT), Director at life 360 clinic</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>8.6.2021</td>
                    <td>Webinar on “Role of Mental Fitness in Physiotherapy”</td>
                    <td>Online</td>
                    <td>
                      "Ms. Mridu Sharma, Sports Psychologist, Founder Director,
                      Breathe EHC"
                    </td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>12.6.2021</td>
                    <td>Webinar on “Foundations in Aquatic Therapy”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Harish Badiger (PT), Aquatic Therapist , Director- Babys
                      Castle, Mumbai"
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>18.6.2021</td>
                    <td>
                      Webinar on “Hospital Acquired Infection and Antibiotic
                      Resistance “
                    </td>
                    <td>Online</td>
                    <td>
                      "Dr. Apurba Kr. Sarma, HOD &amp; Assistant Professor, NEPNI
                      group of Institutions"
                    </td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>29.6.2021</td>
                    <td>
                      Webinar on “Clinical analysis of typical and pathological gait”
                    </td>
                    <td>Online</td>
                    <td>
                      "Dr. Prayash Rath (PT), Founder &amp; Managing Director, healing
                      Touch Therapy Center"
                    </td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>9.7.2021</td>
                    <td>"Webinar on “KIASTM-A Catalyst in Rehabilitation”"</td>
                    <td>Online</td>
                    <td>"Dr. Kanu Kaushik(PT), CEO- Kinesio prehab Institute"</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>3.8.2021</td>
                    <td>Webinar on “Oxygen Therapy”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Chanam Lokeshwari (PT), Visiting Faculty, National Sports
                      University"
                    </td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>6.10.2021</td>
                    <td>Webinar on “Cerebral Palsy-Essentials of Physiotherapy”</td>
                    <td>Online</td>
                    <td>
                      Dr. Ushma Garodia Consultant Clinical Physiotherapist, USA
                    </td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>8.9.2021</td>
                    <td>Webinar on “Neural Plasticity”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Srikant Sikatia (PT), HOD, Aditya College of Physiotherapy
                      &amp; Health Sciences"
                    </td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>20.06.2020</td>
                    <td>Webinar on Understanding Dementia</td>
                    <td></td>
                    <td>
                      Mr. Ritesh Kr. Sinha, Hospital Administator, Senior Occupational
                      Therapist, NIOH, Kolkata
                    </td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>23.06.2020</td>
                    <td>
                      Webinar on Health Care Quality &amp; patient Safety post
                      pandemic
                    </td>
                    <td></td>
                    <td>Dr. G. Arun Maiya, Dean, MAHE Manipal</td>
                  </tr>

                  <tr>
                    <td>31</td>
                    <td>25.11.2019</td>
                    <td>
                      Guest lecture on the occasion of Lung cancer awareness month
                    </td>
                    <td>"RGU Auditorium A block"</td>
                    <td>"Dr. A C Kataky, Director, B. Borooah Cnacer Institute"</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td>4.12.2019</td>
                    <td>"Guest lecture on Anatomy of respiratory system"</td>
                    <td>RGU</td>
                    <td>Dr. Somyata S. Sarma, Assistant Professor, CPMS</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td>5.12.2019</td>
                    <td>Guest lecture on physiology of blood</td>
                    <td>RGU</td>
                    <td>Dr.Neelakshi Kalita, MD Physiology</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td>6.12.2019</td>
                    <td>Guest lecture on Biomechanics of shoulder joint</td>
                    <td>RGU</td>
                    <td>Dr.Urvashi Bhattacharya, Assistant Professor, USTM</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr />

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
                <a
                  href="https://www.rgu.ac/research-and-development-rsaps-physics.php"
                >
                  Click More</a
                >
              </h3>
            </div>
          </div>
        </div>
        <hr />

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
                    <th class="text-white">Position in D-BoS</th>
                    <th class="text-white">Name and Designation</th>
                  </tr>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>
                      Dr. Lopa Das PT, Associate Professor/School Coordinator RSMAS
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Dr Somyata Satpathy Sarma PT, Associate Professor
                      <hr />
                      Dr Ph. Jeny Sharma PT, Assistant Professor
                      <hr />
                      Dr Sonia Lakhotia PT, Dept. of Physiotherapy, RSMAS
                      <hr />
                      Dr Dikshita Rabha PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Pallabi Sarmah PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Himashree Medhi PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Madhumita Das PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Kangkana Goswami PT, Assistant Professor, RSMAS
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>External Expert (Academic)</td>
                    <td>
                      Dr Mayur Das PT, Associate Professor, PEWS Group of Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Expert (Industry)</td>
                    <td>Dr Pritam Deka PT, HOD, VD Physiotherapy Clinic</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr />

        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              8. The Departmental Research Committee (DRC)
            </h3>
          </div>
        </div>
        <hr />

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
                            href="assets/Departmentalpdf/AY 2022-23 BPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BPT.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2023-24 BPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BPT.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/Old Syllabus AY 2019-20 BPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus AY 2019-20
                            BPT.pdf
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
                            href="assets/Departmentalpdf/Old Syllabus MPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus MPT.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2022-23 MPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 MPT.pdf
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
                      </a
                        >
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
        <img src="mobile-assets/dept-physiotherapy/web-physiotherapy.png" alt="">

     <div class="container pb-5 pt-3">

        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              5. Events & Achievements
            </h3>
            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
                <thead class="text-white" style="background-color: #27467a">
                  <tr>
                    <th class="font-weight-bold text-white">S.No.</th>
                    <th class="font-weight-bold text-white">Name</th>
                    <th class="font-weight-bold text-white">
                      EVENT NAME (CONFERENCE/SEMIN AR/ GUEST LECTURE ETC.)
                    </th>
                    <th class="font-weight-bold text-white">VENUE</th>
                    <th class="font-weight-bold text-white">
                      NAME OF RESOURCE PERSON/GUEST/ CELEBRITY ETC, ALONG WITH
                      DESIGNATION, PLACE OF WORK
                    </th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>29.2.2024</td>
                    <td>"Guest lecture on Basics of ECG and its interpretations"</td>
                    <td>"Seminar Hall,first floor ,Block D"</td>
                    <td>
                      "Dr.Amal Sarma ,Divisional Medical Officer ,Anaesthesia and
                      critical care ,Railway Hospital,Lumding"
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>10.2.2024</td>
                    <td>
                      Guest lecture on overview of recent trends in ACL injury
                      rehabilitation
                    </td>
                    <td>"G – lock seminar hall ,ground floor"</td>
                    <td>
                      "Dr.Abhay Agarwal ,M.S ortho ,consultant Apollo Excelcare
                      Hospital ,Guwahati ."
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>24.5. 2024</td>
                    <td>Guest lecture on Advanced sports Nutrition</td>
                    <td>G block, Seminar Hall, Ground floor</td>
                    <td>Mr.Prateek Barbora, Health and fitness coach.</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>22.7.2024</td>
                    <td>
                      "Guest lecture on Career in Physiotherapy – Prospects,
                      Challenges &amp; Essentials"
                    </td>
                    <td>A block, Seminar Hall, 1st floor</td>
                    <td>
                      Dr. Madhusmita Koch, MPT Ortho, PhD, Physiotherapist, PMRT, GMCH
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>9.8.2024</td>
                    <td>Guest lecture on Physical Fitness</td>
                    <td>Block D, 5th floor, Room No- D501</td>
                    <td>
                      Dr. Goma Gewali (PT), Senior Physiotherapist Abhinav Bindra
                      Targeting Performance, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>9.9.2024</td>
                    <td>
                      Guest lecture :Low back pain and the role of physiotherapy in
                      the management and prevention.
                    </td>
                    <td>A block ,5th floor Auditorium</td>
                    <td>
                      Dr.Sanjib Goswami(chief consultant,orthopaedic department ,Agile
                      hospital)
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>17.2.2023</td>
                    <td>Guest Lecture on Ergonomics in Physiotherapy</td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>
                      Dr. Pallabi Goswami (PT), Principal, CPMS, PEWS group of
                      Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>22.3.2023</td>
                    <td>
                      "Guest lecture on Introduction to Pelvic Floor Rehabilitation"
                    </td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>
                      "Dr. Inndu Kashyap (PT), Associate Professor, ITS Institute of
                      Allied Health Sciences, Noida, UP"
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>6.4.2023</td>
                    <td>Guest Lecture on Health for all</td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>"Dr.Bibhuti Bhusan Goswami ,Director ,BBCI."</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>4.2.2022</td>
                    <td>
                      "Webinar on “Cancer and Rehabilitation” on occasion of World
                      Cancer Day"
                    </td>
                    <td>Online</td>
                    <td>Dr. Twist Lahan (PT), Consultant Physiotherapist, BBCI</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>5.5.2022</td>
                    <td>Guest Lecture on “Myths &amp; Facts of Asthma”</td>
                    <td>"RGU Auditorium"</td>
                    <td>
                      Dr. Kripesh Ranjan Sharma,Consultant Pulmonologist, Apollo
                      Hospitals, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>16.8.2022</td>
                    <td>Guest lecture on occasion of World Patient Safety Day</td>
                    <td>Block A, MP Hall, 5th Floor RGU</td>
                    <td>
                      Dr Gitartha Roymedhi Facility Director Parthona Orthopaedic and
                      Superspeciality Hospital, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>8.9.2022</td>
                    <td>
                      Guest Lecture on Role of Physiotherapy in Osteoarthritis on
                      occasion of World Physiotherapy Day
                    </td>
                    <td>Seminar Hall, A block, RGU</td>
                    <td>
                      "Dr. Raman Kumar, Consultant Orthopaedic Surgeon, Parthona
                      Orthopaedic &amp; Superspeciality Hospital"
                    </td>
                  </tr>

                  <tr>
                    <td>14</td>
                    <td>12.4.2021</td>
                    <td>Guest Lecture on Cyriax Concepts’</td>
                    <td>Seminar Hall, D block, RGU</td>
                    <td>
                      Dr. Chatrajit Das (PT), Vice Principal, CPMS, PEWS Group of
                      Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>6.5. 2021</td>
                    <td>
                      "Webinar on Understanding Bronchial Asthma – a consensus
                      approach on occasion of World Asthma Day"
                    </td>
                    <td>Online</td>
                    <td>
                      "Dr. Barnali Bhattacharjee (PT), Assistant Professor ,USTM,
                      Meghalaya"
                    </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>11.8.2021</td>
                    <td>"Guest Lecture on Interferential Therapy"</td>
                    <td>Online</td>
                    <td>
                      Dr. Amrita Hazarika (PT), Assistant Professor. CPMS, PEWS Group
                      of Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>12.8.2021</td>
                    <td>Guest lecture on Frozen Shoulder</td>
                    <td>Online</td>
                    <td>
                      "Dr. Mayur Das (PT), Principal In charge, RIPT Group of
                      Institutions"
                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>13.8.2021</td>
                    <td>
                      Guest Lecture on Hand Hygiene &amp; Physiology of Respiratory
                      System
                    </td>
                    <td>Online</td>
                    <td>
                      Dr. Somyata Sharma (PT), Assistant Professor, CPMS, PEWS Group
                      of Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>15.5.2021</td>
                    <td>Webinar on “Upper Cross Syndrome”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Subanjan Das (PT), Former Principal &amp; Associate
                      Professor at Burdavan Institutes of Medical &amp; Life Sciences,
                      WB"
                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>29.5.2021</td>
                    <td>Webinar on “Spinal stability and Pilates”</td>
                    <td>Online</td>
                    <td>Dr, Nitu Verma (PT), Director at life 360 clinic</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>8.6.2021</td>
                    <td>Webinar on “Role of Mental Fitness in Physiotherapy”</td>
                    <td>Online</td>
                    <td>
                      "Ms. Mridu Sharma, Sports Psychologist, Founder Director,
                      Breathe EHC"
                    </td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>12.6.2021</td>
                    <td>Webinar on “Foundations in Aquatic Therapy”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Harish Badiger (PT), Aquatic Therapist , Director- Babys
                      Castle, Mumbai"
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>18.6.2021</td>
                    <td>
                      Webinar on “Hospital Acquired Infection and Antibiotic
                      Resistance “
                    </td>
                    <td>Online</td>
                    <td>
                      "Dr. Apurba Kr. Sarma, HOD &amp; Assistant Professor, NEPNI
                      group of Institutions"
                    </td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>29.6.2021</td>
                    <td>
                      Webinar on “Clinical analysis of typical and pathological gait”
                    </td>
                    <td>Online</td>
                    <td>
                      "Dr. Prayash Rath (PT), Founder &amp; Managing Director, healing
                      Touch Therapy Center"
                    </td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>9.7.2021</td>
                    <td>"Webinar on “KIASTM-A Catalyst in Rehabilitation”"</td>
                    <td>Online</td>
                    <td>"Dr. Kanu Kaushik(PT), CEO- Kinesio prehab Institute"</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>3.8.2021</td>
                    <td>Webinar on “Oxygen Therapy”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Chanam Lokeshwari (PT), Visiting Faculty, National Sports
                      University"
                    </td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>6.10.2021</td>
                    <td>Webinar on “Cerebral Palsy-Essentials of Physiotherapy”</td>
                    <td>Online</td>
                    <td>
                      Dr. Ushma Garodia Consultant Clinical Physiotherapist, USA
                    </td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>8.9.2021</td>
                    <td>Webinar on “Neural Plasticity”</td>
                    <td>Online</td>
                    <td>
                      "Dr. Srikant Sikatia (PT), HOD, Aditya College of Physiotherapy
                      &amp; Health Sciences"
                    </td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>20.06.2020</td>
                    <td>Webinar on Understanding Dementia</td>
                    <td></td>
                    <td>
                      Mr. Ritesh Kr. Sinha, Hospital Administator, Senior Occupational
                      Therapist, NIOH, Kolkata
                    </td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>23.06.2020</td>
                    <td>
                      Webinar on Health Care Quality &amp; patient Safety post
                      pandemic
                    </td>
                    <td></td>
                    <td>Dr. G. Arun Maiya, Dean, MAHE Manipal</td>
                  </tr>

                  <tr>
                    <td>31</td>
                    <td>25.11.2019</td>
                    <td>
                      Guest lecture on the occasion of Lung cancer awareness month
                    </td>
                    <td>"RGU Auditorium A block"</td>
                    <td>"Dr. A C Kataky, Director, B. Borooah Cnacer Institute"</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td>4.12.2019</td>
                    <td>"Guest lecture on Anatomy of respiratory system"</td>
                    <td>RGU</td>
                    <td>Dr. Somyata S. Sarma, Assistant Professor, CPMS</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td>5.12.2019</td>
                    <td>Guest lecture on physiology of blood</td>
                    <td>RGU</td>
                    <td>Dr.Neelakshi Kalita, MD Physiology</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td>6.12.2019</td>
                    <td>Guest lecture on Biomechanics of shoulder joint</td>
                    <td>RGU</td>
                    <td>Dr.Urvashi Bhattacharya, Assistant Professor, USTM</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr />

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
                <a
                  href="https://www.rgu.ac/research-and-development-rsaps-physics.php"
                >
                  Click More</a
                >
              </h3>
            </div>
          </div>
        </div>
        <hr />

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
                    <th class="text-white">Position in D-BoS</th>
                    <th class="text-white">Name and Designation</th>
                  </tr>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>
                      Dr. Lopa Das PT, Associate Professor/School Coordinator RSMAS
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      All Faculty members of the Department Members (Ex-Officio)
                    </td>
                    <td>
                      Dr Somyata Satpathy Sarma PT, Associate Professor
                      <hr />
                      Dr Ph. Jeny Sharma PT, Assistant Professor
                      <hr />
                      Dr Sonia Lakhotia PT, Dept. of Physiotherapy, RSMAS
                      <hr />
                      Dr Dikshita Rabha PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Pallabi Sarmah PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Himashree Medhi PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Madhumita Das PT, Assistant Professor, RSMAS
                      <hr />
                      Dr Kangkana Goswami PT, Assistant Professor, RSMAS
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>External Expert (Academic)</td>
                    <td>
                      Dr Mayur Das PT, Associate Professor, PEWS Group of Institutions
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Expert (Industry)</td>
                    <td>Dr Pritam Deka PT, HOD, VD Physiotherapy Clinic</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr />

        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              8. The Departmental Research Committee (DRC)
            </h3>
          </div>
        </div>
        <hr />

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
                            href="assets/Departmentalpdf/AY 2022-23 BPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BPT.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2023-24 BPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BPT.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/Old Syllabus AY 2019-20 BPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus AY 2019-20
                            BPT.pdf
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
                            href="assets/Departmentalpdf/Old Syllabus MPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus MPT.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2022-23 MPT.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 MPT.pdf
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
                      </a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
@endsection

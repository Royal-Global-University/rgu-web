@extends('frontend.master')
@section('content')
        <div style="background-image: url(mobile-assets/dept-lang/s2-bg-img-1.webp);">
      <div class="mobile" >
        @include('frontend/components/mobileheader')
            <img style="padding-top: 80px; position: relative;" src="mobile-assets/dept-lang/mobile-lang.png" alt="">

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
                    <th class="font-weight-bold text-white">S.No</th>
                    <th class="font-weight-bold text-white">Name of the guest</th>
                    <th class="font-weight-bold text-white">Designation</th>
                    <th class="font-weight-bold text-white">Purpose</th>
                    <th class="font-weight-bold text-white">Date of Visit</th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Dr. Anwesha Mahanta</td>
                    <td>Dance exponent</td>
                    <td>Invited talk on Literature and Performing Arts</td>
                    <td>3/16/2018</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      Prof. Alison East, University of Otago, New Zealand and Prof.
                      Barbara Snook, Auckland University, New Zealand.
                    </td>
                    <td>Senior faculty members and choreographers</td>
                    <td>Talk Program on Culture and Environment</td>
                    <td>10/25/2018</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mintie Das</td>
                    <td>Author</td>
                    <td>Interactive session on How to tell and sell your story</td>
                    <td>1/29/2019</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Ranjit Choudhury</td>
                    <td>Former Professor, Cotton University</td>
                    <td>special talk on T.S. Eliot's 131st birth anniversary</td>
                    <td>9/30/2019</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Easterine Kire</td>
                    <td>Author</td>
                    <td>Talk on Folktales, Narratives, Fiction</td>
                    <td>11/6/2019</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Proyashi Barua</td>
                    <td>Author</td>
                    <td>Workshop on Creative Writing</td>
                    <td>1/24/2020</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Dr Afrida Tasneem</td>
                    <td>Professor</td>
                    <td>Talk on feminism</td>
                    <td>4/17/2020</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Prof Asha Kuthari</td>
                    <td>Professor, Dept of English, GU.</td>
                    <td>Webinar on Renaissance Drama</td>
                    <td>4/16/2020</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Dr. Dhurjjati Sarma</td>
                    <td>
                      Assistant Professor, Dept of Modern Indian Languages and
                      Literary Studies, GU
                    </td>
                    <td></td>
                    <td>4/17/2020</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Dr. Avishek Parui</td>
                    <td>Associate Professor, HSS, IIT Madras</td>
                    <td>
                      Webinar on Masculinity &amp; Imperial Performance in George
                      Orwell's "Shooting an Elephant"
                    </td>
                    <td>6/3/2020</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Dr Atanu Saha</td>
                    <td>
                      Associate Professor, Department of Linguistics, Jadavpur
                      University
                    </td>
                    <td>
                      Webinar on Challenges of Documenting Lesser Known &amp; Lesser
                      Studied Languages
                    </td>
                    <td>6/10/2020</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Mamang Dai</td>
                    <td>Poet and novelist</td>
                    <td>Panel Discussion</td>
                    <td>6/11/2020</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Dhurba Hazarika</td>
                    <td>Novelist</td>
                    <td>Panel Discussion</td>
                    <td>6/11/2020</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Prof. Ruth Vanita.</td>
                    <td>Professor, University of Montana</td>
                    <td>
                      Webinar on The Virgin Mary &amp; Female Empowerment in Medieval
                      Europe
                    </td>
                    <td>6/18/2020</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Juan Garrido Salgado</td>
                    <td>Australian Poet.</td>
                    <td>Webinar on Literature from the Margins</td>
                    <td>6/19/2020</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Prof. Malinee Goswami</td>
                    <td>Vice Chancellor, Assam Women’s University, Jorhat</td>
                    <td>Webinar on Reawakening of Indian Culture through Sanskrit</td>
                    <td>8/6/2020</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Ankush Saikia</td>
                    <td>Author</td>
                    <td>Invited talk</td>
                    <td>3/26/2021</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Prof. Jyotirmoy Prodhani</td>
                    <td>Professor. North-Eastern Hill University</td>
                    <td>Webinar on Post-colonial Indian Stage</td>
                    <td>5/22/2021</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Dr. Prasenjit Biswas</td>
                    <td>
                      Associate&nbsp;Professor, Department: Philosophy, 2024,
                      North-Eastern Hill University,
                    </td>
                    <td>
                      Webinar on Aesthetics of Self: Reading through phenomenology
                    </td>
                    <td>6/23/2021</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Dr Sushma Murthy</td>
                    <td>
                      Associate Professor of English &amp; Cultural Studies, CHRIST
                      (Deemed to be University). Ve
                    </td>
                    <td>
                      Webinar on Literature, Text and interdisciplinarity in English
                      studies
                    </td>
                    <td>9/14/2021</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Dr. Ipshita Barat,</td>
                    <td>
                      Head, Assistant Professor , Mass Communication &amp; Videography
                      Department at St. Xavier's College (Autonomous), Kolkata
                    </td>
                    <td>Webinar on Literature and Cinema: An intersection</td>
                    <td>12/6/2021</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Rashmi Narzary.</td>
                    <td>Author</td>
                    <td>Invited talk</td>
                    <td>12/10/2021</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Tarali Sarma</td>
                    <td>Singer</td>
                    <td>
                      Invited talk on Dr Bhupen Hazarika's eleventh death anniversary
                    </td>
                    <td>11/4/2022</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>Dr Lakhipriya Gogoi</td>
                    <td>
                      Lakhipriya Gogoi. Assistant Professor of English, Dibrugarh
                      University
                    </td>
                    <td>
                      Webinar on Nature and Environment in the Oral Narratives of
                      Assam
                    </td>
                    <td>5/11/2022</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>Dr Madhurima Goswami</td>
                    <td>
                      Associate professor, Chandraprabha Saikiani Centre for Women’s
                      Studies, Tezpur University
                    </td>
                    <td>Lecture-demonstration on World Dance Day</td>
                    <td>4/28/2023</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>Dr Meernanda Barthakur</td>
                    <td>Classical dancer</td>
                    <td>Lecture-demonstration on World Dance Day</td>
                    <td>4/28/2023</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>Prof. Archana Sharma,</td>
                    <td>
                      Former Director Centre for Women's studies GU, Anjana B Sarma,
                      Director (retd.) Guwahati Refinery
                    </td>
                    <td>Panel Discussion on International Women's Day</td>
                    <td>3/9/2023</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>Pallabi Ghosh</td>
                    <td>Human Rights Activist</td>
                    <td>Panel Discussion on International Women's Day</td>
                    <td>3/9/2023</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>Dr Nizara Hazarika</td>
                    <td>
                      Nizara Hazarika. Associate Professor of English, Sonapur College
                    </td>
                    <td>Invited talk on interdisciplinary studies</td>
                    <td>8/8/2023</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>Loya Agarwala</td>
                    <td>Author and counsellor</td>
                    <td>Invited talk</td>
                    <td>9/11/2023</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td>Prof Padimini Bhuyan</td>
                    <td>
                      &nbsp;Professor and Head of Department of English Language
                      Teaching&nbsp;·&nbsp;Gauhati University
                    </td>
                    <td>Chief guest for language lab inauguration</td>
                    <td>9/19/2023</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td>Prof Uday Shanker Dixit</td>
                    <td>Professor. Department of Mechanical Engineering, IITG</td>
                    <td>Invited talk at the Faculty Development Program</td>
                    <td>9/21/2023</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td>Prof Sukanya Sharma</td>
                    <td>Professor, HSS, IITG</td>
                    <td>Invited talk at the Faculty Development Program</td>
                    <td>9/21/2023</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td>Dr Pradipta Borgohain</td>
                    <td>Pradipta Borgohain, Professor</td>
                    <td>Invited talk on Relevance of Kafka</td>
                    <td>5/16/2024</td>
                  </tr>
                  <tr>
                    <td>35</td>
                    <td>Dr Namrata Pathak</td>
                    <td>Professor of English,&nbsp;NEHU.</td>
                    <td>Workshop on creative writing</td>
                    <td>8/8/2024</td>
                  </tr>
                  <tr>
                    <td>36</td>
                    <td>Prof Pradip Jyoti Mahanta</td>
                    <td>
                      Former professor at Tezpur University and esteemed author and
                      researcher, Professor, RGU
                    </td>
                    <td>Talk on Sankaradeva</td>
                    <td>9/9/2024</td>
                  </tr>
                  <tr>
                    <td>37</td>
                    <td>Madhu Raghavendra</td>
                    <td>Poet</td>
                    <td>Panelist for the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>38</td>
                    <td>Dr Amanda B Basaiawmoit</td>
                    <td>Associate Professor. Shillong College</td>
                    <td>Panelist for the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>39</td>
                    <td>Dr Meenakshi Goswami</td>
                    <td>Principal of CNS Higher Secondary School, Tezpur</td>
                    <td>Panelist for the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>40</td>
                    <td>Shaikh Md</td>
                    <td>Poet and columnist</td>
                    <td>Judge at the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>41</td>
                    <td>Salik Khan</td>
                    <td>
                      Policy and Communication Consultant, Assam Police and student of
                      Urdu literature
                    </td>
                    <td>Judge at the Spring Orchestra poetry festival</td>
                    <td>4/5/2024</td>
                  </tr>
                  <tr>
                    <td>42</td>
                    <td>Dr Arunav Barua</td>
                    <td>Academic and poet</td>
                    <td>Judge at the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>43</td>
                    <td>Chetan Sharma</td>
                    <td>Visual Merchandise Designer</td>
                    <td>Invited talk</td>
                    <td>9/12/2024</td>
                  </tr>
                  <tr>
                    <td>44</td>
                    <td>Chinmoy Barma</td>
                    <td>Film maker</td>
                    <td>Invited talk</td>
                    <td>5/13/2024</td>
                  </tr>
                  <tr>
                    <td>45</td>
                    <td>Ridhima Kejriwal</td>
                    <td>Sound healer</td>
                    <td>Invited talk</td>
                    <td>4/3/2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


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
                <a href="#" class="" target="_blank">Click to view...</a>
              </h3>
            </div>
          </div>
        </div>


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
                    <th class="text-white">Position in S-BoS</th>
                    <th class="text-white">Name and Designation</th>
                  </tr>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>Prof. (Dr.) Krishna Barua, Dean (i/c), RSL</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>All Heads of the Departments - Members (Ex-Officio)</td>
                    <td>Dr. Baishalee Rajkhowa, Associate Professor &amp; Head</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Professors of the School Members (Ex-Officio)</td>
                    <td>
                      Prof. (Dr.) Pradip Jyoti Mahanta, Professor, Department of
                      English &amp; Dean (i/c), RSCOM.
                      <hr />
                      Prof. (Dr.) Bornali Bhuyan, Professor
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Experts for each Department (Academic)</td>
                    <td>
                      Prof. (Dr.) Rakhee Kalita Moral, Dean of Languages &amp; Head,
                      Center for Women’s Studies, Cotton University, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>External Experts for each Department (Industry)</td>
                    <td>
                      Dhruba Hazarika, Eminent writer &amp; Former Chairperson, Assam,
                      Public Service Commission
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>
                      Two Faculty members of the School nominated by the Vice
                      Chancellor
                    </td>
                    <td>
                      Dr. Jasmine Choudhury, Assistant Professor
                      <hr />
                      Dr. Pronami Bhattacharyya, Assistant Professor
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Registrar, Member Secretary (Ex-officio)</td>
                    <td>Dr. D N Singh, Registrar and his nominee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              8. The Departmental Research Committee (DRC)
            </h3>
            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
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
                    <td>1</td>
                    <td>Head of the Department</td>
                    <td>Prof. Tushti Sharma</td>
                    <td>Professor, HoD, RSL</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2" class="align-middle">Two Professors</td>
                    <td>Prof. Indrani Singh Rai</td>
                    <td>Professor and Dean, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Krishna Barua</td>
                    <td>Senior Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="2">3</td>
                    <td rowspan="2" class="align-middle">
                      Two Associate Professors – one of them will be the member
                      secretary
                    </td>
                    <td>Dr. Baishalee Rajkhowa</td>
                    <td>Associate Professor, RSL</td>
                    <td>Member Secretary</td>
                  </tr>
                  <tr>
                    <td>Dr. Stuti Goswami</td>
                    <td>Associate Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="2">4</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Jasmine A Choudhury</td>
                    <td>Assistant Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. Pompi Basumatary</td>
                    <td>Assistant Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">5</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Ankur Ganguly</td>
                    <td>Dean Academics, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Sajal Nag</td>
                    <td>Professor &amp; Dean RSHSS</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Bhuban Barooah</td>
                    <td>Professor &amp; Dean, RSLA</td>
                    <td>External Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


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
                            href="assets/Departmentalpdf/AY 2023-24 BA English.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BA English.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2022-23 BA English.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BA English.pdf
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
                            href="assets/Departmentalpdf/Old Syllabus MA English.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus MA
                            English.pdf <i class="fa fa-download"></i>
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
                      </a>
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
        <img src="mobile-assets/dept-lang/web-language.png" alt="">

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
                    <th class="font-weight-bold text-white">S.No</th>
                    <th class="font-weight-bold text-white">Name of the guest</th>
                    <th class="font-weight-bold text-white">Designation</th>
                    <th class="font-weight-bold text-white">Purpose</th>
                    <th class="font-weight-bold text-white">Date of Visit</th>
                  </tr>
                </thead>

                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Dr. Anwesha Mahanta</td>
                    <td>Dance exponent</td>
                    <td>Invited talk on Literature and Performing Arts</td>
                    <td>3/16/2018</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      Prof. Alison East, University of Otago, New Zealand and Prof.
                      Barbara Snook, Auckland University, New Zealand.
                    </td>
                    <td>Senior faculty members and choreographers</td>
                    <td>Talk Program on Culture and Environment</td>
                    <td>10/25/2018</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mintie Das</td>
                    <td>Author</td>
                    <td>Interactive session on How to tell and sell your story</td>
                    <td>1/29/2019</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Dr. Ranjit Choudhury</td>
                    <td>Former Professor, Cotton University</td>
                    <td>special talk on T.S. Eliot's 131st birth anniversary</td>
                    <td>9/30/2019</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Easterine Kire</td>
                    <td>Author</td>
                    <td>Talk on Folktales, Narratives, Fiction</td>
                    <td>11/6/2019</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Proyashi Barua</td>
                    <td>Author</td>
                    <td>Workshop on Creative Writing</td>
                    <td>1/24/2020</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Dr Afrida Tasneem</td>
                    <td>Professor</td>
                    <td>Talk on feminism</td>
                    <td>4/17/2020</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Prof Asha Kuthari</td>
                    <td>Professor, Dept of English, GU.</td>
                    <td>Webinar on Renaissance Drama</td>
                    <td>4/16/2020</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Dr. Dhurjjati Sarma</td>
                    <td>
                      Assistant Professor, Dept of Modern Indian Languages and
                      Literary Studies, GU
                    </td>
                    <td></td>
                    <td>4/17/2020</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Dr. Avishek Parui</td>
                    <td>Associate Professor, HSS, IIT Madras</td>
                    <td>
                      Webinar on Masculinity &amp; Imperial Performance in George
                      Orwell's "Shooting an Elephant"
                    </td>
                    <td>6/3/2020</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Dr Atanu Saha</td>
                    <td>
                      Associate Professor, Department of Linguistics, Jadavpur
                      University
                    </td>
                    <td>
                      Webinar on Challenges of Documenting Lesser Known &amp; Lesser
                      Studied Languages
                    </td>
                    <td>6/10/2020</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Mamang Dai</td>
                    <td>Poet and novelist</td>
                    <td>Panel Discussion</td>
                    <td>6/11/2020</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Dhurba Hazarika</td>
                    <td>Novelist</td>
                    <td>Panel Discussion</td>
                    <td>6/11/2020</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Prof. Ruth Vanita.</td>
                    <td>Professor, University of Montana</td>
                    <td>
                      Webinar on The Virgin Mary &amp; Female Empowerment in Medieval
                      Europe
                    </td>
                    <td>6/18/2020</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Juan Garrido Salgado</td>
                    <td>Australian Poet.</td>
                    <td>Webinar on Literature from the Margins</td>
                    <td>6/19/2020</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Prof. Malinee Goswami</td>
                    <td>Vice Chancellor, Assam Women’s University, Jorhat</td>
                    <td>Webinar on Reawakening of Indian Culture through Sanskrit</td>
                    <td>8/6/2020</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Ankush Saikia</td>
                    <td>Author</td>
                    <td>Invited talk</td>
                    <td>3/26/2021</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Prof. Jyotirmoy Prodhani</td>
                    <td>Professor. North-Eastern Hill University</td>
                    <td>Webinar on Post-colonial Indian Stage</td>
                    <td>5/22/2021</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Dr. Prasenjit Biswas</td>
                    <td>
                      Associate&nbsp;Professor, Department: Philosophy, 2024,
                      North-Eastern Hill University,
                    </td>
                    <td>
                      Webinar on Aesthetics of Self: Reading through phenomenology
                    </td>
                    <td>6/23/2021</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Dr Sushma Murthy</td>
                    <td>
                      Associate Professor of English &amp; Cultural Studies, CHRIST
                      (Deemed to be University). Ve
                    </td>
                    <td>
                      Webinar on Literature, Text and interdisciplinarity in English
                      studies
                    </td>
                    <td>9/14/2021</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Dr. Ipshita Barat,</td>
                    <td>
                      Head, Assistant Professor , Mass Communication &amp; Videography
                      Department at St. Xavier's College (Autonomous), Kolkata
                    </td>
                    <td>Webinar on Literature and Cinema: An intersection</td>
                    <td>12/6/2021</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Rashmi Narzary.</td>
                    <td>Author</td>
                    <td>Invited talk</td>
                    <td>12/10/2021</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Tarali Sarma</td>
                    <td>Singer</td>
                    <td>
                      Invited talk on Dr Bhupen Hazarika's eleventh death anniversary
                    </td>
                    <td>11/4/2022</td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>Dr Lakhipriya Gogoi</td>
                    <td>
                      Lakhipriya Gogoi. Assistant Professor of English, Dibrugarh
                      University
                    </td>
                    <td>
                      Webinar on Nature and Environment in the Oral Narratives of
                      Assam
                    </td>
                    <td>5/11/2022</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>Dr Madhurima Goswami</td>
                    <td>
                      Associate professor, Chandraprabha Saikiani Centre for Women’s
                      Studies, Tezpur University
                    </td>
                    <td>Lecture-demonstration on World Dance Day</td>
                    <td>4/28/2023</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>Dr Meernanda Barthakur</td>
                    <td>Classical dancer</td>
                    <td>Lecture-demonstration on World Dance Day</td>
                    <td>4/28/2023</td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>Prof. Archana Sharma,</td>
                    <td>
                      Former Director Centre for Women's studies GU, Anjana B Sarma,
                      Director (retd.) Guwahati Refinery
                    </td>
                    <td>Panel Discussion on International Women's Day</td>
                    <td>3/9/2023</td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>Pallabi Ghosh</td>
                    <td>Human Rights Activist</td>
                    <td>Panel Discussion on International Women's Day</td>
                    <td>3/9/2023</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>Dr Nizara Hazarika</td>
                    <td>
                      Nizara Hazarika. Associate Professor of English, Sonapur College
                    </td>
                    <td>Invited talk on interdisciplinary studies</td>
                    <td>8/8/2023</td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>Loya Agarwala</td>
                    <td>Author and counsellor</td>
                    <td>Invited talk</td>
                    <td>9/11/2023</td>
                  </tr>
                  <tr>
                    <td>31</td>
                    <td>Prof Padimini Bhuyan</td>
                    <td>
                      &nbsp;Professor and Head of Department of English Language
                      Teaching&nbsp;·&nbsp;Gauhati University
                    </td>
                    <td>Chief guest for language lab inauguration</td>
                    <td>9/19/2023</td>
                  </tr>
                  <tr>
                    <td>32</td>
                    <td>Prof Uday Shanker Dixit</td>
                    <td>Professor. Department of Mechanical Engineering, IITG</td>
                    <td>Invited talk at the Faculty Development Program</td>
                    <td>9/21/2023</td>
                  </tr>
                  <tr>
                    <td>33</td>
                    <td>Prof Sukanya Sharma</td>
                    <td>Professor, HSS, IITG</td>
                    <td>Invited talk at the Faculty Development Program</td>
                    <td>9/21/2023</td>
                  </tr>
                  <tr>
                    <td>34</td>
                    <td>Dr Pradipta Borgohain</td>
                    <td>Pradipta Borgohain, Professor</td>
                    <td>Invited talk on Relevance of Kafka</td>
                    <td>5/16/2024</td>
                  </tr>
                  <tr>
                    <td>35</td>
                    <td>Dr Namrata Pathak</td>
                    <td>Professor of English,&nbsp;NEHU.</td>
                    <td>Workshop on creative writing</td>
                    <td>8/8/2024</td>
                  </tr>
                  <tr>
                    <td>36</td>
                    <td>Prof Pradip Jyoti Mahanta</td>
                    <td>
                      Former professor at Tezpur University and esteemed author and
                      researcher, Professor, RGU
                    </td>
                    <td>Talk on Sankaradeva</td>
                    <td>9/9/2024</td>
                  </tr>
                  <tr>
                    <td>37</td>
                    <td>Madhu Raghavendra</td>
                    <td>Poet</td>
                    <td>Panelist for the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>38</td>
                    <td>Dr Amanda B Basaiawmoit</td>
                    <td>Associate Professor. Shillong College</td>
                    <td>Panelist for the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>39</td>
                    <td>Dr Meenakshi Goswami</td>
                    <td>Principal of CNS Higher Secondary School, Tezpur</td>
                    <td>Panelist for the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>40</td>
                    <td>Shaikh Md</td>
                    <td>Poet and columnist</td>
                    <td>Judge at the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>41</td>
                    <td>Salik Khan</td>
                    <td>
                      Policy and Communication Consultant, Assam Police and student of
                      Urdu literature
                    </td>
                    <td>Judge at the Spring Orchestra poetry festival</td>
                    <td>4/5/2024</td>
                  </tr>
                  <tr>
                    <td>42</td>
                    <td>Dr Arunav Barua</td>
                    <td>Academic and poet</td>
                    <td>Judge at the Spring Orchestra poetry festival</td>
                    <td>4/4/2024</td>
                  </tr>
                  <tr>
                    <td>43</td>
                    <td>Chetan Sharma</td>
                    <td>Visual Merchandise Designer</td>
                    <td>Invited talk</td>
                    <td>9/12/2024</td>
                  </tr>
                  <tr>
                    <td>44</td>
                    <td>Chinmoy Barma</td>
                    <td>Film maker</td>
                    <td>Invited talk</td>
                    <td>5/13/2024</td>
                  </tr>
                  <tr>
                    <td>45</td>
                    <td>Ridhima Kejriwal</td>
                    <td>Sound healer</td>
                    <td>Invited talk</td>
                    <td>4/3/2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


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
                <a href="#" class="" target="_blank">Click to view...</a>
              </h3>
            </div>
          </div>
        </div>


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
                    <th class="text-white">Position in S-BoS</th>
                    <th class="text-white">Name and Designation</th>
                  </tr>
                </thead>
                <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                  <tr>
                    <td>1</td>
                    <td>Convener (Ex-Officio)- Head of the Department</td>
                    <td>Prof. (Dr.) Krishna Barua, Dean (i/c), RSL</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>All Heads of the Departments - Members (Ex-Officio)</td>
                    <td>Dr. Baishalee Rajkhowa, Associate Professor &amp; Head</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Professors of the School Members (Ex-Officio)</td>
                    <td>
                      Prof. (Dr.) Pradip Jyoti Mahanta, Professor, Department of
                      English &amp; Dean (i/c), RSCOM.
                      <hr />
                      Prof. (Dr.) Bornali Bhuyan, Professor
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>External Experts for each Department (Academic)</td>
                    <td>
                      Prof. (Dr.) Rakhee Kalita Moral, Dean of Languages &amp; Head,
                      Center for Women’s Studies, Cotton University, Guwahati
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>External Experts for each Department (Industry)</td>
                    <td>
                      Dhruba Hazarika, Eminent writer &amp; Former Chairperson, Assam,
                      Public Service Commission
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>
                      Two Faculty members of the School nominated by the Vice
                      Chancellor
                    </td>
                    <td>
                      Dr. Jasmine Choudhury, Assistant Professor
                      <hr />
                      Dr. Pronami Bhattacharyya, Assistant Professor
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Registrar, Member Secretary (Ex-officio)</td>
                    <td>Dr. D N Singh, Registrar and his nominee</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div>
          <div>
            <h3
              class="headd3 text-dark fw-bold p-3"
              style="background-color: #c7daf9; color: #ffffff"
            >
              8. The Departmental Research Committee (DRC)
            </h3>
            <div class="table-responsive">
              <table
                class="overflow-hidden table text-wrap table-bordered border-top mb-5"
              >
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
                    <td>1</td>
                    <td>Head of the Department</td>
                    <td>Prof. Tushti Sharma</td>
                    <td>Professor, HoD, RSL</td>
                    <td>Chairperson</td>
                  </tr>
                  <tr>
                    <td rowspan="2">2</td>
                    <td rowspan="2" class="align-middle">Two Professors</td>
                    <td>Prof. Indrani Singh Rai</td>
                    <td>Professor and Dean, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Krishna Barua</td>
                    <td>Senior Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="2">3</td>
                    <td rowspan="2" class="align-middle">
                      Two Associate Professors – one of them will be the member
                      secretary
                    </td>
                    <td>Dr. Baishalee Rajkhowa</td>
                    <td>Associate Professor, RSL</td>
                    <td>Member Secretary</td>
                  </tr>
                  <tr>
                    <td>Dr. Stuti Goswami</td>
                    <td>Associate Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="2">4</td>
                    <td rowspan="2" class="align-middle">
                      Two Assistant Professors holding Ph.D. degree
                    </td>
                    <td>Dr. Jasmine A Choudhury</td>
                    <td>Assistant Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td>Dr. Pompi Basumatary</td>
                    <td>Assistant Professor, RSL</td>
                    <td>Member</td>
                  </tr>
                  <tr>
                    <td rowspan="3">5</td>
                    <td rowspan="3" class="align-middle">
                      Three external members not below the rank of Professors,
                      including members from an allied department, who will be
                      nominated by the URC
                    </td>
                    <td>Prof. Ankur Ganguly</td>
                    <td>Dean Academics, RGU</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Sajal Nag</td>
                    <td>Professor &amp; Dean RSHSS</td>
                    <td>External Member</td>
                  </tr>
                  <tr>
                    <td>Prof. Bhuban Barooah</td>
                    <td>Professor &amp; Dean, RSLA</td>
                    <td>External Member</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


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
                            href="assets/Departmentalpdf/AY 2023-24 BA English.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2023-24 BA English.pdf
                            <i class="fa fa-download"></i>
                          </a>
                          <a
                            href="assets/Departmentalpdf/AY 2022-23 BA English.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> AY 2022-23 BA English.pdf
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
                            href="assets/Departmentalpdf/Old Syllabus MA English.pdf"
                            target="_blank"
                          >
                            <i class="fa fa-file-text px-2"></i> Old Syllabus MA
                            English.pdf <i class="fa fa-download"></i>
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
                      </a>
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
      </div>
@endsection

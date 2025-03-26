@extends('frontend.master')
@section('content')
    <div id="page" class="site site_wrapper">

        <div class="scroll-top">
            <div class="scroll-top-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                    data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                    </path>
                </svg>
            </div>
        </div>

        @include('frontend/components/aheader')

        <!--About Section-->
        <div>
    <div
      style="margin-top: 50px"
      class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
      data-id="e22f91b"
      data-element_type="widget"
      data-widget_type="go-s-heading.default"
    >
      <div class="elementor-widget-container">
        <div class="prthalign">
          <h1
            style="font-weight: 600"
            class="headd1 text-dark kd-title-ani kd-split-text"
          >
            Department of Fashion Design
          </h1>
          <h2 class="headd2 text-dark kd-split-text">
            Royal School of Fashion Design & Technology (RSFT)
          </h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-5">
    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        1. About the Department and Programmes offered
      </h3>
      <div class="p-2">
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">
          About the Department
        </h3>
        <p class="text-dark para1" style="text-align: justify;">
          The Royal School of Fashion Design & Technology at Royal Global
          University stands as a beacon of innovation and excellence, nurturing
          creative talents and preparing graduates for dynamic careers in the
          fashion industry. Our program is renowned for its comprehensive
          curriculum that blends traditional design principles with cutting-edge
          technologies, ensuring that students are well-versed in both the
          artistry and the technical skills required in fashion. A unique
          highlight of our department is the "Royal Boutique," an on-campus
          enterprise where students gain hands-on experience by creating and
          selling designer garments while they study. This real-world exposure to
          fashion entrepreneurship enables students to apply their learning
          practically, fostering skills in design, production, and retail. Our
          thrust areas include sustainable fashion practices, digital fashion
          technologies, and fashion marketing, reflecting the department’s
          commitment to contemporary industry trends and ethical design. Graduates
          from our program are well-equipped to excel in diverse roles such as
          fashion designers, brand managers, and fashion technologists, with the
          versatility to innovate and lead in the ever-evolving fashion landscape.
          With a strong foundation in both creative and business aspects of
          fashion, our alumni are poised to make significant contributions to the
          global fashion industry, driving forward the future of design with
          vision and purpose.
        </p>
      </div>
    </div>
    <hr />

    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        2. Vision & Mission of the Department
      </h3>
      <div class="p-2">
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Vision -</h3>
        <p class="para1 text-dark">
          To offer students nationally and internationally integrated
          opportunities in the field of design to create global citizens, endowed
          with creativity and inclusive ideal of sustainability.
        </p>
        <h3 class="headd3 text-dark fw-bold kd-split-text pt-2">Mission -</h3>
        <ol class="para1 text-dark">
          <li>
            To achieve academic excellence through a creatively designed,
            research-intensive, and industry-oriented curriculum in fashion
            design.
          </li>
          <li>
            To incorporate community service and sustainable practices into
            fashion design education, instilling ethical conduct and compassion
            among students and stakeholders.
          </li>
          <li>
            To prepare students to become responsible leaders in the fashion
            industry, capable of enriching the future by driving positive
            transformation and innovation in the world.
          </li>
        </ol>
      </div>
    </div>
    <hr />

    <div>
      <h3
        class="headd3 text-dark fw-bold p-3"
        style="background-color: #c7daf9; color: #ffffff"
      >
        3. Infrastructure
      </h3>
      <div class="p-2">
        <div class="row">
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Fashion_Design/Fashion.jpg"
            />
          </div>
          <div class="col-lg-6">
            <img
              style="border-radius: 10px"
              src="assets/img/Departments/Department_Fashion_Design/Fashion2.jpg"
            />
          </div>
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
          4. Prominent Alumni
        </h3>
        <div>
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">S.No.</th>
                <th class="font-weight-bold text-white">Name of Alumni</th>
                <th class="font-weight-bold text-white">Batch</th>
                <th class="font-weight-bold text-white">
                  School and Department Name
                </th>
                <th class="font-weight-bold text-white">
                  Status/ Current Organization name with Designation
                </th>
                <th class="font-weight-bold text-white">Photograph</th>
              </tr>
            </thead>

            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>1</td>
                <td>SHIVANGI AGARWALA</td>
                <td>2017</td>
                <td>Fashion Design Dept</td>
                <td>Owner of the brand “Mashita”</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/SHIVANGIAGARWALA.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>VARUNAVI DAS</td>
                <td>2018</td>
                <td>Fashion Design Dept</td>
                <td>Owner of Creative Cashews Creation LLP</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/VARUNAVIDAS.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>ABHA JANGID</td>
                <td>2018</td>
                <td>Fashion Design Dept</td>
                <td>Graphic designer at Digitalmattermonkey at Pune</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/ABHAJANGID.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>ELBERTH JUNE MARBANIANG</td>
                <td>2018</td>
                <td>Fashion Design Dept</td>
                <td>working as a Designer under RAPBOR'S</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/ELBERTHJUNEMARBANIANG.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>KHUSHI GHOSH</td>
                <td>2019</td>
                <td>Fashion Design Dept</td>
                <td>working as a Designer at Indaco Jeans PVT ltd.</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/KHUSHIGHOSH.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>RAKUZINI OZHU</td>
                <td>2019</td>
                <td>Fashion Design Dept</td>
                <td>Owner of the brand “OZHU’S”</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/RAKUZINIOZHU.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>TABITHA GAZELLE LAMIN</td>
                <td>2019</td>
                <td>Fashion Design Dept</td>
                <td>Owner of the brand "Gazelle"</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/TABITHAGAZELLELAMIN.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>SONALI AGARWALA</td>
                <td>2022</td>
                <td>Fashion Design Dept</td>
                <td>Working as a Designer for the Brand “Knot”</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/SONALIAGARWALA.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>UPASANA HALOI</td>
                <td>2022</td>
                <td>Fashion Design Dept</td>
                <td>Working as a Stylist</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/UPASANAHALOI.jpg"
                  />
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Ishita</td>
                <td>2023</td>
                <td>Fashion Design Dept</td>
                <td>Pursuing Higher studies with a Masters in Fashion Styling</td>
                <td class="text-center">
                  <img height="180" width="180"
                    src="assets/img/Departments/Department_Fashion_Design/Ishita.jpg"
                  />
                </td>
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
          5. Events & Achievements
        </h3>
        <div>
          <table
            class="overflow-hidden table text-wrap table-bordered border-top mb-5"
          >
            <thead class="text-white" style="background-color: #27467a">
              <tr>
                <th class="font-weight-bold text-white">Date of Visit</th>
                <th class="font-weight-bold text-white">Name</th>
                <th class="font-weight-bold text-white">Designation</th>
                <th class="font-weight-bold text-white">Purpose of Visit</th>
              </tr>
            </thead>
            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
              <tr>
                <td>February 6, 2018</td>
                <td>Ms. Anamika Chaudhury</td>
                <td>Fashion Entrepreneur</td>
                <td>An interactive session on “Fashion Entrepreneurship”</td>
              </tr>
              <tr>
                <td>February 7, 2018</td>
                <td>Mr. Soumar J Sharma</td>
                <td>Fashion Designer</td>
                <td>An interactive session on “Fashion and Others."</td>
              </tr>
              <tr>
                <td>August 29, 2018</td>
                <td>Ms. Swagata Dev</td>
                <td>Fashion Blogger</td>
                <td>An interactive session on "Fashion Journalism."</td>
              </tr>
              <tr>
                <td>June 27, 2018</td>
                <td>Ms. Nein Siao</td>
                <td>
                  Dean of School of Design &amp; Fashion of IILM University,
                  Gurgaon and Academic Advisor at JS Institute of Design
                </td>
                <td>
                  RGU Speaker Series - Be Vocal about Local - Traditional Textiles
                  &amp; Crafts as Future Fashion Statement
                </td>
              </tr>
              <tr>
                <td></td>
                <td>Ms. Meghali Das</td>
                <td>
                  Vice Chairperson of FICCI ladies Organisation (2019-20) &amp;
                  Owner of Needle Craft
                </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Mr. Sonam Tashi Gyaltsen</td>
                <td>
                  Industrial Designer &amp; Co- Founder of " ECHOSTREAM" &amp;
                  Designer / Owner of "LA" &amp; "T"
                </td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td>Ms Himani Thapa</td>
                <td>Founder of Sustainable fashion label "ORI"</td>
                <td></td>
              </tr>
              <tr>
                <td>September 12, 2018</td>
                <td>Ms. Dipeeka Betala Saboo</td>
                <td>Fashion Designer</td>
                <td>
                  An interactive session on " Digital Marketing as Career Option
                </td>
              </tr>
              <tr>
                <td>June 17, 2019</td>
                <td>Ms. Mrittika Banerjee</td>
                <td>Founder of EAST by Mrittika</td>
                <td>Webinar on Fashion Business startup and entrepreneurship</td>
              </tr>
              <tr>
                <td>June 24, 2019</td>
                <td>Mr. Ameet Barua</td>
                <td>
                  Designer &amp; Innovator at KYNKOO Menswear and Emily's Workshop
                  for womenswear
                </td>
                <td>
                  Webinar on Merchandising as a Career Option in the Fashion
                  Industry
                </td>
              </tr>
              <tr>
                <td>June 26, 2019</td>
                <td>Mr. Akshay Singh Pundir</td>
                <td>
                  Owner of Fashion Label ASP, Guest Faculty at IMS, DIA Noida ,
                  Former Designer at Anju Modi
                </td>
                <td>Webinar on Traditional Garments &amp; Its Sig nificance</td>
              </tr>
              <tr>
                <td>July 03, 2019</td>
                <td>Ms. Prriyadarshini T</td>
                <td>
                  HOD &amp; Assistant Professor at Symbiosis Institute of Design ,
                  Pune &amp; Co- Creative Director at the house of Tamarind
                </td>
                <td>Webinar on Role of a Designer in the Sectors of Fashion</td>
              </tr>
              <tr>
                <td>April 16, 2019</td>
                <td>Ms. Swagata Dev</td>
                <td>Fashion / Travel / Lifestyle Blogger</td>
                <td>Webinar on Impact of COVID - 19 in the Fashion Industry</td>
              </tr>
              <tr>
                <td>July 10, 2020</td>
                <td>Ms. Indu Singh</td>
                <td>
                  General Secretary - NEWEA / Advisor &amp; Consultant at Fabric
                  Plus Pvt Ltd .
                </td>
                <td>Webinar on Silks of Assam</td>
              </tr>
              <tr>
                <td>July 20, 2020</td>
                <td>Ms. Kanchan More Sabharwal</td>
                <td>Fashion Designer and Founder of "Kanchan and Zubhe"</td>
                <td>
                  Webinar on Current Situation of Fashion Industry due to Global
                  Pandemic
                </td>
              </tr>
              <tr>
                <td></td>
                <td>Ms. Manisha Singh</td>
                <td>Founder of "Maximus Collabs"</td>
                <td></td>
              </tr>
              <tr>
                <td>July 25, 2020</td>
                <td>Ms. Kanchan More Sabharwal</td>
                <td>Fashion Designer and Founder of "Kanchan and Zubhe"</td>
                <td>Webinar on Organic Evolution in Fashion</td>
              </tr>
              <tr>
                <td>August 04, 2020</td>
                <td>Mr. Amit Khanna</td>
                <td>
                  Bollywood Fashion Photograpgher, Filmmaker , Producer &amp;
                  winner of Dadasaheb Phalke Excellence Award 2016
                </td>
                <td>
                  Webinar on Significance of Photography in building a fashion
                  brand
                </td>
              </tr>
              <tr>
                <td>January 02, 2021</td>
                <td>Mr. Migang Dilip Doley</td>
                <td>
                  Film Director and Producer and Three Times National Award Winner
                </td>
                <td>Webinar on Fashion : The Backbone of Film Industry</td>
              </tr>
              <tr>
                <td>March 17, 2021</td>
                <td>Mr. Sanjit Phukan</td>
                <td>
                  AGM Marketing Communications for Jameson - Pernon Richard India
                </td>
                <td>
                  Interactive Session on How to Fail ? - The Aspects Ad Campaign,
                  Media &amp; Photography
                </td>
              </tr>
              <tr>
                <td>May 21, 2021</td>
                <td>Ms. Arshiya Satija</td>
                <td>Fashion Merchandiser, Sabyasachi Kolkata</td>
                <td>Webinar on Accessory Indstry of Fashion</td>
              </tr>
              <tr>
                <td>May 12, 2021</td>
                <td>Ms. Manjushree Saikia</td>
                <td>
                  Fashiin Designer and Founder of URA - MAKU ( A Sustainable
                  Brand)
                </td>
                <td>Webinar on Suatainability and Brand Building</td>
              </tr>
              <tr>
                <td>May 25, 2021</td>
                <td>Mr. Ameet Barua</td>
                <td>
                  Designer &amp; Innovator at KYNKOO Menswear and Emily's Workshop
                  for womenswear
                </td>
                <td>Webinar on Suatainability - The New Language of Fashion</td>
              </tr>
              <tr>
                <td></td>
                <td>Ms. Ishita Das</td>
                <td>
                  Director of " Indie Silk Projects Pvt Ltd " , Founder of 'The
                  Silk Concept" , Co- Founder oat Connecting NER
                </td>
                <td></td>
              </tr>
              <tr>
                <td>June 04, 2021</td>
                <td>Ms. Ishani Chakravorty</td>
                <td>
                  Lecturer at Internationl Institute of Fashion Design, Gurugram
                </td>
                <td>Webinar on Relevance of Communication in Fashion</td>
              </tr>
              <tr>
                <td>June 07 &amp; 08 , 2021</td>
                <td>Mr. Pravin Kr. Panjiyar</td>
                <td>Fashion Commercial Photographer , Mumbai</td>
                <td>Webinar on Fashion Photography</td>
              </tr>
              <tr>
                <td>June 29, 2021</td>
                <td>Mr. Prabhat Singh</td>
                <td>
                  R &amp; D Head and Washing amd Development Manager , Global Wash
                  Creation Pvt Ltd, Gurgaon
                </td>
                <td>Webinar on process of Production in Garment Industry</td>
              </tr>
              <tr>
                <td>June 23, 2021</td>
                <td>Mr. Fahad Firoz Khan</td>
                <td>
                  Head of Authentication and QC in Saritoria Ltd, UK Founder of
                  Achkhan (Menswear)
                </td>
                <td>Webinar on Essence of Production House - Quality Check</td>
              </tr>
              <tr>
                <td>July 28, 2021</td>
                <td>Ms. Manisha Singh</td>
                <td>Founder of "Maximus Collabs"</td>
                <td>Webinar on Professional Ethics in Fashion Industry</td>
              </tr>
              <tr>
                <td></td>
                <td>Mr. Rajat Mukherjee</td>
                <td>Fashion Photographer and Director</td>
                <td></td>
              </tr>
              <tr>
                <td>October 09, 2021</td>
                <td>Mr. Manoj Kumar Das</td>
                <td>Managing Director , NERAMAC</td>
                <td>
                  Webinar on Future Aspects in Fashion Design and Entrepreneurship
                </td>
              </tr>
              <tr>
                <td></td>
                <td>Ms. Jagrity Phukan</td>
                <td>
                  Founder and Creative Head of Way of Living Studio , Dhemaji
                </td>
                <td></td>
              </tr>
              <tr>
                <td>May 28, 2021</td>
                <td>Mr. Ankur Srivastava</td>
                <td>Designer at Max Fashion , Landmark Group , UAE</td>
                <td>RGU Speaker Series - Value Added Retail Fashion</td>
              </tr>
              <tr>
                <td>October 27 and 28, 2021</td>
                <td>Ms. Jagrity Phukan</td>
                <td>
                  Founder and Creative Head of Way of Living Studio , Dhemaji
                </td>
                <td>Workshop on Creative Pattern Making</td>
              </tr>
              <tr>
                <td>October 29, 2021</td>
                <td>Mrs. Tanushree Choudhury</td>
                <td>
                  Rehabilitation Psychologist and Clinical Hypnotherapist ,
                  Assistant Professor ,Deapartment of Psychology, Assam Don Bosco
                  University
                </td>
                <td>Motivational Talk on " Stress and Well - Being "</td>
              </tr>
              <tr>
                <td>September 21, 2023</td>
                <td>Mr. Saumar Sharma</td>
                <td>Fashion Designer</td>
                <td>Opening of Royal Boutique</td>
              </tr>
              <tr>
                <td>May 22, 2024</td>
                <td>Ms. Archana Tiwari</td>
                <td>
                  Fashion Designer and Social Activist , Founder of Pariyaat, A
                  Sustainable Fashion Brand
                </td>
                <td>
                  Interactive Session on Fashion Entreprenuership : Nuturing Age-
                  old Textile Traditions and Heritage with A Contemporary Flair
                </td>
              </tr>
              <tr>
                <td>August 07, 2024</td>
                <td>Mr Ibrahim Ahmed</td>
                <td>Zari Artisan from Patna</td>
                <td>Workshop on Zari on Ari Work</td>
              </tr>
              <tr>
                <td>September 17, 2024</td>
                <td>Ms. Swagata Dev</td>
                <td>Fashion / Travel / Lifestyle Blogger</td>
                <td>
                  Interactive Session on Building your personal brand in the
                  Digital Age
                </td>
              </tr>
              <tr>
                <td>April 02, 2024</td>
                <td>Ms. Shivangi Arawala</td>
                <td>Owner and Co - Founder of "MASHITA"</td>
                <td>
                  Interactive Session on How to Launch and Manage a Fashion Brand
                  on E-Commerce
                </td>
              </tr>
              <tr>
                <td>September 24, 2024</td>
                <td>Ms. Inky Sen</td>
                <td>A Lawyer and Founder of Inkreb</td>
                <td>
                  Interactive Session on Designing with cultural Significance
                </td>
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
            <a href="https://www.rgu.ac/research-and-development-rsc.php"
              >Click More</a
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
        <div>
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
                <td>Chairperson (Ex-Officio) Dean of School</td>
                <td>Prof Hari Prasad Agarwal, Dean-RSFA/RSD/RSFT/RSA</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Members (Ex-Officio)</td>
                <td>Mr. Ashif Mazid, Assistant Professor, RSFT</td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. (Dr.) Sougata Karmakar, HOD, Dept: of Design, Indian
                  Institute of Technology, Guwahati.
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>
                  Mr. Tuhin Bhuyan, Full stack developer + Interaction Designer
                  Founder @ Projckt, Chandigarh
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Asif Iqbal Mazid, Assistant Professor, RSFT

                  <hr />
                  Sanjay Krishna Kutum, Assistant Professor, RSFT
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Registrar, Member Secretary (Ex-officio)</td>
                <td>Dr. D.N Singh, Registrar</td>
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
        <div>
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
                <td>Chairperson (Ex-Officio) Dean of School</td>
                <td>Hari Prasad Agarwal, Dean, RSFT/RSFA/RSD/RSA</td>
              </tr>
              <tr>
                <td>2</td>
                <td>All Heads of the Departments - Members (Ex-Officio)</td>
                <td>Mr. Ashif Mazid, Assistant Professor, RSFT</td>
              </tr>
              <tr>
                <td>3</td>
                <td>External Experts for each Department (Academic)</td>
                <td>
                  Prof. (Dr.) Sougata Karmakar, HOD, Dept: of Design, Indian
                  Institute of Technology, Guwahati.
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>External Experts for each Department (Industry)</td>
                <td>
                  Mr. Tuhin Bhuyan, Full stack developer + Interaction Designer
                  Founder @ Projckt, Chandigarh
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>
                  Two Faculty members of the School nominated by the Vice
                  Chancellor
                </td>
                <td>
                  Asif Iqbal Mazid, Assistant Professor, RSFT
                  <hr />
                  Sanjay Krishna Kutum, Assistant Professor, RSFT
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Registrar, Member Secretary (Ex-officio)</td>
                <td>Dr. D.N Singh, Registrar</td>
              </tr>
            </tbody>
          </table>
        </div>
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
                  ><strong>
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
                        href="assets/Departmentalpdf/AY 2022-23 B. Des in Fashion Design.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2022-23 B. Des in
                        Fashion Design.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/AY 2023-24 B. Des in Fashion Design.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>AY 2023-24 B. Des in
                        Fashion Design.pdf <i class="fa fa-download"></i>
                      </a>
                      <a
                        href="assets/Departmentalpdf/Old Syllabus B.Des in Fashion Design.pdf"
                        target="_blank"
                      >
                        <i class="fa fa-file-text px-2"></i>Old Syllabus B.Des in
                        Fashion Design.pdf <i class="fa fa-download"></i>
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
                  <div class="accordion-body"></div>
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
                    <strong>Click to View...
                  </strong></a
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

  <div
    data-elementor-type="wp-page"
    data-elementor-id="704"
    class="elementor elementor-704"
  >
    <!--Testimonial-->
    <section
      class="elementor-section elementor-top-section elementor-element elementor-element-5b9f94a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
      data-id="5b9f94a"
      data-element_type="section"
      data-settings=""
      style="
        background-image: url('assets/img/head_img/testmonial.png');
        padding-top: 90px;
        padding-bottom: 90px;
      "
    >
      <div class="elementor-container elementor-column-gap-default">
        <div
          class="elementor-element elementor-element-3981c62 elementor-widget elementor-widget-go-s-heading"
          data-id="3981c62"
          data-element_type="widget"
          data-widget_type="go-s-heading.default"
        >
          <div class="elementor-widget-container"></div>
        </div>
      </div>
      <div
        class="elementor p-5 elementor-col-66 elementor-top-column elementor-element elementor-element-1e15263"
        data-id="1e15263"
        data-element_type="column"
      >
        <div class="elementor-widget-wrap elementor-element-populated">
          <div
            class="elementor-element elementor-element-a0a0689 elementor-widget elementor-widget-go-testimonial-id"
            data-id="a0a0689"
            data-element_type="widget"
            data-widget_type="go-testimonial-id.default"
          >
            <div class="elementor-widget-container">
              <div class="kd-testimonial-1-slider txaa-fade-right">
                <div class="swiper-container fix kd-testimonial-1-active">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am proud to say that I belong to the prestigious
                            Assam Royal Global University. I was highly elated
                            when I got admitted to the B.Des (Fashion Design)
                            program. I have always wished to graduate from a place
                            that has cooperative professors, state-of-the-art
                            infrastructure, extensive library resources,
                            laboratories equipped with the latest technologies,
                            and a clean and spacious campus with many canteens
                            serving hygienic food. My college is a blend of all
                            these qualities. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Fashion_Design/EmidakaLaloo.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Emidaka Laloo
                              </h4>
                              <p class="bio kd-para-1">
                                B.Des (Fashion Design) <br />Batch:2020-2024
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am immensely proud to be an alumnus of the Fashion
                            Design Department at The Assam Royal Global
                            University. The faculty, with their extensive
                            industrial experience and genuine passion for
                            teaching, provided me with unparalleled guidance and
                            support.<br />
                            <p>
                              The university's emphasis on practical, hands-on
                              learning, combined with internship opportunities,
                              gave me invaluable insights into the fashion
                              industry. The vibrant campus life, coupled with a
                              nurturing environment, made my time here truly
                              memorable.
                            </p>
                            <br />
                            <p>
                              The Assam Royal Global University is not just an
                              institute; it is a community that fosters growth,
                              innovation, and excellence. I am forever grateful
                              for the knowledge and experiences I gained during my
                              time here.”
                            </p>
                          </h5>
                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Fashion_Design/EshaBoraSaha.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Esha Bora Saha
                              </h4>
                              <p class="bio kd-para-1">
                                B.Des (Fashion Design)<br />Batch:2019-2023
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am incredibly honored to be a graduate of the
                            Fashion Design and Technology program at The Assam
                            Royal Global University. The expertise of the faculty
                            and their passion for nurturing creativity have
                            profoundly shaped my career. Their dedication to
                            personalized guidance and support has been
                            invaluable.<br />
                            <p>
                              The curriculum, which balances theoretical knowledge
                              and practical experience, along with opportunities
                              for hands-on projects and internships, has been
                              instrumental in developing my skills and
                              understanding of the fashion industry. The
                              university’s vibrant and inclusive environment has
                              fostered my growth both personally and
                              professionally.”
                            </p>
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Fashion_Design/SusanaDaimari.jpeg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Susana Daimari
                              </h4>
                              <p class="bio kd-para-1">
                                B.Des (Fashion Design)<br />Batch:2020-2024
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ I am immensely proud to be an alumnus of the Fashion
                            Design &amp; Technology program at Royal Global
                            University. My time at Royal Global University has
                            been nothing short of life-changing. The rigorous
                            academics have pushed me to grow in ways I never
                            imagined, with professors who are not only brilliant
                            in their fields but also deeply invested in the
                            success of their students. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Fashion_Design/IshitaMandal.jpeg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Ishita Mandal
                              </h4>
                              <p class="bio kd-para-1">
                                B.Des (Fashion Design)<br />Batch:2020-2024
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="kd-testimonial-1-item">
                        <div class="main-img fix img-cover">
                          <img src="assets/img/testimonial/1.jpg" alt="" />
                        </div>
                        <div class="item-content">
                          <h5 style="font-size: 18px; text-align: justify">
                            “ As an alumnus of Royal Global University, I can
                            confidently say that my experience there has been
                            transformative. The rigorous academic curriculum,
                            coupled with the supportive faculty and diverse
                            student body, challenged me to grow both academically
                            and personally. The Royal School of Fashion Design and
                            Technology (RSFT) helped me build a strong foundation
                            as a designer, and I will forever be grateful to the
                            institution and the professors. ”
                          </h5>

                          <div
                            class="kd-testimonial-1-item-author d-flex align-items-center pt-3"
                          >
                            <div class="author-img fix img-cover">
                              <img
                                src="assets/img/testimonial/Department_Fashion_Design/HarshitaBezbarua.jpeg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h4 class="name kd-heading-1 kd-font-900">
                                Harshita Bezbarua
                              </h4>
                              <p class="bio kd-para-1">
                                B.Des (Fashion Design)<br />Batch:2020-2024
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- slider-btn -->
                <div class="kd-testimonial-1-slider-btn">
                  <div class="kd_testimonial_1_slider_prev">
                    <div
                      class="kd-slider-btn-1 d-flex align-items-center justify-content-center txaa-fade-right"
                    >
                      <span class="icon-1">
                        <i class="fa-solid fa-arrow-left"></i>
                      </span>
                      <span class="icon-2">
                        <i class="fa-solid fa-arrow-left"></i>
                      </span>
                    </div>
                  </div>
                  <div class="kd_testimonial_1_slider_next">
                    <div
                      class="kd-slider-btn-1 has-next d-flex align-items-center justify-content-center txaa-fade-left"
                    >
                      <span class="icon-1">
                        <i class="fa-solid fa-arrow-right"></i>
                      </span>
                      <span class="icon-2">
                        <i class="fa-solid fa-arrow-right"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Testimonial-->
  </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

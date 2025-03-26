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
        <div style="background-image: url(assets/img/facilitiesnewpics/bg2.svg);" class="pb-5">
            <div style="padding-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text">
                            Indian Knowledge System (IKS) Cell</h1>
                    </div>
                </div>
            </div>


            <div class="container"
                style="text-align: start; background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <h3 class="headd3 fw-bold text-white p-3"
                    style="background-color: #144277; color: #ffffff; border-radius: 5px;">
                    EVENTS</h3>
                <h3 class="headd3 text-dark kd-split-text pt-2" style="text-align: start;">
                    Events organized by IKS Cell</h3>
                <div class="panel-body bg-white" style="padding: 10px;">
                    <table class="overflow-hidden table text-wrap table-bordered border-top mb-5 fs-16">
                        <thead class="text-white" style="background-color: #27467A;">
                            <tr>
                                <th class="font-weight-bold text-white">Date of Visit</th>
                                <th class="font-weight-bold text-white">Name</th>
                                <th class="font-weight-bold text-white">Purpose of the visit</th>
                            </tr>
                        </thead>
                        <tbody class="para1" style="text-align: start;">
                            <tr>
                                <td>April 25, 2024</td>
                                <td>1. Prof. Kameshwar Shukla, Department of Sanskrit, Gauhati University
                                    2. Prof. Uday Dixit, Director, Centre for Indian Knowledge Systems (CIKS), IIT,
                                    Guwahati.</td>
                                <td>Poster Launch Ceremony Lecture on Indian Knowledge Systems</td>
                            </tr>
                            <tr>
                                <td>May 20-22, 2024</td>
                                <td> Ms. Vandana Manchanda, Director of the Architectural Heritage Division and
                                    Head-Heritage, Crafts, &amp; Community Division at INTACH</td>
                                <td>Invited Guest Speaker</td>
                            </tr>
                            <tr>
                                <td>May 24, 2024</td>
                                <td>Shri Pranjal Saikia - veteran actor and Sangeet Natak Akademi awardee</td>
                                <td>Invited Guest Speaker</td>
                            </tr>
                            <tr>
                                <td>May 27, 2024</td>
                                <td>Speaker: Dr. Nachiket Chanchani, Associate Professor of South Asian Art and Visual
                                    Culture at the University of Michigan, Ann Arbor, USA</td>
                                <td>Invited Guest Speaker</td>
                            </tr>
                            <tr>
                                <td>21st August, 2024</td>
                                <td>Shri Haren Goswami, Samaguri Sattra, Majuli, Assam</td>
                                <td>Invited Guest Speaker</td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <p class="para1 text-dark fw-bold">The Indian Knowledge Systems (IKS) Cell at The Assam Royal Global
                            University has organized the following events this semester (April-May, 2024)</p>
                        <p class="para1 text-dark"><b>1. Conduction of IKS course:</b> As per the guidelines set by the
                            University Grants Commission (UGC), the Indian Knowledge System (IKS) Syllabus for the Undergraduate
                            Course consists of two introductory courses, namely "Introduction to IKS-1" and "Introduction to
                            IKS-2," each worth 3 credits. These courses are taught to undergraduate students during their 1st
                            and 2nd semesters. Currently, more than 1400 students enrolled under the UG 1st and 2nd semester,
                            organized into 20 groups, have competed in the IKS-1 foundation course and presently undergoing the
                            IKS-2, foundation course.</p>
                        <p class="para1 text-dark"><b>2. Poster Launch Ceremony and Lectures on Indian Knowledge Systems,
                                25thApril, 2024: </b>
                            <br><br>
                            Event: Poster Launch Ceremony of the State-Level Research Paper Writing Competition – ViViBha, in
                            partnership with BharatiyaSikhshan Mandal. This competition aligns with our academic vision
                            encapsulated in "Vision for Viksit Bharat." -
                            <br>
                        </p>
                        <p class="para1 text-dark px-5"><b>a) Poster Launch Ceremony:</b> This ceremony serves as the
                            inauguration of the State-Level Research Paper Writing Competition and will feature the unveiling of
                            posters announcing the competition. This competition invites participants to submit research papers
                            on topics related to Indian Knowledge Systems, encouraging scholarly engagement and exploration of
                            diverse aspects of Indian heritage, culture, and knowledge traditions. This competition aligns with
                            our academic vision encapsulated in "Vision for Viksit Bharat”.
                            <br>
                            <b>b) Lecture on Indian Knowledge Systems:</b> Alongside the competition launch, two distinguished
                            lecturers were organized, exploring various facets of Indian Knowledge Systems. <br>
                            I. Plenary Lecture I, by Prof. (Dr.) Kameshwar Shukla, Professor, Department of Sanskrit, Gauhati
                            University.
                            <br>Title: BharatiyaSikshan Mandal and Indian Knowledge System
                            <br>
                            II. Plenary Lecture II, by Prof. (Dr.) Uday Dixit, Professor, Department of Mechanical Engineering,
                            Head, IKS Center, IIT Guwahati
                            <br>Title : IKS and NEP 2020
                        </p>
                        <p></p>

                        <p class="para1 text-dark"><b>3. Interdepartmental Event: Exhibition on Culture and Heritage &amp; a
                                Lecture session in association with INTACH (Indian National Trust for Art and Cultural
                                Heritage), May 20th -22nd , 2024</b>
                            <br>
                            Collaborating Department of RGU: Departments of History, Fine Arts, Architecture, and Travel and
                            Tourism <br><br>
                            <b>A. Three-day exhibition themed "Culture and Heritage"</b>
                            <br>The three-day exhibition on Culture and Heritage was organized by Indian Knowledge Systems Cell,
                            RGU in association with INTACH (Indian National Trust for Art and Cultural Heritage) and the
                            Departments of History, Fine Arts, Architecture, and Travel and Tourism. During the exhibition,
                            various aspects of culture and heritage were showcased through artifacts, artworks, photographs,
                            documents, and interactive displays. Collaboration with INTACH and the academic departments ensured
                            a comprehensive representation of diverse cultural facets, including historical events, artistic
                            traditions, architectural marvels, and tourism attractions.
                            <br>
                            <b>B. Lecture Session, May 20th , 2024:</b>
                            <br> Speaker: Ms. Vandana Manchanda, Director of the Architectural Heritage Division and
                            Head-Heritage, Crafts, &amp; Community Division at INTACH<br>
                            Title: Craft Revival and its Socio-Economic Impact on Communities.<br>
                            Ms. Vandana Manchanda highlights the concept of Craft Revival, which entails the resurgence of
                            traditional artisanal practices and the advocacy for handmade goods within local communities. This
                            revival plays a pivotal role in reshaping the socio-economic landscape of these communities. In
                            essence, craft revival serves as a catalyst for the economic advancement and social prosperity of
                            communities.
                        </p>

                        <p class="para1 text-dark"><b>4. Lecture Session: "Abhinaya - Folk Elements in Indian Cinema and
                                Theatre" by renowned veteran actor and Sangeet Natak Akademi awardee Shri Pranjal Saikia, May
                                24th 2024.</b>
                            <br><br>
                            Organizer: IKS Cell and DSW at RGU<br>Speaker: Shri Pranjal Saikia<br>
                            The IKS Cell and the Office of Student Affairs (DSW) at RGU have organized a lecture session on
                            "Abhinaya - Folk Elements in Indian Cinema and Theatre" by renowned veteran actor and Sangeet Natak
                            Akademi awardee Shri Pranjal Saikia.<br>
                            Abhinaya refers to the expressive elements in Indian cinema and theatre, with a particular emphasis
                            on the use of folk elements. These folk elements encompass traditional storytelling techniques,
                            music, dance, and cultural practices that have been handed down through generations in Indian
                            communities and various art forms including cinema and theatre.

                        </p>

                        <p class="para1 text-dark"><b>5. Interdepartmental Event: A distinguished lecture session, May 27th ,
                                2024.</b>
                            <br><br>
                            - Organizer: IKS Cell in collaboration with the Departments of History, Architecture, and Travel and
                            Tourism at RGU<br> - Speaker: Dr. Nachiket Chanchani, Associate Professor of South Asian Art and
                            Visual Culture at the University of Michigan, Ann Arbor, USA<br>
                            - Topic: Decoding India’s Temples and the Challenges of Reconstructing Them<br>
                            Highlights: "Decoding India’s Temples and the Challenges of Reconstructing Them" delves into the
                            intricate process of unraveling the mysteries embedded within India's temple architecture while
                            addressing the formidable obstacles encountered in their reconstruction. This lecture likely
                            navigates through the multifaceted layers of symbolism, history, and spirituality inherent in these
                            sacred structures. Moreover, it sheds light on the complexities involved in preserving and restoring
                            temples, ranging from architectural intricacies to socio-political considerations.
                        </p>

                        <hr>

                        <p class="para1 text-dark">
                            <b>1. Interdisciplinary lectures within the university:</b> Two Interdisciplinary Talks were
                            organized by the Royal School of Language (Department of English) and the Department of Travel and
                            Tourism Management. They invited Dr. Saswati Bordoloi, Assistant Professor of the Indian Knowledge
                            Systems Cell, RGU to deliver the lectures.
                            <br>
                        </p>
                        <p class="para1 text-dark px-5"><b>i. Lecture I: Manuscript Studies and the Digital Humanities:
                                Exploring New Frontiers with Traditional Indian Knowledge Systems</b>
                            <br>
                            - Organizer: Department of English
                            <br>- Date: May 8, 2024<br>
                            -Speaker: Dr. Saswati Bordoloi, Assistant Professor, IKS Cell.<br>
                            The presentation delves into the intersection of manuscript studies, digital humanities, and
                            traditional Indian knowledge systems. It explores how modern digital technologies can be leveraged
                            to study and preserve ancient manuscripts containing valuable insights from Indian knowledge
                            systems. By combining traditional wisdom with contemporary digital tools, this lecture aims to
                            unlock new avenues for research, interpretation, and dissemination of India's rich cultural
                            heritage.

                            <br><br>
                            <b>ii. Lecture II: Harmonizing Heritage Tourism: Integrating Indian Knowledge Systems for
                                Sustainable Preservation and Economic Empowerment</b>
                            <br>
                            - Organizer: Department of Travel and Tourism
                            <br>- Date: June 15, 2024<br>
                            -Speaker: Dr. Saswati Bordoloi, Assistant Professor, IKS Cell.<br>
                            This lecture explores the concept of combining traditional Indian knowledge systems with
                            contemporary heritage tourism methods. The aim is to preserve cultural heritage sustainably while
                            empowering local economies. By harmonizing these diverse approaches, the lecture suggests a more
                            effective and beneficial strategy for promoting and preserving Indian heritage sites and practices.
                        </p>
                        <p></p>

                        <p class="para1 text-dark">
                            <b>2. A distinguished lecture by the honourable Vice Chancellor Sir, Prof. (Dr.) S. P. Singh: Role
                                of Indian Knowledge Systems in Scientific Research.</b>
                            <br><br>
                            Organizer: IKS Cell, RGU
                            <br>Date : 6th June, 2024.
                            <br>
                            Speaker: Prof. (Dr.) S. P. Singh
                            <br><br>
                            Professor (Dr.) S. P. Singh delivered a captivating lecture on India's knowledge system's scientific
                            facets, highlighting its evidence-based nature and pivotal importance for the nation's future.

                        </p>

                        <p class="para1 text-dark text-center">
                            <img src="assets/img/IKS/events-iks072024.jpg">
                        </p>


                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--End About-->
    </div><!-- #page -->
@endsection

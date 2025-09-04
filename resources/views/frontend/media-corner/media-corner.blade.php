@extends('frontend.master')
@section('content')

    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 100px; position: relative;" src="mobile-assets/media-corner/media-corner-mob.png"
                alt="" />
        </div>

        <div class="website">
            <!--head image Section-->
            @include('frontend/components/aheader')
            <img src="mobile-assets/media-corner/media-corner-web.png" alt="" />
        </div>
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col-lg-4 mt-4">
                    <a href="media-corner"> <button class="btn btn-block headd3 shadow"
                            style="background-color:#264273; color:white; height: 60px; width: 100%;">RGU News</button> </a>
                </div>
                <div class="col-lg-4 mt-4">
                    <a href="press-coverage"> <button class="btn btn-block headd3 shadow"
                            style="background-color:#6c757d; color:white; height: 60px; width: 100%;">Press
                            Coverage</button> </a>
                </div>
                <div class="col-12 col-md-4 mt-4">
                    <a href=""> <button class="btn btn-block headd3 shadow"
                            style="background-color:#6c757d; color:white; height: 60px; width: 100%;">Video</button> </a>
                </div>
            </div>

        </div>
        <hr>
        <div class="container" style="padding: 10px 15px;">

            {{-- Search & Date Filter --}}
            <div class="row mb-4">
                <div class="col-12 col-md-6 mb-2">
                    <input type="text" id="searchInput" placeholder="Search news..."
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
                </div>
            </div>

            {{-- News Items --}}
            <div id="newsContainer" class="row">
                @php
                    $newsItems = [
                        [
                            'title' => 'Former Tata Motors CEO to talk on “Leading from the Back to Achieve the Impossible” at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, September 4, 2025:',
                            'link' => 'former-tata-motors-ceo-to-talk-on-leading-from-the-back-to-achieve-the-impossible-at-rgu',
                            'image' => 'mobile-assets/media-corner/news40/1.jpg',
                            'content' => 'Royal Global University (RGU) is set to host Shri Ravi Kant, Former CEO & Vice Chairman of Tata Motors, on September 8, 2025, for an engaging interaction with students and faculty on Visionary Leadership.”',
                        ],
                        [
                            'title' => 'National Leadership Conclave 2025 from 11th September at Royal Global University',
                            'summary' => 'RGU organises Leadership Conclave 2025 on Ethics and the Evolving Workforce',
                            'date' => 'Guwahati, September 2, 2025:',
                            'link' => 'national-leadership-conclave-2025-from-11th-september-at-royal-global-university',
                            'image' => 'mobile-assets/media-corner/news39/Leadership%20Conclave%202025.jpg',
                            'content' => 'The Assam Royal Global University (RGU) is set to organize the Leadership Conclave 2025 on September 11 and 12, under the theme “Ethics and the Evolving Workforce.”',
                        ],
                        [
                            'title' => 'AICTE-VAANI Grant Sanctioned to RGU for Indian Knowledge Systems Conference',
                            'summary' => 'IKS Conference to be conducted in Assamese language by RGU from 15th September',
                            'date' => 'Guwahati, September 1, 2025:',
                            'link' => 'aicte-vaani-grant-sanctioned-to-rgu-for-indian-knowledge-systems-conference',
                            'image' => 'mobile-assets/rgu-blog/blog2.jpeg',
                            'content' => 'The Assam Royal Global University (RGU) has been awarded the prestigious AICTE-VAANI (Vibrant Advocacy for Advancement and Nurturing of Indian Languages) Grant by the All India Council for Technical Education (AICTE) to organize a two-day...',
                        ],
                        [
                            'title' => 'Supreme Court Judge unveils one of India’s largest Gavels at Royal Global University',
                            'summary' => 'India needs a Comprehensive Cybercrime Law: SC Judge at Royal Global University',
                            'date' => 'Guwahati, August 30, 2025:',
                            'link' => 'supreme-court-judge-unveils-one-of-india’s-largest-gavels-at-royal-global-university',
                            'image' => 'mobile-assets/media-corner/news38/head.jpg',
                            'content' => 'In a historic event, one of the largest gavels in India has been unveiled today at The Assam Royal Global University (RGU) by Hon’ble Justice Mr. Sandeep Mehta, Judge of the Supreme Court of India...',
                        ],
                        [
                            'title' => 'Chinese Diplomats visit Royal Global University for Educational Collaboration',
                            'summary' => 'Ice between India-China relations melting: Chinese Diplomats',
                            'date' => 'Guwahati, August 29, 2025:',
                            'link' => 'chinese-diplomats-visit-royal-global-university-for-educational-collaboration',
                            'image' => 'mobile-assets/media-corner/news37/3.JPG',
                            'content' => 'Continuing its mission to encourage students to pursue higher education and curb brain drain from Northeast India, The Assam Royal Global University (RGU) today organised the Scholarship Award Letter Distribution Ceremony for more than 500 newly admitted...',
                        ],
                        [
                            'title' => '500 Newly Admitted Students Awarded Scholarships by Royal Global University',
                            'summary' => '',
                            'date' => 'Guwahati, August 20, 2025:',
                            'link' => '500-newly-admitted-students-awarded-scholarships-by-royal-global-university',
                            'image' => 'mobile-assets/media-corner/news36/1.JPG',
                            'content' => 'A delegation of Diplomats from the Embassy of the People’s Republic of China in India visited The Assam Royal Global University (RGU) yesterday as part of the ongoing Diplomats on Campus programme, which was launched in 2022 to foster global engagement and cross-cultural understanding.',
                        ],
                        [
                            'title' => 'Royal Global University Celebrates 79th Independence-Day',
                            'summary' => 'Technological Sovereignty of India must be celebrated along with the Political Sovereignty: RGU Vice Chancellor',
                            'date' => 'Guwahati, August 16, 2025:',
                            'link' => 'royal-global-university-celebrates-79th-independence-day',
                            'image' => 'mobile-assets/media-corner/news35/1.jpg',
                            'content' => 'Entire campus of The Assam Royal Global University (RGU) bloomed with the tri-colour and the spirit of all grew high with patriotic speeches, music and dance celebrating the 79th Independence Day of the country in a grand and exemplary manner.',
                        ],
                        [
                            'title' => 'Apply Critical Thinking and Creativity for a Successful Living: IITG Director Prof. Jalihal to students of RGU',
                            'summary' => 'IIT Guwahati Director Prof. D. Jalihal Address Students at Royal Global University',
                            'date' => 'Guwahati, August 14, 2025:',
                            'link' => 'apply-critical-thinking-and-creativity-for-a-successful-living-iitg-director-prof-jalihal-to-students-of-rgu',
                            'image' => 'mobile-assets/media-corner/news34/1.JPG',
                            'content' => '“If we are confident to face the real world and understand each other as fellow human beings, then our education has been purposeful. We need Communication, Collaboration, Critical Thinking, and Creativity to make a successful living.”',
                        ],
                        [
                            'title' => 'SYNTHESIS-2025: Innovative Creations Showcased by RGU Fashion Design & Technology Graduates',
                            'summary' => '',
                            'date' => 'Guwahati, August 12, 2025:',
                            'link' => 'synthesis-2025-innovative-creations-showcased-by-rgu-fashion-design-and-technology-graduates',
                            'image' => 'mobile-assets/media-corner/news33/1.jpg',
                            'content' => 'The Royal School of Fashion Design and Technology at the Assam Royal Global University (RGU) today presented SYNTHESIS-2025, a celebration of creativity, innovation, and the inspiring design journey of its graduating students from the batch of 2021–2025.',
                        ],
                        [
                            'title' => 'Royal Global University to Confer Honorary D.Sc. Degree upon Dr. Trehan',
                            'summary' => '',
                            'date' => 'Guwahati, August 09, 2025:',
                            'link' => 'royal-global-university-to-confer-honorary-dsc-degree-upon-dr-trehan',
                            'image' => 'mobile-assets/media-corner/news32/1.jpg',
                            'content' => 'The Assam Royal Global University (RGU) will confer the Honorary Doctor of Science Degree (D.Sc.) Honoris Causa upon Dr. Naresh Trehan, a world-renowned cardiovascular and cardiothoracic surgeon and Chairman & Managing Director of Medanta – The Medicity, in recognition of his extraordinary contributions to medicine and healthcare...',
                        ],
                        [
                            'title' => 'RGU Students Gain Learning Exposure at INTI International University, Malaysia RGU Student Immersion Programme',
                            'summary' => '',
                            'date' => 'Guwahati, August 08, 2025:',
                            'link' => 'rgu-students-gain-learning-exposure-at-inti-international-university',
                            'image' => 'mobile-assets/media-corner/news31/1.jpg',
                            'content' => 'A group of enthusiastic students from the Commerce Department of The Assam Royal Global University (RGU) recently participated in an enriching Student Immersion Programme at INTI International University, Malaysia, held from 28th July to 3rd August 2025...',
                        ],
                        [
                            'title' => 'RGU Student Awarded Funding Grant by CERN, Geneva',
                            'summary' => '',
                            'date' => 'Guwahati, August 06, 2025:',
                            'link' => 'rgu-student-awarded-funding-grant-by-cern-geneva',
                            'image' => 'mobile-assets/media-corner/news30/Zahid Mamud.jpg',
                            'content' => 'Zahid Mamud, an MSc Physics student at The Assam Royal Global University (RGU), has been awarded a prestigious funding
                                                                                                                                                                                                                                                                                                                                                                                                                                                    grant by CERN—the European Organization for Nuclear Research, one of the world’s leading centres for scientific
                                                                                                                                                                                                                                                                                                                                                                                                                                                    research..',
                        ],
                        [
                            'title' => ' Renowned Actor Ravi Sharma Interacts with Freshers at Royal Global University',
                            'summary' => '',
                            'date' => 'Guwahati, August 05, 2025:',
                            'link' => 'renowned-actor-ravi-sharma-interacts-with-freshers-at-royal-global-university',
                            'image' => 'mobile-assets/media-corner/news29/2.jpg',
                            'content' => 'As part of Deeksharambh 2025—the 21-day long Student Induction Programme at Royal Global University (RGU), celebrated Assamese film actor Ravi Sharma delivered an inspiring and candid session for the newly inducted students today ...',
                        ],
                        [
                            'title' => ' Royal Global University’s 21-day Deeksharambh Induction Programme Inaugurated',
                            'summary' => 'Fuel your Motivation with Curiosity and Purpose: Minister Bora addresses students at RGU Deeksharambh-2025',
                            'date' => 'Guwahati, July 30, 2025:',
                            'link' => 'royal-global-universitys-21-day-deeksharambh-induction-programme-inaugurated',
                            'image' => 'mobile-assets/media-corner/news28/1.jpg',
                            'content' => 'The Assam Royal Global University (RGU) today inaugurated ‘Deeksharambh’, a comprehensive 21-day Student Induction Programme ...',
                        ],
                        [
                            'title' => 'Develop Assam’s Typography: Rupee Symbol Designer Dr. Dharmalingam urges students',
                            'summary' => 'Indian Rupee Symbol Creator Interacts with Design and Architecture Students at Royal Global University',
                            'date' => 'Guwahati, July 28, 2025:',
                            'link' => 'indian-rupee-symbol-creator-interacts-with-design-and-architecture-students-at-royal-global-university',
                            'image' => 'mobile-assets/media-corner/news27/1.jpg',
                            'content' => 'Renowned academician and designer of the Indian Rupee symbol— Dr. Udaya Kumar Dharmalingam, Professor, Department of Design, IIT Guwahati ...',
                        ],
                        [
                            'title' => 'Union Education Minister Dharmendra Pradhan to Grace RGU’s 5th Convocation',
                            'summary' => '',
                            'date' => 'Guwahati, July 25, 2025:',
                            'link' => 'union-education-minister-dharmendra-pradhan-to-grace-rgus-5th-convocation',
                            'image' => 'mobile-assets/media-corner/news26/1.jpg',
                            'content' => 'In a significant development for The Assam Royal Global University (RGU), Dr. A. K. Pansari, Chancellor of RGU, met Shri
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Dharmendra Pradhan, Hon’ble Union Minister of Education, Government of India, in New Delhi yesterday.',
                        ],
                        [
                            'title' => 'RGU Signs MoU with Indira Gandhi National Centre for the Arts (IGNCA), an Autonomous Trust of Ministry of Culture, Govt.of India',
                            'summary' => '',
                            'date' => 'Guwahati, July 24, 2025:',
                            'link' => 'rgu-signs-mou-with-indira-gandhi-national-centre-for-the-arts-ignca-an-autonomous-trust-of-ministry-of-culture-govt-of-india',
                            'image' => 'mobile-assets/media-corner/news25/2.jpg',
                            'content' => 'The objective of this MoU is to undertake activities focusing on the study of the various communities, tribal and ethnic groups, folklore, indigenous knowledge systems besides academic programs on culture with a holistic approach towards art - forms and lifestyles of Assam and neighboring states and disseminate the same in other parts of the country.',
                        ],
                        [
                            'title' => 'ICMR Awards 3 Start-up Grants worth over ₹1 Crore to RGU Faculty',
                            'summary' => '',
                            'date' => 'Guwahati, July 18, 2025:',
                            'link' => 'icmr-awards-3-start-up-grants-worth-over-1-crore-to-rgu-faculty',
                            'image' => 'mobile-assets/rgu-blog/blog2.jpeg',
                            'content' => 'The Assam Royal Global University (RGU) has achieved a remarkable milestone as three of its faculty members from the Royal School of Biosciences and the Royal School of Life Sciences have been awarded research grants under the prestigious ICMR Start-up Grant Scheme 2024–25. The awardee faculty members include Dr. Chongtham Sovachandra Singh, Dr. Anuj Kumar Borah and Dr. Pundarikaksha Das along with their co-investigators.',
                        ],
                        [
                            'title' => ' A Living Call to Memory: The Bhupen Hazarika Museum Beckons',
                            'summary' => '',
                            'date' => 'Guwahati, July 16, 2025:',
                            'link' => 'a-living-call-to-memory-the-bhupen-hazarika-museum-beckons',
                            'image' => 'mobile-assets/media-corner/news23/1.avif',
                            'content' => 'As Assam and the world mark the birth centenary of Sudhakantha Dr. Bhupen Hazarika, the Dr. Bhupen Hazarika Centre for
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Creativity at the Assam Royal Global University (RGU) is crafting a tribute not of marble and silence, but of memory,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                melody, and meaning. Speaking about the initiative, Shamim Goney, Deputy Registrar (Administration) at RGU, said, “Our museum will not be a static display of artefacts.',
                        ],
                        [
                            'title' => ' RGU Outreach: Awareness on Conservation of Salamander Habitat',
                            'summary' => '',
                            'date' => 'Guwahati, July 10, 2025:',
                            'link' => 'rgu-outreach-awareness-on-conservation-of-salamander-habitats',
                            'image' => 'mobile-assets/media-corner/news22/3.jpg',
                            'content' => 'An awareness program on the protection and conservation of salamander habitats was successfully conducted by Dr. Upashna Chettri, Assistant Professor, Department of Botany, The Assam Royal Global University, under the IndiaBioscience Outreach Grant 2024–2025. The program was organized in collaboration with the Government of West Bengal on 4th July 2025 at K.N. Memorial School, Sittong, under Kurseong subdivision in Darjeeling district as part of the...',
                        ],
                        [
                            'title' => 'RGU offers Scholarship Opportunities for Wards of Police personnel of 8 NE states',
                            'summary' => '',
                            'date' => 'Guwahati, July 8, 2025:',
                            'link' => 'rgu-offers-scholarship-opportunities-for-wards-of-police-personnel-of-8-ne-states',
                            'image' => 'mobile-assets/rgu-blog/blog2.jpeg',
                            'content' => 'To promote quality access to higher education and honour the service and sacrifices of the personnel of the force, the
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Assam Royal Global University (RGU) has launched two distinct categories of academic scholarships for the benefit of
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                eligible dependents and wards of Police personnel belonging to all the eight Northeastern states.',
                        ],
                        [
                            'title' => 'Zimbabwe Education Delegation Explores Collaboration with Royal Global University',
                            'summary' => '',
                            'date' => 'Guwahati, July 7, 2025:',
                            'link' => 'zimbabwe-education-delegation-explores-collaboration-with-royal-global-university',
                            'image' => 'mobile-assets/media-corner/news20/3.jpg',
                            'content' => 'A high-level delegation from Zimbabwe’s Education Department has recently visited The Assam Royal Global University (RGU), Guwahati, as part of an exploratory mission to foster international academic collaboration and understand India’s higher education ecosystem.',
                        ],
                        [
                            'title' => '‘Sugandhi Pokhilar Kobi’ Hiren Bhattacharyya Remembered at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, July 4, 2025:',
                            'link' => 'sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu',
                            'image' => 'mobile-assets/media-corner/news19/2.jpg',
                            'content' => 'To honour the legacy of the beloved Assamese poet Hiren Bhattacharyya, fondly remembered as ‘Sugandhi Pokhilar Kobi’, the Dr. Bhupen Hazarika Centre for Creativity, Royal Global University, organized a heartfelt commemorative programme today on his death anniversary. The event was a celebration of Bhattacharyya’s poetic genius and his enduring contributions to Assamese literature. ',
                        ],
                        [
                            'title' => 'Week-long FDP on Indigenous Knowledge Systems held at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, July 3, 2025:',
                            'link' => 'week-long-fdp-on-indigenous-knowledge-systems-held-at-rgu',
                            'image' => 'mobile-assets/media-corner/news18/day 6.jpg',
                            'content' => 'The Indian Knowledge Systems (IKS) Cell, in collaboration with the Royal Centre for Human Resource Development and the Internal Quality Assurance Cell of RGU conducted a highly enriching week-long Faculty Development Programme from 23rd to 28th June 2025 on the theme “Reimagining Education through NEP 2020: Multidisciplinarity, Innovation, and Integration of Indigenous Knowledge Systems”.',
                        ],
                        [
                            'title' => 'RGU Faculty Awarded at ICPPS South Korea',
                            'summary' => '',
                            'date' => 'Guwahati, July 2, 2025:',
                            'link' => 'rgu-faculty-awarded-at-icpps-south-korea',
                            'image' => 'mobile-assets/media-corner/news17/Suman Kumar.jpg',
                            'content' => 'Mr. Suman Kumar, Assistant Professor at The Assam Royal Global University, has been awarded the Best Oral Presentation Award at the prestigious International Conference on Pharmacy and Pharmaceutical Sciences (ICPPS-2025) held in Jeju Island, South Korea.',
                        ],
                        [
                            'title' => 'Academic Exchange of RGU Students at Krirk University, Bangkok',
                            'summary' => '',
                            'date' => 'Guwahati, July 1, 2025:',
                            'link' => 'academic-exchange-of-rgu-students-at-krirk-university-bangkok',
                            'image' => 'mobile-assets/media-corner/news16/2.jpeg',
                            'content' => 'A team of students from the Assam Royal Global University (RGU) has participated in a prestigious academic exchange programme at Krirk University, Bangkok, Thailand from 23rd to 25th June 2025. The three-day exchange aimed at fostering academic collaboration, promoting intercultural understanding, and enhancing educational opportunities for both institutions.',
                        ],
                        [
                            'title' => 'Ahir Bhairav: Musical Gathering for Cultural Enrichment at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, June 26, 2025:',
                            'link' => 'ahir-bhairav-musical-gathering-for-cultural-enrichment-at-rgu',
                            'image' => 'mobile-assets/media-corner/news15/1.jpg',
                            'content' => 'The Assam Royal Global University (RGU) has hosted a vibrant and enriching cultural gathering titled “Ahir Bhairav”. Organized by the Office of Student Affairs yesterday in the university campus, the event served as a joyful celebration of music and movement, fostering creative expression and camaraderie among members of the university community.',
                        ],
                        [
                            'title' => 'Electric Vehicle Laboratory Skill Development Centre Inaugurated at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, June 24, 2025:',
                            'link' => 'electric-vehicle-laboratory-skill-development-centre-inaugurated-at-rgu',
                            'image' => 'mobile-assets/media-corner/news13/img1.jpg',
                            'content' => 'A state-of-the-art Electric Vehicle (EV) Laboratory Skill Development Centre has been inaugurated today at The Assam Royal Global University (RGU) by Mr L. Lanuwabang, Director, National Institute of Electronics & Information Technology (NIELIT) Guwahati, Kohima and Shillong. The programme was organised under IQAC of RGU and it was graced by Prof. Alak Kumar Buragohain, Vice Chancellor RGU, Prof. Diganta Munshi...',
                        ],
                        [
                            'title' => 'Memories and Melodies Echo as Doyens Recall Personal Moments with Kalaguru',
                            'summary' => 'RGU Pays Heartfelt Tribute to Kalaguru Bishnu Rabha on Rabha Divas',
                            'date' => 'Guwahati, June 20, 2025:',
                            'link' => 'memories-and-melodies-echo-as-doyens-recall-personal-moments-with-kalaguru',
                            'image' => 'mobile-assets/media-corner/news14/1.jpg',
                            'content' => 'The Assam Royal Global University (RGU) observed Rabha Divas today with a heartfelt tribute to Kalaguru Bishnu Prasad Rabha, the legendary cultural stalwart of Assam, marking his 56th death anniversary. The commemorative event was organised...',
                        ],
                        [
                            'title' => 'RGU Signs MoU with CRPF: Offers New Scholarships for Wards of Security Forces',
                            'summary' => 'RGU-CRPF MoU Brings Scholarship Opportunities for Wards of Security Forces',
                            'date' => 'Guwahati, June 18, 2025:',
                            'link' => 'rgu-signs-mou-with-crpf-offers-new-scholarships-for-wards-of-security-forces',
                            'image' => 'mobile-assets/media-corner/media-img/12.jpg',
                            'content' => 'To promote quality access to higher education and honour the service and sacrifices of the personnel of the force, the Assam Royal Global University (RGU) has signed a Memorandum of Understanding with the Central Reserve Police Force (CRPF)...',
                        ],
                        [
                            'title' => 'Industry Titan & Former Tata Motors Chief Ravi Kant Joins RGU Advisory Board',
                            'summary' => '',
                            'date' => 'Guwahati, June 13, 2025:',
                            'link' => 'industry-titan-&-former-tata-motors-chief-ravi-kant-joins-rgu-advisory-board',
                            'image' => 'mobile-assets/media-corner/media-img/news11.jpg',
                            'content' => 'Eminent industry leader Sri Ravi Kant has recently joined The Assam Royal Global University (RGU) as Member of its Advisory Board. His inclusion marks a significant step forward in strengthening the university’s strategic vision and societal impact.',
                        ],
                        [
                            'title' => 'Bhutan to Strengthen Relations with Institutions in Assam: Bhutanese Delegation at RGU',
                            'summary' => 'Bhutan’s Gelephu Mindfulness City Delegation Visits Assam Royal Global University',
                            'date' => 'Guwahati, June 11, 2025:',
                            'link' => 'bhutan-to-strengthen-relations-with-institutions-in-assam-bhutanese-delegation-at-rgu',
                            'image' => 'mobile-assets/media-corner/media-img/news10.jpg',
                            'content' => 'A nine-member delegation from Bhutan’s Gelephu Mindfulness City, currently on a visit to Assam, today engaged in meaningful discussions with senior officials of Assam Royal Global University (RGU) at its campus in Guwahati.',
                        ],
                        [
                            'title' => 'World Environment Day observed at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, June 5, 2025:',
                            'link' => 'world-environment-day-observed-at-rgu',
                            'image' => 'mobile-assets/media-corner/media-img/news9.jpg',
                            'content' => 'On the occasion of the World Environment Day 2025, the Guwahati Municipal Corporation under the joint initiative of Swachh Bharat Mission 2.0 and the National Clean Air Programme, and in association with The Assam Royal Global University organized a day-long event at the university campus today.',
                        ],
                        [
                            'title' => 'The Threads of Tomorrow’: Lookbook Launched by Royal School of Fashion Design & Technology',
                            'summary' => '',
                            'date' => 'Guwahati, June 4, 2025:',
                            'link' => 'lookbook-launched-by-royal-school-of-fashion-design-&-technology',
                            'image' => 'mobile-assets/media-corner/media-img/news8.jpg',
                            'content' => 'The Royal School of Fashion Design and Technology (RSFT) has unveiled its first-ever lookbook, ‘The Threads of Tomorrow’ at The Assam Royal Global University (RGU) today. The lookbook was launched by acclaimed fashion designer and textile revivalist Ms. Arita Kashyap in the presence of Mr Ankur Pansari, Executive Vice President, RGU; Mrs Angira Mimani, Associate Dean, Student Affairs; and other dignitaries, faculty members and students.',
                        ],
                        [
                            'title' => 'Veteran Journalist PJ Baruah Joins Royal Global University as Distinguished Professor',
                            'summary' => '',
                            'date' => 'Guwahati, June 3, 2025:',
                            'link' => 'veteran-journalist-pj-baruah-joins-royal-global-university',
                            'image' => 'mobile-assets/media-corner/media-img/news7.JPG',
                            'content' => 'In a significant development for media education in the region, renowned journalist Shri Prasanta Jyoti Baruah has joined The Assam Royal Global University (RGU) as a Distinguished Professor at the Royal School of Communication and Media. A veteran in the field, Shri Baruah has served as the Executive Editor of The Assam Tribune for several decades, making notable contributions to journalism in Northeast India.',
                        ],
                        [
                            'title' => 'Prof. Amarjyoti Choudhury to Lead Dr Bhupen Hazarika Centre for Creativity at Royal Global University',
                            'summary' => '',
                            'date' => 'Guwahati, June 2, 2025:',
                            'link' => 'dr-bhupen-hazarika-centre-for-creativity-at-royal-global-university',
                            'image' => 'mobile-assets/media-corner/media-img/news6.jpg',
                            'content' => 'In a historic and emotionally resonant announcement that bridges the past and the future, The Assam Royal Global University (RGU) has proudly welcomed Prof. (Dr.) Amarjyoti Choudhury, renowned scholar, scientist, artist and visionary thinker as Emeritus Prof. and Chair of the newly instituted ‘Dr Bhupen Hazarika Centre for Creativity’...',
                        ],
                        [
                            'title' => 'AI Dependence is Making Slaves, Mind is Far Superior to Technology: JNU VC Prof. Santishree Pandit at RGU',
                            'summary' => 'JNU VC Prof. Santishree Pandit addresses students and faculty members at Assam Royal Global University',
                            'date' => 'Guwahati, May 28, 2025:',
                            'link' => 'ai-dependence-is-making-slaves-mind-is-far-superior-to-technology-jnu-vc-prof-santishree-pandit-at-rgu',
                            'image' => 'mobile-assets/media-corner/media-img/news5.jpg',
                            'content' => 'Intelligence has become artificial, but stupidity is original. Machines are learning, humans are serving. Students, please don’t lose your talent to read, to write and to think independently. ChatGPT and AI dependence is making slaves...',
                        ],
                        [
                            'title' => 'RGU Awarded Most Eminent Private University of North East 2025',
                            'summary' => '',
                            'date' => 'Guwahati, May 25, 2025:',
                            'link' => 'rgu-awarded-most-eminent-private-university-of-north-east-2025',
                            'image' => 'mobile-assets/media-corner/media-img/news4.jpg',
                            'content' => 'In recognition to its contribution in the field of higher education, The Assam Royal Global University (RGU) has been conferred the “Most Eminent Private University of North East” Award at the prestigious Education Eminence Awards 2025 organised by News18 Assam North East in association with the Lions Club. Shri Pijush Hazarika, Minister of Information, Public Relations, Social Justice & Empowerment, Government of Assam and Lt. Gen. (Retd.) Rana Pratap Kalita handed over the award yesterday evening at a grand ceremony in the city in the presence... ',
                        ],
                        [
                            'title' => 'Discipline and Dedication Keys to Success: Lt Col Singh at RGU Scholarship Ceremony',
                            'summary' => '129 RGU Students Awarded Scholarships for Outstanding Academic Performance',
                            'date' => 'Guwahati, May 22, 2025:',
                            'link' => '129-RGU-Students-Awarded-Scholarships-for-Outstanding-Academic-Performance',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'With its continued effort to foster academic excellence and reward outstanding student performance, The Assam Royal Global University (RGU) yesterday organised a Monthly Scholarship award ceremony to honour the exemplary students who qualified for the Semester Topper Scholarship for the Odd Semester Examination 2024–25.
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ',
                        ],
                        [
                            'title' => 'RGU Celebrates Commendation Day for Placed Graduating Students',
                            'summary' => '',
                            'date' => 'Guwahati, May 21, 2025:',
                            'link' => 'RGU-Celebrates-Commendation-Day-for-Placed-Graduating-Students',
                            'image' => 'mobile-assets/media-corner/news2/headimg.jpg',
                            'content' => 'The Royal Centre for Corporate Relations (RCCR) at Assam Royal Global University (RGU) today hosted its “Soaring High" Commendation Day to honour the achievements of the graduating students who have successfully secured placements in reputed organisations. The event was graced by faculty members, university leadership, recruiters, and proud family members.',
                        ],
                        [
                            'title' => 'RGU Launches Integrated BA and B.Sc. Programs with Civil Services Coaching by SPM IAS Academy',
                            'summary' => '',
                            'date' => 'Guwahati, May 16, 2025:',
                            'link' => 'RGU-Launches-Integrated-BA-and-BSc-Programs-with-Civil-Services-Coaching-by-SPM-IAS-Academy',
                            'image' => 'mobile-assets/media-corner/news1/pic1.JPG',
                            'content' => 'In a significant step toward empowering Northeast India’s youth with academic excellence and competitive readiness for civil services examinations, the Assam Royal Global University (RGU) today launched its pioneering Integrated BA and BSc Programs with coaching for Civil Services examinations. This new initiative by RGU will be implemented in collaboration with OnCampus, where coaching will be given by the renowned SPM IAS Academy.',
                        ],

                    ];
                @endphp

                @foreach ($newsItems as $index => $news)
                    <div class="col-12 mb-4 news-item" data-title="{{ strtolower($news['title']) }}"
                        data-date="{{ $news['date'] }}" data-index="{{ $index }}">
                        <div class="card shadow-sm">
                            <div class="row p-3 g-0">
                                <div class="col-12 col-md-4">
                                    <img class="rounded shadow-sm border" style="width: 100%; height:270px;"
                                        src="{{ asset($news['image']) }}" alt="">
                                </div>
                                <div class="col-12 col-md-8 ps-md-3 pt-3 pt-md-0">
                                    <h2 class="fw-bold" style="color: #264273; font-size: 23px;">{{ $news['title'] }}</h2>
                                    @if ($news['summary'])
                                        <p class="fw-bold text-dark" style="font-size: 20px !important;">{{ $news['summary'] }}</p>
                                    @endif
                                    <p class="text-dark para1" style="text-align: justify">
                                        <strong class="fw-bold">{{ $news['date'] }}</strong>
                                        {{ $news['content'] }}
                                    </p>
                                    <a href="{{ $news['link'] }}"
                                        style="background-color: #FF9A1E; border: none; color: #fff; font-weight: 400; border-radius: 8px; padding: 5px 10px; text-align: center; text-decoration: none; display: inline-block;">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="text-center mt-4">
                <button id="prevPage" style="padding: 6px 14px; border-radius: 5px; border: 1px solid #ccc;">Prev</button>
                <span id="pageNum" style="margin: 0 10px; font-weight: bold;">1</span>
                <button id="nextPage" style="padding: 6px 14px; border-radius: 5px; border: 1px solid #ccc;">Next</button>
            </div>
        </div>

    </section>

    {{-- Inline JS for Search + Pagination --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const items = Array.from(document.querySelectorAll('.news-item'));
            const prevBtn = document.getElementById('prevPage');
            const nextBtn = document.getElementById('nextPage');
            const pageNum = document.getElementById('pageNum');

            const itemsPerPage = 5;
            let currentPage = 1;

            function applyFilters() {
                const searchText = searchInput.value.toLowerCase();
                return items.filter(item => {
                    const title = item.getAttribute('data-title');
                    return title.includes(searchText);
                });
            }

            function showPage(filteredItems, page) {
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;

                items.forEach(item => item.style.display = 'none');
                filteredItems.slice(start, end).forEach(item => item.style.display = 'block');

                pageNum.textContent = page;
                prevBtn.disabled = page === 1;
                nextBtn.disabled = end >= filteredItems.length;
            }

            function updatePagination() {
                const filteredItems = applyFilters();
                const totalPages = Math.ceil(filteredItems.length / itemsPerPage);

                if (currentPage > totalPages) currentPage = totalPages || 1;
                showPage(filteredItems, currentPage);
            }

            searchInput.addEventListener('input', () => {
                currentPage = 1;
                updatePagination();
            });

            prevBtn.addEventListener('click', () => {
                currentPage--;
                updatePagination();
            });

            nextBtn.addEventListener('click', () => {
                currentPage++;
                updatePagination();
            });

            updatePagination();
        });
    </script>

@endsection

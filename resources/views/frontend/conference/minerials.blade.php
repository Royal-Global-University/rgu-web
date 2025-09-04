@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div
            style="background-image: url(mobile-assets/confrence/minerials/banner-mob.png); background-size: cover; background-position: center; height: 35vh; display: flex; align-items: center; justify-content: center; text-align: center; padding-top: 130px;">
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;"
                class="container">

            </div>
        </div>


        <div class="container pt-5">

            <h2 class="headd3 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Organised <span style="color: #FF9A1E; font-weight: 500;"> By</span>
            </h2>

            <p style="text-align: justify;" class="para1 text-dark">
                Department of Geology The Assam Royal Global University Guwahati & SECONE Society (Synergy for Energy:
                Challenges and Opportunities in North East India)
            </p>

            <p style="text-align: justify;" class="para1 text-dark">
                The North East region of India is endowed with significant reserves of critical minerals, including
                uranium, rare earth elements, and other strategic resources essential for energy security and advanced
                energy technologies. Recognizing the importance of these resources for National Development, Department
                of Geology, The Assam Royal Global University, Guwahati and SECONE Society is pleased to announce an
                International Conference on “Critical and Energy Minerals in North East India – Potentials and
                Possibilities” on 11–12 November 2025.
            </p>

            <h2 class="headd3 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Objectives of <span style="color: #FF9A1E; font-weight: 500;"> the Conference</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>The geological potential of critical and energy minerals in NE India</li>
                <li>Technological advancements in critical mineral exploration and extraction</li>
                <li>Possibility of the role of Uranium as an energy resource in the region</li>
                <li>Address the environmental, economic, and social implications of Uranium mining</li>
                <li>Environmental and socio-economic considerations in mining and processing of critical mineral</li>
                <li>Policy and regulatory frameworks governing critical minerals</li>
                <li>Opportunities for industry-academia collaboration and Start-ups, through fostering partnerships
                    between government, industry, academia, and local communities</li>
            </ol>

            <h2 class="headd3 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Highlights of <span style="color: #FF9A1E; font-weight: 500;"> the Conference</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li><strong>Expert Presentations:</strong> Hear from leading experts in the field of mineral resources
                    and energy</li>
                <li><strong>Panel Discussions:</strong> Engage in thought-provoking discussions on the future of
                    critical minerals in North East India</li>
                <li><strong>Networking Opportunities:</strong> Connect with professionals, researchers, and stakeholders
                    in the energy sector</li>
                <li><strong>Exhibition:</strong> Various participating organisations will showcase their activities and
                    achievements through an exhibition attached to the conference</li>
            </ol>

            <h2 class="headd3 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Poster <span style="color: #FF9A1E; font-weight: 500;"> Session</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>There will be a poster session as a part of the conference providing scientists, researchers,
                    students, and faculties an opportunity to showcase their research work and ideas to eminent
                    personalities, experts, top officials from industries and Govt. organisations, and interact with
                    them.</li>
                <li>All the selected participants in the poster session will be provided certificates of participation.
                </li>
                <li>There will be a competition amongst the participants in the poster session, and the best three
                    posters will be given cash awards.</li>
                <li>The extended abstracts of the best 10 posters will be published in the Souvenir of the conference.
                </li>

            </ol>

            <h2 class="headd3 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Key <span style="color: #FF9A1E; font-weight: 500;"> Speaker</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>Shri Saloma Yomdo, Director (Exploration & Development), Oil India Ltd, New Delhi</li>
                <li>Shri Dheeraj Pande, Director, Atomic Minerals Directorate for Exploration and Research (AMD),
                    Hyderabad</li>
                <li>Dr. Virendra M Tiwari, Director, NEIST, Jorhat</li>
                <li>Dr. Jaideep Baruah, Director, Assam Science Technology & Environment Council (ASTEC), Guwahati</li>
                <li>Dr. Deepak Kumar Sinha, CEO, Gujarat Mineral Industrial Consultancy Society (GMRICS) and former
                    Director, AMD, Ahmedabad</li>
                <li>Dr. Dibakar Goswami, Head Hydrogeologist, Nuclear Waste Program, Washington State Department of
                    Ecology (Ecology), USA</li>
                <li>Dr. Asish Kumar Nath, Dy. Director General, Geological Survey of India, Assam</li>
                <li>Dr. Abhijit Mukherjee, Chief General Manager (Critical Minerals), Oil India Ltd, Delhi</li>
                <li>Senior Scientists from North East Institute of Science & Technology, Jorhat</li>
                <li>Representatives from various academic and government institutions of NE India</li>
            </ol>


            <h2 class="headd3 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Organizers <span style="color: #FF9A1E; font-weight: 500;"> Contacts</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>Sri Hamendra Das – Secretary, SECONE (Mob: 8011018449)</li>
                <li>Dr. Abhijit Gogoi – Department of Geology, The Assam Royal Global University (Mob: 9859379947)</li>
                <li>Sri Ashok Kr Dutta – Convener & Treasurer, SECONE (Mob: 6000712711)</li>
            </ol>

        </div>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->
        <div
            style="background-image: url(mobile-assets/confrence/minerials/banner.png); background-size: cover; background-position: center; height: 60vh; display: flex; align-items: center; justify-content: center; text-align: center;">
        </div>


        <div class="container pt-5">

            <h2 class="headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Organised <span style="color: #FF9A1E; font-weight: 500;"> By</span>
            </h2>

            <p style="text-align: justify;" class="para1 text-dark">
                Department of Geology The Assam Royal Global University Guwahati & SECONE Society (Synergy for Energy:
                Challenges and Opportunities in North East India)
            </p>

            <p style="text-align: justify;" class="para1 text-dark">
                The North East region of India is endowed with significant reserves of critical minerals, including
                uranium, rare earth elements, and other strategic resources essential for energy security and advanced
                energy technologies. Recognizing the importance of these resources for National Development, Department
                of Geology, The Assam Royal Global University, Guwahati and SECONE Society is pleased to announce an
                International Conference on “Critical and Energy Minerals in North East India – Potentials and
                Possibilities” on 11–12 November 2025.
            </p>

            <h2 class="headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Objectives of <span style="color: #FF9A1E; font-weight: 500;"> the Conference</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>The geological potential of critical and energy minerals in NE India</li>
                <li>Technological advancements in critical mineral exploration and extraction</li>
                <li>Possibility of the role of Uranium as an energy resource in the region</li>
                <li>Address the environmental, economic, and social implications of Uranium mining</li>
                <li>Environmental and socio-economic considerations in mining and processing of critical mineral</li>
                <li>Policy and regulatory frameworks governing critical minerals</li>
                <li>Opportunities for industry-academia collaboration and Start-ups, through fostering partnerships
                    between government, industry, academia, and local communities</li>
            </ol>

            <h2 class="headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Highlights of <span style="color: #FF9A1E; font-weight: 500;"> the Conference</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li><strong>Expert Presentations:</strong> Hear from leading experts in the field of mineral resources
                    and energy</li>
                <li><strong>Panel Discussions:</strong> Engage in thought-provoking discussions on the future of
                    critical minerals in North East India</li>
                <li><strong>Networking Opportunities:</strong> Connect with professionals, researchers, and stakeholders
                    in the energy sector</li>
                <li><strong>Exhibition:</strong> Various participating organisations will showcase their activities and
                    achievements through an exhibition attached to the conference</li>
            </ol>

            <h2 class="headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Poster <span style="color: #FF9A1E; font-weight: 500;"> Session</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>There will be a poster session as a part of the conference providing scientists, researchers,
                    students, and faculties an opportunity to showcase their research work and ideas to eminent
                    personalities, experts, top officials from industries and Govt. organisations, and interact with
                    them.</li>
                <li>All the selected participants in the poster session will be provided certificates of participation.
                </li>
                <li>There will be a competition amongst the participants in the poster session, and the best three
                    posters will be given cash awards.</li>
                <li>The extended abstracts of the best 10 posters will be published in the Souvenir of the conference.
                </li>

            </ol>

            <h2 class="headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Key <span style="color: #FF9A1E; font-weight: 500;"> Speaker</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>Shri Saloma Yomdo, Director (Exploration & Development), Oil India Ltd, New Delhi</li>
                <li>Shri Dheeraj Pande, Director, Atomic Minerals Directorate for Exploration and Research (AMD),
                    Hyderabad</li>
                <li>Dr. Virendra M Tiwari, Director, NEIST, Jorhat</li>
                <li>Dr. Jaideep Baruah, Director, Assam Science Technology & Environment Council (ASTEC), Guwahati</li>
                <li>Dr. Deepak Kumar Sinha, CEO, Gujarat Mineral Industrial Consultancy Society (GMRICS) and former
                    Director, AMD, Ahmedabad</li>
                <li>Dr. Dibakar Goswami, Head Hydrogeologist, Nuclear Waste Program, Washington State Department of
                    Ecology (Ecology), USA</li>
                <li>Dr. Asish Kumar Nath, Dy. Director General, Geological Survey of India, Assam</li>
                <li>Dr. Abhijit Mukherjee, Chief General Manager (Critical Minerals), Oil India Ltd, Delhi</li>
                <li>Senior Scientists from North East Institute of Science & Technology, Jorhat</li>
                <li>Representatives from various academic and government institutions of NE India</li>
            </ol>


            <h2 class="headd1 fw-bold kd-title-ani kd-split-text pt-3 pb-3" style="color: #27467A; font-weight: 900;">
                Organizers <span style="color: #FF9A1E; font-weight: 500;"> Contacts</span>
            </h2>

            <ol style="text-align: justify;" class="para1 text-dark">
                <li>Sri Hamendra Das – Secretary, SECONE (Mob: 8011018449)</li>
                <li>Dr. Abhijit Gogoi – Department of Geology, The Assam Royal Global University (Mob: 9859379947)</li>
                <li>Sri Ashok Kr Dutta – Convener & Treasurer, SECONE (Mob: 6000712711)</li>
            </ol>

        </div>

    </div>
@endsection

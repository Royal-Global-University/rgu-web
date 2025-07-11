@extends('frontend.master')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 32px;">
                RGU Outreach: Awareness on Conservation of Salamander Habitat
            </h2>

            <div class="container pt-3 pb-4 text-center">
                <img src="mobile-assets/media-corner/news22/1.jpg" style="height: 500px; width: 100%;" alt="">
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, July 10, 2025: </span> An awareness program on the protection and conservation of salamander habitats was successfully conducted by Dr. Upashna
                Chettri, Assistant Professor, Department of Botany, The Assam Royal Global University, under the IndiaBioscience
                Outreach Grant 2024–2025. The program was organized in collaboration with the Government of West Bengal on 4th July 2025
                at K.N. Memorial School, Sittong, under Kurseong subdivision in Darjeeling district as part of the outreach initiative.
                <br><br>
                The event was graced by key administrative officials, including the Sub-Divisional Police Officer (SDPO), Divisional
                Forest Officer (DFO), and Block Development Officer (BDO), whose participation underscored the importance of
                community-driven conservation efforts in ecologically sensitive areas.
                <br><br>
                The awareness program focused on highlighting the ecological value of wetlands, with special emphasis on Namthing
                Pokhari, a high-altitude wetland in Sittong that provides critical breeding habitat for the endangered Himalayan
                Salamander (Tylototriton verrucosus). The sessions aimed to sensitize the local community about the role of amphibians
                as bioindicators and the urgent need to protect their habitats from degradation.
                <br><br>

            <div class="container pt-2 pb-4">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="mobile-assets/media-corner/news22/3.jpg" alt="">
                    </div>
                    <div class="col-lg-6 text-dark">
                        Guest speaker Mr. Bharat Prakash Rai, Founder Secretary of the Federation of Societies for Environmental Protection
                        (FOSEP), provided valuable insights into local conservation challenges and solutions. Discussions during the program
                        also explored the concept of sustainable tourism in fragile ecosystems like Sittong, which are increasingly under
                        pressure due to human activity.
                        <br><br>
                        The event concluded with an interactive session where local residents, students, and officials actively participated,
                        voicing concerns and sharing ideas on promoting biodiversity conservation in the region.
                    </div>
                </div>
            </div>
            </p>
        </div>

    </section>
@endsection

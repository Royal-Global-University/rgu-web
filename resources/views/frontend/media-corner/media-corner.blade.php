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
        <div class="container" style="padding: 30px 15px;">

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

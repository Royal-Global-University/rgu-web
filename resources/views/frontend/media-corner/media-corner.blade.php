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
                <div class="col-12 col-md-6">
                    <input type="date" id="dateInput"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
                </div>
            </div>

            {{-- News Items --}}
            <div id="newsContainer" class="row">
                @php
                    $newsItems = [
                        [
                            'title' => 'Bhutan to Strengthen Relations with Institutions in Assam: Bhutanese Delegation at RGU',
                            'summary' => 'Bhutan’s Gelephu Mindfulness City Delegation Visits Assam Royal Global University',
                            'date' => 'Guwahati, June 11, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'A nine-member delegation from Bhutan’s Gelephu Mindfulness City, currently on a visit to Assam, today engaged in meaningful discussions with senior officials of Assam Royal Global University (RGU) at its campus in Guwahati.',
                        ],
                        [
                            'title' => 'World Environment Day observed at RGU',
                            'summary' => '',
                            'date' => 'Guwahati, June 5, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'On the occasion of the World Environment Day 2025, the Guwahati Municipal Corporation under the joint initiative of Swachh Bharat Mission 2.0 and the National Clean Air Programme, and in association with The Assam Royal Global University organized a day-long event at the university campus today.',
                        ],
                        [
                            'title' => 'The Threads of Tomorrow’: Lookbook Launched by Royal School of Fashion Design & Technology',
                            'summary' => '',
                            'date' => 'Guwahati, June 4, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'The Royal School of Fashion Design and Technology (RSFT) has unveiled its first-ever lookbook, ‘The Threads of Tomorrow’ at The Assam Royal Global University (RGU) today. The lookbook was launched by acclaimed fashion designer and textile revivalist Ms. Arita Kashyap in the presence of Mr Ankur Pansari, Executive Vice President, RGU; Mrs Angira Mimani, Associate Dean, Student Affairs; and other dignitaries, faculty members and students.',
                        ],
                        [
                            'title' => 'Veteran Journalist PJ Baruah Joins Royal Global University as Distinguished Professor',
                            'summary' => '',
                            'date' => 'Guwahati, June 3, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'In a significant development for media education in the region, renowned journalist Shri Prasanta Jyoti Baruah has joined The Assam Royal Global University (RGU) as a Distinguished Professor at the Royal School of Communication and Media. A veteran in the field, Shri Baruah has served as the Executive Editor of The Assam Tribune for several decades, making notable contributions to journalism in Northeast India.',
                        ],
                        [
                            'title' => 'Prof. Amarjyoti Choudhury to Lead Dr Bhupen Hazarika Centre for Creativity at Royal Global University',
                            'summary' => '',
                            'date' => 'Guwahati, June 2, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'In a historic and emotionally resonant announcement that bridges the past and the future, The Assam Royal Global University (RGU) has proudly welcomed Prof. (Dr.) Amarjyoti Choudhury, renowned scholar, scientist, artist and visionary thinker as Emeritus Prof. and Chair of the newly instituted ‘Dr Bhupen Hazarika Centre for Creativity’...',
                        ],
                        [
                            'title' => 'AI Dependence is Making Slaves, Mind is Far Superior to Technology: JNU VC Prof. Santishree Pandit at RGU',
                            'summary' => 'JNU VC Prof. Santishree Pandit addresses students and faculty members at Assam Royal Global University',
                            'date' => 'Guwahati, May 28, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
                            'content' => 'Intelligence has become artificial, but stupidity is original. Machines are learning, humans are serving. Students, please don’t lose your talent to read, to write and to think independently. ChatGPT and AI dependence is making slaves...',
                        ],
                        [
                            'title' => 'RGU Awarded Most Eminent Private University of North East 2025',
                            'summary' => '',
                            'date' => 'Guwahati, May 25, 2025:',
                            'link' => '',
                            'image' => 'mobile-assets/media-corner/news3/headimg.jpg',
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
                                    <img class="rounded shadow-sm border" style="width: 100%;" src="{{ asset($news['image']) }}"
                                        alt="">
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

    {{-- Inline JS for Search + Date + Pagination --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const dateInput = document.getElementById('dateInput');
            const items = Array.from(document.querySelectorAll('.news-item'));
            const prevBtn = document.getElementById('prevPage');
            const nextBtn = document.getElementById('nextPage');
            const pageNum = document.getElementById('pageNum');

            const itemsPerPage = 5;
            let currentPage = 1;

            function applyFilters() {
                const searchText = searchInput.value.toLowerCase();
                const selectedDate = dateInput.value;

                return items.filter(item => {
                    const title = item.getAttribute('data-title');
                    const date = item.getAttribute('data-date');
                    const matchesSearch = title.includes(searchText);
                    const matchesDate = !selectedDate || date === selectedDate;
                    return matchesSearch && matchesDate;
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

            dateInput.addEventListener('change', () => {
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

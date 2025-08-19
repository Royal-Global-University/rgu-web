@extends('frontend.master')
@section('content')

    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">
        <div class="mobile">
            @include('frontend/components/mobileheader')
            <img style="padding-top: 100px; position: relative;" src="mobile-assets/rgu-blog/rgu-blog-mob.png" alt="" />
        </div>

        <div class="website">
            <!--head image Section-->
            @include('frontend/components/aheader')
            <img src="mobile-assets/rgu-blog/rgu-blog-web.png" alt="" />
        </div>
        <div class="container" style="padding: 30px 15px;">

            {{-- Search & Date Filter --}}
            <div class="row mb-4">
                <div class="col-12 col-md-6 mb-2">
                    <input type="text" id="searchInput" placeholder="Search Blog..."
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
                </div>
            </div>

            {{-- News Items --}}
            <div id="newsContainer" class="row">
                @php
                    $newsItems = [
                        [
                            'title' => 'A Complete Guide To Studying B.tech in Guwahati',
                            'summary' => '',
                            'date' => '',
                            'link' => 'a-complete-guide-to-studying-btech-in-guwahati',
                            'image' => 'mobile-assets/rgu-blog/blog1.jpeg',
                            'content' => 'The entry point to Northeast India, Guwahati, is quickly becoming a center for top-notch higher education. As more and more reputable universities offer engineering degrees, the city is becoming a popular choice for students hoping to earn a B.Tech degree. With an emphasis on Royal Global University (RGU), we will cover all you need to know about studying B.Tech in Guwahati in this extensive guide, including specializations, the admissions process, employment opportunities...',
                        ],
                        [
                            'title' => 'Best University in North East India',
                            'summary' => '',
                            'date' => '',
                            'link' => 'best-university-in-north-east-india',
                            'image' => 'mobile-assets/rgu-blog/blog2.jpeg',
                            'content' => 'India northeast is renowned for its diverse range of cultures, stunning scenery, and rising standards of education. The number of respectable universities in this area that provide top-notch academic possibilities has increased dramatically over the last few decades. The greatest institution in North East India can provide the groundwork for a prosperous future if you are a student hoping for a top-notch education in a serene yet intellectually stimulating setting.',
                        ],
                        [
                            'title' => 'Private University in Assam',
                            'summary' => '',
                            'date' => '',
                            'link' => 'private-university-in-assam',
                            'image' => 'mobile-assets/rgu-blog/blog1.jpeg',
                            'content' => 'Assam is at the center of the dramatic shift in Northeast India educational scene. Even though the state has a long history of academic excellence, the rise of private schools or universities in recent years is changing the face of higher education. Thousands of students around India now view choosing a private University In Assam as a wise and forward-thinking move.',
                        ]

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
                                    <h2 class="fw-bold pb-3 pt-1" style="color: #264273; font-size: 23px;">{{ $news['title'] }}
                                    </h2>
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

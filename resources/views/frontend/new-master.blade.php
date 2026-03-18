<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Global University</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="new-web/css/style.css">

</head>

<body>

    @include('frontend/components/new-web/header')

    @yield('content')

    @include('frontend/components/new-web/footer')

    <!-- Global Search  -->
    <div class="search-modal" id="searchModal">
        <div class="search-modal-bg" id="searchModalBg"></div>
        <div class="search-modal-content">
            <button class="search-close-btn" id="searchCloseBtn" aria-label="Close Search">
                <i class="bi bi-x-lg"></i>
            </button>
            <div class="search-input-wrapper">
                <i class="bi bi-search search-modal-icon"></i>
                <input type="text" placeholder="What are you looking for?" id="globalSearchInput" autocomplete="off">
            </div>
            <div class="search-suggestions">
                <span>Quick Links:</span>
                <a href="#">Admissions 2026</a>
                <a href="#">Fee Structure</a>
                <a href="#">Placements</a>
                <a href="#">Hostel Facilities</a>
            </div>
        </div>
    </div>


</body>

<script src="new-web/js/script.js"></script>
<script src="new-web/js/index-js/phd-modal.js"></script>
<script src="new-web/js/index-js/academics-course.js"></script>
<script src="new-web/js/index-js/e-board-slider.js"></script>
<script src="new-web/js/index-js/footprints.js"></script>
<script src="new-web/js/index-js/news.js"></script>
<script src="new-web/js/index-js/research-labs.js"></script>
<script src="new-web/js/index-js/rgu-lagecy.js"></script>
<script src="new-web/js/index-js/testimonial.js"></script>
<script src="new-web/js/index-js/whats-next.js"></script>

</html>

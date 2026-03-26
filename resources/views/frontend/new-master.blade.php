<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The Assam Royal Global University | Best University in Assam, India')</title>
    <meta name="description" content="@yield('meta_description', 'Discover Royal Global University, the best private university in Assam offering world-class education, top-ranked faculty, modern infrastructure & 50+ UG & PG programs.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Best University in Assam')">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="new-web/css/style.css">

    <link rel="stylesheet" href="new-web/css/global.css">

    <link rel="icon" href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/favicons/30x30.png"
        sizes="32x32" />
    <link rel="icon" href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/favicons/192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/favicons/180x180.png" />

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

<script type="text/javascript">
var npf_d='https://admissions.rgu.ac';
var npf_c='5076';
var npf_m='1';
var s=document.createElement("script");
s.type="text/javascript";
s.async=true;
s.src="https://track.nopaperforms.com/js/track.js";
document.body.appendChild(s);
</script>
<script src="new-web/js/script.js"></script>
<script src="new-web/js/index-js/all-labs.js"></script>
<script src="new-web/js/index-js/phd-modal.js"></script>
<script src="new-web/js/index-js/academics-course.js"></script>
<script src="new-web/js/index-js/e-board-slider.js"></script>
<script src="new-web/js/index-js/footprints.js"></script>
<script src="new-web/js/index-js/news.js"></script>
<script src="new-web/js/index-js/research-labs.js"></script>
<script src="new-web/js/index-js/rgu-lagecy.js"></script>
<script src="new-web/js/index-js/testimonial.js"></script>

</html>

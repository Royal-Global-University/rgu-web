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

    <link rel="stylesheet" href="{{ asset('new-web/css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('new-web/css/global.css') }}?v={{ time() }}">


    <link rel="icon" href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/favicons/30x30.png" sizes="32x32" />
    <link rel="icon" href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/favicons/192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/favicons/180x180.png" />

    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '836863243133733');
        fbq('track', 'PageView');
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=836863243133733&ev=PageView&noscript=1" /></noscript>


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


    {{-- @include('frontend.components.search-widget') --}}
</body>

<script type="text/javascript">
    var npf_d = 'https://admissions.rgu.ac';
    var npf_c = '5076';
    var npf_m = '1';
    var s = document.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://track.nopaperforms.com/js/track.js";
    document.body.appendChild(s);
</script>
<script src="{{ asset('new-web/js/script.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/all-labs.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/phd-modal.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/academics-course.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/e-board-slider.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/footprints.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/news.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/research-labs.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/rgu-lagecy.js') }}?v={{ time() }}"></script>
<script src="{{ asset('new-web/js/index-js/testimonial.js') }}?v={{ time() }}"></script>



</html>

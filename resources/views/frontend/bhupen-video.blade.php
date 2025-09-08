@extends('frontend.master')
@section('content')
    <div class="website">
        @php $hideFooter = true; @endphp

        <section
            style="background-image: url(bhupen-hazarika/b-g-1.png); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px;">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="player-container">
                            <div class="text-center p-3 mb-3"
                                style="background-color: #604d2dc3; border-radius: 15px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                                <h2 class="headd1"
                                    style="color: #f5f5f5; font-family: 'Playfair Display', serif; font-size: 30px; font-weight: 600; line-height: 1.4; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                    Dive into the timeless melodies of <br>
                                    <span style="color: #E0C068; font-weight: 700;">Dr. Bhupen Hazarika</span>
                                </h2>
                            </div>
                            <video id="local-player" controls
                                style="width: 100%; height: 400px; border-radius: 10px; margin-bottom: 15px; background-color: #000;"></video>
                            <ul class="playlist" id="playlist"></ul>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </section>

            <script>
                // Elementor Frontend Configuration
                var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true } } }, "urls": { "assets": "assets/elementor/" }, "swiperClass": "swiper", "kit": { "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes" }, "post": { "id": 704, "title": "Home Page" } };

                // Video Player Logic
                const initVideoPlayer = () => {
                    const videos = [
                        { src: "https://media.rgu.ac/bhupen/bhupen.mp4", title: "" },
                        // Add other videos here if needed
                    ];

                    let currentIndex = 0;
                    const player = document.getElementById("local-player");
                    const playlist = document.getElementById("playlist");

                    if (!player || !playlist) return;

                    // Build Playlist
                    videos.forEach((video, index) => {
                        const li = document.createElement("li");
                        li.textContent = video.title;
                        if (index === 0) li.classList.add("active");
                        li.onclick = () => playVideo(index);
                        playlist.appendChild(li);
                    });

                    function playVideo(index) {
                        if (index >= 0 && index < videos.length) {
                            currentIndex = index;
                            player.src = videos[currentIndex].src;
                            player.play();
                            updateActive();
                        }
                    }

                    function playNextVideo() {
                        currentIndex = (currentIndex + 1) % videos.length;
                        playVideo(currentIndex);
                    }

                    player.addEventListener('ended', playNextVideo);

                    function updateActive() {
                        document.querySelectorAll(".playlist li").forEach((item, index) => {
                            item.classList.toggle("active", index === currentIndex);
                        });
                    }

                    // Load the first video initially
                    if (videos.length > 0) {
                        playVideo(0);
                        player.pause(); // Optional: don't autoplay the first video
                    }
                };

                // Run scripts on DOMContentLoaded
                document.addEventListener("DOMContentLoaded", function () {
                    initVideoPlayer();
                });

            </script>
    </div>
@endsection

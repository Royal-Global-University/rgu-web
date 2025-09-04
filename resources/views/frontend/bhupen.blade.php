@extends('frontend.master')
@section('content')
    <div class="website">
                                                    @php
                                                        $hideFooter = true;
                                                    @endphp
        <section
            style="background-image: url(bhupen-hazarika/b-g-1.png); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;">

            <div class="container">

                <div class="row"
                    style="display: flex; justify-content: center; align-items: center; flex-direction: row; padding: 20px;">

                    <div class="col-lg-6">

                        <div
                            style="padding: 20px; background-color: #604d2dc3; border-radius: 15px; backdrop-filter: blur(10px); width: 100%; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                            <h2 class="headd1 text-center" style="
        color: #f5f5f5;
        font-family: 'Playfair Display', serif;
        font-size: 30px;
        font-weight: 600;
        line-height: 1.4;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        letter-spacing: 0.5px;
        ">
                                Dive into the timeless melodies of <br>
                                <span style="color: #E0C068; font-weight: 700;">Dr. Bhupen Hazarika</span>
                            </h2>
                        </div>

                        <div class="mt-3">
                            <div class="music-player-container">
                                <style>
                                    .music-player-container {
                                        padding: 25px;
                                        background-color: #604d2dc3;
                                        border-radius: 15px;
                                        backdrop-filter: blur(10px);
                                        color: #fff;
                                        font-family: sans-serif;
                                    }

                                    .current-track {
                                        display: flex;
                                        align-items: center;
                                        margin-bottom: 20px;
                                    }

                                    #current-thumbnail {
                                        width: 80px;
                                        height: 80px;
                                        border-radius: 10px;
                                        object-fit: cover;
                                        margin-right: 15px;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                                    }

                                    #current-title {
                                        font-size: 20px;
                                        font-weight: bold;
                                    }

                                    /* MODIFIED CSS FOR CONTROLS LAYOUT */
                                    .controls {
                                        position: relative;
                                        /* Set as positioning context */
                                        display: flex;
                                        justify-content: center;
                                        /* This now centers the main buttons */
                                        align-items: center;
                                        gap: 15px;
                                        margin-top: 15px;
                                    }

                                    .volume-control {
                                        position: absolute;
                                        /* Remove from flow and position manually */
                                        right: 0;
                                        /* Pin to the right edge of the .controls container */
                                        display: flex;
                                        align-items: center;
                                        gap: 10px;
                                    }

                                    /* END OF MODIFICATIONS */

                                    .control-btn {
                                        background: none;
                                        border: none;
                                        color: #fff;
                                        font-size: 20px;
                                        cursor: pointer;
                                        transition: transform 0.2s ease;
                                    }

                                    .control-btn:hover {
                                        transform: scale(1.1);
                                    }

                                    #play-pause-btn {
                                        font-size: 30px;
                                    }

                                    #volume-slider {
                                        appearance: none;
                                        width: 80px;
                                        height: 5px;
                                        background: rgba(255, 255, 255, 0.3);
                                        border-radius: 5px;
                                        outline: none;
                                        cursor: pointer;
                                    }

                                    #volume-slider::-moz-range-thumb {
                                        width: 15px;
                                        height: 15px;
                                        background: #fff;
                                        border-radius: 50%;
                                        cursor: pointer;
                                        border: none;
                                    }

                                    .time-and-progress {
                                        display: flex;
                                        align-items: center;
                                        gap: 10px;
                                        margin: 15px 0;
                                    }

                                    #current-time,
                                    #total-duration {
                                        font-size: 12px;
                                        min-width: 35px;
                                        text-align: center;
                                    }

                                    .progress-container {
                                        flex-grow: 1;
                                        background-color: rgba(255, 255, 255, 0.3);
                                        border-radius: 5px;
                                        cursor: pointer;
                                        height: 6px;
                                    }

                                    .progress-bar {
                                        background-color: #fff;
                                        border-radius: 5px;
                                        height: 100%;
                                        width: 0%;
                                        transition: width 0.1s linear;
                                    }

                                    .playlist {
                                        margin-top: 25px;
                                        max-height: 250px;
                                        overflow-y: auto;
                                        padding: 15px;
                                        box-shadow: inset 0px 10px 8px -10px #0000005e, inset 0px -10px 8px -10px #0000005e;
                                        background-color: #6D5733;
                                        border-radius: 10px;
                                        scrollbar-width: thin;
                                        scrollbar-color: #fff rgba(255, 255, 255, 0.2);
                                    }

                                    .playlist-song {
                                        display: flex;
                                        align-items: center;
                                        padding: 10px;
                                        border-radius: 8px;
                                        cursor: pointer;
                                        transition: background-color 0.2s ease;
                                    }

                                    .playlist-song:hover {
                                        background-color: rgba(255, 255, 255, 0.1);
                                    }

                                    .playlist-song.active {
                                        background-color: rgba(255, 255, 255, 0.2);
                                    }

                                    .playlist-thumbnail {
                                        width: 50px;
                                        height: 50px;
                                        border-radius: 5px;
                                        object-fit: cover;
                                        margin-right: 15px;
                                    }
                                </style>

                                <div class="current-track">
                                    <img src="bhupen-hazarika/song1.jpg" alt="Album Art" id="current-thumbnail">
                                    <div>
                                        <h3 id="current-title" class="headd1 fw-bold"
                                            style="color: #fff; font-size: 22px; margin: 0;">Song Title</h3>
                                    </div>
                                </div>

                                <div class="time-and-progress">
                                    <span id="current-time">0:00</span>
                                    <div class="progress-container" id="progress-container">
                                        <div class="progress-bar" id="progress-bar"></div>
                                    </div>
                                    <span id="total-duration">0:00</span>
                                </div>

                                <div class="controls">
                                    <button id="prev-btn" class="control-btn"><i class="fas fa-backward-step"></i></button>
                                    <button id="play-pause-btn" class="control-btn"><i class="fas fa-play"></i></button>
                                    <button id="next-btn" class="control-btn"><i class="fas fa-forward-step"></i></button>

                                    <div class="volume-control">
                                        <i class="fas fa-volume-high"></i>
                                        <input type="range" id="volume-slider" min="0" max="100" value="100">
                                    </div>
                                </div>

                                <div class="playlist" id="playlist">
                                </div>

                                <audio id="audio-source"></audio>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        // === EDIT YOUR SONGS HERE ===
                                        const songs = [
                                            {
                                                title: "Aah Aah Olai Aah",
                                                src: "bhupen-hazarika/songs/AahAahOlaiAah.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Aai Tok Kihere",
                                                src: "bhupen-hazarika/songs/AaiTokKihere.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Aakaashi Ganga",
                                                src: "bhupen-hazarika/songs/AakaashiGanga.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Aami Axomiya Nahao Dukhiya",
                                                src: "bhupen-hazarika/songs/AamiAxomiyaNahaoDukhiya.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Aji Jiyonor",
                                                src: "bhupen-hazarika/songs/ajijiyonor.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Anamika Bidai",
                                                src: "bhupen-hazarika/songs/AnamikaBidai.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Atukura Alaxua Megh",
                                                src: "bhupen-hazarika/songs/AtukuraAlaxuaMegh.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Axom Aamar Rupahi",
                                                src: "bhupen-hazarika/songs/AxomAamarRupahi.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Bistirna Parare",
                                                src: "bhupen-hazarika/songs/BistirnaParare.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Biturta Mor Nishati",
                                                src: "bhupen-hazarika/songs/BiturtaMorNishati.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Chira Jugamia Dhow Tuli",
                                                src: "bhupen-hazarika/songs/ChiraJugamiaDhowTuli.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Chitralekha",
                                                src: "bhupen-hazarika/songs/Chitralekha.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Eti Kuhi Duti Paat",
                                                src: "bhupen-hazarika/songs/EtiKuhiDutiPaat.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Fut Godhuli te",
                                                src: "bhupen-hazarika/songs/FutGodhulite.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Gouripuria Gabhoru",
                                                src: "bhupen-hazarika/songs/GouripuriaGabhoru.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Gumgum",
                                                src: "bhupen-hazarika/songs/Gumgum.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Hanhikandune",
                                                src: "bhupen-hazarika/songs/hanhikandune.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Haxastra Jane Mok Prasna",
                                                src: "bhupen-hazarika/songs/HaxastraJaneMokPrasna.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "He He Dhole Dopore",
                                                src: "bhupen-hazarika/songs/HeHeDholeDopore.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "He Mai Zoxaya",
                                                src: "bhupen-hazarika/songs/HeMaiZoxaya.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Jeevansindhu",
                                                src: "bhupen-hazarika/songs/jeevansindhu.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Kata Joubanar Mrityu Hal",
                                                src: "bhupen-hazarika/songs/KataJoubanarMrityuHal.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Kaxua Ban",
                                                src: "bhupen-hazarika/songs/KaxuaBan.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Kije Tomar Xanga Priya",
                                                src: "bhupen-hazarika/songs/KijeTomarXangaPriya.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Kolir Krishna",
                                                src: "bhupen-hazarika/songs/KolirKrishna.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },
                                            {
                                                title: "Liyan Macaw",
                                                src: "bhupen-hazarika/songs/LiyanMacaw.mp3",
                                                thumbnail: "bhupen-hazarika/thumb-img.png"
                                            },

                                        ];
                                        // ===========================

                                        // DOM Elements
                                        const audio = document.getElementById('audio-source');
                                        const playlist = document.getElementById('playlist');
                                        const currentThumbnail = document.getElementById('current-thumbnail');
                                        const currentTitle = document.getElementById('current-title');
                                        const playPauseBtn = document.getElementById('play-pause-btn');
                                        const prevBtn = document.getElementById('prev-btn');
                                        const nextBtn = document.getElementById('next-btn');
                                        const progressContainer = document.getElementById('progress-container');
                                        const progressBar = document.getElementById('progress-bar');
                                        const currentTimeEl = document.getElementById('current-time');
                                        const totalDurationEl = document.getElementById('total-duration');
                                        const volumeSlider = document.getElementById('volume-slider');

                                        let currentSongIndex = 0;
                                        let isPlaying = false;

                                        // Load a song by index
                                        function loadSong(song) {
                                            currentTitle.textContent = song.title;
                                            currentThumbnail.src = song.thumbnail;
                                            audio.src = song.src;
                                            updatePlaylistUI();
                                        }

                                        // Play song
                                        function playSong() {
                                            isPlaying = true;
                                            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                                            audio.play();
                                        }

                                        // Pause song
                                        function pauseSong() {
                                            isPlaying = false;
                                            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
                                            audio.pause();
                                        }

                                        // Previous song
                                        function prevSong() {
                                            currentSongIndex--;
                                            if (currentSongIndex < 0) {
                                                currentSongIndex = songs.length - 1;
                                            }
                                            loadSong(songs[currentSongIndex]);
                                            playSong();
                                        }

                                        // Next song
                                        function nextSong() {
                                            currentSongIndex++;
                                            if (currentSongIndex > songs.length - 1) {
                                                currentSongIndex = 0;
                                            }
                                            loadSong(songs[currentSongIndex]);
                                            playSong();
                                        }

                                        // Format time in minutes:seconds
                                        function formatTime(seconds) {
                                            if (isNaN(seconds)) return '0:00';
                                            const minutes = Math.floor(seconds / 60);
                                            const secs = Math.floor(seconds % 60);
                                            return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
                                        }

                                        // Update progress bar and time
                                        function updateProgress(e) {
                                            const { duration, currentTime } = e.srcElement;
                                            if (duration) {
                                                const progressPercent = (currentTime / duration) * 100;
                                                progressBar.style.width = `${progressPercent}%`;
                                                currentTimeEl.textContent = formatTime(currentTime);
                                            }
                                        }

                                        // Set progress bar on click
                                        function setProgress(e) {
                                            const width = this.clientWidth;
                                            const clickX = e.offsetX;
                                            const duration = audio.duration;
                                            if (duration) {
                                                audio.currentTime = (clickX / width) * duration;
                                            }
                                        }

                                        function setVolume() {
                                            audio.volume = volumeSlider.value / 100;
                                        }

                                        function updatePlaylistUI() {
                                            const playlistItems = document.querySelectorAll('.playlist-song');
                                            playlistItems.forEach((item, index) => {
                                                if (index === currentSongIndex) {
                                                    item.classList.add('active');
                                                } else {
                                                    item.classList.remove('active');
                                                }
                                            });
                                        }

                                        function populatePlaylist() {
                                            songs.forEach((song, index) => {
                                                const songDiv = document.createElement('div');
                                                songDiv.classList.add('playlist-song');
                                                songDiv.innerHTML = `
                                        <img src="${song.thumbnail}" alt="${song.title}" class="playlist-thumbnail">
                                        <span>${song.title}</span>
                                    `;
                                                songDiv.addEventListener('click', () => {
                                                    currentSongIndex = index;
                                                    loadSong(songs[currentSongIndex]);
                                                    playSong();
                                                });
                                                playlist.appendChild(songDiv);
                                            });
                                        }

                                        // Event Listeners
                                        playPauseBtn.addEventListener('click', () => (isPlaying ? pauseSong() : playSong()));
                                        prevBtn.addEventListener('click', prevSong);
                                        nextBtn.addEventListener('click', nextSong);
                                        audio.addEventListener('timeupdate', updateProgress);
                                        progressContainer.addEventListener('click', setProgress);
                                        audio.addEventListener('ended', nextSong);
                                        volumeSlider.addEventListener('input', setVolume);
                                        audio.addEventListener('loadedmetadata', () => {
                                            totalDurationEl.textContent = formatTime(audio.duration);
                                        });

                                        // Initial Load
                                        populatePlaylist();
                                        loadSong(songs[currentSongIndex]);
                                        setVolume();
                                    });
                                </script>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" style="display: flex; justify-content: center; align-items: center;">
                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection

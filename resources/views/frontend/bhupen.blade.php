@extends('frontend.master')
@section('content')
    <div class="website">
        @php $hideFooter = true; @endphp

        <section
            style="background-image: url('bhupen-hazarika/b-g-1.png'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; justify-content: center;">

            <div class="container">
                <div class="row d-flex justify-content-center align-items-center p-3">

                    <div class="col-lg-6">
                        <!-- Heading -->
                        <div class="text-center p-3"
                            style="background-color: #604d2dc3; border-radius: 15px; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                            <h2 class="headd1"
                                style="color: #f5f5f5; font-family: 'Playfair Display', serif; font-size: 30px; font-weight: 600; line-height: 1.4; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                Dive into the timeless melodies of <br>
                                <span style="color: #E0C068; font-weight: 700;">Dr. Bhupen Hazarika</span>
                            </h2>
                        </div>

                        <!-- Music Player -->
                        <div class="mt-3 music-player-container">
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

                                .controls {
                                    position: relative;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    gap: 15px;
                                    margin-top: 15px;
                                }

                                .volume-control {
                                    position: absolute;
                                    right: 0;
                                    display: flex;
                                    align-items: center;
                                    gap: 10px;
                                }

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
                                    cursor: pointer;
                                }

                                #volume-slider::-moz-range-thumb {
                                    width: 15px;
                                    height: 15px;
                                    background: #fff;
                                    border-radius: 50%;
                                    border: none;
                                    cursor: pointer;
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
                                    background-color: #6D5733;
                                    border-radius: 10px;
                                    box-shadow: inset 0px 10px 8px -10px #0000005e, inset 0px -10px 8px -10px #0000005e;
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

                            <!-- Current Track -->
                            <div class="current-track">
                                <img src="bhupen-hazarika/song1.jpg" alt="Album Art" id="current-thumbnail">
                                <h3 id="current-title" style="color: #fff; font-size: 22px; margin: 0;">Song Title</h3>
                            </div>

                            <!-- Progress -->
                            <div class="time-and-progress">
                                <span id="current-time">0:00</span>
                                <div class="progress-container" id="progress-container">
                                    <div class="progress-bar" id="progress-bar"></div>
                                </div>
                                <span id="total-duration">0:00</span>
                            </div>

                            <!-- Controls -->
                            <div class="controls">
                                <button id="prev-btn" class="control-btn"><i class="fas fa-backward-step"></i></button>
                                <button id="play-pause-btn" class="control-btn"><i class="fas fa-play"></i></button>
                                <button id="next-btn" class="control-btn"><i class="fas fa-forward-step"></i></button>
                                <div class="volume-control">
                                    <i class="fas fa-volume-high"></i>
                                    <input type="range" id="volume-slider" min="0" max="100" value="100">
                                </div>
                            </div>

                            <!-- Playlist -->
                            <div class="playlist" id="playlist"></div>

                            <audio id="audio-source"></audio>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const songs = [
                                        { title: "Aah Aah Olai Aah", src: "{{ asset('https://media.rgu.ac/songs/AahAahOlaiAah.MP3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Aai Tok Kihere", src: "{{ asset('https://media.rgu.ac/songs/AaiTokKihere.MP3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Aakaashi Ganga", src: "{{ asset('https://media.rgu.ac/songs/AakaashiGanga.MP3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Aami Axomiya Nahao Dukhiya", src: "{{ asset('https://media.rgu.ac/songs/AamiAxomiyaNahaoDukhiya.MP3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Aji Jiyonor", src: "{{ asset('https://media.rgu.ac/songs/ajijiyonor.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Anamika Bidai", src: "{{ asset('https://media.rgu.ac/songs/AnamikaBidai.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Atukura Alaxua Megh", src: "{{ asset('https://media.rgu.ac/songs/AtukuraAlaxuaMegh.MP3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Axom Aamar Rupahi", src: "{{ asset('https://media.rgu.ac/songs/AxomAamarRupahi.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Bistirna Parare", src: "{{ asset('https://media.rgu.ac/songs/BistirnaParare.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Biturta Mor Nishati", src: "{{ asset('https://media.rgu.ac/songs/BiturtaMorNishati.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Chira Jugamia Dhow Tuli", src: "{{ asset('https://media.rgu.ac/songs/ChiraJugamiaDhowTuli.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Chitralekha", src: "{{ asset('https://media.rgu.ac/songs/Chitralekha.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Eti Kuhi Duti Paat", src: "{{ asset('https://media.rgu.ac/songs/EtiKuhiDutiPaat.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Fut Godhuli Te", src: "{{ asset('https://media.rgu.ac/songs/FutGodhuliTe.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Gouripuria Gabhoru", src: "{{ asset('https://media.rgu.ac/songs/GouripuriaGabhoru.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Gumgum", src: "{{ asset('https://media.rgu.ac/songs/Gumgum.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Hanhikandune", src: "{{ asset('https://media.rgu.ac/songs/Hanhikandune.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Haxastra Jane Mok Prasna", src: "{{ asset('https://media.rgu.ac/songs/HaxastraJaneMokPrasna.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "He He Dhole Dopore", src: "{{ asset('https://media.rgu.ac/songs/HeHeDholeDopore.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "He Mai Zoxaya", src: "{{ asset('https://media.rgu.ac/songs/HeMaiZoxaya.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Jeevansindhu", src: "{{ asset('https://media.rgu.ac/songs/Jeevansindhu.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Kata Joubanar Mrityu Hal", src: "{{ asset('https://media.rgu.ac/songs/KataJoubanarMrityuHal.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Kaxua Ban", src: "{{ asset('https://media.rgu.ac/songs/KaxuaBan.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Kije Tomar Xanga Priya", src: "{{ asset('https://media.rgu.ac/songs/KijeTomarXangaPriya.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Kolir Krishna", src: "{{ asset('https://media.rgu.ac/songs/KolirKrishna.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" },
                                        { title: "Liyan Macaw", src: "{{ asset('https://media.rgu.ac/songs/LiyanMacaw.mp3') }}", thumbnail: "{{ asset('bhupen-hazarika/thumb-img.png') }}" }
                                    ];

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

                                    function loadSong(song) {
                                        currentTitle.textContent = song.title;
                                        currentThumbnail.src = song.thumbnail;
                                        audio.src = song.src;
                                        updatePlaylistUI();
                                    }

                                    function playSong() {
                                        isPlaying = true;
                                        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                                        audio.play();
                                    }

                                    function pauseSong() {
                                        isPlaying = false;
                                        playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
                                        audio.pause();
                                    }

                                    function prevSong() {
                                        currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
                                        loadSong(songs[currentSongIndex]);
                                        playSong();
                                    }

                                    function nextSong() {
                                        currentSongIndex = (currentSongIndex + 1) % songs.length;
                                        loadSong(songs[currentSongIndex]);
                                        playSong();
                                    }

                                    function formatTime(seconds) {
                                        if (isNaN(seconds)) return '0:00';
                                        const minutes = Math.floor(seconds / 60);
                                        const secs = Math.floor(seconds % 60);
                                        return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
                                    }

                                    function updateProgress(e) {
                                        const { duration, currentTime } = e.srcElement;
                                        if (duration) {
                                            progressBar.style.width = `${(currentTime / duration) * 100}%`;
                                            currentTimeEl.textContent = formatTime(currentTime);
                                        }
                                    }

                                    function setProgress(e) {
                                        const width = this.clientWidth;
                                        const clickX = e.offsetX;
                                        audio.currentTime = (clickX / width) * audio.duration;
                                    }

                                    function setVolume() {
                                        audio.volume = volumeSlider.value / 100;
                                    }

                                    function updatePlaylistUI() {
                                        document.querySelectorAll('.playlist-song').forEach((item, index) => {
                                            item.classList.toggle('active', index === currentSongIndex);
                                        });
                                    }

                                    function populatePlaylist() {
                                        songs.forEach((song, index) => {
                                            const songDiv = document.createElement('div');
                                            songDiv.classList.add('playlist-song');
                                            songDiv.innerHTML = `<img src="${song.thumbnail}" alt="${song.title}" class="playlist-thumbnail"><span>${song.title}</span>`;
                                            songDiv.addEventListener('click', () => {
                                                currentSongIndex = index;
                                                loadSong(songs[currentSongIndex]);
                                                playSong();
                                            });
                                            playlist.appendChild(songDiv);
                                        });
                                    }

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

                                    populatePlaylist();
                                    loadSong(songs[currentSongIndex]);
                                    setVolume();
                                });
                            </script>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <!-- Optional right section (add image/description later) -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

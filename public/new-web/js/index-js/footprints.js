/* ================= 8. MAESTROS SLIDER ================= */
    const maestroTrack = document.querySelector(".rgu-maestro-track");
    const maestroCards = document.querySelectorAll(".rgu-maestro-card");
    const maestroNext = document.querySelector(".rgu-maestro-next");
    const maestroPrev = document.querySelector(".rgu-maestro-prev");
    const maestroBar = document.querySelector(".rgu-maestro-bar");

    if (maestroTrack && maestroCards.length > 0) {
        let maestroIndex = 0;
        let maestroVisible = window.innerWidth <= 768 ? 1 : 3;

        window.addEventListener('resize', () => {
            maestroVisible = window.innerWidth <= 768 ? 1 : 3;
            updateMaestro();
        });

        function updateMaestro() {
            const cardWidth = maestroCards[0].offsetWidth + 40; // 40px gap
            maestroTrack.style.transform = `translateX(-${maestroIndex * cardWidth}px)`;

            const maxSlide = maestroCards.length - maestroVisible;
            const progress = maxSlide > 0 ? (maestroIndex / maxSlide) * 100 : 100;
            if (maestroBar) maestroBar.style.width = Math.min(progress, 100) + "%";
        }

        maestroNext?.addEventListener("click", () => {
            if (maestroIndex < maestroCards.length - maestroVisible) {
                maestroIndex++;
                updateMaestro();
            }
        });

        maestroPrev?.addEventListener("click", () => {
            if (maestroIndex > 0) {
                maestroIndex--;
                updateMaestro();
            }
        });

        setInterval(() => {
            if (maestroIndex < maestroCards.length - maestroVisible) {
                maestroIndex++;
            } else {
                maestroIndex = 0;
            }
            updateMaestro();
        }, 4000);

        updateMaestro();
    }
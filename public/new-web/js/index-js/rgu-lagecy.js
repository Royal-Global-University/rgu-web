
document.addEventListener('DOMContentLoaded', () => {

    /* ================= LEGACY MOBILE CAROUSEL ================= */
    const legacyTrack = document.getElementById('legacyTrack');
    const legacyPrev = document.getElementById('legacyPrev');
    const legacyNext = document.getElementById('legacyNext');

    if (legacyTrack && window.innerWidth <= 768) {
        const legacySlides = document.querySelectorAll('.legacy-slide');
        let legacyIndex = 0;
        const totalLegacy = legacySlides.length;
        let legacyAutoSlide;

        function updateLegacySlide() {
            legacyTrack.style.transform = `translateX(-${legacyIndex * 100}%)`;
        }

        function goNextLegacy() {
            legacyIndex = (legacyIndex + 1) % totalLegacy;
            updateLegacySlide();
        }

        function goPrevLegacy() {
            legacyIndex = (legacyIndex - 1 + totalLegacy) % totalLegacy;
            updateLegacySlide();
        }

        function startLegacyAuto() {
            legacyAutoSlide = setInterval(goNextLegacy, 3500); // Changes every 3.5 seconds
        }

        function resetLegacyAuto() {
            clearInterval(legacyAutoSlide);
            startLegacyAuto();
        }

        legacyNext.addEventListener('click', () => {
            goNextLegacy();
            resetLegacyAuto();
        });

        legacyPrev.addEventListener('click', () => {
            goPrevLegacy();
            resetLegacyAuto();
        });

        // Initialize auto slide
        startLegacyAuto();
    }

    


    

   

    

   

    

    

  

});

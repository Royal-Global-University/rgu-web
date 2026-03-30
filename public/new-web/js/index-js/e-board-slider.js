/* ================= 4. E-BOARD SLIDER ================= */

const eboardData = [
    {
        img: "/mobile-assets/ads/eboardmar301.jpeg",
        alt: "Event 4",
    },
    {
        img: "https://media.rgu.ac/new-web/img/index/e-board/4.jpeg",
        alt: "Event 4",
    },
    {
        img: "https://media.rgu.ac/new-web/img/index/e-board/3.jpeg",
        alt: "Event 3",
    },
    { img: "new-web/assets/img/index/e-board/5.png", alt: "Event 5" },
    { img: "new-web/assets/img/index/e-board/6.jpeg", alt: "Event 6" },
];

const eboardTrack = document.getElementById("eboardTrack");
const eboardDotsContainer = document.getElementById("eboardDots");
const eboardSlider = document.getElementById("eboardSlider");

let eboardCards = [];
let eboardDots = [];


/* ===== CREATE CARDS ===== */

eboardData.forEach((item, index) => {

    const card = document.createElement("div");
    card.className = "rgu-eboard-card";
    card.innerHTML = `<img src="${item.img}" alt="${item.alt}">`;

    eboardTrack.appendChild(card);

    const dot = document.createElement("span");
    dot.className = "rgu-eboard-dot";

    if (index === 0) dot.classList.add("active");

    eboardDotsContainer.appendChild(dot);
});


eboardCards = document.querySelectorAll(".rgu-eboard-card");
eboardDots = document.querySelectorAll(".rgu-eboard-dot");


if (eboardCards.length > 0) {

    let eboardIndex = 0;
    const total = eboardCards.length;
    let slideInterval;

    function updateEboardSlider() {

        eboardCards.forEach(card =>
            card.classList.remove("active", "prev", "next", "far-left", "far-right")
        );

        eboardDots.forEach(dot => dot.classList.remove("active"));

        eboardCards[eboardIndex].classList.add("active");
        eboardCards[(eboardIndex - 1 + total) % total].classList.add("prev");
        eboardCards[(eboardIndex + 1) % total].classList.add("next");
        eboardCards[(eboardIndex - 2 + total) % total].classList.add("far-left");
        eboardCards[(eboardIndex + 2) % total].classList.add("far-right");

        eboardDots[eboardIndex].classList.add("active");
    }


    function nextEboardSlide() {
        eboardIndex = (eboardIndex + 1) % total;
        updateEboardSlider();
    }


    function startAutoSlide() {
        slideInterval = setInterval(nextEboardSlide, 3000);
    }

    function stopAutoSlide() {
        clearInterval(slideInterval);
    }


    eboardDots.forEach((dot, i) => {
        dot.addEventListener("click", () => {
            eboardIndex = i;
            updateEboardSlider();
            stopAutoSlide();
            startAutoSlide();
        });
    });


    eboardCards.forEach((card, i) => {
        card.addEventListener("click", () => {

            if (eboardIndex !== i) {
                eboardIndex = i;
                updateEboardSlider();
                stopAutoSlide();
                startAutoSlide();
            }

        });
    });


    if (eboardSlider) {
        eboardSlider.addEventListener("mouseenter", stopAutoSlide);
        eboardSlider.addEventListener("mouseleave", startAutoSlide);
    }


    updateEboardSlider();
    startAutoSlide();

}

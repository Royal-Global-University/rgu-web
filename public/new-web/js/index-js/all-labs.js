document.addEventListener("DOMContentLoaded", () => {

    /* ================= RESEARCH DATA ================= */

    const researchData = [
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/architecture.png",
            title: "Architecture Lab",
            link: "https://rgu.ac/lab-architecture",
        },

        {
            img: "https://media.rgu.ac/new-web/img/index/labs/biochem.png",
            title: "Biochemistry Lab",
            link: "https://rgu.ac/lab-bio-chemistry",
        },

        {
            img: "https://media.rgu.ac/new-web/img/index/labs/bioscience-research-lab.png",
            title: "Bioscience Research Lab",
            link: "https://rgu.ac/lab-bioscience-research",
        },

        {
            img: "https://media.rgu.ac/new-web/img/index/labs/biotech-lab.png",
            title: "Biotechnology Lab",
            link: "https://rgu.ac/lab-biotech",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/botany.png",
            title: "Botany Lab",
            link: "https://rgu.ac/lab-botany",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/chemistry.png",
            title: "Chemistry Lab",
            link: "https://rgu.ac/lab-chemistry",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/civil-engg-lab.png",
            title: "Civil Engineering Lab",
            link: "https://rgu.ac/lab-civilengineering",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/computer-lab.png",
            title: "Computer Lab",
            link: "https://rgu.ac/lab-computer",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/diagnostic.png",
            title: "Diagonastic Lab",
            link: "https://rgu.ac/lab-diagnostic",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/electrical.png",
            title: "Electrical Lab",
            link: "https://rgu.ac/lab-electrical",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/electronic.png",
            title: "Electronic Lab",
            link: "https://rgu.ac/lab-electronic",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/engineeringdrawing.png",
            title: "Engineering Drawing Lab",
            link: "https://rgu.ac/lab-engineering_drawing",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/ev.jpeg",
            title: "Electric Vehicle Lab",
            link: "https://rgu.ac/lab-ev-lab",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/foodtech.png",
            title: "Food Technology Lab",
            link: "https://rgu.ac/lab-foodteach",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/forensic.png",
            title: "Forensic Lab",
            link: "https://rgu.ac/lab-forensic-lab",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/hotelmanagement.png",
            title: "Hotel Management Lab",
            link: "https://rgu.ac/lab-hotelmanagement",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/interior.png",
            title: "Interior Designing Lab",
            link: "https://rgu.ac/lab-interior",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/language.png",
            title: "Language Lab",
            link: "https://rgu.ac/lab-language-lab",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/mechanical-engg.png",
            title: "Mechanical Lab",
            link: "https://rgu.ac/lab-mechanical",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/microbio.png",
            title: "Microbiology Lab",
            link: "https://rgu.ac/lab-microbiology",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/nursing.png",
            title: "Nursing Lab",
            link: "https://rgu.ac/lab-nursing",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/observe.jpeg",
            title: "Royal Observatory",
            link: "https://rgu.ac/lab-astronomy",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/operation.png",
            title: "Operation Theatre Lab",
            link: "https://rgu.ac/lab-operation_theater",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/optometry.png",
            title: "Optometry Lab",
            link: "https://rgu.ac/lab-optometry",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/pharmacy.png",
            title: "Pharmacutical Lab",
            link: "https://rgu.ac/lab-pharmacy",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/physics.png",
            title: "Physics Lab",
            link: "https://rgu.ac/lab-physics",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/physiotherapy.png",
            title: "Physiotherapy Lab",
            link: "https://rgu.ac/lab-physiotherapy",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/radiology.png",
            title: "Radiology Lab",
            link: "https://rgu.ac/lab-radiography",
        },
        {
            img: "https://media.rgu.ac/new-web/img/index/labs/zoology.png",
            title: "Zoology Lab",
            link: "https://rgu.ac/lab-zoology",
        },
    ];


    const rdTrack = document.getElementById("rdTrack");
    const rdPrevBtn = document.querySelector(".rgu-lab-prev");
    const rdNextBtn = document.querySelector(".rgu-lab-next");



    /* ================= GENERATE CARDS ================= */

    researchData.forEach(item => {

        const card = document.createElement("a");

        card.className = "rgu-lab-card";
        card.href = item.link;

        card.innerHTML = `
            <img src="${item.img}" alt="${item.title}">
            <div class="rgu-lab-overlay"></div>

            <div class="rgu-lab-card-content">
                <h4>${item.title}</h4>
            </div>

            <div class="rgu-lab-cta">
                DISCOVER MORE +
            </div>
        `;

        rdTrack.appendChild(card);

    });



    /* ================= SLIDER ================= */

    const rdCards = document.querySelectorAll(".rgu-lab-card");

    if (rdTrack && rdCards.length > 0) {

        let rdAutoScroll;

        function getScrollAmount() {
            return rdCards[0].offsetWidth + 48;
        }

        function moveSlide(direction) {

            if (direction === "next") {

                if (rdTrack.scrollLeft + rdTrack.clientWidth >= rdTrack.scrollWidth - 10) {

                    rdTrack.scrollTo({
                        left: 0,
                        behavior: "smooth"
                    });

                } else {

                    rdTrack.scrollBy({
                        left: getScrollAmount(),
                        behavior: "smooth"
                    });

                }

            }

            else if (direction === "prev") {

                if (rdTrack.scrollLeft <= 0) {

                    rdTrack.scrollTo({
                        left: rdTrack.scrollWidth,
                        behavior: "smooth"
                    });

                } else {

                    rdTrack.scrollBy({
                        left: -getScrollAmount(),
                        behavior: "smooth"
                    });

                }

            }

        }



        /* BUTTON EVENTS */

        rdNextBtn?.addEventListener("click", () => {
            moveSlide("next");
            resetAuto();
        });

        rdPrevBtn?.addEventListener("click", () => {
            moveSlide("prev");
            resetAuto();
        });



        /* AUTO SLIDE */

        function startAuto() {

            rdAutoScroll = setInterval(() => {
                moveSlide("next");
            }, 3500);

        }

        function resetAuto() {

            clearInterval(rdAutoScroll);
            startAuto();

        }



        /* HOVER PAUSE */

        rdTrack.addEventListener("mouseenter", () => clearInterval(rdAutoScroll));
        rdTrack.addEventListener("mouseleave", startAuto);



        startAuto();

    }

});

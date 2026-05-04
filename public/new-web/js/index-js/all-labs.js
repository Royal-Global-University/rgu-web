document.addEventListener("DOMContentLoaded", () => {

    /* ================= RESEARCH DATA ================= */

    const researchData = [
        {
            img: "/new-web/assets/labs/architecture.png",
            title: "Architecture Lab",
            link: "https://rgu.ac/lab-architecture",
        },

        {
            img: "/new-web/assets/labs/biochem.png",
            title: "Biochemistry Lab",
            link: "https://rgu.ac/lab-bio-chemistry",
        },

        {
            img: "/new-web/assets/labs/bioscience-research-lab.png",
            title: "Bioscience Research Lab",
            link: "https://rgu.ac/lab-bioscience-research",
        },

        {
            img: "/new-web/assets/labs/biotech-lab.png",
            title: "Biotechnology Lab",
            link: "https://rgu.ac/lab-biotech",
        },
        {
            img: "/new-web/assets/labs/botany.png",
            title: "Botany Lab",
            link: "https://rgu.ac/lab-botany",
        },
        {
            img: "/new-web/assets/labs/chemistry.png",
            title: "Chemistry Lab",
            link: "https://rgu.ac/lab-chemistry",
        },
        {
            img: "/new-web/assets/labs/civil-engg-lab.png",
            title: "Civil Engineering Lab",
            link: "https://rgu.ac/lab-civilengineering",
        },
        {
            img: "/new-web/assets/labs/computer-lab.png",
            title: "Computer Lab",
            link: "https://rgu.ac/lab-computer",
        },
        {
            img: "/new-web/assets/labs/diagnostic.png",
            title: "Diagonastic Lab",
            link: "https://rgu.ac/lab-diagnostic",
        },
        {
            img: "/new-web/assets/labs/electrical.png",
            title: "Electrical Lab",
            link: "https://rgu.ac/lab-electrical",
        },
        {
            img: "/new-web/assets/labs/electronic.png",
            title: "Electronic Lab",
            link: "https://rgu.ac/lab-electronic",
        },
        {
            img: "/new-web/assets/labs/engineeringdrawing.png",
            title: "Engineering Drawing Lab",
            link: "https://rgu.ac/lab-engineering_drawing",
        },
        {
            img: "/new-web/assets/labs/ev.jpeg",
            title: "Electric Vehicle Lab",
            link: "https://rgu.ac/lab-ev-lab",
        },
        {
            img: "/new-web/assets/labs/foodtech.png",
            title: "Food Technology Lab",
            link: "https://rgu.ac/lab-foodteach",
        },
        {
            img: "/new-web/assets/labs/forensic.png",
            title: "Forensic Lab",
            link: "https://rgu.ac/lab-forensic-lab",
        },
        {
            img: "/new-web/assets/labs/hotelmanagement.png",
            title: "Hotel Management Lab",
            link: "https://rgu.ac/lab-hotelmanagement",
        },
        {
            img: "/new-web/assets/labs/interior.png",
            title: "Interior Designing Lab",
            link: "https://rgu.ac/lab-interior",
        },
        {
            img: "/new-web/assets/labs/language.png",
            title: "Language Lab",
            link: "https://rgu.ac/lab-language-lab",
        },
        {
            img: "/new-web/assets/labs/mechanical-engg.png",
            title: "Mechanical Lab",
            link: "https://rgu.ac/lab-mechanical",
        },
        {
            img: "/new-web/assets/labs/microbio.png",
            title: "Microbiology Lab",
            link: "https://rgu.ac/lab-microbiology",
        },
        {
            img: "/new-web/assets/labs/nursing.png",
            title: "Nursing Lab",
            link: "https://rgu.ac/lab-nursing",
        },
        {
            img: "/new-web/assets/labs/observe.jpeg",
            title: "Royal Observatory",
            link: "https://rgu.ac/lab-astronomy",
        },
        {
            img: "/new-web/assets/labs/operation.png",
            title: "Operation Theatre Lab",
            link: "https://rgu.ac/lab-operation_theater",
        },
        {
            img: "/new-web/assets/labs/optometry.png",
            title: "Optometry Lab",
            link: "https://rgu.ac/lab-optometry",
        },
        {
            img: "/new-web/assets/labs/pharmacy.png",
            title: "Pharmacutical Lab",
            link: "https://rgu.ac/lab-pharmacy",
        },
        {
            img: "/new-web/assets/labs/physics.png",
            title: "Physics Lab",
            link: "https://rgu.ac/lab-physics",
        },
        {
            img: "/new-web/assets/labs/physiotherapy.png",
            title: "Physiotherapy Lab",
            link: "https://rgu.ac/lab-physiotherapy",
        },
        {
            img: "/new-web/assets/labs/radiology.png",
            title: "Radiology Lab",
            link: "https://rgu.ac/lab-radiography",
        },
        {
            img: "/new-web/assets/labs/zoology.png",
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

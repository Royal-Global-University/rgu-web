document.addEventListener("DOMContentLoaded", () => {

    const events = [
        // {
        //     day: "10<sup>th</sup>",
        //     month: "Mar 2026",
        //     img: "https://rgu.ac/mobile-assets/conference/bg.jpeg",
        //     title: "ICSSR Project Positions at The Assam Royal Global University",
        //     sub: "Project Title: Negotiating Power and Gendered Citizenship: A Sociological Analysis of Political Participation and Grassroots Leadership among SHG Women in Panchayati Raj Institutions in Selected Districts of Lower Assam.",
        //     link: "https://rgu.ac/icssr-project-positions-at-rgu",
        // },
        // {
        //     day: "16<sup>th</sup> - 20<sup>th</sup>",
        //     month: "March 2026",
        //     img: "https://rgu.ac/five-days-conference/hero-img.jpg",
        //     title: "Five-Day International Workshop",
        //     sub: "Developing Emotional Intelligence, Academic Research and Teaching",
        //     link: "https://rgu.ac/developing-emotional-intelligence-academic-research-and-teaching",
        // },
        {
            day: "13<sup>th</sup> - 14<sup>th</sup>",
            month: "Nov 2026",
            img: "https://rgu.ac/mobile-assets/conference/bg2.png",
            title: "The International Conference on Emerging Trends and Innovations in Engineering and Data Science (ICETIEDS–2026)",
            sub: "Flagship global event hosted by the Royal School of Engineering and Technology, The Assam Royal Global University",
            link: "https://rgu.ac/ICETIEDS%E2%80%932026",
        },
    ];

        const desktopContainer = document.getElementById("desktopEvents");
        const mobileTabs = document.getElementById("mobileTabs");
        const mobileCard = document.getElementById("mobileEventCard");



            /* ================= DESKTOP ================= */

            events.forEach((e, i) => {

                const card = document.createElement("a");

        card.className = "rgu-next-card";
        if (i === 0) card.classList.add("is-active");

        card.href = e.link;

        card.innerHTML = `
        <div class="rgu-next-bg" style="background-image:url('${e.img}')"></div>

        <div class="rgu-next-overlay"></div>

        <div class="rgu-next-orange">
            <h3>${e.day}</h3>
            <p>${e.month}</p>
        </div>

        <div class="rgu-next-content">
            <h4>${e.title}</h4>
            <div class="rgu-next-line"></div>
            <span>${e.sub}</span>
        </div>

        <div class="rgu-next-small-date">
            <span>${e.day}</span>
            <p>${e.month}</p>
        </div>
        `;

        desktopContainer.appendChild(card);

            });


        /* DESKTOP HOVER */

        const desktopCards = document.querySelectorAll(".rgu-next-card");

            desktopCards.forEach(card => {
            card.addEventListener("mouseenter", function () {
                desktopCards.forEach(c => c.classList.remove("is-active"));
                this.classList.add("is-active");
            });
            });



            /* ================= MOBILE ================= */

            events.forEach((e, i) => {

                const tab = document.createElement("div");

        tab.className = "rgu-next-tab";
        if (i === 0) tab.classList.add("active");

        tab.dataset.event = i;

        tab.innerHTML = `
        <span>${e.day}</span>
        <small>${e.month}</small>
        `;

        mobileTabs.appendChild(tab);

            });


        /* INITIAL MOBILE CARD */

        mobileCard.style.backgroundImage = `url(${events[0].img})`;

        mobileCard.innerHTML = `
        <a href="${events[0].link}" style="text-decoration:none;color:white;">
            <div class="rgu-next-event-content">
                <h4>${events[0].title}</h4>
                <div class="rgu-next-event-line"></div>
                <span>${events[0].sub}</span>
            </div>
        </a>
        `;



            /* MOBILE TAB SWITCH */

            document.querySelectorAll(".rgu-next-tab").forEach(tab => {

            tab.onclick = () => {

                document.querySelectorAll(".rgu-next-tab").forEach(t => t.classList.remove("active"));

                tab.classList.add("active");

                const e = events[tab.dataset.event];

                mobileCard.style.backgroundImage = `url(${e.img})`;

                mobileCard.innerHTML = `
<a href="${e.link}" style="text-decoration:none;color:white;">
<div class="rgu-next-event-content">
<h4>${e.title}</h4>
<div class="rgu-next-event-line"></div>
<span>${e.sub}</span>
</div>
</a>
`;

            };

            });

        });

         /* ================= 5. WHAT'S NEXT EVENTS TABBING ================= */
    const eventCards = document.querySelectorAll(".rgu-next-card");
    eventCards.forEach(card => {
        card.addEventListener("mouseenter", function () {
            eventCards.forEach(c => c.classList.remove("is-active"));
            this.classList.add("is-active");
        });
    });

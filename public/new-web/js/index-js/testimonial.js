/* ================= TESTIMONIAL DATA ================= */

const rguTestimonials = {
    student: [
        {
            img: "new-web/assets/img/index/testimonial/1.png",
            text: "I take immense pride in identifying Assam Royal Global University as my alma mater. I completed my Bachelor of Science in Behavioral and Allied Sciences at the Royal School of Biosciences, graduating in 2023. After this achievement, I chose to advance my education in the vibrant field of business, moving to the capital to enhance my knowledge in Behavioral and Allied Sciences. Currently, I serve as a Research Analyst at Georgian College in Ontario, Canada.",
            name: "Maibam Noonny Khuman",
            role: "Royal School Of Biosciences | Associated as Research Analyst with Georgian College Ontario, Canada",
        },

        {
            img: "new-web/assets/img/index/testimonial/2.png",
            text: "My experience at The Royal Global Institute was both unique and transformative, profoundly influencing my academic and personal development. The university’s diverse curriculum, with a strong focus on practical application, enabled me to immerse myself in my field while also exploring interdisciplinary topics. The faculty, who were not only experts in their respective areas but also approachable, created a nurturing environment that encouraged open dialogue and critical thinking.",
            name: "Ripunjit Borah",
            role: "Royal School of Business | Asst. Vice President at HDFC Bank, Guwahati.",
        },

        {
            img: "new-web/assets/img/index/testimonial/3.png",
            text: "An alumnus of the Royal Group of Institutions, now recognized as The Royal Global University in Guwahati, Assam. It is my pleasure to share my professional journey with you. Presently, I hold the position of Research Scientist in the Research and Development department at Siemens Technology and Services Private Limited. I earned my Ph.D. from IIT Kharagpur after completing my undergraduate studies at The Assam Royal Global University.",
            name: "Dr. Pallav Kumar Deb",
            role: "Royal School of Engineering & Technology | Research Scientist in R&D at Siemens Technology and Services Private Limited. Ph.D. from IIT Kharagpur.",
        },
        {
            img: "new-web/assets/img/index/testimonial/4.png",
            text: "I would like to express my heartfelt gratitude to the entire faculty and management of the institution. Your unwavering support and dedication have significantly contributed to my academic journey, and I am truly appreciative of the guidance and encouragement provided throughout my time here. The commitment to excellence and the nurturing environment you foster have made a profound impact on my personal and professional development.",
            name: "Upasana Kashyap",
            role: "Royal School of Engineering & Technology | Head of the Department of Civil Engineering and the Assistant Governor Student Welfare Department at Kaziranga University in Jorhat, Assam.",
        },
        {
            img: "new-web/assets/img/index/testimonial/5.png",
            text: "My tenure at the School of Pharmacy within the institute has been both enlightening and transformative. Throughout my time there, I have engaged in a comprehensive curriculum that has equipped me with a robust understanding of pharmaceutical sciences. The rigorous academic environment, combined with hands-on laboratory experiences, has allowed me to apply theoretical knowledge to practical situations, thereby enhancing my problem-solving skills.",
            name: "Sofiq Ahmad",
            role: "Royal School of Pharmacy | Founder of Goodlife Medicos, a startup operating under the MSME framework in Guwahati, India.",
        },
        {
            img: "new-web/assets/img/index/testimonial/6.png",
            text: "The diverse curriculum at the university, emphasizing practical application, allowed me to deeply engage with my field while also delving into interdisciplinary subjects. The faculty, recognized for their knowledge and approachability, fostered a supportive environment that promoted open dialogue and critical analysis. Additionally, the campus boasted outstanding facilities that facilitated research and teamwork. The vibrant student community enhanced my experience by providing ample opportunities for networking.",
            name: "BiproJyoti Bhattacharjee",
            role: "Royal School of Engineering & Technology | Senior Customer Service Associate Indian Bank",
        },

    ],

    recruiter: [
        {
            img: "new-web/assets/img/index/testimonial/1t.png",
            text: "RGU graduates show exceptional practical knowledge and adaptability.",
            name: "Anita Mehta",
            role: "HR Manager | Tech Solutions",
        },

        {
            img: "new-web/assets/img/index/testimonial/1t.png",
            text: "We consistently hire RGU students because of their strong industry readiness.",
            name: "Vikram Singh",
            role: "Director | Global Tech",
        },
    ],
};

/* ================= RENDER TESTIMONIALS ================= */

function renderTestimonials() {
    const studentTrack = document.querySelector(
        ".rgu-test-slider.student .rgu-test-track",
    );
    const recruiterTrack = document.querySelector(
        ".rgu-test-slider.recruiter .rgu-test-track",
    );

    function createCards(data, container) {
        container.innerHTML = "";

        data.forEach((item) => {
            const card = `
            <div class="rgu-test-card">
                <img src="${item.img}">
                <div>
                    <p>${item.text}</p>
                    <h4>${item.name}</h4>
                    <span>${item.role}</span>
                </div>
            </div>
            `;

            container.insertAdjacentHTML("beforeend", card);
        });
    }

    createCards(rguTestimonials.student, studentTrack);
    createCards(rguTestimonials.recruiter, recruiterTrack);
}

document.addEventListener("DOMContentLoaded", renderTestimonials);

/* ================= TESTIMONIAL TABS ================= */

const rguTabs = document.querySelectorAll(".rgu-test-tab");
const rguSliders = document.querySelectorAll(".rgu-test-slider");

rguTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        rguTabs.forEach((t) => t.classList.remove("active"));
        rguSliders.forEach((s) => s.classList.remove("active"));

        tab.classList.add("active");

        const target = tab.dataset.target;

        document
            .querySelector(`.rgu-test-slider.${target}`)
            .classList.add("active");
    });
});

/* ================= SLIDER ================= */

const testPrevBtn = document.querySelector(".rgu-test-prev");
const testNextBtn = document.querySelector(".rgu-test-next");

const testTracks = document.querySelectorAll(".rgu-test-track");

testTracks.forEach((track) => (track.dataset.currentIndex = 0));

function moveTestimonialSlide(direction) {
    const activeSlider = document.querySelector(".rgu-test-slider.active");
    if (!activeSlider) return;

    const activeTrack = activeSlider.querySelector(".rgu-test-track");
    const cards = activeSlider.querySelectorAll(".rgu-test-card");

    let index = parseInt(activeTrack.dataset.currentIndex);

    if (direction === "next") {
        index = index + 1 >= cards.length ? 0 : index + 1;
    }

    if (direction === "prev") {
        index = index - 1 < 0 ? cards.length - 1 : index - 1;
    }

    activeTrack.dataset.currentIndex = index;

    activeTrack.style.transform = `translateX(-${index * 100}%)`;
}

testNextBtn.addEventListener("click", () => moveTestimonialSlide("next"));
testPrevBtn.addEventListener("click", () => moveTestimonialSlide("prev"));

const items = document.querySelectorAll(".rgu-research-item");
const lightbox = document.getElementById("researchLightbox");
const lightboxImg = document.getElementById("lightboxImg");
const closeBtn = document.querySelector(".rgu-lightbox-close");

items.forEach(item => {
    item.addEventListener("click", () => {
        lightbox.style.display = "flex";
        lightboxImg.src = item.src;
    });
});

closeBtn.onclick = () => {
    lightbox.style.display = "none";
};

lightbox.onclick = (e) => {
    if(e.target === lightbox){
        lightbox.style.display = "none";
    }
};

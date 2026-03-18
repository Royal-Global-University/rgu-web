/* ================= 6. ACADEMICS TABBING ================= */
    const acadItems = document.querySelectorAll(".rgu-acad-item");
    const acadImage = document.getElementById("acadImage");
    const acadTitle = document.getElementById("acadTitle");
    const acadCard = document.getElementById("acadCard");
    let isAcadAnimating = false;

    acadItems.forEach(item => {
        item.addEventListener("click", () => {
            if (item.classList.contains("active") || isAcadAnimating) return;
            isAcadAnimating = true;

            acadItems.forEach(el => el.classList.remove("active"));
            item.classList.add("active");

            document.querySelectorAll('.rgu-acad-item i').forEach(icon => icon.remove());
            const icon = document.createElement('i');
            icon.className = 'bi bi-arrow-up-right';
            item.appendChild(icon);

            acadImage.classList.add("img-fade-out");
            acadTitle.style.opacity = "0";
            acadTitle.style.transform = "translateY(15px)";

            setTimeout(() => {
                acadImage.src = item.dataset.img;
                acadCard.href = item.dataset.link;
                acadTitle.textContent = item.dataset.title;

                acadImage.onload = () => {
                    acadImage.classList.remove("img-fade-out");
                    acadTitle.style.opacity = "1";
                    acadTitle.style.transform = "translateY(0)";
                    isAcadAnimating = false;
                };

                // Fallback
                setTimeout(() => {
                    acadImage.classList.remove("img-fade-out");
                    acadTitle.style.opacity = "1";
                    acadTitle.style.transform = "translateY(0)";
                    isAcadAnimating = false;
                }, 100);

            }, 400);
        });
    });
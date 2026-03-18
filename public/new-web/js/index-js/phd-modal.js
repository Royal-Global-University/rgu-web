/* ================= PHD MODAL (ISOLATED FILE) ================= */

(function () {

    const phdLink = document.getElementById("phdTrackerLink");
    const phdModal = document.getElementById("phdModal");
    const phdClose = document.getElementById("phdCloseModal");

    // If elements not found, exit safely
    if (!phdLink || !phdModal) return;

    // OPEN MODAL
    phdLink.addEventListener("click", function (e) {
        e.preventDefault();
        phdModal.classList.add("active");
        document.body.classList.add("phd-modal-open");
    });

    // CLOSE BUTTON
    if (phdClose) {
        phdClose.addEventListener("click", function () {
            closeModal();
        });
    }

    // OUTSIDE CLICK
    phdModal.addEventListener("click", function (e) {
        if (e.target === phdModal) {
            closeModal();
        }
    });

    // ESC KEY
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeModal();
        }
    });

    // CLOSE FUNCTION
    function closeModal() {
        phdModal.classList.remove("active");
        document.body.classList.remove("phd-modal-open");
    }

})();
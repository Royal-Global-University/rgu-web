document.addEventListener("DOMContentLoaded", () => {

    /* ======================================================
       HERO VIDEO
    ====================================================== */

    const heroVideo = document.getElementById("heroVideo");

    if (heroVideo) {
        heroVideo.addEventListener("loadeddata", () => {
            heroVideo.classList.add("loaded");
        });
    }


    /* ======================================================
       POPUP OVERLAY
    ====================================================== */

    const popup = document.getElementById("rguPopupOverlay");
    const closeBtn = document.getElementById("rguPopupClose");

    if (popup && closeBtn) {

        setTimeout(() => {
            popup.classList.add("active");
        }, 500);

        closeBtn.addEventListener("click", () => {
            popup.classList.remove("active");
        });

        popup.addEventListener("click", (e) => {
            if (e.target === popup) {
                popup.classList.remove("active");
            }
        });

    }


    /* ======================================================
       SCROLL TO TOP
    ====================================================== */

    const scrollToTopBtn = document.getElementById("unqRguFtrScrollBtn");

    if (scrollToTopBtn) {
        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }


    /* ======================================================
       GLOBAL SEARCH MODAL
    ====================================================== */

    const searchToggleBtn = document.getElementById("searchToggleBtn");
    const searchModal = document.getElementById("searchModal");
    const searchModalBg = document.getElementById("searchModalBg");
    const searchCloseBtn = document.getElementById("searchCloseBtn");
    const searchInput = document.getElementById("globalSearchInput");

    function openSearch() {

        if (!searchModal) return;

        searchModal.classList.add("active");
        document.body.style.overflow = "hidden";

        setTimeout(() => {
            if (searchInput) searchInput.focus();
        }, 300);

    }

    function closeSearch() {

        if (!searchModal) return;

        searchModal.classList.remove("active");
        document.body.style.overflow = "";

        setTimeout(() => {
            if (searchInput) searchInput.value = "";
        }, 400);

    }

    if (searchToggleBtn) searchToggleBtn.addEventListener("click", openSearch);
    if (searchCloseBtn) searchCloseBtn.addEventListener("click", closeSearch);
    if (searchModalBg) searchModalBg.addEventListener("click", closeSearch);

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && searchModal?.classList.contains("active")) {
            closeSearch();
        }
    });



    /* ======================================================
       DESKTOP MEGA MENU
    ====================================================== */

    const navItems = document.querySelectorAll(".nav-item.has-mega");
    const megaMenus = document.querySelectorAll(".mega-menu");

    let activeMenu = null;

    navItems.forEach(item => {

        const menuName = item.dataset.mega;
        const mega = document.getElementById("mega-" + menuName);

        item.addEventListener("mouseenter", () => {

            megaMenus.forEach(m => m.classList.remove("active"));

            if (mega) {
                mega.classList.add("active");
                activeMenu = mega;
            }

        });

    });


    megaMenus.forEach(menu => {

        menu.addEventListener("mouseenter", () => {
            menu.classList.add("active");
        });

        menu.addEventListener("mouseleave", () => {
            menu.classList.remove("active");
        });

    });


    const header = document.querySelector(".header");

    if (header) {
        header.addEventListener("mouseleave", () => {
            megaMenus.forEach(m => m.classList.remove("active"));
        });
    }



    /* ======================================================
       MEGA MENU INNER TAB SWITCH
    ====================================================== */

    const megaTriggers = document.querySelectorAll(".mega-trigger");

    megaTriggers.forEach(trigger => {

        trigger.addEventListener("mouseenter", () => {

            const parentMenu = trigger.closest(".mega-menu");

            const triggers = parentMenu.querySelectorAll(".mega-trigger");
            const contents = parentMenu.querySelectorAll(".mega-content");

            const target = trigger.dataset.target;

            triggers.forEach(t => t.classList.remove("active"));
            contents.forEach(c => c.classList.remove("active"));

            trigger.classList.add("active");

            const activeContent = parentMenu.querySelector(`[data-content="${target}"]`);

            if (activeContent) activeContent.classList.add("active");

        });

    });



    /* ======================================================
       DESKTOP HAMBURGER DROPDOWN
    ====================================================== */

    const menuToggle = document.getElementById("menuToggle");
    const menuDropdown = document.getElementById("menuDropdown");

    if (menuToggle && menuDropdown) {

        menuToggle.addEventListener("click", (e) => {

            e.stopPropagation();

            menuDropdown.classList.toggle("active");

        });

        document.addEventListener("click", (e) => {

            if (!menuDropdown.contains(e.target) && !menuToggle.contains(e.target)) {
                menuDropdown.classList.remove("active");
            }

        });

    }

    document.querySelectorAll(".dropdown-toggle").forEach(item => {
    item.addEventListener("click", function (e) {
        e.preventDefault();

        const parent = this.parentElement;

        document.querySelectorAll(".dropdown-item").forEach(el => {
            if (el !== parent) el.classList.remove("active");
        });

        parent.classList.toggle("active");
    });
});



    /* ======================================================
       MOBILE DRAWER MENU
    ====================================================== */

    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileDrawer = document.getElementById("mobileDrawer");

    if (mobileMenuBtn && mobileDrawer) {

        mobileMenuBtn.addEventListener("click", () => {

            mobileDrawer.classList.toggle("active");

            document.querySelector(".header").classList.toggle("menu-open");

        });

    }



    /* ======================================================
       MOBILE ACCORDION
    ====================================================== */

    const mobileAccItems = document.querySelectorAll(".m-acc-item");

    mobileAccItems.forEach(item => {

        const header = item.querySelector(".m-acc-header");

        header.addEventListener("click", () => {

            item.classList.toggle("active");

        });

    });


    const subAccItems = document.querySelectorAll(".m-sub-acc-item");

    subAccItems.forEach(item => {

        const header = item.querySelector(".m-sub-acc-header");

        header.addEventListener("click", () => {

            item.classList.toggle("active");

        });

    });



    /* ======================================================
       FOOTER ACCORDION
    ====================================================== */

    const footerSections = document.querySelectorAll(".unq-rgu-ftr-col");

    footerSections.forEach(section => {

        const heading = section.querySelector(".unq-rgu-ftr-heading");

        heading.addEventListener("click", () => {

            if (window.innerWidth > 768) return;

            footerSections.forEach(other => {

                if (other !== section) {

                    other.classList.remove("active");

                    const icon = other.querySelector(".footer-toggle");
                    if (icon) icon.textContent = "+";

                }

            });

            const icon = section.querySelector(".footer-toggle");

            if (section.classList.contains("active")) {

                section.classList.remove("active");
                if (icon) icon.textContent = "+";

            } else {

                section.classList.add("active");
                if (icon) icon.textContent = "−";

            }

        });

    });

});
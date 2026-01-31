@extends('frontend.master')
@section('content')
    <div class="body">
        <style>
            /* --- 1. GLOBAL & RESET --- */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .body {
                font-family: "Montserrat", sans-serif;
                background-color: #f4f4f4;
                font-size: 16px;
                overflow-x: hidden;
            }

            a {
                text-decoration: none;
                color: inherit;
            }

            ul {
                list-style: none;
            }

            img {
                display: block;
                max-width: 100%;
            }

            /* --- 2. VIEW SWITCHING LOGIC --- */
            .urd_mobile_view_wrapper {
                display: none;
            }

            .urd_desktop_view_wrapper {
                display: block;
            }

            @media (max-width: 992px) {
                .urd_desktop_view_wrapper {
                    display: none;
                }

                .urd_mobile_view_wrapper {
                    display: block;
                }
            }

            /* --- 5. HERO SECTION --- */
            /* Updated: Margin removed since header is gone */
            .urd_hero_banner {
                position: relative;
                width: 100%;
                margin-top: 0;
            }

            .urd_mobile_view_wrapper .urd_hero_banner {
                margin-top: 0;
            }

            .urd_hero_image {
                width: 100%;
                height: auto;
                object-fit: cover;
            }

            /* --- 6. ECOSYSTEM ANIMATION STYLES (SHARED & ADAPTED) --- */
            .urd_ecosystem_wrapper {
                background-image: url("mobile-assets/research-development-new/bg.svg");
                background-size: cover;
                padding: 50px 0;
                overflow: hidden;
            }

            .urd_eco_flex_container {
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 2vw;
                max-width: 1400px;
                margin: 0 auto;
            }

            .urd_eco_col_group {
                display: flex;
                flex-direction: column;
                gap: 20px;
                z-index: 2;
            }

            .urd_eco_center_visual {
                width: 35vw;
                max-width: 450px;
                z-index: 1;
            }

            .urd_eco_floating_card {
                width: 22vw;
                max-width: 300px;
                transition:
                    transform 0.6s ease,
                    opacity 0.6s ease;
                opacity: 0;
                transform: scale(0.8);
            }

            /* Desktop Animation Classes */
            .urd_ecosystem_wrapper.urd_anim_in_view .urd_eco_floating_card {
                opacity: 1;
                transform: scale(1);
            }

            .urd_ecosystem_wrapper.urd_anim_in_view .urd_eco_col_group:first-child .urd_eco_floating_card:nth-child(2) {
                transform: translateX(-20px);
            }

            .urd_ecosystem_wrapper.urd_anim_in_view .urd_eco_col_group:last-child .urd_eco_floating_card:nth-child(2) {
                transform: translateX(20px);
            }

            /* Mobile Ecosystem Adaptations */
            .urd_mob_eco_container {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 30px;
                padding: 20px;
            }

            .urd_mob_eco_container .urd_eco_center_visual {
                width: 80%;
                max-width: 300px;
            }

            .urd_mob_eco_grid_layout {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 15px;
                width: 100%;
            }

            .urd_mob_eco_grid_layout img {
                width: 100%;
                opacity: 1;
                transform: none;
            }

            /* --- 7. TABS (DESKTOP) --- */
            .urd_tabs_section_area {
                padding: 60px 0;
                background-color: #152848;
                color: #fff;
                min-height: 80vh;
            }

            .urd_tabs_header_title {
                text-align: center;
                margin-bottom: 40px;
            }

            .urd_tabs_header_title h2 {
                font-size: 40px;
            }

            .urd_tabs_header_title span {
                color: #ef991f;
            }

            .urd_tabs_nav_container {
                display: flex;
                justify-content: center;
                gap: 15px;
                flex-wrap: wrap;
                margin-bottom: 30px;
            }

            .urd_tab_control_btn {
                padding: 12px 25px;
                border-radius: 30px;
                background: rgba(255, 255, 255, 0.1);
                color: #fff;
                border: 1px solid rgba(255, 255, 255, 0.2);
                cursor: pointer;
                transition: 0.3s;
                font-family: inherit;
                font-weight: 600;
            }

            .urd_tab_control_btn.urd_tab_active,
            .urd_tab_control_btn:hover {
                background: #ef991f;
                border-color: #ef991f;
                color: #1a3258;
            }

            .urd_tab_content_box {
                background: #fff;
                color: #333;
                max-width: 1200px;
                margin: 0 auto;
                border-radius: 12px;
                padding: 40px;
                min-height: 300px;
            }

            .urd_tab_pane_item {
                display: none;
                animation: urd_fadeIn 0.5s;
            }

            .urd_tab_pane_item.urd_tab_active {
                display: block;
            }

            .urd_pane_inner_flex {
                display: flex;
                gap: 40px;
                align-items: start;
            }

            .urd_pane_text_content {
                flex: 1;
            }

            .urd_pane_text_content h3 {
                color: #1a3258;
                margin-bottom: 15px;
                border-bottom: 2px solid #ef991f;
                display: inline-block;
            }

            .urd_pane_text_content p {
                margin-bottom: 20px;
                line-height: 1.6;
                text-align: justify;
            }

            .urd_view_details_btn {
                display: inline-block;
                padding: 10px 20px;
                background: #ef991f;
                color: #fff;
                border-radius: 8px;
                font-weight: bold;
            }

            .urd_pane_img_holder {
                flex: 1;
            }

            .urd_pane_img_holder img {
                border-radius: 8px;
                width: 100%;
            }

            @keyframes urd_fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* --- 8. ACCORDION (MOBILE FACILITIES) --- */
            .urd_mob_facilities_area {
                background-color: #1a3258;
                padding: 40px 20px;
            }

            .urd_accordion_unit {
                background: #fff;
                margin-bottom: 10px;
                border-radius: 8px;
                overflow: hidden;
            }

            .urd_acc_head_trigger {
                padding: 15px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-weight: 700;
                color: #1a3258;
                cursor: pointer;
            }

            .urd_acc_body_content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
                padding: 0 20px;
            }

            .urd_acc_body_content.urd_acc_open {
                padding-bottom: 20px;
            }

            .urd_acc_body_content p {
                font-size: 14px;
                margin-bottom: 15px;
                color: #333;
                line-height: 1.5;
            }

            .urd_acc_body_content img {
                border-radius: 8px;
                margin-bottom: 10px;
            }

            /* --- 9. SCROLLERS (SHARED) --- */
            .urd_scroller_section {
                background-color: #1a3258;
                padding: 50px 0;
                overflow: hidden;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .urd_section_main_title {
                text-align: center;
                color: #fff;
                font-size: 32px;
                font-weight: 700;
                margin-bottom: 40px;
                padding: 0 20px;
            }

            .urd_section_main_title span {
                color: #ef991f;
            }

            .urd_marquee_track {
                display: flex;
                width: fit-content;
                animation: urd_scrollLeft 80s linear infinite;
            }

            .urd_marquee_reverse_track {
                animation: urd_scrollRight 40s linear infinite;
            }

            .urd_marquee_element {
                flex-shrink: 0;
                margin: 0 10px;
                border-radius: 8px;
                overflow: hidden;
                border: 2px solid #fff;
                cursor: pointer;
                transition: transform 0.3s;
            }

            .urd_marquee_element:hover {
                transform: scale(1.05);
            }

            /* Desktop Sizes */
            .urd_desktop_view_wrapper .urd_marquee_element {
                width: 750px;
                height: 420px;
            }

            .urd_desktop_view_wrapper .urd_marquee_element.urd_book_ratio {
                width: 400px;
                height: 500px;
            }

            /* Mobile Sizes */
            .urd_mobile_view_wrapper .urd_marquee_element {
                width: 200px;
                height: 140px;
            }

            .urd_mobile_view_wrapper .urd_marquee_element.urd_book_ratio {
                width: 140px;
                height: 200px;
            }

            .urd_marquee_element img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            @keyframes urd_scrollLeft {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-50%);
                }
            }

            @keyframes urd_scrollRight {
                0% {
                    transform: translateX(-50%);
                }

                100% {
                    transform: translateX(0);
                }
            }

            /* --- 10. LIGHTBOX (GLOBAL) --- */
            .urd_global_lightbox {
                display: none;
                position: fixed;
                z-index: 2000;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.9);
            }

            .urd_lightbox_inner_img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
            }

            .urd_close_lb_btn {
                position: absolute;
                top: 20px;
                right: 30px;
                color: #fff;
                font-size: 40px;
                cursor: pointer;
            }
        </style>

        <style>
            /* --- 11. QUICK LINKS SECTION (FULL & FIXED) --- */
            .urd_quick_links_area {
                padding: 60px 20px;
                background-color: #fff;
                text-align: center;
            }

            .urd_ql_grid_container {
                max-width: 1000px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                /* Exactly 4 buttons per row */
                gap: 20px;
            }

            /* Common Button Style */
            .urd_qlink_button {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 15px 10px;
                background-color: #1a3258;
                color: #fff;
                font-weight: 600;
                border-radius: 8px;
                transition: all 0.3s ease;
                text-transform: uppercase;
                font-size: 14px;
                border: 2px solid #1a3258;
                cursor: pointer;
                width: 100%;
                position: relative;
                /* Needed for z-index layering */
            }

            .urd_qlink_button:hover {
                background-color: #ef991f;
                border-color: #ef991f;
                color: #1a3258;
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(239, 153, 31, 0.3);
            }

            /* --- DROPDOWN LOGIC --- */

            /* The Container (5th item) */
            .urd_ql_dropdown_wrapper {
                position: relative;
                width: 100%;
            }

            /* The Menu (Hidden by default) */
            .urd_ql_dropdown_list {
                display: none;
                position: absolute;
                bottom: 100%;
                /* Positions menu ABOVE the button */
                left: 0;
                width: 100%;
                background-color: #fff;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                z-index: 100;

                /* This creates the visual gap between button and menu */
                margin-bottom: 15px;
                padding: 0;
                border: 1px solid #eee;
            }

            /* THE FIX: The Invisible Bridge
               This creates a transparent block that fills the empty space (margin)
               so the mouse doesn't "fall" into the gap. */
            .urd_ql_dropdown_list::after {
                content: "";
                position: absolute;
                left: 0;
                width: 100%;
                height: 20px;
                /* Height of the bridge */
                bottom: -20px;
                /* Positions it hanging off the bottom of the menu */
                background: transparent;
                /* Invisible */
            }

            /* Show menu on hover */
            .urd_ql_dropdown_wrapper:hover .urd_ql_dropdown_list {
                display: block;
                animation: urd_fadeInUp 0.3s forwards;
            }

            /* Dropdown Links */
            .urd_ql_dropdown_list a {
                display: block;
                padding: 12px;
                color: #1a3258;
                border-bottom: 1px solid #eee;
                font-size: 13px;
                font-weight: 600;
                transition: 0.2s;
                text-align: left;
                text-decoration: none;
            }

            .urd_ql_dropdown_list a:last-child {
                border-bottom: none;
            }

            .urd_ql_dropdown_list a:hover {
                background-color: #ef991f;
                color: #fff;
            }

            /* Simple Animation for smoother appearance */
            @keyframes urd_fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* --- RESPONSIVE --- */
            @media (max-width: 768px) {
                .urd_ql_grid_container {
                    grid-template-columns: repeat(2, 1fr);
                    /* 2 per row on tablets */
                }
            }

            @media (max-width: 480px) {
                .urd_ql_grid_container {
                    grid-template-columns: 1fr;
                    /* 1 per row on mobile */
                }

                /* Reset Dropdown for Mobile (Optional: make it drop DOWN instead of UP on mobile) */
                .urd_ql_dropdown_list {
                    bottom: auto;
                    top: 100%;
                    margin-bottom: 0;
                    margin-top: 10px;
                }

                /* Move the bridge to the top for mobile downward dropdown */
                .urd_ql_dropdown_list::after {
                    bottom: auto;
                    top: -20px;
                }
            }
        </style>

        <div class="urd_desktop_view_wrapper">
            @include('frontend/components/aheader')
            <main>
                <section class="urd_hero_banner">
                    <img src="mobile-assets/research-development-new/research-head.png" class="urd_hero_image"
                        alt="Research Head" />
                </section>

                <section class="urd_ecosystem_wrapper" id="urd_eco_trigger_desktop">
                    <div class="urd_eco_flex_container">
                        <div class="urd_eco_col_group">
                            <img src="mobile-assets/research-development/ecosystem/new-eco/a12.png"
                                class="urd_eco_floating_card" alt="Stat A" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/b1.png"
                                class="urd_eco_floating_card" alt="Stat B" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/c1.png"
                                class="urd_eco_floating_card" alt="Stat C" />
                        </div>
                        <img src="mobile-assets/research-development-new/ecosystem/center.png" class="urd_eco_center_visual"
                            alt="Ecosystem Center" />
                        <div class="urd_eco_col_group">
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/d1.png"
                                class="urd_eco_floating_card" alt="Stat D" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/e1.png"
                                class="urd_eco_floating_card" alt="Stat E" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/f1.png"
                                class="urd_eco_floating_card" alt="Stat F" />
                        </div>
                    </div>
                </section>

                <section class="urd_scroller_section">
                    <div class="urd_section_main_title">
                        Few High-Impact Scopus <span>Q1–Q2 Publications (2024–2025)</span>
                    </div>
                    <div class="urd_marquee_track" id="urd_scopus_marquee_desktop">
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s1.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s2.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s3.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s4.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s5.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                    </div>
                </section>

                <section class="urd_scroller_section">
                    <div class="urd_section_main_title">
                        Journals <span>Published at RGU</span>
                    </div>
                    <div class="urd_marquee_track urd_marquee_reverse_track" id="urd_journals_marquee_desktop">
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-1.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-2.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-3.png"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-4.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-5.jpeg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                    </div>
                </section>

                <section class="urd_quick_links_area">
                    <div class="urd_section_main_title" style="color: #1a3258 !important">
                        Quick <span>Links</span>
                    </div>

                    <div class="urd_ql_grid_container">
                        <a href="https://www.rgu.ac/research-preamble" class="urd_qlink_button">Preamble of Research</a>
                        <a href="https://www.rgu.ac/research-r&d-team" class="urd_qlink_button">R&D Team</a>
                        <a href="https://www.rgu.ac/research-department" class="urd_qlink_button">Research at RGU</a>
                        <a href="https://www.rgu.ac/research-publication" class="urd_qlink_button">Publications</a>

                        <div class="urd_ql_dropdown_wrapper">
                            <div class="urd_qlink_button">
                                Projects &nbsp; <i class="fas fa-caret-up"></i>
                            </div>

                            <div class="urd_ql_dropdown_list">
                                <a href="https://www.rgu.ac/research-extramural">Extramurel Projects</a>
                                <a href="https://www.rgu.ac/research-seed-grants-projects">RGU Seed Grant</a>
                                <a href="https://www.rgu.ac/research-consultancy-projects">Consultancy Projects</a>
                            </div>
                        </div>

                        <a href="https://www.rgu.ac/research-patents" class="urd_qlink_button">Patents</a>
                        <a href="https://www.rgu.ac/research-csif" class="urd_qlink_button">CSIF</a>
                        <a href="https://www.rgu.ac/research-policies&ethics" class="urd_qlink_button">Policies and
                            Ethics</a>
                    </div>
                </section>
            </main>
        </div>

        <div class="urd_mobile_view_wrapper">
            @include('frontend/components/mobileheader')
            <main>
                <section class="urd_hero_banner" style="padding-top: 100px;">
                    <img src="mobile-assets/research-development-new/research-head.png" class="urd_hero_image"
                        alt="Research Head" />
                </section>

                <section class="urd_ecosystem_wrapper">
                    <div class="urd_mob_eco_container">
                        <img src="mobile-assets/research-development-new/ecosystem/center.png" class="urd_eco_center_visual"
                            alt="Center" />
                        <div class="urd_mob_eco_grid_layout">
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/a1.png" alt="Stat" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/b1.png" alt="Stat" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/c1.png" alt="Stat" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/d1.png" alt="Stat" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/e1.png" alt="Stat" />
                            <img src="mobile-assets/research-development-new/ecosystem/new-eco/f1.png" alt="Stat" />
                        </div>
                    </div>
                </section>

                <section class="urd_scroller_section">
                    <div class="urd_section_main_title" style="font-size: 26px">
                        Scopus <span>Publications</span>
                    </div>
                    <div class="urd_marquee_track" id="urd_scopus_marquee_mobile">
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s1.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s2.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s3.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s4.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element">
                            <img src="mobile-assets/research-development-new/new-scopus/s5.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                    </div>
                </section>

                <section class="urd_scroller_section">
                    <div class="urd_section_main_title" style="font-size: 26px">
                        Journals <span>at RGU</span>
                    </div>
                    <div class="urd_marquee_track urd_marquee_reverse_track" id="urd_journals_marquee_mobile">
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-1.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-2.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-3.png"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-4.jpg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                        <div class="urd_marquee_element urd_book_ratio">
                            <img src="mobile-assets/research-development-new/journals/book-5.jpeg"
                                onclick="urd_openLightbox(this.src)" />
                        </div>
                    </div>
                </section>

                <section class="urd_quick_links_area">
                    <div class="urd_section_main_title" style="color: #1a3258 !important">
                        Quick <span>Links</span>
                    </div>

                    <div class="urd_ql_grid_container">
                        <a href="https://www.rgu.ac/research-preamble" class="urd_qlink_button">Preamble of Research</a>
                        <a href="https://www.rgu.ac/research-r&d-team" class="urd_qlink_button">R&D Team</a>
                        <a href="https://www.rgu.ac/research-department" class="urd_qlink_button">Research at RGU</a>
                        <a href="https://www.rgu.ac/research-publication" class="urd_qlink_button">Publications</a>

                        <div class="urd_ql_dropdown_wrapper">
                            <div class="urd_qlink_button">
                                Projects &nbsp; <i class="fas fa-caret-up"></i>
                            </div>

                            <div class="urd_ql_dropdown_list">
                                <a href="https://www.rgu.ac/research-extramural">Extramurel Projects</a>
                                <a href="https://www.rgu.ac/research-seed-grants-projects">RGU Seed Grant</a>
                                <a href="https://www.rgu.ac/research-consultancy-projects">Consultancy Projects</a>
                            </div>
                        </div>

                        <a href="https://www.rgu.ac/research-patents" class="urd_qlink_button">Patents</a>
                        <a href="https://www.rgu.ac/research-csif" class="urd_qlink_button">CSIF</a>
                        <a href="https://www.rgu.ac/research-policies&ethics" class="urd_qlink_button">Policies and
                            Ethics</a>
                    </div>
                </section>
            </main>
        </div>

        <div id="urd_globalLightbox" class="urd_global_lightbox" onclick="urd_closeLightbox(event)">
            <span class="urd_close_lb_btn" onclick="urd_closeLightbox(event)">&times;</span>
            <img id="urd_lightboxImg" class="urd_lightbox_inner_img" src="" alt="Zoomed Image" />
        </div>

        <script>
            // --- 1. Desktop Tabs Logic ---
            const urd_tabBtns = document.querySelectorAll(".urd_tab_control_btn");
            const urd_tabPanes = document.querySelectorAll(".urd_tab_pane_item");

            urd_tabBtns.forEach((btn) => {
                btn.addEventListener("click", () => {
                    // Remove active class from all
                    urd_tabBtns.forEach((b) => b.classList.remove("urd_tab_active"));
                    urd_tabPanes.forEach((p) => p.classList.remove("urd_tab_active"));

                    // Add active class to clicked
                    btn.classList.add("urd_tab_active");
                    const urd_target = btn.getAttribute("data-urd-target");
                    document.getElementById(urd_target).classList.add("urd_tab_active");
                });
            });

            // --- 2. Mobile Accordion Logic ---
            function urd_toggleAccordion(header) {
                const urd_content = header.nextElementSibling;
                const urd_icon = header.querySelector("i");

                // Close others (Optional - remove this block if you want multiple open)
                document.querySelectorAll(".urd_acc_body_content").forEach((c) => {
                    if (c !== urd_content) {
                        c.style.maxHeight = null;
                        c.classList.remove("urd_acc_open");
                        c.previousElementSibling
                            .querySelector("i")
                            .classList.remove("fa-chevron-up");
                        c.previousElementSibling
                            .querySelector("i")
                            .classList.add("fa-chevron-down");
                    }
                });

                if (urd_content.style.maxHeight) {
                    urd_content.style.maxHeight = null;
                    urd_content.classList.remove("urd_acc_open");
                    urd_icon.classList.remove("fa-chevron-up");
                    urd_icon.classList.add("fa-chevron-down");
                } else {
                    urd_content.style.maxHeight = urd_content.scrollHeight + "px";
                    urd_content.classList.add("urd_acc_open");
                    urd_icon.classList.remove("fa-chevron-down");
                    urd_icon.classList.add("fa-chevron-up");
                }
            }

            // --- 3. Ecosystem Animation Trigger (Desktop) ---
            const urd_ecoSection = document.getElementById(
                "urd_eco_trigger_desktop",
            );
            const urd_observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            urd_ecoSection.classList.add("urd_anim_in_view");
                        }
                    });
                }, {
                    threshold: 0.3,
                },
            );

            if (urd_ecoSection) urd_observer.observe(urd_ecoSection);

            // --- 4. Infinite Scroll Duplication Logic ---
            function urd_duplicateMarquee(id) {
                const urd_wrapper = document.getElementById(id);
                if (urd_wrapper) {
                    const urd_content = urd_wrapper.innerHTML;
                    urd_wrapper.innerHTML = urd_content + urd_content; // Duplicate items for smooth loop
                }
            }

            urd_duplicateMarquee("urd_scopus_marquee_desktop");
            urd_duplicateMarquee("urd_journals_marquee_desktop");
            urd_duplicateMarquee("urd_scopus_marquee_mobile");
            urd_duplicateMarquee("urd_journals_marquee_mobile");

            // --- 5. Lightbox Logic ---
            const urd_lightbox = document.getElementById("urd_globalLightbox");
            const urd_lbImg = document.getElementById("urd_lightboxImg");

            function urd_openLightbox(src) {
                urd_lbImg.src = src;
                urd_lightbox.style.display = "block";
            }

            function urd_closeLightbox(e) {
                if (e.target !== urd_lbImg) {
                    urd_lightbox.style.display = "none";
                }
            }
        </script>
    </div>
@endsection

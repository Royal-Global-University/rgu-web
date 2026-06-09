@extends('frontend/new-master')
@section('content')
    <section class="pg-hero">
        <div class="pg-hero-bg"
            style="background-image:url('/new-web/assets/img/discover-RGU-clubs/coverimg.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title"> University Clubs</h1>
            <div class="pg-hero-breadcrumb">
                Campus/ Student Life & Engagement / University Clubs
            </div>
        </div>

    </section>

    <section>
        <section class="diversity-inclusion-clubs-section">
            <div class="container">


                <div id="diversityInclusionClubs"></div>

            </div>
        </section>

        <style>
            .diversity-inclusion-clubs-section {
                padding: 80px 0;
                background: #dde3ee;
            }

            .diversity-inclusion-clubs-section .container {
                max-width: 1280px;
            }

            .diversity-inclusion-clubs-header {
                text-align: center;
                margin-bottom: 50px;
            }

            .diversity-inclusion-clubs-header h2 {
                font-family: "Playfair Display", serif;
                font-size: 5rem;
                font-weight: 700;
                color: #27467a;
                margin: 0;
            }

            .diversity-inclusion-club-item {
                margin-bottom: 18px;
            }

            .diversity-inclusion-club-btn {
                width: 100%;
                border: none;
                background: #c9d8eb;
                color: #3f4d5c;
                padding: 24px 30px;
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                cursor: pointer;
                text-align: left;
                transition: all .35s ease;
            }

            .diversity-inclusion-club-title {
                font-size: 1.9rem;
                font-weight: 600;
                line-height: 1.5;
            }

            .diversity-inclusion-club-item.active .diversity-inclusion-club-btn {
                background: #d85b28;
                color: #fff;
            }

            .diversity-inclusion-club-icon {
                font-size: 2rem;
                transition: transform .45s cubic-bezier(.4, 0, .2, 1);
                flex-shrink: 0;
                margin-left: 20px;
            }

            .diversity-inclusion-club-item.active .diversity-inclusion-club-icon {
                transform: rotate(180deg);
            }

            .diversity-inclusion-club-content {
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                transition:
                    max-height .55s cubic-bezier(.4, 0, .2, 1),
                    opacity .35s ease;
            }

            .diversity-inclusion-club-item.active .diversity-inclusion-club-content {
                opacity: 1;
            }

            .diversity-inclusion-club-content-inner {
                padding: 28px 16px 24px;
                color: #555;
                font-size: 1.55rem;
                line-height: 1.95;
            }

            @media(max-width:991px) {

                .diversity-inclusion-clubs-header h2 {
                    font-size: 4rem;
                }
            }

            @media(max-width:767px) {

                .diversity-inclusion-clubs-section {
                    padding: 50px 0;
                }

                .diversity-inclusion-clubs-header {
                    margin-bottom: 30px;
                }

                .diversity-inclusion-clubs-header h2 {
                    font-size: 3rem;
                }

                .diversity-inclusion-club-btn {
                    padding: 18px;
                }

                .diversity-inclusion-club-title {
                    font-size: 1.6rem;
                }

                .diversity-inclusion-club-content-inner {
                    font-size: 1.45rem;
                    padding: 22px 10px;
                }
            }
        </style>

        <script>
            const diversityInclusionClubsData = [{
                    title: "1. Literary Club",
                    content: `
            Sigma Voice – The Literary Club is a vibrant community of bookworms, aspiring authors, and literature enthusiasts. The club fosters a love for the written word through engaging events, discussions, workshops, and literary activities. It has hosted prestigious events such as the renowned River Talks Literary Fest and provides opportunities to interact with authors, poets, and thought leaders. Whether you enjoy classic literature or contemporary poetry, the Literary Club offers a platform to explore and celebrate the world of literature.
        `
                },
                {
                    title: "2. Rangmanch Theatre Club",
                    content: `
            Rangmanch Theatre Club provides a creative platform for students passionate about theatre and performing arts. Through acting workshops, improvisation sessions, script writing activities, stage productions, and cultural performances, members develop confidence, creativity, and teamwork. The club encourages students to showcase their talents and collaborate with fellow performers while exploring various aspects of dramatic arts.
        `
                },
                {
                    title: "3. Confluence: Cultural Club",
                    content: `
            Confluence is a vibrant cultural club that celebrates the rich tapestry of Indian and global heritage. The club brings together diverse cultures through dance performances, music festivals, cultural exhibitions, and artistic events. Members actively participate in promoting cultural understanding, preserving traditions, and showcasing their talents on national and international platforms. Confluence serves as a hub for creativity, artistic expression, and cultural exchange.
        `
                },
                {
                    title: "4. Sports Club",
                    content: `
            The Sports Club promotes fitness, teamwork, and a passion for athletics among students. The club organizes tournaments, training sessions, and sporting events across various disciplines, encouraging participation from both beginners and experienced athletes. Members develop sportsmanship, leadership, and healthy lifestyle habits while representing the university in inter-college and national-level competitions.
        `
                },
                {
                    title: "5. Vittaanta: The History Society",
                    content: `
            Vittaanta, the History Society of RGU, is dedicated to exploring and celebrating the rich tapestry of human history. Through discussions, lectures, historical explorations, and academic activities, members delve into ancient civilizations, significant historical events, and cultural heritage. The society encourages critical thinking, historical research, and appreciation of the past while helping students develop a deeper understanding of the world and its evolution.
        `
                },
                {
                    title: "6. Astronomy Club",
                    content: `
            Ignite your cosmic curiosity with RGU's Astronomy Club and delve into the captivating mysteries of the universe through stargazing nights, telescope observations, and engaging discussions. The club aims to inspire a sense of wonder about the cosmos while introducing members to astronomy basics, celestial navigation, and astrophotography. Whether you're a seasoned stargazer or a curious beginner, the Astronomy Club offers exciting opportunities to explore the wonders of space one celestial object at a time.
        `
                },
                {
                    title: "7. Microbiology Club",
                    content: `
            The Microbiology Club invites students to explore the fascinating microscopic world of microorganisms and their role in shaping our environment. Through laboratory visits, research discussions, and hands-on learning experiences, members gain deeper insights into microbiology and its applications in biotechnology, healthcare, and environmental sustainability. The club encourages scientific curiosity, collaboration, and discovery while connecting theory with real-world biological challenges.
        `
                },
                {
                    title: "8. Zoology Club",
                    content: `
            The Zoology Club is dedicated to exploring the incredible diversity of animal life and promoting awareness about wildlife conservation. Members participate in educational discussions, field visits, awareness campaigns, and opportunities to observe animals in their natural habitats. The club nurtures a deeper appreciation for biodiversity while encouraging students to contribute towards animal welfare, environmental protection, and sustainable conservation efforts.
        `
                },
                {
                    title: "9. Botanical Society of RGU",
                    content: `
            The Botanical Society of RGU brings together students who are passionate about plants, ecology, and environmental sustainability. Through botanical garden visits, nature walks, research exposure, and interactive learning activities, members gain valuable insights into the plant kingdom and its importance in maintaining ecological balance. The society promotes environmental awareness, scientific exploration, and sustainable practices among students.
        `
                },
                {
                    title: "10. Helping Hands Club",
                    content: `
            Helping Hands Club is a socially driven community committed to serving the underprivileged and creating positive social impact. Through volunteering initiatives, donation drives, awareness campaigns, and community outreach programs, members actively engage in addressing social issues and promoting meaningful change. The club encourages students to embrace social responsibility, compassion, and leadership while working together to make a difference in society.
        `
                },
                {
                    title: "11. University Peace Club",
                    content: `
            The University Peace Club is dedicated to promoting peace, understanding, empathy, and non-violence within the university community and beyond. Through workshops, discussions, awareness campaigns, and peacebuilding initiatives, members explore conflict resolution, social justice, and global challenges. The club empowers students to become ambassadors of peace and responsible citizens who contribute towards creating a more harmonious and inclusive society.
        `
                },
                {
                    title: "12. Royal Commerce Club",
                    content: `
            Royal Commerce Club is a dynamic platform for students interested in business, commerce, entrepreneurship, and professional development. The club bridges the gap between classroom learning and real-world business practices through workshops, case studies, competitions, guest lectures, and networking opportunities. Members gain practical insights into finance, marketing, management, and entrepreneurship while building valuable industry connections.
        `
                },
                {
                    title: "13. Rotaract Club of RGU",
                    content: `
            As a part of the global Rotaract movement, the Rotaract Club of RGU is committed to community service, leadership development, and social responsibility. Through educational initiatives, healthcare awareness drives, environmental campaigns, and community outreach programs, members actively contribute to meaningful social causes. The club nurtures leadership qualities, teamwork, and a spirit of service while empowering students to create positive change in their communities.
        `
                },
                {
                    title: "14. MUN Club",
                    content: `
            The Model United Nations (MUN) Club provides students with a platform to explore international relations, diplomacy, and global affairs. Members represent different countries, engage in debates, conduct research, and participate in simulations of international negotiations. The club develops critical thinking, public speaking, negotiation, and leadership skills while fostering a deeper understanding of global issues and international cooperation.
        `
                },
                {
                    title: "15. Optima: Management Club",
                    content: `
            Optima Management Club empowers aspiring managers and business leaders by providing opportunities to develop leadership, analytical, and decision-making skills. Through case study competitions, workshops, industry interactions, networking events, and collaborative projects, members gain practical exposure to real-world management challenges. The club encourages innovation, teamwork, and professional growth while preparing students for successful careers in management and business.
        `
                },
                {
                    title: "16. Yoga Club",
                    content: `
            The Yoga Club of The Assam Royal Global University is a student-led initiative dedicated to promoting holistic well-being through the practice of yoga. The club offers a welcoming environment where students can improve physical fitness, flexibility, mindfulness, and emotional balance. Through sessions covering Hatha Yoga, Vinyasa, Restorative Yoga, and stress management techniques, members develop healthier lifestyles while cultivating inner peace, resilience, and self-awareness.
        `
                },
                {
                    title: "17. Sansad Club",
                    content: `
            The Sansad Club mirrors the functioning of the Indian Parliament and provides students with hands-on exposure to legislative processes, governance, and public policy. Through role-play, debates, research, and discussions on contemporary national issues, members gain valuable insights into democratic institutions and decision-making. The club enhances public speaking, critical thinking, and leadership skills while encouraging informed civic participation.
        `
                },
                {
                    title: "18. Football Club",
                    content: `
            The Football Club is a vibrant community for students who share a passion for the world's most popular sport. Whether beginners or experienced players, members have opportunities to participate in regular training sessions, friendly matches, and competitive tournaments. The club promotes teamwork, discipline, sportsmanship, and physical fitness while helping students develop their football skills and competitive spirit.
        `
                },
                {
                    title: "19. AD and Movie Club",
                    content: `
            The AD and Movie Club is dedicated to capturing, preserving, and showcasing the vibrant experiences of university life through visual storytelling. Members engage in filming, editing, and producing creative video content that highlights campus activities and student achievements. The club fosters creativity, technical skills, collaboration, and media production expertise while encouraging students to tell compelling stories through audio-visual content.
        `
                },
                {
                    title: "20. Photography Club",
                    content: `
            The Photography Club brings together students with a passion for capturing moments and expressing creativity through the lens. Through workshops, photo walks, exhibitions, and practical learning experiences, members explore various photography techniques and genres. The club provides opportunities to enhance technical skills, artistic vision, and visual storytelling while showcasing student talent through photographic projects and events.
        `
                },
                {
                    title: "21. Music Club",
                    content: `
            The Music Club serves as a creative hub for students who are passionate about music and performance. Bringing together singers, instrumentalists, composers, and music enthusiasts, the club provides opportunities to explore diverse musical genres and traditions. Through concerts, jam sessions, workshops, and cultural events, members develop their artistic abilities while fostering collaboration, creativity, and appreciation for the universal language of music.
        `
                },
                {
                    title: "22. Dance Club",
                    content: `
            The Dance Club celebrates the art of movement and self-expression through a wide variety of dance forms. Members participate in performances, workshops, competitions, and cultural festivals while learning different styles ranging from classical and folk to contemporary and modern dance. The club encourages creativity, teamwork, discipline, and confidence, providing students with a vibrant platform to showcase their talent and passion for dance.
        `
                },
                {
                    title: "23. Fine Arts Club",
                    content: `
            The Fine Arts Club nurtures creativity and artistic expression among students interested in visual arts. Through painting, sketching, sculpture, craft-making, exhibitions, and interactive workshops, members are encouraged to explore and develop their artistic talents. The club provides a supportive environment for creative experimentation while promoting appreciation for art, culture, and innovation.
        `
                },
                {
                    title: "24. Quiz Club",
                    content: `
            The Quiz Club brings together inquisitive minds who enjoy testing and expanding their knowledge across a wide range of subjects. Through quizzes, competitions, discussion sessions, and knowledge-sharing activities, members sharpen their analytical thinking, memory, and awareness of current affairs. The club promotes intellectual curiosity, healthy competition, and lifelong learning while preparing students for academic and competitive challenges.
        `
                },
                {
                    title: "25. Eco Club",
                    content: `
            The Eco Club is committed to promoting environmental awareness, sustainability, and conservation practices among students. Through tree plantation drives, cleanliness campaigns, awareness programs, environmental workshops, and community initiatives, members actively contribute towards protecting natural resources and fostering eco-friendly habits. The club inspires students to become environmentally responsible citizens and advocates for a greener future.
        `
                },
                {
                    title: "26. RGU Chess Club",
                    content: `
            The RGU Chess Club provides a platform for students to develop strategic thinking, concentration, and problem-solving skills through the game of chess. The club organizes friendly matches, tournaments, training sessions, and interactive workshops for players of all skill levels. Members have opportunities to sharpen their analytical abilities, learn advanced techniques, and engage with fellow chess enthusiasts in a competitive yet supportive environment.
        `
                },
                {
                    title: "27. Mathematics Club",
                    content: `
            The Mathematics Club is dedicated to fostering a deeper appreciation for mathematics and its real-world applications. Through problem-solving sessions, mathematical games, quizzes, workshops, and discussions, members explore concepts beyond the classroom. The club encourages logical reasoning, critical thinking, and intellectual curiosity while creating a collaborative environment for students who enjoy the beauty and challenges of mathematics.
        `
                },
                {
                    title: "28. Health Club",
                    content: `
            The Health Club promotes physical, mental, and emotional well-being among students through awareness programs, fitness activities, health campaigns, and educational workshops. The club encourages healthy lifestyle choices and emphasizes the importance of preventive healthcare, nutrition, and overall wellness. Through its initiatives, members gain knowledge and motivation to maintain balanced and healthy lives.
        `
                },
                {
                    title: "29. Human Rights Club",
                    content: `
            The Human Rights Club is committed to creating awareness about human rights, social justice, equality, and dignity for all. Through discussions, seminars, awareness campaigns, and community engagement activities, members explore contemporary human rights issues and advocate for positive social change. The club encourages students to become informed, responsible, and compassionate citizens who actively contribute to building an inclusive society.
        `
                },
                {
                    title: "30. Innovation and Entrepreneurship Club",
                    content: `
            The Innovation and Entrepreneurship Club inspires students to think creatively, develop innovative solutions, and cultivate an entrepreneurial mindset. Through workshops, startup discussions, mentoring sessions, business idea competitions, and networking opportunities, members gain practical exposure to innovation and entrepreneurship. The club empowers aspiring entrepreneurs to transform ideas into impactful ventures while fostering leadership, creativity, and problem-solving skills.
        `
                },
                {
                    title: "31. Fashion Club",
                    content: `
            The Fashion Club serves as a creative platform for students passionate about style, design, and the ever-evolving world of fashion. The club encourages members to explore fashion trends, develop design skills, and showcase their creativity through fashion shows, styling sessions, workshops, and collaborative projects. It provides opportunities for students to express themselves artistically while gaining exposure to the fashion industry and contemporary design practices.
        `
                },
                {
                    title: "32. Electronics Club",
                    content: `
            The Electronics Club brings together technology enthusiasts who are interested in exploring the exciting world of electronics, circuits, and innovation. Through hands-on projects, workshops, demonstrations, and technical discussions, members gain practical experience in designing and understanding electronic systems. The club fosters problem-solving skills, technical knowledge, and creativity while encouraging students to apply theoretical concepts to real-world technological challenges.
        `
                },
                {
                    title: "33. Coding Club",
                    content: `
            The Coding Club provides an engaging environment for students interested in programming, software development, and emerging technologies. Through coding challenges, hackathons, workshops, and collaborative projects, members enhance their technical skills and explore various programming languages and tools. The club promotes innovation, teamwork, and computational thinking while preparing students for careers in technology and software development.
        `
                },
                {
                    title: "34. Royal Youth Red Cross Club",
                    content: `
            The Royal Youth Red Cross Club is dedicated to humanitarian service, health awareness, and community welfare. Through blood donation drives, health camps, disaster relief awareness programs, and social service initiatives, members actively contribute to the well-being of society. The club instills values of compassion, volunteerism, and social responsibility while empowering students to serve communities in times of need.
        `
                },
                {
                    title: "35. RGU Film Society",
                    content: `
            The RGU Film Society brings together cinema enthusiasts who appreciate the art of filmmaking and visual storytelling. Through film screenings, discussions, workshops, reviews, and creative collaborations, members explore diverse genres, cinematic techniques, and global film cultures. The society encourages critical appreciation of cinema while providing opportunities for students to develop creative and analytical perspectives on filmmaking.
        `
                },


            ];

            const clubsContainer = document.getElementById(
                "diversityInclusionClubs"
            );

            clubsContainer.innerHTML = diversityInclusionClubsData.map(
                (club, index) => `
        <div class="diversity-inclusion-club-item ${index === 0 ? 'active' : ''}">

            <button class="diversity-inclusion-club-btn">

                <span class="diversity-inclusion-club-title">
                    ${club.title}
                </span>

                <i class="fa fa-chevron-down diversity-inclusion-club-icon"></i>

            </button>

            <div class="diversity-inclusion-club-content">

                <div class="diversity-inclusion-club-content-inner">
                    ${club.content}
                </div>

            </div>

        </div>
    `
            ).join("");

            const accordionItems = document.querySelectorAll(
                ".diversity-inclusion-club-item"
            );

            accordionItems.forEach(item => {

                const content = item.querySelector(
                    ".diversity-inclusion-club-content"
                );

                if (item.classList.contains("active")) {
                    content.style.maxHeight =
                        content.scrollHeight + "px";
                }

                item.querySelector(
                    ".diversity-inclusion-club-btn"
                ).addEventListener("click", () => {

                    const isActive = item.classList.contains("active");

                    accordionItems.forEach(otherItem => {

                        const otherContent = otherItem.querySelector(
                            ".diversity-inclusion-club-content"
                        );

                        otherItem.classList.remove("active");
                        otherContent.style.maxHeight = null;
                    });

                    if (!isActive) {

                        item.classList.add("active");

                        const currentContent = item.querySelector(
                            ".diversity-inclusion-club-content"
                        );

                        currentContent.style.maxHeight =
                            currentContent.scrollHeight + "px";
                    }

                });

            });

            window.addEventListener("load", () => {

                const activeContent = document.querySelector(
                    ".diversity-inclusion-club-item.active .diversity-inclusion-club-content"
                );

                if (activeContent) {
                    activeContent.style.maxHeight =
                        activeContent.scrollHeight + "px";
                }

            });
        </script>
    </section>
@endsection

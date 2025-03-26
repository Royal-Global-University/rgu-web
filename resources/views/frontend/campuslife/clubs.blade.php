@extends('frontend.master')
@section('content')
<div id="page" class="site site_wrapper">

    <div class="scroll-top">
        <div class="scroll-top-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="injected-svg"
                data-src="https://static.elfsight.com/icons/app-back-to-top-arrow-3.svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="m7.997 10 3.515-3.79a.672.672 0 0 1 .89-.076l.086.075L16 10l-3 .001V18h-2v-7.999L7.997 10z">
                </path>
            </svg>
        </div>
    </div>

    @include('frontend/components/aheader')

    <!--About Section-->
     <section style="background-image: url(assets/img/clubs/pattern1.svg);">
        <div>
            <div style="padding-top: 50px;"
                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                <div class="elementor-widget-container">
                    <div class="prthalign">

                        <h1 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text">
                            Clubs</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt-4 text-dark">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                1. Literary Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Sigma Voice – The Literary Club is a vibrant community of bookworms, aspiring authors,
                                and literature enthusiasts. The mission of the club is to foster a love for the written word
                                through
                                engaging events and discussions. The club boasts a rich history of hosting prestigious events
                                like
                                the renowned River Talks Literary Fest, which brings together renowned authors, poets, and
                                thought
                                leaders for stimulating dialogues and workshops. Whether you crave in-depth discussions on
                                classic
                                novels or evenings spent with contemporary poetry, the Literary Club offers something for
                                everyone.
                                Join us and embark on a literary adventure!

                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                2. Rangmanch Theatre Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Unleash your inner actor with Rangmanch the Theatre club of RGU. The club delves into
                                the world of theatre, offering workshops on acting techniques, improvisation, and scriptwriting.
                                Hone your skills and ignite your creativity. Whether you're drawn to directing, stage
                                production, or
                                bringing characters to life, Rangmanch club offers a platform. Participate in street plays,
                                one-act
                                productions, mimes, and more! Showcase your talent and collaborate with passionate peers. Join
                                the
                                Theatre Club and step into the spotlight.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                3. Confluence: Cultural Club
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Embark on a vibrant cultural journey with Confluence, a club celebrating the rich
                                tapestry of Indian and global heritage. The club brings cultures together through a kaleidoscope
                                of
                                events – be it mesmerizing dance performances, pulsating music festivals, or captivating
                                cultural
                                exhibitions. The club aims to foster understanding and appreciation for the diverse traditions
                                and
                                expressions that weave the fabric of humanity. Confluence isn't just about appreciation; it's
                                about
                                active participation! The members are a talented bunch, who have not only graced major
                                university
                                events but also brought recognition to the university through stellar performances in national
                                and
                                inter-institutional competitions. Join Confluence and be a part of a vibrant community that
                                celebrates the beauty of cultural exchange! Let your artistic spirit flow and immerse yourself
                                in
                                the world of music, dance, and cultural exploration.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                4. Sports Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Gear up for action with RGU’s Sports Club! The club promotes fitness and a love for
                                sports by offering opportunities to participate in various athletic activities. Whether you're a
                                seasoned competitor or a fitness newbie, the club welcomes all. The club actively organizes
                                tournaments, matches, and training sessions across different sports. The events range from
                                university-level competitions to inter-institutional clashes, and even national-level
                                challenges.
                                Members of the club believe in fostering teamwork, sportsmanship, and healthy living – as its
                                motto!
                                Join the Sports Club, find your passion, and embark on a journey towards a healthier, more
                                active
                                you!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                5. Vrittaanta: The History Society
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Welcome to Vrittaanta, the History Society of RGU! Our society is dedicated to
                                exploring and celebrating the rich tapestry of history. Through engaging discussions, insightful
                                lectures, and immersive experiences, we delve into the past to uncover its hidden treasures and
                                timeless lessons.
                            <p class="text-dark para1" style="text-align: justify;">Welcome to Vrittaanta, the History Society
                                of RGU! Our society is dedicated to
                                exploring and celebrating the rich tapestry of history. Through engaging discussions, insightful
                                lectures, and immersive experiences, we delve into the past to uncover its hidden treasures and
                                timeless lessons.</p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Whether you're fascinated by ancient civilizations, intrigued by pivotal historical events, or
                                simply curious about the stories that have shaped our world, Vrittaanta offers something for
                                everyone. From exploring archaeological sites to analyzing primary sources, our society provides
                                a
                                platform for students to deepen their understanding of history and cultivate a passion for the
                                past.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Join us as we embark on a journey through time, uncovering the mysteries and marvels of bygone
                                eras.
                                Together, let's unravel the intricate threads of history and weave a richer, more nuanced
                                understanding of the world around us.</p>
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                6. Astronomy Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Ignite your cosmic curiosity with RGU’s Astronomy Club and delve into the captivating
                                mysteries of the universe through stargazing nights, telescope observations, and engaging
                                discussions. The passionate members of the club aim to inspire a sense of wonder about the
                                cosmos.
                                Whether you're a seasoned stargazer or a curious newbie, the club offers workshops on astronomy
                                basics, celestial navigation, and even astrophotography. Join us on a journey to explore the
                                wonders
                                of the universe, one celestial object at a time!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                7. Microbiology Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Plunge into the unseen realm with RGU’s Microbiology Club! Our vibrant community
                                unlocks the secrets of the microscopic world, unveiling the fascinating universe of
                                microorganisms.
                                We delve into their critical role in shaping our environment – from soil health to
                                biodegradation –
                                and explore their profound impact on human well-being.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Microbiology Club isn't just about theory. It offers a dynamic mix of activities to ignite
                                your
                                scientific curiosity. Embark on captivating lab visits and witness firsthand the wonders of the
                                microbial world. Collaborate with fellow enthusiasts on research projects, tackling real-world
                                questions at the forefront of microbiology. Engage in stimulating discussions that bridge the
                                gap
                                between microbiology and its exciting applications in biotechnology.</p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Whether you're a budding scientist or simply fascinated by the unseen, the Microbiology Club
                                offers
                                a welcoming space to explore. Join us and discover the hidden world that shapes our lives, one
                                microorganism at a time!</p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-info" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                8. Zoology Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Calling all animal enthusiasts! Dive into the remarkable world of creatures great and
                                small with RGU’s Zoology Club. The club will ignite a passion for animal life, exploring the
                                incredible diversity of species, their fascinating behaviors, and the critical efforts to
                                conserve
                                them.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Our club isn't just about book smarts. We take you on unforgettable adventures with field trips
                                to
                                zoos, wildlife sanctuaries, and even research centers. Witness animals in their natural
                                habitats,
                                and get a firsthand glimpse into the vital work of conservationists. But our mission goes beyond
                                exploration. We actively raise awareness about animal welfare and the environmental challenges
                                they
                                face.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Join the Zoology Club and become a champion for our planet's magnificent creatures. Engage in
                                discussions, participate in awareness campaigns, and discover how you can contribute to a future
                                where humans and wildlife thrive in harmony. Let's embark on a journey of discovery and make a
                                difference together!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                9. Botanical Society of RGU
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Unfurl a world of wonder with RGU’s Botanical Society! Members of the club delves into
                                the fascinating realm of plants, from their intricate structures and functions to their critical
                                role in our ecosystem. Our passionate members are dedicated to fostering a love for the natural
                                world and promoting sustainable practices.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Botany Club isn't just about textbooks. Cultivate an immersive learning experience with
                                exciting
                                field trips! Explore vibrant botanical gardens, trek through nature trails teeming with plant
                                life,
                                and even visit cutting-edge research labs. Witness firsthand the beauty and diversity of the
                                plant
                                kingdom, and gain insights into the vital role plants play in maintaining a healthy planet.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                But our journey doesn't stop there. We actively promote environmental awareness by encouraging
                                sustainable practices. Join us on a mission to appreciate and protect the magnificent world of
                                plants. The Botany Club welcomes all – budding botanists, nature enthusiasts, and anyone curious
                                about the wonders of the plant kingdom. Let's embark on a verdant adventure, one leaf at a time!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                10. Helping Hands Club
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Lend a helping hand and make a difference with RGU’s Helping Hands Club! The club is a
                                passionate community dedicated to serving the underprivileged and contributing to positive
                                social
                                change. We believe everyone has the power to make an impact, and our club provides the platform
                                to
                                do just that.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Helping Hands isn't just about volunteering; it is a springboard for social awareness. Through
                                impactful projects and discussions, the club sheds light on critical social issues, inspiring
                                active
                                participation in creating a better tomorrow. Whether you're passionate about education,
                                healthcare,
                                or environmental concerns, we offer a variety of projects to ignite your social conscience.
                                Join us and discover the power of collective action. From organizing donation drives to
                                volunteering
                                at local shelters, the Helping Hands Club provides ample opportunities for all students to make
                                a
                                positive impact. Be the change you wish to see in the world – join Helping Hands and embark on a
                                journey of social responsibility!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                11. University Peace Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Foster peace, one conversation at a time, with RGU’s University Peace Club! We're a
                                community dedicated to weaving the threads of peace and non-violence throughout the university
                                and
                                beyond. Our mission is to create a space for understanding, empathy, and the tools to navigate
                                conflict constructively.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Peace Club isn't just about lofty ideals. We translate our vision into action through
                                engaging
                                workshops and thought-provoking discussions. Learn practical conflict resolution skills, delve
                                into
                                the complexities of social justice, and explore solutions to global challenges. We believe
                                informed
                                minds foster peaceful solutions.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                But our impact extends beyond the university walls. We actively raise awareness about
                                peacebuilding
                                initiatives and inspire social responsibility. Join us and become an ambassador for peace. From
                                organizing peace marches to participating in inter-collegiate dialogues, the Peace Club offers a
                                multitude of ways to contribute to a more peaceful world. Let's join hands and build a future
                                where
                                understanding reigns supreme.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                12. Royal Commerce Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Unleash your inner entrepreneur with Royal Commerce Club! The club is a dynamic
                                community dedicated to igniting your business acumen and fostering entrepreneurial spirit.
                                Whether
                                you dream of launching your own venture or climbing the corporate ladder, our club equips you
                                with
                                the tools to succeed.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Commerce Club goes beyond textbooks’ bridging the gap between theory and practice through a
                                stimulating mix of activities. Gain insights from seasoned industry professionals through guest
                                lectures. Hone your skills with interactive workshops on marketing, finance, and other business
                                essentials. Delve deeper through real-world case studies, tackling practical challenges faced by
                                modern businesses.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                But it's not just about learning – it's about connecting. We ignite your entrepreneurial journey
                                by
                                fostering a vibrant network. Participate in business plan competitions, showcase your ideas, and
                                compete for exciting prizes. Attend exclusive networking events and build valuable connections
                                with
                                industry professionals.te to a more peaceful world. Let's join hands and build a future where
                                understanding reigns supreme.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Join the Commerce Club and embark on a journey of transformation. We empower you to translate
                                your
                                business aspirations into reality. So, chart your course to success – one strategic move at a
                                time!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                13. Rotaract Club of RGU:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                As an integral part of the worldwide Rotaract movement, the RGU Rotaract Club’s focus
                                remains steadfast on fostering community service and promoting international understanding.
                                Through
                                a myriad of projects and initiatives, the RGU Rotaractians diligently tackle both local and
                                global
                                challenges spanning education, healthcare, and environmental stewardship. Our mission is clear:
                                to
                                effect positive change in our communities and beyond.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                The club provides a platform for students to cultivate invaluable leadership abilities while
                                actively contributing to meaningful causes. Whether it's organizing educational campaigns,
                                facilitating health outreach programs, or championing environmental conservation efforts, we
                                empower
                                young leaders to make a tangible difference in the world.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                By engaging in Rotaract, individuals not only enhance their personal growth but also become
                                catalysts for societal progress. Together, we exemplify the spirit of service and collaboration,
                                embodying the Rotaract ethos of "Service Above Self." Join us in our journey to create a
                                brighter,
                                more inclusive future for all.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                14. MUN Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Model United Nations (MUN) provides students with a dynamic platform to immerse
                                themselves in the realms of diplomacy and international relations. Participants delve into
                                thorough
                                research on designated countries and engage in authentic debates and negotiations concerning
                                pressing global matters. This experiential learning fosters the honing of vital skills such as
                                public speaking, research proficiency, and critical thinking. Through MUN, students not only
                                gain a
                                deeper understanding of international affairs but also cultivate the art of diplomacy and
                                collaboration. This hands-on approach equips them with the tools necessary to navigate complex
                                geopolitical landscapes and advocate for constructive solutions. MUN serves as a crucible for
                                personal and intellectual growth, empowering individuals to become informed global citizens
                                prepared
                                to tackle the challenges of an interconnected world.
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                15. Optima : Management Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Cultivate your inner leader with the Management Club! Optima empowers aspiring
                                management professionals like you by providing a platform to hone your skills and explore the
                                dynamic world of business leadership. Optima Management Club isn't just about theory. It bridges
                                the
                                gap between academics and the real world through a series of engaging activities. Sharpen your
                                decision-making abilities with case studies that delve into real-world management challenges.
                                Gain
                                invaluable insights from industry veterans through guest lectures and interactive workshops on
                                marketing, finance, human resources, and more.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                But leadership is more than just knowledge – it's about connection. Our club fosters a vibrant
                                network of like-minded individuals. Collaborate with peers on projects, participate in
                                stimulating
                                discussions, and exchange ideas with future business leaders. We also organize exclusive
                                networking
                                events, providing opportunities to connect with industry professionals and gain valuable
                                mentorship.
                                Join Optima Management Club and embark on a transformative journey. We equip you with the skills
                                and
                                connections to thrive in the ever-evolving world of management. So, step up, take charge, and
                                become
                                the leader you were meant to be!
                            </p>

                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                16. Yoga Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Yoga Club at Assam Royal Global University is a student-led initiative dedicated to
                                promoting holistic well-being through the practice of yoga. Our club offers a welcoming and
                                inclusive environment for students of all backgrounds and experience levels to come together and
                                explore the benefits of yoga. From beginner-friendly classes to advanced sessions, we provide
                                opportunities for participants to cultivate strength, flexibility, and mindfulness.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Through a variety of yoga styles and techniques, including hatha, vinyasa, and restorative yoga,
                                our
                                club aims to foster physical fitness, mental clarity, and emotional balance. Additionally, we
                                integrate elements of mindfulness and stress management into our sessions, empowering students
                                to
                                navigate the challenges of university life with resilience and equanimity.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Join us at the Yoga Club to embark on a journey of self-discovery, relaxation, and personal
                                growth.
                            </p>

                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                17. Sansad Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Sansad Club mirrors the Indian Parliament, providing students with a hands-on
                                experience of the legislative process and national debate. Through assigned political party
                                roles,
                                members engage in thorough research and lively discussions on pertinent national issues. This
                                immersive experience not only fosters public speaking but also hones research and critical
                                thinking
                                skills. By delving into current affairs and policy debates, students develop a deeper
                                understanding
                                of governance and democracy. The Sansad Club serves as a dynamic platform for students to
                                cultivate
                                their political acumen and become informed, engaged citizens ready to contribute positively to
                                society.
                            </p>

                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                18. Football Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Welcome to the Football Club of The Assam Royal Global University, where passion meets play! Our
                                club is a hub for students who share a love for the beautiful game. Whether you're a seasoned
                                player
                                or just starting out, there's a place for you on our team. We offer regular training sessions,
                                friendly matches, and exciting tournaments to hone your skills and unleash your competitive
                                spirit.
                            </p>

                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                19. AD and MOVIE CLUB:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Capturing and preserving the vibrant moments of college life is more than just
                                documenting events; it’s about creating a timeless archive of experiences that students will
                                cherish
                                for years to come. By producing visually appealing videos, we not only celebrate the diversity
                                and
                                excitement of our college activities but also promote them in a way that draws attention and
                                inspires participation. Moreover, engaging students in the creative process of filming and
                                editing
                                these videos fosters a sense of ownership and pride. This collaborative approach not only hones
                                their skills but also strengthens community bonds, ensuring that every frame tells a story of
                                unity,
                                enthusiasm, and shared adventure
                            </p>

                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                19. AD and MOVIE CLUB:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Capturing and preserving the vibrant moments of college life is more than just
                                documenting events; it’s about creating a timeless archive of experiences that students will
                                cherish
                                for years to come. By producing visually appealing videos, we not only celebrate the diversity
                                and
                                excitement of our college activities but also promote them in a way that draws attention and
                                inspires participation. Moreover, engaging students in the creative process of filming and
                                editing
                                these videos fosters a sense of ownership and pride. This collaborative approach not only hones
                                their skills but also strengthens community bonds, ensuring that every frame tells a story of
                                unity,
                                enthusiasm, and shared adventure
                            </p>

                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                20. Photography Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Photography Club: Unites students with a passion for photography. Organizes workshops,
                                photo walks, and exhibitions to showcase their work. Provides opportunities to learn about
                                different
                                photographic techniques and explore various genres.
                                Student President: Shahil Biswas
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                21. Videography Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Videography Club is to nurture and develop the skills of students in the art of
                                videography, fostering creativity, technical proficiency, and storytelling abilities. The club
                                seeks
                                to provide a platform for students to explore their passion for video production, document
                                college
                                life, and create impactful visual content that resonates with the college community and beyond.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                22. Media Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Focuses on exploring various aspects of media, including journalism, filmmaking, and
                                social media. Organizes workshops, discussions, and projects to develop media literacy and
                                production skills. Provides a platform for students to share their creative ideas and engage
                                with
                                the media landscape.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                23. Table Tennis Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Welcome to the Table Tennis Club, where every rally is an adventure! We're a vibrant
                                community of players, ranging from beginners to seasoned pros, united by our love for the
                                fast-paced
                                and strategic game of table tennis. Whether you're honing your skills or just discovering the
                                joy of
                                the sport, there's a place for you here.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Join us for regular practice sessions filled with friendly competition and skill-building
                                exercises.
                                We also host exciting matches and tournaments, providing opportunities for players to showcase
                                their
                                talent and compete against fellow enthusiasts.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                But beyond the thrill of the game, our club is a place to forge friendships, build confidence,
                                and
                                stay active. So grab a paddle, step up to the table, and join us for some smashing fun at the
                                Table
                                Tennis Club!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                24. Basketball Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Welcome to the Students Basketball Club, where hoops dreams become reality! Whether
                                you're a seasoned baller or new to the game, our club is the perfect place to showcase your
                                skills
                                and bond with fellow basketball enthusiasts. Join us for thrilling practices, friendly pickup
                                games,
                                and adrenaline-pumping tournaments. With a focus on teamwork, sportsmanship, and skill
                                development,
                                we're here to help you reach your full potential on and off the court. Come dribble, shoot, and
                                slam
                                dunk with us as we aim for victory and create lasting memories together!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                25. Volleyball Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Volleyball Club welcomes players of all skill levels to join the exhilarating world
                                of volleyball. We offer a fun and inclusive environment where you can learn the fundamentals of
                                the
                                game, practice your skills, and participate in friendly matches and tournaments. Whether you're
                                a
                                seasoned player or just starting out, the Volleyball Club provides a supportive and encouraging
                                atmosphere for everyone.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                26. Squash Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Squash Club is a challenging and rewarding club for players of all skill levels.
                                Squash is a fast-paced and physically demanding sport that requires agility, stamina, and
                                strategic
                                thinking. We offer regular practice sessions, coaching opportunities, and organized tournaments
                                for
                                those who want to compete.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                27. Sepak Takraw Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Sepak Takraw Club introduces the exciting and unique sport of Sepak Takraw to
                                players of all levels. This dynamic game combines elements of soccer, volleyball, and martial
                                arts,
                                requiring agility, coordination, and teamwork. We offer introductory sessions, practice
                                opportunities, and friendly matches for those interested in learning and playing this
                                fascinating
                                sport.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                28. Badminton Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Smash your way to fitness with The Assam Royal Global University's Badminton Club! We're a
                                spirited community of players, from beginners wielding racquets for the first time to seasoned
                                net-shredders. Our club offers a welcoming environment for everyone to learn, practice, and
                                compete
                                in this exciting sport.
                            </p>
                            <p class="text-dark para1" style="text-align: justify;">
                                Join us for friendly rallies, drills to sharpen your skills, and organized matches to test your
                                mettle. We provide opportunities to play singles or doubles, fostering teamwork and friendly
                                competition. Whether you crave the thrill of competition or simply enjoy a fun workout, the
                                Badminton Club has something for you. So, grab your racquet and get ready to ace your game!
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                29. Baseball Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Baseball Club is a haven for players who love the thrill of the diamond. The club
                                offers a platform for practicing fundamental skills, learning advanced techniques, and playing
                                competitive games. Whether you're a seasoned hitter, a crafty pitcher, or simply enjoy the
                                teamwork
                                and strategy of the game, the Baseball Club provides a supportive and encouraging environment
                                for
                                all.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-warning fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                30. Chess Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Chess Club welcomes players of all skill levels to join the world of strategic
                                thinking and mental challenge. Whether you're a seasoned grandmaster or just starting to learn
                                the
                                game, we offer a supportive and encouraging environment for practicing your skills, playing
                                friendly
                                matches, and participating in tournaments.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-info fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                31. Athletics Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Athletics Club is a haven for individuals who enjoy running, jumping, and throwing.
                                We offer a platform for practicing various track and field events, improving your fitness, and
                                potentially competing in local meets. Whether you're a sprinter, a distance runner, or a field
                                event
                                enthusiast, the Athletics Club provides a supportive and encouraging environment for all.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-danger fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                32. Cricket Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                Welcome to the Cricket Club, where enthusiasts of the gentleman's game gather to share
                                their passion for cricket. Our club serves as a nurturing space for players of all levels,
                                catering
                                to beginners looking to grasp fundamental skills, as well as seasoned athletes aiming to refine
                                their techniques and strategies. Whether you're a skilled batsman, a cunning bowler, or simply
                                enjoy
                                the camaraderie and teamwork inherent in cricket, you'll find a welcoming community here. We
                                offer
                                regular practice sessions to sharpen your skills and organize competitive matches to put them to
                                the
                                test. Join us at the Cricket Club to hone your abilities, forge lasting friendships, and revel
                                in
                                the timeless joy of cricket.
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-lg border-0 mb-4" style="border-radius: 10px;">
                        <div class="card-body" style="padding: 40px; background-color: #f9f9f9;">
                            <h4 class="text-success fw-bold" style="font-size: 1.5rem; margin-bottom: 20px;">
                                33. Kabaddi Club:
                            </h4>
                            <p class="text-dark para1" style="text-align: justify;">
                                The Kabaddi Club welcomes players of all skill levels to join the thrilling and dynamic
                                sport of Kabaddi. This fast-paced and physically demanding game requires agility, strength, and
                                strategic thinking. We offer introductory sessions, practice opportunities, and friendly matches
                                for
                                those interested in learning and playing this fascinating sport.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--End About-->
</div><!-- #page -->
@endsection

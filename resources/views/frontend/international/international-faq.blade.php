@extends('frontend/new-master')
@section('content')
    <style>
        .rgu-faqx-section {
            background: #eef1f7;
            padding: 7rem 0;
        }

        .rgu-faqx-head {
            margin-bottom: 5rem;
        }

        .rgu-faqx-title {
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            font-weight: 700;
            color: #29467a;
            margin-bottom: 2rem;
        }

        .rgu-faqx-subtitle {
            max-width: 70rem;
            margin: 0 auto;
            font-size: 1.8rem;
            line-height: 1.9;
            color: #666;
        }

        .rgu-faqx-wrapper {
            background: #f5f6f8;
            border-radius: 4rem;
            padding: 5rem;
        }

        .rgu-faqx-search-wrap {
            margin-bottom: 3rem;
        }

        .rgu-faqx-search {
            width: 100%;
            max-width: 35rem;
            height: 5.5rem;
            border: 1px solid #ccd3df;
            border-radius: .8rem;
            padding: 0 2rem;
            font-size: 1.6rem;
            color: #444;
            outline: none;
            background: #fff;
        }

        .rgu-faqx-search:focus {
            border-color: #29467a;
        }

        .rgu-faqx-list {
            display: flex;
            flex-direction: column;
            gap: 1.6rem;
        }

        .rgu-faqx-item {
            background: #cfe0f8;
            border-radius: .8rem;
            overflow: hidden;
        }

        .rgu-faqx-question {
            width: 100%;
            border: none;
            background: transparent;
            padding: 2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
            cursor: pointer;
            text-align: left;
        }

        .rgu-faqx-question span {
            font-size: 1.8rem;
            line-height: 1.7;
            font-weight: 600;
            color: #29467a;
        }

        .rgu-faqx-question i {
            font-size: 1.4rem;
            color: #29467a;
            transition: transform .3s ease;
        }

        .rgu-faqx-answer {
            max-height: 0;
            overflow: hidden;
            transition: all .4s ease;
            background: #f5f6f8;
        }

        .rgu-faqx-answer p {
            padding: 0 2.5rem 2.5rem;
            margin: 0;
            font-size: 1.8rem;
            line-height: 2;
            color: #555;
        }

        .rgu-faqx-item.active .rgu-faqx-answer {
            max-height: 50rem;
        }

        .rgu-faqx-item.active .rgu-faqx-question i {
            transform: rotate(180deg);
        }

        @media (max-width: 991px) {

            .rgu-faqx-title {
                font-size: 3.8rem;
            }

            .rgu-faqx-wrapper {
                padding: 4rem 3rem;
            }
        }

        @media (max-width: 767px) {

            .rgu-faqx-section {
                padding: 5rem 0;
            }

            .rgu-faqx-title {
                font-size: 2.8rem;
            }

            .rgu-faqx-subtitle {
                font-size: 2.2rem;
            }

            .rgu-faqx-wrapper {
                padding: 3rem 2rem;
                border-radius: 2.5rem;
            }

            .rgu-faqx-search {
                max-width: 100%;
            }

            .rgu-faqx-question {
                padding: 1.8rem;
            }

            .rgu-faqx-question span {
                font-size: 1.6rem;
            }

            .rgu-faqx-answer p {
                padding: 0 1.8rem 2rem;
                font-size: 1.8rem;
                line-height: 1.9;
            }
        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('/new-web/assets/img/faqs/cover.png'); filter: blur(2px);"></div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Frequently Asked Questions</h1>
            <div class="pg-hero-breadcrumb">
                International / Frequently Asked Questions
            </div>
        </div>

    </section>

    <!-- FAQ Section -->
    <section class="rgu-faqx-section">

        <div class="container">

            <!-- Heading -->
            <div class="rgu-faqx-head text-center">

                <p class="rgu-faqx-subtitle">
                    Everything you need to know about international admissions, fees, eligibility,
                    career prospects, and life at <br> The Assam Royal Global University.
                </p>

            </div>

            <!-- FAQ Wrapper -->
            <div class="rgu-faqx-wrapper">

                <!-- Search -->
                <div class="rgu-faqx-search-wrap">

                    <input type="text" id="rguFaqSearch" class="rgu-faqx-search" placeholder="Search questions...">

                </div>

                <!-- FAQ LIST -->
                <div class="rgu-faqx-list"></div>

            </div>

        </div>

    </section>

    <script>
        // FAQ DATA ARRAY
        const rguFaqData = [

            {
                question: "Can foreign students come to India on Tourist Visa and explore admission in some courses/institutes and later get Student Visa while in India?",
                answer: "No. In order to explore various options to study in India, he/she can apply for provisional Student Visa of 6 months duration from Indian Mission abroad and if he/she gets confirmed admission while in India, then he/she can apply for a Student Visa by visiting the local FRRO/FRO along with all the necessary documents."
            },
            {
                question: "Can Student Visas directly be applied from Indian Missions abroad?",
                answer: "Yes, they can, provided they show documents confirming their admission to a course in a reputed/recognized institute in India."
            },
            {
                question: "What is the maximum duration of Student Visa?",
                answer: "The maximum duration of a student visa is 5 years or the duration of the course whichever is earlier. Students may apply for extension by visiting the FRROs or the office of Superintendent of Police."
            },
            {
                question: "What are pre-arrival formalities that foreign students should undergo?",
                answer: "All students having a valid Indian visa of more than 180 days must obtain a residential permit from the local Foreigner Registration Office (FRO) as per Indian immigration law."
            },
            {
                question: "How many courses a foreign student can pursue at a time in India?",
                answer: "Student can take only one course."
            },
            {
                question: "Does foreign students require the approval/NOC from any Ministry or Department for technical courses?",
                answer: "Students do not require approval/NOC from MHRD for admission to diploma/degree/post-graduate degree in Architecture & Town Planning, Engineering and Technology, MBA, Pharmacy, Applied Arts, Hotel Management & Catering Technology and MCA. However, NOC from the Ministry of Health is required for admission to courses in medical or para-military courses."
            },
            {
                question: "Can Student Visas be extended for clearing supplementary papers?",
                answer: "Yes, he/she must provide the concerned university/institute permits as proof to the local FRRO/FRO."
            },
            {
                question: "How can a foreign student apply for visa extension?",
                answer: "Students may apply for extension by visiting the local FRRO or the office of Superintendent of Police with Bonafide certificate, proof of adequate financial standing, etc."
            },






        ];

        // TARGET CONTAINER
        const rguFaqList = document.querySelector('.rgu-faqx-list');

        // GENERATE FAQ ITEMS
        rguFaqData.forEach((faq, index) => {

            const faqItem = document.createElement('div');

            faqItem.classList.add('rgu-faqx-item');

            if (index === 0) {
                faqItem.classList.add('active');
            }

            faqItem.innerHTML = `

            <button class="rgu-faqx-question">

                <span>${faq.question}</span>

                <i class="fa fa-chevron-down"></i>

            </button>

            <div class="rgu-faqx-answer">

                <p>${faq.answer}</p>

            </div>

        `;

            rguFaqList.appendChild(faqItem);

        });

        // ACCORDION
        const rguFaqItems = document.querySelectorAll('.rgu-faqx-item');

        rguFaqItems.forEach(item => {

            const question = item.querySelector('.rgu-faqx-question');

            question.addEventListener('click', () => {

                const isActive = item.classList.contains('active');

                rguFaqItems.forEach(faq => {
                    faq.classList.remove('active');
                });

                if (!isActive) {
                    item.classList.add('active');
                }

            });

        });

        // SEARCH FUNCTION
        const rguFaqSearch = document.getElementById('rguFaqSearch');

        rguFaqSearch.addEventListener('keyup', function() {

            const value = this.value.toLowerCase();

            rguFaqItems.forEach(item => {

                const questionText = item.querySelector(
                    '.rgu-faqx-question span'
                ).innerText.toLowerCase();

                if (questionText.includes(value)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }

            });

        });
    </script>
@endsection

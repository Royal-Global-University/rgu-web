@extends('frontend/new-master')
@section('title', 'Guest House : The Assam Royal Global University')
@section('meta_description', 'The guest house at Royal Global University ensures a pleasant stay for guests with modern
    amenities and easy access to university facilities.')
@section('meta_keywords', 'Guest House')
@section('content')
    <style>
        /*====================================
    GUEST HOUSE
    =====================================*/

        .guesthouse-section {
            background: #eef3fc;
            padding: 80px 0;
        }

        .guesthouse-top,
        .guesthouse-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .guesthouse-bottom {
            margin-top: 70px;
        }

        .guesthouse-image {
            flex: 0 0 45%;
        }

        .guesthouse-image img {
            width: 100%;
            display: block;
            border-radius: 22px;
            transition: .45s;
        }

        .guesthouse-image img:hover {
            transform: scale(1.03);
        }

        .guesthouse-content {
            flex: 1;
        }

        .guesthouse-content h2 {
            font-size: 3.6rem;
            color: #24457d;
            font-family: Georgia, serif;
            text-transform: uppercase;
            margin-bottom: 22px;
            font-weight: 700;
        }

        .guesthouse-content p {
            font-size: 1.55rem;
            color: #555;
            line-height: 1.9;
            text-align: justify;
            margin-bottom: 18px;
        }

        .guesthouse-notice {

            max-width: 1050px;
            margin: 65px auto;
            text-align: center;
            color: #24457d;
            font-family: Georgia, serif;
            font-size: 2rem;
            line-height: 1.8;
            font-weight: 700;

        }

        .guesthouse-list {
            flex: 1;
        }

        .guesthouse-list h3 {

            color: #24457d;
            font-size: 3rem;
            font-family: Georgia, serif;
            margin-bottom: 30px;
            font-weight: 700;

        }

        .guesthouse-list ul {

            list-style: none;
            padding: 0;

        }

        .guesthouse-list li {

            position: relative;
            padding-left: 24px;
            margin-bottom: 18px;
            font-size: 1.55rem;
            color: #555;
            line-height: 1.8;

        }

        .guesthouse-list li::before {

            content: "";
            width: 8px;
            height: 8px;
            background: #e46d2f;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 11px;

        }

        @media(max-width:991px) {

            .guesthouse-top,
            .guesthouse-bottom {

                flex-direction: column;

            }

            .guesthouse-bottom {

                flex-direction: column-reverse;

            }

        }

        @media(max-width:576px) {

            .guesthouse-section {

                padding: 50px 0;

            }

            .guesthouse-content h2 {

                font-size: 2.5rem;

            }

            .guesthouse-list h3 {

                font-size: 2.2rem;

            }

            .guesthouse-content p,
            .guesthouse-list li {

                font-size: 14px;

            }

            .guesthouse-notice {

                font-size: 17px;
                line-height: 1.7;

            }

        }
    </style>

    <section class="pg-hero">
        <div class="pg-hero-bg" style="background-image:url('new-web/assets/img/campus-guesthouse/cover.png'); filter: blur(2px);">
        </div>

        <div class="pg-hero-bg"></div>
        <div class="pg-hero-overlay"></div>

        <div class="pg-hero-inner">
            <h1 class="pg-hero-title">Guest House</h1>
            <div class="pg-hero-breadcrumb">
                Campus / Campus Facilities / Guest House
            </div>
        </div>

    </section>


    <section class="guesthouse-section">

        <div class="container">

            <!-- Top -->

            <div class="guesthouse-top">

                <div class="guesthouse-image">
                    <img src="new-web/assets/img/campus-guesthouse/1.png" alt="">
                </div>

                <div class="guesthouse-content">

                    <h2>New Guest House</h2>

                    <p>
                        The Assam Royal Global University has modern Guest House facilities within the campus for
                        visiting
                        university guests, faculty members, parents, industry experts and delegates. The Guest House
                        provides a peaceful atmosphere with comfortable accommodation and essential amenities for a
                        pleasant
                        stay.
                    </p>

                    <p>
                        The facility offers spacious furnished rooms with attached washrooms, air conditioning, Wi-Fi,
                        television and round-the-clock support. Managed by dedicated staff, the Guest House ensures a
                        safe,
                        hygienic and comfortable experience for every guest visiting the University.
                    </p>

                </div>

            </div>

            <!-- Notice -->

            <div class="guesthouse-notice">

                Booking of Room(s) in the Guest House is subject to availability of rooms and approval by the
                Vice Chancellor / Executive Vice President / Registrar or any other competent authority.
                Room allotment is generally made on a <strong>First-Come, First-Served</strong> basis.

            </div>

            <!-- Bottom -->

            <div class="guesthouse-bottom">

                <div class="guesthouse-list">

                    <h3>
                        The Guest House Accommodation Is Available Under The Following Categories
                    </h3>

                    <ul>

                        <li>University Guests</li>

                        <li>Resource Persons & Visiting Faculty</li>

                        <li>New Joining Faculty Members</li>

                        <li>Participants of Conferences, Workshops & Seminars</li>

                        <li>Any Other Guests Approved By The Competent Authority</li>

                    </ul>

                </div>

            </div>

        </div>

    </section>
@endsection

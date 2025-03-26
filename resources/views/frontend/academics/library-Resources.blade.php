@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <div style="padding-top: 90px; position: relative;">
            <img src="mobile-assets/library/mobile-library-banner.png" />

            <div class="container mt-4" style="max-width: 900px;">
                <ul class="nav nav-tabs d-flex justify-content-start border-0" id="infoTabs" role="tablist"
                    style="overflow-x: auto; white-space: nowrap;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active mobile-headd3" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab" aria-controls="tab1" aria-selected="true">
                            About Us
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mobile-headd3" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                            type="button" role="tab" aria-controls="tab2" aria-selected="false">
                            Resources
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mobile-headd3" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                            type="button" role="tab" aria-controls="tab3" aria-selected="false">
                            OPAC
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mobile-headd3" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4"
                            type="button" role="tab" aria-controls="tab4" aria-selected="false">
                            Repository
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mobile-headd3" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5"
                            type="button" role="tab" aria-controls="tab5" aria-selected="false">
                            Plagiarism
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mobile-headd3" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6"
                            type="button" role="tab" aria-controls="tab6" aria-selected="false">
                            Departmental Library
                        </button>
                    </li>
                </ul>

                <div class="tab-content p-4 border rounded" id="infoTabsContent" style="background: #F8F9FA;">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="">
                            <section>
                                <!--1 row-->
                                <div>
                                    <div class="container-fluid g-0">

                                        <!--About Section-->
                                        <div data-elementor-type="wp-page" data-elementor-id="704"
                                            class="elementor elementor-704">
                                            <section
                                                style="background-image: url(assets/img/patternbg/libpattern.svg); padding-top: 10px;"
                                                class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="f481aaf" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55"
                                                        data-id="968af55" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                                                data-id="4878838" data-element_type="widget"
                                                                data-widget_type="go-img--bx.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                                                        <div style="border: 2px solid #fff;"
                                                                            class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                                            <img decoding="async"
                                                                                src="mobile-assets/library/headimg1.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-60 elementor-top-column elementor-element elementor-element-9b49111"
                                                        data-id="9b49111" data-element_type="column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                                                data-id="c8de01e" data-element_type="widget"
                                                                data-widget_type="go-s-heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="prthalign">
                                                                        <h1
                                                                            class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                                                            About the Library</h1>
                                                                        <div class="para1 text-dark kd-para-1 disc"
                                                                            data-splitting style="text-align: justify;">
                                                                            <p class="text-dark para1">A window to the world of
                                                                                latest
                                                                                information in Science, Engineering, Technology,
                                                                                Management, Humanities &
                                                                                Social
                                                                                Sciences,
                                                                                etc. The library with its modern collection of
                                                                                knowledge resources and
                                                                                innovative information
                                                                                services provides necessary support for
                                                                                teaching, learning, research
                                                                                activities
                                                                                of the
                                                                                University by creating state-of-the-art
                                                                                facilities for the academic
                                                                                community.
                                                                                The
                                                                                library is sufficiently automated using <span
                                                                                    class="fw-bold">KOHA
                                                                                    ILMS</span>
                                                                                for running its housekeeping operation
                                                                                and providing online access to catalogue and
                                                                                e-resource facility. The entire
                                                                                Library
                                                                                collections are made available through OPAC
                                                                                (On-line Public Access
                                                                                Catalogue).
                                                                                OPAC
                                                                                can be accessed through in campus and
                                                                                off-campus. Library collections and
                                                                                the
                                                                                e-resources
                                                                                can be searched through Web OPAC. The library
                                                                                offers a range of information
                                                                                services to
                                                                                support the learning process which is set to the
                                                                                highest professional
                                                                                standards.
                                                                                The
                                                                                university is using <span class="fw-bold">DSpace
                                                                                    software</span> for its
                                                                                institutional repository (Digital Library)
                                                                                which preserves the institute's intellectual
                                                                                output for campus-wide access
                                                                                and
                                                                                digital
                                                                                preservation for the posterity. Our total
                                                                                collection is <span class="fw-bold">30,397 Nos +
                                                                                    books, 31 Nos +
                                                                                    Printed Journals and 17 Nos + Printed
                                                                                    Magazine.</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <!--End About-->

                                        <!--About Section-->
                                        <div data-elementor-type="wp-page" data-elementor-id="704"
                                            class="elementor elementor-704">
                                            <section style=" padding-top: 50px;"
                                                class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                data-id="f481aaf" data-element_type="section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9b49111"
                                                            data-id="9b49111" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                                                    data-id="c8de01e" data-element_type="widget"
                                                                    data-widget_type="go-s-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="prthalign">
                                                                            <div class="para1 text-dark kd-para-1 disc"
                                                                                data-splitting style="text-align: justify;">
                                                                                <p class="text-dark para1">The RGU Library
                                                                                    boasts an impressive 8,000 square feet
                                                                                    of modern, high-tech
                                                                                    space. This centrally air-conditioned,
                                                                                    well-furnished duplex library serves as an
                                                                                    integrated resource center,
                                                                                    housing an extensive collection of
                                                                                    cutting-edge
                                                                                    books across various fields, including
                                                                                    management, engineering,
                                                                                    architecture, social science, and more.

                                                                                    Our library is not just a place to store
                                                                                    books; it's a hub of knowledge.
                                                                                    We
                                                                                    offer a wide range of services and resources
                                                                                    to cater to the diverse needs of our users.
                                                                                    These services include
                                                                                    regular
                                                                                    subscriptions to national and international
                                                                                    journals, electronic journals,
                                                                                    round-the-clock accessibility, off-campus
                                                                                    access to e-resources, internet facilities,
                                                                                    photocopying facilities, and CD rewriting
                                                                                    services, among others.

                                                                                    At RGU, our library is not limited to our
                                                                                    students and faculty; it is a
                                                                                    valuable resource for the entire community.
                                                                                    Whether you are a student, a research
                                                                                    scholar, a faculty member, or
                                                                                    simply a
                                                                                    knowledge enthusiast, our library is here
                                                                                    to empower you in your quest for knowledge.
                                                                                    Join us in becoming
                                                                                    knowledge
                                                                                    seekers, and together, let's embark on a
                                                                                    journey of endless learning and discovery.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="elementor-column elementor-col-90 elementor-top-column elementor-element elementor-element-968af55"
                                                            data-id="968af55" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                                                    data-id="4878838" data-element_type="widget"
                                                                    data-widget_type="go-img--bx.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                                                            <div style="border: 2px solid #fff;"
                                                                                class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                                                <img decoding="async"
                                                                                    src="mobile-assets/library/headimg.jpeg"
                                                                                    alt="">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>
                                        </div>
                                        <!--End About-->

                                        <!--menu-->
                                        <div>
                                            <div class="container">
                                                <div>
                                                    <h5 class="fw-bold headd3 text-dark">Overdue charges: Rs. 5/- (Rupees Five
                                                        Only) per day per volume shall be
                                                        charged,
                                                        if:</h5>

                                                    <p class="text-dark para1">1. A book borrowed from the Circulation Section
                                                        is not returned by the due date.
                                                    </p>
                                                    <p class="text-dark para1">2. The book which is recalled by the library is
                                                        not returned within the stipulated
                                                        period; and</p>
                                                    <p class="text-dark para1">3. The maximum number of overdue charges to be
                                                        charged from a defaulter shall be up
                                                        to the price of the book/ volume.
                                                    </p>
                                                    <p class="text-dark para1">4. No payment received in library; librarian
                                                        makes a statement of the fine which is
                                                        paid to
                                                        account section.</p>
                                                    <p class="text-dark para1">5. A reminder notice will be issued by the
                                                        library staff bearing the names of the
                                                        defaulters before the end semester
                                                        results are declared. before using a laptop inside the library.</p>
                                                </div>


                                                <div class="pt-3">
                                                    <h5 class="fw-bold text-dark">The restricted categories of reading material:
                                                    </h5>
                                                    <p class="text-dark para1">1. The Books marked with capital ‘REF’ and ‘Back
                                                        Volumes’ of the Journals and
                                                        Periodicals shall be consulted in the
                                                        library only.</p>
                                                    <p class="text-dark para1">2. The Books under ‘Reference’ with red spine
                                                        label shall not be issued.</p>
                                                    <p class="text-dark para1">3. Student’s Dissertation and PhD Thesis are
                                                        original works of students and
                                                        scholars and are not meant for circulation
                                                    </p>
                                                    <p class="text-dark para1">4. All current periodicals shall be treated as
                                                        ‘Reference’ Materials</p>
                                                </div>
                                                <div class="pt-3">
                                                    <h5 class="fw-bold text-dark">Loss of books by the borrowers:</h5>
                                                    <p class="text-dark para1">1. If borrowed materials are lost, the borrower
                                                        will have to replace the exact
                                                        title and author of the lost items.</p>
                                                    <p class="text-dark para1">2. A fine, as prescribed, will be charged for the
                                                        loss of reading materials, files
                                                        and other reading materials.</p>
                                                    <p class="text-dark para1">3. Student’s Dissertation and PhD Thesis are
                                                        original works of students and
                                                        scholars and are not meant for circulation</p>
                                                    <p class="text-dark para1">4. The fine will continue to be collected until
                                                        notified to the librarian by the
                                                        borrowers about the lost materials.</p>
                                                    <p class="text-dark para1">5. Once reported to the librarian, the late
                                                        penalties will be put on hold for
                                                        2(two) weeks giving the borrowers
                                                        sufficient time to procure the lost books.</p>
                                                    <p class="text-dark para1">6. The borrower can always get the help of a
                                                        Librarian to procure the lost books
                                                        upon the request made by the borrower.</p>
                                                    <p class="text-dark para1">7. If in case of old publication or out-of-print
                                                        items no longer in circulation in
                                                        the market. The borrowers will have
                                                        to pay double the actual cost of the lost reading materials or
                                                        compensation at par with the current
                                                        rate of the given
                                                        title taking into consideration the current inflation rate</p>
                                                </div>
                                                <div class="pt-3">
                                                    <h5 class="fw-bold text-dark">Library Defaulters:</h5>
                                                    <p class="text-dark para1">A regular notice of the last date to return the
                                                        borrowed books is given in the
                                                        'Library Notice Board,' and an email to
                                                        all HOD/s. The last date to return the borrowed books is usually set by
                                                        the librarian, usually on
                                                        the last date of the
                                                        'End-Semester exam,'. The last date is also mentioned in the 'Date
                                                        Label,' which is located on the
                                                        last page of books
                                                        stamped by the circulation section while issuing the books.</p>
                                                    <p class="text-dark para1">1. The borrower who did not return the books even
                                                        after exceeding the due-date will
                                                        be considered as a defaulter</p>
                                                    <p class="text-dark para1">2. A Defaulter list is then sent to the
                                                        examination branch 2(two) weeks before the
                                                        declaration of results</p>
                                                    <p class="text-dark para1">3. A defaulter 'End-Semester result,' would be
                                                        withheld if he/she did not return
                                                        the borrowed books to the library.</p>
                                                    <p class="text-dark para1">4. A defaulter will have to return the book and
                                                        acquire the 'Library Clearance
                                                        Certificate', from the Librarian to get
                                                        his/her results.</p>
                                                    <p class="text-dark para1">5. For defaulters who quit Mid-semester or
                                                        End-Semester sessions permanently. The
                                                        librarian will have to generate the
                                                        due fines from SOUL and forward the same to the concerned HOD/s and the
                                                        Dean of School/s for
                                                        necessary actions.</p>
                                                </div>
                                                <div class="pt-3">
                                                    <h5 class="fw-bold text-dark">Other rules & regulations:</h5>
                                                    <p class="text-dark para1">1. All the students/scholars and outsiders
                                                        entering the library shall deposit their
                                                        bags and other belongings at the
                                                        property counter and sign in the register at the checkpoint. Only
                                                        notebooks and the library books to
                                                        be returned will be
                                                        allowed inside. Do not leave any valuables at the checkpoint. Library
                                                        shall not be responsible for
                                                        loss of personal
                                                        belongings. All files, books and notebooks must be presented to the
                                                        library staff while leaving the
                                                        library.</p>
                                                    <p class="text-dark para1">2. An Identity card is compulsory for getting
                                                        access to the University Library.</p>
                                                    <p class="text-dark para1">3. Books removed from the shelves by the users,
                                                        if not required for reference,
                                                        should be kept on the table nearest to
                                                        them. The users should not try to shelve the books by themselves. It can
                                                        be considered that a
                                                        misplaced book is like a
                                                        lost book.</p>
                                                    <p class="text-dark para1">4. The newspaper should be folded appropriately
                                                        after reading and kept back in the
                                                        designated place.</p>
                                                    <p class="text-dark para1">5. Readers should not deface, mark, cut, mutilate
                                                        or damage library resources in
                                                        any way. If anyone is found doing so,
                                                        he/she will be brought in before the Librarian and then the Director/s
                                                        of School.</p>
                                                    <p class="text-dark para1">6. Students are advised not to get books issued
                                                        to others on their names.
                                                    </p>
                                                    <p class="text-dark para1">7. Strict discipline should be maintained within
                                                        the library.</p>
                                                    <p class="text-dark para1">8. No visitor or guest is permitted to use the
                                                        library without the prior permission
                                                        of the librarian or the Board of
                                                        Management.</p>
                                                    <p class="text-dark para1">9. No photograph of the library shall be taken
                                                        without the prior permission of the
                                                        Librarian.</p>
                                                    <p class="text-dark para1">10. The Librarian reserves the right to call back
                                                        any issued book/item at any time.
                                                    </p>
                                                    <p class="text-dark para1">11. Laptop users will have to acquire the
                                                        permission of the Library Staff before
                                                        using a laptop inside the library.
                                                    </p>
                                                </div>
                                                <div>
                                                    <div style="margin-top: 50px;"
                                                        class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                                                        data-id="e22f91b" data-element_type="widget"
                                                        data-widget_type="go-s-heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="prthalign">

                                                                <h2 style="font-weight: 600;"
                                                                    class="headd1 text-dark kd-title-ani kd-split-text">
                                                                    Library Team</h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="container pt-2 pb-5 text-center">

                                                        <div class="row">

                                                            <div class="col-lg-4 pb-4">
                                                                <!--1 img-->
                                                                <div class="kd-course-1-tabs-card fix"
                                                                    style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                    <div style="height: 320px !important;" class="main-img">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            src="mobile-assets/library/mukutor.jpg"
                                                                            class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
                                                                            alt="" sizes="(max-width: 352px) 100vw, 352px" />
                                                                    </div>
                                                                    <div style="padding: 20px 20px 10px 15px;">
                                                                        <h4 class="headd3 fw-bold text-dark">
                                                                            Dr. Md. Mukutor Rahman
                                                                        </h4>

                                                                        <p class="para1"
                                                                            style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                            Librarian i/c (Assistant Professor)
                                                                        </p>

                                                                        <div
                                                                            style="line-height: 1; color: #333; font-size: 16px;">
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-phone"></i> +91-7002190775</p>
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-envelope"></i> mrahman@rgu.ac
                                                                            </p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 pb-4">
                                                                <!--1 img-->
                                                                <div class="kd-course-1-tabs-card fix"
                                                                    style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                    <div style="height: 320px !important;" class="main-img">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            src="mobile-assets/library/prasanna.jpg"
                                                                            class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
                                                                            alt="" sizes="(max-width: 352px) 100vw, 352px" />
                                                                    </div>
                                                                    <div style="padding: 20px 20px 10px 15px;">
                                                                        <h4 class="headd3 fw-bold text-dark">
                                                                            Mr. Prasanna Kumar Konch
                                                                        </h4>

                                                                        <p class="para1"
                                                                            style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                            Assistant Librarian
                                                                        </p>

                                                                        <div
                                                                            style="line-height: 1; color: #333; font-size: 16px;">
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-phone"></i> +91-8753887883</p>
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-envelope"></i> pkkonch@rgu</p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 pb-4">
                                                                <!--1 img-->
                                                                <div class="kd-course-1-tabs-card fix"
                                                                    style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                    <div style="height: 320px !important;" class="main-img">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            src="mobile-assets/library/bikramaditya.jpg"
                                                                            class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
                                                                            alt="" sizes="(max-width: 352px) 100vw, 352px" />
                                                                    </div>
                                                                    <div style="padding: 20px 20px 10px 15px;">
                                                                        <h4 class="headd3 fw-bold text-dark">
                                                                            Mr. Bikramaditya Barman
                                                                        </h4>

                                                                        <p class="para1"
                                                                            style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                            Assistant Librarian
                                                                        </p>

                                                                        <div
                                                                            style="line-height: 1; color: #333; font-size: 16px;">
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-phone"></i> +91-8638340172</p>
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-envelope"></i> bbarman1@rgu.ac
                                                                            </p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-4 pb-4">
                                                                <!--1 img-->
                                                                <div class="kd-course-1-tabs-card fix"
                                                                    style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                    <div style="height: 320px !important;" class="main-img">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            src="mobile-assets/library/niharika.jpg"
                                                                            class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
                                                                            alt="" sizes="(max-width: 352px) 100vw, 352px" />
                                                                    </div>
                                                                    <div style="padding: 20px 20px 10px 15px;">
                                                                        <h4 class="headd3 fw-bold text-dark">
                                                                            Mrs. Niharika Saikia
                                                                        </h4>

                                                                        <p class="para1"
                                                                            style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                            Assistant Librarian
                                                                        </p>

                                                                        <div
                                                                            style="line-height: 1; color: #333; font-size: 16px;">
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-phone"></i> +91-8721840281</p>
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-envelope"></i> nsaikia@rgu.ac
                                                                            </p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 pb-4">
                                                                <!--1 img-->
                                                                <div class="kd-course-1-tabs-card fix"
                                                                    style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                    <div style="height: 320px !important;" class="main-img">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            src="mobile-assets/library/pinku.jpg"
                                                                            class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
                                                                            alt="" sizes="(max-width: 352px) 100vw, 352px" />
                                                                    </div>
                                                                    <div style="padding: 20px 20px 10px 15px;">
                                                                        <h4 class="headd3 fw-bold text-dark">
                                                                            Mr. Pinku Kalita
                                                                        </h4>

                                                                        <p class="para1"
                                                                            style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                            Peon
                                                                        </p>

                                                                        <div
                                                                            style="line-height: 1; color: #333; font-size: 16px;">
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-phone"></i> +91-9954661838</p>
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-envelope"></i> -----</p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-4 pb-4">
                                                                <!--1 img-->
                                                                <div class="kd-course-1-tabs-card fix"
                                                                    style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                    <div style="height: 320px !important;" class="main-img">
                                                                        <img fetchpriority="high" decoding="async"
                                                                            src="mobile-assets/library/chintu.jpg"
                                                                            class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image"
                                                                            alt="" sizes="(max-width: 352px) 100vw, 352px" />
                                                                    </div>
                                                                    <div style="padding: 20px 20px 10px 15px;">
                                                                        <h4 class="headd3 fw-bold text-dark">
                                                                            Mr. Chintu Barman
                                                                        </h4>

                                                                        <p class="para1"
                                                                            style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                            Peon
                                                                        </p>

                                                                        <div
                                                                            style="line-height: 1; color: #333; font-size: 16px;">
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-phone"></i> +91-9101496074</p>
                                                                            <p class="para1 text-dark"><i
                                                                                    class="fas fa-envelope"></i> -----</p>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>
                                                <h5 class="pt-3 text-dark">Library Circulation Policy</h5>
                                                <p class="text-dark para1">RGU library offers print resources and e-resources
                                                    from the world over and makes it
                                                    easily available to students for
                                                    ready use. The various services offered by it are as follows:
                                                </p>
                                                <h5 class="pt-3 text-dark">Loan Privileges:</h5>
                                                <p class="text-dark para1">The number of books that can be borrowed and the
                                                    period of loan for the various
                                                    categories of members will be as
                                                    follows:
                                                </p>
                                                <h5 class="pt-3 text-dark">Circulation Parameters</h5>
                                                <p class="text-dark para1 ">Document loan eligibility varies for different
                                                    categories as given below:
                                                </p>
                                                <div class="pt-3">
                                                    <table class="table table-striped para1">
                                                        <thead>
                                                            <tr style="background-color: #27467A;" class=" text-white">
                                                                <th scope="col">User Category</th>
                                                                <th scope="col">Max. Number of Documents Allowed</th>
                                                                <th scope="col">Period</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Teaching Faculty/Teaching Staff</td>
                                                                <td>10 Books</td>
                                                                <td>45 Days</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PhD Scholars</td>
                                                                <td>08 Books</td>
                                                                <td>45 Days</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PG/UG Student</td>
                                                                <td>03 Books</td>
                                                                <td>30 Days</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Staff</td>
                                                                <td>03 Books</td>
                                                                <td>45 Days</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="pt-3">
                                                    <h4 class="mt-3 mb-3 text-dark headd3"><b>Categories of loan </b></h4>

                                                    <ul class="mb-5 para1">
                                                        <li class="para1 text-dark">a. The books marked as ‘REF’ with red spine
                                                            label shall not be issued
                                                            and may, therefore, be
                                                            consulted in the library only.</li>
                                                        <li class="para1 text-dark">b. All other books shall be available on an
                                                            ordinary loan. The period of
                                                            the loan shall be as
                                                            mentioned in Loan Privileges above. </li>
                                                        <li class="para1 text-dark">c. All current periodicals (Journals &
                                                            Magazines) and their current
                                                            volumes shall be treated as
                                                            ‘Reference’ books and shall not, therefore, be issued. </li>
                                                        <li class="para1 text-dark">d. The Librarian may regulate the issuance
                                                            of books in such a manner as
                                                            she/he may deem fit. In
                                                            case of great demand, books issued may be recalled at any time by
                                                            the Librarian. </li>
                                                        <li class="para1 text-dark">e. All residuary powers regarding the use of
                                                            reading material, provision
                                                            of other services and the
                                                            maintenance of discipline and decorum in the library shall rest with
                                                            the Librarian. </li>
                                                        <!-- <li class="">4.	Once reported to the librarian, the late penalties will be put on hold for 2(two) weeks giving the borrowers sufficient time to procure the lost books.</li> -->
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h4 class="text-dark headd3"><strong>Library Services:</strong> </h4>

                                                    <ul class="para1">
                                                        <li class="para1 text-dark">1. Online Public Access Catalogue (OPAC)
                                                        </li>
                                                        <li class="para1 text-dark">2. Institutional Repository</li>
                                                        <li class="para1 text-dark">3. Indian Research Information Network
                                                            System</li>
                                                        <li class="para1 text-dark">4. OPAC via Mobile cum Web-OPAC</li>
                                                        <li class="para1 text-dark">5. Internet & E-mail</li>
                                                        <li class="para1 text-dark">6. Offline CD-ROM Databases</li>
                                                        <li class="para1 text-dark">7. RemoteLog (Romote Access OFF Campus)</li>
                                                        <li class="para1 text-dark">8. E-Resources: 40000+ E-journals and
                                                            200000+ E-books</li>
                                                        <li class="para1 text-dark">9. E-Resource Browsing Centre</li>
                                                        <li class="para1 text-dark">10. Inter-Library Loan</li>
                                                        <li class="para1 text-dark">11. Reprographic Facilities Computers</li>
                                                        <li class="para1 text-dark">12. Monthly Book Display</li>
                                                        <li class="para1 text-dark">13. Display of Current Book List</li>
                                                        <li class="para1 text-dark">14. Career Literature</li>
                                                        <li class="para1 text-dark">15. Suggestion Box</li>
                                                        <li class="para1 text-dark">16. User Orientation</li>
                                                        <li class="para1 text-dark">17. Library User Guide Book</li>
                                                        <li class="para1 text-dark">18. Information Display Notice Board</li>
                                                        <li class="para1 text-dark">19. News Board</li>
                                                        <li class="para1 text-dark">20. Content List Service</li>
                                                        <li class="para1 text-dark">21. Online Purchase Suggestion Form</li>
                                                        <li class="para1 text-dark">22. Online Book Renewable Services</li>
                                                        <li class="para1 text-dark">23. Online Circulation Fines Checking
                                                            Services</li>
                                                        <li class="para1 text-dark">24. Online Own Account Maintaining Service
                                                        </li>
                                                        <li class="para1 text-dark">25. Online Book Holding Service</li>
                                                        <li class="para1 text-dark">26. Patron Circulation Status Service Via
                                                            E-mail</li>
                                                        <li class="para1 text-dark">27. Reading Room Facilities</li>
                                                        <li class="para1 text-dark"> 28. Drinking-Water Facilities</li>
                                                        <li class="para1 text-dark">29. Library Online Blogs Page Facilities
                                                        </li>
                                                        <li class="para1 text-dark">30. Online Feedback & Suggestion</li>
                                                        <li class="para1 text-dark">31. Ask a Librarian</li>
                                                        <li class="para1 text-dark">32. Current Awareness Service</li>
                                                    </ul>
                                                </div>
                                                <div class="pt-3">
                                                    <h3 class="text"><strong>Library Section: </strong> </h3>
                                                    <h4 class="mb-3 mt-3 text-dark"><b>Circulation Section</b></h4>
                                                    <p class="para1 text-dark" style="text-align: justify;">This section
                                                        represents the hub of library
                                                        activities where lending out of books to
                                                        readers is facilitated. Of all the library activities, the circulation
                                                        of books for home use
                                                        is a major public service provided by the library. Nearly all the
                                                        members of the library visit this
                                                        section for
                                                        getting books on loan for home use at one or the other time
                                                    </p>
                                                </div>
                                                <div>
                                                    <h4 class="mb-3 mt-3 text-dark"><b>Reference Section</b></h4>
                                                    <p class="para1 text-dark" style="text-align: justify;">The Reference
                                                        section of the library houses the
                                                        library’s reference books, which are those
                                                        materials that are meant to aid research by providing quick and
                                                        accessible information on any
                                                        particular topic.
                                                        These materials are usually used to find facts or provide broad
                                                        overviews of topics. They should not
                                                        be used as
                                                        major sources for papers or other projects. Dictionaries, encyclopedias,
                                                        bibliographies, and Thesis,
                                                        Dissertation, and Project reports are some of the most common reference
                                                        materials found in the
                                                        Library’s
                                                        Reference Collection.</p>
                                                </div>
                                                <div>
                                                    <h4 class="mb-3 mt-3 text-dark"><b>Periodical Section</b></h4>
                                                    <p class="para1 text-dark" style="text-align: justify;">Periodical has
                                                        contributed a great deal to
                                                        reference work by furnishing articles that appear more
                                                        recent than books on a subject, particularly in the ever-changing field
                                                        of politics, economic,
                                                        science and
                                                        technology. They contain articles and papers a subject about which the
                                                        library may have no books and
                                                        particularly as to matters of local as temporary interest, a subject and
                                                        which no books how yet been
                                                        written.
                                                        They form primary sources of information. Central Library collects
                                                        subject periodicals, newspapers,
                                                        and
                                                        magazines. It handles any current periodicals.</p>
                                                </div>
                                                <div>
                                                    <h4 class="mb-3 mt-3 text-dark"><b>General Book Section</b></h4>
                                                    <p class="para1 text-dark" style="text-align: justify;">The General Section
                                                        of the Library those books
                                                        are available which are related of your
                                                        departmental textbooks and Paperback of Journal and Magazine, General
                                                        book.</p>
                                                </div>
                                                <div>
                                                    <h4 class="mb-3 mt-3 text-dark"><b>E-Resource Browsing Section</b></h4>
                                                    <p class="para1 text-dark" style="text-align: justify;">The computer unit in
                                                        the Central Library
                                                        provided support maintenance and consultation for both
                                                        staff and students within the College. Students can have access to a
                                                        variety of Package from
                                                        software and
                                                        internet browsing facilities such as internet facilities, E-mail as well
                                                        as free user Printing for
                                                        course book
                                                        materials and research.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <div>
                            <section>
                                <div class="container">
                                    <div>
                                        <h3 class=" mb-5 text-dark"><strong>Library Resources:</strong></h3>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark "><b>BOOKS</b></h4>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library is a
                                                true treasure trove of knowledge and information. Our total
                                                collection is 30,397+ books on various subjects, including arts & humanities,
                                                Social Science, Pure Science
                                                and technology, and more. Our mission is to provide equal access to information
                                                for all who wish to learn,
                                                and we strive to maintain a diverse collection to accommodate all interests.</b>
                                            </p>
                                        </div>
                                        <hr />
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>JOURNALS & ELECTRONIC RESOURCES</b></h4>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library,
                                                provide access to a variety of ejournal and eBooks resources to aid in
                                                your studies. Our extensive collection includes 31 Nos printed journals. 41,426+
                                                e-journals and over 214130+
                                                eBooks to choose from. </b>
                                            </p>
                                        </div>
                                        <hr />
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>CD-ROMS</b></h4>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library has
                                                more than 1000 CD/DVDs of Various books, encyclopedias, dictionaries &
                                                and manuals. </b>
                                            </p>
                                        </div>
                                        <hr />
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>NEWS PAPER & MAGAZINE</b></h4>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">The library subscribes
                                                to 17+ magazines and 8 Nos newspapers with multiple copies to cater
                                                to the needs of the students and academic community </b>
                                            </p>
                                            <h4 class="mt-3 mb-3 text-dark"><b>List of Journal:</b></h4>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <ul>
                                                        <li class="para1  text-dark"> 1. Journal of Perinatal, Pediatric and
                                                            Neonatal Nursing </li>
                                                        <li class="para1  text-dark"> 2. Journal of Nursing Research, Education
                                                            and Management</li>
                                                        <li class="para1  text-dark"> 3. Journal of Neurological, Psychiatric
                                                            and Mental Health Nursing </li>
                                                        <li class="para1  text-dark">4. Journal of Community and Social Health
                                                            Nursing</li>
                                                        <li class="para1  text-dark">5. International Journal of Studies in
                                                            Midwifery and Women's Health </li>
                                                        <li class="para1  text-dark">6. International Journal of Research in
                                                            Medical Surgical Nursing </li>
                                                        <li class="para1  text-dark">7. International Journal of Medical
                                                            Surgical Nursing </li>
                                                        <li class="para1  text-dark">8. International Journal of Community
                                                            Health Nursing </li>
                                                        <li class="para1  text-dark">9. International Journal of Pediatric
                                                            Nursing</li>
                                                        <li class="para1  text-dark">10. International Journal of Women Health
                                                            Nursing</li>
                                                        <li class="para1  text-dark">11. International Journal of Nursing
                                                            Critical Care</li>
                                                        <li class="para1  text-dark">12. International Journal of Nursing
                                                            Obstetrics, Perintal and Neonatal Nursing
                                                        </li>
                                                        <li class="para1  text-dark">13. International Journal of Neurological
                                                            Nursing</li>
                                                        <li class="para1  text-dark">14. International Journal of Geriatric
                                                            Nursing</li>
                                                        <li class="para1  text-dark">15. Indian Journal of Fisheries </li>
                                                        <li class="para1  text-dark">16. Indian Journal of Animal Research </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-5">
                                                    <ul>
                                                        <li class="para1  text-dark"> style="text-align: justify;">17. Indian
                                                            Journal of Physics </li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">18.
                                                            Proceeding of the National Academy of Sciences India</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">19. All India
                                                            Reporter </li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">20. Supreme
                                                            Court Cases</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">21. Current
                                                            Science</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">22. Oitijya
                                                            (The Heritage)</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">23. The
                                                            Chartered Accountant Student</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">24. Asian
                                                            Textile Journal</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">25. Abhiskaar
                                                        </li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">26. IEEE
                                                            Spectrum</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">27. IIT
                                                            Madras Shaastra</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">28.
                                                            Everyman's Science</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">29. Photonics
                                                            Spectra</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">30. Corporate
                                                            Citizen</li>
                                                        <li class="para1  text-dark"> style="text-align: justify;">31. Oneness
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="res_heading2 mb-5">
                                                    <h4 class="mt-3 mb-3 text-dark"><b>List Magazine: </b></h4>
                                                    <ol>
                                                        <li class="para1 text-dark">Yojana</li>
                                                        <li class="para1 text-dark">Kurukshetra</li>
                                                        <li class="para1 text-dark">Down to Earth</li>
                                                        <li class="para1 text-dark">India Today</li>
                                                        <li class="para1 text-dark">Competition Success</li>
                                                        <li class="para1 text-dark">Careers 360</li>
                                                        <li class="para1 text-dark">Economic and Political Weekly </li>
                                                        <li class="para1 text-dark">Corporate Citizen</li>
                                                        <li class="para1 text-dark">Engineering Success Review</li>
                                                        <li class="para1 text-dark">New India Samachar</li>
                                                        <li class="para1 text-dark">Prabhat Swaraswati</li>
                                                        <li class="para1 text-dark">Matsyagandha</li>
                                                        <li class="para1 text-dark">Student Company Secretary</li>
                                                        <li class="para1 text-dark">The Week</li>
                                                        <li class="para1 text-dark">Reader's Digest</li>
                                                        <li class="para1 text-dark">Business World</li>
                                                        <li class="para1 text-dark">Southern Economist</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="res_heading2 mb-5">
                                                    <h4 class="mt-3 mb-3 text-dark"><b>List of Newspaper:</b></h4>
                                                    <ol>
                                                        <li class="para1 text-dark">The Hindu</li>
                                                        <li class="para1 text-dark">Times of India</li>
                                                        <li class="para1 text-dark">The Assam Tribune </li>
                                                        <li class="para1 text-dark">Asomiya Pratidin</li>
                                                        <li class="para1 text-dark">Amar Asom </li>
                                                        <li class="para1 text-dark">TheTelegraph </li>
                                                        <li class="para1 text-dark">Financial Express </li>
                                                        <li class="para1 text-dark">Dainik Purbudoy</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <h4 class="mt-3 mb-3 text-dark"><b>Library Subscribe Database</b></h4>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card overflow-hidden mb-0">
                                                    <a href="https://discovery1.delnet.in/" target="_black">
                                                        <div class="item7-card-img">
                                                            <img src="https://resource.rgu.ac/assets/images/library/delnetlogo.jpg"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                        <div class="card-body pt-2 pr-2">
                                                            <a href="https://discovery1.delnet.in/"
                                                                target="_black"><b>https://discovery1.delnet.in/</b></a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card overflow-hidden mb-0">
                                                    <a href="https://www.jstor.org/action/showLogin" target="_black">
                                                        <div class="item7-card-img">
                                                            <img src="https://resource.rgu.ac/assets/images/library/jsterlogo.jpg"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                        <div class="card-body pt-2 pr-2">
                                                            <a href="https://www.jstor.org/action/showLogin"
                                                                target="_black"><b>https://www.jstor.org/action/showLogin</b></a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card overflow-hidden mb-0">
                                                    <a href="https://www.manupatrafast.com/ " target="_black">
                                                        <div class="item7-card-img">
                                                            <img src="https://resource.rgu.ac/assets/images/library/manupatra.jpg"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                        <div class="card-body pt-2 pr-2">
                                                            <a href="https://www.manupatrafast.com/ "
                                                                target="_black"><b>https://www.manupatrafast.com/
                                                                </b></a>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card overflow-hidden mb-0">
                                                    <a href="https://ndl.iitkgp.ac.in/ " target="_black">
                                                        <div class="item7-card-img">
                                                            <img src="https://resource.rgu.ac/assets/images/library/club-logo.jpg"
                                                                alt="img" class="cover-image">
                                                        </div>
                                                        <div class="card-body pt-2 pr-2">
                                                            <a href="https://ndl.iitkgp.ac.in/ "
                                                                target="_black"><b>https://ndl.iitkgp.ac.in/ </b></a>
                                                        </div>
                                                        <br />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mt-3 mb-3 text-dark"><b>Open Access Resources:</b></h4>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-BOOKS</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. Directory of Open Access Books <span> <a class="text-primary "
                                                            href="https://www.doabooks.org/ "
                                                            target="_black"><b>https://www.doabooks.org/</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. INTECH Open Access Books <span> <a class="text-primary "
                                                            href="https://www.intechopen.com/books"
                                                            target="_black"><b>https://www.intechopen.com/books</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    3. AMS Free Online Books <span><a class="text-primary "
                                                            href=" https://www.ams.org/publicoutreach/math-history/math-history#freehistbooks "
                                                            target="_black"><b>
                                                                https://www.ams.org/publicoutreach/math-history/math-history#freehistbooks
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    4. Project Gutenberg Free E-Books <span><a class="text-primary "
                                                            href="https://www.gutenberg.org/ "
                                                            target="_black"><b>https://www.gutenberg.org/ </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-COURSES</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. NPTEL Web & Video Courses <span> <a class="text-primary "
                                                            href="https://nptel.ac.in/ "
                                                            target="_black"><b>https://nptel.ac.in/</b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-DATABASES</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. World Bank: Open Knowledge Repository <span> <a class="text-primary "
                                                            href="https://openknowledge.worldbank.org/handle/10986/23705  "
                                                            target="_black"><b>https://openknowledge.worldbank.org/handle/10986/23705
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. Open Access Library <span> <a class="text-primary "
                                                            href="https://www.oalib.com/  "
                                                            target="_black"><b>https://www.oalib.com/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    3. DLIST: UA Campus Repository <span> <a class="text-primary "
                                                            href="https://repository.arizona.edu/handle/10150/105066   "
                                                            target="_black"><b>https://repository.arizona.edu/handle/10150/105066
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    4. BioMed Central <span> <a class="text-primary "
                                                            href="https://www.biomedcentral.com/  "
                                                            target="_black"><b>https://www.biomedcentral.com/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    5. PubMed Central <span> <a class="text-primary "
                                                            href="https://www.ncbi.nlm.nih.gov/pmc/  "
                                                            target="_black"><b>https://www.ncbi.nlm.nih.gov/pmc/ </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-JOURNALS</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. Directory of Open Access Journals <span> <a class="text-primary "
                                                            href="https://doaj.org/   " target="_black"><b>https://doaj.org/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. INTECH Open Access Journals <span> <a class="text-primary "
                                                            href="https://www.intechopen.com/journals  "
                                                            target="_black"><b>https://www.intechopen.com/journals
                                                            </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-PATENTS</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. EPO: Espacenet Patent <span> <a class="text-primary "
                                                            href="https://www.epo.org/en/searching-for-patents/technical/espacenet#tab1  "
                                                            target="_black"><b>https://www.epo.org/en/searching-for-patents/technical/espacenet#tab1
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. FPO: Free Patents Online <span> <a class="text-primary "
                                                            href="https://www.freepatentsonline.com/search.html  "
                                                            target="_black"><b>https://www.freepatentsonline.com/search.html
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    3. Google Patents <span> <a class="text-primary "
                                                            href="https://patents.google.com/  "
                                                            target="_black"><b>https://patents.google.com/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    4. Patent Lens <span> <a class="text-primary "
                                                            href="https://www.lens.org/lens/search/patent/list?p=0&n=10&l=EN  "
                                                            target="_black"><b>https://www.lens.org/lens/search/patent/list?p=0&n=10&l=EN
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    5. USPTO <span> <a class="text-primary " href="http://patft.uspto.gov/  "
                                                            target="_black"><b>http://patft.uspto.gov/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    6. WIPO: PATENTSCOPE <span> <a class="text-primary "
                                                            href="https://patentscope.wipo.int/search/en/search.jsf  "
                                                            target="_black"><b>https://patentscope.wipo.int/search/en/search.jsf
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    7. Intellectual Property India Patents <span> <a class="text-primary "
                                                            href="https://www.ipindia.gov.in/patents.htm  "
                                                            target="_black"><b>https://www.ipindia.gov.in/patents.htm
                                                            </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-NEWSPAPERS</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. World Newspaper Directory <span> <a class="text-primary "
                                                            href="https://www.onlinenewspapers.com/index.shtml "
                                                            target="_black"><b>https://www.onlinenewspapers.com/index.shtml
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. The Business Line <span> <a class="text-primary "
                                                            href="https://www.thehindubusinessline.com/  "
                                                            target="_black"><b>https://www.thehindubusinessline.com/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    3. The Business Standard <span> <a class="text-primary "
                                                            href="https://www.business-standard.com/ "
                                                            target="_black"><b>https://www.business-standard.com/</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    4. The Economic Times <span> <a class="text-primary "
                                                            href="https://economictimes.indiatimes.com/  "
                                                            target="_black"><b>https://economictimes.indiatimes.com/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    5. The Hindu <span> <a class="text-primary "
                                                            href=" https://www.thehindu.com/ " target="_black"><b>
                                                                https://www.thehindu.com/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    6. The Hindustan Times <span> <a class="text-primary "
                                                            href="https://www.hindustantimes.com/ "
                                                            target="_black"><b>https://www.hindustantimes.com/</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    7. The Indian Express <span> <a class="text-primary "
                                                            href="https://indianexpress.com/ "
                                                            target="_black"><b>https://indianexpress.com/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    8. The Times of India <span> <a class="text-primary "
                                                            href="https://timesofindia.indiatimes.com/  "
                                                            target="_black"><b>https://timesofindia.indiatimes.com/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    9. The Telegraph <span> <a class="text-primary "
                                                            href="https://www.telegraphindia.com/  "
                                                            target="_black"><b>https://www.telegraphindia.com/ </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-REFERENCES</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. Cambridge Dictionary Online <span> <a class="text-primary "
                                                            href="https://dictionary.cambridge.org/  "
                                                            target="_black"><b>https://dictionary.cambridge.org/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. Foreign Language Dictionary- French English Dictionary <span> <a
                                                            class="text-primary "
                                                            href="https://dictionary.cambridge.org/dictionary/french-english/  "
                                                            target="_black"><b>https://dictionary.cambridge.org/dictionary/french-english/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    3. One Look Dictionary <span> <a class="text-primary "
                                                            href="https://www.onelook.com/ "
                                                            target="_black"><b>https://www.onelook.com/</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    4. Scholarpedia <span> <a class="text-primary "
                                                            href="http://www.scholarpedia.org/article/Main_Page "
                                                            target="_black"><b>http://www.scholarpedia.org/article/Main_Page</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    5. Subject Dictionary- Business/Finance <span> <a class="text-primary "
                                                            href=" # "><b></b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    6. Subject Dictionary- Library & Information Science <span> <a
                                                            class="text-primary " href="https://odlis.abc-clio.com/"
                                                            target="_black"><b>https://odlis.abc-clio.com/</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    7. Subject Dictionary- Medical Science Science <span> <a
                                                            class="text-primary "
                                                            href="https://www.medicinenet.com/medterms-medical-dictionary/article.htm "
                                                            target="_black"><b>https://www.medicinenet.com/medterms-medical-dictionary/article.htm</b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    8. Subject Dictionary- Subject Dictionary- Technology <span> <a
                                                            class="text-primary " href="# "><b></b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    9. Wikipedia <span> <a class="text-primary "
                                                            href="https://www.wikipedia.org/ "
                                                            target="_black"><b>https://www.wikipedia.org/</b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>E-THESES & DISSERTATIONS</b></h4>
                                            <ul>
                                                <li class=" para1 text-dark">
                                                    1. ShodhGanga: Indian Electronic Theses & Dissertations <span> <a
                                                            class="text-primary " href="https://dictionary.cambridge.org/  "
                                                            target="_black"><b>https://dictionary.cambridge.org/
                                                            </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    2. NDLTD <span> <a class="text-primary " href="https://ndltd.org/  "
                                                            target="_black"><b>https://ndltd.org/ </b></a></span>
                                                </li>
                                                <li class=" para1 text-dark">
                                                    3. The DART-Europe E-These Portal <span> <a class="text-primary "
                                                            href="https://www.dart-europe.eu/basic-search.php "
                                                            target="_black"><b>https://www.dart-europe.eu/basic-search.php</b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <div>
                            <section>
                                <!--1 row-->
                                <div class="container">
                                    <h3 class="headd2 mb-2 text-dark"><strong>Online Public Access Catalogue:</strong></h3>
                                    <div class="res_heading mb-2">
                                        <p class="para1 mt-2 text-dark"><b>The Library Online Public Access Catalog (OPAC) </b>
                                            is a digital database that allows
                                            users to search for
                                            and access materials held within a library's collection. It serves as an electronic
                                            gateway to the library's
                                            holdings,
                                            providing users with a convenient way to locate books, journals, multimedia
                                            resources, and other materials
                                            available
                                            for borrowing or reference.
                                        </p>
                                    </div>
                                    <hr />
                                    <div class="res_heading mb-5">
                                        <ul>
                                            <li class=" para1 text-dark">
                                                You may access via : - <span><a class="text-primary"
                                                        href="https://opac.rgu.ac  " target="_black"><b>https://opac.rgu.ac
                                                        </b></a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <div>
                            <section>
                                <!--1 row-->
                                <div class="container">
                                    <div>
                                        <div class=" mb-5">
                                            <h3 class="headd2 mb-2 text-dark"><strong>Digital Repository:</strong></h3>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Welcome to the Digital
                                                Repository at The Assam Royal Global University.
                                                This Institutional Repository is an Institutional Repository of RGU setup to
                                                collect, organize,
                                                preserve and provide access to the intellectual (scholarly) output of RGU
                                                faculty, students,
                                                staff and others associated with the Institute. This Digital Repository serves
                                                as a platform to
                                                faculty, researchers, students and staff members of the Institute to share their
                                                research work
                                                with wider community. Institutional Repository accepts documents viz., journal
                                                articles, conference
                                                papers, book chapters, working /technical papers, reports, theses and
                                                dissertations
                                                , presentations and any other resources submitted as part of academic
                                                requirement at
                                                the Institute and other forms of scholarly documents. Wherever possible and
                                                available,
                                                we will make an effort to provide access to the full- text of the documents
                                                covered in
                                                the digital repository, without violating copyrights/rights of the author or
                                                publisher,
                                                as relevant to each work. Please feel free to write to us at <a
                                                    class="text-primary" href="mailto:library@rgu.ac"><b>library@rgu.ac</b></a>
                                                ,
                                                if you want to know more about this service or have any questions with regard to
                                                depositing your documents
                                                or
                                                accessing deposited documents.
                                            </p>
                                            <ul>
                                                <li class="para1  text-dark">
                                                    You may access via : - <span><a class="text-primary"
                                                            href="http://192.168.0.16:8080/jspui/"
                                                            target="_black"><b>http://192.168.0.16:8080/jspui/ </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <div class="res_heading mb-5">
                                            <h3 class="headd2 mb-2 text-dark"><strong>Research Repository: </strong></h3>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Welcome to the Research
                                                Repository at The Assam Royal Global University. Research
                                                Repository is the official publications repository of The Assam Royal Global
                                                University. All the papers
                                                (Article, Conference paper, Book chapter, Book, Book review, Report etc), having
                                                RGU affiliation, are
                                                archived in this repository.
                                                Archiving papers would be beneficial to RGU researchers as it increases the
                                                web-wide visibility, and access
                                                to all users. It exposes metadata to famous academic search engines such as BASE
                                                <span
                                                    class="text-primary font-weight-bold">(https://www.base-search.net)</span>.
                                                Also, it will be helpful for faculty and school administrators generate list of
                                                publications easily for
                                                various reporting requirements. RGU researchers are requested to send their
                                                papers to library@rgu.ac .
                                                Library team will help uploading the papers along with metadata in this
                                                repository.
                                            </p>
                                            <ul>
                                                <li class=" text-dark ">
                                                    You may access via : - <span><a href="#" target="_black"><b>(Coming
                                                                Soon)</b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <div class="res_heading mb-5">
                                            <h3 class="headd2 mb-2 text-dark"><strong>Indian Research Information Network
                                                    System: </strong></h3>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">IRINS is web-based
                                                Research Information Management (RIM) service provided by the
                                                Information and Library Network (INFLIBNET) Centre, An Inter-University Centre
                                                of University Grants
                                                Commission, Gandhinagar, Gujarat. The portal facilitates the academic, R&D
                                                organisations and faculty
                                                members, scientists to collect, curate and showcase the scholarly communication
                                                activities and provide an
                                                opportunity to create the scholarly network. The IRINS is available as free
                                                soware-as-service to the
                                                academic and R&D organisations in India.
                                                The IRINS would support to integrate the existing research management system
                                                such as HR system, course
                                                management, grant management system, institutional repository, open and
                                                commercial citation databases,
                                                scholarly publishers, etc. It has integrated with academic identity such as
                                                ORCID ID, ScopusID, Research ID,
                                                Microso Academic ID, Google Scholar ID for ingesting the scholarly publication
                                                from various sources
                                            </p>
                                            <ul>
                                                <li class=" text-dark ">
                                                    You may access RGU IRINS Portal via at : - <span><a class="text-primary"
                                                            href="https://rguni.irins.org/ "
                                                            target="_black"><b>https://rguni.irins.org/ </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <div class="res_heading mb-5">
                                            <h3 class="headd2 mb-2 text-dark"><strong>RGU Remote Log: </strong></h3>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Most of the publishers
                                                use IP filtering as a de facto standard for authenticating
                                                authorized users in subscribing institutions and providing access to e-resources
                                                to them. While IP-based
                                                access is most convenient, safe and hassle-free authentication mechanism for
                                                publishers as well as for
                                                subscribing institutions, it has some limitations. One of the most serious
                                                limitations of IP-filtered access
                                                to e-resources is that the users can access e-resources only when they are in
                                                the Institute campus. Ideally,
                                                an authorized user should be able to access e-resources irrespective of his /
                                                her physical location at any
                                                time as long as he has access to the Internet.
                                            </p>
                                            <p class="para1 mt-2 text-dark">In order to overcome this limitation, the RemoteLog
                                                has adopted Shibboleth, a
                                                standard-based propitiatory software, for authenticating authorized users from
                                                institutions and provide them
                                                seamless access to e-resources from anywhere, anytime. RemoteLog offers a
                                                mechanism for users to access
                                                multiple resources within a federated single sign-on framework. The goal of the
                                                RemoteLog is to allow users
                                                to access internal and external resources seamlessly using a single,
                                                institutionally controlled identity.
                                                This would not only allow authorized users to access e-resources from anywhere,
                                                anytime but would also
                                                circumvent the requirement of maintaining multiple passwords for multiple
                                                resources in multiple domains.
                                            </p>
                                            <ul>
                                                <li class=" text-dark ">
                                                    You may access RGU Remote Log Portal via at : - <span><a
                                                            class="text-primary" href="https://rgu.remotlog.com/ "
                                                            target="_black"><b>https://rgu.remotlog.com/ </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <div>
                            <section>
                                <!--1 row-->
                                <div class="container">
                                    <div>
                                        <div class=" mb-5">
                                            <h3 class="headd2 mb-2 text-dark"><strong>Plagiarism Software:</strong></h3>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Library offers
                                                Plagiarism Checking Service using a “Drillbit” tool to its registered users
                                                at RGUCL.
                                                Library has a license to this tool. To get the similarity/plagiarism checking
                                                done and have the similarity
                                                report generated,
                                                please write to us at <a class="text-primary"
                                                    href="mailto:library@rgu.ac"><b>library@rgu.ac</b></a>.ac
                                                along a soft copy of the document ( i.e. thesis, dissertation, manuscript of
                                                article,
                                                assignment etc.) to be checked in PDF, DOCX file format. The users who have
                                                credentials to access Drillbit,
                                                they may directly access it by visiting <a class="text-primary"
                                                    href="https://www.drillbitplagiarism.com/ "><b>https://www.drillbitplagiarism.com/
                                                    </b></a>
                                            </p>
                                            <p class="para1 mt-2 text-dark" style="text-align: justify;">About Software:
                                                Drillbit Plagiarism is a platform designed to detect and prevent
                                                plagiarism in academic and professional writing. It offers a range of tools and
                                                services to help individuals
                                                and organizations ensure the originality of their content. The platform employs
                                                advanced algorithms to
                                                compare submitted documents against a vast database of sources, flagging any
                                                instances of potential
                                                plagiarism. It's a valuable resource for educators, researchers, writers, and
                                                businesses who want to
                                                maintain integrity in their work and avoid unintentional plagiarism.
                                            </p>
                                            <ul>
                                                <li class="para1  text-dark">
                                                    More details about Drillbit can be access here :- <span><a
                                                            class="text-primary"
                                                            href="https://www.drillbitplagiarism.com/ "><b>https://www.drillbitplagiarism.com/
                                                            </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <hr />
                                        <div class=" mb-3">
                                            <h3 class="mb-2 headd2 text-dark"><strong>Plagiarism policy:</strong></h3>
                                            <ul>
                                                <li class="para1 text-dark"><b>1. Introduction</b></li>
                                                <li class="para1 text-dark">1.1. This "Anti-Plagiarism policy" is subject to
                                                    Assam Royal Global University's "Policy
                                                    for Research Promotion".</li>
                                                <li class="para1 text-dark">1.2. Objective: The aim of this policy is to promote
                                                    scholarly excellence, to create
                                                    academic awareness about responsible conduct of research and to prevent
                                                    plagiarism in academic writings
                                                    and publications.</li>
                                                <li class="para1 text-dark">1.3. Scope: Applicable to students, faculty, and
                                                    staff, who submit to the university
                                                    academic resources for award of degrees or for publication.</li>
                                                <li class="para1 text-dark">1.4. Plagiarism: For the purposes of this document,
                                                    the definition given by
                                                    Merriam-Webster online dictionary is to be followed. "To plagiarize is "to
                                                    steal and pass off (the ideas
                                                    or words of another) as one's own: use (another's production) without
                                                    crediting the source, [...or] to
                                                    commit literary theft: present as new and original an idea or product
                                                    derived from an existing source. "
                                                </li>
                                                <li class="para1 text-dark">1.5. Academic resources: will apply to all print and
                                                    electronic materials submitted for
                                                    publication.</li>
                                                <li class="para1 text-dark">1.6. The University, following UGC guidelines, has
                                                    made plagiarism check mandatory for all
                                                    its PhD research scholars and for all academic resources submitted for
                                                    publication <b>(REGD. NO. D.
                                                        L.-33004/99 Date TUESDAY, JULY 31, 2018)</b></li>
                                                <li class="para1 text-dark">1.7. Students submitting dissertations and project
                                                    reports as part of requirements for
                                                    their Master's Degree are directed to use the plagiarism checking facility
                                                    available in all the campuses
                                                    of the University.</li>
                                                <li class="para1 text-dark">1.8. All departments shall educate students on
                                                    observing ethical guidelines in conducting
                                                    research, on adhering to accepted norms on avoidance of plagiarism, and on
                                                    giving proper acknowledgement
                                                    to authors and publications cited in research papers and publications.</li>
                                                <li class="para1 text-dark">1.9. All departments shall ensure that students are
                                                    adequately informed on plagiarism
                                                    policy and procedures of the University.</li>
                                                <li class="para1 text-dark">1.10. Plagiarism will be detected with the aid of
                                                    plagiarism detection software.
                                                    <b>(Currently the University uses "Drillbrit Plagiarism Detection
                                                        Software")</b>.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">

                                            <ul>
                                                <li class="para1 text-dark"><b>2. Protocol for the use of "Drillbrit" Plagiarism
                                                        Checker</b></li>
                                                <li class="para1 text-dark">2.1. Access to the " Drillbrit '' Plagiarism
                                                    Checker, licensed by the University, will be
                                                    with the Librarians of the University. Since the University has procured
                                                    only a single user license to
                                                    test out the capacity and reliability of the software, access time to the
                                                    software at different campuses
                                                    is restricted to specific days as indicated below. Use of this software can
                                                    be carried out on
                                                    non-allocated dates with mutual understanding between the librarians.</li>
                                                <li class="para1 text-dark">2.2. Faculty members or students who want to check
                                                    documents drafted by them for possible
                                                    plagiarism are to email a request to the respective librarians with the MS
                                                    WORD file attached. The email
                                                    subject should be named: "Plagiarism check". Students should copy this email
                                                    to their respective
                                                    supervisors/guides. Name, Department, School, and Name of the
                                                    supervisor/guide should be certainly
                                                    indicated.</li>
                                                <li class="para1 text-dark">2.3. After the plagiarism check, the librarian will
                                                    send the report generated (PDF format)
                                                    to both the students as well as the supervisor/guide.</li>
                                                <li class="para1 text-dark">2.4. The UGC has not indicated the percentage of
                                                    similarity permitted. Till further notice
                                                    with regards to this, the University will not certify works containing more
                                                    than 10% similarity.</li>
                                                <li class="para1 text-dark">2.5. A "Plagiarism Verification Certificate" will be
                                                    issued by the campus librarian to the
                                                    concerned PhD supervisor/guide and director of research.</li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">

                                            <ul>
                                                <li class="para1 text-dark"><b>3. Violation and Consequences.</b></li>
                                                <li class="para1 text-dark">3.1. As per UGC regulations, the responsibility to
                                                    ensure that the work is original and
                                                    free of plagiarism lies with the research scholar and the supervisor/guide.
                                                </li>
                                                <li class="para1 text-dark">3.2. All PhD theses are to contain a "declaration of
                                                    originality" by the researcher and
                                                    the supervisor/guide respectively.</li>
                                                <li class="para1 text-dark">3.3. Violation of the Copyright Act through
                                                    plagiarism is considered a legal offence and
                                                    may attract prosecution in a court of law leading to various penalties
                                                    depending on the severity of the
                                                    crime.</li>
                                                <li class="para1 text-dark">3.4. The University will not accept PhD theses and
                                                    academic resources submitted for
                                                    publication, without the "Plagiarism Verification Certificate".</li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">

                                            <ul>
                                                <li class="para1 text-dark"><b>4. Levels of Plagiarism</b></li>
                                                <li class="para1 text-dark">Plagiarism would be quantified into following levels
                                                    in ascending order of severity for
                                                    the purpose of its <br /> <b>Similarities up to 10% - Minor
                                                        similarities.</b></li>
                                            </ul>
                                        </div>
                                        <div class="res_heading mb-5">
                                            <ul>
                                                <li class=" text-dark ">
                                                    Courtesy: UGC Guideline 2018 : - <span><a class="text-primary"
                                                            target="_black"
                                                            href="https://www.ugc.gov.in/pdfnews/7771545_academic-integrity-Regulation2018.pdf "><b>https://www.ugc.gov.in/pdfnews/7771545_academic-integrity-Regulation2018.pdf
                                                            </b></a></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                        <div>
                            <section>
                                <!--1 row-->
                                <div class="container">
                                    <div>
                                        <h3 class="headd2 mb-2 text-dark"><strong>Departmental Library: </strong></h3>
                                        <!-- <h3 class = "font-weight-bold  text-primary mb-5"><strong>Departmental Library: </strong></h3> -->
                                        <div class="mb-2">
                                            <p class="para1 mt-2 text-dark">A departmental library serves as a specialized
                                                resource centre within an academic
                                                institution, focusing on the specific needs of a particular department or
                                                discipline. Whether it's history,
                                                biology, economics, or any other field, a departmental library is tailored to
                                                support the research,
                                                teaching, and learning activities of its associated department.
                                                Apart from the Central Library, separate departmental libraries are set up to
                                                provide a more accessible and
                                                a more personalised reading space. Departmental Library may be located within
                                                the department concerned and
                                                Departmental libraries exhibit greater convenience; saving of student and staff
                                                time; increased Use of
                                                journals and reference works.

                                            </p>
                                        </div>
                                        <hr />
                                        <div class="res_heading2 mb-5">
                                            <h3 class="headd2 mb-2 text-dark"><strong>Departmental Libraries are as below:
                                                </strong></h3>
                                            <ol>
                                                <li class="para1 text-dark">Department of English</li>
                                                <li class="para1 text-dark">Department of Geology</li>
                                                <li class="para1 text-dark">Department of Pharmacy</li>
                                                <li class="para1 text-dark">Department of Geography</li>
                                                <li class="para1 text-dark">Department of Microbiology</li>
                                                <li class="para1 text-dark">Department of Physiotherapy</li>
                                                <li class="para1 text-dark">Department of Fashion Design & Technology</li>
                                                <li class="para1 text-dark">Department of Zoology</li>
                                                <li class="para1 text-dark">Department of Indian Knowledge System</li>
                                                <li class="para1 text-dark">Department of Mechanical Engineering</li>
                                                <li class="para1 text-dark">Department of History</li>
                                                <li class="para1 text-dark">Department of Nursing</li>
                                                <li class="para1 text-dark">Department of Mathematics </li>
                                            </ol>
                                        </div>


                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- YouTube-Style Tabs End -->


        </div>
    </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->

            <img src="mobile-assets/library/1.png"/>


        <div class="elementor-widget-wrap elementor-element-populated" style="background-image: url('mobile-assets/library/bg.svg'); background-size: cover;">

        <div class=" g-0" style="padding-top: 20px; padding-bottom: 20px;">

            <div class="d-flex carousel-nav p-3" >
                <a style="font-weight: 700;" href="#" class="col active"><span class="p-3 text-white rounded" style="background-color: #27467A">About Us</span></a>
                <a style="font-weight: 700;" href="#" class="col"><span class="p-3 text-white rounded" style="background-color: #27467A">Resources</span></a>
                <a style="font-weight: 700;" href="#" class="col"><span class="p-3 text-white rounded" style="background-color: #27467A">OPAC</span></a>
                <a style="font-weight: 700;" href="#" class="col"><span class="p-3 text-white rounded" style="background-color: #27467A">Repository</span></a>
                <a style="font-weight: 700;" href="#" class="col"><span class="p-3 text-white rounded" style="background-color: #27467A">Plagiarism</span></a>
                <a style="font-weight: 700;" href="#" class="col"><span class="p-3 text-white rounded" style="background-color: #27467A">Departmental Library</span></a>
            </div>


            <div class="owl-carousel owl-1 pt-5">

                <div class="">
                    <section>
                        <!--1 row-->
                        <div>
                            <div class="container-fluid g-0">

                                <!--About Section-->
                                <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                                    <section style="background-image: url(assets/img/patternbg/libpattern.svg); padding-top: 10px;"
                                        class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="f481aaf" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-968af55"
                                                data-id="968af55" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                                        data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                                                <div style="border: 2px solid #fff;"
                                                                    class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                                    <img decoding="async" src="mobile-assets/library/headimg1.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-60 elementor-top-column elementor-element elementor-element-9b49111"
                                                data-id="9b49111" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                                        data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="prthalign">
                                                                <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                                                    About the Library</h1>
                                                                <div class="para1 text-dark kd-para-1 disc" data-splitting
                                                                    style="text-align: justify;">
                                                                    <p class="text-dark para1">A window to the world of latest
                                                                        information in Science, Engineering, Technology, Management, Humanities &
                                                                        Social
                                                                        Sciences,
                                                                        etc. The library with its modern collection of knowledge resources and
                                                                        innovative information
                                                                        services provides necessary support for teaching, learning, research
                                                                        activities
                                                                        of the
                                                                        University by creating state-of-the-art facilities for the academic
                                                                        community.
                                                                        The
                                                                        library is sufficiently automated using <span class="fw-bold">KOHA
                                                                            ILMS</span>
                                                                        for running its housekeeping operation
                                                                        and providing online access to catalogue and e-resource facility. The entire
                                                                        Library
                                                                        collections are made available through OPAC (On-line Public Access
                                                                        Catalogue).
                                                                        OPAC
                                                                        can be accessed through in campus and off-campus. Library collections and
                                                                        the
                                                                        e-resources
                                                                        can be searched through Web OPAC. The library offers a range of information
                                                                        services to
                                                                        support the learning process which is set to the highest professional
                                                                        standards.
                                                                        The
                                                                        university is using <span class="fw-bold">DSpace software</span> for its
                                                                        institutional repository (Digital Library)
                                                                        which preserves the institute's intellectual output for campus-wide access
                                                                        and
                                                                        digital
                                                                        preservation for the posterity. Our total collection is <span
                                                                            class="fw-bold">30,397 Nos + books, 31 Nos +
                                                                            Printed Journals and 17 Nos + Printed Magazine.</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--End About-->

                                <!--About Section-->
                                <div data-elementor-type="wp-page" data-elementor-id="704" class="elementor elementor-704">
                                    <section style=" padding-top: 50px;"
                                        class="elementor-section elementor-top-section elementor-element elementor-element-f481aaf elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="f481aaf" data-element_type="section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9b49111"
                                                    data-id="9b49111" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-c8de01e elementor-widget elementor-widget-go-s-heading"
                                                            data-id="c8de01e" data-element_type="widget" data-widget_type="go-s-heading.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="prthalign">
                                                                    <div class="para1 text-dark kd-para-1 disc" data-splitting
                                                                        style="text-align: justify;">
                                                                        <p class="text-dark para1">The RGU Library boasts an impressive 8,000 square feet
                                                                            of modern, high-tech
                                                                            space. This centrally air-conditioned,
                                                                            well-furnished duplex library serves as an integrated resource center,
                                                                            housing an extensive collection of cutting-edge
                                                                            books across various fields, including management, engineering,
                                                                            architecture, social science, and more.

                                                                            Our library is not just a place to store books; it's a hub of knowledge.
                                                                            We
                                                                            offer a wide range of services and resources
                                                                            to cater to the diverse needs of our users. These services include
                                                                            regular
                                                                            subscriptions to national and international
                                                                            journals, electronic journals, round-the-clock accessibility, off-campus
                                                                            access to e-resources, internet facilities,
                                                                            photocopying facilities, and CD rewriting services, among others.

                                                                            At RGU, our library is not limited to our students and faculty; it is a
                                                                            valuable resource for the entire community.
                                                                            Whether you are a student, a research scholar, a faculty member, or
                                                                            simply a
                                                                            knowledge enthusiast, our library is here
                                                                            to empower you in your quest for knowledge. Join us in becoming
                                                                            knowledge
                                                                            seekers, and together, let's embark on a
                                                                            journey of endless learning and discovery.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="elementor-column elementor-col-90 elementor-top-column elementor-element elementor-element-968af55"
                                                    data-id="968af55" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-4878838 elementor-widget elementor-widget-go-img--bx"
                                                            data-id="4878838" data-element_type="widget" data-widget_type="go-img--bx.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="kd-about-3-img-wrap txaa-slide-down-1">
                                                                    <div style="border: 2px solid #fff;"
                                                                        class="kd-about-3-img img-cover fix kd-img-ani-1">
                                                                        <img decoding="async" src="mobile-assets/library/headimg.jpeg" alt="">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </div>
                                <!--End About-->

                                <!--menu-->
                                <div>
                                    <div class="container">
                                        <div>
                                            <h5 class="fw-bold headd3 text-dark">Overdue charges: Rs. 5/- (Rupees Five Only) per day per volume shall be
                                                charged,
                                                if:</h5>

                                            <p class="text-dark para1">1. A book borrowed from the Circulation Section is not returned by the due date.
                                            </p>
                                            <p class="text-dark para1">2. The book which is recalled by the library is not returned within the stipulated
                                                period; and</p>
                                            <p class="text-dark para1">3. The maximum number of overdue charges to be charged from a defaulter shall be up
                                                to the price of the book/ volume.
                                            </p>
                                            <p class="text-dark para1">4. No payment received in library; librarian makes a statement of the fine which is
                                                paid to
                                                account section.</p>
                                            <p class="text-dark para1">5. A reminder notice will be issued by the library staff bearing the names of the
                                                defaulters before the end semester
                                                results are declared. before using a laptop inside the library.</p>
                                        </div>


                                        <div class="pt-3">
                                            <h5 class="fw-bold text-dark">The restricted categories of reading material:
                                            </h5>
                                            <p class="text-dark para1">1. The Books marked with capital ‘REF’ and ‘Back Volumes’ of the Journals and
                                                Periodicals shall be consulted in the
                                                library only.</p>
                                            <p class="text-dark para1">2. The Books under ‘Reference’ with red spine label shall not be issued.</p>
                                            <p class="text-dark para1">3. Student’s Dissertation and PhD Thesis are original works of students and
                                                scholars and are not meant for circulation
                                            </p>
                                            <p class="text-dark para1">4. All current periodicals shall be treated as ‘Reference’ Materials</p>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-dark">Loss of books by the borrowers:</h5>
                                            <p class="text-dark para1">1. If borrowed materials are lost, the borrower will have to replace the exact
                                                title and author of the lost items.</p>
                                            <p class="text-dark para1">2. A fine, as prescribed, will be charged for the loss of reading materials, files
                                                and other reading materials.</p>
                                            <p class="text-dark para1">3. Student’s Dissertation and PhD Thesis are original works of students and
                                                scholars and are not meant for circulation</p>
                                            <p class="text-dark para1">4. The fine will continue to be collected until notified to the librarian by the
                                                borrowers about the lost materials.</p>
                                            <p class="text-dark para1">5. Once reported to the librarian, the late penalties will be put on hold for
                                                2(two) weeks giving the borrowers
                                                sufficient time to procure the lost books.</p>
                                            <p class="text-dark para1">6. The borrower can always get the help of a Librarian to procure the lost books
                                                upon the request made by the borrower.</p>
                                            <p class="text-dark para1">7. If in case of old publication or out-of-print items no longer in circulation in
                                                the market. The borrowers will have
                                                to pay double the actual cost of the lost reading materials or compensation at par with the current
                                                rate of the given
                                                title taking into consideration the current inflation rate</p>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-dark">Library Defaulters:</h5>
                                            <p class="text-dark para1">A regular notice of the last date to return the borrowed books is given in the
                                                'Library Notice Board,' and an email to
                                                all HOD/s. The last date to return the borrowed books is usually set by the librarian, usually on
                                                the last date of the
                                                'End-Semester exam,'. The last date is also mentioned in the 'Date Label,' which is located on the
                                                last page of books
                                                stamped by the circulation section while issuing the books.</p>
                                            <p class="text-dark para1">1. The borrower who did not return the books even after exceeding the due-date will
                                                be considered as a defaulter</p>
                                            <p class="text-dark para1">2. A Defaulter list is then sent to the examination branch 2(two) weeks before the
                                                declaration of results</p>
                                            <p class="text-dark para1">3. A defaulter 'End-Semester result,' would be withheld if he/she did not return
                                                the borrowed books to the library.</p>
                                            <p class="text-dark para1">4. A defaulter will have to return the book and acquire the 'Library Clearance
                                                Certificate', from the Librarian to get
                                                his/her results.</p>
                                            <p class="text-dark para1">5. For defaulters who quit Mid-semester or End-Semester sessions permanently. The
                                                librarian will have to generate the
                                                due fines from SOUL and forward the same to the concerned HOD/s and the Dean of School/s for
                                                necessary actions.</p>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-dark">Other rules & regulations:</h5>
                                            <p class="text-dark para1">1. All the students/scholars and outsiders entering the library shall deposit their
                                                bags and other belongings at the
                                                property counter and sign in the register at the checkpoint. Only notebooks and the library books to
                                                be returned will be
                                                allowed inside. Do not leave any valuables at the checkpoint. Library shall not be responsible for
                                                loss of personal
                                                belongings. All files, books and notebooks must be presented to the library staff while leaving the
                                                library.</p>
                                            <p class="text-dark para1">2. An Identity card is compulsory for getting access to the University Library.</p>
                                            <p class="text-dark para1">3. Books removed from the shelves by the users, if not required for reference,
                                                should be kept on the table nearest to
                                                them. The users should not try to shelve the books by themselves. It can be considered that a
                                                misplaced book is like a
                                                lost book.</p>
                                            <p class="text-dark para1">4. The newspaper should be folded appropriately after reading and kept back in the
                                                designated place.</p>
                                            <p class="text-dark para1">5. Readers should not deface, mark, cut, mutilate or damage library resources in
                                                any way. If anyone is found doing so,
                                                he/she will be brought in before the Librarian and then the Director/s of School.</p>
                                            <p class="text-dark para1">6. Students are advised not to get books issued to others on their names.
                                            </p>
                                            <p class="text-dark para1">7. Strict discipline should be maintained within the library.</p>
                                            <p class="text-dark para1">8. No visitor or guest is permitted to use the library without the prior permission
                                                of the librarian or the Board of
                                                Management.</p>
                                            <p class="text-dark para1">9. No photograph of the library shall be taken without the prior permission of the
                                                Librarian.</p>
                                            <p class="text-dark para1">10. The Librarian reserves the right to call back any issued book/item at any time.
                                            </p>
                                            <p class="text-dark para1">11. Laptop users will have to acquire the permission of the Library Staff before
                                                using a laptop inside the library.
                                            </p>
                                        </div>
                                        <div>
                                            <div style="margin-top: 50px;"
                                                class="text-center elementor-element elementor-element-e22f91b elementor-widget elementor-widget-go-s-heading"
                                                data-id="e22f91b" data-element_type="widget" data-widget_type="go-s-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="prthalign">

                                                        <h2 style="font-weight: 600;" class="headd1 text-dark kd-title-ani kd-split-text">
                                                            Library Team</h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container pt-2 pb-5 text-center">

                                                <div class="row">

                                                    <div class="col-lg-4 pb-4">
                                                        <!--1 img-->
                                                            <div class="kd-course-1-tabs-card fix" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                <div style="height: 320px !important;" class="main-img">
                                                                    <img fetchpriority="high" decoding="async"

                                                                        src="mobile-assets/library/mukutor.jpg"
                                                                        class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                                                        sizes="(max-width: 352px) 100vw, 352px" />
                                                                </div>
                                                                <div style="padding: 20px 20px 10px 15px;">
                                                                    <h4 class="headd3 fw-bold text-dark">
                                                                        Dr. Md. Mukutor Rahman
                                                                    </h4>

                                                                    <p class="para1" style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                        Librarian i/c (Assistant Professor)
                                                                    </p>

                                                                    <div style="line-height: 1; color: #333; font-size: 16px;">
                                                                    <p class="para1 text-dark"><i class="fas fa-phone"></i> +91-7002190775</p>
                                                                    <p class="para1 text-dark"><i class="fas fa-envelope"></i> mrahman@rgu.ac</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-lg-4 pb-4">
                                                        <!--1 img-->
                                                            <div class="kd-course-1-tabs-card fix" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                <div style="height: 320px !important;" class="main-img">
                                                                    <img fetchpriority="high" decoding="async"

                                                                        src="mobile-assets/library/prasanna.jpg"
                                                                        class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                                                        sizes="(max-width: 352px) 100vw, 352px" />
                                                                </div>
                                                                <div style="padding: 20px 20px 10px 15px;">
                                                                    <h4 class="headd3 fw-bold text-dark">
                                                                        Mr. Prasanna Kumar Konch
                                                                    </h4>

                                                                    <p class="para1" style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                        Assistant Librarian
                                                                    </p>

                                                                    <div style="line-height: 1; color: #333; font-size: 16px;">
                                                                    <p class="para1 text-dark"><i class="fas fa-phone"></i> +91-8753887883</p>
                                                                    <p class="para1 text-dark"><i class="fas fa-envelope"></i> pkkonch@rgu</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-lg-4 pb-4">
                                                        <!--1 img-->
                                                            <div class="kd-course-1-tabs-card fix" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                <div style="height: 320px !important;" class="main-img">
                                                                    <img fetchpriority="high" decoding="async"

                                                                        src="mobile-assets/library/bikramaditya.jpg"
                                                                        class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                                                        sizes="(max-width: 352px) 100vw, 352px" />
                                                                </div>
                                                                <div style="padding: 20px 20px 10px 15px;">
                                                                    <h4 class="headd3 fw-bold text-dark">
                                                                        Mr. Bikramaditya Barman
                                                                    </h4>

                                                                    <p class="para1" style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                        Assistant Librarian
                                                                    </p>

                                                                    <div style="line-height: 1; color: #333; font-size: 16px;">
                                                                    <p class="para1 text-dark"><i class="fas fa-phone"></i> +91-8638340172</p>
                                                                    <p class="para1 text-dark"><i class="fas fa-envelope"></i> bbarman1@rgu.ac</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-4 pb-4">
                                                        <!--1 img-->
                                                            <div class="kd-course-1-tabs-card fix" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                <div style="height: 320px !important;" class="main-img">
                                                                    <img fetchpriority="high" decoding="async"

                                                                        src="mobile-assets/library/niharika.jpg"
                                                                        class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                                                        sizes="(max-width: 352px) 100vw, 352px" />
                                                                </div>
                                                                <div style="padding: 20px 20px 10px 15px;">
                                                                    <h4 class="headd3 fw-bold text-dark">
                                                                        Mrs. Niharika Saikia
                                                                    </h4>

                                                                    <p class="para1" style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                        Assistant Librarian
                                                                    </p>

                                                                    <div style="line-height: 1; color: #333; font-size: 16px;">
                                                                    <p class="para1 text-dark"><i class="fas fa-phone"></i> +91-8721840281</p>
                                                                    <p class="para1 text-dark"><i class="fas fa-envelope"></i> nsaikia@rgu.ac</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-lg-4 pb-4">
                                                        <!--1 img-->
                                                            <div class="kd-course-1-tabs-card fix" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                <div style="height: 320px !important;" class="main-img">
                                                                    <img fetchpriority="high" decoding="async"

                                                                        src="mobile-assets/library/pinku.jpg"
                                                                        class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                                                        sizes="(max-width: 352px) 100vw, 352px" />
                                                                </div>
                                                                <div style="padding: 20px 20px 10px 15px;">
                                                                    <h4 class="headd3 fw-bold text-dark">
                                                                        Mr. Pinku Kalita
                                                                    </h4>

                                                                    <p class="para1" style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                        Peon
                                                                    </p>

                                                                    <div style="line-height: 1; color: #333; font-size: 16px;">
                                                                    <p class="para1 text-dark"><i class="fas fa-phone"></i> +91-9954661838</p>
                                                                    <p class="para1 text-dark"><i class="fas fa-envelope"></i> -----</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                    <div class="col-lg-4 pb-4">
                                                        <!--1 img-->
                                                            <div class="kd-course-1-tabs-card fix" style="box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); min-height: 420px;">
                                                                <div style="height: 320px !important;" class="main-img">
                                                                    <img fetchpriority="high" decoding="async"

                                                                        src="mobile-assets/library/chintu.jpg"
                                                                        class="attachment-kadu-400x235 size-kadu-400x235 wp-post-image" alt=""
                                                                        sizes="(max-width: 352px) 100vw, 352px" />
                                                                </div>
                                                                <div style="padding: 20px 20px 10px 15px;">
                                                                    <h4 class="headd3 fw-bold text-dark">
                                                                        Mr. Chintu Barman
                                                                    </h4>

                                                                    <p class="para1" style="line-height: 1.5; color: #333; font-size: 16px;">
                                                                        Peon
                                                                    </p>

                                                                    <div style="line-height: 1; color: #333; font-size: 16px;">
                                                                    <p class="para1 text-dark"><i class="fas fa-phone"></i> +91-9101496074</p>
                                                                    <p class="para1 text-dark"><i class="fas fa-envelope"></i> -----</p>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                        <h5 class="pt-3 text-dark">Library Circulation Policy</h5>
                                        <p class="text-dark para1">RGU library offers print resources and e-resources from the world over and makes it
                                            easily available to students for
                                            ready use. The various services offered by it are as follows:
                                        </p>
                                        <h5 class="pt-3 text-dark">Loan Privileges:</h5>
                                        <p class="text-dark para1">The number of books that can be borrowed and the period of loan for the various
                                            categories of members will be as
                                            follows:
                                        </p>
                                        <h5 class="pt-3 text-dark">Circulation Parameters</h5>
                                        <p class="text-dark para1 ">Document loan eligibility varies for different categories as given below:
                                        </p>
                                        <div class="pt-3">
                                            <table class="table table-striped para1">
                                                <thead>
                                                    <tr style="background-color: #27467A;" class=" text-white">
                                                        <th scope="col">User Category</th>
                                                        <th scope="col">Max. Number of Documents Allowed</th>
                                                        <th scope="col">Period</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Teaching Faculty/Teaching Staff</td>
                                                        <td>10 Books</td>
                                                        <td>45 Days</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PhD Scholars</td>
                                                        <td>08 Books</td>
                                                        <td>45 Days</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PG/UG Student</td>
                                                        <td>03 Books</td>
                                                        <td>30 Days</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Staff</td>
                                                        <td>03 Books</td>
                                                        <td>45 Days</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="pt-3">
                                            <h4 class="mt-3 mb-3 text-dark headd3"><b>Categories of loan </b></h4>

                                            <ul class="mb-5 para1">
                                                <li class="para1 text-dark">a. The books marked as ‘REF’ with red spine label shall not be issued
                                                    and may, therefore, be
                                                    consulted in the library only.</li>
                                                <li class="para1 text-dark">b. All other books shall be available on an ordinary loan. The period of
                                                    the loan shall be as
                                                    mentioned in Loan Privileges above. </li>
                                                <li class="para1 text-dark">c. All current periodicals (Journals & Magazines) and their current
                                                    volumes shall be treated as
                                                    ‘Reference’ books and shall not, therefore, be issued. </li>
                                                <li class="para1 text-dark">d. The Librarian may regulate the issuance of books in such a manner as
                                                    she/he may deem fit. In
                                                    case of great demand, books issued may be recalled at any time by the Librarian. </li>
                                                <li class="para1 text-dark">e. All residuary powers regarding the use of reading material, provision
                                                    of other services and the
                                                    maintenance of discipline and decorum in the library shall rest with the Librarian. </li>
                                                <!-- <li class="">4.	Once reported to the librarian, the late penalties will be put on hold for 2(two) weeks giving the borrowers sufficient time to procure the lost books.</li> -->
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="text-dark headd3"><strong>Library Services:</strong> </h4>

                                            <ul class="para1">
                                                <li class="para1 text-dark">1. Online Public Access Catalogue (OPAC)</li>
                                                <li class="para1 text-dark">2. Institutional Repository</li>
                                                <li class="para1 text-dark">3. Indian Research Information Network System</li>
                                                <li class="para1 text-dark">4. OPAC via Mobile cum Web-OPAC</li>
                                                <li class="para1 text-dark">5. Internet & E-mail</li>
                                                <li class="para1 text-dark">6. Offline CD-ROM Databases</li>
                                                <li class="para1 text-dark">7. RemoteLog (Romote Access OFF Campus)</li>
                                                <li class="para1 text-dark">8. E-Resources: 40000+ E-journals and 200000+ E-books</li>
                                                <li class="para1 text-dark">9. E-Resource Browsing Centre</li>
                                                <li class="para1 text-dark">10. Inter-Library Loan</li>
                                                <li class="para1 text-dark">11. Reprographic Facilities Computers</li>
                                                <li class="para1 text-dark">12. Monthly Book Display</li>
                                                <li class="para1 text-dark">13. Display of Current Book List</li>
                                                <li class="para1 text-dark">14. Career Literature</li>
                                                <li class="para1 text-dark">15. Suggestion Box</li>
                                                <li class="para1 text-dark">16. User Orientation</li>
                                                <li class="para1 text-dark">17. Library User Guide Book</li>
                                                <li class="para1 text-dark">18. Information Display Notice Board</li>
                                                <li class="para1 text-dark">19. News Board</li>
                                                <li class="para1 text-dark">20. Content List Service</li>
                                                <li class="para1 text-dark">21. Online Purchase Suggestion Form</li>
                                                <li class="para1 text-dark">22. Online Book Renewable Services</li>
                                                <li class="para1 text-dark">23. Online Circulation Fines Checking Services</li>
                                                <li class="para1 text-dark">24. Online Own Account Maintaining Service</li>
                                                <li class="para1 text-dark">25. Online Book Holding Service</li>
                                                <li class="para1 text-dark">26. Patron Circulation Status Service Via E-mail</li>
                                                <li class="para1 text-dark">27. Reading Room Facilities</li>
                                                <li class="para1 text-dark"> 28. Drinking-Water Facilities</li>
                                                <li class="para1 text-dark">29. Library Online Blogs Page Facilities</li>
                                                <li class="para1 text-dark">30. Online Feedback & Suggestion</li>
                                                <li class="para1 text-dark">31. Ask a Librarian</li>
                                                <li class="para1 text-dark">32. Current Awareness Service</li>
                                            </ul>
                                        </div>
                                        <div class="pt-3">
                                            <h3 class="text"><strong>Library Section: </strong> </h3>
                                            <h4 class="mb-3 mt-3 text-dark"><b>Circulation Section</b></h4>
                                            <p class="para1 text-dark" style="text-align: justify;">This section represents the hub of library
                                                activities where lending out of books to
                                                readers is facilitated. Of all the library activities, the circulation of books for home use
                                                is a major public service provided by the library. Nearly all the members of the library visit this
                                                section for
                                                getting books on loan for home use at one or the other time
                                            </p>
                                        </div>
                                        <div>
                                            <h4 class="mb-3 mt-3 text-dark"><b>Reference Section</b></h4>
                                            <p class="para1 text-dark" style="text-align: justify;">The Reference section of the library houses the
                                                library’s reference books, which are those
                                                materials that are meant to aid research by providing quick and accessible information on any
                                                particular topic.
                                                These materials are usually used to find facts or provide broad overviews of topics. They should not
                                                be used as
                                                major sources for papers or other projects. Dictionaries, encyclopedias, bibliographies, and Thesis,
                                                Dissertation, and Project reports are some of the most common reference materials found in the
                                                Library’s
                                                Reference Collection.</p>
                                        </div>
                                        <div>
                                            <h4 class="mb-3 mt-3 text-dark"><b>Periodical Section</b></h4>
                                            <p class="para1 text-dark" style="text-align: justify;">Periodical has contributed a great deal to
                                                reference work by furnishing articles that appear more
                                                recent than books on a subject, particularly in the ever-changing field of politics, economic,
                                                science and
                                                technology. They contain articles and papers a subject about which the library may have no books and
                                                particularly as to matters of local as temporary interest, a subject and which no books how yet been
                                                written.
                                                They form primary sources of information. Central Library collects subject periodicals, newspapers,
                                                and
                                                magazines. It handles any current periodicals.</p>
                                        </div>
                                        <div>
                                            <h4 class="mb-3 mt-3 text-dark"><b>General Book Section</b></h4>
                                            <p class="para1 text-dark" style="text-align: justify;">The General Section of the Library those books
                                                are available which are related of your
                                                departmental textbooks and Paperback of Journal and Magazine, General book.</p>
                                        </div>
                                        <div>
                                            <h4 class="mb-3 mt-3 text-dark"><b>E-Resource Browsing Section</b></h4>
                                            <p class="para1 text-dark" style="text-align: justify;">The computer unit in the Central Library
                                                provided support maintenance and consultation for both
                                                staff and students within the College. Students can have access to a variety of Package from
                                                software and
                                                internet browsing facilities such as internet facilities, E-mail as well as free user Printing for
                                                course book
                                                materials and research.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> <!-- .item -->

                <div>
                    <section>
                        <div class="container">
                            <div>
                                <h3 class=" mb-5 text-dark"><strong>Library Resources:</strong></h3>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark "><b>BOOKS</b></h4>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library is a true treasure trove of knowledge and information. Our total
                                        collection is 30,397+ books on various subjects, including arts & humanities, Social Science, Pure Science
                                        and technology, and more. Our mission is to provide equal access to information for all who wish to learn,
                                        and we strive to maintain a diverse collection to accommodate all interests.</b>
                                    </p>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>JOURNALS & ELECTRONIC RESOURCES</b></h4>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library, provide access to a variety of ejournal and eBooks resources to aid in
                                        your studies. Our extensive collection includes 31 Nos printed journals. 41,426+ e-journals and over 214130+
                                        eBooks to choose from. </b>
                                    </p>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>CD-ROMS</b></h4>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library has more than 1000 CD/DVDs of Various books, encyclopedias, dictionaries &
                                        and manuals. </b>
                                    </p>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>NEWS PAPER & MAGAZINE</b></h4>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">The library subscribes to 17+ magazines and 8 Nos newspapers with multiple copies to cater
                                        to the needs of the students and academic community </b>
                                    </p>
                                    <h4 class="mt-3 mb-3 text-dark"><b>List of Journal:</b></h4>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul>
                                                <li class="para1  text-dark"> 1. Journal of Perinatal, Pediatric and Neonatal Nursing </li>
                                                <li class="para1  text-dark"> 2. Journal of Nursing Research, Education and Management</li>
                                                <li class="para1  text-dark"> 3. Journal of Neurological, Psychiatric and Mental Health Nursing </li>
                                                <li class="para1  text-dark">4. Journal of Community and Social Health Nursing</li>
                                                <li class="para1  text-dark">5. International Journal of Studies in Midwifery and Women's Health </li>
                                                <li class="para1  text-dark">6. International Journal of Research in Medical Surgical Nursing </li>
                                                <li class="para1  text-dark">7. International Journal of Medical Surgical Nursing </li>
                                                <li class="para1  text-dark">8. International Journal of Community Health Nursing </li>
                                                <li class="para1  text-dark">9. International Journal of Pediatric Nursing</li>
                                                <li class="para1  text-dark">10. International Journal of Women Health Nursing</li>
                                                <li class="para1  text-dark">11. International Journal of Nursing Critical Care</li>
                                                <li class="para1  text-dark">12. International Journal of Nursing Obstetrics, Perintal and Neonatal Nursing
                                                </li>
                                                <li class="para1  text-dark">13. International Journal of Neurological Nursing</li>
                                                <li class="para1  text-dark">14. International Journal of Geriatric Nursing</li>
                                                <li class="para1  text-dark">15. Indian Journal of Fisheries </li>
                                                <li class="para1  text-dark">16. Indian Journal of Animal Research </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <ul>
                                                <li class="para1  text-dark"> style="text-align: justify;">17. Indian Journal of Physics </li>
                                                <li class="para1  text-dark"> style="text-align: justify;">18. Proceeding of the National Academy of Sciences India</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">19. All India Reporter </li>
                                                <li class="para1  text-dark"> style="text-align: justify;">20. Supreme Court Cases</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">21. Current Science</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">22. Oitijya (The Heritage)</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">23. The Chartered Accountant Student</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">24. Asian Textile Journal</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">25. Abhiskaar</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">26. IEEE Spectrum</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">27. IIT Madras Shaastra</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">28. Everyman's Science</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">29. Photonics Spectra</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">30. Corporate Citizen</li>
                                                <li class="para1  text-dark"> style="text-align: justify;">31. Oneness </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="res_heading2 mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>List Magazine: </b></h4>
                                            <ol>
                                                <li class="para1 text-dark">Yojana</li>
                                                <li class="para1 text-dark">Kurukshetra</li>
                                                <li class="para1 text-dark">Down to Earth</li>
                                                <li class="para1 text-dark">India Today</li>
                                                <li class="para1 text-dark">Competition Success</li>
                                                <li class="para1 text-dark">Careers 360</li>
                                                <li class="para1 text-dark">Economic and Political Weekly </li>
                                                <li class="para1 text-dark">Corporate Citizen</li>
                                                <li class="para1 text-dark">Engineering Success Review</li>
                                                <li class="para1 text-dark">New India Samachar</li>
                                                <li class="para1 text-dark">Prabhat Swaraswati</li>
                                                <li class="para1 text-dark">Matsyagandha</li>
                                                <li class="para1 text-dark">Student Company Secretary</li>
                                                <li class="para1 text-dark">The Week</li>
                                                <li class="para1 text-dark">Reader's Digest</li>
                                                <li class="para1 text-dark">Business World</li>
                                                <li class="para1 text-dark">Southern Economist</li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="res_heading2 mb-5">
                                            <h4 class="mt-3 mb-3 text-dark"><b>List of Newspaper:</b></h4>
                                            <ol>
                                                <li class="para1 text-dark">The Hindu</li>
                                                <li class="para1 text-dark">Times of India</li>
                                                <li class="para1 text-dark">The Assam Tribune </li>
                                                <li class="para1 text-dark">Asomiya Pratidin</li>
                                                <li class="para1 text-dark">Amar Asom </li>
                                                <li class="para1 text-dark">TheTelegraph </li>
                                                <li class="para1 text-dark">Financial Express </li>
                                                <li class="para1 text-dark">Dainik Purbudoy</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <h4 class="mt-3 mb-3 text-dark"><b>Library Subscribe Database</b></h4>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card overflow-hidden mb-0">
                                            <a href="https://discovery1.delnet.in/" target="_black">
                                                <div class="item7-card-img">
                                                    <img src="https://resource.rgu.ac/assets/images/library/delnetlogo.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="card-body pt-2 pr-2">
                                                    <a href="https://discovery1.delnet.in/" target="_black"><b>https://discovery1.delnet.in/</b></a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card overflow-hidden mb-0">
                                            <a href="https://www.jstor.org/action/showLogin" target="_black">
                                                <div class="item7-card-img">
                                                    <img src="https://resource.rgu.ac/assets/images/library/jsterlogo.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="card-body pt-2 pr-2">
                                                    <a href="https://www.jstor.org/action/showLogin"
                                                        target="_black"><b>https://www.jstor.org/action/showLogin</b></a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card overflow-hidden mb-0">
                                            <a href="https://www.manupatrafast.com/ " target="_black">
                                                <div class="item7-card-img">
                                                    <img src="https://resource.rgu.ac/assets/images/library/manupatra.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="card-body pt-2 pr-2">
                                                    <a href="https://www.manupatrafast.com/ " target="_black"><b>https://www.manupatrafast.com/
                                                        </b></a>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card overflow-hidden mb-0">
                                            <a href="https://ndl.iitkgp.ac.in/ " target="_black">
                                                <div class="item7-card-img">
                                                    <img src="https://resource.rgu.ac/assets/images/library/club-logo.jpg" alt="img"
                                                        class="cover-image">
                                                </div>
                                                <div class="card-body pt-2 pr-2">
                                                    <a href="https://ndl.iitkgp.ac.in/ " target="_black"><b>https://ndl.iitkgp.ac.in/ </b></a>
                                                </div>
                                                <br />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-3 mb-3 text-dark"><b>Open Access Resources:</b></h4>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-BOOKS</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. Directory of Open Access Books <span> <a class="text-primary " href="https://www.doabooks.org/ "
                                                    target="_black"><b>https://www.doabooks.org/</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. INTECH Open Access Books <span> <a class="text-primary " href="https://www.intechopen.com/books"
                                                    target="_black"><b>https://www.intechopen.com/books</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            3. AMS Free Online Books <span><a class="text-primary "
                                                    href=" https://www.ams.org/publicoutreach/math-history/math-history#freehistbooks "
                                                    target="_black"><b> https://www.ams.org/publicoutreach/math-history/math-history#freehistbooks
                                                    </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            4. Project Gutenberg Free E-Books <span><a class="text-primary " href="https://www.gutenberg.org/ "
                                                    target="_black"><b>https://www.gutenberg.org/ </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-COURSES</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. NPTEL Web & Video Courses <span> <a class="text-primary " href="https://nptel.ac.in/ "
                                                    target="_black"><b>https://nptel.ac.in/</b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-DATABASES</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. World Bank: Open Knowledge Repository <span> <a class="text-primary "
                                                    href="https://openknowledge.worldbank.org/handle/10986/23705  "
                                                    target="_black"><b>https://openknowledge.worldbank.org/handle/10986/23705 </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. Open Access Library <span> <a class="text-primary " href="https://www.oalib.com/  "
                                                    target="_black"><b>https://www.oalib.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            3. DLIST: UA Campus Repository <span> <a class="text-primary "
                                                    href="https://repository.arizona.edu/handle/10150/105066   "
                                                    target="_black"><b>https://repository.arizona.edu/handle/10150/105066 </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            4. BioMed Central <span> <a class="text-primary " href="https://www.biomedcentral.com/  "
                                                    target="_black"><b>https://www.biomedcentral.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            5. PubMed Central <span> <a class="text-primary " href="https://www.ncbi.nlm.nih.gov/pmc/  "
                                                    target="_black"><b>https://www.ncbi.nlm.nih.gov/pmc/ </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-JOURNALS</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. Directory of Open Access Journals <span> <a class="text-primary " href="https://doaj.org/   "
                                                    target="_black"><b>https://doaj.org/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. INTECH Open Access Journals <span> <a class="text-primary "
                                                    href="https://www.intechopen.com/journals  "
                                                    target="_black"><b>https://www.intechopen.com/journals </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-PATENTS</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. EPO: Espacenet Patent <span> <a class="text-primary "
                                                    href="https://www.epo.org/en/searching-for-patents/technical/espacenet#tab1  "
                                                    target="_black"><b>https://www.epo.org/en/searching-for-patents/technical/espacenet#tab1
                                                    </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. FPO: Free Patents Online <span> <a class="text-primary "
                                                    href="https://www.freepatentsonline.com/search.html  "
                                                    target="_black"><b>https://www.freepatentsonline.com/search.html </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            3. Google Patents <span> <a class="text-primary " href="https://patents.google.com/  "
                                                    target="_black"><b>https://patents.google.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            4. Patent Lens <span> <a class="text-primary "
                                                    href="https://www.lens.org/lens/search/patent/list?p=0&n=10&l=EN  "
                                                    target="_black"><b>https://www.lens.org/lens/search/patent/list?p=0&n=10&l=EN </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            5. USPTO <span> <a class="text-primary " href="http://patft.uspto.gov/  "
                                                    target="_black"><b>http://patft.uspto.gov/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            6. WIPO: PATENTSCOPE <span> <a class="text-primary "
                                                    href="https://patentscope.wipo.int/search/en/search.jsf  "
                                                    target="_black"><b>https://patentscope.wipo.int/search/en/search.jsf </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            7. Intellectual Property India Patents <span> <a class="text-primary "
                                                    href="https://www.ipindia.gov.in/patents.htm  "
                                                    target="_black"><b>https://www.ipindia.gov.in/patents.htm </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-NEWSPAPERS</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. World Newspaper Directory <span> <a class="text-primary "
                                                    href="https://www.onlinenewspapers.com/index.shtml "
                                                    target="_black"><b>https://www.onlinenewspapers.com/index.shtml </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. The Business Line <span> <a class="text-primary " href="https://www.thehindubusinessline.com/  "
                                                    target="_black"><b>https://www.thehindubusinessline.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            3. The Business Standard <span> <a class="text-primary " href="https://www.business-standard.com/ "
                                                    target="_black"><b>https://www.business-standard.com/</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            4. The Economic Times <span> <a class="text-primary " href="https://economictimes.indiatimes.com/  "
                                                    target="_black"><b>https://economictimes.indiatimes.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            5. The Hindu <span> <a class="text-primary " href=" https://www.thehindu.com/ " target="_black"><b>
                                                        https://www.thehindu.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            6. The Hindustan Times <span> <a class="text-primary " href="https://www.hindustantimes.com/ "
                                                    target="_black"><b>https://www.hindustantimes.com/</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            7. The Indian Express <span> <a class="text-primary " href="https://indianexpress.com/ "
                                                    target="_black"><b>https://indianexpress.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            8. The Times of India <span> <a class="text-primary " href="https://timesofindia.indiatimes.com/  "
                                                    target="_black"><b>https://timesofindia.indiatimes.com/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            9. The Telegraph <span> <a class="text-primary " href="https://www.telegraphindia.com/  "
                                                    target="_black"><b>https://www.telegraphindia.com/ </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-REFERENCES</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. Cambridge Dictionary Online <span> <a class="text-primary "
                                                    href="https://dictionary.cambridge.org/  " target="_black"><b>https://dictionary.cambridge.org/
                                                    </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. Foreign Language Dictionary- French English Dictionary <span> <a class="text-primary "
                                                    href="https://dictionary.cambridge.org/dictionary/french-english/  "
                                                    target="_black"><b>https://dictionary.cambridge.org/dictionary/french-english/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            3. One Look Dictionary <span> <a class="text-primary " href="https://www.onelook.com/ "
                                                    target="_black"><b>https://www.onelook.com/</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            4. Scholarpedia <span> <a class="text-primary " href="http://www.scholarpedia.org/article/Main_Page "
                                                    target="_black"><b>http://www.scholarpedia.org/article/Main_Page</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            5. Subject Dictionary- Business/Finance <span> <a class="text-primary " href=" # "><b></b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            6. Subject Dictionary- Library & Information Science <span> <a class="text-primary "
                                                    href="https://odlis.abc-clio.com/" target="_black"><b>https://odlis.abc-clio.com/</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            7. Subject Dictionary- Medical Science Science <span> <a class="text-primary "
                                                    href="https://www.medicinenet.com/medterms-medical-dictionary/article.htm "
                                                    target="_black"><b>https://www.medicinenet.com/medterms-medical-dictionary/article.htm</b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            8. Subject Dictionary- Subject Dictionary- Technology <span> <a class="text-primary "
                                                    href="# "><b></b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            9. Wikipedia <span> <a class="text-primary " href="https://www.wikipedia.org/ "
                                                    target="_black"><b>https://www.wikipedia.org/</b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <h4 class="mt-3 mb-3 text-dark"><b>E-THESES & DISSERTATIONS</b></h4>
                                    <ul>
                                        <li class=" para1 text-dark">
                                            1. ShodhGanga: Indian Electronic Theses & Dissertations <span> <a class="text-primary "
                                                    href="https://dictionary.cambridge.org/  " target="_black"><b>https://dictionary.cambridge.org/
                                                    </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            2. NDLTD <span> <a class="text-primary " href="https://ndltd.org/  "
                                                    target="_black"><b>https://ndltd.org/ </b></a></span>
                                        </li>
                                        <li class=" para1 text-dark">
                                            3. The DART-Europe E-These Portal <span> <a class="text-primary "
                                                    href="https://www.dart-europe.eu/basic-search.php "
                                                    target="_black"><b>https://www.dart-europe.eu/basic-search.php</b></a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> <!-- .item -->

                <div>
                    <section>
                        <!--1 row-->
                        <div class="container">
                                <h3 class="headd2 mb-2 text-dark"><strong>Online Public Access Catalogue:</strong></h3>
                                <div class="res_heading mb-2">
                                    <p class="para1 mt-2 text-dark"><b>The Library Online Public Access Catalog (OPAC) </b> is a digital database that allows
                                        users to search for
                                        and access materials held within a library's collection. It serves as an electronic gateway to the library's
                                        holdings,
                                        providing users with a convenient way to locate books, journals, multimedia resources, and other materials
                                        available
                                        for borrowing or reference.
                                    </p>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <ul>
                                        <li class=" para1 text-dark">
                                            You may access via : - <span><a class="text-primary" href="https://opac.rgu.ac  "
                                                    target="_black"><b>https://opac.rgu.ac </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </section>
                </div> <!-- .item -->

                <div>
                    <section>
                        <!--1 row-->
                        <div class="container">
                            <div>
                                <div class=" mb-5">
                                    <h3 class="headd2 mb-2 text-dark"><strong>Digital Repository:</strong></h3>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Welcome to the Digital Repository at The Assam Royal Global University.
                                        This Institutional Repository is an Institutional Repository of RGU setup to collect, organize,
                                        preserve and provide access to the intellectual (scholarly) output of RGU faculty, students,
                                        staff and others associated with the Institute. This Digital Repository serves as a platform to
                                        faculty, researchers, students and staff members of the Institute to share their research work
                                        with wider community. Institutional Repository accepts documents viz., journal articles, conference
                                        papers, book chapters, working /technical papers, reports, theses and dissertations
                                        , presentations and any other resources submitted as part of academic requirement at
                                        the Institute and other forms of scholarly documents. Wherever possible and available,
                                        we will make an effort to provide access to the full- text of the documents covered in
                                        the digital repository, without violating copyrights/rights of the author or publisher,
                                        as relevant to each work. Please feel free to write to us at <a class="text-primary"
                                            href="mailto:library@rgu.ac"><b>library@rgu.ac</b></a> ,
                                        if you want to know more about this service or have any questions with regard to depositing your documents
                                        or
                                        accessing deposited documents.
                                    </p>
                                    <ul>
                                        <li class="para1  text-dark">
                                            You may access via : - <span><a class="text-primary" href="http://192.168.0.16:8080/jspui/"
                                                    target="_black"><b>http://192.168.0.16:8080/jspui/ </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <h3 class="headd2 mb-2 text-dark"><strong>Research Repository: </strong></h3>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Welcome to the Research Repository at The Assam Royal Global University. Research
                                        Repository is the official publications repository of The Assam Royal Global University. All the papers
                                        (Article, Conference paper, Book chapter, Book, Book review, Report etc), having RGU affiliation, are
                                        archived in this repository.
                                        Archiving papers would be beneficial to RGU researchers as it increases the web-wide visibility, and access
                                        to all users. It exposes metadata to famous academic search engines such as BASE <span
                                            class="text-primary font-weight-bold">(https://www.base-search.net)</span>.
                                        Also, it will be helpful for faculty and school administrators generate list of publications easily for
                                        various reporting requirements. RGU researchers are requested to send their papers to library@rgu.ac .
                                        Library team will help uploading the papers along with metadata in this repository.
                                    </p>
                                    <ul>
                                        <li class=" text-dark ">
                                            You may access via : - <span><a href="#" target="_black"><b>(Coming Soon)</b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <h3 class="headd2 mb-2 text-dark"><strong>Indian Research Information Network System: </strong></h3>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">IRINS is web-based Research Information Management (RIM) service provided by the
                                        Information and Library Network (INFLIBNET) Centre, An Inter-University Centre of University Grants
                                        Commission, Gandhinagar, Gujarat. The portal facilitates the academic, R&D organisations and faculty
                                        members, scientists to collect, curate and showcase the scholarly communication activities and provide an
                                        opportunity to create the scholarly network. The IRINS is available as free soware-as-service to the
                                        academic and R&D organisations in India.
                                        The IRINS would support to integrate the existing research management system such as HR system, course
                                        management, grant management system, institutional repository, open and commercial citation databases,
                                        scholarly publishers, etc. It has integrated with academic identity such as ORCID ID, ScopusID, Research ID,
                                        Microso Academic ID, Google Scholar ID for ingesting the scholarly publication from various sources
                                    </p>
                                    <ul>
                                        <li class=" text-dark ">
                                            You may access RGU IRINS Portal via at : - <span><a class="text-primary"
                                                    href="https://rguni.irins.org/ " target="_black"><b>https://rguni.irins.org/ </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <hr />
                                <div class="res_heading mb-5">
                                    <h3 class="headd2 mb-2 text-dark"><strong>RGU Remote Log: </strong></h3>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Most of the publishers use IP filtering as a de facto standard for authenticating
                                        authorized users in subscribing institutions and providing access to e-resources to them. While IP-based
                                        access is most convenient, safe and hassle-free authentication mechanism for publishers as well as for
                                        subscribing institutions, it has some limitations. One of the most serious limitations of IP-filtered access
                                        to e-resources is that the users can access e-resources only when they are in the Institute campus. Ideally,
                                        an authorized user should be able to access e-resources irrespective of his / her physical location at any
                                        time as long as he has access to the Internet.
                                    </p>
                                    <p class="para1 mt-2 text-dark">In order to overcome this limitation, the RemoteLog has adopted Shibboleth, a
                                        standard-based propitiatory software, for authenticating authorized users from institutions and provide them
                                        seamless access to e-resources from anywhere, anytime. RemoteLog offers a mechanism for users to access
                                        multiple resources within a federated single sign-on framework. The goal of the RemoteLog is to allow users
                                        to access internal and external resources seamlessly using a single, institutionally controlled identity.
                                        This would not only allow authorized users to access e-resources from anywhere, anytime but would also
                                        circumvent the requirement of maintaining multiple passwords for multiple resources in multiple domains.
                                    </p>
                                    <ul>
                                        <li class=" text-dark ">
                                            You may access RGU Remote Log Portal via at : - <span><a class="text-primary"
                                                    href="https://rgu.remotlog.com/ " target="_black"><b>https://rgu.remotlog.com/ </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> <!-- .item -->

                <div>
                    <section>
                        <!--1 row-->
                        <div class="container">
                            <div>
                                <div class=" mb-5">
                                    <h3 class="headd2 mb-2 text-dark"><strong>Plagiarism Software:</strong></h3>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">Library offers Plagiarism Checking Service using a “Drillbit” tool to its registered users
                                        at RGUCL.
                                        Library has a license to this tool. To get the similarity/plagiarism checking done and have the similarity
                                        report generated,
                                        please write to us at <a class="text-primary" href="mailto:library@rgu.ac"><b>library@rgu.ac</b></a>.ac
                                        along a soft copy of the document ( i.e. thesis, dissertation, manuscript of article,
                                        assignment etc.) to be checked in PDF, DOCX file format. The users who have credentials to access Drillbit,
                                        they may directly access it by visiting <a class="text-primary"
                                            href="https://www.drillbitplagiarism.com/ "><b>https://www.drillbitplagiarism.com/ </b></a>
                                    </p>
                                    <p class="para1 mt-2 text-dark" style="text-align: justify;">About Software: Drillbit Plagiarism is a platform designed to detect and prevent
                                        plagiarism in academic and professional writing. It offers a range of tools and services to help individuals
                                        and organizations ensure the originality of their content. The platform employs advanced algorithms to
                                        compare submitted documents against a vast database of sources, flagging any instances of potential
                                        plagiarism. It's a valuable resource for educators, researchers, writers, and businesses who want to
                                        maintain integrity in their work and avoid unintentional plagiarism.
                                    </p>
                                    <ul>
                                        <li class="para1  text-dark">
                                            More details about Drillbit can be access here :- <span><a class="text-primary"
                                                    href="https://www.drillbitplagiarism.com/ "><b>https://www.drillbitplagiarism.com/
                                                    </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                                <hr />
                                <div class=" mb-3">
                                    <h3 class="mb-2 headd2 text-dark"><strong>Plagiarism policy:</strong></h3>
                                    <ul>
                                        <li class="para1 text-dark"><b>1. Introduction</b></li>
                                        <li class="para1 text-dark">1.1. This "Anti-Plagiarism policy" is subject to Assam Royal Global University's "Policy
                                            for Research Promotion".</li>
                                        <li class="para1 text-dark">1.2. Objective: The aim of this policy is to promote scholarly excellence, to create
                                            academic awareness about responsible conduct of research and to prevent plagiarism in academic writings
                                            and publications.</li>
                                        <li class="para1 text-dark">1.3. Scope: Applicable to students, faculty, and staff, who submit to the university
                                            academic resources for award of degrees or for publication.</li>
                                        <li class="para1 text-dark">1.4. Plagiarism: For the purposes of this document, the definition given by
                                            Merriam-Webster online dictionary is to be followed. "To plagiarize is "to steal and pass off (the ideas
                                            or words of another) as one's own: use (another's production) without crediting the source, [...or] to
                                            commit literary theft: present as new and original an idea or product derived from an existing source. "
                                        </li>
                                        <li class="para1 text-dark">1.5. Academic resources: will apply to all print and electronic materials submitted for
                                            publication.</li>
                                        <li class="para1 text-dark">1.6. The University, following UGC guidelines, has made plagiarism check mandatory for all
                                            its PhD research scholars and for all academic resources submitted for publication <b>(REGD. NO. D.
                                                L.-33004/99 Date TUESDAY, JULY 31, 2018)</b></li>
                                        <li class="para1 text-dark">1.7. Students submitting dissertations and project reports as part of requirements for
                                            their Master's Degree are directed to use the plagiarism checking facility available in all the campuses
                                            of the University.</li>
                                        <li class="para1 text-dark">1.8. All departments shall educate students on observing ethical guidelines in conducting
                                            research, on adhering to accepted norms on avoidance of plagiarism, and on giving proper acknowledgement
                                            to authors and publications cited in research papers and publications.</li>
                                        <li class="para1 text-dark">1.9. All departments shall ensure that students are adequately informed on plagiarism
                                            policy and procedures of the University.</li>
                                        <li class="para1 text-dark">1.10. Plagiarism will be detected with the aid of plagiarism detection software.
                                            <b>(Currently the University uses "Drillbrit Plagiarism Detection Software")</b>.</li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">

                                    <ul>
                                        <li class="para1 text-dark"><b>2. Protocol for the use of "Drillbrit" Plagiarism Checker</b></li>
                                        <li class="para1 text-dark">2.1. Access to the " Drillbrit '' Plagiarism Checker, licensed by the University, will be
                                            with the Librarians of the University. Since the University has procured only a single user license to
                                            test out the capacity and reliability of the software, access time to the software at different campuses
                                            is restricted to specific days as indicated below. Use of this software can be carried out on
                                            non-allocated dates with mutual understanding between the librarians.</li>
                                        <li class="para1 text-dark">2.2. Faculty members or students who want to check documents drafted by them for possible
                                            plagiarism are to email a request to the respective librarians with the MS WORD file attached. The email
                                            subject should be named: "Plagiarism check". Students should copy this email to their respective
                                            supervisors/guides. Name, Department, School, and Name of the supervisor/guide should be certainly
                                            indicated.</li>
                                        <li class="para1 text-dark">2.3. After the plagiarism check, the librarian will send the report generated (PDF format)
                                            to both the students as well as the supervisor/guide.</li>
                                        <li class="para1 text-dark">2.4. The UGC has not indicated the percentage of similarity permitted. Till further notice
                                            with regards to this, the University will not certify works containing more than 10% similarity.</li>
                                        <li class="para1 text-dark">2.5. A "Plagiarism Verification Certificate" will be issued by the campus librarian to the
                                            concerned PhD supervisor/guide and director of research.</li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">

                                    <ul>
                                        <li class="para1 text-dark"><b>3. Violation and Consequences.</b></li>
                                        <li class="para1 text-dark">3.1. As per UGC regulations, the responsibility to ensure that the work is original and
                                            free of plagiarism lies with the research scholar and the supervisor/guide.</li>
                                        <li class="para1 text-dark">3.2. All PhD theses are to contain a "declaration of originality" by the researcher and
                                            the supervisor/guide respectively.</li>
                                        <li class="para1 text-dark">3.3. Violation of the Copyright Act through plagiarism is considered a legal offence and
                                            may attract prosecution in a court of law leading to various penalties depending on the severity of the
                                            crime.</li>
                                        <li class="para1 text-dark">3.4. The University will not accept PhD theses and academic resources submitted for
                                            publication, without the "Plagiarism Verification Certificate".</li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">

                                    <ul>
                                        <li class="para1 text-dark"><b>4. Levels of Plagiarism</b></li>
                                        <li class="para1 text-dark">Plagiarism would be quantified into following levels in ascending order of severity for
                                            the purpose of its <br /> <b>Similarities up to 10% - Minor similarities.</b></li>
                                    </ul>
                                </div>
                                <div class="res_heading mb-5">
                                    <ul>
                                        <li class=" text-dark ">
                                            Courtesy: UGC Guideline 2018 : - <span><a class="text-primary" target="_black"
                                                    href="https://www.ugc.gov.in/pdfnews/7771545_academic-integrity-Regulation2018.pdf "><b>https://www.ugc.gov.in/pdfnews/7771545_academic-integrity-Regulation2018.pdf
                                                    </b></a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> <!-- .item -->

                <div>
                    <section>
                        <!--1 row-->
                        <div class="container">
                            <div>
                                <h3 class="headd2 mb-2 text-dark"><strong>Departmental Library: </strong></h3>
                                <!-- <h3 class = "font-weight-bold  text-primary mb-5"><strong>Departmental Library: </strong></h3> -->
                                <div class="mb-2">
                                    <p class="para1 mt-2 text-dark">A departmental library serves as a specialized resource centre within an academic
                                        institution, focusing on the specific needs of a particular department or discipline. Whether it's history,
                                        biology, economics, or any other field, a departmental library is tailored to support the research,
                                        teaching, and learning activities of its associated department.
                                        Apart from the Central Library, separate departmental libraries are set up to provide a more accessible and
                                        a more personalised reading space. Departmental Library may be located within the department concerned and
                                        Departmental libraries exhibit greater convenience; saving of student and staff time; increased Use of
                                        journals and reference works.

                                    </p>
                                </div>
                                <hr />
                                <div class="res_heading2 mb-5">
                                    <h3 class="headd2 mb-2 text-dark"><strong>Departmental Libraries are as below: </strong></h3>
                                    <ol>
                                        <li class="para1 text-dark">Department of English</li>
                                        <li class="para1 text-dark">Department of Geology</li>
                                        <li class="para1 text-dark">Department of Pharmacy</li>
                                        <li class="para1 text-dark">Department of Geography</li>
                                        <li class="para1 text-dark">Department of Microbiology</li>
                                        <li class="para1 text-dark">Department of Physiotherapy</li>
                                        <li class="para1 text-dark">Department of Fashion Design & Technology</li>
                                        <li class="para1 text-dark">Department of Zoology</li>
                                        <li class="para1 text-dark">Department of Indian Knowledge System</li>
                                        <li class="para1 text-dark">Department of Mechanical Engineering</li>
                                        <li class="para1 text-dark">Department of History</li>
                                        <li class="para1 text-dark">Department of Nursing</li>
                                        <li class="para1 text-dark">Department of Mathematics </li>
                                    </ol>
                                </div>


                            </div>
                            </div>
                </div>

            </div>

            </div>
        </div>

        </div>
@endsection

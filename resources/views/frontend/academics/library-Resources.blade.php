@extends('frontend.master')
@section('title', 'RGU Central Library: 30,000+ Volumes, E-Journals, and Resources')
@section('meta_description', 'RGU Central Library offers 30,178+ print volumes, 65,000+ e-journals, and 18,000+ e-books. Access Digital Repositories, Research Databases, and Reading Material. Check Resources!')
@section('meta_keywords', 'Library')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <img src="mobile-assets/library/mobile-library-banner.png" />

        <section style="background-image: url(sarang/bg.svg); background-size: cover;">

            <!-- Mobile Tab Buttons -->
            <div id="mobTabButtons" style="display: flex; flex-direction: column;">
                <button class="border" onclick="mobShowTab('mobTab1', this)"
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border: none; background-color: #e4e4e4; color: #333;">
                    About Us
                </button>
                <button class="border" onclick="mobShowTab('mobTab2', this)"
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border: none; background-color: #fff; color: #333;">
                    Resources
                </button>
                <button class="border" onclick="mobShowTab('mobTab3', this)"
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border: none; background-color: #fff; color: #333;">
                    OPAC
                </button>
                <button class="border" onclick="mobShowTab('mobTab4', this)"
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border: none; background-color: #fff; color: #333;">
                    Repository
                </button>
                <button class="border" onclick="mobShowTab('mobTab5', this)"
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border: none; background-color: #fff; color: #333;">
                    Plagiarism
                </button>
                <button class="border" onclick="mobShowTab('mobTab6', this)"
                    style="width: 100%; padding: 15px; font-size: 16px; font-weight: bold; border: none; background-color: #fff; color: #333;">
                    Departmental Library
                </button>
            </div>

            <!-- Mobile Tab Contents -->

            <div id="mobTab1" style="display: block; padding: 20px; border-top: none;">
                <div class="container">
                    <div class="row pt-5" style="display: flex; align-items: center; justify-content: center;">
                        <div class="col-lg-12">
                            <img class="text-center" style="height: 350px; border-radius: 20px;"
                                src="mobile-assets/library/headimg1.png" alt="">
                        </div>

                        <div class="col-lg-12 pt-3">
                            <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                About the Library</h1>
                            <div class="para1 text-dark" style="text-align: justify;">
                                <p class="text-dark para1">
                                    Royal Global University’s Central Library is a window to the world of latest
                                    information in Science, Engineering, Technology, Management, Humanities, Social
                                    Sciences, and other areas. The library with its modern collection of knowledge
                                    resources and innovative information services supports the academic community of
                                    the varsity and is sufficiently automated using KOHA ILMS for running its
                                    housekeeping operations and providing online access to catalogue and e-resource
                                    facility. Its collection is available through OPAC (On-line Public Access
                                    Catalogue) and can be accessed in as well as off-campus. With a total collection
                                    over 30,397+ books, 31+ Printed Journals and 17+ Printed Magazines, this duplex
                                    library boasts of an impressive 8,000 square feet of modern, high-tech space
                                    that serves as an integrated resource centre that include regular subscriptions
                                    to national and international journals, electronic journals, round-the-clock
                                    accessibility, off-campus access to e-resources, internet facilities,
                                    photocopying facilities</p>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-5" style="display: flex; align-items: center; justify-content: center;">

                        <div class="col-lg-6">

                            <div class="para1 text-dark" style="text-align: justify;">
                                <p class="text-dark para1">
                                    The RGU Library boasts an impressive 8,000 square feet of modern, high-tech
                                    space. This centrally air-conditioned, well-furnished duplex facility serves as
                                    an integrated resource center, housing an extensive collection of cutting-edge
                                    books across various fields, including management, engineering, architecture,
                                    social sciences, and more.

                                    Our library is not just a place to store books; it is a hub of knowledge. We
                                    offer a wide range of services and resources to meet the diverse needs of our
                                    users. These include regular subscriptions to national and international
                                    journals, access to electronic journals, round-the-clock availability,
                                    off-campus access to e-resources, internet facilities, photocopying services,
                                    and CD rewriting services, among others.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <img style="height: 400px; border-radius: 20px;" src="mobile-assets/library/headimg.jpeg"
                                alt="">
                        </div>

                    </div>

                    <div class="card p-4" style="margin-top: 30px;">
                        <div>
                            <div class="headd3 text-dark fw-bold pb-2">Overdue Charges</div>
                            <p class="text-dark para1">Rs. 5/- (Rupees Five Only) per day per volume shall be
                                charged if:</p>
                            <ol class="text-dark para1">
                                <li>A book borrowed from the Circulation Section is not returned by the due date.
                                </li>
                                <li>The book which is recalled by the library is not returned within the stipulated
                                    period.</li>
                                <li>The maximum overdue charge for a defaulter shall not exceed the price of the
                                    book/volume.</li>
                                <li>No payment is received in the library; the librarian makes a statement of the
                                    fine which is paid to the account section.</li>
                                <li>A reminder notice will be issued by the library staff bearing the names of
                                    defaulters before the end-semester results are declared.</li>
                            </ol>
                        </div>

                        <div class="pt-3">
                            <div class="headd3 text-dark fw-bold pb-2">Restricted Categories of Reading Material
                            </div>
                            <ol class="text-dark para1">
                                <li>Books marked with capital ‘REF’ and ‘Back Volumes’ of Journals and Periodicals
                                    shall be consulted in the library only.</li>
                                <li>Books under ‘Reference’ with a red spine label shall not be issued.</li>
                                <li>Student dissertations and PhD theses are original works and are not meant for
                                    circulation.</li>
                                <li>All current periodicals shall be treated as ‘Reference’ materials.</li>
                            </ol>
                        </div>

                        <div class="pt-3">
                            <div class="headd3 text-dark fw-bold pb-2">Loss of Books by Borrowers</div>
                            <ol class="text-dark para1">
                                <li>If borrowed materials are lost, the borrower must replace the exact title and
                                    author of the lost items.</li>
                                <li>A prescribed fine will be charged for the loss of reading materials, files, and
                                    other resources.</li>
                                <li>Student dissertations and PhD theses are not meant for circulation.</li>
                                <li>The fine will continue to accrue until the librarian is notified of the lost
                                    material.</li>
                                <li>Once reported, late penalties will be put on hold for two weeks to allow time to
                                    procure the lost books.</li>
                                <li>Borrowers may request the librarian's assistance in procuring the lost books.
                                </li>
                                <li>If the item is out-of-print or no longer in circulation, the borrower must pay
                                    double the actual cost or compensation at current market value considering
                                    inflation.</li>
                            </ol>
                        </div>

                        <div class="pt-3">
                            <div class="headd3 text-dark fw-bold pb-2">Library Defaulters</div>
                            <p class="text-dark para1">Regular notices about the due date for returning books are
                                displayed on the 'Library Notice Board' and emailed to all HODs. This date is also
                                stamped on the 'Date Label' inside issued books.</p>
                            <ol class="text-dark para1">
                                <li>Borrowers who fail to return books after the due date are considered defaulters.
                                </li>
                                <li>A defaulter list is sent to the Examination Branch two weeks before result
                                    declaration.</li>
                                <li>Defaulters' end-semester results will be withheld if borrowed books are not
                                    returned.</li>
                                <li>Defaulters must return the books and obtain a 'Library Clearance Certificate'
                                    from the Librarian to access their results.</li>
                                <li>For students who quit mid-semester or end-semester, the librarian will generate
                                    fines and inform the respective HOD and Dean for action.</li>
                            </ol>
                        </div>

                        <div class="pt-3">
                            <div class="headd3 text-dark fw-bold pb-2">Other Rules & Regulations</div>
                            <ol class="text-dark para1">
                                <li>All visitors must deposit their belongings at the property counter and sign the
                                    register. Only notebooks and returnable library books are allowed inside.</li>
                                <li>An identity card is mandatory for access to the library.</li>
                                <li>Books removed from shelves should be left on the nearest table if not needed.
                                    Misplacing books is akin to losing them.</li>
                                <li>Newspapers should be folded properly after reading and returned to their
                                    designated place.</li>
                                <li>Defacing or damaging library materials is prohibited and will be reported to the
                                    Librarian and School Director.</li>
                                <li>Students should not issue books on behalf of others.</li>
                                <li>Strict discipline must be maintained within the library.</li>
                                <li>Visitors must obtain prior permission from the Librarian or Board of Management
                                    to use the library.</li>
                                <li>Photographs of the library are prohibited without the Librarian’s permission.
                                </li>
                                <li>The Librarian reserves the right to recall any issued book/item at any time.
                                </li>
                                <li>Using laptops in the library requires prior permission from the Library Staff.
                                </li>
                            </ol>
                        </div>

                    </div>


                    <div>
                        <h2 class="headd1 fw-bold text-dark pt-5 pb-3">Library Team</h2>

                        <div class="row" style="display: flex; align-items: center; justify-content: center;">

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                    <div class="p-3">
                                        <img style=" width: 100%; border: 1px solid #99999984;"
                                            src="mobile-assets/library/mukutor.jpg" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr.
                                            Md. Mukutor Rahman </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">Librarian i/c
                                            (Assistant Professor)</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                    <div class="p-3">
                                        <img style=" width: 100%; border: 1px solid #99999984;"
                                            src="mobile-assets/library/prasanna.jpg" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                            Prasanna Kumar Konch </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                            Librarian</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                    <div class="p-3">
                                        <img style=" width: 100%; border: 1px solid #99999984;"
                                            src="mobile-assets/library/bikramaditya.jpg" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                            Bikramaditya Barman </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                            Librarian</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                    <div class="p-3">
                                        <img style=" width: 100%; border: 1px solid #99999984;"
                                            src="mobile-assets/library/niharika.jpg" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                            Mrs. Niharika Saikia </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                            Librarian</p>

                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 420px;">
                                    <div class="p-3">
                                        <img style=" width: 100%; border: 1px solid #99999984;"
                                            src="mobile-assets/library/pinku.jpg" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                            Pinku Kalita </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">Peon</p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="card rounded d-flex flex-column"
                                    style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 420px;">
                                    <div class="p-3">
                                        <img style=" width: 100%; border: 1px solid #99999984;"
                                            src="mobile-assets/library/chintu.jpg" />
                                    </div>
                                    <div class="card-body d-flex flex-column flex-grow-1">
                                        <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                            Chintu Barman </h5>
                                        <p class="para1" style="color: #27467A; line-height: 1.3;">Peon</p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <hr>

                    <div class="headd2 text-dark fw-bold pb-2">Library Circulation Policy</div>
                    <p class="text-dark para1">RGU library offers print resources and e-resources from the world
                        over and makes it easily available to students for ready use. The various services offered
                        by it are as follows:</p>

                    <div class="headd3 text-dark fw-bold pb-2">Loan Privileges:</div>
                    <p class="text-dark para1">The number of books that can be borrowed and the period of loan for
                        the various categories of members will be as follows:</p>

                    <div class="headd3 text-dark fw-bold pb-2">Circulation Parameters</div>
                    <p class="text-dark para1">Document loan eligibility varies for different categories as given
                        below:</p>

                    <hr>

                    <div class="pt-3">
                        <table class="table bg-white table-striped para1">
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
                                    <td>Ph.D. Scholars</td>
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

                    <div class="headd3 text-dark fw-bold pb-2 mt-4">Categories of loan</div>

                    <ul class="mb-5 para1 ">
                        <li class="para1 text-dark">a. The books marked as ‘REF’ with red spine label shall not be
                            issued
                            and may, therefore, be
                            consulted in the library only.</li>
                        <li class="para1 text-dark">b. All other books shall be available on an ordinary loan. The
                            period of
                            the loan shall be as
                            mentioned in Loan Privileges above. </li>
                        <li class="para1 text-dark">c. All current periodicals (Journals & Magazines) and their
                            current
                            volumes shall be treated as
                            ‘Reference’ books and shall not, therefore, be issued. </li>
                        <li class="para1 text-dark">d. The Librarian may regulate the issuance of books in such a
                            manner as
                            she/he may deem fit. In
                            case of great demand, books issued may be recalled at any time by the Librarian. </li>
                        <li class="para1 text-dark">e. All residuary powers regarding the use of reading material,
                            provision
                            of other services and the
                            maintenance of discipline and decorum in the library shall rest with the Librarian.
                        </li>
                    </ul>

                    <div class="headd3 text-dark fw-bold pb-2 mt-4">Library Services:</div>

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
                        <li class="para1 text-dark">28. Drinking-Water Facilities</li>
                        <li class="para1 text-dark">29. Library Online Blogs Page Facilities</li>
                        <li class="para1 text-dark">30. Online Feedback & Suggestion</li>
                        <li class="para1 text-dark">31. Ask a Librarian</li>
                        <li class="para1 text-dark">32. Current Awareness Service</li>
                    </ul>

                    <div class="headd2 text-dark fw-bold pb-3 mt-4" style="font-size: 30px;">Library Section</div>

                    <div class="headd3 text-dark fw-bold pb-2 ">Circulation Section</div>

                    <p class="para1 text-dark" style="text-align: justify;">This section represents the hub of
                        library
                        activities where lending out of books to
                        readers is facilitated. Of all the library activities, the circulation of books for home use
                        is a major public service provided by the library. Nearly all the members of the library
                        visit this
                        section for
                        getting books on loan for home use at one or the other time
                    </p>

                    <div class="headd3 text-dark fw-bold pb-2 ">Reference Section</div>

                    <p class="para1 text-dark" style="text-align: justify;">
                        The Reference section of the library houses the
                        library’s reference books, which are those
                        materials that are meant to aid research by providing quick and accessible information on
                        any
                        particular topic.
                        These materials are usually used to find facts or provide broad overviews of topics. They
                        should not
                        be used as
                        major sources for papers or other projects. Dictionaries, encyclopedias, bibliographies, and
                        Thesis,
                        Dissertation, and Project reports are some of the most common reference materials found in
                        the
                        Library’s Reference Collection.
                    </p>

                    <div class="headd3 text-dark fw-bold pb-2 ">Periodical Section</div>

                    <p class="para1 text-dark" style="text-align: justify;">
                        Periodical has contributed a great deal to
                        reference work by furnishing articles that appear more
                        recent than books on a subject, particularly in the ever-changing field of politics,
                        economic,
                        science and
                        technology. They contain articles and papers a subject about which the library may have no
                        books and
                        particularly as to matters of local as temporary interest, a subject and which no books how
                        yet been
                        written.
                        They form primary sources of information. Central Library collects subject periodicals,
                        newspapers,
                        and
                        magazines. It handles any current periodicals.
                    </p>

                    <div class="headd3 text-dark fw-bold pb-2 ">General Book Section</div>

                    <p class="para1 text-dark" style="text-align: justify;">
                        The General Section of the Library those books
                        are available which are related of your
                        departmental textbooks and Paperback of Journal and Magazine, General book.
                    </p>

                    <div class="headd3 text-dark fw-bold pb-2 ">E-Resource Browsing Section</div>

                    <p class="para1 text-dark" style="text-align: justify;">
                        The computer unit in the Central Library
                        provided support maintenance and consultation for both
                        staff and students within the College. Students can have access to a variety of Package from
                        software and
                        internet browsing facilities such as internet facilities, E-mail as well as free user
                        Printing for
                        course book
                        materials and research.
                    </p>


                </div>
            </div>

            <div id="mobTab2" style="display: block; padding: 20px; border-top: none;">

                <div class="container">
                    <div>
                        <h3 class=" headd2 mb-4 text-dark"><strong>Library Resources:</strong></h3>
                        <div class="headd2 mb-5">
                            <h4 class="mt-3 mb-3 text-dark "><b>BOOKS</b></h4>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library is a true
                                treasure trove of knowledge and information. Our total
                                collection is 30,397+ books on various subjects, including arts & humanities, Social
                                Science, Pure Science
                                and technology, and more. Our mission is to provide equal access to information for
                                all who wish to learn,
                                and we strive to maintain a diverse collection to accommodate all interests.</b>
                            </p>
                        </div>
                        <hr />
                        <div class="headd2 mb-5">
                            <h4 class="mt-3 mb-3 text-dark"><b>JOURNALS & ELECTRONIC RESOURCES</b></h4>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library, provide
                                access to a variety of ejournal and eBooks resources to aid in
                                your studies. Our extensive collection includes 31 Nos printed journals. 41,426+
                                e-journals and over 214130+
                                eBooks to choose from. </b>
                            </p>
                        </div>
                        <hr />
                        <div class="headd2 mb-5">
                            <h4 class="mt-3 mb-3 text-dark"><b>CD-ROMS</b></h4>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library has more
                                than 1000 CD/DVDs of Various books, encyclopedias, dictionaries &
                                and manuals. </b>
                            </p>
                        </div>
                        <hr />
                        <div class="headd2 mb-5">
                            <h4 class="mt-3 mb-3 text-dark"><b>NEWS PAPER & MAGAZINE</b></h4>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">The library subscribes to
                                17+ magazines and 8 Nos newspapers with multiple copies to cater
                                to the needs of the students and academic community </b>
                            </p>
                            <h4 class="mt-3 mb-3 text-dark"><b>List of Journal:</b></h4>
                            <div class="row">
                                <div class="col-md-7">
                                    <ul>
                                        <li class="para1  text-dark"> 1. Journal of Perinatal, Pediatric and
                                            Neonatal Nursing </li>
                                        <li class="para1  text-dark"> 2. Journal of Nursing Research, Education and
                                            Management</li>
                                        <li class="para1  text-dark"> 3. Journal of Neurological, Psychiatric and
                                            Mental Health Nursing </li>
                                        <li class="para1  text-dark">4. Journal of Community and Social Health
                                            Nursing</li>
                                        <li class="para1  text-dark">5. International Journal of Studies in
                                            Midwifery and Women's Health </li>
                                        <li class="para1  text-dark">6. International Journal of Research in Medical
                                            Surgical Nursing </li>
                                        <li class="para1  text-dark">7. International Journal of Medical Surgical
                                            Nursing </li>
                                        <li class="para1  text-dark">8. International Journal of Community Health
                                            Nursing </li>
                                        <li class="para1  text-dark">9. International Journal of Pediatric Nursing
                                        </li>
                                        <li class="para1  text-dark">10. International Journal of Women Health
                                            Nursing</li>
                                        <li class="para1  text-dark">11. International Journal of Nursing Critical
                                            Care</li>
                                        <li class="para1  text-dark">12. International Journal of Nursing
                                            Obstetrics, Perintal and Neonatal Nursing
                                        </li>
                                        <li class="para1  text-dark">13. International Journal of Neurological
                                            Nursing</li>
                                        <li class="para1  text-dark">14. International Journal of Geriatric Nursing
                                        </li>
                                        <li class="para1  text-dark">15. Indian Journal of Fisheries </li>
                                        <li class="para1  text-dark">16. Indian Journal of Animal Research </li>
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul>
                                        <li class="para1  text-dark">17. Indian Journal of Physics </li>
                                        <li class="para1  text-dark">18. Proceeding of the National Academy of
                                            Sciences India</li>
                                        <li class="para1  text-dark">19. All India Reporter </li>
                                        <li class="para1  text-dark">20. Supreme Court Cases</li>
                                        <li class="para1  text-dark">21. Current Science</li>
                                        <li class="para1  text-dark">22. Oitijya (The Heritage)</li>
                                        <li class="para1  text-dark">23. The Chartered Accountant Student</li>
                                        <li class="para1  text-dark">24. Asian Textile Journal</li>
                                        <li class="para1  text-dark">25. Abhiskaar</li>
                                        <li class="para1  text-dark">26. IEEE Spectrum</li>
                                        <li class="para1  text-dark">27. IIT Madras Shaastra</li>
                                        <li class="para1  text-dark">28. Everyman's Science</li>
                                        <li class="para1  text-dark">29. Photonics Spectra</li>
                                        <li class="para1  text-dark">30. Corporate Citizen</li>
                                        <li class="para1  text-dark">31. Oneness </li>
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

                        <div class="container">
                            <h4 class="mt-3 mb-3 text-dark"><b>Library Subscribe Database</b></h4>
                            <div class="row">
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://discovery1.delnet.in/"
                                        target="_black"><b>https://discovery1.delnet.in/</b></a>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://www.jstor.org/action/showLogin"
                                        target="_black"><b>https://www.jstor.org/action/showLogin</b></a>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://www.manupatrafast.com/ "
                                        target="_black"><b>https://www.manupatrafast.com/</b></a>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://ndl.iitkgp.ac.in/ "
                                        target="_black"><b>https://ndl.iitkgp.ac.in/ </b></a>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

            <div id="mobTab3" style="display: block; padding: 20px; border-top: none;">
                <div class="container">
                    <h3 class="headd2 mb-2 text-dark"><strong>Online Public Access Catalogue:</strong></h3>
                    <div class="res_heading mb-2">
                        <p class="para1 mt-2 text-dark"><b>The Library Online Public Access Catalog (OPAC) </b> is a
                            digital database that allows
                            users to search for
                            and access materials held within a library's collection. It serves as an electronic
                            gateway to the library's
                            holdings,
                            providing users with a convenient way to locate books, journals, multimedia resources,
                            and other materials
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
            </div>

            <div id="mobTab4" style="display: block; padding: 20px; border-top: none;">
                <div class="container">
                    <div>
                        <div class=" mb-5">
                            <h3 class="headd2 mb-2 text-dark"><strong>Digital Repository:</strong></h3>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Welcome to the Digital
                                Repository at The Assam Royal Global University.
                                This Institutional Repository is an Institutional Repository of RGU setup to
                                collect, organize,
                                preserve and provide access to the intellectual (scholarly) output of RGU faculty,
                                students,
                                staff and others associated with the Institute. This Digital Repository serves as a
                                platform to
                                faculty, researchers, students and staff members of the Institute to share their
                                research work
                                with wider community. Institutional Repository accepts documents viz., journal
                                articles, conference
                                papers, book chapters, working /technical papers, reports, theses and dissertations
                                , presentations and any other resources submitted as part of academic requirement at
                                the Institute and other forms of scholarly documents. Wherever possible and
                                available,
                                we will make an effort to provide access to the full- text of the documents covered
                                in
                                the digital repository, without violating copyrights/rights of the author or
                                publisher,
                                as relevant to each work. Please feel free to write to us at <a class="text-primary"
                                    href="mailto:library@rgu.ac"><b>library@rgu.ac</b></a> ,
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
                                (Article, Conference paper, Book chapter, Book, Book review, Report etc), having RGU
                                affiliation, are
                                archived in this repository.
                                Archiving papers would be beneficial to RGU researchers as it increases the web-wide
                                visibility, and access
                                to all users. It exposes metadata to famous academic search engines such as BASE
                                <span class="text-primary font-weight-bold">(https://www.base-search.net)</span>.
                                Also, it will be helpful for faculty and school administrators generate list of
                                publications easily for
                                various reporting requirements. RGU researchers are requested to send their papers
                                to library@rgu.ac .
                                Library team will help uploading the papers along with metadata in this repository.
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
                            <h3 class="headd2 mb-2 text-dark"><strong>Indian Research Information Network System:
                                </strong></h3>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">IRINS is web-based Research
                                Information Management (RIM) service provided by the
                                Information and Library Network (INFLIBNET) Centre, An Inter-University Centre of
                                University Grants
                                Commission, Gandhinagar, Gujarat. The portal facilitates the academic, R&D
                                organisations and faculty
                                members, scientists to collect, curate and showcase the scholarly communication
                                activities and provide an
                                opportunity to create the scholarly network. The IRINS is available as free
                                soware-as-service to the
                                academic and R&D organisations in India.
                                The IRINS would support to integrate the existing research management system such as
                                HR system, course
                                management, grant management system, institutional repository, open and commercial
                                citation databases,
                                scholarly publishers, etc. It has integrated with academic identity such as ORCID
                                ID, ScopusID, Research ID,
                                Microso Academic ID, Google Scholar ID for ingesting the scholarly publication from
                                various sources
                            </p>
                            <ul>
                                <li class=" text-dark ">
                                    You may access RGU IRINS Portal via at : - <span><a class="text-primary"
                                            href="https://rguni.irins.org/ " target="_black"><b>https://rguni.irins.org/
                                            </b></a></span>
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div class="res_heading mb-5">
                            <h3 class="headd2 mb-2 text-dark"><strong>RGU Remote Log: </strong></h3>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Most of the publishers use
                                IP filtering as a de facto standard for authenticating
                                authorized users in subscribing institutions and providing access to e-resources to
                                them. While IP-based
                                access is most convenient, safe and hassle-free authentication mechanism for
                                publishers as well as for
                                subscribing institutions, it has some limitations. One of the most serious
                                limitations of IP-filtered access
                                to e-resources is that the users can access e-resources only when they are in the
                                Institute campus. Ideally,
                                an authorized user should be able to access e-resources irrespective of his / her
                                physical location at any
                                time as long as he has access to the Internet.
                            </p>
                            <p class="para1 mt-2 text-dark">In order to overcome this limitation, the RemoteLog has
                                adopted Shibboleth, a
                                standard-based propitiatory software, for authenticating authorized users from
                                institutions and provide them
                                seamless access to e-resources from anywhere, anytime. RemoteLog offers a mechanism
                                for users to access
                                multiple resources within a federated single sign-on framework. The goal of the
                                RemoteLog is to allow users
                                to access internal and external resources seamlessly using a single, institutionally
                                controlled identity.
                                This would not only allow authorized users to access e-resources from anywhere,
                                anytime but would also
                                circumvent the requirement of maintaining multiple passwords for multiple resources
                                in multiple domains.
                            </p>
                            <ul>
                                <li class=" text-dark ">
                                    You may access RGU Remote Log Portal via at : - <span><a class="text-primary"
                                            href="https://rgu.remotlog.com/ " target="_black"><b>https://rgu.remotlog.com/
                                            </b></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mobTab5" style="display: block; padding: 20px; border-top: none;">
                <div class="container">
                    <div>
                        <div class=" mb-5">
                            <h3 class="headd2 mb-2 text-dark"><strong>Plagiarism Software:</strong></h3>
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">Library offers Plagiarism
                                Checking Service using a “Drillbit” tool to its registered users
                                at RGUCL.
                                Library has a license to this tool. To get the similarity/plagiarism checking done
                                and have the similarity
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
                            <p class="para1 mt-2 text-dark" style="text-align: justify;">About Software: Drillbit
                                Plagiarism is a platform designed to detect and prevent
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
                                <li class="para1 text-dark">1.1. This "Anti-Plagiarism policy" is subject to Assam
                                    Royal Global University's "Policy
                                    for Research Promotion".</li>
                                <li class="para1 text-dark">1.2. Objective: The aim of this policy is to promote
                                    scholarly excellence, to create
                                    academic awareness about responsible conduct of research and to prevent
                                    plagiarism in academic writings
                                    and publications.</li>
                                <li class="para1 text-dark">1.3. Scope: Applicable to students, faculty, and staff,
                                    who submit to the university
                                    academic resources for award of degrees or for publication.</li>
                                <li class="para1 text-dark">1.4. Plagiarism: For the purposes of this document, the
                                    definition given by
                                    Merriam-Webster online dictionary is to be followed. "To plagiarize is "to steal
                                    and pass off (the ideas
                                    or words of another) as one's own: use (another's production) without crediting
                                    the source, [...or] to
                                    commit literary theft: present as new and original an idea or product derived
                                    from an existing source. "
                                </li>
                                <li class="para1 text-dark">1.5. Academic resources: will apply to all print and
                                    electronic materials submitted for
                                    publication.</li>
                                <li class="para1 text-dark">1.6. The University, following UGC guidelines, has made
                                    plagiarism check mandatory for all
                                    its PhD research scholars and for all academic resources submitted for
                                    publication <b>(REGD. NO. D.
                                        L.-33004/99 Date TUESDAY, JULY 31, 2018)</b></li>
                                <li class="para1 text-dark">1.7. Students submitting dissertations and project
                                    reports as part of requirements for
                                    their Master's Degree are directed to use the plagiarism checking facility
                                    available in all the campuses
                                    of the University.</li>
                                <li class="para1 text-dark">1.8. All departments shall educate students on observing
                                    ethical guidelines in conducting
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
                                <li class="para1 text-dark">2.1. Access to the " Drillbrit '' Plagiarism Checker,
                                    licensed by the University, will be
                                    with the Librarians of the University. Since the University has procured only a
                                    single user license to
                                    test out the capacity and reliability of the software, access time to the
                                    software at different campuses
                                    is restricted to specific days as indicated below. Use of this software can be
                                    carried out on
                                    non-allocated dates with mutual understanding between the librarians.</li>
                                <li class="para1 text-dark">2.2. Faculty members or students who want to check
                                    documents drafted by them for possible
                                    plagiarism are to email a request to the respective librarians with the MS WORD
                                    file attached. The email
                                    subject should be named: "Plagiarism check". Students should copy this email to
                                    their respective
                                    supervisors/guides. Name, Department, School, and Name of the supervisor/guide
                                    should be certainly
                                    indicated.</li>
                                <li class="para1 text-dark">2.3. After the plagiarism check, the librarian will send
                                    the report generated (PDF format)
                                    to both the students as well as the supervisor/guide.</li>
                                <li class="para1 text-dark">2.4. The UGC has not indicated the percentage of
                                    similarity permitted. Till further notice
                                    with regards to this, the University will not certify works containing more than
                                    10% similarity.</li>
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
                                    free of plagiarism lies with the research scholar and the supervisor/guide.</li>
                                <li class="para1 text-dark">3.2. All PhD theses are to contain a "declaration of
                                    originality" by the researcher and
                                    the supervisor/guide respectively.</li>
                                <li class="para1 text-dark">3.3. Violation of the Copyright Act through plagiarism
                                    is considered a legal offence and
                                    may attract prosecution in a court of law leading to various penalties depending
                                    on the severity of the
                                    crime.</li>
                                <li class="para1 text-dark">3.4. The University will not accept PhD theses and
                                    academic resources submitted for
                                    publication, without the "Plagiarism Verification Certificate".</li>
                            </ul>
                        </div>
                        <div class="res_heading mb-5">

                            <ul>
                                <li class="para1 text-dark"><b>4. Levels of Plagiarism</b></li>
                                <li class="para1 text-dark">Plagiarism would be quantified into following levels in
                                    ascending order of severity for
                                    the purpose of its <br /> <b>Similarities up to 10% - Minor similarities.</b>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>

            <div id="mobTab6" style="display: block; padding: 20px; border-top: none;">
                <div class="container">
                    <div>
                        <h3 class="headd2 mb-2 text-dark"><strong>Departmental Library: </strong></h3>
                        <!-- <h3 class = "font-weight-bold  text-primary mb-5"><strong>Departmental Library: </strong></h3> -->
                        <div class="mb-2">
                            <p class="para1 mt-2 text-dark">A departmental library serves as a specialized resource
                                centre within an academic
                                institution, focusing on the specific needs of a particular department or
                                discipline. Whether it's history,
                                biology, economics, or any other field, a departmental library is tailored to
                                support the research,
                                teaching, and learning activities of its associated department.
                                Apart from the Central Library, separate departmental libraries are set up to
                                provide a more accessible and
                                a more personalised reading space. Departmental Library may be located within the
                                department concerned and
                                Departmental libraries exhibit greater convenience; saving of student and staff
                                time; increased Use of
                                journals and reference works.

                            </p>
                        </div>
                        <hr />
                        <div class="res_heading2 mb-5">
                            <h3 class="headd2 mb-2 text-dark"><strong>Departmental Libraries are as below: </strong>
                            </h3>
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


        </section>
        <!-- JavaScript -->
        <script>
            function mobShowTab(tabId, clickedBtn) {
                const tabIds = ['mobTab1', 'mobTab2', 'mobTab3', 'mobTab4', 'mobTab5', 'mobTab6'];
                for (let id of tabIds) {
                    document.getElementById(id).style.display = 'none';
                }
                document.getElementById(tabId).style.display = 'block';

                const buttons = document.querySelectorAll('#mobTabButtons button');
                buttons.forEach(btn => {
                    btn.style.backgroundColor = '#fff';
                    btn.style.color = '#333'; // Reset text color
                });

                clickedBtn.style.backgroundColor = '#1b2f50';
                clickedBtn.style.color = '#fff'; // Set active text color to white
            }
        </script>

    </div>


    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <img src="mobile-assets/library/1.png" />

        <section style="background-image: url(sarang/bg.svg); background-size: cover;">

            <div style="width: 100%; padding: 20px 0px;">

                <!-- Tab Buttons -->
                <div id="tabs" style="display: flex; border-bottom: 1px solid #ccc;">
                    <button onclick="showTab('about', this)"
                        style="flex:1; padding: 10px 0; font-size: 18px; font-weight: 700; color: #fff; background-color: #264273; border: none; border-bottom: 2px solid #000; cursor: pointer;">About
                        Us</button>
                    <button onclick="showTab('resources', this)"
                        style="flex:1; padding: 10px 0; font-size: 18px; font-weight: 600; color: #999; background: none; border: none; cursor: pointer;">Resources</button>
                    <button onclick="showTab('opac', this)"
                        style="flex:1; padding: 10px 0; font-size: 18px; font-weight: 600; color: #999; background: none; border: none; cursor: pointer;">OPAC</button>
                    <button onclick="showTab('repository', this)"
                        style="flex:1; padding: 10px 0; font-size: 18px; font-weight: 600; color: #999; background: none; border: none; cursor: pointer;">Repository</button>
                    <button onclick="showTab('plagiarism', this)"
                        style="flex:1; padding: 10px 0; font-size: 18px; font-weight: 600; color: #999; background: none; border: none; cursor: pointer;">Plagiarism</button>
                    <button onclick="showTab('library', this)"
                        style="flex:1; padding: 10px 0; font-size: 18px; font-weight: 600; color: #999; background: none; border: none; cursor: pointer;">Departmental
                        Library</button>
                </div>

                <!-- Tab Contents -->

                <div id="about" style="display: block; padding: 20px; border-top: none;">
                    <div class="container">
                        <div class="row pt-5" style="display: flex; align-items: center; justify-content: center;">
                            <div class="col-lg-6">
                                <img style="height: 550px; border-radius: 20px;" src="mobile-assets/library/headimg1.png"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text">
                                    About the Library</h1>
                                <div class="para1 text-dark" style="text-align: justify;">
                                    <p class="text-dark para1">
                                        Royal Global University’s Central Library is a window to the world of latest
                                        information in Science, Engineering, Technology, Management, Humanities, Social
                                        Sciences, and other areas. The library with its modern collection of knowledge
                                        resources and innovative information services supports the academic community of
                                        the varsity and is sufficiently automated using KOHA ILMS for running its
                                        housekeeping operations and providing online access to catalogue and e-resource
                                        facility. Its collection is available through OPAC (On-line Public Access
                                        Catalogue) and can be accessed in as well as off-campus. With a total collection
                                        over 30,397+ books, 31+ Printed Journals and 17+ Printed Magazines, this duplex
                                        library boasts of an impressive 8,000 square feet of modern, high-tech space
                                        that serves as an integrated resource centre that include regular subscriptions
                                        to national and international journals, electronic journals, round-the-clock
                                        accessibility, off-campus access to e-resources, internet facilities,
                                        photocopying facilities</p>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-5" style="display: flex; align-items: center; justify-content: center;">

                            <div class="col-lg-6">

                                <div class="para1 text-dark" style="text-align: justify;">
                                    <p class="text-dark para1">
                                        The RGU Library boasts an impressive 8,000 square feet of modern, high-tech
                                        space. This centrally air-conditioned, well-furnished duplex facility serves as
                                        an integrated resource center, housing an extensive collection of cutting-edge
                                        books across various fields, including management, engineering, architecture,
                                        social sciences, and more.

                                        Our library is not just a place to store books; it is a hub of knowledge. We
                                        offer a wide range of services and resources to meet the diverse needs of our
                                        users. These include regular subscriptions to national and international
                                        journals, access to electronic journals, round-the-clock availability,
                                        off-campus access to e-resources, internet facilities, photocopying services,
                                        and CD rewriting services, among others.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <img style="height: 400px; border-radius: 20px;" src="mobile-assets/library/headimg.jpeg"
                                    alt="">
                            </div>

                        </div>

                        <div class="card p-4" style="margin-top: 30px;">
                            <div>
                                <div class="headd3 text-dark fw-bold pb-2">Overdue Charges</div>
                                <p class="text-dark para1">Rs. 5/- (Rupees Five Only) per day per volume shall be
                                    charged if:</p>
                                <ol class="text-dark para1">
                                    <li>A book borrowed from the Circulation Section is not returned by the due date.
                                    </li>
                                    <li>The book which is recalled by the library is not returned within the stipulated
                                        period.</li>
                                    <li>The maximum overdue charge for a defaulter shall not exceed the price of the
                                        book/volume.</li>
                                    <li>No payment is received in the library; the librarian makes a statement of the
                                        fine which is paid to the account section.</li>
                                    <li>A reminder notice will be issued by the library staff bearing the names of
                                        defaulters before the end-semester results are declared.</li>
                                </ol>
                            </div>

                            <div class="pt-3">
                                <div class="headd3 text-dark fw-bold pb-2">Restricted Categories of Reading Material
                                </div>
                                <ol class="text-dark para1">
                                    <li>Books marked with capital ‘REF’ and ‘Back Volumes’ of Journals and Periodicals
                                        shall be consulted in the library only.</li>
                                    <li>Books under ‘Reference’ with a red spine label shall not be issued.</li>
                                    <li>Student dissertations and PhD theses are original works and are not meant for
                                        circulation.</li>
                                    <li>All current periodicals shall be treated as ‘Reference’ materials.</li>
                                </ol>
                            </div>

                            <div class="pt-3">
                                <div class="headd3 text-dark fw-bold pb-2">Loss of Books by Borrowers</div>
                                <ol class="text-dark para1">
                                    <li>If borrowed materials are lost, the borrower must replace the exact title and
                                        author of the lost items.</li>
                                    <li>A prescribed fine will be charged for the loss of reading materials, files, and
                                        other resources.</li>
                                    <li>Student dissertations and PhD theses are not meant for circulation.</li>
                                    <li>The fine will continue to accrue until the librarian is notified of the lost
                                        material.</li>
                                    <li>Once reported, late penalties will be put on hold for two weeks to allow time to
                                        procure the lost books.</li>
                                    <li>Borrowers may request the librarian's assistance in procuring the lost books.
                                    </li>
                                    <li>If the item is out-of-print or no longer in circulation, the borrower must pay
                                        double the actual cost or compensation at current market value considering
                                        inflation.</li>
                                </ol>
                            </div>

                            <div class="pt-3">
                                <div class="headd3 text-dark fw-bold pb-2">Library Defaulters</div>
                                <p class="text-dark para1">Regular notices about the due date for returning books are
                                    displayed on the 'Library Notice Board' and emailed to all HODs. This date is also
                                    stamped on the 'Date Label' inside issued books.</p>
                                <ol class="text-dark para1">
                                    <li>Borrowers who fail to return books after the due date are considered defaulters.
                                    </li>
                                    <li>A defaulter list is sent to the Examination Branch two weeks before result
                                        declaration.</li>
                                    <li>Defaulters' end-semester results will be withheld if borrowed books are not
                                        returned.</li>
                                    <li>Defaulters must return the books and obtain a 'Library Clearance Certificate'
                                        from the Librarian to access their results.</li>
                                    <li>For students who quit mid-semester or end-semester, the librarian will generate
                                        fines and inform the respective HOD and Dean for action.</li>
                                </ol>
                            </div>

                            <div class="pt-3">
                                <div class="headd3 text-dark fw-bold pb-2">Other Rules & Regulations</div>
                                <ol class="text-dark para1">
                                    <li>All visitors must deposit their belongings at the property counter and sign the
                                        register. Only notebooks and returnable library books are allowed inside.</li>
                                    <li>An identity card is mandatory for access to the library.</li>
                                    <li>Books removed from shelves should be left on the nearest table if not needed.
                                        Misplacing books is akin to losing them.</li>
                                    <li>Newspapers should be folded properly after reading and returned to their
                                        designated place.</li>
                                    <li>Defacing or damaging library materials is prohibited and will be reported to the
                                        Librarian and School Director.</li>
                                    <li>Students should not issue books on behalf of others.</li>
                                    <li>Strict discipline must be maintained within the library.</li>
                                    <li>Visitors must obtain prior permission from the Librarian or Board of Management
                                        to use the library.</li>
                                    <li>Photographs of the library are prohibited without the Librarian’s permission.
                                    </li>
                                    <li>The Librarian reserves the right to recall any issued book/item at any time.
                                    </li>
                                    <li>Using laptops in the library requires prior permission from the Library Staff.
                                    </li>
                                </ol>
                            </div>

                        </div>


                        <div>
                            <h2 class="headd1 fw-bold text-dark pt-5 pb-3">Library Team</h2>

                            <div class="row" style="display: flex; align-items: center; justify-content: center;">

                                <div class="col-lg-3 mb-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                        <div class="p-3">
                                            <img style=" width: 100%; border: 1px solid #99999984;"
                                                src="mobile-assets/library/mukutor.jpg" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Dr.
                                                Md. Mukutor Rahman </h5>
                                            <p class="para1" style="color: #27467A; line-height: 1.3;">Librarian i/c
                                                (Assistant Professor)</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                        <div class="p-3">
                                            <img style=" width: 100%; border: 1px solid #99999984;"
                                                src="mobile-assets/library/prasanna.jpg" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                                Prasanna Kumar Konch </h5>
                                            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                                Librarian</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                        <div class="p-3">
                                            <img style=" width: 100%; border: 1px solid #99999984;"
                                                src="mobile-assets/library/bikramaditya.jpg" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                                Bikramaditya Barman </h5>
                                            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                                Librarian</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 450px;">
                                        <div class="p-3">
                                            <img style=" width: 100%; border: 1px solid #99999984;"
                                                src="mobile-assets/library/niharika.jpg" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">
                                                Mrs. Niharika Saikia </h5>
                                            <p class="para1" style="color: #27467A; line-height: 1.3;">Assistant
                                                Librarian</p>

                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-lg-3 mb-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 420px;">
                                        <div class="p-3">
                                            <img style=" width: 100%; border: 1px solid #99999984;"
                                                src="mobile-assets/library/pinku.jpg" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                                Pinku Kalita </h5>
                                            <p class="para1" style="color: #27467A; line-height: 1.3;">Peon</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <div class="card rounded d-flex flex-column"
                                        style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 420px;">
                                        <div class="p-3">
                                            <img style=" width: 100%; border: 1px solid #99999984;"
                                                src="mobile-assets/library/chintu.jpg" />
                                        </div>
                                        <div class="card-body d-flex flex-column flex-grow-1">
                                            <h5 style="font-weight: 600; color: #27467A;" class="card-title headd2 pb-2">Mr.
                                                Chintu Barman </h5>
                                            <p class="para1" style="color: #27467A; line-height: 1.3;">Peon</p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <hr>

                        <div class="headd2 text-dark fw-bold pb-2">Library Circulation Policy</div>
                        <p class="text-dark para1">RGU library offers print resources and e-resources from the world
                            over and makes it easily available to students for ready use. The various services offered
                            by it are as follows:</p>

                        <div class="headd3 text-dark fw-bold pb-2">Loan Privileges:</div>
                        <p class="text-dark para1">The number of books that can be borrowed and the period of loan for
                            the various categories of members will be as follows:</p>

                        <div class="headd3 text-dark fw-bold pb-2">Circulation Parameters</div>
                        <p class="text-dark para1">Document loan eligibility varies for different categories as given
                            below:</p>

                        <hr>

                        <div class="pt-3">
                            <table class="table bg-white table-striped para1">
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
                                        <td>Ph.D. Scholars</td>
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

                        <div class="headd3 text-dark fw-bold pb-2 mt-4">Categories of loan</div>

                        <ul class="mb-5 para1 ">
                            <li class="para1 text-dark">a. The books marked as ‘REF’ with red spine label shall not be
                                issued
                                and may, therefore, be
                                consulted in the library only.</li>
                            <li class="para1 text-dark">b. All other books shall be available on an ordinary loan. The
                                period of
                                the loan shall be as
                                mentioned in Loan Privileges above. </li>
                            <li class="para1 text-dark">c. All current periodicals (Journals & Magazines) and their
                                current
                                volumes shall be treated as
                                ‘Reference’ books and shall not, therefore, be issued. </li>
                            <li class="para1 text-dark">d. The Librarian may regulate the issuance of books in such a
                                manner as
                                she/he may deem fit. In
                                case of great demand, books issued may be recalled at any time by the Librarian. </li>
                            <li class="para1 text-dark">e. All residuary powers regarding the use of reading material,
                                provision
                                of other services and the
                                maintenance of discipline and decorum in the library shall rest with the Librarian.
                            </li>
                        </ul>

                        <div class="headd3 text-dark fw-bold pb-2 mt-4">Library Services:</div>

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

                        <div class="headd2 text-dark fw-bold pb-3 mt-4" style="font-size: 30px;">Library Section</div>

                        <div class="headd3 text-dark fw-bold pb-2 ">Circulation Section</div>

                        <p class="para1 text-dark" style="text-align: justify;">This section represents the hub of
                            library
                            activities where lending out of books to
                            readers is facilitated. Of all the library activities, the circulation of books for home use
                            is a major public service provided by the library. Nearly all the members of the library
                            visit this
                            section for
                            getting books on loan for home use at one or the other time
                        </p>

                        <div class="headd3 text-dark fw-bold pb-2 ">Reference Section</div>

                        <p class="para1 text-dark" style="text-align: justify;">
                            The Reference section of the library houses the
                            library’s reference books, which are those
                            materials that are meant to aid research by providing quick and accessible information on
                            any
                            particular topic.
                            These materials are usually used to find facts or provide broad overviews of topics. They
                            should not
                            be used as
                            major sources for papers or other projects. Dictionaries, encyclopedias, bibliographies, and
                            Thesis,
                            Dissertation, and Project reports are some of the most common reference materials found in
                            the
                            Library’s Reference Collection.
                        </p>

                        <div class="headd3 text-dark fw-bold pb-2 ">Periodical Section</div>

                        <p class="para1 text-dark" style="text-align: justify;">
                            Periodical has contributed a great deal to
                            reference work by furnishing articles that appear more
                            recent than books on a subject, particularly in the ever-changing field of politics,
                            economic,
                            science and
                            technology. They contain articles and papers a subject about which the library may have no
                            books and
                            particularly as to matters of local as temporary interest, a subject and which no books how
                            yet been
                            written.
                            They form primary sources of information. Central Library collects subject periodicals,
                            newspapers,
                            and
                            magazines. It handles any current periodicals.
                        </p>

                        <div class="headd3 text-dark fw-bold pb-2 ">General Book Section</div>

                        <p class="para1 text-dark" style="text-align: justify;">
                            The General Section of the Library those books
                            are available which are related of your
                            departmental textbooks and Paperback of Journal and Magazine, General book.
                        </p>

                        <div class="headd3 text-dark fw-bold pb-2 ">E-Resource Browsing Section</div>

                        <p class="para1 text-dark" style="text-align: justify;">
                            The computer unit in the Central Library
                            provided support maintenance and consultation for both
                            staff and students within the College. Students can have access to a variety of Package from
                            software and
                            internet browsing facilities such as internet facilities, E-mail as well as free user
                            Printing for
                            course book
                            materials and research.
                        </p>


                    </div>
                </div>

                <div id="resources" style="display: block; padding: 20px; border-top: none;">

                    <div class="container">
                        <div>
                            <h3 class=" headd2 mb-4 text-dark"><strong>Library Resources:</strong></h3>
                            <div class="headd2 mb-5">
                                <h4 class="mt-3 mb-3 text-dark "><b>BOOKS</b></h4>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library is a true
                                    treasure trove of knowledge and information. Our total
                                    collection is 30,397+ books on various subjects, including arts & humanities, Social
                                    Science, Pure Science
                                    and technology, and more. Our mission is to provide equal access to information for
                                    all who wish to learn,
                                    and we strive to maintain a diverse collection to accommodate all interests.</b>
                                </p>
                            </div>
                            <hr />
                            <div class="headd2 mb-5">
                                <h4 class="mt-3 mb-3 text-dark"><b>JOURNALS & ELECTRONIC RESOURCES</b></h4>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library, provide
                                    access to a variety of ejournal and eBooks resources to aid in
                                    your studies. Our extensive collection includes 31 Nos printed journals. 41,426+
                                    e-journals and over 214130+
                                    eBooks to choose from. </b>
                                </p>
                            </div>
                            <hr />
                            <div class="headd2 mb-5">
                                <h4 class="mt-3 mb-3 text-dark"><b>CD-ROMS</b></h4>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">Central Library has more
                                    than 1000 CD/DVDs of Various books, encyclopedias, dictionaries &
                                    and manuals. </b>
                                </p>
                            </div>
                            <hr />
                            <div class="headd2 mb-5">
                                <h4 class="mt-3 mb-3 text-dark"><b>NEWS PAPER & MAGAZINE</b></h4>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">The library subscribes to
                                    17+ magazines and 8 Nos newspapers with multiple copies to cater
                                    to the needs of the students and academic community </b>
                                </p>
                                <h4 class="mt-3 mb-3 text-dark"><b>List of Journal:</b></h4>
                                <div class="row">
                                    <div class="col-md-7">
                                        <ul>
                                            <li class="para1  text-dark"> 1. Journal of Perinatal, Pediatric and
                                                Neonatal Nursing </li>
                                            <li class="para1  text-dark"> 2. Journal of Nursing Research, Education and
                                                Management</li>
                                            <li class="para1  text-dark"> 3. Journal of Neurological, Psychiatric and
                                                Mental Health Nursing </li>
                                            <li class="para1  text-dark">4. Journal of Community and Social Health
                                                Nursing</li>
                                            <li class="para1  text-dark">5. International Journal of Studies in
                                                Midwifery and Women's Health </li>
                                            <li class="para1  text-dark">6. International Journal of Research in Medical
                                                Surgical Nursing </li>
                                            <li class="para1  text-dark">7. International Journal of Medical Surgical
                                                Nursing </li>
                                            <li class="para1  text-dark">8. International Journal of Community Health
                                                Nursing </li>
                                            <li class="para1  text-dark">9. International Journal of Pediatric Nursing
                                            </li>
                                            <li class="para1  text-dark">10. International Journal of Women Health
                                                Nursing</li>
                                            <li class="para1  text-dark">11. International Journal of Nursing Critical
                                                Care</li>
                                            <li class="para1  text-dark">12. International Journal of Nursing
                                                Obstetrics, Perintal and Neonatal Nursing
                                            </li>
                                            <li class="para1  text-dark">13. International Journal of Neurological
                                                Nursing</li>
                                            <li class="para1  text-dark">14. International Journal of Geriatric Nursing
                                            </li>
                                            <li class="para1  text-dark">15. Indian Journal of Fisheries </li>
                                            <li class="para1  text-dark">16. Indian Journal of Animal Research </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <li class="para1  text-dark">17. Indian Journal of Physics </li>
                                            <li class="para1  text-dark">18. Proceeding of the National Academy of
                                                Sciences India</li>
                                            <li class="para1  text-dark">19. All India Reporter </li>
                                            <li class="para1  text-dark">20. Supreme Court Cases</li>
                                            <li class="para1  text-dark">21. Current Science</li>
                                            <li class="para1  text-dark">22. Oitijya (The Heritage)</li>
                                            <li class="para1  text-dark">23. The Chartered Accountant Student</li>
                                            <li class="para1  text-dark">24. Asian Textile Journal</li>
                                            <li class="para1  text-dark">25. Abhiskaar</li>
                                            <li class="para1  text-dark">26. IEEE Spectrum</li>
                                            <li class="para1  text-dark">27. IIT Madras Shaastra</li>
                                            <li class="para1  text-dark">28. Everyman's Science</li>
                                            <li class="para1  text-dark">29. Photonics Spectra</li>
                                            <li class="para1  text-dark">30. Corporate Citizen</li>
                                            <li class="para1  text-dark">31. Oneness </li>
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
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://discovery1.delnet.in/"
                                        target="_black"><b>https://discovery1.delnet.in/</b></a>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://www.jstor.org/action/showLogin"
                                        target="_black"><b>https://www.jstor.org/action/showLogin</b></a>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://www.manupatrafast.com/ "
                                        target="_black"><b>https://www.manupatrafast.com/</b></a>
                                </div>
                                <div class="col-lg-4 p-3">
                                    <a class="text-primary para1" href="https://ndl.iitkgp.ac.in/ "
                                        target="_black"><b>https://ndl.iitkgp.ac.in/ </b></a>
                                </div>
                            </div>

                            <h4 class="mt-3 mb-3 text-dark"><b>Open Access Resources:</b></h4>
                            <div class="para1 text-dark fw-bold pb-2">E-BOOKS</div>
                            <ol class="para1 text-dark">
                                <li>Directory of Open Access Books – <a class="text-primary"
                                        href="https://www.doabooks.org/"
                                        target="_blank"><b>https://www.doabooks.org/</b></a></li>
                                <li>INTECH Open Access Books – <a class="text-primary"
                                        href="https://www.intechopen.com/books"
                                        target="_blank"><b>https://www.intechopen.com/books</b></a></li>
                                <li>AMS Free Online Books – <a class="text-primary"
                                        href="https://www.ams.org/publicoutreach/math-history/math-history#freehistbooks"
                                        target="_blank"><b>https://www.ams.org/publicoutreach/math-history/math-history#freehistbooks</b></a>
                                </li>
                                <li>Project Gutenberg Free E-Books – <a class="text-primary"
                                        href="https://www.gutenberg.org/"
                                        target="_blank"><b>https://www.gutenberg.org/</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-COURSES</div>
                            <ol class="para1 text-dark">
                                <li>NPTEL Web & Video Courses – <a class="text-primary" href="https://nptel.ac.in/"
                                        target="_blank"><b>https://nptel.ac.in/</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-DATABASES</div>
                            <ol class="para1 text-dark">
                                <li>World Bank: Open Knowledge Repository – <a class="text-primary"
                                        href="https://openknowledge.worldbank.org/handle/10986/23705"
                                        target="_blank"><b>https://openknowledge.worldbank.org/handle/10986/23705</b></a>
                                </li>
                                <li>Open Access Library – <a class="text-primary" href="https://www.oalib.com/"
                                        target="_blank"><b>https://www.oalib.com/</b></a></li>
                                <li>DLIST: UA Campus Repository – <a class="text-primary"
                                        href="https://repository.arizona.edu/handle/10150/105066"
                                        target="_blank"><b>https://repository.arizona.edu/handle/10150/105066</b></a>
                                </li>
                                <li>BioMed Central – <a class="text-primary" href="https://www.biomedcentral.com/"
                                        target="_blank"><b>https://www.biomedcentral.com/</b></a></li>
                                <li>PubMed Central – <a class="text-primary" href="https://www.ncbi.nlm.nih.gov/pmc/"
                                        target="_blank"><b>https://www.ncbi.nlm.nih.gov/pmc/</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-JOURNALS</div>
                            <ol class="para1 text-dark">
                                <li>Directory of Open Access Journals – <a class="text-primary" href="https://doaj.org/"
                                        target="_blank"><b>https://doaj.org/</b></a></li>
                                <li>INTECH Open Access Journals – <a class="text-primary"
                                        href="https://www.intechopen.com/journals"
                                        target="_blank"><b>https://www.intechopen.com/journals</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-PATENTS</div>
                            <ol class="para1 text-dark">
                                <li>EPO: Espacenet Patent – <a class="text-primary"
                                        href="https://www.epo.org/en/searching-for-patents/technical/espacenet#tab1"
                                        target="_blank"><b>https://www.epo.org/en/searching-for-patents/technical/espacenet#tab1</b></a>
                                </li>
                                <li>FPO: Free Patents Online – <a class="text-primary"
                                        href="https://www.freepatentsonline.com/search.html"
                                        target="_blank"><b>https://www.freepatentsonline.com/search.html</b></a></li>
                                <li>Google Patents – <a class="text-primary" href="https://patents.google.com/"
                                        target="_blank"><b>https://patents.google.com/</b></a></li>
                                <li>Patent Lens – <a class="text-primary"
                                        href="https://www.lens.org/lens/search/patent/list?p=0&n=10&l=EN"
                                        target="_blank"><b>https://www.lens.org/lens/search/patent/list?p=0&n=10&l=EN</b></a>
                                </li>
                                <li>USPTO – <a class="text-primary" href="http://patft.uspto.gov/"
                                        target="_blank"><b>http://patft.uspto.gov/</b></a></li>
                                <li>WIPO: PATENTSCOPE – <a class="text-primary"
                                        href="https://patentscope.wipo.int/search/en/search.jsf"
                                        target="_blank"><b>https://patentscope.wipo.int/search/en/search.jsf</b></a>
                                </li>
                                <li>Intellectual Property India Patents – <a class="text-primary"
                                        href="https://www.ipindia.gov.in/patents.htm"
                                        target="_blank"><b>https://www.ipindia.gov.in/patents.htm</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-NEWSPAPERS</div>
                            <ol class="para1 text-dark">
                                <li>World Newspaper Directory – <a class="text-primary"
                                        href="https://www.onlinenewspapers.com/index.shtml"
                                        target="_blank"><b>https://www.onlinenewspapers.com/index.shtml</b></a></li>
                                <li>The Business Line – <a class="text-primary" href="https://www.thehindubusinessline.com/"
                                        target="_blank"><b>https://www.thehindubusinessline.com/</b></a></li>
                                <li>The Business Standard – <a class="text-primary"
                                        href="https://www.business-standard.com/"
                                        target="_blank"><b>https://www.business-standard.com/</b></a></li>
                                <li>The Economic Times – <a class="text-primary"
                                        href="https://economictimes.indiatimes.com/"
                                        target="_blank"><b>https://economictimes.indiatimes.com/</b></a></li>
                                <li>The Hindu – <a class="text-primary" href="https://www.thehindu.com/"
                                        target="_blank"><b>https://www.thehindu.com/</b></a></li>
                                <li>The Hindustan Times – <a class="text-primary" href="https://www.hindustantimes.com/"
                                        target="_blank"><b>https://www.hindustantimes.com/</b></a></li>
                                <li>The Indian Express – <a class="text-primary" href="https://indianexpress.com/"
                                        target="_blank"><b>https://indianexpress.com/</b></a></li>
                                <li>The Times of India – <a class="text-primary" href="https://timesofindia.indiatimes.com/"
                                        target="_blank"><b>https://timesofindia.indiatimes.com/</b></a></li>
                                <li>The Telegraph – <a class="text-primary" href="https://www.telegraphindia.com/"
                                        target="_blank"><b>https://www.telegraphindia.com/</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-REFERENCES</div>
                            <ol class="para1 text-dark">
                                <li>Cambridge Dictionary Online – <a class="text-primary"
                                        href="https://dictionary.cambridge.org/"
                                        target="_blank"><b>https://dictionary.cambridge.org/</b></a></li>
                                <li>Foreign Language Dictionary – French English – <a class="text-primary"
                                        href="https://dictionary.cambridge.org/dictionary/french-english/"
                                        target="_blank"><b>https://dictionary.cambridge.org/dictionary/french-english/</b></a>
                                </li>
                                <li>One Look Dictionary – <a class="text-primary" href="https://www.onelook.com/"
                                        target="_blank"><b>https://www.onelook.com/</b></a></li>
                                <li>Scholarpedia – <a class="text-primary"
                                        href="http://www.scholarpedia.org/article/Main_Page"
                                        target="_blank"><b>http://www.scholarpedia.org/article/Main_Page</b></a></li>
                                <li>Subject Dictionary – Business/Finance – <a class="text-primary" href="#"><b></b></a>
                                </li>
                                <li>Subject Dictionary – Library & Information Science – <a class="text-primary"
                                        href="https://odlis.abc-clio.com/"
                                        target="_blank"><b>https://odlis.abc-clio.com/</b></a></li>
                                <li>Subject Dictionary – Medical Science – <a class="text-primary"
                                        href="https://www.medicinenet.com/medterms-medical-dictionary/article.htm"
                                        target="_blank"><b>https://www.medicinenet.com/medterms-medical-dictionary/article.htm</b></a>
                                </li>
                                <li>Subject Dictionary – Technology – <a class="text-primary" href="#"><b></b></a></li>
                                <li>Wikipedia – <a class="text-primary" href="https://www.wikipedia.org/"
                                        target="_blank"><b>https://www.wikipedia.org/</b></a></li>
                            </ol>

                            <div class="para1 text-dark fw-bold pb-2">E-THESES & DISSERTATIONS</div>
                            <ol class="para1 text-dark">
                                <li>ShodhGanga: Indian Electronic Theses & Dissertations – <a class="text-primary"
                                        href="https://dictionary.cambridge.org/"
                                        target="_blank"><b>https://dictionary.cambridge.org/</b></a></li>
                                <li>NDLTD – <a class="text-primary" href="https://ndltd.org/"
                                        target="_blank"><b>https://ndltd.org/</b></a></li>
                                <li>The DART-Europe E-These Portal – <a class="text-primary"
                                        href="https://www.dart-europe.eu/basic-search.php"
                                        target="_blank"><b>https://www.dart-europe.eu/basic-search.php</b></a></li>
                            </ol>


                        </div>
                    </div>

                </div>

                <div id="opac" style="display: block; padding: 20px; border-top: none;">
                    <div class="container">
                        <h3 class="headd2 mb-2 text-dark"><strong>Online Public Access Catalogue:</strong></h3>
                        <div class="res_heading mb-2">
                            <p class="para1 mt-2 text-dark"><b>The Library Online Public Access Catalog (OPAC) </b> is a
                                digital database that allows
                                users to search for
                                and access materials held within a library's collection. It serves as an electronic
                                gateway to the library's
                                holdings,
                                providing users with a convenient way to locate books, journals, multimedia resources,
                                and other materials
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
                </div>

                <div id="repository" style="display: block; padding: 20px; border-top: none;">
                    <div class="container">
                        <div>
                            <div class=" mb-5">
                                <h3 class="headd2 mb-2 text-dark"><strong>Digital Repository:</strong></h3>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">Welcome to the Digital
                                    Repository at The Assam Royal Global University.
                                    This Institutional Repository is an Institutional Repository of RGU setup to
                                    collect, organize,
                                    preserve and provide access to the intellectual (scholarly) output of RGU faculty,
                                    students,
                                    staff and others associated with the Institute. This Digital Repository serves as a
                                    platform to
                                    faculty, researchers, students and staff members of the Institute to share their
                                    research work
                                    with wider community. Institutional Repository accepts documents viz., journal
                                    articles, conference
                                    papers, book chapters, working /technical papers, reports, theses and dissertations
                                    , presentations and any other resources submitted as part of academic requirement at
                                    the Institute and other forms of scholarly documents. Wherever possible and
                                    available,
                                    we will make an effort to provide access to the full- text of the documents covered
                                    in
                                    the digital repository, without violating copyrights/rights of the author or
                                    publisher,
                                    as relevant to each work. Please feel free to write to us at <a class="text-primary"
                                        href="mailto:library@rgu.ac"><b>library@rgu.ac</b></a> ,
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
                                    (Article, Conference paper, Book chapter, Book, Book review, Report etc), having RGU
                                    affiliation, are
                                    archived in this repository.
                                    Archiving papers would be beneficial to RGU researchers as it increases the web-wide
                                    visibility, and access
                                    to all users. It exposes metadata to famous academic search engines such as BASE
                                    <span class="text-primary font-weight-bold">(https://www.base-search.net)</span>.
                                    Also, it will be helpful for faculty and school administrators generate list of
                                    publications easily for
                                    various reporting requirements. RGU researchers are requested to send their papers
                                    to library@rgu.ac .
                                    Library team will help uploading the papers along with metadata in this repository.
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
                                <h3 class="headd2 mb-2 text-dark"><strong>Indian Research Information Network System:
                                    </strong></h3>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">IRINS is web-based Research
                                    Information Management (RIM) service provided by the
                                    Information and Library Network (INFLIBNET) Centre, An Inter-University Centre of
                                    University Grants
                                    Commission, Gandhinagar, Gujarat. The portal facilitates the academic, R&D
                                    organisations and faculty
                                    members, scientists to collect, curate and showcase the scholarly communication
                                    activities and provide an
                                    opportunity to create the scholarly network. The IRINS is available as free
                                    soware-as-service to the
                                    academic and R&D organisations in India.
                                    The IRINS would support to integrate the existing research management system such as
                                    HR system, course
                                    management, grant management system, institutional repository, open and commercial
                                    citation databases,
                                    scholarly publishers, etc. It has integrated with academic identity such as ORCID
                                    ID, ScopusID, Research ID,
                                    Microso Academic ID, Google Scholar ID for ingesting the scholarly publication from
                                    various sources
                                </p>
                                <ul>
                                    <li class=" text-dark ">
                                        You may access RGU IRINS Portal via at : - <span><a class="text-primary"
                                                href="https://rguni.irins.org/ " target="_black"><b>https://rguni.irins.org/
                                                </b></a></span>
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="res_heading mb-5">
                                <h3 class="headd2 mb-2 text-dark"><strong>RGU Remote Log: </strong></h3>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">Most of the publishers use
                                    IP filtering as a de facto standard for authenticating
                                    authorized users in subscribing institutions and providing access to e-resources to
                                    them. While IP-based
                                    access is most convenient, safe and hassle-free authentication mechanism for
                                    publishers as well as for
                                    subscribing institutions, it has some limitations. One of the most serious
                                    limitations of IP-filtered access
                                    to e-resources is that the users can access e-resources only when they are in the
                                    Institute campus. Ideally,
                                    an authorized user should be able to access e-resources irrespective of his / her
                                    physical location at any
                                    time as long as he has access to the Internet.
                                </p>
                                <p class="para1 mt-2 text-dark">In order to overcome this limitation, the RemoteLog has
                                    adopted Shibboleth, a
                                    standard-based propitiatory software, for authenticating authorized users from
                                    institutions and provide them
                                    seamless access to e-resources from anywhere, anytime. RemoteLog offers a mechanism
                                    for users to access
                                    multiple resources within a federated single sign-on framework. The goal of the
                                    RemoteLog is to allow users
                                    to access internal and external resources seamlessly using a single, institutionally
                                    controlled identity.
                                    This would not only allow authorized users to access e-resources from anywhere,
                                    anytime but would also
                                    circumvent the requirement of maintaining multiple passwords for multiple resources
                                    in multiple domains.
                                </p>
                                <ul>
                                    <li class=" text-dark ">
                                        You may access RGU Remote Log Portal via at : - <span><a class="text-primary"
                                                href="https://rgu.remotlog.com/ "
                                                target="_black"><b>https://rgu.remotlog.com/ </b></a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="plagiarism" style="display: block; padding: 20px; border-top: none;">
                    <div class="container">
                        <div>
                            <div class=" mb-5">
                                <h3 class="headd2 mb-2 text-dark"><strong>Plagiarism Software:</strong></h3>
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">Library offers Plagiarism
                                    Checking Service using a “Drillbit” tool to its registered users
                                    at RGUCL.
                                    Library has a license to this tool. To get the similarity/plagiarism checking done
                                    and have the similarity
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
                                <p class="para1 mt-2 text-dark" style="text-align: justify;">About Software: Drillbit
                                    Plagiarism is a platform designed to detect and prevent
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
                                    <li class="para1 text-dark">1.1. This "Anti-Plagiarism policy" is subject to Assam
                                        Royal Global University's "Policy
                                        for Research Promotion".</li>
                                    <li class="para1 text-dark">1.2. Objective: The aim of this policy is to promote
                                        scholarly excellence, to create
                                        academic awareness about responsible conduct of research and to prevent
                                        plagiarism in academic writings
                                        and publications.</li>
                                    <li class="para1 text-dark">1.3. Scope: Applicable to students, faculty, and staff,
                                        who submit to the university
                                        academic resources for award of degrees or for publication.</li>
                                    <li class="para1 text-dark">1.4. Plagiarism: For the purposes of this document, the
                                        definition given by
                                        Merriam-Webster online dictionary is to be followed. "To plagiarize is "to steal
                                        and pass off (the ideas
                                        or words of another) as one's own: use (another's production) without crediting
                                        the source, [...or] to
                                        commit literary theft: present as new and original an idea or product derived
                                        from an existing source. "
                                    </li>
                                    <li class="para1 text-dark">1.5. Academic resources: will apply to all print and
                                        electronic materials submitted for
                                        publication.</li>
                                    <li class="para1 text-dark">1.6. The University, following UGC guidelines, has made
                                        plagiarism check mandatory for all
                                        its PhD research scholars and for all academic resources submitted for
                                        publication <b>(REGD. NO. D.
                                            L.-33004/99 Date TUESDAY, JULY 31, 2018)</b></li>
                                    <li class="para1 text-dark">1.7. Students submitting dissertations and project
                                        reports as part of requirements for
                                        their Master's Degree are directed to use the plagiarism checking facility
                                        available in all the campuses
                                        of the University.</li>
                                    <li class="para1 text-dark">1.8. All departments shall educate students on observing
                                        ethical guidelines in conducting
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
                                    <li class="para1 text-dark">2.1. Access to the " Drillbrit '' Plagiarism Checker,
                                        licensed by the University, will be
                                        with the Librarians of the University. Since the University has procured only a
                                        single user license to
                                        test out the capacity and reliability of the software, access time to the
                                        software at different campuses
                                        is restricted to specific days as indicated below. Use of this software can be
                                        carried out on
                                        non-allocated dates with mutual understanding between the librarians.</li>
                                    <li class="para1 text-dark">2.2. Faculty members or students who want to check
                                        documents drafted by them for possible
                                        plagiarism are to email a request to the respective librarians with the MS WORD
                                        file attached. The email
                                        subject should be named: "Plagiarism check". Students should copy this email to
                                        their respective
                                        supervisors/guides. Name, Department, School, and Name of the supervisor/guide
                                        should be certainly
                                        indicated.</li>
                                    <li class="para1 text-dark">2.3. After the plagiarism check, the librarian will send
                                        the report generated (PDF format)
                                        to both the students as well as the supervisor/guide.</li>
                                    <li class="para1 text-dark">2.4. The UGC has not indicated the percentage of
                                        similarity permitted. Till further notice
                                        with regards to this, the University will not certify works containing more than
                                        10% similarity.</li>
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
                                        free of plagiarism lies with the research scholar and the supervisor/guide.</li>
                                    <li class="para1 text-dark">3.2. All PhD theses are to contain a "declaration of
                                        originality" by the researcher and
                                        the supervisor/guide respectively.</li>
                                    <li class="para1 text-dark">3.3. Violation of the Copyright Act through plagiarism
                                        is considered a legal offence and
                                        may attract prosecution in a court of law leading to various penalties depending
                                        on the severity of the
                                        crime.</li>
                                    <li class="para1 text-dark">3.4. The University will not accept PhD theses and
                                        academic resources submitted for
                                        publication, without the "Plagiarism Verification Certificate".</li>
                                </ul>
                            </div>
                            <div class="res_heading mb-5">

                                <ul>
                                    <li class="para1 text-dark"><b>4. Levels of Plagiarism</b></li>
                                    <li class="para1 text-dark">Plagiarism would be quantified into following levels in
                                        ascending order of severity for
                                        the purpose of its <br /> <b>Similarities up to 10% - Minor similarities.</b>
                                    </li>
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
                </div>

                <div id="library" style="display: block; padding: 20px; border-top: none;">
                    <div class="container">
                        <div>
                            <h3 class="headd2 mb-2 text-dark"><strong>Departmental Library: </strong></h3>
                            <!-- <h3 class = "font-weight-bold  text-primary mb-5"><strong>Departmental Library: </strong></h3> -->
                            <div class="mb-2">
                                <p class="para1 mt-2 text-dark">A departmental library serves as a specialized resource
                                    centre within an academic
                                    institution, focusing on the specific needs of a particular department or
                                    discipline. Whether it's history,
                                    biology, economics, or any other field, a departmental library is tailored to
                                    support the research,
                                    teaching, and learning activities of its associated department.
                                    Apart from the Central Library, separate departmental libraries are set up to
                                    provide a more accessible and
                                    a more personalised reading space. Departmental Library may be located within the
                                    department concerned and
                                    Departmental libraries exhibit greater convenience; saving of student and staff
                                    time; increased Use of
                                    journals and reference works.

                                </p>
                            </div>
                            <hr />
                            <div class="res_heading2 mb-5">
                                <h3 class="headd2 mb-2 text-dark"><strong>Departmental Libraries are as below: </strong>
                                </h3>
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

        </section>
        <script>
            function showTab(tabId, element) {
                var tabs = ['about', 'resources', 'opac', 'repository', 'plagiarism', 'library'];
                tabs.forEach(function (id) {
                    document.getElementById(id).style.display = 'none';
                });

                document.getElementById(tabId).style.display = 'block';

                var buttons = document.getElementById('tabs').getElementsByTagName('button');
                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].style.color = '#999';
                    buttons[i].style.fontWeight = '600';
                    buttons[i].style.backgroundColor = 'transparent';
                    buttons[i].style.borderBottom = 'none';
                }

                element.style.color = '#fff';
                element.style.backgroundColor = '#264273';
                // element.style.borderRadius = '5px 5px 0 0';
                element.style.fontWeight = '700';
                element.style.borderBottom = '2px solid #000';
            }
        </script>

    </div>
@endsection

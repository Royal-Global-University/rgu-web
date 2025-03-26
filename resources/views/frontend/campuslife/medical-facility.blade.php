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
<h1 class="headd2 text-dark fw-bold kd-title-ani kd-split-text text-center pt-4">
    Medical Facility
</h1>

<section style="padding: 30px 40px;">
    <div class="row">

        <div class="col-lg-8" style="padding: 0px 30px;">

            <section>

                <div class="row">
                    <div class="col-lg-6"><img class="rounded shadow-sm border" src="assets/img/medical/1b.jpeg" alt="">
                    </div>
                    <div class="col-lg-6"><img class="rounded shadow-sm border" src="assets/img/medical/1a.jpeg" alt="">
                    </div>
                </div>
                <h2 class="headd3 fw-bold text-dark pt-3">Infirmary & Ambulance Services</h2>
                <p class="para1 text-dark">
                    At The Assam Royal Global University, our prime focus is on good health of our students. Infirmaries
                    are manned by nurses available twenty-four hours a day under the guidance of a qualified doctor.
                    Besides attending to medical needs of students in the campus, the doctors also carry out periodic
                    medical checkup of the students. A well-equipped ambulance is also available 24*7 for the students
                    in case of emergency. The institution also has tie ups with an exclusive city based multispecialty
                    hospital.
                </p>
            </section>

            <hr>

            <section>
                <div class="row">
                    <div class="col-lg-12"><img class="rounded shadow-sm border" src="assets/img/medical/seva.jpeg"
                            alt=""></div>
                </div>

                <h2 class="headd3 fw-bold text-dark pt-3">Royal Swasthya Seva</h2>
                <p class="para1 text-dark">
                    Royal Swasthya Seva, a philanthropic initiative by Royal Knowledge Park was inaugurated on 12th
                    November 2020, by the Hon’ble Chief Minister of Assam, Sri Sarbananda Sonowal. It houses experienced
                    Senior Doctors, assisted by trained nurses catering to medical needs of the villagers around the
                    campus along with the students of RGU. The service is available on all weekdays, and it aims to
                    provide free consultation along with free medicines to the patients.
                </p>
                <p class="para1 text-dark">
                    Under the Royal Swasthya Seva it has an Allopathic clinic as well as an Ayurvedic and Homeopathic
                    clinic along with it to take care of the student community and the underprivileged population of the
                    nearby areas.
                </p>
                <p class="para1 text-dark">
                    Established as a component of the University’s Social Outreach initiative, Dr. A.K. Pansari, Hon’ble
                    Chancellor, The Assam Royal Global University, conceptualised it to cater to the medical needs of
                    underprivileged people, who may avail of the services prior to being referred to government
                    hospitals for secondary care, if required, thereby providing free consultation with basic medicines
                    and amenities. This initiative further has a well-equipped ambulance at its disposal for
                    emergencies.
                </p>
            </section>

            <hr>

            <section>
                <div class="row">
                    <div class="col-lg-12"><img class="rounded shadow-sm border" src="assets/img/medical/counsel.jpeg"
                            alt=""></div>
                </div>

                <h2 class="headd3 fw-bold text-dark pt-3">Counselling Cell</h2>
                <p class="para1 text-dark">
                    Health is not only physiological but also social, cultural, and mental! In the context of university
                    settings, students are caught up in multiple pressures from academic progression, career
                    uncertainty, peer, parental, and societal expectations, and so on. All of these have a profound
                    effect on their mental, physical, and emotional health. Over and above these, the COVID-19 pandemic
                    has brought in its wake many changes that eventually affect the students’ performance and overall
                    well-being. Against this background, an institutional mechanism is operationalized to address these
                    critical issues affecting the students through the formation of a counselling cell under the ‘Royal
                    Centre for Wellbeing’ (RCFW).
                </p>
                <p class="para1 text-dark">
                    The sessions are scheduled for students upon receiving a request from faculty mentors (through the
                    mentor-mentee system in the university) from respective departments. Students may also write
                    individually to counselling@rgu.ac for appointments. All the above are conducted once students
                    voluntarily seek support/help regarding mental health.
                </p>
                <p class="headd3 fw-bold text-dark">
                    Our professional counsellors are with you-
                </p>

                <p class="para1 text-dark">
                    For Appointment write to: counselling@rgu.ac
                    <br>
                    <span class="fw-bold">Venue: Counselling Cell, Block -A, 1st Floor, The Assam Royal Global
                        University</span>
                </p>
            </section>

            <hr>



        </div>

        <div class="col-lg-4 details-card p-3">

            <div class="p-4 shadow-sm border" style="background-color: #daeeff;">
                <p class="headd3 fw-bold text-danger text-center">Emergency Contact Details</p>
                <hr>
                <ol class="para1 text-dark">
                    <li><span class="fw-bold mt-2">Ambulance: </span> <a class="text-primary"
                            href="tel: +91 70990-18436"> +91 70990-18436</a></li>
                    <li><span class="fw-bold mt-2">Infirmary: </span> <a class="text-primary"
                            href="tel: +91 70990-38510">+91 70990-38510</a></li>
                    <li><span class="fw-bold mt-2">Transport In-charge: </span> <a class="text-primary"
                            href="tel: +91 88110-55509">+91 88110-55509</a></li>
                    <li><span class="fw-bold mt-2">Emergency Helpline No: </span> <a class="text-primary"
                            href="tel: +91 88110-03111">+91 88110-03111</a></li>
                </ol>
            </div>

            <div class="p-4 shadow-sm border mt-2" style="background-color: #daeeff;">
                <p class="headd3 fw-bold text-danger text-center">Emergency Care</p>
                <hr>
                <p class="text-danger para1 fw-bold">Ambulance Services</p>
                <ol class="para1 text-dark">
                    <li><span class="fw-bold mt-4">Ayursundra Super Specialty Hospital: <br> </span> <a
                            class="text-primary">+91 8811030033/ +91 8811030055</a></li>
                    <li><span class="fw-bold mt-4">Apollo Excelcare Hospital: <br> </span> <a class="text-primary"
                            href="tel: 03617140101">03617140101</a></li>
                    <li><span class="fw-bold mt-4">Narayana Superspeciality Hospital: <br> </span> <a
                            class="text-primary" href="tel: +91 8067506875">+91 8067506875</a></li>
                    <li><span class="fw-bold mt-4">Critical Care Hospital & Research Institute: <br> </span> <a
                            class="text-primary" href="tel: +91 7637013667">+91 7637013667</a></li>
                    <li><span class="fw-bold mt-4">Guwahati Metro Hospital: <br> </span> <a
                            class="text-primary">0361-296 2335/ 36/ 37</a></li>
                    <li><span class="fw-bold mt-4">Health City Hospital: <br> </span> <a class="text-primary">+91
                            8638995504/ 0361-7105000</a></li>
                    <li><span class="fw-bold mt-4">Government of Assam: <br> </span> <a class="text-primary"
                            href="tel: 108">108</a></li>
                </ol>
            </div>

            <div class="p-4 shadow-sm border mt-2" style="background-color: #daeeff;">
                <p class="headd3 fw-bold text-danger text-center">Royal Swasthya Sewa</p>
                <hr>
                <p class="text-success para1 fw-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg> Near the RGU main gate beside PNB ATM
                </p>

                <div>
                    <p class="text-dark headd3 fw-bold">Allopathic Clinic</p>
                    <p class="text-dark para1">Dr Lohit Baishya, MBBS</p>
                    <p class="text-primary para1">Days: Monday to Friday | Clinic Time: 9.00 am to 1.00 pm</p>
                </div>

                <hr>

                <div>
                    <p class="text-dark headd3 fw-bold">Ayurvedic Clinic</p>
                    <p class="text-dark para1">Dr Bhabesh Das, BAMS, MD (AYU)</p>
                    <p class="text-primary para1">Days: Wednesday & Thursday | Clinic Time: 3.00 pm to 4.00 pm</p>
                </div>

                <hr>

                <div>
                    <p class="text-dark headd3 fw-bold">Homeopathic Clinic</p>
                    <p class="text-dark para1">Dr Shraddha Basu, BHMS</p>
                    <p class="text-primary para1">Days: Monday, Tuesday & Friday | Clinic Time 3.00 pm to 5.00 pm</p>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="custom-container">
    <div class="custom-row">
        <div class="custom-column p-4">

            <h2 style="color: #0056b3 !important; line-height: 1.4;"
                class="headd2 fw-bold text-dark pb-1 pt-1 text-center">
                Nearby Hospitals
            </h2>

            <table class="table"
                style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6; border-collapse: collapse;">
                <thead class="table-light">
                    <tr>
                        <th class="fw-bold text-dark para1 text-center" style="border: 1px solid #dee2e6;">Hospital Name
                            & Address</th>
                        <th class="fw-bold text-dark para1 text-center" style="border: 1px solid #dee2e6;">Distance from
                            RGU</th>
                        <th class="fw-bold text-dark para1 text-center" style="border: 1px solid #dee2e6;">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #f8f9fa;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ayursundra Super Specialty
                            Hospital, Bhabanand Boro Path, Opposite DPS School, Ahom Gaon, GARCHUK, <br> Guwahati, Assam
                            781035</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">1.6 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 03617111080</td>
                    </tr>
                    <tr style="background-color: #e3f2fd;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Apollo Excel Care Hospital,
                            NH-37, near Ganesh Mandir, Paschim Boragaon, Guwahati, Assam 781033</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">5 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 0361 714 0101</td>
                    </tr>
                    <tr style="background-color: #f8f9fa;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Govt Ayurvedic College &
                            Hospital, AEC Rd, Sundarbari, Jalukbari, Guwahati, Assam 781014</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">9 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 0361 257 0455</td>
                    </tr>
                    <tr style="background-color: #e3f2fd;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Narayana Super Specialty
                            Hospital, Civil Hospital Complex, Tularam Bafna, Amingaon, Guwahati, Assam 781031</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">17 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 080675 06875</td>
                    </tr>
                    <tr style="background-color: #f8f9fa;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Gauhati Medical College and
                            Hospital, GMC Hospital Rd, Bhangagarh, Guwahati, Assam 781032</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">12 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 0361 252 9457</td>
                    </tr>
                    <tr style="background-color: #e3f2fd;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Critical Care Hospital & Research
                            Institute, Lokhra, Guwahati, Assam 781029</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">3.2 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 076370 13667</td>
                    </tr>
                    <tr style="background-color: #f8f9fa;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Guwahati Metro Hospital, Uday
                            Nagar, Khanapara, Opp. Bodoland Guest House, Guwahati, Assam 781022</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">10 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 0361 296 2335</td>
                    </tr>
                    <tr style="background-color: #e3f2fd;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Health City Hospital, Uday Nagar,
                            Khanapara, Opp. Bodoland Guest House, Guwahati, Assam 781022</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">10 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 0361 710 5000</td>
                    </tr>
                    <tr style="background-color: #f8f9fa;">
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Northeast Cancer Hospital, 11th
                            Mile, GS Rd, Amerigog, Jorabat, Assam 781023</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">16.5 kms</td>
                        <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 094357 07661</td>
                    </tr>
                </tbody>
            </table>
            <a href="assets/img/medical/doctor_compendium.pdf" target="_blank">
                <button class="btn btn-primary download-btn fw-bold headd3">
                    Doctor's Compendium &nbsp <i class="fa fa-download"></i>
                </button>
            </a>
        </div>
    </div>
</div>

<div class="custom-container pt-4">
    <div class="custom-row">
        <div class="custom-column p-2 text-center">

            <img class="m-4 p-2 border shadow-sm rounded" src="assets/img/medical/medantalogo.png" alt="">

            <p class="text-dark para1 text-center">The Assam Royal Global University has corporate tie- ups with
                MEDANTA- The Medicity, Gurgaon. Students can avail 10% discount for all Out Patient Department (OPD)
                consultation, investigations (only laboratory and radiology), In- Patient (IPD) room rent and
                investigations (only laboratory and radiology)
            </p>
            <p class="text-success para1 fw-bold text-center">10% discount for MEDANTA- Standard Executive Health
                check-up.
            </p>

        </div>
    </div>
</div>

</div>
    <!--End About-->
</div><!-- #page -->
@endsection

@extends('frontend.master')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <h2 style="padding-top: 90px; position: relative;" class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-3"
            style="color: #27467A; font-weight: 900;">
            Medical <span style="color: #FF9A1E; font-weight: 500;">Facility</span></h2>


        <section style="padding: 30px 10px;">
            <div class="row">

                <div class="col-lg-8" style="padding: 0px 30px;">

                    <section>

                        <div class="row">
                            <div class="col-lg-6"><img class="rounded shadow-sm border"
                                    src="mobile-assets/medical-facility/1b.jpeg" alt=""></div>
                            <div class="col-lg-6 pt-3"><img class="rounded shadow-sm border"
                                    src="mobile-assets/medical-facility/1a.jpeg" alt=""></div>
                        </div>
                        <h2 class="headd3 fw-bold text-dark pt-3">Infirmary & Ambulance Services</h2>
                        <p class="para1 text-dark" style="text-align: justify;">
                            At Royal Global University, our prime focus is the good health of our students. Infirmaries are
                            manned by nurses available twenty-four hours a day under the guidance of a qualified doctor.
                            Besides attending to medical needs of students in the campus, the doctors also carry out
                            periodic medical checkup of the students. A well-equipped ambulance is also available 24*7 for
                            students in case of emergencies. The institution also has tie ups with an exclusive city based
                            multispecialty hospital.
                        </p>
                    </section>

                    <hr>

                    <section>
                        <div class="row">
                            <div class="col-lg-12"><img class="rounded shadow-sm border"
                                    src="mobile-assets/medical-facility/seva.jpeg" alt=""></div>
                        </div>

                        <h2 class="headd3 fw-bold text-dark pt-3">Royal Swasthya Seva</h2>
                        <p class="para1 text-dark" style="text-align: justify;">
                            Royal Swasthya Seva, a philanthropic initiative by Royal Knowledge Park was inaugurated on 12th
                            November 2020, by the Hon’ble Chief Minister of Assam, Sri Sarbananda Sonowal. It offers
                            healthcare services free of cost by qualified and experienced doctors to all in and around Royal
                            Knowledge Park, from its medical centre situated adjacent to the main entrance of the university
                            through its Allopathic, Homeopathic and Ayurvedic Clinics. It houses experienced Senior Doctors,
                            assisted by trained nurses catering to medical needs on all weekdays, and aims to provide free
                            consultation along with free medicines to its patients.
                        </p>
                        <p class="para1 text-dark" style="text-align: justify;">
                            Established as a component of the University’s Social Outreach initiative, Dr. A.K. Pansari,
                            Hon’ble Chancellor, The Assam Royal Global University, conceptualised it to cater to the medical
                            needs of underprivileged people, who may avail its services prior to being referred to
                            government hospitals for secondary care, if required, thereby providing free consultation with
                            basic medicines and amenities. This initiative further has a well-equipped ambulance at its
                            disposal for emergencies.
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
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
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
                            <p class="text-primary para1">Days: Monday, Tuesday & Friday | Clinic Time 3.00 pm to 5.00 pm
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div style="max-width: 100%; padding: 15px; box-sizing: border-box;">
            <div style="display: flex; justify-content: center;">
                <div style="width: 100%; max-width: 1200px; padding: 15px; box-sizing: border-box;">
                    <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text"
                        style="color: #27467A; font-weight: 900;">
                        Nearby <span style="color: #FF9A1E; font-weight: 500;">Hospitals</span></h2>

                    <div style="overflow-x: auto;">
                        <table
                            style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6; border-collapse: collapse; min-width: 600px;">
                            <thead style="background-color: #f8f9fa;">
                                <tr class="text-dark">
                                    <th
                                        style="border: 1px solid #dee2e6; text-align: center; font-weight: bold; padding: 10px; white-space: nowrap;">
                                        Hospital Name & Address</th>
                                    <th
                                        style="border: 1px solid #dee2e6; text-align: center; font-weight: bold; padding: 10px; white-space: nowrap;">
                                        Distance from RGU</th>
                                    <th
                                        style="border: 1px solid #dee2e6; text-align: center; font-weight: bold; padding: 10px; white-space: nowrap;">
                                        Contact</th>
                                </tr>
                            </thead>
                            <tbody class="text-dark mobile-para1">
                                <tr style="background-color: #f8f9fa;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Ayursundra Super Specialty
                                        Hospital, Bhabanand Boro Path, Opposite DPS School, Ahom Gaon, GARCHUK, Guwahati,
                                        Assam 781035</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">1.6 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph:
                                        03617111080</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Apollo Excel Care Hospital, NH-37,
                                        near Ganesh Mandir, Paschim Boragaon, Guwahati, Assam 781033</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">5 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 0361 714
                                        0101</td>
                                </tr>
                                <tr style="background-color: #f8f9fa;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Govt Ayurvedic College & Hospital,
                                        AEC Rd, Sundarbari, Jalukbari, Guwahati, Assam 781014</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">9 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 0361 257
                                        0455</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Narayana Super Specialty Hospital,
                                        Civil Hospital Complex, Tularam Bafna, Amingaon, Guwahati, Assam 781031</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">17 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 080675
                                        06875</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Gauhati Medical College and
                                        Hospital, GMC Hospital Rd, Bhangagarh, Guwahati, Assam 781032</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">12 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 0361 252
                                        9457</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Critical Care Hospital & Research
                                        Institute, Lokhra, Guwahati, Assam 781029 </td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">3.2 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 076370
                                        13667</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Guwahati Metro Hospital, Uday
                                        Nagar, Khanapara, Opp. Bodoland Guest House, Guwahati, Assam 781022 </td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">10 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 0361 296
                                        2335</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Health City Hospital, Uday Nagar,
                                        Khanapara, Opp. Bodoland Guest House, Guwahati, Assam 781022 </td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">10 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 0361 710
                                        5000</td>
                                </tr>
                                <tr style="background-color: #e3f2fd;">
                                    <td style="border: 1px solid #dee2e6; padding: 10px;">Northeast Cancer Hospital, 11th
                                        Mile, GS Rd, Amerigog, Jorabat, Assam 781023 </td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">12 kms</td>
                                    <td style="border: 1px solid #dee2e6; padding: 10px; text-align: center;">Ph: 094357
                                        07661</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div style="text-align: center; margin-top: 20px;">
                        <a href="mobile-assets/medical-facility/doctor_compendium.pdf" target="_blank">
                            <button
                                style="background-color: #007bff; color: white; font-weight: bold; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                                Doctor's Compendium &nbsp; <i class="fa fa-download"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="container pt-4">
                <div class="row">
                    <div class="custom-column p-2 text-center">

                        <img class="m-4 p-2 border shadow-sm rounded" src="mobile-assets/medical-facility/medantalogo.png"
                            alt="">

                        <p class="text-dark para1 text-center">The Assam Royal Global University has corporate tie- ups with
                            MEDANTA- The Medicity, Gurgaon. Students can avail 10% discount for all Out Patient Department
                            (OPD) consultation, investigations (only laboratory and radiology), In- Patient (IPD) room rent
                            and investigations (only laboratory and radiology)
                        </p>
                        <p class="text-success para1 fw-bold text-center">10% discount for MEDANTA- Standard Executive
                            Health check-up.
                        </p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->

        <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-3" style="color: #27467A; font-weight: 900;">
            Medical <span style="color: #FF9A1E; font-weight: 500;">Facility</span></h2>


        <section style="padding: 30px 40px;">
            <div class="row">

                <div class="col-lg-8" style="padding: 0px 30px;">

                    <section>

                        <div class="row">
                            <div class="col-lg-6"><img class="rounded shadow-sm border"
                                    src="mobile-assets/medical-facility/1b.jpeg" alt=""></div>
                            <div class="col-lg-6"><img class="rounded shadow-sm border"
                                    src="mobile-assets/medical-facility/1a.jpeg" alt=""></div>
                        </div>
                        <h2 class="headd3 fw-bold text-dark pt-3">Infirmary & Ambulance Services</h2>
                        <p class="para1 text-dark" style="text-align: justify;">
                            At Royal Global University, our prime focus is the good health of our students. Infirmaries are
                            manned by nurses available twenty-four hours a day under the guidance of a qualified doctor.
                            Besides attending to medical needs of students in the campus, the doctors also carry out
                            periodic medical checkup of the students. A well-equipped ambulance is also available 24*7 for
                            students in case of emergencies. The institution also has tie ups with an exclusive city based
                            multispecialty hospital.
                        </p>
                    </section>

                    <hr>

                    <section>
                        <div class="row">
                            <div class="col-lg-12"><img class="rounded shadow-sm border"
                                    src="mobile-assets/medical-facility/seva.jpeg" alt=""></div>
                        </div>

                        <h2 class="headd3 fw-bold text-dark pt-3">Royal Swasthya Seva</h2>
                        <p class="para1 text-dark" style="text-align: justify;">
                            Royal Swasthya Seva, a philanthropic initiative by Royal Knowledge Park was inaugurated on 12th
                            November 2020, by the Hon’ble Chief Minister of Assam, Sri Sarbananda Sonowal. It offers
                            healthcare services free of cost by qualified and experienced doctors to all in and around Royal
                            Knowledge Park, from its medical centre situated adjacent to the main entrance of the university
                            through its Allopathic, Homeopathic and Ayurvedic Clinics. It houses experienced Senior Doctors,
                            assisted by trained nurses catering to medical needs on all weekdays, and aims to provide free
                            consultation along with free medicines to its patients.
                        </p>

                        <p class="para1 text-dark" style="text-align: justify;">
                            Established as a component of the University’s Social Outreach initiative, Dr. A.K. Pansari,
                            Hon’ble Chancellor, The Assam Royal Global University, conceptualised it to cater to the medical
                            needs of underprivileged people, who may avail its services prior to being referred to
                            government hospitals for secondary care, if required, thereby providing free consultation with
                            basic medicines and amenities. This initiative further has a well-equipped ambulance at its
                            disposal for emergencies.
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
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
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
                            <p class="text-primary para1">Days: Monday, Tuesday & Friday | Clinic Time 3.00 pm to 5.00 pm
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <div class="custom-container">
            <div class="custom-row">
                <div class="custom-column p-4">

                    <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text"
                        style="color: #27467A; font-weight: 900;">
                        Nearby <span style="color: #FF9A1E; font-weight: 500;">Hospitals</span></h2>

                    <table class="table"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6; border-collapse: collapse;">
                        <thead class="table-light">
                            <tr>
                                <th class="fw-bold text-dark para1 text-center" style="border: 1px solid #dee2e6;">Hospital
                                    Name & Address</th>
                                <th class="fw-bold text-dark para1 text-center" style="border: 1px solid #dee2e6;">Distance
                                    from RGU</th>
                                <th class="fw-bold text-dark para1 text-center" style="border: 1px solid #dee2e6;">Contact
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #f8f9fa;">
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ayursundra Super Specialty
                                    Hospital, Bhabanand Boro Path, Opposite DPS School, Ahom Gaon, GARCHUK, <br> Guwahati,
                                    Assam 781035</td>
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
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Critical Care Hospital &
                                    Research Institute, Lokhra, Guwahati, Assam 781029</td>
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
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Health City Hospital, Uday
                                    Nagar, Khanapara, Opp. Bodoland Guest House, Guwahati, Assam 781022</td>
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">10 kms</td>
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 0361 710 5000</td>
                            </tr>
                            <tr style="background-color: #f8f9fa;">
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Northeast Cancer Hospital,
                                    11th Mile, GS Rd, Amerigog, Jorabat, Assam 781023</td>
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">16.5 kms</td>
                                <td class="para1 text-dark" style="border: 1px solid #dee2e6;">Ph: 094357 07661</td>
                            </tr>
                        </tbody>
                    </table>


                    <a href="mobile-assets/medical-facility/doctor_compendium.pdf" target="_blank">
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

                    <img class="m-4 p-2 border shadow-sm rounded" src="mobile-assets/medical-facility/medantalogo.png"
                        alt="">

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
@endsection

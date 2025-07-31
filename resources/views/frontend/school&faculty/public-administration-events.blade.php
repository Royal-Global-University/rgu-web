@extends('frontend.master')
@section('content')
    <div style="background-image: url(mobile-assets/department-all/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            <!--Start Header-->
            @include('frontend/components/aheader')
            <!--End Header-->
        </div>
        <div class="container pb-5 pt-3">

            <!-- events  -->
            <div>
                <div>

                    <h2 class="headd1 fw-bold text-center pt-4 pb-3" style="color: #27467A; font-weight: 900;">
                        Events</h2>

                    <div class="table-responsive">
                        <table class="overflow-hidden table text-wrap table-bordered border-top mb-5">
                            <thead class="text-white" style="background-color: #27467a">
                                <tr>
                                    <th class="font-weight-bold text-white">S.No.</th>
                                    <th class="font-weight-bold text-white">Name</th>
                                    <th class="font-weight-bold text-white">Designation</th>
                                    <th class="font-weight-bold text-white">Purpose of Visit</th>
                                    <th class="font-weight-bold text-white">Date</th>
                                </tr>
                            </thead>

                            <tbody class="para1 align-middle" style="background-color: #f9f9f9; text-align: start;">
                                <tr>
                                    <td>1</td>
                                    <td>Dr. D.P. Sharma</td>
                                    <td>
                                        Professor, Department of Political Science, Gauhati University
                                    </td>
                                    <td>
                                        "Guest Speaker ‘Election Commission and Model Code of Conduct’"
                                    </td>
                                    <td>28th March, 2024</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Vikas Tripathi</td>
                                    <td>
                                        Assistant Professor, Department of Political Science, Gauhati
                                        University
                                    </td>
                                    <td>
                                        "Guest Speaker ‘Election Commission and Model Code of Conduct’"
                                    </td>
                                    <td>28th March, 2024</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Mohinder Singh</td>
                                    <td>
                                        Visiting Professor, Department of Political Science and Public
                                        Administration, RIMT University Punjab
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May-3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dr. Jayanta Krishna Sharmah</td>
                                    <td>
                                        Dean, Professor and Head, Department of Political Science,
                                        Gauhati University
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May- 3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Dr. Janak Singh Meena</td>
                                    <td>
                                        Professor and Head, Department of Gandhian Thought and Peace
                                        Studies, Central University of Gujarat
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May- 3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dr. D.P. Sharma</td>
                                    <td>
                                        Professor, Department of Political Science, Gauhati University
                                    </td>
                                    <td>
                                        "Resource Person‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May-3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dr. Vikas Tripathi</td>
                                    <td>
                                        Assistant Professor, Department of Political Science, Gauhati
                                        University
                                    </td>
                                    <td>
                                        "Resource Person ‘Online FDP on Emerging Areas of Research in
                                        Public Administration’"
                                    </td>
                                    <td>29th May-3rd June 2024</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Shri Dipak Kumar Sharma</td>
                                    <td>
                                        Chairman, Indian Institute of Public Administration, Assam
                                    </td>
                                    <td>
                                        "Guest Speaker ‘Interactive Session on Civic Responsibility For
                                        Good Governance’"
                                    </td>
                                    <td>30th Sep 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- events  -->

        </div>
    </div>
@endsection

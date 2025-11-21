@extends('frontend.master')
@section('title', 'RGU Vice Chancellor: Prof. Y.S.R. Murthy & University Officers List')
@section('meta_description', 'Meet RGU Vice Chancellor, Prof. (Dr.) Y.S.R. Murthy. View the profiles of the Registrar
    (Dr. Dilip Narayan Singh), Chairman, and all key university officers. Check Leadership!')
@section('meta_keywords', 'Officers')
@section('content')
    <div class="mobile">
        @include('frontend/components/mobileheader')
        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/bg.svg); background-size: cover; padding-top: 90px; position: relative;">
            <h2 class="mobile-headd1 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-2"
                style="color: #27467A; font-weight: 900;">
                Officers</h2>

            <div style="padding: 10px 20px;">

                <div class="row">

                    <div class="col-lg-3 mb-4">
                        <a href="eadership-vicechancellor">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/a.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Prof.
                                        (Dr.) Y.S.R. Murthy
                                        <br>
                                        <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">Vice
                                            Chancellor,</p>
                                        <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                            University</p>
                                        <p class="mobile-para1 half-underline fw-bold"
                                            style="color: #FF9A1E; font-size: 18px;">A Message from the Vice Chancellor</p>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <a href="leadership-chairperson-academics">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/b.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Prof.
                                        (Dr.) A.K. Buragohain
                                        <br>
                                        <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">
                                            Chairperson Academic,</p>
                                        <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                            University</p>
                                        <p class="mobile-para1 half-underline fw-bold"
                                            style="color: #FF9A1E; font-size: 18px;">A Message from the Chairperson Academic
                                        </p>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <a href="officers-register-admin">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/c.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Dr.
                                        Diganta Munshi
                                        <br>
                                        <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">
                                            Registrar - Administration,</p>
                                        <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                            University</p>
                                        <p class="mobile-para1 half-underline fw-bold"
                                            style="color: #FF9A1E; font-size: 18px;">A Message from the Registrar -
                                            Administration</p>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 mb-4">
                        <a href="leadership-registrar">
                            <div class="card rounded d-flex flex-column"
                                style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                                <div class="p-3">
                                    <img style="height: 310px; width: 100%;"
                                        src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/d.png"
                                        class="img-fluid rounded" />
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Dr. Dip
                                        Narayain Singh
                                        <br>
                                        <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">
                                            Registrar,</p>
                                        <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                            University</p>
                                        <p class="mobile-para1 half-underline fw-bold"
                                            style="color: #FF9A1E; font-size: 18px;">A Message from the Registrar</p>
                                    </h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-3"
                    style="color: #27467A; font-weight: 900;">
                    Registrar <span style="color: #FF9A1E; font-weight: 500;">Office</span></h2>

                <div class="row">

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 480px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/e.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Mr. Shamim A.
                                    Goney
                                    <br>
                                    <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">Deputy
                                        Registrar,</p>
                                    <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                        University</p>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 530px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/f.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Ms. Dipika
                                    Tulshyan Agarwal
                                    <br>
                                    <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">Deputy
                                        Registrar, HR and Regulatory
                                        Compliance,</p>
                                    <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                        University</p>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>

                <h2 class="mobile-headd2 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-3"
                    style="color: #27467A; font-weight: 900;">
                    Royal Centre of <span style="color: #FF9A1E; font-weight: 500;">Corporate Relations</span></h2>

                <div class="row">


                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/g.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Mr. Akash
                                    Saxena
                                    <br>
                                    <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">Deputy
                                        Director, Placements Division,</p>
                                    <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                        University</p>
                                </h5>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/h.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Prof. Ashok
                                    Kumar
                                    <br>
                                    <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">Deputy
                                        Director, Alumni Division,</p>
                                    <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                        University</p>
                                </h5>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-3 mb-4">

                        <div class="card rounded d-flex flex-column"
                            style="background-color: #fff; border: none; box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.25); height: 500px;">
                            <div class="p-3">
                                <img style="height: 310px; width: 100%;"
                                    src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/off/i.png"
                                    class="img-fluid rounded" />
                            </div>
                            <div class="card-body d-flex flex-column">
                                <h5 style="font-weight: 800; color: #27467A;" class="card-title mobile-headd3">Ms. Pahi
                                    Bhagawati
                                    <br>
                                    <p class="mobile-para1 fw-bold pt-1" style="color: #FF9A1E; font-size: 20px;">
                                        Assistant Director, Placements Division,</p>
                                    <p class="mobile-para1 fw-bold" style="color: #27467A;">The Assam Royal Global
                                        University</p>
                                </h5>
                            </div>
                        </div>

                    </div>

                </div>

        </section>
    </div>

    <div class="website">
        <!--Start Header-->
        @include('frontend/components/aheader')
        <!--End Header-->


        <section
            style="background-image: url(https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/bg.svg); background-size: cover;">

            <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-5"
                style="color: #27467A; font-weight: 900;">
                Officers </h2>



            <div style="padding: 40px 80px;">

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-vicechancellor"><img
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/1.png"
                                alt=""></a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-chairperson-academics"> <img
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/2.png"
                                alt=""> </a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="officers-register-admin"><img
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/3.png"
                                alt=""></a>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <a href="leadership-registrar"><img
                                src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/4.png"
                                alt=""></a>
                    </div>




                </div>

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Registrar <span style="color: #FF9A1E; font-weight: 500;">Office</span></h2>

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/5.png"
                            alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/6.png"
                            alt="">
                    </div>

                </div>

                <h2 class="headd1 fw-bold text-center kd-title-ani kd-split-text pt-3 pb-4"
                    style="color: #27467A; font-weight: 900;">
                    Royal Centre of <span style="color: #FF9A1E; font-weight: 500;">Corporate Relations</span></h2>

                <div class="row">

                    <div class="col-lg-6 mb-4">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/7.png"
                            alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/8.png"
                            alt="">
                    </div>

                    <div class="col-lg-6 mb-4">
                        <img src="https://bucket-0534zd.s3.ap-south-1.amazonaws.com/mobile-assets/officers/9.png"
                            alt="">
                    </div>


                </div>


            </div>

        </section>

    </div>

@endsection

@push('scripts')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "name": "The Assam Royal Global University (RGU) Officers",
  "url": "https://www.rgu.ac/officers",
  "description": "Official list of the Vice Chancellor, Chairperson Academic, Registrars, and other key administrative officers leading Royal Global University.",
  "sameAs": "https://www.rgu.ac/",

  // --- Define the Vice Chancellor (Highest Executive Officer) ---
  "alumni": {
    "@type": "Person",
    "name": "Prof. (Dr.) Y.S.R. Murthy",
    "jobTitle": "Vice Chancellor",
    "url": "https://www.rgu.ac/leadership-vicechancellor"
  },

  // --- List all key administrative members/officers ---
  "member": [
    {
      "@type": "Person",
      "name": "Prof. (Dr.) A.K. Buragohain",
      "jobTitle": "Chairperson Academic",
      "url": "https://www.rgu.ac/leadership-chairperson-academics"
    },
    {
      "@type": "Person",
      "name": "Dr. Diganta Munshi",
      "jobTitle": "Registrar - Administration",
      "url": "https://www.rgu.ac/officers-register-admin"
    },
    {
      "@type": "Person",
      "name": "Prof. Dilip Narayan Singh",
      "jobTitle": "Registrar - Academics",
      "url": "https://www.rgu.ac/leadership-registrar"
    },
    {
      "@type": "Person",
      "name": "Mr. Shamim A. Goney",
      "jobTitle": "Registrar Office",
      "url": "https://www.rgu.ac/officers-registrar-office" // Assuming this is the profile link for Registrar Office
    },
    {
      "@type": "Person",
      "name": "Ms. Diplsa Tulshyan Agarwal",
      "jobTitle": "Registrar Office",
      "description": "Deputy Manager HR and Regulatory"
    },
    {
      "@type": "Person",
      "name": "Mr. Akash Saxena",
      "jobTitle": "Royal Centre of Corporate Relations"
    },
    {
      "@type": "Person",
      "name": "Prof. Ashok Kumar",
      "jobTitle": "Royal Centre of Corporate Relations"
    },
    {
      "@type": "Person",
      "name": "Ms. Pahi Bhagawati",
      "jobTitle": "Royal Centre of Corporate Relations"
    }
  ]
}
</script>
@endpush

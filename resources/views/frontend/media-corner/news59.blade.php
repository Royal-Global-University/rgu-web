@extends('frontend.master')
@section('title', 'RGU Guwahati: 5th Convocation Ceremony Oct 31, 2025')
@section('meta_description', 'Royal Global University (RGU) 5th Convocation: Oct 31, 2025. Degrees awarded to 1,967
    students. Chief Guest: Sri Lakshman Prasad Acharya, Hon’ble Governor of Assam. View Ceremony Details!')
@section('meta_keywords', 'Scholarship')
@section('content')
    <section style="background-image: url(mobile-assets/all-faculty/bg.svg); background-size: cover;">

        <div class="mobile">
            @include('frontend/components/mobileheader')

        </div>

        <div class="website">
            @include('frontend/components/aheader')

        </div>

        <div class="container" style="padding: 20px; text-align: justify;">

            <h2 class="headd2 fw-bold text-center" style="color: #27467A; font-size: 30px;">
                Royal Global University to Host 5th Convocation Ceremony on October 31
            </h2>

            <div class="container pt-3 pb-4 text-center"
                style="display: flex; justify-content: center; align-items: center; gap:10px">
                <div class="col-lg-5">
                    <img class=" rounded" src="/mobile-assets/media-corner/news56/12.jpeg"
                        style=" border: 3px solid black; height: 420px; width: 100%;" alt="">
                </div>
            </div>

            <p class="para1 text-dark pt-2">
                <span class="fw-bold"> GUWAHATI, October 28, 2025: </span>The Assam Royal Global University (RGU) is set to
                celebrate a major milestone in its journey of academic excellence as it hosts its 5th Convocation Ceremony
                on 31st October 2025. The prestigious event will be presided over by Sri Lakshman Prasad Acharya, Hon’ble
                Governor of Assam and the Visitor of RGU, in the presence of Dr. A. K. Pansari, Chancellor, Sri AK Modi, Pro
                Chancellor; Prof. A. K. Buragohain, Vice Chancellor; Dr. Sudhanshu Trivedi, Member of Rajya Sabha; Shri
                Kamakhya Prasad Tasa, Member of Lok Sabha; Dr. Ranoj Pegu, Education Minister of Assam; Sri Bimal Bora,
                Minister of Industries and Commerce; along with a distinguished gathering of eminent dignitaries.
                <br><br>
                This announcement was made today during a Press Conference held on the RGU campus and addressed by Prof. A.
                K. Buragohain, Vice Chancellor; Prof. Amarjyoti Choudhury, Emeritus Professor at Dr. Bhupen Hazarika Centre
                for Creativity; Dr. Shiela Bora, Professor at Department of History and Advisor, IKS Cell; Dr. Diganta
                Munshi, Registrar (Administration); and Dr. D. N. Singh, Registrar (Academics).
                <br><br>
                Addressing the media, Prof. (Dr.) Diganta Munshi informed that the Convocation Address will be delivered by
                Dr.
                Sudhanshu Trivedi. “A total of 1,967 students will be awarded their degrees this year, including 1,093
                undergraduates, 777 postgraduates and integrated course graduates, and 32 Ph.D. scholars. Academic
                excellence will be celebrated with 56 Gold Medalists and 58 Silver Medalists receiving recognition for their
                achievements”, he stated. In addition, special honors will be conferred, including 2 Chancellor’s Gold
                Medals and 5 awards for excellence in literary activities, cultural activities, community service,
                mentoring, and sports, he added.
                <br><br>
                Prof. Shiela Bora highlighted RGU’s initiatives in the fields of culture and humanities, while Prof.
                Amarjyoti Choudhury spoke about the diverse activities undertaken by the newly instituted Dr. Bhupen
                Hazarika Centre for Creativity at RGU.
                <br><br>
                Prof. A. K. Buragohain stated that a major highlight of this year’s convocation will be the conferment of
                honorary degrees (honoris causa) upon four distinguished personalities: Doctor of Science (D.Sc.) to Dr.
                Naresh Trehan, Padma Bhushan awardee & Chairman and Managing Director, Medanta; Doctor of Letters (D.Litt.)
                to Sri Sanjiv Goenka, Chairman, RP-Sanjiv Goenka Group; Doctor of Literature (D.Litt.) to Padma Shri and
                Sahitya Akademi Awardee Sri Yeshe Dorjee Thongchi; Doctor of Law (LL.D.) to Sri Mahesh Agarwal, Eminent
                Advocate and Managing Partner, Agarwal Law Associates
                <br><br>
                He said that this year’s Convocation will celebrate Arunachal Pradesh as the theme, honouring the state’s
                rich cultural heritage and its remarkable contributions to the Northeast region. RGU follows the unique
                tradition of highlighting one Northeastern state every year during the convocation to showcase its diversity
                and significance.
                <br><br>
                As a pioneer private university in the region, RGU continues to set new benchmarks in higher education,
                research, and holistic development. The university now has over 8500 students, including international
                students from 13 countries. It has over 500 faculty members and more than 130 academic programs under 24
                Schools of Studies. The eco-friendly campus, world-class infrastructure, and advanced learning facilities
                offer an enriching academic environment that blends rigorous scholarship with hands-on industry exposure.
                <br><br>
            </p>
        </div>

    </section>
@endsection

@push('scripts')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "5th Convocation Ceremony of Royal Global University",
  "startDate": "2025-10-31",
  "endDate": "2025-10-31",
  "eventStatus": "https://schema.org/EventScheduled",
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "description": "The Assam Royal Global University (RGU) hosts its 5th Convocation Ceremony, presided over by Sri Lakshman Prasad Acharya, Hon’ble Governor of Assam. Degrees will be awarded to 1,967 students, including Ph.D. scholars, with special honors conferred upon four distinguished personalities.",
  "location": {
    "@type": "Place",
    "name": "RGU Campus, Guwahati",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Guwahati",
      "addressRegion": "Assam",
      "addressCountry": "IN"
    }
  },
  "performer": [
    {
      "@type": "Person",
      "name": "Sri Lakshman Prasad Acharya",
      "description": "Hon’ble Governor of Assam and the Visitor of RGU (Presiding)"
    },
    {
      "@type": "Person",
      "name": "Dr. Sudhanshu Trivedi",
      "description": "Member of Rajya Sabha (Convocation Address)"
    }
  ],
  "organizer": {
    "@type": "EducationalOrganization",
    "name": "The Assam Royal Global University (RGU)",
    "url": "https://www.rgu.ac/"
  },
  "offers": {
    "@type": "Offer",
    "name": "Conferment of Honorary Degrees (Honoris Causa)",
    "description": "Honorary degrees conferred upon Dr. Naresh Trehan (D.Sc.), Sri Sanjiv Goenka (D.Litt.), Sri Yeshe Dorjee Thongchi (D.Litt.), and Sri Mahesh Agarwal (LL.D.)."
  }
}
</script>
@endpush

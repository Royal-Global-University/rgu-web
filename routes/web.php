<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/physics-test', function () {
    return view('frontend/school&faculty/department-physics-test');
});

// Add a test page for the voice assistant
Route::get('/voice-assistant', function () {
    return view('frontend/voice-assist/voice-assistant');
});

Route::get('/index-media', function () {
    return view('frontend/index-media');
});

Route::get('/contact', function () {
    return view('frontend/contact/contact-us');
})->name('contact');

Route::get('/notifications', function () {
    return view('frontend/discoverRGU/notifications');
})->name('notifications');


//Discover RGU
Route::get('/preface', function () {
    return view('frontend/discoverRGU/preface');
})->name('preface');

Route::get('/deans', function () {
    return view('frontend/discoverRGU/deans');
})->name('deans');

Route::get('/officers-register-admin', function () {
    return view('frontend/discoverRGU/officers-register-admin');
})->name('officers-register-admin');

Route::get('/vision-mission', function () {
    return view('frontend/discoverRGU/vision-mission');
})->name('vision-mission');

Route::get('/recognition-accreditation', function () {
    return view('frontend/discoverRGU/recognition-accreditation');
})->name('recognition-accreditation');

Route::get('/leadership-chancellor', function () {
    return view('frontend/discoverRGU/leadership-chancellor');
})->name('leadership-chancellor');

Route::get('/strategic-location', function () {
    return view('frontend/discoverRGU/strategic-location');
})->name('strategic-location');

Route::get('/award', function () {
    return view('frontend/discoverRGU/award');
})->name('award');

Route::get('/leadership', function () {
    return view('frontend/discoverRGU/leadership');
})->name('leadership');

//advisory-leadership

Route::get('/advisory-leadership', function () {
    return view('frontend/discoverRGU/advisory-leadership');
})->name('advisory-leadership');

Route::get('/advisor-prof-prabuddha-ganguli', function () {
    return view('frontend/discoverRGU/advisory-prof-prabuddha-ganguli');
})->name('advisory-prof-prabuddha-ganguli');

Route::get('/advisor-sri-ranjit-barthakur', function () {
    return view('frontend/discoverRGU/advisory-sri-ranjit-barthakur');
})->name('advisory-sri-ranjit-barthakur');

Route::get('/advisor-sri-ravi-kant', function () {
    return view('frontend/discoverRGU/advisory-sri-ravi-kant');
})->name('advisory-sri-ravi-kant');

//new
Route::get('/advisor-dr-amarjyoti-choudhury', function () {
    return view('frontend/discoverRGU/advisor-dr-amarjyoti-choudhury');
})->name('advisor-dr-amarjyoti-choudhury');

Route::get('/advisor-prasanta-jyoti-baruah', function () {
    return view('frontend/discoverRGU/advisor-prasanta-jyoti-baruah');
})->name('advisor-prasanta-jyoti-baruah');

Route::get('/leadership-anil-kumar', function () {
    return view('frontend/discoverRGU/leadership-anil-kumar');
})->name('leadership-anil-kumar');

Route::get('/scholarship&funding', function () {
    return view('frontend/discoverRGU/scholarship&funding');
})->name('scholarship&funding');

Route::get('/alumni', function () {
    return view('frontend/discoverRGU/alumni');
})->name('alumni');

Route::get('/jobs-vacancies', function () {
    return view('frontend/discoverRGU/jobs-vacancies');
})->name('jobs-vacancies');

Route::get('/social-outreach', function () {
    return view('frontend/discoverRGU/social-outreach');
})->name('social-outreach');

Route::get('/knowledge', function () {
    return view('frontend/discoverRGU/knowledge');
})->name('knowledge');

Route::get('/officers', function () {
    return view('frontend/discoverRGU/officers');
})->name('officers');

Route::get('/leadership-chairperson-academics', function () {
    return view('frontend/discoverRGU/leadership_alak-kumar-buragohain');
})->name('leadership-chairperson-academics');

Route::get('/leadership-vicechancellor', function () {
    return view('frontend/discoverRGU/leadership-ysrmurthy');
})->name('leadership-vicechancellor');

Route::get('/leadership-dean-academic', function () {
    return view('frontend/discoverRGU/leadership-ankur-ganguly');
})->name('leadership-dean-academic');

Route::get('/leadership-registrar', function () {
    return view('frontend/discoverRGU/leadership_drdnsingh');
})->name('leadership-registrar');

Route::get('/rgu-anthem', function () {
    return view('frontend/discoverRGU/anthem');
})->name('rgu-anthem');

Route::get('/rgu-logo', function () {
    return view('frontend/discoverRGU/rgu-logo');
})->name('rgu-logo');

Route::get('/royal-knowledge', function () {
    return view('frontend/discoverRGU/royal-knowledge');
})->name('royal-knowledge');

Route::get('/footprints', function () {
    return view('frontend/discoverRGU/footprints');
})->name('footprints');

Route::get('/privacy&security', function () {
    return view('frontend/discoverRGU/privacy&security');
})->name('privacy&security');

Route::get('/association-tieup', function () {
    return view('frontend/discoverRGU/association-tieup');
})->name('association-tieup');

Route::get('/top-recruiters', function () {
    return view('frontend/discoverRGU/top-recruiters');
})->name('top-recruiters');

Route::get('/success', function () {
    return view('frontend/discoverRGU/success');
})->name('success');

Route::get('/diversechoices', function () {
    return view('frontend/discoverRGU/diversechoices');
})->name('diversechoices');

Route::get('/diversity-inclusion', function () {
    return view('frontend/discoverRGU/diversity-inclusion');
})->name('diversity-inclusion');

Route::get('/diversity-inclusion', function () {
    return view('frontend/discoverRGU/diversity-inclusion');
})->name('diversity-inclusion');

Route::get('/governing-body', function () {
    return view('frontend/discoverRGU/governing-body');
})->name('governing-body');

Route::get('/board-of-management', function () {
    return view('frontend/discoverRGU/board-of-management');
})->name('board-of-management');

Route::get('/academic-council', function () {
    return view('frontend/discoverRGU/academic-council');
})->name('academic-council');

Route::get('/finance-committee', function () {
    return view('frontend/discoverRGU/finance-committee');
})->name('finance-committee');

Route::get('/internal-complaints-committee', function () {
    return view('frontend/discoverRGU/internal-complaints-committee');
})->name('internal-complaints-committee');

Route::get('/anti-ragging', function () {
    return view('frontend/discoverRGU/anti-ragging');
})->name('anti-ragging');

Route::get('/equal-opportunities-cell', function () {
    return view('frontend/discoverRGU/equal-opportunities-cell');
})->name('equal-opportunities-cell');

Route::get('/proctorial', function () {
    return view('frontend/discoverRGU/proctorial');
})->name('proctorial');

Route::get('/statutes-ordinance-policies', function () {
    return view('frontend/discoverRGU/statutes-ordinance-policies');
})->name('statutes-ordinance-policies');

Route::get('/facilities', function () {
    return view('frontend/discoverRGU/facilities');
})->name('facilities');

Route::get('/organogram-planning', function () {
    return view('frontend/discoverRGU/organogram-planning');
})->name('organogram-planning');

Route::get('/360-tour', function () {
    return view('frontend/discoverRGU/360-tour');
})->name('360-tour');


//All Facilities

Route::get('/facilities-foodcourt', function () {
    return view('frontend/facilities/facilities-foodcourt');
})->name('facilities-foodcourt');

Route::get('/facilities-auditorium', function () {
    return view('frontend/facilities/facilities-auditorium');
})->name('facilities-auditorium');

Route::get('/facilities-bank', function () {
    return view('frontend/facilities/facilities-bank');
})->name('facilities-bank');

Route::get('/facilities-classroom', function () {
    return view('frontend/facilities/facilities-classroom');
})->name('facilities-classroom');

Route::get('/facilities-fashion-studio', function () {
    return view('frontend/facilities/facilities-fashion-studio');
})->name('facilities-fashion-studio');

Route::get('/facilities-fineart', function () {
    return view('frontend/facilities/facilities-fineart');
})->name('facilities-fineart');

Route::get('/facilities-games-sports', function () {
    return view('frontend/facilities/facilities-games-sports');
})->name('facilities-games-sports');

Route::get('/facilities-hangout', function () {
    return view('frontend/facilities/facilities-hangout');
})->name('facilities-hangout');

Route::get('/facilities-incubation', function () {
    return view('frontend/facilities/facilities-incubation');
})->name('facilities-incubation');

Route::get('/facilities-library', function () {
    return view('frontend/facilities/facilities-library');
})->name('facilities-library');

Route::get('/facilities-moot-court', function () {
    return view('frontend/facilities/facilities-moot-court');
})->name('facilities-moot-court');

Route::get('/facilities-royal-boutique', function () {
    return view('frontend/facilities/facilities-royal-boutique');
})->name('facilities-royal-boutique');

Route::get('/bhupen-hazarika-songs', function () {
    return view('frontend/bhupen');
})->name('bhupen-hazarika-songs');

Route::get('/facilities-salon', function () {
    return view('frontend/facilities/facilities-salon');
})->name('facilities-salon');

Route::get('/facilities-seminar-hall', function () {
    return view('frontend/facilities/facilities-seminar-hall');
})->name('facilities-seminar-hall');

Route::get('/facilities-Stationary-Store', function () {
    return view('frontend/facilities/facilities-Stationary-Store');
})->name('facilities-Stationary-Store');

Route::get('/facilities-student-gallery', function () {
    return view('frontend/facilities/facilities-student-gallery');
})->name('facilities-student-gallery');

Route::get('/facilities-student-lounge', function () {
    return view('frontend/facilities/facilities-student-lounge');
})->name('facilities-student-lounge');

Route::get('/facilities-transportation', function () {
    return view('frontend/facilities/facilities-transportation');
})->name('facilities-transportation');

Route::get('/facilities-diagnostic', function () {
    return view('frontend/facilities/facilities-diagnostic');
})->name('facilities-diagnostic');

Route::get('/facilities-museum', function () {
    return view('frontend/facilities/facilities-museum');
})->name('facilities-museum');

Route::get('/facilities-mass-com', function () {
    return view('frontend/facilities/facilities-mass-com');
})->name('facilities-mass-com');

Route::get('/facilities-security', function () {
    return view('frontend/facilities/facilities-security');
})->name('facilities-security');

Route::get('/facilities-legal-aid', function () {
    return view('frontend/facilities/facilities-legal-aid');
})->name('facilities-legal-aid');

//End All Facilities

//Magazine
Route::get('/rgu-magazine', function () {
    return view('frontend/magazine/magazine-index');
})->name('rgu-magazine');

//All Labs

Route::get('/lab-architecture', function () {
    return view('frontend/alllabs/lab-architecture');
})->name('lab-architecture');

Route::get('/lab-bio-chemistry', function () {
    return view('frontend/alllabs/lab-bio-chemistry');
})->name('lab-bio-chemistry');

Route::get('/lab-bioscience-research', function () {
    return view('frontend/alllabs/lab-bioscience-research');
})->name('lab-bioscience-research');

Route::get('/lab-biotech', function () {
    return view('frontend/alllabs/lab-biotech');
})->name('lab-biotech');

Route::get('/lab-botany', function () {
    return view('frontend/alllabs/lab-botany');
})->name('lab-botany');

Route::get('/lab-chemistry', function () {
    return view('frontend/alllabs/lab-chemistry');
})->name('lab-chemistry');

Route::get('/lab-civilengineering', function () {
    return view('frontend/alllabs/lab-civilengineering');
})->name('lab-civilengineering');

Route::get('/lab-computer', function () {
    return view('frontend/alllabs/lab-computer');
})->name('lab-computer');

Route::get('/lab-diagnostic', function () {
    return view('frontend/alllabs/lab-diagnostic');
})->name('lab-diagnostic');

Route::get('/lab-electrical', function () {
    return view('frontend/alllabs/lab-electrical');
})->name('lab-electrical');

Route::get('/lab-electronic', function () {
    return view('frontend/alllabs/lab-electronic');
})->name('lab-electronic');

Route::get('/lab-engineering_drawing', function () {
    return view('frontend/alllabs/lab-engineering_drawing');
})->name('lab-engineering_drawing');

Route::get('/lab-foodteach', function () {
    return view('frontend/alllabs/lab-foodteach');
})->name('lab-foodteach');

Route::get('/lab-forensic-lab', function () {
    return view('frontend/alllabs/lab-forensic-lab');
})->name('lab-forensic-lab');

Route::get('/lab-hotelmanagement', function () {
    return view('frontend/alllabs/lab-hotelmanagement');
})->name('lab-hotelmanagement');

Route::get('/lab-interior', function () {
    return view('frontend/alllabs/lab-interior');
})->name('lab-interior');

Route::get('/lab-language-lab', function () {
    return view('frontend/alllabs/lab-language-lab');
})->name('lab-language-lab');

Route::get('/lab-mechanical', function () {
    return view('frontend/alllabs/lab-mechanical');
})->name('lab-mechanical');

Route::get('/lab-microbiology', function () {
    return view('frontend/alllabs/lab-microbiology');
})->name('lab-microbiology');

Route::get('/lab-nursing', function () {
    return view('frontend/alllabs/lab-nursing');
})->name('lab-nursing');

Route::get('/lab-operation_theater', function () {
    return view('frontend/alllabs/lab-operation_theater');
})->name('lab-operation_theater');

Route::get('/lab-optometry', function () {
    return view('frontend/alllabs/lab-optometry');
})->name('lab-optometry');

Route::get('/laboratories', function () {
    return view('frontend/alllabs/laboratories');
})->name('laboratories');

//
Route::get('/lab-astronomy', function () {
    return view('frontend/alllabs/lab-astronomy');
})->name('lab-astronomy');

Route::get('/lab-ev-lab', function () {
    return view('frontend/alllabs/lab-ev-lab');
})->name('lab-ev-lab');

Route::get('/lab-pharmacy', function () {
    return view('frontend/alllabs/lab-pharmacy');
})->name('lab-pharmacy');

Route::get('/lab-physics', function () {
    return view('frontend/alllabs/lab-physics');
})->name('lab-physics');

Route::get('/lab-physiotherapy', function () {
    return view('frontend/alllabs/lab-physiotherapy');
})->name('lab-physiotherapy');

Route::get('/lab-radiography', function () {
    return view('frontend/alllabs/lab-radiography');
})->name('lab-radiography');

Route::get('/lab-zoology', function () {
    return view('frontend/alllabs/lab-zoology');
})->name('lab-zoology');
//End Labs

//End Discover RGU

//Academics RGU

Route::get('/net-set-gate-coaching', function () {
    return view('frontend/academics/net-set-gate-coaching');
})->name('net-set-gate-coaching');

Route::get('/phd', function () {
    return view('frontend/academics/phd');
})->name('phd');

Route::get('/achievements', function () {
    return view('frontend/academics/achievements');
})->name('achievements');

Route::get('/academic-calendar', function () {
    return view('frontend/academics/academic-calendar');
})->name('academic-calendar');

Route::get('/workshops-guest-lectures', function () {
    return view('frontend/academics/workshops-guest-lectures');
})->name('workshops-guest-lectures');

Route::get('/innovation', function () {
    return view('frontend/academics/innovation');
})->name('innovation');

Route::get('/teaching-practice', function () {
    return view('frontend/academics/teaching-practice');
})->name('teaching-practice');

Route::get('/human-resource-development-centre', function () {
    return view('frontend/academics/human-resource-development-centre');
})->name('human-resource-development-centre');

Route::get('/library-Resources', function () {
    return view('frontend/academics/library-Resources');
})->name('library-Resources');

Route::get('/faq', function () {
    return view('frontend/academics/faq');
})->name('faq');

Route::get('/faq', function () {
    return view('frontend/academics/faq');
})->name('faq');

Route::get('/general-elective', function () {
    return view('frontend/academics/general-elective');
})->name('general-elective');

Route::get('/how-to-apply', function () {
    return view('frontend/academics/how-to-apply');
})->name('how-to-apply');

Route::get('/deans-listers', function () {
    return view('frontend/academics/deans-listers');
})->name('deans-listers');

Route::get('/schemes-differently-abled', function () {
    return view('frontend/academics/schemes-differently-abled');
})->name('schemes-differently-abled');

Route::get('/scholarships', function () {
    return view('frontend/academics/scholarships');
})->name('scholarships');

Route::get('/convocation-first', function () {
    return view('frontend/academics/convocation-first');
})->name('convocation-first');

Route::get('/convocation-one-gallery', function () {
    return view('frontend/academics/convocation-one-gallery');
})->name('convocation-one-gallery');

Route::get('/convocation-second', function () {
    return view('frontend/academics/convocation-second');
})->name('convocation-second');

Route::get('/convocation-two-gallery', function () {
    return view('frontend/academics/convocation-two-gallery');
})->name('convocation-two-gallery');

Route::get('/convocation-third', function () {
    return view('frontend/academics/convocation-third');
})->name('convocation-third');

Route::get('/convocation-three-gallery', function () {
    return view('frontend/academics/convocation-three-gallery');
})->name('convocation-three-gallery');

Route::get('/convocation-fourth', function () {
    return view('frontend/academics/convocation-fourth');
})->name('convocation-fourth');

Route::get('/convocation-four-gallery', function () {
    return view('frontend/academics/convocation-four-gallery');
})->name('convocation-four-gallery');
//End Academics RGU


//Campus life
Route::get('/banking-services', function () {
    return view('frontend/campuslife/bank');
})->name('banking-services');

Route::get('/student-affairs', function () {
    return view('frontend/campuslife/student-affairs');
})->name('student-affairs');

Route::get('/banking-services', function () {
    return view('frontend/campuslife/bank');
})->name('banking-services');

Route::get('/department-store', function () {
    return view('frontend/campuslife/departmental-store');
})->name('department-store');

Route::get('/hangout', function () {
    return view('frontend/campuslife/hangout');
})->name('hangout');

Route::get('/counselling-cell', function () {
    return view('frontend/campuslife/counselling-cell');
})->name('counselling-cell');

Route::get('/medical-facility', function () {
    return view('frontend/campuslife/medical-facility');
})->name('medical-facility');

Route::get('/laundry', function () {
    return view('frontend/campuslife/laundry');
})->name('laundry');

Route::get('/salon', function () {
    return view('frontend/campuslife/salon');
})->name('salon');

Route::get('/stationary-store', function () {
    return view('frontend/campuslife/stationary-store');
})->name('stationary-store');

Route::get('/guest-house', function () {
    return view('frontend/campuslife/guest-house');
})->name('guest-house');

Route::get('/student-gallery', function () {
    return view('frontend/campuslife/student-gallery');
})->name('student-gallery');

Route::get('/happy-happening', function () {
    return view('frontend/campuslife/happy-happening');
})->name('happy-happening');

Route::get('/royal-fests', function () {
    return view('frontend/campuslife/royal-fests');
})->name('royal-fests');

Route::get('/hostel-life', function () {
    return view('frontend/campuslife/hostel-life');
})->name('hostel-life');

Route::get('/infrastructure', function () {
    return view('frontend/campuslife/infrastructure');
})->name('infrastructure');

Route::get('/clubs', function () {
    return view('frontend/campuslife/clubs');
})->name('clubs');

Route::get('/games&sports', function () {
    return view('frontend/campuslife/games&sports');
})->name('games&sports');

//End Campus Life

//placements Life

Route::get('/placements-introduction', function () {
    return view('frontend/placement/placements-introduction');
})->name('placements-introduction');

Route::get('/doctoral-biochemistry', function () {
    return view('frontend/phd/doctoral-biochemistry');
})->name('doctoral-biochemistry');

Route::get('/placements-events', function () {
    return view('frontend/placement/placement-events');
})->name('placements-events');

Route::get('/placements-process', function () {
    return view('frontend/placement/placement-process');
})->name('placements-process');

Route::get('/placements-activities', function () {
    return view('frontend/placement/placements-activities');
})->name('placements-activities');

Route::get('/placements-facilities', function () {
    return view('frontend/placement/placements-facilities');
})->name('placements-facilities');

Route::get('/top-hiring-companies', function () {
    return view('frontend/placement/top-hiring-companies');
})->name('top-hiring-companies');

Route::get('/placement-contacts', function () {
    return view('frontend/placement/placement-contacts');
})->name('placement-contacts');

//End placements Life

//phd

Route::get('/doctoral-hotel-management', function () {
    return view('frontend/phd/doctoral-hotel-management');
})->name('doctoral-hotel-management');

Route::get('/doctoral-indian-knowledge-sys', function () {
    return view('frontend/phd/doctoral-indian-knowledge-sys');
})->name('doctoral-indian-knowledge-sys');

Route::get('/doctoral-architecture', function () {
    return view('frontend/phd/doctoral-architecture');
})->name('doctoral-architecture');

Route::get('/doctoral-biotechnology', function () {
    return view('frontend/phd/doctoral-biotechnology');
})->name('doctoral-biotechnology');

Route::get('/doctoral-botany', function () {
    return view('frontend/phd/doctoral-botany');
})->name('doctoral-botany');

Route::get('/doctoral-chemistry', function () {
    return view('frontend/phd/doctoral-chemistry');
})->name('doctoral-chemistry');

Route::get('/doctoral-civil-engineering', function () {
    return view('frontend/phd/doctoral-civil-engineering');
})->name('doctoral-civil-engineering');

Route::get('/doctoral-com-sc-engg', function () {
    return view('frontend/phd/doctoral-com-sc-engg');
})->name('doctoral-com-sc-engg');

Route::get('/doctoral-design', function () {
    return view('frontend/phd/doctoral-design');
})->name('doctoral-design');

Route::get('/doctoral-economics', function () {
    return view('frontend/phd/doctoral-economics');
})->name('doctoral-economics');

Route::get('/doctoral-english', function () {
    return view('frontend/phd/doctoral-english');
})->name('doctoral-english');

Route::get('/doctoral-environmental', function () {
    return view('frontend/phd/doctoral-environmental');
})->name('doctoral-environmental');

Route::get('/doctoral-fine-arts', function () {
    return view('frontend/phd/doctoral-fine-arts');
})->name('doctoral-fine-arts');

Route::get('/doctoral-geography', function () {
    return view('frontend/phd/doctoral-geography');
})->name('doctoral-geography');

Route::get('/doctoral-geology', function () {
    return view('frontend/phd/doctoral-geology');
})->name('doctoral-geology');

Route::get('/doctoral-history', function () {
    return view('frontend/phd/doctoral-history');
})->name('doctoral-history');

Route::get('/doctoral-law', function () {
    return view('frontend/phd/doctoral-law');
})->name('doctoral-law');

Route::get('/doctoral-library-science', function () {
    return view('frontend/phd/doctoral-library-science');
})->name('doctoral-library-science');

Route::get('/doctoral-management', function () {
    return view('frontend/phd/doctoral-management');
})->name('doctoral-management');

Route::get('/doctoral-mass-comm-journalism', function () {
    return view('frontend/phd/doctoral-mass-comm-journalism');
})->name('doctoral-mass-comm-journalism');

Route::get('/doctoral-commerce', function () {
    return view('frontend/phd/doctoral-commerce');
})->name('doctoral-commerce');

Route::get('/doctoral-mathematics', function () {
    return view('frontend/phd/doctoral-mathematics');
})->name('doctoral-mathematics');

Route::get('/doctoral-microbiology', function () {
    return view('frontend/phd/doctoral-microbiology');
})->name('doctoral-microbiology');

Route::get('/doctoral-pharmacy', function () {
    return view('frontend/phd/doctoral-pharmacy');
})->name('doctoral-pharmacy');

Route::get('/doctoral-physics', function () {
    return view('frontend/phd/doctoral-physics');
})->name('doctoral-physics');

Route::get('/doctoral-political-science', function () {
    return view('frontend/phd/doctoral-political-science');
})->name('doctoral-political-science');

Route::get('/doctoral-psychology', function () {
    return view('frontend/phd/doctoral-psychology');
})->name('doctoral-psychology');

Route::get('/doctoral-programme', function () {
    return view('frontend/phd/doctoral-programme');
})->name('doctoral-programme');

Route::get('/doctoral-psychology', function () {
    return view('frontend/phd/doctoral-psychology');
})->name('doctoral-psychology');

Route::get('/doctoral-public-admin', function () {
    return view('frontend/phd/doctoral-public-admin');
})->name('doctoral-public-admin');

Route::get('/doctoral-social-work', function () {
    return view('frontend/phd/doctoral-social-work');
})->name('doctoral-social-work');

Route::get('/doctoral-sociology', function () {
    return view('frontend/phd/doctoral-sociology');
})->name('doctoral-sociology');

Route::get('/doctoral-tourism-travel', function () {
    return view('frontend/phd/doctoral-tourism-travel');
})->name('doctoral-tourism-travel');

Route::get('/doctoral-zoology', function () {
    return view('frontend/phd/doctoral-zoology');
})->name('doctoral-zoology');

//End phd

//International
Route::get('/fee-structure-international', function () {
    return view('frontend/international/fee-structure-international');
})->name('fee-structure-international');

Route::get('/international-faq', function () {
    return view('frontend/international/international-faq');
})->name('international-faq');

Route::get('/frro-process', function () {
    return view('frontend/international/frro-process');
})->name('frro-process');

Route::get('/how-to-apply-international', function () {
    return view('frontend/international/how-to-apply-international');
})->name('how-to-apply-international');

Route::get('/international-student-helpline', function () {
    return view('frontend/international/international-student-helpline');
})->name('international-student-helpline');

Route::get('/campus-job', function () {
    return view('frontend/international/campus-job');
})->name('campus-job');

Route::get('/pre-arrival', function () {
    return view('frontend/international/pre-arrival');
})->name('pre-arrival');

Route::get('/scholarships-international', function () {
    return view('frontend/international/scholarships-international');
})->name('scholarships-international');

Route::get('/visa-information', function () {
    return view('frontend/international/visa-information');
})->name('visa-information');

Route::get('/why-india', function () {
    return view('frontend/international/why-india');
})->name('why-india');

//End International

//IQAC

Route::get('/iqac-overview', function () {
    return view('frontend/iqac/iqac-overview');
})->name('iqac-overview');

Route::get('/iqac-activities', function () {
    return view('frontend/iqac/iqac-activities');
})->name('iqac-activities');

Route::get('/iqac-members', function () {
    return view('frontend/iqac/iqac-members');
})->name('iqac-members');

Route::get('/iqac-mom', function () {
    return view('frontend/iqac/iqac-mom');
})->name('iqac-mom');

Route::get('/iqac-annual-report', function () {
    return view('frontend/iqac/iqac-annul-report');
})->name('iqac-annul-report');

Route::get('/iqac-report', function () {
    return view('frontend/iqac/iqac-report');
})->name('iqac-report');

Route::get('/iqac-report-naac-c1', function () {
    return view('frontend/iqac/iqac-report-naac-c1');
})->name('iqac-report-naac-c1');

Route::get('/iqac-report-naac-c2', function () {
    return view('frontend/iqac/iqac-report-naac-c2');
})->name('iqac-report-naac-c2');

Route::get('/iqac-report-naac-c3', function () {
    return view('frontend/iqac/iqac-report-naac-c3');
})->name('iqac-report-naac-c3');

Route::get('/iqac-report-naac-c4', function () {
    return view('frontend/iqac/iqac-report-naac-c4');
})->name('iqac-report-naac-c4');

Route::get('/iqac-report-naac-c5', function () {
    return view('frontend/iqac/iqac-report-naac-c5');
})->name('iqac-report-naac-c5');

Route::get('/iqac-report-naac-c6', function () {
    return view('frontend/iqac/iqac-report-naac-c6');
})->name('iqac-report-naac-c6');

Route::get('/iqac-report-naac-c7', function () {
    return view('frontend/iqac/iqac-report-naac-c7');
})->name('iqac-report-naac-c7');

//End IQAC


//Admission-programmes
Route::get('/programs', function () {
    return view('frontend/programmes/programs');
})->name('programs');

Route::get('/admission-programs-fees-structure', function () {
    return view('frontend/programmes/admission-programs-fees-structure');
})->name('admission-programs-fees-structure');

Route::get('/program-ma-IKS', function () {
    return view('frontend/programmes/programs-MA-IKS');
})->name('program-ma-IKS');

Route::get('/program-bsc-agriculture', function () {
    return view('frontend/programmes/program-bsc-agriculture');
})->name('program-bsc-agriculture');

Route::get('/program-bsc-cssd', function () {
    return view('frontend/programmes/program-bsc-cssd');
})->name('program-bsc-cssd');

Route::get('/program-msc-nursing-comm-mental', function () {
    return view('frontend/programmes/program-msc-nursing-comm-mental');
})->name('program-msc-nursing-comm-mental');

Route::get('/program-ba-bba-llb-hons', function () {
    return view('frontend/programmes/program-ba-bba-llb-hons');
})->name('program-ba-bba-llb-hons');

Route::get('/program-ba-llb-hons', function () {
    return view('frontend/programmes/program-ba-llb-hons');
})->name('program-ba-llb-hons');

Route::get('/programs-barch', function () {
    return view('frontend/programmes/programs-barch');
})->name('programs-barch');

Route::get('/programs-bcom-finance-with-ica', function () {
    return view('frontend/programmes/programs-bcom-finance-with-ica');
})->name('programs-bcom-finance-with-ica');

Route::get('/programs-bcom', function () {
    return view('frontend/programmes/programs-bcom');
})->name('programs-bcom');

Route::get('/programs-bcom-morning-shift', function () {
    return view('frontend/programmes/programs-bcom-morning-shift');
})->name('programs-bcom-morning-shift');

Route::get('/programs-b-des-fd-fashion-design', function () {
    return view('frontend/programmes/programs-b-des-fd-fashion-design');
})->name('programs-b-des-fd-fashion-design');

Route::get('/programs-b-optometry-lateral-entry', function () {
    return view('frontend/programmes/programs-b-optometry-lateral-entry');
})->name('programs-b-optometry-lateral-entry');

Route::get('/programs-b-optometry', function () {
    return view('frontend/programmes/programs-b-optometry');
})->name('programs-b-optometry');

Route::get('/programs-b-pharm', function () {
    return view('frontend/programmes/programs-b-pharm');
})->name('programs-b-pharm');

Route::get('/programs-b-pharm-lateral-entry', function () {
    return view('frontend/programmes/programs-b-pharm-lateral-entry');
})->name('programs-b-pharm-lateral-entry');

Route::get('/programs-bsc-in-emergency', function () {
    return view('frontend/programmes/programs-bsc-in-emergency');
})->name('programs-bsc-in-emergency');

Route::get('/programs-b-sc-animation-visual-effects', function () {
    return view('frontend/programmes/programs-b-sc-animation-visual-effects');
})->name('programs-b-sc-animation-visual-effects');

Route::get('/programs-b-sc-chemistry', function () {
    return view('frontend/programmes/programs-b-sc-chemistry');
})->name('programs-b-sc-chemistry');

Route::get('/programs-b-sc-dialysis', function () {
    return view('frontend/programmes/programs-b-sc-dialysis');
})->name('programs-b-sc-dialysis');

Route::get('/programs-BTechWorking-Professional-CE-CSE', function () {
    return view('frontend/programmes/programs-BTechWorking-Professional-CE-CSE');
})->name('programs-BTechWorking-Professional-CE-CSE');

Route::get('/programs-b-sc-mathematics', function () {
    return view('frontend/programmes/programs-b-sc-mathematics');
})->name('programs-b-sc-mathematics');

Route::get('/programs-b-sc-medicaltechnologybmlt-lateral-entry', function () {
    return view('frontend/programmes/programs-b-sc-medicaltechnologybmlt-lateral-entry');
})->name('programs-b-sc-medicaltechnologybmlt-lateral-entry');

Route::get('/programs-b-sc-physics', function () {
    return view('frontend/programmes/programs-b-sc-physics');
})->name('programs-b-sc-physics');

Route::get('/programs-b-sc-radiography', function () {
    return view('frontend/programmes/programs-b-sc-radiography');
})->name('programs-b-sc-radiography');

Route::get('/programs-b-sc-nutrition&dietetics', function () {
    return view('frontend/programmes/programs-b-sc-nutrition&dietetics');
})->name('programs-b-sc-nutrition&dietetics');

Route::get('/programs-b-sc-bio-chemistry', function () {
    return view('frontend/programmes/programs-b-sc-bio-chemistry');
})->name('programs-b-sc-bio-chemistry');

Route::get('/programs-b-sc-bio-technology', function () {
    return view('frontend/programmes/programs-b-sc-bio-technology');
})->name('programs-b-sc-bio-technology');

Route::get('/programs-b-sc-food-technology', function () {
    return view('frontend/programmes/programs-b-sc-food-technology');
})->name('programs-b-sc-food-technology');

Route::get('/programs-b-sc-forestry', function () {
    return view('frontend/programmes/programs-b-sc-forestry');
})->name('programs-b-sc-forestry');

Route::get('/programs-b-sc-microbiology', function () {
    return view('frontend/programmes/programs-b-sc-microbiology');
})->name('programs-b-sc-microbiology');
//
Route::get('/programs-b-sc-ba-travel', function () {
    return view('frontend/programmes/programs-b-sc-ba-travel');
})->name('programs-b-sc-ba-travel');

Route::get('/programs-b-sc-botany', function () {
    return view('frontend/programmes/programs-b-sc-botany');
})->name('programs-b-sc-botany');

Route::get('/programs-b-sc-forensicScience', function () {
    return view('frontend/programmes/programs-b-sc-forensicScience');
})->name('programs-b-sc-forensicScience');

Route::get('/programs-b-sc-geography', function () {
    return view('frontend/programmes/programs-b-sc-geography');
})->name('programs-b-sc-geography');

Route::get('/programs-b-sc-geology', function () {
    return view('frontend/programmes/programs-b-sc-geology');
})->name('programs-b-sc-geology');

Route::get('/programs-b-sc-zoology', function () {
    return view('frontend/programmes/programs-b-sc-zoology');
})->name('programs-b-sc-zoology');

Route::get('/programs-bsc-Medical-technology-bmlt', function () {
    return view('frontend/programmes/programs-bsc-Medical-technology-bmlt');
})->name('programs-bsc-Medical-technology-bmlt');

Route::get('/programs-b-tech-mechatronics', function () {
    return view('frontend/programmes/programs-b-tech-mechatronics');
})->name('programs-b-tech-mechatronics');

Route::get('/programs-b-tech-artifical-intelligence-ai', function () {
    return view('frontend/programmes/programs-b-tech-artifical-intelligence-ai');
})->name('programs-b-tech-artifical-intelligence-ai');

Route::get('/programs-b-tech-ce', function () {
    return view('frontend/programmes/programs-b-tech-ce');
})->name('programs-b-tech-ce');

Route::get('/programs-b-tech-cse', function () {
    return view('frontend/programmes/programs-b-tech-cse');
})->name('programs-b-tech-cse');

Route::get('/programs-b-tech-lateral-entry', function () {
    return view('frontend/programmes/programs-b-tech-lateral-entry');
})->name('programs-b-tech-lateral-entry');

Route::get('/programs-b-tech-me', function () {
    return view('frontend/programmes/programs-b-tech-me');
})->name('programs-b-tech-me');

Route::get('/programs-B-TechElectrical-Electronics-Engineering', function () {
    return view('frontend/programmes/programs-B-TechElectrical-Electronics-Engineering');
})->name('programs-B-TechElectrical-Electronics-Engineering');

Route::get('/programs-B-Tech-Electronics-Communication-Engineering', function () {
    return view('frontend/programmes/programs-B-Tech-Electronics-Communication-Engineering');
})->name('programs-B-Tech-Electronics-Communication-Engineering');

Route::get('/programs-BA-Administrative-Service', function () {
    return view('frontend/programmes/programs-BA-Administrative-Service');
})->name('programs-BA-Administrative-Service');

Route::get('/programs-BA-Economics', function () {
    return view('frontend/programmes/programs-BA-Economics');
})->name('programs-BA-Economics');

Route::get('/programs-BA-History', function () {
    return view('frontend/programmes/programs-BA-History');
})->name('programs-BA-History');

Route::get('/programs-BA-HotelManagement', function () {
    return view('frontend/programmes/programs-BA-HotelManagement');
})->name('programs-BA-HotelManagement');

Route::get('/programs-BA-J&MC', function () {
    return view('frontend/programmes/programs-BA-J&MC');
})->name('programs-BA-J&MC');

Route::get('/programs-BA-Political-Science', function () {
    return view('frontend/programmes/programs-BA-Political-Science');
})->name('programs-BA-Political-Science');

Route::get('/programs-BA-Psychology', function () {
    return view('frontend/programmes/programs-BA-Psychology');
})->name('programs-BA-Psychology');

Route::get('/programs-BA-Public-Administration', function () {
    return view('frontend/programmes/programs-BA-Public-Administration');
})->name('programs-BA-Public-Administration');

Route::get('/programs-BA-Sociology', function () {
    return view('frontend/programmes/programs-BA-Sociology');
})->name('programs-BA-Sociology');

Route::get('/programs-Bachelor-of-Physiotherapy-BPT', function () {
    return view('frontend/programmes/programs-Bachelor-of-Physiotherapy-BPT');
})->name('programs-Bachelor-of-Physiotherapy-BPT');

Route::get('/programs-Bachelor-of-Design-Communication-Design', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-Communication-Design');
})->name('programs-Bachelor-of-Design-Communication-Design');

Route::get('/programs-Bachelor-of-Design-Fashion-Design', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-Fashion-Design');
})->name('programs-Bachelor-of-Design-Fashion-Design');

Route::get('/programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry');
})->name('programs-Bachelor-of-Design-Fashion-Design-Lateral-Entry');

Route::get('/programs-Bachelor-of-Design-Graphic-Design', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-Graphic-Design');
})->name('programs-Bachelor-of-Design-Graphic-Design');

Route::get('/programs-Bachelor-of-Design-Product-Design', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-Product-Design');
})->name('programs-Bachelor-of-Design-Product-Design');

Route::get('/programs-Bachelor-of-Fine-Arts-BFA', function () {
    return view('frontend/programmes/programs-Bachelor-of-Fine-Arts-BFA');
})->name('programs-Bachelor-of-Fine-Arts-BFA');

Route::get('/programs-Bachelor-of-Hotel-Management-BHM', function () {
    return view('frontend/programmes/programs-Bachelor-of-Hotel-Management-BHM');
})->name('programs-Bachelor-of-Hotel-Management-BHM');

Route::get('/programs-Bachelor-of-Interior-Design-BID-Lateral-Entry', function () {
    return view('frontend/programmes/programs-Bachelor-of-Interior-Design-BID-Lateral-Entry');
})->name('programs-Bachelor-of-Interior-Design-BID-Lateral-Entry');

Route::get('/programs-Bachelor-Travel', function () {
    return view('frontend/programmes/programs-Bachelor-Travel');
})->name('programs-Bachelor-Travel');

Route::get('/programs-BachelorInterior-DesignBID', function () {
    return view('frontend/programmes/programs-BachelorInterior-DesignBID');
})->name('programs-BachelorInterior-DesignBID');

Route::get('/programs-BachelorofPhysiotherapy', function () {
    return view('frontend/programmes/programs-BachelorofPhysiotherapy');
})->name('programs-BachelorofPhysiotherapy');

Route::get('/programs-BBA', function () {
    return view('frontend/programmes/programs-BBA');
})->name('programs-BBA');

Route::get('/programs-BCA', function () {
    return view('frontend/programmes/programs-BCA');
})->name('programs-BCA');

Route::get('/programs-BSW', function () {
    return view('frontend/programmes/programs-BSW');
})->name('programs-BSW');

Route::get('/programs-BTech-(ME)', function () {
    return view('frontend/programmes/programs-BTech-(ME)');
})->name('programs-BTech-(ME)');

Route::get('/programs-BSc-Geography', function () {
    return view('frontend/programmes/programs-BSc-Geography');
})->name('programs-BSc-Geography');

Route::get('/programs-CDC', function () {
    return view('frontend/programmes/programs-CDC');
})->name('programs-CDC');

Route::get('/programs-D-Pharm', function () {
    return view('frontend/programmes/programs-D-Pharm');
})->name('programs-D-Pharm');

Route::get('/programs-General-Nursing-Midwifery', function () {
    return view('frontend/programmes/programs-General-Nursing-Midwifery');
})->name('programs-General-Nursing-Midwifery');

Route::get('/programs-LLM-Day-Shift', function () {
    return view('frontend/programmes/programs-LLM-Day-Shift');
})->name('programs-LLM-Day-Shift');

Route::get('/programs-LLM-Morning-Shift', function () {
    return view('frontend/programmes/programs-LLM-Morning-Shift');
})->name('programs-LLM-Morning-Shift');

Route::get('/programs-MCom', function () {
    return view('frontend/programmes/programs-MCom');
})->name('programs-MCom');

Route::get('/programs-M-Optometry', function () {
    return view('frontend/programmes/programs-M-Optometry');
})->name('programs-M-Optometry');

Route::get('/programs-M-Pharm-Pharmacognosy', function () {
    return view('frontend/programmes/programs-M-Pharm-Pharmacognosy');
})->name('programs-M-Pharm-Pharmacognosy');

Route::get('/programs-M-Pharm-Pharmaceutical', function () {
    return view('frontend/programmes/programs-M-Pharm-Pharmaceutical');
})->name('programs-M-Pharm-Pharmaceutical');

Route::get('/programs-M-Pharm-Pharmaceutics', function () {
    return view('frontend/programmes/programs-M-Pharm-Pharmaceutics');
})->name('programs-M-Pharm-Pharmaceutics');


Route::get('/programs-M-Pharm-Pharmaceutics', function () {
    return view('frontend/programmes/programs-M-Pharm-Pharmaceutics');
})->name('programs-M-Pharm-Pharmaceutics');


Route::get('/programs-MSc-Animation-&-Visual-Effects', function () {
    return view('frontend/programmes/programs-MSc-Animation-&-Visual-Effects');
})->name('programs-MSc-Animation-&-Visual-Effects');

Route::get('/programs-MSc-Chemistry', function () {
    return view('frontend/programmes/programs-MSc-Chemistry');
})->name('programs-MSc-Chemistry');

Route::get('/programs-MSc-in-Geoinformatics', function () {
    return view('frontend/programmes/programs-MSc-in-Geoinformatics');
})->name('programs-MSc-in-Geoinformatics');

Route::get('/programs-MSc-Mathematics', function () {
    return view('frontend/programmes/programs-MSc-Mathematics');
})->name('programs-MSc-Mathematics');

Route::get('/programs-MSc-Nursing-Child', function () {
    return view('frontend/programmes/programs-MSc-Nursing-Child');
})->name('programs-MSc-Nursing-Child');

Route::get('/programs-MSc-Nursing-Mental', function () {
    return view('frontend/programmes/programs-MSc-Nursing-Mental');
})->name('programs-MSc-Nursing-Mental');

Route::get('/programs-MSc-Nursing-OBE-Nursing', function () {
    return view('frontend/programmes/programs-MSc-Nursing-OBE-Nursing');
})->name('programs-MSc-Nursing-OBE-Nursing');

Route::get('/programs-MSc-Nursing-Surgical-Nursing', function () {
    return view('frontend/programmes/programs-MSc-Nursing-Surgical-Nursing');
})->name('programs-MSc-Nursing-Surgical-Nursing');

Route::get('/programs-MSc-Physics', function () {
    return view('frontend/programmes/programs-MSc-Physics');
})->name('programs-MSc-Physics');

Route::get('/programs-MSc-IT', function () {
    return view('frontend/programmes/programs-MSc-IT');
})->name('programs-MSc-IT');

Route::get('/programs-MSc-Forestry', function () {
    return view('frontend/programmes/programs-MSc-Forestry');
})->name('programs-MSc-Forestry');

Route::get('/programs-MSc-Medical-Laboratory-MMLT', function () {
    return view('frontend/programmes/programs-MSc-Medical-Laboratory-MMLT');
})->name('programs-MSc-Medical-Laboratory-MMLT');

Route::get('/programs-MSc-Nutrition', function () {
    return view('frontend/programmes/programs-MSc-Nutrition');
})->name('programs-MSc-Nutrition');

Route::get('/programs-MSc-Botany', function () {
    return view('frontend/programmes/programs-MSc-Botany');
})->name('programs-MSc-Botany');

Route::get('/programs-MSc-ForensicScience', function () {
    return view('frontend/programmes/programs-MSc-ForensicScience');
})->name('programs-MSc-ForensicScience');

Route::get('/programs-MSc-geography', function () {
    return view('frontend/programmes/programs-MSc-geography');
})->name('programs-MSc-geography');

Route::get('/programs-MSc-Geology', function () {
    return view('frontend/programmes/programs-MSc-Geology');
})->name('programs-MSc-Geology');

Route::get('/programs-MSc-Hotel-Management', function () {
    return view('frontend/programmes/programs-MSc-Hotel-Management');
})->name('programs-MSc-Hotel-Management');

Route::get('/programs-MSc-Zoology', function () {
    return view('frontend/programmes/programs-MSc-Zoology');
})->name('programs-MSc-Zoology');

Route::get('/programs-MTech-CAD', function () {
    return view('frontend/programmes/programs-MTech-CAD');
})->name('programs-MTech-CAD');

Route::get('/programs-MTech-CE-in-Structural-Engineering', function () {
    return view('frontend/programmes/programs-MTech-CE-in-Structural-Engineering');
})->name('programs-MTech-CE-in-Structural-Engineering');

Route::get('/programs-MTech-CE-in-Water-Resources', function () {
    return view('frontend/programmes/programs-MTech-CE-in-Water-Resources');
})->name('programs-MTech-CE-in-Water-Resources');

Route::get('/programs-MTech-CSE-in-Artifical-Intelligence', function () {
    return view('frontend/programmes/programs-MTech-CSE-in-Artifical-Intelligence');
})->name('programs-MTech-CSE-in-Artifical-Intelligence');

Route::get('/programs-MTech-CSE-in-Internet-of-Things', function () {
    return view('frontend/programmes/programs-MTech-CSE-in-Internet-of-Things');
})->name('programs-MTech-CSE-in-Internet-of-Things');

Route::get('/programs-MA-English', function () {
    return view('frontend/programmes/programs-MA-English');
})->name('programs-MA-English');

Route::get('/programs-MA-Clinical-Psychology', function () {
    return view('frontend/programmes/programs-MA-Clinical-Psychology');
})->name('programs-MA-Clinical-Psychology');

Route::get('/programs-MA-Economics', function () {
    return view('frontend/programmes/programs-MA-Economics');
})->name('programs-MA-Economics');

Route::get('/programs-MA-Geography', function () {
    return view('frontend/programmes/programs-MA-Geography');
})->name('programs-MA-Geography');

Route::get('/programs-MA-History', function () {
    return view('frontend/programmes/programs-MA-History');
})->name('programs-MA-History');

Route::get('/programs-MA-J&MC', function () {
    return view('frontend/programmes/programs-MA-J&MC');
})->name('programs-MA-J&MC');

Route::get('/programs-MA-Political-Science', function () {
    return view('frontend/programmes/programs-MA-Political-Science');
})->name('programs-MA-Political-Science');

Route::get('/programs-MA-Psychology', function () {
    return view('frontend/programmes/programs-MA-Psychology');
})->name('programs-MA-Psychology');

Route::get('/programs-MA-Public-Administration', function () {
    return view('frontend/programmes/programs-MA-Public-Administration');
})->name('programs-MA-Public-Administration');

Route::get('/programs-MA-Sociology', function () {
    return view('frontend/programmes/programs-MA-Sociology');
})->name('programs-MA-Sociology');

Route::get('/programs-Master-Travel&Tourism', function () {
    return view('frontend/programmes/programs-Master-Travel&Tourism');
})->name('programs-Master-Travel&Tourism');

Route::get('/programs-MasterofPhysiotherapyMPT', function () {
    return view('frontend/programmes/programs-MasterofPhysiotherapyMPT');
})->name('programs-MasterofPhysiotherapyMPT');

Route::get('/programs-MBA-Finance', function () {
    return view('frontend/programmes/programs-MBA-Finance');
})->name('programs-MBA-Finance');

Route::get('/programs-MCA', function () {
    return view('frontend/programmes/programs-MCA');
})->name('programs-MCA');

Route::get('/programs-MSW', function () {
    return view('frontend/programmes/programs-MSW');
})->name('programs-MSW');

Route::get('/programs-Technology-OTT', function () {
    return view('frontend/programmes/programs-Technology-OTT');
})->name('programs-Technology-OTT');

Route::get('/programs-BSc-IT', function () {
    return view('frontend/programmes/programs-BSc-IT');
})->name('programs-BSc-IT');

Route::get('/programs-BA-English', function () {
    return view('frontend/programmes/programs-BA-English');
})->name('programs-BA-English');

Route::get('/programs-BA-Applied-Psychology', function () {
    return view('frontend/programmes/programs-BA-Applied-Psychology');
})->name('programs-BA-Applied-Psychology');

Route::get('/programs-BA-in-Culinary-Arts', function () {
    return view('frontend/programmes/programs-BA-in-Culinary-Arts');
})->name('programs-BA-in-Culinary-Arts');

Route::get('/programs-MSc-Food-Technology', function () {
    return view('frontend/programmes/programs-MSc-Food-Technology');
})->name('programs-MSc-Food-Technology');

Route::get('/programs-MSc-Bio-Chemistry', function () {
    return view('frontend/programmes/programs-MSc-Bio-Chemistry');
})->name('programs-MSc-Bio-Chemistry');

Route::get('/programs-MSc-Bio-Technology', function () {
    return view('frontend/programmes/programs-MSc-Bio-Technology');
})->name('programs-MSc-Bio-Technology');

Route::get('/programs-Msc-Microbiology', function () {
    return view('frontend/programmes/programs-Msc-Microbiology');
})->name('programs-Msc-Microbiology');

Route::get('/programs-Master-of-Library&Information-Sciences', function () {
    return view('frontend/programmes/programs-Master-of-Library&Information-Sciences');
})->name('programs-Master-of-Library&Information-Sciences');

Route::get('/programs-Master-of-Fine-Arts-MFA', function () {
    return view('frontend/programmes/programs-Master-of-Fine-Arts-MFA');
})->name('programs-Master-of-Fine-Arts-MFA');

Route::get('/programs-BSc-Nursing', function () {
    return view('frontend/programmes/programs-BSc-Nursing');
})->name('programs-BSc-Nursing');

Route::get('/programs-BSc-Post-Basic', function () {
    return view('frontend/programmes/programs-BSc-Post-Basic');
})->name('programs-BSc-Post-Basic');


//IAS
Route::get('/ba-sociology', function () {
    return view('frontend/programmes/ias/ba-sociology');
})->name('ba-sociology');

Route::get('/ba-Economics', function () {
    return view('frontend/programmes/ias/ba-Economics');
})->name('ba-Economics');

Route::get('/ba-Public-Administration', function () {
    return view('frontend/programmes/ias/ba-Public-Administration');
})->name('ba-Public-Administration');

Route::get('/ba-Political-Science', function () {
    return view('frontend/programmes/ias/ba-Political-Science');
})->name('ba-Political-Science');

Route::get('/ba-History', function () {
    return view('frontend/programmes/ias/ba-History');
})->name('ba-History');

Route::get('/bsc-Physics', function () {
    return view('frontend/programmes/ias/bsc-Physics');
})->name('bsc-Physics');

Route::get('/bsc-Mathematics', function () {
    return view('frontend/programmes/ias/bsc-Mathematics');
})->name('bsc-Mathematics');

Route::get('/bsc-Chemistry', function () {
    return view('frontend/programmes/ias/bsc-Chemistry');
})->name('bsc-Chemistry');

Route::get('/bsc-Geography', function () {
    return view('frontend/programmes/ias/bsc-Geography');
})->name('bsc-Geography');

Route::get('/ba-Geography', function () {
    return view('frontend/programmes/ias/ba-Geography');
})->name('ba-Geography');

Route::get('/bsc-Geology', function () {
    return view('frontend/programmes/ias/bsc-Geology');
})->name('bsc-Geology');

Route::get('/ba-Psychology', function () {
    return view('frontend/programmes/ias/ba-Psychology');
})->name('ba-Psychology');

Route::get('/bsc-Botany', function () {
    return view('frontend/programmes/ias/bsc-Botany');
})->name('bsc-Botany');

Route::get('/bsc-Zoology', function () {
    return view('frontend/programmes/ias/bsc-Zoology');
})->name('bsc-Zoology');

Route::get('/ba-English', function () {
    return view('frontend/programmes/ias/ba-English');
})->name('ba-English');

//End admission-programmes

//School & Faculty

Route::get('/schools-rgu', function () {
    return view('frontend/school&faculty/schools-rgu');
})->name('schools-rgu');

Route::get('/department-IKS', function () {
    return view('frontend/school&faculty/department-IKS');
})->name('department-IKS');

Route::get('/department-travel', function () {
    return view('frontend/school&faculty/department-travel');
})->name('department-travel');

Route::get('/department-social-work', function () {
    return view('frontend/school&faculty/department-social-work');
})->name('department-social-work');

Route::get('/department-public-administration', function () {
    return view('frontend/school&faculty/department-public-administration');
})->name('department-public-administration');

Route::get('/department-sociology', function () {
    return view('frontend/school&faculty/department-sociology');
})->name('department-sociology');

Route::get('/department-pharmacy', function () {
    return view('frontend/school&faculty/department-pharmacy');
})->name('department-pharmacy');

Route::get('/department-nursing', function () {
    return view('frontend/school&faculty/department-nursing');
})->name('department-nursing');

Route::get('/deptment-radiography', function () {
    return view('frontend/school&faculty/deptment-radiography');
})->name('deptment-radiography');

Route::get('/department-optometry', function () {
    return view('frontend/school&faculty/department-optometry');
})->name('department-optometry');

Route::get('/department-operationtheatre', function () {
    return view('frontend/school&faculty/department-operationtheatre');
})->name('department-operationtheatre');

Route::get('/department-nutrition-dietetics', function () {
    return view('frontend/school&faculty/department-nutrition-dietetics');
})->name('department-nutrition-dietetics');

Route::get('/department-medical-lab', function () {
    return view('frontend/school&faculty/department-medical-lab');
})->name('department-medical-lab');

Route::get('/department-library-information', function () {
    return view('frontend/school&faculty/department-library-information');
})->name('department-library-information');

Route::get('/department-business', function () {
    return view('frontend/school&faculty/department-business');
})->name('department-business');

Route::get('/department-botany', function () {
    return view('frontend/school&faculty/department-botany');
})->name('department-botany');

Route::get('/department-forensic-sciences', function () {
    return view('frontend/school&faculty/department-forensic-sciences');
})->name('department-forensic-sciences');

Route::get('/department-forestry', function () {
    return view('frontend/school&faculty/department-forestry');
})->name('department-forestry');

Route::get('/department-languages', function () {
    return view('frontend/school&faculty/department-languages');
})->name('department-languages');

Route::get('/department-zoology', function () {
    return view('frontend/school&faculty/department-zoology');
})->name('department-zoology');

Route::get('/department-information-technology', function () {
    return view('frontend/school&faculty/department-information-technology');
})->name('department-information-technology');

Route::get('/indian-knowledge-system-cell-about', function () {
    return view('frontend/school&faculty/indian-knowledge-system-cell-about');
})->name('indian-knowledge-system-cell-about');

Route::get('/indian-knowledge-system-cell-composition', function () {
    return view('frontend/school&faculty/indian-knowledge-system-cell-composition');
})->name('indian-knowledge-system-cell-composition');

Route::get('/indian-knowledge-system-cell-events', function () {
    return view('frontend/school&faculty/indian-knowledge-system-cell-events');
})->name('indian-knowledge-system-cell-events');

Route::get('/indian-knowledge-system-cell-syllabus', function () {
    return view('frontend/school&faculty/indian-knowledge-system-cell-syllabus');
})->name('indian-knowledge-system-cell-syllabus');

Route::get('/department-chemistry', function () {
    return view('frontend/school&faculty/department-chemistry');
})->name('department-chemistry');

Route::get('/department-mathematics', function () {
    return view('frontend/school&faculty/department-mathematics');
})->name('department-mathematics');

Route::get('/department-physics', function () {
    return view('frontend/school&faculty/department-physics');
})->name('department-physics');

Route::get('/department-school', function () {
    return view('frontend/school&faculty/department-school');
})->name('department-school');

Route::get('/faculty-applied-purescience', function () {
    return view('frontend/school&faculty/faculty-applied-purescience');
})->name('faculty-applied-purescience');

Route::get('/faculty-csp', function () {
    return view('frontend/school&faculty/faculty-csp');
})->name('faculty-csp');

Route::get('/department-agriculture', function () {
    return view('frontend/school&faculty/department-agriculture');
})->name('department-agriculture');

Route::get('/department-architecture', function () {
    return view('frontend/school&faculty/department-architecture');
})->name('department-architecture');

Route::get('/faculty-architecture', function () {
    return view('frontend/school&faculty/faculty-architecture');
})->name('faculty-architecture');

Route::get('/department-psychology', function () {
    return view('frontend/school&faculty/department-psychology');
})->name('department-psychology');

Route::get('/royal-school-of-allied-sciences', function () {
    return view('frontend/school&faculty/royal-school-of-allied-sciences');
})->name('royal-school-of-allied-sciences');

Route::get('/department-biotechnology', function () {
    return view('frontend/school&faculty/department-biotechnology');
})->name('department-biotechnology');

Route::get('/department-food-technology', function () {
    return view('frontend/school&faculty/department-food-technology');
})->name('department-food-technology');

Route::get('/department-microbiology', function () {
    return view('frontend/school&faculty/department-microbiology');
})->name('department-microbiology');

Route::get('/department-schoolof-bsc', function () {
    return view('frontend/school&faculty/department-schoolof-bsc');
})->name('department-schoolof-bsc');

Route::get('/faculty-bio-sciences', function () {
    return view('frontend/school&faculty/faculty-bio-sciences');
})->name('faculty-bio-sciences');

Route::get('/department-business', function () {
    return view('frontend/school&faculty/department-business');
})->name('department-business');

Route::get('/faculty-business', function () {
    return view('frontend/school&faculty/faculty-business');
})->name('faculty-business');

Route::get('/department-commerce', function () {
    return view('frontend/school&faculty/department-commerce');
})->name('department-commerce');

Route::get('/faculty-commerce', function () {
    return view('frontend/school&faculty/faculty-commerce');
})->name('faculty-commerce');

Route::get('/department-communications-media', function () {
    return view('frontend/school&faculty/department-communications-media');
})->name('department-communications-media');

Route::get('/rscom-faculty', function () {
    return view('frontend/school&faculty/rscom-faculty');
})->name('rscom-faculty');

Route::get('/department-communication-design', function () {
    return view('frontend/school&faculty/department-communication-design');
})->name('department-communication-design');

Route::get('/department-graphic-design', function () {
    return view('frontend/school&faculty/department-graphic-design');
})->name('department-graphic-design');

Route::get('/department-interior-design', function () {
    return view('frontend/school&faculty/department-interior-design');
})->name('department-interior-design');

Route::get('/department-product-design', function () {
    return view('frontend/school&faculty/department-product-design');
})->name('department-product-design');

Route::get('/department-school-design', function () {
    return view('frontend/school&faculty/department-school-design');
})->name('department-school-design');

Route::get('/faculty-design', function () {
    return view('frontend/school&faculty/faculty-design');
})->name('faculty-design');

Route::get('/faculty-agriculture', function () {
    return view('frontend/school&faculty/faculty-agriculture');
})->name('faculty-agriculture');

Route::get('/department-civil-engineering', function () {
    return view('frontend/school&faculty/department-civil-engineering');
})->name('department-civil-engineering');

Route::get('/department-cse', function () {
    return view('frontend/school&faculty/department-cse');
})->name('department-cse');

Route::get('/department-mechanical-engineering', function () {
    return view('frontend/school&faculty/department-mechanical-engineering');
})->name('department-mechanical-engineering');

Route::get('/department-school', function () {
    return view('frontend/school&faculty/department-school');
})->name('department-school');

Route::get('/faculty-engineeringtechnology', function () {
    return view('frontend/school&faculty/faculty-engineeringtechnology');
})->name('faculty-engineeringtechnology');

Route::get('/department-environmental-sciences', function () {
    return view('frontend/school&faculty/department-environmental-sciences');
})->name('department-environmental-sciences');

Route::get('/department-geography-geoinformatics', function () {
    return view('frontend/school&faculty/department-geography-geoinformatics');
})->name('department-geography-geoinformatics');

Route::get('/department-geology', function () {
    return view('frontend/school&faculty/department-geology');
})->name('department-geology');

Route::get('/royal-school-of-environmental-earth-science', function () {
    return view('frontend/school&faculty/royal-school-of-environmental-earth-science');
})->name('royal-school-of-environmental-earth-science');

Route::get('/faculty-environmental-earth', function () {
    return view('frontend/school&faculty/faculty-environmental-earth');
})->name('faculty-environmental-earth');

Route::get('/department-fashion-design', function () {
    return view('frontend/school&faculty/department-fashion-design');
})->name('department-fashion-design');

Route::get('/faculty-fashion-design', function () {
    return view('frontend/school&faculty/faculty-fashion-design');
})->name('faculty-fashion-design');

Route::get('/department-fine-arts', function () {
    return view('frontend/school&faculty/department-fine-arts');
})->name('department-fine-arts');

Route::get('/faculty-finearts', function () {
    return view('frontend/school&faculty/faculty-finearts');
})->name('faculty-finearts');

Route::get('/department-hotel-management', function () {
    return view('frontend/school&faculty/department-hotel-management');
})->name('department-hotel-management');
//
Route::get('/faculty-hotel-management', function () {
    return view('frontend/school&faculty/faculty-hotel-management');
})->name('faculty-hotel-management');

Route::get('/department-economics', function () {
    return view('frontend/school&faculty/department-economics');
})->name('department-economics');

Route::get('/department-history', function () {
    return view('frontend/school&faculty/department-history');
})->name('department-history');

Route::get('/department-political-science', function () {
    return view('frontend/school&faculty/department-political-science');
})->name('department-political-science');
//
Route::get('/department-public-administration', function () {
    return view('frontend/school&faculty/department-public-administration');
})->name('department-public-administration');

Route::get('/department-social-work', function () {
    return view('frontend/school&faculty/department-social-work');
})->name('department-social-work');

Route::get('/department-sociology', function () {
    return view('frontend/school&faculty/department-sociology');
})->name('department-sociology');

Route::get('/royal-school-of-humanities-socialsciences', function () {
    return view('frontend/school&faculty/royal-school-of-humanities-socialsciences');
})->name('royal-school-of-humanities-socialsciences');

Route::get('/faculty-humanities-social', function () {
    return view('frontend/school&faculty/faculty-humanities-social');
})->name('faculty-humanities-social');

Route::get('/department-information-technology', function () {
    return view('frontend/school&faculty/department-information-technology');
})->name('department-information-technology');

Route::get('/faculty-information-technology', function () {
    return view('frontend/school&faculty/faculty-information-technology');
})->name('faculty-information-technology');

Route::get('/department-languages', function () {
    return view('frontend/school&faculty/department-languages');
})->name('department-languages');

Route::get('/faculty-languages', function () {
    return view('frontend/school&faculty/faculty-languages');
})->name('faculty-languages');

Route::get('/department-law', function () {
    return view('frontend/school&faculty/department-law');
})->name('department-law');

Route::get('/faculty-law-administration', function () {
    return view('frontend/school&faculty/faculty-law-administration');
})->name('faculty-law-administration');

Route::get('/department-library-information', function () {
    return view('frontend/school&faculty/department-library-information');
})->name('department-library-information');

Route::get('/faculty-librarysciences', function () {
    return view('frontend/school&faculty/faculty-librarysciences');
})->name('faculty-librarysciences');

Route::get('/department-botany', function () {
    return view('frontend/school&faculty/department-botany');
})->name('department-botany');

Route::get('/department-forensic-sciences', function () {
    return view('frontend/school&faculty/department-forensic-sciences');
})->name('department-forensic-sciences');

Route::get('/department-forestry', function () {
    return view('frontend/school&faculty/department-forestry');
})->name('department-forestry');

Route::get('/department-zoology', function () {
    return view('frontend/school&faculty/department-zoology');
})->name('department-zoology');

Route::get('/royalschool-of-lifesciences', function () {
    return view('frontend/school&faculty/royalschool-of-lifesciences');
})->name('royalschool-of-lifesciences');

Route::get('/faculty-lifesciences', function () {
    return view('frontend/school&faculty/faculty-lifesciences');
})->name('faculty-lifesciences');

Route::get('/department-medical-lab', function () {
    return view('frontend/school&faculty/department-medical-lab');
})->name('department-medical-lab');

Route::get('/department-nutrition-dietetics', function () {
    return view('frontend/school&faculty/department-nutrition-dietetics');
})->name('department-nutrition-dietetics');

Route::get('/department-operationtheatre', function () {
    return view('frontend/school&faculty/department-operationtheatre');
})->name('department-operationtheatre');

Route::get('/department-optometry', function () {
    return view('frontend/school&faculty/department-optometry');
})->name('department-optometry');

Route::get('/department-physiotherapy', function () {
    return view('frontend/school&faculty/department-physiotherapy');
})->name('department-physiotherapy');

Route::get('/deptment-radiography', function () {
    return view('frontend/school&faculty/deptment-radiography');
})->name('deptment-radiography');

Route::get('/royal-school-of-medical-allied-sciences', function () {
    return view('frontend/school&faculty/royal-school-of-medical-allied-sciences');
})->name('royal-school-of-medical-allied-sciences');

Route::get('/faculty-medical&allide-sciences', function () {
    return view('frontend/school&faculty/faculty-medical&allide-sciences');
})->name('faculty-medical&allide-sciences');

Route::get('/department-nursing', function () {
    return view('frontend/school&faculty/department-nursing');
})->name('department-nursing');

Route::get('/faculty-nursing', function () {
    return view('frontend/school&faculty/faculty-nursing');
})->name('faculty-nursing');

Route::get('/department-pharmacy', function () {
    return view('frontend/school&faculty/department-pharmacy');
})->name('department-pharmacy');

Route::get('/faculty-pharmacy', function () {
    return view('frontend/school&faculty/faculty-pharmacy');
})->name('faculty-pharmacy');

Route::get('/department-travel', function () {
    return view('frontend/school&faculty/department-travel');
})->name('department-travel');

Route::get('/faculty-travel-tourism', function () {
    return view('frontend/school&faculty/faculty-travel-tourism');
})->name('faculty-travel-tourism');

Route::get('/royal-s-school-of-applied-pure-science', function () {
    return view('frontend/school&faculty/royal-s-school-of-applied-pure-science');
})->name('royal-s-school-of-applied-pure-science');

Route::get('/royal-s-school-of-bio-science', function () {
    return view('frontend/school&faculty/royal-s-school-of-bio-science');
})->name('royal-s-school-of-bio-science');

Route::get('/royal-s-school-of-design', function () {
    return view('frontend/school&faculty/royal-s-school-of-design');
})->name('royal-s-school-of-design');

Route::get('/royal-s-school-of-engineering-technology', function () {
    return view('frontend/school&faculty/royal-s-school-of-engineering-technology');
})->name('royal-s-school-of-engineering-technology');

Route::get('/royal-s-school-of-enviroment-science', function () {
    return view('frontend/school&faculty/royal-s-school-of-enviroment-science');
})->name('royal-s-school-of-enviroment-science');

Route::get('/royal-s-school-of-humanities', function () {
    return view('frontend/school&faculty/royal-s-school-of-humanities');
})->name('royal-s-school-of-humanities');

Route::get('/royal-s-school-of-life-science', function () {
    return view('frontend/school&faculty/royal-s-school-of-life-science');
})->name('royal-s-school-of-life-science');

Route::get('/royal-s-school-of-medical-allied-science', function () {
    return view('frontend/school&faculty/royal-s-school-of-medical-allied-science');
})->name('royal-s-school-of-medical-allied-science');

Route::get('/department-physiotherapy', function () {
    return view('frontend/school&faculty/department-physiotherapy');
})->name('department-physiotherapy');

Route::get('/departement-food-science&nutrition', function () {
    return view('frontend/school&faculty/departement-food-science&nutrition');
})->name('departement-food-science&nutrition');

Route::get('/ias-courses', function () {
    return view('frontend/school&faculty/ias-courses');
})->name('ias-courses');

//schools-rgu-faculty
Route::get('/faculty-architecture', function () {
    return view('frontend/school&faculty/faculty-architecture');
})->name('faculty-architecture');

Route::get('/faculty-applied-purescience', function () {
    return view('frontend/school&faculty/faculty-applied-purescience');
})->name('faculty-applied-purescience');

Route::get('/faculty-business', function () {
    return view('frontend/school&faculty/faculty-business');
})->name('faculty-business');

Route::get('/royal-school-of-allied-sciences', function () {
    return view('frontend/school&faculty/royal-school-of-allied-sciences');
})->name('royal-school-of-allied-sciences');

Route::get('/faculty-bio-sciences', function () {
    return view('frontend/school&faculty/faculty-bio-sciences');
})->name('faculty-bio-sciences');

Route::get('/faculty-commerce', function () {
    return view('frontend/school&faculty/faculty-commerce');
})->name('faculty-commerce');

Route::get('/rscom-faculty', function () {
    return view('frontend/school&faculty/rscom-faculty');
})->name('rscom-faculty');

Route::get('/faculty-allied-sciences', function () {
    return view('frontend/school&faculty/faculty-allied-sciences');
})->name('faculty-allied-sciences');

Route::get('/faculty-design', function () {
    return view('frontend/school&faculty/faculty-design');
})->name('faculty-design');

Route::get('/faculty-environmental-earth', function () {
    return view('frontend/school&faculty/faculty-environmental-earth');
})->name('faculty-environmental-earth');

Route::get('/faculty-engineeringtechnology', function () {
    return view('frontend/school&faculty/faculty-engineeringtechnology');
})->name('faculty-engineeringtechnology');

Route::get('/faculty-finearts', function () {
    return view('frontend/school&faculty/faculty-finearts');
})->name('faculty-finearts');

Route::get('/faculty-fashion-design', function () {
    return view('frontend/school&faculty/faculty-fashion-design');
})->name('faculty-fashion-design');

Route::get('/faculty-humanities-social', function () {
    return view('frontend/school&faculty/faculty-humanities-social');
})->name('faculty-humanities-social');

Route::get('/faculty-hotel-management', function () {
    return view('frontend/school&faculty/faculty-hotel-management');
})->name('faculty-hotel-management');

Route::get('/faculty-information-technology', function () {
    return view('frontend/school&faculty/faculty-information-technology');
})->name('faculty-information-technology');

Route::get('/faculty-law-administration', function () {
    return view('frontend/school&faculty/faculty-law-administration');
})->name('faculty-law-administration');

Route::get('/faculty-lifesciences', function () {
    return view('frontend/school&faculty/faculty-lifesciences');
})->name('faculty-lifesciences');

Route::get('/faculty-languages', function () {
    return view('frontend/school&faculty/faculty-languages');
})->name('faculty-languages');

Route::get('/faculty-librarysciences', function () {
    return view('frontend/school&faculty/faculty-librarysciences');
})->name('faculty-librarysciences');

Route::get('/faculty-medical&allidesciences', function () {
    return view('frontend/school&faculty/faculty-medical&allidesciences');
})->name('faculty-medical&allidesciences');

Route::get('/faculty-nursing', function () {
    return view('frontend/school&faculty/faculty-nursing');
})->name('faculty-nursing');

Route::get('/faculty-pharmacy', function () {
    return view('frontend/school&faculty/faculty-pharmacy');
})->name('faculty-pharmacy');

Route::get('/faculty-travel-tourism', function () {
    return view('frontend/school&faculty/faculty-travel-tourism');
})->name('faculty-travel-tourism');

//End School & Faculty


//International Fee
Route::get('/international-fee-structure', function () {
    return view('frontend/international-fee/international-fee-structure');
})->name('international-fee-structure');

Route::get('/international-Program-BSc-CSSD', function () {
    return view('frontend/international-fee/international-Program-BSc-CSSD');
})->name('international-Program-BSc-CSSD');

Route::get('/international-program-MSc-Nursing-Comm-Mental', function () {
    return view('frontend/international-fee/international-program-MSc-Nursing-Comm-Mental');
})->name('international-program-MSc-Nursing-Comm-Mental');

Route::get('/international-programBA-BBA-LLBHons', function () {
    return view('frontend/international-fee/international-programBA-BBA-LLBHons');
})->name('international-programBA-BBA-LLBHons');

Route::get('/international-programs-B-Arch', function () {
    return view('frontend/international-fee/international-programs-B-Arch');
})->name('international-programs-B-Arch');

Route::get('/international-programs-MSc-Physics', function () {
    return view('frontend/international-fee/international-programs-MSc-Physics');
})->name('international-programs-MSc-Physics');

Route::get('/international-programs-MSc-Chemistry', function () {
    return view('frontend/international-fee/international-programs-MSc-Chemistry');
})->name('international-programs-MSc-Chemistry');

Route::get('/international-programs-MSc-Mathematics', function () {
    return view('frontend/international-fee/international-programs-MSc-Mathematics');
})->name('international-programs-MSc-Mathematics');

Route::get('/international-programs-BSc-Physics', function () {
    return view('frontend/international-fee/international-programs-BSc-Physics');
})->name('international-programs-BSc-Physics');

Route::get('/international-programs-BSc-Chemistry', function () {
    return view('frontend/international-fee/international-programs-BSc-Chemistry');
})->name('international-programs-BSc-Chemistry');

Route::get('/international-programs-BSc-Mathematics', function () {
    return view('frontend/international-fee/international-programs-BSc-Mathematics');
})->name('international-programs-BSc-Mathematics');

Route::get('/international-programs-MBA-Finance', function () {
    return view('frontend/international-fee/international-programs-MBA-Finance');
})->name('international-programs-MBA-Finance');

Route::get('/international-programs-BBA', function () {
    return view('frontend/international-fee/international-programs-BBA');
})->name('international-programs-BBA');

Route::get('/international-programs-MA-Psychology', function () {
    return view('frontend/international-fee/international-programs-MA-Psychology');
})->name('international-programs-MA-Psychology');

Route::get('/international-programs-MA-Clinical-Psychology', function () {
    return view('frontend/international-fee/international-programs-MA-Clinical-Psychology');
})->name('international-programs-MA-Clinical-Psychology');

Route::get('/international-programs-BTech(CE&CSE)-working', function () {
    return view('frontend/international-fee/international-programs-BTech(CE&CSE)-working');
})->name('international-programs-BTech(CE&CSE)-working');

Route::get('/international-programs-BA-Psychology', function () {
    return view('frontend/international-fee/international-programs-BA-Psychology');
})->name('international-programs-BA-Psychology');

Route::get('/programs-B.TechWorking-Professional(CE&CSE)', function () {
    return view('frontend/international-fee/programs-B.TechWorking-Professional(CE&CSE)');
})->name('programs-B.TechWorking-Professional(CE&CSE)');

Route::get('/international-programs-BA-Applied-Psychology', function () {
    return view('frontend/international-fee/international-programs-BA-Applied-Psychology');
})->name('international-programs-BA-Applied-Psychology');

Route::get('/international-programs-MSc-Bio-Technology', function () {
    return view('frontend/international-fee/international-programs-MSc-Bio-Technology');
})->name('international-programs-MSc-Bio-Technology');

Route::get('/international-programs-MSc-Microbiology', function () {
    return view('frontend/international-fee/international-programs-MSc-Microbiology');
})->name('international-programs-MSc-Microbiology');

Route::get('/international-programs-MSc-Food-Technology', function () {
    return view('frontend/international-fee/international-programs-MSc-Food-Technology');
})->name('international-programs-MSc-Food-Technology');

Route::get('/international-programs-BSc-Bio-Technology', function () {
    return view('frontend/international-fee/international-programs-BSc-Bio-Technology');
})->name('international-programs-BSc-Bio-Technology');

Route::get('/international-programs-BSc-Microbiology', function () {
    return view('frontend/international-fee/international-programs-BSc-Microbiology');
})->name('international-programs-BSc-Microbiology');

Route::get('/international-programs-BSc-Food-Technology', function () {
    return view('frontend/international-fee/international-programs-BSc-Food-Technology');
})->name('international-programs-BSc-Food-Technology');

Route::get('/international-programs-MCom', function () {
    return view('frontend/international-fee/international-programs-MCom');
})->name('international-programs-MCom');

Route::get('/international-programs-BCom', function () {
    return view('frontend/international-fee/international-programs-BCom');
})->name('international-programs-BCom');

Route::get('/international-programs-BCom(Morning-shift)', function () {
    return view('frontend/international-fee/international-programs-BCom(Morning-shift)');
})->name('international-programs-BCom(Morning-shift)');

Route::get('/international-programs-BCom-Finance-with-ICA', function () {
    return view('frontend/international-fee/international-programs-BCom-Finance-with-ICA');
})->name('international-programs-BCom-Finance-with-ICA');
//---
Route::get('/international-programs-MA-J&MC', function () {
    return view('frontend/international-fee/international-programs-MA-J&MC');
})->name('international-programs-MA-J&MC');

Route::get('/international-programs-BA-J&MC', function () {
    return view('frontend/international-fee/international-programs-BA-J&MC');
})->name('international-programs-BA-J&MC');

Route::get('/international-programs-Bachelor-of-Design-Product-Design', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Design-Product-Design');
})->name('international-programs-Bachelor-of-Design-Product-Design');

Route::get('/international-programs-MSc-Animation-Visual-Effects', function () {
    return view('frontend/international-fee/international-programs-MSc-Animation-Visual-Effects');
})->name('international-programs-MSc-Animation-Visual-Effects');

Route::get('/international-programs-BSc-Animation-Visual-Effects', function () {
    return view('frontend/international-fee/international-programs-BSc-Animation-Visual-Effects');
})->name('international-programs-BSc-Animation-Visual-Effects');

//
Route::get('/international-programs-BachelorInterior-DesignBID', function () {
    return view('frontend/international-fee/international-programs-BachelorInterior-DesignBID');
})->name('international-programs-BachelorInterior-DesignBID');

Route::get('/international-programs-Bachelor-of-Interior-Design-BID-Lateral-Entry', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Interior-Design-BID-Lateral-Entry');
})->name('international-programs-Bachelor-of-Interior-Design-BID-Lateral-Entry');



Route::get('/international-programs-Bachelor-of-Design-Fashion-DesignLateral-Entry', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Design-Fashion-DesignLateral-Entry');
})->name('international-programs-Bachelor-of-Design-Fashion-DesignLateral-Entry');

Route::get('/international-programs-Bachelor-of-Design-Communication-Design', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Design-Communication-Design');
})->name('international-programs-Bachelor-of-Design-Communication-Design');

Route::get('/international-programs-Bachelor-of-Design-Graphic-Design', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Design-Graphic-Design');
})->name('international-programs-Bachelor-of-Design-Graphic-Design');

Route::get('/international-programs-Bachelor-of-Design-(Product-Design)', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Design-(Product-Design)');
})->name('international-programs-Bachelor-of-Design-(Product-Design)');

Route::get('/international-programs-MSc-Geography', function () {
    return view('frontend/international-fee/international-programs-MSc-Geography');
})->name('international-programs-MSc-Geography');

Route::get('/international-programs-MA-Geography', function () {
    return view('frontend/international-fee/international-programs-MA-Geography');
})->name('international-programs-MA-Geography');

Route::get('/international-programs-MSc-Geology', function () {
    return view('frontend/international-fee/international-programs-MSc-Geology');
})->name('international-programs-MSc-Geology');

Route::get('/international-programs-MSc-in-Geoinformatics', function () {
    return view('frontend/international-fee/international-programs-MSc-in-Geoinformatics');
})->name('international-programs-MSc-in-Geoinformatics');

Route::get('/international-programs-BSc-Geography', function () {
    return view('frontend/international-fee/international-programs-BSc-Geography');
})->name('international-programs-BSc-Geography');

Route::get('/international-programs-BSc-Geology', function () {
    return view('frontend/international-fee/international-programs-BSc-Geology');
})->name('international-programs-BSc-Geology');

Route::get('/international-programs-MTech-CSE-in-Artifical-Intelligence', function () {
    return view('frontend/international-fee/international-programs-MTech-CSE-in-Artifical-Intelligence');
})->name('international-programs-MTech-CSE-in-Artifical-Intelligence');

Route::get('/international-programs-MTech-CSE-in-Internet-of-Things', function () {
    return view('frontend/international-fee/international-programs-MTech-CSE-in-Internet-of-Things');
})->name('international-programs-MTech-CSE-in-Internet-of-Things');

Route::get('/international-programs-MTech-CE-in-Water-Resources', function () {
    return view('frontend/international-fee/international-programs-MTech-CE-in-Water-Resources');
})->name('international-programs-MTech-CE-in-Water-Resources');

Route::get('/international-programs-MTech-CE-in-Structural-Engineering', function () {
    return view('frontend/international-fee/international-programs-MTech-CE-in-Structural-Engineering');
})->name('international-programs-MTech-CE-in-Structural-Engineering');

Route::get('/international-programs-MTech-CAD', function () {
    return view('frontend/international-fee/international-programs-MTech-CAD');
})->name('international-programs-MTech-CAD');

Route::get('/international-programs-BTechCE', function () {
    return view('frontend/international-fee/international-programs-BTechCE');
})->name('international-programs-BTechCE');

Route::get('/international-programs-BTechCSE', function () {
    return view('frontend/international-fee/international-programs-BTechCSE');
})->name('international-programs-BTechCSE');

Route::get('/international-programs-BTechME', function () {
    return view('frontend/international-fee/international-programs-BTechME');
})->name('international-programs-BTechME');

Route::get('/international-programs-BTech-Artifical-Intelligence-AI', function () {
    return view('frontend/international-fee/international-programs-BTech-Artifical-Intelligence-AI');
})->name('international-programs-BTech-Artifical-Intelligence-AI');

Route::get('/international-programs-BTech-Mechatronics', function () {
    return view('frontend/international-fee/international-programs-BTech-Mechatronics');
})->name('international-programs-BTech-Mechatronics');
//11

Route::get('/international-programs-BTechLateral-Entry', function () {
    return view('frontend/international-fee/international-programs-BTechLateral-Entry');
})->name('international-programs-BTechLateral-Entry');

Route::get('/international-programs-BTechElectrical-Electronics-Engineering', function () {
    return view('frontend/international-fee/international-programs-BTechElectrical-Electronics-Engineering');
})->name('international-programs-BTechElectrical-Electronics-Engineering');

Route::get('/international-programs-BTechElectronics-Communication-Engineering', function () {
    return view('frontend/international-fee/international-programs-BTechElectronics-Communication-Engineering');
})->name('international-programs-BTechElectronics-Communication-Engineering');

Route::get('/international-programs-BTechCE-CSE-working', function () {
    return view('frontend/international-fee/international-programs-BTechCE-CSE-working');
})->name('international-programs-BTechCE-CSE-working');

Route::get('/international-programs-Master-of-Fine-ArtsMFA', function () {
    return view('frontend/international-fee/international-programs-Master-of-Fine-ArtsMFA');
})->name('international-programs-Master-of-Fine-ArtsMFA');

Route::get('/international-programs-Bachelor-of-Fine-ArtsBFA', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Fine-ArtsBFA');
})->name('international-programs-Bachelor-of-Fine-ArtsBFA');

Route::get('/international-programs-BDes-FDFashion-Design', function () {
    return view('frontend/international-fee/international-programs-BDes-FDFashion-Design');
})->name('international-programs-BDes-FDFashion-Design');

//humanities
Route::get('/international-programs-MA-Economics', function () {
    return view('frontend/international-fee/international-programs-MA-Economics');
})->name('international-programs-MA-Economics');

Route::get('/international-programs-MA-Sociology', function () {
    return view('frontend/international-fee/international-programs-MA-Sociology');
})->name('international-programs-MA-Sociology');

Route::get('/international-programs-MA-Public-Administration', function () {
    return view('frontend/international-fee/international-programs-MA-Public-Administration');
})->name('international-programs-MA-Public-Administration');

Route::get('/international-programs-MA-Political-Science', function () {
    return view('frontend/international-fee/international-programs-MA-Political-Science');
})->name('international-programs-MA-Political-Science');

Route::get('/international-programs-MA-History', function () {
    return view('frontend/international-fee/international-programs-MA-History');
})->name('international-programs-MA-History');

Route::get('/international-programs-MSW', function () {
    return view('frontend/international-fee/international-programs-MSW');
})->name('international-programs-MSW');
//starting
Route::get('/international-programs-BSW', function () {
    return view('frontend/international-fee/international-programs-BSW');
})->name('international-programs-BSW');

Route::get('/international-programs-BA-Sociology', function () {
    return view('frontend/international-fee/international-programs-BA-Sociology');
})->name('international-programs-BA-Sociology');

Route::get('/international-programs-BA-Economics', function () {
    return view('frontend/international-fee/international-programs-BA-Economics');
})->name('international-programs-BA-Economics');

Route::get('/international-programs-BA-Public-Administration', function () {
    return view('frontend/international-fee/international-programs-BA-Public-Administration');
})->name('international-programs-BA-Public-Administration');

Route::get('/international-programs-BA-Political-Science', function () {
    return view('frontend/international-fee/international-programs-BA-Political-Science');
})->name('international-programs-BA-Political-Science');

Route::get('/international-programs-BA-History', function () {
    return view('frontend/international-fee/international-programs-BA-History');
})->name('international-programs-BA-History');

//Royal School of Hotel Management (RSHM)
Route::get('/international-programs-BA-HotelManagement', function () {
    return view('frontend/international-fee/international-programs-BA-HotelManagement');
})->name('international-programs-BA-HotelManagement');

Route::get('/international-programs-BA-in-Culinary-Arts', function () {
    return view('frontend/international-fee/international-programs-BA-in-Culinary-Arts');
})->name('international-programs-BA-in-Culinary-Arts');

Route::get('/international-programs-MSc-Hotel-Management', function () {
    return view('frontend/international-fee/international-programs-MSc-Hotel-Management');
})->name('international-programs-MSc-Hotel-Management');

Route::get('/international-programs-Bachelor-of-Hotel-Management-BHM', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Hotel-Management-BHM');
})->name('international-programs-Bachelor-of-Hotel-Management-BHM');
//Royal School of Information Technology (RSIT)
Route::get('/international-programs-BCA', function () {
    return view('frontend/international-fee/international-programs-BCA');
})->name('international-programs-BCA');

Route::get('/international-programs-MCA', function () {
    return view('frontend/international-fee/international-programs-MCA');
})->name('international-programs-MCA');

Route::get('/international-programs-BSc-IT', function () {
    return view('frontend/international-fee/international-programs-BSc-IT');
})->name('international-programs-BSc-IT');

Route::get('/international-programs-MSc-IT', function () {
    return view('frontend/international-fee/international-programs-MSc-IT');
})->name('international-programs-MSc-IT');

//Royal School of Languages (RSL)
Route::get('/international-programs-MA-English', function () {
    return view('frontend/international-fee/international-programs-MA-English');
})->name('international-programs-MA-English');

Route::get('/international-programs-BA-English', function () {
    return view('frontend/international-fee/international-programs-BA-English');
})->name('international-programs-BA-English');

//Royal School of Law & Administration (RSLA)

Route::get('/international-programs-LLM-Day-Shift', function () {
    return view('frontend/international-fee/international-programs-LLM-Day-Shift');
})->name('international-programs-LLM-Day-Shift');

Route::get('/international-programs-LLM-Morning-Shift', function () {
    return view('frontend/international-fee/international-programs-LLM-Morning-Shift');
})->name('international-programs-LLM-Morning-Shift');

Route::get('/international-programBA-BBA-LLB(Hons)', function () {
    return view('frontend/international-fee/international-programBA-BBA-LLB(Hons)');
})->name('international-programBA-BBA-LLB(Hons)');

Route::get('/international-programBA-LLB-Hons', function () {
    return view('frontend/international-fee/international-programBA-LLB-Hons');
})->name('international-programBA-LLB-Hons');
//Royal School of Library & Information Sciences (RSLIS)
Route::get('/international-programs-Master-of-Library-&-Information-Sciences', function () {
    return view('frontend/international-fee/international-programs-Master-of-Library-&-Information-Sciences');
})->name('international-programs-Master-of-Library-&-Information-Sciences');
//ROYAL SCHOOL OF LIFE SCIENCES (RSLSC)
Route::get('/international-programs-MSc-Botany', function () {
    return view('frontend/international-fee/international-programs-MSc-Botany');
})->name('international-programs-MSc-Botany');

Route::get('/international-programs-MSc-Zoology', function () {
    return view('frontend/international-fee/international-programs-MSc-Zoology');
})->name('international-programs-MSc-Zoology');

Route::get('/international-programs-MSc-ForensicScience', function () {
    return view('frontend/international-fee/international-programs-MSc-ForensicScience');
})->name('international-programs-MSc-ForensicScience');

Route::get('/international-programs-MSc-Forestry', function () {
    return view('frontend/international-fee/international-programs-MSc-Forestry');
})->name('international-programs-MSc-Forestry');

Route::get('/international-programs-BSc-Botany', function () {
    return view('frontend/international-fee/international-programs-BSc-Botany');
})->name('international-programs-BSc-Botany');

Route::get('/international-programs-BSc-Zoology', function () {
    return view('frontend/international-fee/international-programs-BSc-Zoology');
})->name('international-programs-BSc-Zoology');

Route::get('/international-programs-BSc-ForensicScience', function () {
    return view('frontend/international-fee/international-programs-BSc-ForensicScience');
})->name('international-programs-BSc-ForensicScience');

Route::get('/international-programs-BSc-Forestry', function () {
    return view('frontend/international-fee/international-programs-BSc-Forestry');
})->name('international-programs-BSc-Forestry');
//ROYAL SCHOOL OF MEDICAL & ALLIED SCIENCES (RSMAS)

Route::get('/international-programs-Bachelor-of-Physiotherapy-BPT', function () {
    return view('frontend/international-fee/international-programs-Bachelor-of-Physiotherapy-BPT');
})->name('international-programs-Bachelor-of-Physiotherapy-BPT');

Route::get('/international-programs-MasterofPhysiotherapyMPT', function () {
    return view('frontend/international-fee/international-programs-MasterofPhysiotherapyMPT');
})->name('international-programs-MasterofPhysiotherapyMPT');

Route::get('/international-programs-BSc-Nutrition-and-Dietetics', function () {
    return view('frontend/international-fee/international-programs-BSc-Nutrition-and-Dietetics');
})->name('international-programs-BSc-Nutrition-and-Dietetics');

Route::get('/international-programs-MSc-Nutrition', function () {
    return view('frontend/international-fee/international-programs-MSc-Nutrition');
})->name('international-programs-MSc-Nutrition');

Route::get('/international-programs-M-Optometry', function () {
    return view('frontend/international-fee/international-programs-M-Optometry');
})->name('international-programs-M-Optometry');

Route::get('/international-programs-B-Optometry', function () {
    return view('frontend/international-fee/international-programs-B-Optometry');
})->name('international-programs-B-Optometry');

Route::get('/international-programs-B-ScMedical-Technology-BMLT', function () {
    return view('frontend/international-fee/international-programs-B-ScMedical-Technology-BMLT');
})->name('international-programs-B-ScMedical-Technology-BMLT');

Route::get('/international-programs-MSc-MedicalLaboratoryMMLT', function () {
    return view('frontend/international-fee/international-programs-MSc-MedicalLaboratoryMMLT');
})->name('international-programs-MSc-MedicalLaboratoryMMLT');

Route::get('/international-programs-BSc-Dialysis', function () {
    return view('frontend/international-fee/international-programs-BSc-Dialysis');
})->name('international-programs-BSc-Dialysis');

Route::get('/international-programs-TechnologyOTT', function () {
    return view('frontend/international-fee/international-programs-TechnologyOTT');
})->name('international-programs-TechnologyOTT');

Route::get('/international-programs-BSc-Radiography', function () {
    return view('frontend/international-fee/international-programs-BSc-Radiography');
})->name('international-programs-BSc-Radiography');

Route::get('/international-programs-BSc-in-Emergency', function () {
    return view('frontend/international-fee/international-programs-BSc-in-Emergency');
})->name('international-programs-BSc-in-Emergency');

//ROYAL SCHOOL OF TRAVEL & TOURISM MANAGEMENT(RSTTM)

Route::get('/international-programs-BSc-BA-Travel', function () {
    return view('frontend/international-fee/international-programs-BSc-BA-Travel');
})->name('international-programs-BSc-BA-Travel');

Route::get('/international-programs-Master-Travel&Tourism', function () {
    return view('frontend/international-fee/international-programs-Master-Travel&Tourism');
})->name('international-programs-Master-Travel&Tourism');

Route::get('/international-programs-Bachelor-Travel', function () {
    return view('frontend/international-fee/international-programs-Bachelor-Travel');
})->name('international-programs-Bachelor-Travel');

//Examination

Route::get('/examinations', function () {
    return view('frontend/examination/examinations');
})->name('examinations');

Route::get('/examination-members', function () {
    return view('frontend/examination/examination-members');
})->name('examination-members');

Route::get('/examination-diploma', function () {
    return view('frontend/examination/examination-diploma');
})->name('examination-diploma');

Route::get('/examination-post-graduate', function () {
    return view('frontend/examination/examination-post-graduate');
})->name('examination-post-graduate');

Route::get('/examination-under-graduate', function () {
    return view('frontend/examination/examination-under-graduate');
})->name('examination-under-graduate');

Route::get('/examination-phd', function () {
    return view('frontend/examination/examination-phd');
})->name('examination-phd');


//Research
Route::get('/research-devlopment', function () {
    return view('frontend/research/research');
})->name('research');

Route::get('/research-preamble', function () {
    return view('frontend/research/research-preamble');
})->name('research-preamble');

Route::get('/research-r&d-team', function () {
    return view('frontend/research/research-r&d-team');
})->name('research-r&d-team');

Route::get('/research-publication', function () {
    return view('frontend/research/research-publication');
})->name('research-publication');

Route::get('/research-extramural', function () {
    return view('frontend/research/research-extramural');
})->name('research-extramural');

Route::get('/research-seed-grants-projects', function () {
    return view('frontend/research/research-seed-grants-projects');
})->name('research-seed-grants-projects');

Route::get('/research-consultancy-projects', function () {
    return view('frontend/research/research-consultancy-projects');
})->name('research-consultancy-projects');

Route::get('/research-csif', function () {
    return view('frontend/research/research-csif');
})->name('research-csif');

Route::get('/research-patents', function () {
    return view('frontend/research/research-patents');
})->name('research-patents');

Route::get('/research-policies&ethics', function () {
    return view('frontend/research/research-policies&ethics');
})->name('research-policies&ethics');

//Research Department

Route::get('/research-department', function () {
    return view('frontend/research/dept/research-department');
})->name('research-department');

Route::get('/Research_Department_Pure_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Pure_Sciences');
})->name('Research_Department_Pure_Sciences');

Route::get('/Research_Department_Architecture', function () {
    return view('frontend/research/dept/Research_Department_Architecture');
})->name('Research_Department_Architecture');

Route::get('/Research_Department_Bio_sciences', function () {
    return view('frontend/research/dept/Research_Department_Bio_sciences');
})->name('Research_Department_Bio_sciences');

Route::get('/Research_Department_Business', function () {
    return view('frontend/research/dept/Research_Department_Business');
})->name('Research_Department_Business');

Route::get('/Research_Department_Commerce', function () {
    return view('frontend/research/dept/Research_Department_Commerce');
})->name('Research_Department_Commerce');

Route::get('/Research_Department_Communications_Media', function () {
    return view('frontend/research/dept/Research_Department_Communications_Media');
})->name('Research_Department_Communications_Media');

Route::get('/Research_Department_Design', function () {
    return view('frontend/research/dept/Research_Department_Design');
})->name('Research_Department_Design');

Route::get('/Research_Department_Engineering_Technology', function () {
    return view('frontend/research/dept/Research_Department_Engineering_Technology');
})->name('Research_Department_Engineering_Technology');

Route::get('/Research_Department_Environmental_Earth_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Environmental_Earth_Sciences');
})->name('Research_Department_Environmental_Earth_Sciences');

Route::get('/Research_Department_Fashion_Design_Technology', function () {
    return view('frontend/research/dept/Research_Department_Fashion_Design_Technology');
})->name('Research_Department_Fashion_Design_Technology');

Route::get('/Research_Department_Fine_Arts', function () {
    return view('frontend/research/dept/Research_Department_Fine_Arts');
})->name('Research_Department_Fine_Arts');

Route::get('/Research_Department_Humanities_Social_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Humanities_Social_Sciences');
})->name('Research_Department_Humanities_Social_Sciences');

Route::get('/Research_Department_Information_Technology', function () {
    return view('frontend/research/dept/Research_Department_Information_Technology');
})->name('Research_Department_Information_Technology');

Route::get('/Research_Department_Languages', function () {
    return view('frontend/research/dept/Research_Department_Languages');
})->name('Research_Department_Languages');

Route::get('/Research_Department_Library_Information_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Library_Information_Sciences');
})->name('Research_Department_Library_Information_Sciences');

Route::get('/Research_Department_Law_Administration', function () {
    return view('frontend/research/dept/Research_Department_Law_Administration');
})->name('Research_Department_Law_Administration');

Route::get('/Research_Department_Life_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Life_Sciences');
})->name('Research_Department_Life_Sciences');

Route::get('/Research_Department_Medical_Allied_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Medical_Allied_Sciences');
})->name('Research_Department_Medical_Allied_Sciences');

Route::get('/Research_Department_Nursing', function () {
    return view('frontend/research/dept/Research_Department_Nursing');
})->name('Research_Department_Nursing');

Route::get('/Research_Department_Travel_Tourism', function () {
    return view('frontend/research/dept/Research_Department_Travel_Tourism');
})->name('Research_Department_Travel_Tourism');

Route::get('/Research_Department_Pharmacy', function () {
    return view('frontend/research/dept/Research_Department_Pharmacy');
})->name('Research_Department_Pharmacy');

Route::get('/Research_Department_Botany', function () {
    return view('frontend/research/dept/Research_Department_Botany');
})->name('Research_Department_Botany');

Route::get('/Research_Department_History', function () {
    return view('frontend/research/dept/Research_Department_History');
})->name('Research_Department_History');

Route::get('/Research_Department_Medical_Lab', function () {
    return view('frontend/research/dept/Research_Department_Medical_Lab');
})->name('Research_Department_Medical_Lab');

Route::get('/Research_Department_Microbiology', function () {
    return view('frontend/research/dept/Research_Department_Microbiology');
})->name('Research_Department_Microbiology');

Route::get('/Research_Department_OperationTheatre', function () {
    return view('frontend/research/dept/Research_Department_OperationTheatre');
})->name('Research_Department_OperationTheatre');

Route::get('/Research_Department_Optometry', function () {
    return view('frontend/research/dept/Research_Department_Optometry');
})->name('Research_Department_Optometry');

Route::get('/Research_Department_Political_Science', function () {
    return view('frontend/research/dept/Research_Department_Political_Science');
})->name('Research_Department_Political_Science');

Route::get('/Research_Department_Public_Administration', function () {
    return view('frontend/research/dept/Research_Department_Public_Administration');
})->name('Research_Department_Public_Administration');

Route::get('/Research_Department_Social_Work', function () {
    return view('frontend/research/dept/Research_Department_Social_Work');
})->name('Research_Department_Social_Work');

Route::get('/Research_Department_Sociology', function () {
    return view('frontend/research/dept/Research_Department_Sociology');
})->name('Research_Department_Sociology');

Route::get('/Research_Department_Zoology', function () {
    return view('frontend/research/dept/Research_Department_Zoology');
})->name('Research_Department_Zoology');

Route::get('/Research_Department_Sociology', function () {
    return view('frontend/research/dept/Research_Department_Sociology');
})->name('Research_Department_Sociology');

Route::get('/Research_Deptment_Radiography', function () {
    return view('frontend/research/dept/Research_Deptment_Radiography');
})->name('Research_Deptment_Radiography');
// sub link

Route::get('/Research_Department_Physics', function () {
    return view('frontend/research/dept/Research_Department_Physics');
})->name('Research_Department_Physics');

Route::get('/Research_Department_Chemistry', function () {
    return view('frontend/research/dept/Research_Department_Chemistry');
})->name('Research_Department_Chemistry');

Route::get('/Research_Department_Mathematics', function () {
    return view('frontend/research/dept/Research_Department_Mathematics');
})->name('Research_Department_Mathematics');

Route::get('/Research_Department_Biochemistry', function () {
    return view('frontend/research/dept/Research_Department_Biochemistry');
})->name('Research_Department_Biochemistry');

Route::get('/Research_Department_Biotechnology', function () {
    return view('frontend/research/dept/Research_Department_Biotechnology');
})->name('Research_Department_Biotechnology');

Route::get('/Research_Department_Microbiology', function () {
    return view('frontend/research/dept/Research_Department_Microbiology');
})->name('Research_Department_Microbiology');

Route::get('/Research_Department_Food_Technology', function () {
    return view('frontend/research/dept/Research_Department_Food_Technology');
})->name('Research_Department_Food_Technology');

Route::get('/Research_Department_CSE', function () {
    return view('frontend/research/dept/Research_Department_CSE');
})->name('Research_Department_CSE');

Route::get('/Research_Department_Mechanical_Engineering', function () {
    return view('frontend/research/dept/Research_Department_Mechanical_Engineering');
})->name('Research_Department_Mechanical_Engineering');

Route::get('/Research_Department_Civil_Engineering', function () {
    return view('frontend/research/dept/Research_Department_Civil_Engineering');
})->name('Research_Department_Civil_Engineering');

Route::get('/Research_Department_Geography', function () {
    return view('frontend/research/dept/Research_Department_Geography');
})->name('Research_Department_Geography');

Route::get('/Research_Department_Environmental_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Environmental_Sciences');
})->name('Research_Department_Environmental_Sciences');

Route::get('/Research_Department_Geology', function () {
    return view('frontend/research/dept/Research_Department_Geology');
})->name('Research_Department_Geology');

Route::get('/Research_Department_Forensic_Sciences', function () {
    return view('frontend/research/dept/Research_Department_Forensic_Sciences');
})->name('Research_Department_Forensic_Sciences');

Route::get('/Research_Department_Forestry', function () {
    return view('frontend/research/dept/Research_Department_Forestry');
})->name('Research_Department_Forestry');

Route::get('/Research_Department_Forestry', function () {
    return view('frontend/research/dept/Research_Department_Forestry');
})->name('Research_Department_Forestry');

//research & Publication

Route::get('/research-publication-overview', function () {
    return view('frontend/research&publication/research-publication-overview');
})->name('research-publication-overview');

Route::get('/Publications-2017-18', function () {
    return view('frontend/research&publication/Publications-2017-18');
})->name('Publications-2017-18');

Route::get('/Publications-2018-19', function () {
    return view('frontend/research&publication/Publications-2018-19');
})->name('Publications-2018-19');

Route::get('/Publications-2019-20', function () {
    return view('frontend/research&publication/Publications-2019-20');
})->name('Publications-2019-20');

Route::get('/Publications-2020-21', function () {
    return view('frontend/research&publication/Publications-2020-21');
})->name('Publications-2020-21');

Route::get('/Publications-2021-22', function () {
    return view('frontend/research&publication/Publications-2021-22');
})->name('Publications-2021-22');

Route::get('/Publications-2022-23', function () {
    return view('frontend/research&publication/Publications-2022-23');
})->name('Publications-2022-23');


// lp page
Route::get('/lp', function () {
    return view('frontend/lp/lp');
})->name('lp');

//conference
Route::get('/bioe3-conference', function () {
    return view('frontend/conference/bioe3-conference');
})->name('bioe3-conference');

Route::get('/climate-change-and-livelihood-in-northeast-india', function () {
    return view('frontend/conference/climate');
})->name('climate-change-and-livelihood-in-northeast-india');

Route::get('/synergy-for-energy-challenges-and-opportunities-in-north-east-india', function () {
    return view('frontend/conference/minerials');
})->name('synergy-for-energy-challenges-and-opportunities-in-north-east-india');

//blog
Route::get('/blog', function () {
    return view('frontend/blog/blog');
})->name('blog');

Route::get('/private-university-in-assam', function () {
    return view('frontend/blog/private-university-in-assam');
})->name('private-university-in-assam');

Route::get('/best-university-in-north-east-india', function () {
    return view('frontend/blog/best-university-in-north-east-india');
})->name('best-university-in-north-east-india');

Route::get('/a-complete-guide-to-studying-btech-in-guwahati', function () {
    return view('frontend/blog/a-complete-guide-to-studying-btech-in-guwahati');
})->name('a-complete-guide-to-studying-btech-in-guwahati');

Route::get('/why-royal-global-university-is-considered-the-best-university-in-guwahati', function () {
    return view('frontend/blog/why-royal-global-university-is-considered-the-best-university-in-guwahati');
})->name('why-royal-global-university-is-considered-the-best-university-in-guwahati');

//Quick link
Route::get('/grievance', function () {
    return view('frontend/quicklink/grievance');
})->name('grievance');

Route::get('/annual-report', function () {
    return view('frontend/quicklink/annual-reports');
})->name('annual-report');

Route::get('/multi-disciplinary', function () {
    return view('frontend/academics/multi-disciplinary');
})->name('multi-disciplinary');

Route::get('/multi-disciplinary', function () {
    return view('frontend/academics/multi-disciplinary');
})->name('multi-disciplinary');


//Cell
Route::get('/phd-cell', function () {
    return view('frontend/cell/phd-cell');
})->name('phd-cell');

Route::get('/cisr', function () {
    return view('frontend/cell/cisr');
})->name('cisr');

//media-corner

Route::get('/media-corner', function () {
    return view('frontend/media-corner/media-corner');
})->name('media-corner');

Route::get('/press-coverage', function () {
    return view('frontend/media-corner/press-coverage');
})->name('press-coverage');

Route::get('/chinese-diplomats-visit-royal-global-university-for-educational-collaboration', function () {
    return view('frontend/media-corner/news37');
})->name('chinese-diplomats-visit-royal-global-university-for-educational-collaboration');

Route::get('/RGU-Launches-Integrated-BA-and-BSc-Programs-with-Civil-Services-Coaching-by-SPM-IAS-Academy', function () {
    return view('frontend/media-corner/news1');
})->name('RGU-Launches-Integrated-BA-and-BSc-Programs-with-Civil-Services-Coaching-by-SPM-IAS-Academy');

Route::get('/RGU-Celebrates-Commendation-Day-for-Placed-Graduating-Students', function () {
    return view('frontend/media-corner/news2');
})->name('RGU-Celebrates-Commendation-Day-for-Placed-Graduating-Students');

Route::get('/129-RGU-Students-Awarded-Scholarships-for-Outstanding-Academic-Performance', function () {
    return view('frontend/media-corner/news3');
})->name('129-RGU-Students-Awarded-Scholarships-for-Outstanding-Academic-Performance');

Route::get('/rgu-awarded-most-eminent-private-university-of-north-east-2025', function () {
    return view('frontend/media-corner/news4');
})->name('rgu-awarded-most-eminent-private-university-of-north-east-2025');

Route::get('/ai-dependence-is-making-slaves-mind-is-far-superior-to-technology-jnu-vc-prof-santishree-pandit-at-rgu', function () {
    return view('frontend/media-corner/news5');
})->name('ai-dependence-is-making-slaves-mind-is-far-superior-to-technology-jnu-vc-prof-santishree-pandit-at-rgu');

Route::get('/dr-bhupen-hazarika-centre-for-creativity-at-royal-global-university', function () {
    return view('frontend/media-corner/news6');
})->name('dr-bhupen-hazarika-centre-for-creativity-at-royal-global-university');

Route::get('/veteran-journalist-pj-baruah-joins-royal-global-university', function () {
    return view('frontend/media-corner/news7');
})->name('veteran-journalist-pj-baruah-joins-royal-global-university');

Route::get('/lookbook-launched-by-royal-school-of-fashion-design-&-technology', function () {
    return view('frontend/media-corner/news8');
})->name('lookbook-launched-by-royal-school-of-fashion-design-&-technology');

Route::get('/world-environment-day-observed-at-rgu', function () {
    return view('frontend/media-corner/news9');
})->name('world-environment-day-observed-at-rgu');

Route::get('/bhutan-to-strengthen-relations-with-institutions-in-assam-bhutanese-delegation-at-rgu', function () {
    return view('frontend/media-corner/news10');
})->name('bhutan-to-strengthen-relations-with-institutions-in-assam-bhutanese-delegation-at-rgu');

Route::get('/industry-titan-&-former-tata-motors-chief-ravi-kant-joins-rgu-advisory-board', function () {
    return view('frontend/media-corner/news11');
})->name('industry-titan-&-former-tata-motors-chief-ravi-kant-joins-rgu-advisory-board');

Route::get('/rgu-signs-mou-with-crpf-offers-new-scholarships-for-wards-of-security-forces', function () {
    return view('frontend/media-corner/news12');
})->name('rgu-signs-mou-with-crpf-offers-new-scholarships-for-wards-of-security-forces');

Route::get('/electric-vehicle-laboratory-skill-development-centre-inaugurated-at-rgu', function () {
    return view('frontend/media-corner/news13');
})->name('electric-vehicle-laboratory-skill-development-centre-inaugurated-at-rgu');

Route::get('/memories-and-melodies-echo-as-doyens-recall-personal-moments-with-kalaguru', function () {
    return view('frontend/media-corner/news14');
})->name('memories-and-melodies-echo-as-doyens-recall-personal-moments-with-kalaguru');

Route::get('/ahir-bhairav-musical-gathering-for-cultural-enrichment-at-rgu', function () {
    return view('frontend/media-corner/news15');
})->name('ahir-bhairav-musical-gathering-for-cultural-enrichment-at-rgu');

Route::get('/academic-exchange-of-rgu-students-at-krirk-university-bangkok', function () {
    return view('frontend/media-corner/news16');
})->name('academic-exchange-of-rgu-students-at-krirk-university-bangkok');

Route::get('/rgu-faculty-awarded-at-icpps-south-korea', function () {
    return view('frontend/media-corner/news17');
})->name('rgu-faculty-awarded-at-icpps-south-korea');

Route::get('/week-long-fdp-on-indigenous-knowledge-systems-held-at-rgu', function () {
    return view('frontend/media-corner/news18');
})->name('week-long-fdp-on-indigenous-knowledge-systems-held-at-rgu');

Route::get('/sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu', function () {
    return view('frontend/media-corner/news19');
})->name('sugandhi-pokhilar-kobi-hiren-bhattacharyya-remembered-at-rgu');

Route::get('/zimbabwe-education-delegation-explores-collaboration-with-royal-global-university', function () {
    return view('frontend/media-corner/news20');
})->name('zimbabwe-education-delegation-explores-collaboration-with-royal-global-university');

Route::get('/rgu-offers-scholarship-opportunities-for-wards-of-police-personnel-of-8-ne-states', function () {
    return view('frontend/media-corner/news21');
})->name('rgu-offers-scholarship-opportunities-for-wards-of-police-personnel-of-8-ne-states');

Route::get('/rgu-outreach-awareness-on-conservation-of-salamander-habitat', function () {
    return view('frontend/media-corner/news22');
})->name('rgu-outreach-awareness-on-conservation-of-salamander-habitat');

Route::get('/a-living-call-to-memory-the-bhupen-hazarika-museum-beckons', function () {
    return view('frontend/media-corner/news23');
})->name('a-living-call-to-memory-the-bhupen-hazarika-museum-beckons');

Route::get('/icmr-awards-3-start-up-grants-worth-over-1-crore-to-rgu-faculty', function () {
    return view('frontend/media-corner/news24');
})->name('icmr-awards-3-start-up-grants-worth-over-1-crore-to-rgu-faculty');

Route::get('/rgu-signs-mou-with-indira-gandhi-national-centre-for-the-arts-ignca-an-autonomous-trust-of-ministry-of-culture-govt-of-india', function () {
    return view('frontend/media-corner/news25');
})->name('rgu-signs-mou-with-indira-gandhi-national-centre-for-the-arts-ignca-an-autonomous-trust-of-ministry-of-culture-govt-of-india');

Route::get('/union-education-minister-dharmendra-pradhan-to-grace-rgus-5th-convocation', function () {
    return view('frontend/media-corner/news26');
})->name('union-education-minister-dharmendra-pradhan-to-grace-rgus-5th-convocation');

Route::get('/indian-rupee-symbol-creator-interacts-with-design-and-architecture-students-at-royal-global-university', function () {
    return view('frontend/media-corner/news27');
})->name('indian-rupee-symbol-creator-interacts-with-design-and-architecture-students-at-royal-global-university');

Route::get('/royal-global-universitys-21-day-deeksharambh-induction-programme-inaugurated', function () {
    return view('frontend/media-corner/news28');
})->name('royal-global-universitys-21-day-deeksharambh-induction-programme-inaugurated');

Route::get('/renowned-actor-ravi-sharma-interacts-with-freshers-at-royal-global-university', function () {
    return view('frontend/media-corner/news29');
})->name('renowned-actor-ravi-sharma-interacts-with-freshers-at-royal-global-university');

Route::get('/rgu-student-awarded-funding-grant-by-cern-geneva', function () {
    return view('frontend/media-corner/news30');
})->name('rgu-student-awarded-funding-grant-by-cern-geneva');

Route::get('/rgu-students-gain-learning-exposure-at-inti-international-university', function () {
    return view('frontend/media-corner/news31');
})->name('rgu-students-gain-learning-exposure-at-inti-international-university');

Route::get('/royal-global-university-to-confer-honorary-dsc-degree-upon-dr-trehan', function () {
    return view('frontend/media-corner/news32');
})->name('royal-global-university-to-confer-honorary-dsc-degree-upon-dr-trehan');

Route::get('/synthesis-2025-innovative-creations-showcased-by-rgu-fashion-design-and-technology-graduates', function () {
    return view('frontend/media-corner/news33');
})->name('synthesis-2025-innovative-creations-showcased-by-rgu-fashion-design-and-technology-graduates');

Route::get('/apply-critical-thinking-and-creativity-for-a-successful-living-iitg-director-prof-jalihal-to-students-of-rgu', function () {
    return view('frontend/media-corner/news34');
})->name('apply-critical-thinking-and-creativity-for-a-successful-living-iitg-director-prof-jalihal-to-students-of-rgu');

Route::get('/royal-global-university-celebrates-79th-independence-day', function () {
    return view('frontend/media-corner/news35');
})->name('royal-global-university-celebrates-79th-independence-day');

Route::get('/500-newly-admitted-students-awarded-scholarships-by-royal-global-university', function () {
    return view('frontend/media-corner/news36');
})->name('500-newly-admitted-students-awarded-scholarships-by-royal-global-university');

Route::get('/supreme-court-judge-unveils-one-of-india’s-largest-gavels-at-royal-global-university', function () {
    return view('frontend/media-corner/news38');
})->name('supreme-court-judge-unveils-one-of-india’s-largest-gavels-at-royal-global-university');

Route::get('/aicte-vaani-grant-sanctioned-to-rgu-for-indian-knowledge-systems-conference', function () {
    return view('frontend/media-corner/news39');
})->name('aicte-vaani-grant-sanctioned-to-rgu-for-indian-knowledge-systems-conference');

Route::get('/national-leadership-conclave-2025-from-11th-september-at-royal-global-university', function () {
    return view('frontend/media-corner/news40');
})->name('national-leadership-conclave-2025-from-11th-september-at-royal-global-university');

Route::get('/former-tata-motors-ceo-to-talk-on-leading-from-the-back-to-achieve-the-impossible-at-rgu', function () {
    return view('frontend/media-corner/news41');
})->name('former-tata-motors-ceo-to-talk-on-leading-from-the-back-to-achieve-the-impossible-at-rgu');

Route::get('/india’s-legendary-physiotherapist-prof-ali-irani-takes-session-at-royal-global-university', function () {
    return view('frontend/media-corner/news42');
})->name('india’s-legendary-physiotherapist-prof-ali-irani-takes-session-at-royal-global-university');


//IKS Faculty Profile

Route::get('/faculty-monalisha-medhi', function () {
    return view('frontend/facultyprofile/iks/monalisha-medhi');
})->name('faculty-monalisha-medhi');

Route::get('/faculty-pranab-sarma', function () {
    return view('frontend/facultyprofile/iks/pranab-sarma');
})->name('faculty-pranab-sarma');

Route::get('/faculty-saswati-bordoloi', function () {
    return view('frontend/facultyprofile/iks/saswati-bordoloi');
})->name('faculty-saswati-bordoloi');

Route::get('/faculty-siddhant-medhi', function () {
    return view('frontend/facultyprofile/iks/siddhant-medhi');
})->name('faculty-siddhant-medhi');

Route::get('/faculty-tinku', function () {
    return view('frontend/facultyprofile/iks/tinku');
})->name('faculty-tinku');

//RSAG Faculty Profile
Route::get('/faculty-supriyo-sen', function () {
    return view('frontend/facultyprofile/rsa/supriyo-sen-rsa');
})->name('faculty-supriyo-sen');

Route::get('/faculty-Mehjabin-Rahman', function () {
    return view('frontend/facultyprofile/rsag/Mehjabin-Rahman');
})->name('faculty-Mehjabin-Rahman');

//RSET Facuilty Profile

Route::get('/faculty-jemima-yasmin', function () {
    return view('frontend/facultyprofile/rset/jemima-yasmin');
})->name('faculty-jemima-yasmin');

Route::get('/faculty-vanita-agarwal', function () {
    return view('frontend/facultyprofile/rset/vanita-agarwal');
})->name('faculty-vanita-agarwal');

Route::get('/faculty-bishal-podder', function () {
    return view('frontend/facultyprofile/rset/bishal-podder');
})->name('faculty-bishal-podder');

Route::get('/faculty-biswajit-choudhury', function () {
    return view('frontend/facultyprofile/rset/biswajit-choudhury');
})->name('faculty-biswajit-choudhury');

Route::get('/faculty-diganta-munshi', function () {
    return view('frontend/facultyprofile/rset/diganta-munshi');
})->name('faculty-diganta-munshi');

Route::get('/faculty-zunaid-ahmed', function () {
    return view('frontend/facultyprofile/rset/zunaid-ahmed');
})->name('faculty-zunaid-ahmed');

Route::get('/faculty-akangkhi-borah', function () {
    return view('frontend/facultyprofile/rset/akangkhi-borah');
})->name('faculty-akangkhi-borah');

Route::get('/faculty-ankita-goyal-agarwala', function () {
    return view('frontend/facultyprofile/rset/ankita-goyal-agarwala');
})->name('faculty-ankita-goyal-agarwala');

Route::get('/faculty-anupam-das', function () {
    return view('frontend/facultyprofile/rset/anupam-das');
})->name('faculty-anupam-das');

Route::get('/faculty-nayan-jyoti-kalita', function () {
    return view('frontend/facultyprofile/rset/nayan-jyoti-kalita');
})->name('faculty-nayan-jyoti-kalita');

Route::get('/faculty-nilakshi-deka', function () {
    return view('frontend/facultyprofile/rset/nilakshi-deka');
})->name('faculty-nilakshi-deka');

Route::get('/faculty-rashel-sarkar', function () {
    return view('frontend/facultyprofile/rset/rashel-sarkar');
})->name('faculty-rashel-sarkar');

Route::get('/faculty-samarjit-das', function () {
    return view('frontend/facultyprofile/rset/samarjit-das');
})->name('faculty-samarjit-das');

Route::get('/faculty-saurabh-sutradhar', function () {
    return view('frontend/facultyprofile/rset/saurabh-sutradhar');
})->name('faculty-saurabh-sutradhar');

Route::get('/faculty-spandan-barthakur', function () {
    return view('frontend/facultyprofile/rset/spandan-barthakur');
})->name('faculty-spandan-barthakur');

Route::get('/dr-shwetambara-verma', function () {
    return view('frontend/facultyprofile/rset/shwetambara-verma');
})->name('dr-shwetambara-verma');

Route::get('/faculty-deepjyoti-choudhury', function () {
    return view('frontend/facultyprofile/rset/deepjyoti-choudhury');
})->name('faculty-deepjyoti-choudhury');

Route::get('/faculty-dipankar-dutta', function () {
    return view('frontend/facultyprofile/rset/dipankar-dutta');
})->name('faculty-dipankar-dutta');

Route::get('/faculty-abhijeet-dey', function () {
    return view('frontend/facultyprofile/rset/abhijeet-dey');
})->name('faculty-abhijeet-dey');

Route::get('/faculty-antara-banerjee', function () {
    return view('frontend/facultyprofile/rset/antara-banerjee');
})->name('faculty-antara-banerjee');

Route::get('/faculty-bonisha-borah', function () {
    return view('frontend/facultyprofile/rset/bonisha-borah');
})->name('faculty-bonisha-borah');

Route::get('/faculty-chandra-upadhyaya', function () {
    return view('frontend/facultyprofile/rset/chandra-upadhyaya');
})->name('faculty-chandra-upadhyaya');

Route::get('/faculty-raisa-tamsin-hussain', function () {
    return view('frontend/facultyprofile/rset/raisa-tamsin-hussain');
})->name('faculty-raisa-tamsin-hussain');

Route::get('/faculty-rajesh-deb', function () {
    return view('frontend/facultyprofile/rset/rajesh-deb');
})->name('faculty-rajesh-deb');

Route::get('/faculty-rishikesh-duarah', function () {
    return view('frontend/facultyprofile/rset/rishikesh-duarah');
})->name('faculty-rishikesh-duarah');

Route::get('/faculty-shehnaz-ara-rahman', function () {
    return view('frontend/facultyprofile/rset/shehnaz-ara-rahman');
})->name('faculty-shehnaz-ara-rahman');

Route::get('/faculty-shinjini-paul-choudhury', function () {
    return view('frontend/facultyprofile/rset/shinjini-paul-choudhury');
})->name('faculty-shinjini-paul-choudhury');

//RSL Faculty Profile

Route::get('/faculty-tushti-sharma', function () {
    return view('frontend/facultyprofile/rsl/tushti-sharma');
})->name('faculty-tushti-sharma');

Route::get('/faculty-anjali-kumar', function () {
    return view('frontend/facultyprofile/rsl/anjali-kumar');
})->name('faculty-anjali-kumar');

Route::get('/faculty-debarchana-baruah', function () {
    return view('frontend/facultyprofile/rsl/debarchana-baruah');
})->name('faculty-debarchana-baruah');

Route::get('/Dr-Nandana-Dutta', function () {
    return view('frontend/facultyprofile/rsl/nandana');
})->name('Dr-Nandana-Dutta');

//RSA Faculty Profile

Route::get('/faculty-hari-prasad-agarwal', function () {
    return view('frontend/facultyprofile/rsa/hari-prasad-agarwal');
})->name('faculty-hari-prasad-agarwal');

Route::get('/faculty-jagriti-pathak', function () {
    return view('frontend/facultyprofile/rsa/jagriti-pathak');
})->name('faculty-jagriti-pathak');

Route::get('/faculty-barnali-chakraborty', function () {
    return view('frontend/facultyprofile/rsa/barnali-chakraborty');
})->name('faculty-barnali-chakraborty');

Route::get('/faculty-barsha-kunda', function () {
    return view('frontend/facultyprofile/rsa/barsha-kunda');
})->name('faculty-barsha-kunda');

Route::get('/faculty-Bhola-Saha', function () {
    return view('frontend/facultyprofile/rsa/Bhola-Saha');
})->name('faculty-Bhola-Saha');

Route::get('/faculty-kasturi-borah', function () {
    return view('frontend/facultyprofile/rsa/kasturi-borah');
})->name('faculty-kasturi-borah');

Route::get('/faculty-pooja-singh', function () {
    return view('frontend/facultyprofile/rsa/pooja-singh');
})->name('faculty-pooja-singh');

Route::get('/faculty-pratyasha-das', function () {
    return view('frontend/facultyprofile/rsa/pratyasha-das');
})->name('faculty-pratyasha-das');

Route::get('/faculty-ritu-rani', function () {
    return view('frontend/facultyprofile/rsa/ritu-rani');
})->name('faculty-ritu-rani');

Route::get('/faculty-sanchari-kar', function () {
    return view('frontend/facultyprofile/rsa/sanchari-kar');
})->name('faculty-sanchari-kar');


Route::get('/faculty-dr-mukta-agarwal', function () {
    return view('frontend/facultyprofile/rsp/mukta');
})->name('faculty-dr-mukta-agarwal');

Route::get('/faculty-Diksha-Dutta', function () {
    return view('frontend/facultyprofile/rsa/Diksha-Dutta');
})->name('faculty-Diksha-Dutta');

//RSP Faculty Profile
Route::get('/faculty-anju-das', function () {
    return view('frontend/facultyprofile/rsp/anju-das');
})->name('faculty-anju-das');

Route::get('/faculty-ayesha-aktar-khanam', function () {
    return view('frontend/facultyprofile/rsp/ayesha-aktar-khanam');
})->name('faculty-ayesha-aktar-khanam');

Route::get('/faculty-bhaskar-jyoti-pathak', function () {
    return view('frontend/facultyprofile/rsp/bhaskar-jyoti-pathak');
})->name('faculty-bhaskar-jyoti-pathak');

Route::get('/faculty-hadiuz-zaman', function () {
    return view('frontend/facultyprofile/rsp/hadiuz-zaman');
})->name('faculty-hadiuz-zaman');

Route::get('/faculty-mukta-agrawal', function () {
    return view('frontend/facultyprofile/rsp/mukta-agrawal');
})->name('faculty-mukta-agrawal');

Route::get('/faculty-neelakshi-sharma', function () {
    return view('frontend/facultyprofile/rsp/neelakshi-sharma');
})->name('faculty-neelakshi-sharma');

Route::get('/faculty-nilutpal-hazarika', function () {
    return view('frontend/facultyprofile/rsp/nilutpal-hazarika');
})->name('faculty-nilutpal-hazarika');

Route::get('/faculty-sudarshana', function () {
    return view('frontend/facultyprofile/rsp/sudarshana');
})->name('faculty-sudarshana');

Route::get('/faculty-tanmay-sarma', function () {
    return view('frontend/facultyprofile/rsp/tanmay-sarma');
})->name('faculty-tanmay-sarma');

Route::get('/faculty-tina-bania', function () {
    return view('frontend/facultyprofile/rsp/tina-bania');
})->name('faculty-tina-bania');


Route::get('/faculty-dr-mukta-agarwal', function () {
    return view('frontend/facultyprofile/rsp/mukta');
})->name('faculty-dr-mukta-agarwal');

Route::get('/faculty-prithviraj-chakraborty', function () {
    return view('frontend/facultyprofile/rsp/prithviraj-chakraborty');
})->name('faculty-dprithviraj-chakraborty');

Route::get('/faculty-dr-suman-kumar', function () {
    return view('frontend/facultyprofile/rsp/suman-kumar');
})->name('faculty-dr-suman-kumar');

Route::get('/faculty-aitilaris', function () {
    return view('frontend/facultyprofile/rsp/aitilaris');
})->name('faculty-aitilaris');

Route::get('/faculty-debapurba', function () {
    return view('frontend/facultyprofile/rsp/debapurba');
})->name('faculty-debapurba');

Route::get('/himanta-saikia', function () {
    return view('frontend/facultyprofile/rsp/himanta-saikia');
})->name('himanta-saikia');

Route::get('/lila-nath', function () {
    return view('frontend/facultyprofile/rsp/lila-nath');
})->name('lila-nath');

Route::get('/ch-m-m-prasad-rao', function () {
    return view('frontend/facultyprofile/rsp/m-prasad-rao');
})->name('m-prasad-rao');

Route::get('/madhusmita-gogoi', function () {
    return view('frontend/facultyprofile/rsp/madhusmita-gogoi');
})->name('madhusmita-gogoi');

Route::get('/mevareen', function () {
    return view('frontend/facultyprofile/rsp/mevareen');
})->name('mevareen');

Route::get('/moidul-islam', function () {
    return view('frontend/facultyprofile/rsp/moidul-islam');
})->name('moidul-islam');

Route::get('/payal-dasgupta', function () {
    return view('frontend/facultyprofile/rsp/payal-dasgupta');
})->name('payal-dasgupta');

Route::get('/rakibur-rahman', function () {
    return view('frontend/facultyprofile/rsp/rakibur-rahman');
})->name('rakibur-rahman');

Route::get('/sabnam-nargis', function () {
    return view('frontend/facultyprofile/rsp/sabnam-nargis');
})->name('sabnam-nargis');

Route::get('/sumi-barman', function () {
    return view('frontend/facultyprofile/rsp/sumi-barman');
})->name('sumi-barman');

//RSLSC Faculty Profile

Route::get('/faculty-romeet-saha', function () {
    return view('frontend/facultyprofile/rslsc/romeet-saha');
})->name('faculty-romeet-saha');

Route::get('/faculty-arati-sharma', function () {
    return view('frontend/facultyprofile/rslsc/arati-sharma');
})->name('faculty-arati-sharma');

Route::get('/faculty-dr-anirban-banik', function () {
    return view('frontend/facultyprofile/rslsc/anirban-banik');
})->name('faculty-dr-anirban-banik');

Route::get('/faculty-dr-pallabi-borah', function () {
    return view('frontend/facultyprofile/rslsc/pallabi-borah');
})->name('faculty-dr-pallabi-borah');

Route::get('/faculty-dr-pundarikaksha-das', function () {
    return view('frontend/facultyprofile/rslsc/pundarikaksha-das');
})->name('faculty-dr-pundarikaksha-das');

Route::get('/faculty-arvind-dwivedi', function () {
    return view('frontend/facultyprofile/rslsc/arvind');
})->name('faculty-arvind-dwivedi');

Route::get('/faculty-sthiti-dutta', function () {
    return view('frontend/facultyprofile/rslsc/stithi');
})->name('faculty-sthiti-dutta');

//RSMAS FACULTY Profile

Route::get('/faculty-priyanka-bhattacharyya', function () {
    return view('frontend/facultyprofile/rsmas/priyanka');
})->name('faculty-priyanka-bhattacharyya');

Route::get('/faculty-debjani-das', function () {
    return view('frontend/facultyprofile/rsmas/debjani');
})->name('faculty-debjani-das');

Route::get('/faculty-dikshita-rabha', function () {
    return view('frontend/facultyprofile/rsmas/dikshita-rabha');
})->name('faculty-dikshita-rabha');

Route::get('/faculty-himashree-medhi', function () {
    return view('frontend/facultyprofile/rsmas/himashree-medhi');
})->name('faculty-himashree-medhi');

Route::get('/faculty-phurailatpam-jeny-sharma', function () {
    return view('frontend/facultyprofile/rsmas/jeny-sharma');
})->name('faculty-phurailatpam-jeny-sharma');

Route::get('/faculty-kangkana-goswami', function () {
    return view('frontend/facultyprofile/rsmas/kangkana-goswami');
})->name('faculty-kangkana-goswami');

Route::get('/faculty-lopa-das', function () {
    return view('frontend/facultyprofile/rsmas/lopa-das');
})->name('faculty-lopa-das');

Route::get('/faculty-madhumita-das', function () {
    return view('frontend/facultyprofile/rsmas/madhumita-das');
})->name('faculty-madhumita-das');

Route::get('/faculty-dr-madhusmita-koch', function () {
    return view('frontend/facultyprofile/rsmas/madhusmita-koch');
})->name('faculty-dr-madhusmita-koch');

Route::get('/faculty-pallabi-sarmah', function () {
    return view('frontend/facultyprofile/rsmas/pallabi-sarmah');
})->name('faculty-pallabi-sarmah');

Route::get('/faculty-rohit-sarma', function () {
    return view('frontend/facultyprofile/rsmas/rohit-sarma');
})->name('faculty-rohit-sarma');

Route::get('/faculty-somyata-c-satpathy-sarma', function () {
    return view('frontend/facultyprofile/rsmas/somyata-sarma');
})->name('faculty-somyata-c-satpathy-sarma');

Route::get('/faculty-sonia-lakhotia', function () {
    return view('frontend/facultyprofile/rsmas/sonia-lakhotia');
})->name('faculty-sonia-lakhotia');

Route::get('/faculty-trishna-kakati', function () {
    return view('frontend/facultyprofile/rsmas/trishna-kakati');
})->name('faculty-trishna-kakati');

Route::get('/faculty-elizabeth', function () {
    return view('frontend/facultyprofile/rsmas/elizabeth');
})->name('faculty-elizabeth');


// RSFT Faculty Profile

Route::get('/faculty-thangjam-roshini', function () {
    return view('frontend/facultyprofile/rsft/thangjam-roshini');
})->name('faculty-thangjam-roshini');

Route::get('/faculty-akriti-mazumdar', function () {
    return view('frontend/facultyprofile/rsft/akriti-mazumdar');
})->name('faculty-akriti-mazumdar');

Route::get('/faculty-aruniva-bhagawati', function () {
    return view('frontend/facultyprofile/rsft/aruniva-bhagawati');
})->name('faculty-aruniva-bhagawati');

Route::get('/faculty-asif-iqbal-mazid', function () {
    return view('frontend/facultyprofile/rsft/asif-iqbal-mazid');
})->name('faculty-asif-iqbal-mazid');

Route::get('/faculty-gazala-anjum-goney', function () {
    return view('frontend/facultyprofile/rsft/gazala-anjum-goney');
})->name('faculty-gazala-anjum-goney');

Route::get('/faculty-pubika-michong', function () {
    return view('frontend/facultyprofile/rsft/pubika-michong');
})->name('faculty-pubika-michong');


// RSAPS Faculty Profile

Route::get('/faculty-mullah-muhaiminul-islam', function () {
    return view('frontend/facultyprofile/rsaps/mullah-muhaiminul-islam');
})->name('faculty-mullah-muhaiminul-islam');

Route::get('/faculty-nongthombam-geetmani-singh', function () {
    return view('frontend/facultyprofile/rsaps/nongthombam-geetmani-singh');
})->name('faculty-nongthombam-geetmani-singh');

Route::get('/faculty-sachidulal-biswas', function () {
    return view('frontend/facultyprofile/rsaps/sachidulal-biswas');
})->name('faculty-sachidulal-biswas');


Route::get('/faculty-amdrendra-rajput', function () {
    return view('frontend/facultyprofile/rsaps/amdrendra-rajput');
})->name('faculty-amdrendra-rajput');

Route::get('/faculty-binoyargha-dam', function () {
    return view('frontend/facultyprofile/rsaps/binoyargha-dam');
})->name('faculty-binoyargha-dam');

Route::get('/faculty-biplob-borah', function () {
    return view('frontend/facultyprofile/rsaps/biplop-borah');
})->name('faculty-biplob-borah');

Route::get('/faculty-debojeet-sahu', function () {
    return view('frontend/facultyprofile/rsaps/debojeet-sahu');
})->name('faculty-debojeet-sahu');

Route::get('/faculty-pubalee-sarmah', function () {
    return view('frontend/facultyprofile/rsaps/pubalee-sarmah');
})->name('faculty-pubalee-sarmah');

Route::get('/faculty-rajkumar-imocha', function () {
    return view('frontend/facultyprofile/rsaps/rajkumar-imocha');
})->name('faculty-rajkumar-imocha');


Route::get('/faculty-sachidulal', function () {
    return view('frontend/facultyprofile/rsaps/sachidulal');
})->name('faculty-sachidulal');

Route::get('/faculty-anuradha-devi', function () {
    return view('frontend/facultyprofile/rsaps/anuradha');
})->name('faculty-anuradha-devi');

Route::get('/faculty-dr-bapan-kalita', function () {
    return view('frontend/facultyprofile/rsaps/bapan-kalita');
})->name('faculty-dr-bapan-kalita');

Route::get('/faculty-dr-bhagyashri-patgiri', function () {
    return view('frontend/facultyprofile/rsaps/bhagyashri-patgiri');
})->name('faculty-dr-bhagyashri-patgiri');

Route::get('/faculty-dr-bikram-bir', function () {
    return view('frontend/facultyprofile/rsaps/bikram');
})->name('faculty-dr-bikram-bir');

Route::get('/faculty-dr-bimalendu-kalita', function () {
    return view('frontend/facultyprofile/rsaps/bimalendu');
})->name('faculty-dr-bimalendu-kalita');

Route::get('/faculty-dr-bornali-chetia', function () {
    return view('frontend/facultyprofile/rsaps/bornali-chetia');
})->name('faculty-dr-bornali-chetia');

Route::get('/faculty-dr-devika-phukan', function () {
    return view('frontend/facultyprofile/rsaps/devika-phukan');
})->name('faculty-dr-devika-phukan');

Route::get('/faculty-dilip-nath', function () {
    return view('frontend/facultyprofile/rsaps/dilip-nath');
})->name('faculty-dilip-nath');

Route::get('/faculty-faizuddin-ahmed', function () {
    return view('frontend/facultyprofile/rsaps/faizuddin-ahmed');
})->name('faculty-faizuddin-ahmed');

Route::get('/faculty-imo-mani-singha', function () {
    return view('frontend/facultyprofile/rsaps/imo-mani');
})->name('faculty-imo-mani-singha');

Route::get('/faculty-dr-kamal-debnath', function () {
    return view('frontend/facultyprofile/rsaps/kamal-debnath');
})->name('faculty-dr-kamal-debnath');

Route::get('/faculty-dr-koushik-saikia', function () {
    return view('frontend/facultyprofile/rsaps/koushik-saikia');
})->name('faculty-dr-koushik-saikia');

Route::get('/faculty-dr-kshetrimayum-renubebeta-devi', function () {
    return view('frontend/facultyprofile/rsaps/kshetrimayum');
})->name('faculty-dr-kshetrimayum-renubebeta-devi');

Route::get('/faculty-laishram-ladu-singh', function () {
    return view('frontend/facultyprofile/rsaps/ladu-singh');
})->name('faculty-laishram-ladu-singh');

Route::get('/faculty-dr-maidul-islam', function () {
    return view('frontend/facultyprofile/rsaps/maidul-islam');
})->name('faculty-dr-maidul-islam');

Route::get('/faculty-marbarisha-Kharkongor', function () {
    return view('frontend/facultyprofile/rsaps/marbarisha');
})->name('faculty-marbarisha-Kharkongor');

Route::get('/faculty-neelav-sarma', function () {
    return view('frontend/facultyprofile/rsaps/neelav');
})->name('faculty-neelav-sarma');

Route::get('/faculty-dr-nitu-borgohain', function () {
    return view('frontend/facultyprofile/rsaps/nitu-borgohain');
})->name('faculty-dr-nitu-borgohain');

Route::get('/faculty-dr-parismita-phukan', function () {
    return view('frontend/facultyprofile/rsaps/parismita-phukan');
})->name('faculty-dr-parismita-phukan');

Route::get('/faculty-dr-raju-kalita', function () {
    return view('frontend/facultyprofile/rsaps/raju-kalita');
})->name('faculty-dr-raju-kalita');

Route::get('/faculty-dr-sanchita-roy', function () {
    return view('frontend/facultyprofile/rsaps/sanchita-roy');
})->name('faculty-dr-sanchita-roy');

Route::get('/faculty-dr-sankar-barman', function () {
    return view('frontend/facultyprofile/rsaps/sankar-barman');
})->name('faculty-dr-sankar-barman');

Route::get('/faculty-sayak-sengupta', function () {
    return view('frontend/facultyprofile/rsaps/sayak');
})->name('faculty-sayak-sengupta');

Route::get('/faculty-dr-sujata-deb', function () {
    return view('frontend/facultyprofile/rsaps/sujata-deb');
})->name('faculty-dr-sujata-deb');

Route::get('/faculty-biswajit-sarma', function () {
    return view('frontend/facultyprofile/rsaps/biswajit-sarma');
})->name('faculty-biswajit-sarma');



//RSC FACULTY PROFILE

Route::get('/faculty-prachi-khetan', function () {
    return view('frontend/facultyprofile/rsc/prachi-khetan');
})->name('faculty-prachi-khetan');

Route::get('/faculty-dr-ananya-banik', function () {
    return view('frontend/facultyprofile/rsc/ananya-banik');
})->name('faculty-dr-ananya-banik');

Route::get('/faculty-dr-aruna-dev-roy', function () {
    return view('frontend/facultyprofile/rsc/aruna-dev-roy');
})->name('faculty-dr-aruna-dev-roy');

Route::get('/faculty-dr-baishali-pathak', function () {
    return view('frontend/facultyprofile/rsc/baishali-pathak');
})->name('faculty-dr-baishali-pathak');

Route::get('/faculty-jimpy-saud', function () {
    return view('frontend/facultyprofile/rsc/jimpy-saud');
})->name('faculty-jimpy-saud');

Route::get('/faculty-dr-niva-kalita', function () {
    return view('frontend/facultyprofile/rsc/niva-kalita');
})->name('faculty-dr-niva-kalita');

Route::get('/faculty-dr-padum-chetry', function () {
    return view('frontend/facultyprofile/rsc/padum-chetry');
})->name('faculty-dr-padum-chetry');

Route::get('/faculty-dr-rajdeep-nag', function () {
    return view('frontend/facultyprofile/rsc/rajdeep');
})->name('faculty-dr-rajdeep-nag');

Route::get('/faculty-richika-kedia', function () {
    return view('frontend/facultyprofile/rsc/richika-kedia');
})->name('faculty-richika-kedia');

Route::get('/faculty-rikh-roy', function () {
    return view('frontend/facultyprofile/rsc/rikh-roy');
})->name('faculty-rikh-roy');

Route::get('/faculty-ritishna-sarma', function () {
    return view('frontend/facultyprofile/rsc/ritishna-sarma');
})->name('faculty-ritishna-sarma');

Route::get('/faculty-rituparna-baruah', function () {
    return view('frontend/facultyprofile/rsc/rituparna-baruah');
})->name('faculty-rituparna-baruah');

Route::get('/faculty-roshni-agarwal', function () {
    return view('frontend/facultyprofile/rsc/roshni-agarwal');
})->name('faculty-roshni-agarwal');

Route::get('/faculty-sudip-chakraborty', function () {
    return view('frontend/facultyprofile/rsc/sudip-chakraborty');
})->name('faculty-sudip-chakraborty');

//RSD Faculty Profile
Route::get('/faculty-Abhisek', function () {
    return view('frontend/facultyprofile/rsd/Abhisek');
})->name('faculty-Abhisek');

Route::get('/faculty-ankit-bordoloi', function () {
    return view('frontend/facultyprofile/rsd/ankit-bordoloi');
})->name('faculty-ankit-bordoloi');

//RSEES Faculty Profile
Route::get('/faculty-hibjur-rahaman', function () {
    return view('frontend/facultyprofile/rsees/hibjur-rahaman');
})->name('faculty-hibjur-rahaman');

Route::get('/faculty-jubilee-goswami', function () {
    return view('frontend/facultyprofile/rsees/jubilee-goswami');
})->name('faculty-jubilee-goswami');

Route::get('/faculty-shobhit-pipil', function () {
    return view('frontend/facultyprofile/rsees/shobhit-pipil');
})->name('faculty-shobhit-pipil');

Route::get('/faculty-abhijit-gogoi', function () {
    return view('frontend/facultyprofile/rsees/abhijit-gogoi');
})->name('faculty-abhijit-gogoi');

Route::get('/faculty-amarjyoti-borah', function () {
    return view('frontend/facultyprofile/rsees/amarjyoti-borah');
})->name('faculty-amarjyoti-borah');

Route::get('/faculty-hemangi-deka', function () {
    return view('frontend/facultyprofile/rsees/hemangi-deka');
})->name('faculty-hemangi-deka');

Route::get('/faculty-neeta-moni-sharma', function () {
    return view('frontend/facultyprofile/rsees/neeta-moni-sharma');
})->name('faculty-neeta-moni-sharma');

Route::get('/faculty-nishanta-sahariah', function () {
    return view('frontend/facultyprofile/rsees/nishanta-sahariah');
})->name('faculty-nishanta-sahariah');

Route::get('/faculty-pritom-borah', function () {
    return view('frontend/facultyprofile/rsees/pritom-borah');
})->name('faculty-pritom-borah');

Route::get('/faculty-rajdeep-deb', function () {
    return view('frontend/facultyprofile/rsees/rajdeep-deb');
})->name('faculty-rajdeep-deb');

Route::get('/faculty-roshmi-boruah', function () {
    return view('frontend/facultyprofile/rsees/roshmi-boruah');
})->name('faculty-roshmi-boruah');

Route::get('/faculty-palme-borthakur', function () {
    return view('frontend/facultyprofile/rsees/palme-borthakur');
})->name('faculty-palme-borthakur');


//RSHM-RSTTM Faculty Profile
Route::get('/faculty-indrajit-dutta', function () {
    return view('frontend/facultyprofile/rshm-rsttm/indrajit-dutta');
})->name('faculty-indrajit-dutta');

Route::get('/faculty-piyush-gupta', function () {
    return view('frontend/facultyprofile/rshm-rsttm/piyush-gupta');
})->name('faculty-piyush-gupta');

Route::get('/faculty-reemina-narzary', function () {
    return view('frontend/facultyprofile/rshm-rsttm/reemina-narzary');
})->name('faculty-reemina-narzary');
//
Route::get('/faculty-bishnu-gurung', function () {
    return view('frontend/facultyprofile/rshm-rsttm/bishnu-gurung');
})->name('faculty-bishnu-gurung');

Route::get('/faculty-mukesh-kalita', function () {
    return view('frontend/facultyprofile/rshm-rsttm/mukesh-kalita');
})->name('faculty-mukesh-kalita');

Route::get('/faculty-phibapynhun-pariong', function () {
    return view('frontend/facultyprofile/rshm-rsttm/phibapynhun-pariong');
})->name('faculty-phibapynhun-pariong');

Route::get('/faculty-prabahan-puzari', function () {
    return view('frontend/facultyprofile/rshm-rsttm/prabahan-puzari');
})->name('faculty-prabahan-puzari');

Route::get('/faculty-sajal-nag', function () {
    return view('frontend/facultyprofile/rshm-rsttm/sajal-nag');
})->name('faculty-sajal-nag');

Route::get('/faculty-shiela-bora', function () {
    return view('frontend/facultyprofile/rshm-rsttm/shiela-bora');
})->name('faculty-shiela-bora');

Route::get('/faculty-soumitra-sen', function () {
    return view('frontend/facultyprofile/rshm-rsttm/soumitra-sen');
})->name('faculty-soumitra-sen');

Route::get('/faculty-susmita-banerjee', function () {
    return view('frontend/facultyprofile/rshm-rsttm/susmita-banerjee');
})->name('faculty-susmita-banerjee');

Route::get('/faculty-syed-sajidul-islam', function () {
    return view('frontend/facultyprofile/rshm-rsttm/syed-sajidul-islam');
})->name('faculty-syed-sajidul-islam');


//RSBAS Faculty Profile

Route::get('/Prof-dn-singh', function () {
    return view('frontend/facultyprofile/rsb/dn-singh');
})->name('/Prof-dn-singh');

Route::get('/bachaspatimayum-deeparani-devi', function () {
    return view('frontend/facultyprofile/rsbas/bachaspatimayum-deeparani-devi');
})->name('bachaspatimayum-deeparani-devi');

Route::get('/faculty-mahima-singhi', function () {
    return view('frontend/facultyprofile/rsbas/mahima-singhi');
})->name('faculty-mahima-singhi');

Route::get('/faculty-mahuya-deb', function () {
    return view('frontend/facultyprofile/rsbas/mahuya-deb');
})->name('faculty-mahuya-deb');

Route::get('/faculty-naphisabet', function () {
    return view('frontend/facultyprofile/rsbas/naphisabet');
})->name('faculty-naphisabet');

Route::get('/faculty-prince-cp', function () {
    return view('frontend/facultyprofile/rsbas/prince-cp');
})->name('faculty-prince-cp');

Route::get('/faculty-syeda-anjum-afreen', function () {
    return view('frontend/facultyprofile/rsbas/syeda-anjum-afreen');
})->name('faculty-syeda-anjum-afreen');

Route::get('/faculty-shraddha-basu', function () {
    return view('frontend/facultyprofile/rsbas/shraddha-basu');
})->name('faculty-shraddha-basu');

Route::get('/faculty-fariza-saidin', function () {
    return view('frontend/facultyprofile/rsbas/fariza-saidin');
})->name('faculty-fariza-saidin');

Route::get('/faculty-jahnabi-mahanta', function () {
    return view('frontend/facultyprofile/rsbas/jahnabi-mahanta');
})->name('faculty-jahnabi-mahanta');

Route::get('/faculty-jwmwishree-boro', function () {
    return view('frontend/facultyprofile/rsbas/jwmwishree-boro');
})->name('faculty-jwmwishree-boro');

Route::get('/faculty-queen-deka', function () {
    return view('frontend/facultyprofile/rsbas/queen-deka');
})->name('faculty-queen-deka');

Route::get('/faculty-tahera-mozumdar', function () {
    return view('frontend/facultyprofile/rsbas/tahera-mozumdar');
})->name('faculty-tahera-mozumdar');

//RSBSC Faculty Profile

Route::get('/faculty-dipayan-das', function () {
    return view('frontend/facultyprofile/rsbsc/dipayan-das');
})->name('faculty-dipayan-das');

Route::get('/faculty-jiwasmika-baishya', function () {
    return view('frontend/facultyprofile/rsbsc/jiwasmika-baishya');
})->name('faculty-jiwasmika-baishya');

Route::get('/faculty-taranga-jyoti-baruah', function () {
    return view('frontend/facultyprofile/rsbsc/taranga-jyoti-baruah');
})->name('faculty-taranga-jyoti-baruah');

Route::get('/faculty-anuj-kumar-borah', function () {
    return view('frontend/facultyprofile/rsbsc/anuj-kumar-borah');
})->name('faculty-anuj-kumar-borah');

Route::get('/faculty-bhaskarjyoti-gogoi', function () {
    return view('frontend/facultyprofile/rsbsc/bhaskarjyoti-gogoi');
})->name('faculty-bhaskarjyoti-gogoi');

Route::get('/faculty-rupesh-kumar', function () {
    return view('frontend/facultyprofile/rsbsc/rupesh-kumar');
})->name('faculty-rupesh-kumar');

Route::get('/faculty-birson-ingti', function () {
    return view('frontend/facultyprofile/rsbsc/birson-ingti');
})->name('faculty-birson-ingti');

Route::get('/faculty-rupshikha', function () {
    return view('frontend/facultyprofile/rsbsc/rupshikha');
})->name('faculty-rupshikha');

Route::get('/faculty-dr-charulata-mahanta', function () {
    return view('frontend/facultyprofile/rsbsc/charulata-mahanta');
})->name('faculty-dr-charulata-mahanta');

Route::get('/faculty-chongtham-singh', function () {
    return view('frontend/facultyprofile/rsbsc/chongtham-singh');
})->name('faculty-chongtham-singh');

Route::get('/faculty-anupam-chatterjee', function () {
    return view('frontend/facultyprofile/rsbsc/anupam-chatterjee');
})->name('faculty-anupam-chatterjee');

Route::get('/faculty-debajit-borah', function () {
    return view('frontend/facultyprofile/rsbsc/debajit-borah');
})->name('faculty-debajit-borah');

Route::get('/faculty-mousumi-das-goswami', function () {
    return view('frontend/facultyprofile/rsbsc/mousumi-das-goswami');
})->name('faculty-mousumi-das-goswami');

Route::get('/faculty-niraj-singh', function () {
    return view('frontend/facultyprofile/rsbsc/niraj-singh');
})->name('faculty-niraj-singh');

Route::get('/faculty-pankaj-losan-sharma', function () {
    return view('frontend/facultyprofile/rsbsc/pankaj-losan-sharma');
})->name('faculty-pankaj-losan-sharma');

Route::get('/faculty-amlan-das', function () {
    return view('frontend/facultyprofile/rsbsc/amlan-das');
})->name('faculty-amlan-das');

Route::get('/faculty-siddhartha-narayan', function () {
    return view('frontend/facultyprofile/rsbsc/siddhartha-narayan');
})->name('faculty-siddhartha-narayan');

//RSCOM Faculty Profile

Route::get('/faculty-jintu-mahanta', function () {
    return view('frontend/facultyprofile/rscom/jintu-mahanta');
})->name('faculty-jintu-mahanta');

Route::get('/faculty-esha-chakraborty', function () {
    return view('frontend/facultyprofile/rscom/esha-chakraborty');
})->name('faculty-esha-chakraborty');

Route::get('/faculty-subhajit-paul', function () {
    return view('frontend/facultyprofile/rscom/subhajit-paul');
})->name('faculty-subhajit-paul');

Route::get('/faculty-suresh-goduka', function () {
    return view('frontend/facultyprofile/rscom/suresh-goduka');
})->name('faculty-suresh-goduka');

Route::get('/faculty-ankita-agarwal', function () {
    return view('frontend/facultyprofile/rscom/ankita-agarwal');
})->name('faculty-ankita-agarwal');

Route::get('/faculty-champa-devi', function () {
    return view('frontend/facultyprofile/rscom/champa-devi');
})->name('faculty-champa-devi');

Route::get('/faculty-florance-rabha', action: function () {
    return view('frontend/facultyprofile/rscom/florance-rabha');
})->name('faculty-florance-rabha');

Route::get('/faculty-suresh-chandra', function () {
    return view('frontend/facultyprofile/rscom/suresh-chandra');
})->name('faculty-suresh-chandra');

Route::get('/faculty-sailendra', function () {
    return view('frontend/facultyprofile/rscom/sailendra');
})->name('faculty-sailendra');

//RSFA Facuilty Profile

Route::get('/faculty-kishan-bagdi', function () {
    return view('frontend/facultyprofile/rsfa/kishan-bagdi');
})->name('faculty-kishan-bagdi');

Route::get('/faculty-mousumi-deka', function () {
    return view('frontend/facultyprofile/rsfa/mousumi-deka');
})->name('faculty-mousumi-deka');

Route::get('/faculty-sehnaz-saikia', function () {
    return view('frontend/facultyprofile/rsfa/sehnaz-saikia');
})->name('faculty-sehnaz-saikia');

Route::get('/faculty-suman-saha', function () {
    return view('frontend/facultyprofile/rsfa/suman-saha');
})->name('faculty-suman-saha');

Route::get('/faculty-sumanta-dutta-chowdhury', function () {
    return view('frontend/facultyprofile/rsfa/sumanta-dutta-chowdhury');
})->name('faculty-sumanta-dutta-chowdhury');

//RSHSS Facuilty Profile

Route::get('/faculty-suhail-ahmed', function () {
    return view('frontend/facultyprofile/rshss/suhail-ahmed');
})->name('faculty-suhail-ahmed');

Route::get('/faculty-dhiraj-kumar-borkotoky', function () {
    return view('frontend/facultyprofile/rshss/dhiraj-kumar-borkotoky');
})->name('faculty-dhiraj-kumar-borkotoky');

Route::get('/faculty-gautam-mazumdar', function () {
    return view('frontend/facultyprofile/rshss/gautam-mazumdar');
})->name('faculty-gautam-mazumdar');

Route::get('/faculty-jugal-kishore-bhattacharyya', function () {
    return view('frontend/facultyprofile/rshss/jugal-kishore-bhattacharyya');
})->name('faculty-jugal-kishore-bhattacharyya');

Route::get('/faculty-lalzikpuii-rajkhow', function () {
    return view('frontend/facultyprofile/rshss/lalzikpuii-rajkhow');
})->name('faculty-lalzikpuii-rajkhow');

Route::get('/faculty-mohammed-deluwar-hoque', function () {
    return view('frontend/facultyprofile/rshss/mohammed-deluwar-hoque');
})->name('faculty-mohammed-deluwar-hoque');

Route::get('/faculty-sanghamitra-hazarika', function () {
    return view('frontend/facultyprofile/rshss/sanghamitra-hazarika');
})->name('faculty-sanghamitra-hazarika');

Route::get('/faculty-swabera-islam', function () {
    return view('frontend/facultyprofile/rshss/swabera-islam');
})->name('faculty-swabera-islam');
//

Route::get('/faculty-adam-samphri-timung', function () {
    return view('frontend/facultyprofile/rshss/adam-samphri-timung');
})->name('faculty-adam-samphri-timung');

Route::get('/faculty-adishree-borgohain', function () {
    return view('frontend/facultyprofile/rshss/adishree-borgohain');
})->name('faculty-adishree-borgohain');

Route::get('/faculty-kadiguang-panmei', function () {
    return view('frontend/facultyprofile/rshss/kadiguang-panmei');
})->name('faculty-kadiguang-panmei');

Route::get('/faculty-lalzikpuii-rajkhowa', function () {
    return view('frontend/facultyprofile/rshss/lalzikpuii-rajkhowa');
})->name('faculty-lalzikpuii-rajkhowa');

Route::get('/faculty-sangeeta-das', function () {
    return view('frontend/facultyprofile/rshss/sangeeta-das');
})->name('faculty-sangeeta-das');

Route::get('/faculty-tripti-das', function () {
    return view('frontend/facultyprofile/rshss/tripti-das');
})->name('faculty-tripti-das');

//
Route::get('/faculty-mitali-kalita', function () {
    return view('frontend/facultyprofile/rshss/mitali-kalita');
})->name('faculty-mitali-kalita');

Route::get('/faculty-susmita-hazarika', function () {
    return view('frontend/facultyprofile/rshss/susmita-hazarika');
})->name('faculty-susmita-hazarika');

Route::get('/faculty-tanzim-masud', function () {
    return view('frontend/facultyprofile/rshss/tanzim-masud');
})->name('faculty-tanzim-masud');

Route::get('/faculty-ashim-nath', function () {
    return view('frontend/facultyprofile/rshss/ashim-nath');
})->name('faculty-ashim-nath');

Route::get('/faculty-bifuwada-nashibah', function () {
    return view('frontend/facultyprofile/rshss/bifuwada-nashibah');
})->name('faculty-bifuwada-nashibah');

Route::get('/faculty-denim-deka', function () {
    return view('frontend/facultyprofile/rshss/denim-deka');
})->name('faculty-denim-deka');

Route::get('/faculty-durba-dutta', function () {
    return view('frontend/facultyprofile/rshss/durba-dutta');
})->name('faculty-durba-dutta');

Route::get('/faculty-prajna-borah', function () {
    return view('frontend/facultyprofile/rshss/prajna-borah');
})->name('faculty-prajna-borah');

Route::get('/faculty-km-sudha', function () {
    return view('frontend/facultyprofile/rshss/km-sudha');
})->name('faculty-km-sudha');

Route::get('/faculty-mir-kamruzzaman', function () {
    return view('frontend/facultyprofile/rshss/mirmir-kamruzzaman');
})->name('faculty-mirmir-kamruzzaman');

Route::get('/faculty-premmi', function () {
    return view('frontend/facultyprofile/rshss/premmi');
})->name('faculty-premmi');

Route::get('/faculty-tania-begum', function () {
    return view('frontend/facultyprofile/rshss/tania-begum');
})->name('faculty-tania-begum');

Route::get('/faculty-shalini-saxena', function () {
    return view('frontend/facultyprofile/rshss/shalini-saxena');
})->name('faculty-shalini-saxena');

Route::get('/faculty-amlan-das-rshss', function () {
    return view('frontend/facultyprofile/rshss/amlan-das-rshss');
})->name('faculty-amlan-das-rshss');

Route::get('/faculty-bikash-chetry', function () {
    return view('frontend/facultyprofile/rshss/bikash-chetry');
})->name('faculty-bikash-chetry');

Route::get('/faculty-joyeeta-bhattacharjee', function () {
    return view('frontend/facultyprofile/rshss/joyeeta-bhattacharjee');
})->name('faculty-joyeeta-bhattacharjee');

Route::get('/faculty-kristi-saikia', function () {
    return view('frontend/facultyprofile/rshss/kristi-saikia');
})->name('faculty-kristi-saikia');

Route::get('/faculty-luithuiwung-awungshi', function () {
    return view('frontend/facultyprofile/rshss/luithuiwung-awungshi');
})->name('faculty-luithuiwung-awungshi');

Route::get('/faculty-madhu-monjuri-gohain', function () {
    return view('frontend/facultyprofile/rshss/madhu-monjuri-gohain');
})->name('faculty-madhu-monjuri-gohain');

Route::get('/faculty-moses-newme', function () {
    return view('frontend/facultyprofile/rshss/moses-newme');
})->name('faculty-moses-newme');

Route::get('/faculty-nabanita-hazarika', function () {
    return view('frontend/facultyprofile/rshss/nabanita-hazarika');
})->name('faculty-nabanita-hazarika');

Route::get('/faculty-priyanka-patowari', function () {
    return view('frontend/facultyprofile/rshss/priyanka-patowari');
})->name('faculty-priyanka-patowari');

Route::get('/faculty-susmita-hazarika', function () {
    return view('frontend/facultyprofile/rshss/susmita-hazarika');
})->name('faculty-susmita-hazarika');

Route::get('/faculty-abhinav-chaliha', function () {
    return view('frontend/facultyprofile/rshss/abhinav-chaliha');
})->name('faculty-abhinav-chaliha');

Route::get('/faculty-babachandra-singha', function () {
    return view('frontend/facultyprofile/rshss/babachandra-singha');
})->name('faculty-babachandra-singha');

Route::get('/faculty-krishangi-saikia', function () {
    return view('frontend/facultyprofile/rshss/krishangi-saikia');
})->name('faculty-krishangi-saikia');

Route::get('/faculty-meenu', function () {
    return view('frontend/facultyprofile/rshss/meenu');
})->name('faculty-meenu');

Route::get('/faculty-monika-kumari', function () {
    return view('frontend/facultyprofile/rshss/monika-kumari');
})->name('faculty-monika-kumari');

Route::get('/faculty-monisha-bordoloi', function () {
    return view('frontend/facultyprofile/rshss/monisha-bordoloi');
})->name('faculty-monisha-bordoloi');

Route::get('/faculty-monojit-singha', function () {
    return view('frontend/facultyprofile/rshss/monojit-singha');
})->name('faculty-monojit-singha');

Route::get('/faculty-nikita-biswakarma', function () {
    return view('frontend/facultyprofile/rshss/nikita-biswakarma');
})->name('faculty-nikita-biswakarma');

Route::get('/faculty-sushmita-hoshi-nongmeikapam', function () {
    return view('frontend/facultyprofile/rshss/sushmita-hoshi-nongmeikapam');
})->name('faculty-sushmita-hoshi-nongmeikapam');

Route::get('/faculty-tanjeela-mehboob', function () {
    return view('frontend/facultyprofile/rshss/tanjeela-mehboob');
})->name('faculty-tanjeela-mehboob');


//RSLA Facuilty Profile

Route::get('/faculty-tikendra-Kumar-sahu', function () {
    return view('frontend/facultyprofile/rsfa/tikendra');
})->name('faculty-tikendra-Kumar-sahu');

Route::get('/faculty-priyanka-diphusha', function () {
    return view('frontend/facultyprofile/rsla/priyanka');
})->name('faculty-priyanka-diphusha');

Route::get('/faculty-ajit-kaushal', function () {
    return view('frontend/facultyprofile/rsla/ajit-kaushal');
})->name('faculty-ajit-kaushal');

Route::get('/faculty-saranga-ranjan-patgiri', function () {
    return view('frontend/facultyprofile/rsla/saranga-ranjan-patgiri');
})->name('faculty-saranga-ranjan-patgiri');

Route::get('/faculty-hiya-das', function () {
    return view('frontend/facultyprofile/rsla/hiya-das');
})->name('faculty-hiya-das');

Route::get('/faculty-kuntala-roychoudhury', function () {
    return view('frontend/facultyprofile/rsla/kuntala-roychoudhury');
})->name('faculty-kuntala-roychoudhury');

Route::get('/faculty-pranita-choudhury', function () {
    return view('frontend/facultyprofile/rsla/pranita-choudhury');
})->name('faculty-pranita-choudhury');

Route::get('/faculty-preeti-gupta', function () {
    return view('frontend/facultyprofile/rsla/preeti-gupta');
})->name('faculty-preeti-gupta');

Route::get('/faculty-thaneshwar-kalita', function () {
    return view('frontend/facultyprofile/rsla/thaneshwar-kalita');
})->name('faculty-thaneshwar-kalita');

//

Route::get('/faculty-sumit-agarwala', function () {
    return view('frontend/facultyprofile/rsla/sumit-agarwala');
})->name('faculty-sumit-agarwala');

Route::get('/faculty-saif-rasul-khan', function () {
    return view('frontend/facultyprofile/rsla/saif-rasul-khan');
})->name('faculty-saif-rasul-khan');

Route::get('/faculty-tushti-sharma', function () {
    return view('frontend/facultyprofile/rsla/tushti-sharma');
})->name('faculty-tushti-sharma');

Route::get('/faculty-anjuman-ara-begum', function () {
    return view('frontend/facultyprofile/rsla/anjuman-ara-begum');
})->name('faculty-anjuman-ara-begum');

Route::get('/faculty-indrani-kakati', function () {
    return view('frontend/facultyprofile/rsla/indrani-kakati');
})->name('faculty-indrani-kakati');

Route::get('/faculty-hiren-nath', function () {
    return view('frontend/facultyprofile/rsla/hiren-nath');
})->name('faculty-hiren-nath');

Route::get('/faculty-pravek-medhi', function () {
    return view('frontend/facultyprofile/rsla/pravek-medhi');
})->name('faculty-pravek-medhi');

Route::get('/faculty-shruti-borpujari', function () {
    return view('frontend/facultyprofile/rsla/shruti-borpujari');
})->name('faculty-shruti-borpujari');

Route::get('/faculty-sumitra-devi', function () {
    return view('frontend/facultyprofile/rsla/sumitra-devi');
})->name('faculty-sumitra-devi');

Route::get('/faculty-bhupali-saikia', function () {
    return view('frontend/facultyprofile/rsla/bhupali-saikia');
})->name('faculty-bhupali-saikia');

//RSB Facuilty Profile

Route::get('/faculty-Dipak-jain', function () {
    return view('frontend/facultyprofile/rsb/Dipak-jain');
})->name('faculty-Dipak-jain');

Route::get('/faculty-Nibir-Pratim', function () {
    return view('frontend/facultyprofile/rsb/Nibir-Pratim');
})->name('faculty-Nibir-Pratim');

Route::get('/faculty-santosh-kumar-anand', function () {
    return view('frontend/facultyprofile/rsb/santosh-kumar-anand');
})->name('faculty-santosh-kumar-anand');

Route::get('/faculty-darshana-bhagowati', function () {
    return view('frontend/facultyprofile/rsb/darshana-bhagowati');
})->name('faculty-darshana-bhagowati');

Route::get('/faculty-arpee-saikia', function () {
    return view('frontend/facultyprofile/rsb/arpee-saikia');
})->name('faculty-arpee-saikia');

Route::get('/faculty-george-ap', function () {
    return view('frontend/facultyprofile/rsb/george-ap');
})->name('faculty-george-ap');

Route::get('/faculty-kalyani-gohain', function () {
    return view('frontend/facultyprofile/rsb/kalyani-gohain');
})->name('faculty-kalyani-gohain');

Route::get('/faculty-neha-tiwari', function () {
    return view('frontend/facultyprofile/rsb/neha-tiwari');
})->name('faculty-neha-tiwari');

Route::get('/faculty-priyanka-mahanta', function () {
    return view('frontend/facultyprofile/rsb/priyanka-mahanta');
})->name('faculty-priyanka-mahanta');

Route::get('/faculty-rishi-chakravarty', function () {
    return view('frontend/facultyprofile/rsb/rishi-chakravarty');
})->name('faculty-rishi-chakravarty');

Route::get('/faculty-samip-baruah', function () {
    return view('frontend/facultyprofile/rsb/samip-baruah');
})->name('faculty-samip-baruah');

Route::get('/faculty-suman-agarwal', function () {
    return view('frontend/facultyprofile/rsb/suman-agarwal');
})->name('faculty-suman-agarwal');

Route::get('/faculty-tanisha-mukharjee', function () {
    return view('frontend/facultyprofile/rsb/tanisha-mukharjee');
})->name('faculty-tanisha-mukharjee');

Route::get('/faculty-tanisha-mukharjee', function () {
    return view('frontend/facultyprofile/rsb/tanisha-mukharjee');
})->name('faculty-tanisha-mukharjee');

Route::get('/faculty-upasana-sharma', function () {
    return view('frontend/facultyprofile/rsb/upasana-sharma');
})->name('faculty-upasana-sharma');

//RSN Facuilty Profile

Route::get('/faculty-momi-dehingia', function () {
    return view('frontend/facultyprofile/rsn/momi-dehingia');
})->name('faculty-momi-dehingia');

Route::get('/faculty-kaberi-saikia', function () {
    return view('frontend/facultyprofile/rsn/kaberi-saikia');
})->name('faculty-kaberi-saikia');

Route::get('/faculty-doli-deori', function () {
    return view('frontend/facultyprofile/rsn/doli-deori');
})->name('faculty-doli-deori');

Route::get('/faculty-ankita-sarma', function () {
    return view('frontend/facultyprofile/rsn/ankita-sarma');
})->name('faculty-ankita-sarma');

Route::get('/faculty-aziza-begum', function () {
    return view('frontend/facultyprofile/rsn/aziza-begum');
})->name('faculty-aziza-begum');

Route::get('/faculty-bakor-kharbudon', function () {
    return view('frontend/facultyprofile/rsn/bakor-kharbudon');
})->name('faculty-bakor-kharbudon');

Route::get('/faculty-bhanita-barman', function () {
    return view('frontend/facultyprofile/rsn/bhanita-barman');
})->name('faculty-bhanita-barman');

Route::get('/faculty-ilawanpyntngen-kharsohnoh', function () {
    return view('frontend/facultyprofile/rsn/ilawanpyntngen-kharsohnoh');
})->name('faculty-ilawanpyntngen-kharsohnoh');

Route::get('/faculty-juri-saikia', function () {
    return view('frontend/facultyprofile/rsn/juri-saikia');
})->name('faculty-juri-saikia');

Route::get('/faculty-kangkana-talukdar', function () {
    return view('frontend/facultyprofile/rsn/kangkana-talukdar');
})->name('faculty-kangkana-talukdar');

Route::get('/faculty-manisha-kalita', function () {
    return view('frontend/facultyprofile/rsn/manisha-kalita');
})->name('faculty-manisha-kalita');

Route::get('/faculty-monika-kashyap', function () {
    return view('frontend/facultyprofile/rsn/monika-kashyap');
})->name('faculty-monika-kashyap');

Route::get('/faculty-nabajani-dutta', function () {
    return view('frontend/facultyprofile/rsn/nabajani-dutta');
})->name('faculty-nabajani-dutta');

Route::get('/faculty-noksanglila', function () {
    return view('frontend/facultyprofile/rsn/noksanglila');
})->name('faculty-noksanglila');

Route::get('/faculty-pankhi-lahkar', function () {
    return view('frontend/facultyprofile/rsn/pankhi-lahkar');
})->name('faculty-pankhi-lahkar');

Route::get('/faculty-punam-debbarma', function () {
    return view('frontend/facultyprofile/rsn/punam-debbarma');
})->name('faculty-punam-debbarma');

Route::get('/faculty-purabi-rabha', function () {
    return view('frontend/facultyprofile/rsn/purabi-rabha');
})->name('faculty-purabi-rabha');

Route::get('/faculty-rashmi-rekha-borah', function () {
    return view('frontend/facultyprofile/rsn/rashmi-rekha-borah');
})->name('faculty-rashmi-rekha-borah');

Route::get('/faculty-rumi-talukdar', function () {
    return view('frontend/facultyprofile/rsn/rumi-talukdar');
})->name('faculty-rumi-talukdar');

Route::get('/faculty-sapna-kumari', function () {
    return view('frontend/facultyprofile/rsn/sapna-kumari');
})->name('faculty-sapna-kumari');

Route::get('/faculty-simi-das-purkayastha', function () {
    return view('frontend/facultyprofile/rsn/simi-das-purkayastha');
})->name('faculty-simi-das-purkayastha');

Route::get('/faculty-yumkhaibam', function () {
    return view('frontend/facultyprofile/rsn/yumkhaibam');
})->name('faculty-yumkhaibam');

Route::get('/faculty-linda-mawi', function () {
    return view('frontend/facultyprofile/rsn/linda');
})->name('faculty-linda-mawi');

Route::get('/faculty-hemeswari-bhuyan', function () {
    return view('frontend/facultyprofile/rsn/hemeswari');
})->name('faculty-hemeswari-bhuyan');

Route::get('/faculty-meghali-deka', function () {
    return view('frontend/facultyprofile/rsn/meghali-deka');
})->name('faculty-meghali-deka');

Route::get('/faculty-mini-medhi', function () {
    return view('frontend/facultyprofile/rsn/mini-medhi');
})->name('faculty-mini-medhi');


//department media
Route::get('/department-mathematics-events', function () {
    return view('frontend/school&faculty/department-mathematics-events');
})->name('department-mathematics-events');

Route::get('/public-administration-events', function () {
    return view('frontend/school&faculty/public-administration-events');
})->name('public-administration-events');

Route::get('/social-work-events', function () {
    return view('frontend/school&faculty/social-work-events');
})->name('social-work-events');

Route::get('/architecture-events', function () {
    return view('frontend/school&faculty/architecture-events');
})->name('architecture-events');

Route::get('/sociology-events', function () {
    return view('frontend/school&faculty/sociology-events');
})->name('sociology-events');

Route::get('/history-events', function () {
    return view('frontend/school&faculty/history-events');
})->name('history-events');



Route::get('/program-msc-emergency-critical-care', function () {
    return view('frontend/programmes/rsmas/program-msc-emergency-critical');
})->name('program-msc-emergency-critical-care');


Route::get('/programs-msc-dialysis', function () {
    return view('frontend/programmes/rsmas/programs-msc-dialysis');
})->name('programs-msc-dialysis');

Route::get('/programs-msc-radiography-advance-imaging-tech', function () {
    return view('frontend/programmes/rsmas/programs-msc-radiography-advance-imaging-tech');
})->name('programs-msc-radiography-advance-imaging-tech');

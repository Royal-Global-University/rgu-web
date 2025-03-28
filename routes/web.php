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


//Discover RGU
Route::get('/preface', function () {
    return view('frontend/discoverRGU/preface');
})->name('preface');

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

Route::get('/leadership-ankur-pansari', function () {
    return view('frontend/discoverRGU/leadership-ankur-pansari');
})->name('leadership-ankur-pansari');

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

Route::get('/deans', function () {
    return view('frontend/academics/deans');
})->name('deans');

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
    return view('frontend/placement/doctoral-biochemistry');
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

Route::get('/doctoral-architecture', function () {
    return view('frontend/phd/doctoral-architecture');
})->name('doctoral-architecture');

Route::get('/doctoral-biochemistry', function () {
    return view('frontend/phd/placement-contacts');
})->name('doctoral-biochemistry');

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

//
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

Route::get('/iqac-annul-report', function () {
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

Route::get('/program-bsc-cssd', function () {
    return view('frontend/programmes/program-bsc-cssd');
})->name('program-bsc-cssd');

Route::get('/program-msc-nursing-comm-mental', function () {
    return view('frontend/programmes/program-msc-nursing-comm-mental');
})->name('program-msc-nursing-comm-mental');

Route::get('/program-ba-bba-llb(hons)', function () {
    return view('frontend/programmes/program-ba-bba-llb(hons)');
})->name('program-ba-bba-llb(hons)');

Route::get('/program-ba-llb-(hons)', function () {
    return view('frontend/programmes/program-ba-llb-(hons)');
})->name('program-ba-llb-(hons)');

Route::get('/programs-barch', function () {
    return view('frontend/programmes/programs-barch');
})->name('programs-barch');

Route::get('/programs-bcom-finance-with-ica', function () {
    return view('frontend/programmes/programs-bcom-finance-with-ica');
})->name('programs-bcom-finance-with-ica');

Route::get('/programs-bcom', function () {
    return view('frontend/programmes/programs-bcom');
})->name('programs-bcom');

Route::get('/programs-bcom(morning-shift)', function () {
    return view('frontend/programmes/programs-bcom(morning-shift)');
})->name('programs-bcom(morning-shift)');

Route::get('/programs-b-des-fd(fashion-design)', function () {
    return view('frontend/programmes/programs-b-des-fd(fashion-design)');
})->name('programs-b-des-fd(fashion-design)');

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

Route::get('/programs-b-sc-mathematics', function () {
    return view('frontend/programmes/programs-b-sc-mathematics');
})->name('programs-b-sc-mathematics');

Route::get('/programs-b-sc-medicaltechnology(bmlt)-lateral-entry', function () {
    return view('frontend/programmes/programs-b-sc-medicaltechnology(bmlt)-lateral-entry');
})->name('programs-b-sc-medicaltechnology(bmlt)-lateral-entry');

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

Route::get('/programs-b.sc-Medical-technology-bmlt', function () {
    return view('frontend/programmes/programs-b.sc-Medical-technology-bmlt');
})->name('programs-b.sc-Medical-technology-bmlt');

Route::get('/programs-b-tech-mechatronics', function () {
    return view('frontend/programmes/programs-b-tech-mechatronics');
})->name('programs-b-tech-mechatronics');

Route::get('/programs-b-tech-artifical-intelligence-ai', function () {
    return view('frontend/programmes/programs-b-tech-artifical-intelligence-ai');
})->name('programs-b-tech-artifical-intelligence-ai');

Route::get('/programs-b-tech-(ce)', function () {
    return view('frontend/programmes/programs-b-tech-(ce)');
})->name('programs-b-tech-(ce)');

Route::get('/programs-b-tech-(cse)', function () {
    return view('frontend/programmes/programs-b-tech-(cse)');
})->name('programs-b-tech-(cse)');

Route::get('/programs-b-tech-(lateral-entry)', function () {
    return view('frontend/programmes/programs-b-tech-(lateral-entry)');
})->name('programs-b-tech-(lateral-entry)');

Route::get('/programs-b-tech-(me)', function () {
    return view('frontend/programmes/programs-b-tech-(me)');
})->name('programs-b-tech-(me)');

Route::get('/programs-B-Tech(CE&CSE)', function () {
    return view('frontend/programmes/programs-B-Tech(CE&CSE)');
})->name('programs-B-Tech(CE&CSE)');

Route::get('/programs-B-Tech(Electrical-Electronics-Engineering)', function () {
    return view('frontend/programmes/programs-B-Tech(Electrical-Electronics-Engineering)');
})->name('programs-B-Tech(Electrical-Electronics-Engineering)');

Route::get('/programs-B-Tech(Electronics-Communication-Engineering)', function () {
    return view('frontend/programmes/programs-B-Tech(Electronics-Communication-Engineering)');
})->name('programs-B-Tech(Electronics-Communication-Engineering)');

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

Route::get('/programs-Bachelor-of-Physiotherapy-(BPT)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Physiotherapy-(BPT)');
})->name('programs-Bachelor-of-Physiotherapy-(BPT)');

Route::get('/programs-Bachelor-of-Design-(Communication-Design)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-(Communication-Design)');
})->name('programs-Bachelor-of-Design-(Communication-Design)');

Route::get('/programs-Bachelor-of-Design-(Fashion-Design)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-(Fashion-Design)');
})->name('programs-Bachelor-of-Design-(Fashion-Design)');

Route::get('/programs-Bachelor-of-Design-(Fashion-Design)Lateral-Entry', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-(Fashion-Design)Lateral-Entry');
})->name('programs-Bachelor-of-Design-(Fashion-Design)Lateral-Entry');

Route::get('/programs-Bachelor-of-Design-(Graphic-Design)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-(Graphic-Design)');
})->name('programs-Bachelor-of-Design-(Graphic-Design)');

Route::get('/programs-Bachelor-of-Design-(Product-Design)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Design-(Product-Design)');
})->name('programs-Bachelor-of-Design-(Product-Design)');

Route::get('/programs-Bachelor-of-Fine-Arts(BFA)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Fine-Arts(BFA)');
})->name('programs-Bachelor-of-Fine-Arts(BFA)');

Route::get('/programs-Bachelor-of-Hotel-Management-(BHM)', function () {
    return view('frontend/programmes/programs-Bachelor-of-Hotel-Management-(BHM)');
})->name('programs-Bachelor-of-Hotel-Management-(BHM)');

Route::get('/programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry', function () {
    return view('frontend/programmes/programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry');
})->name('programs-Bachelor-of-Interior-Design-(BID)-Lateral-Entry');

Route::get('/programs-Bachelor-Travel', function () {
    return view('frontend/programmes/programs-Bachelor-Travel');
})->name('programs-Bachelor-Travel');

Route::get('/programs-BachelorInterior-Design(BID)', function () {
    return view('frontend/programmes/programs-BachelorInterior-Design(BID)');
})->name('programs-BachelorInterior-Design(BID)');

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

Route::get('/programs-MSc(IT)', function () {
    return view('frontend/programmes/programs-MSc(IT)');
})->name('programs-MSc(IT)');

Route::get('/programs-MSc-Forestry', function () {
    return view('frontend/programmes/programs-MSc-Forestry');
})->name('programs-MSc-Forestry');

Route::get('/programs-MSc-Medical-Laboratory(MMLT)', function () {
    return view('frontend/programmes/programs-MSc-Medical-Laboratory(MMLT)');
})->name('programs-MSc-Medical-Laboratory(MMLT)');

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

Route::get('/programs-MasterofPhysiotherapy(MPT)', function () {
    return view('frontend/programmes/programs-MasterofPhysiotherapy(MPT)');
})->name('programs-MasterofPhysiotherapy(MPT)');

Route::get('/programs-MBA-Finance', function () {
    return view('frontend/programmes/programs-MBA-Finance');
})->name('programs-MBA-Finance');

Route::get('/programs-MCA', function () {
    return view('frontend/programmes/programs-MCA');
})->name('programs-MCA');

Route::get('/programs-MSW', function () {
    return view('frontend/programmes/programs-MSW');
})->name('programs-MSW');

Route::get('/programs-Technology(OTT)', function () {
    return view('frontend/programmes/programs-Technology(OTT)');
})->name('programs-Technology(OTT)');

Route::get('/programs-BSc(IT)', function () {
    return view('frontend/programmes/programs-BSc(IT)');
})->name('programs-BSc(IT)');

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

Route::get('/programs-Master-of-Fine-Arts(MFA)', function () {
    return view('frontend/programmes/programs-Master-of-Fine-Arts(MFA)');
})->name('programs-Master-of-Fine-Arts(MFA)');

Route::get('/programs-BSc-Nursing', function () {
    return view('frontend/programmes/programs-BSc-Nursing');
})->name('programs-BSc-Nursing');

Route::get('/programs-BSc-Post-Basic', function () {
    return view('frontend/programmes/programs-BSc-Post-Basic');
})->name('programs-BSc-Post-Basic');

//End admission-programmes

//School & Faculty

Route::get('/schools-rgu', function () {
    return view('frontend/school&faculty/schools-rgu');
})->name('schools-rgu');

Route::get('/department-travel', function () {
    return view('frontend/school&faculty/department-travel');
})->name('department-travel');

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


//End School & Faculty

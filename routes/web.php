<?php

use App\Http\Controllers\KnowledgeBiteController;
use App\Http\Controllers\HomepageSpotlightController;
use App\Http\Controllers\KnowledgeBitePublishingController;
use App\Http\Controllers\PublicationPublishingController;

use App\Http\Controllers\ResearchSpotlightController;


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\InternController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResearchAssistantController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\AdminOverviewController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\GeneralEnquiryController;
use App\Http\Controllers\MembershipController;


use App\Http\Controllers\VolunteerController;

Route::get('/', [HomepageSpotlightController::class, 'homepage']);

Route::get('/history',function (){
    return view('history');
});



Route::get('/what_we_do',function (){
    return view ('what_we_do');
});

Route::get('/team',function (){
    return view ('team');
});

Route::get('/partners',function (){
    return view ('partners');
});

// Route::get('/what_we_do',function (){
//     return view ('what_we_do');
// });

Route::get('/areas_of_interest',function (){
    return view ('areas_of_interest');
});

Route::get('/ongoing_projects',function (){
    return view ('ongoing_projects');
});

Route::get('/completed_projects',function (){
    return view ('completed_projects');
});

Route::get(
    '/publications',
    [PublicationPublishingController::class, 'publicIndex']
)->name('publications.index');

Route::get('/news',function (){
    return view ('news');
});

Route::get('/reports',function (){
    return view ('reports');
});

Route::get('/events',function (){
    return view ('events');
});

Route::get('/photos_videos',function (){
    return view ('photos_videos');
});

Route::get('/become_member',function (){
    return view ('become_member');
});

Route::get('/intern',function (){
    return view ('intern');
});

Route::get('/volunteer',function (){
    return view ('volunteer');
});

Route::get('/research_assistant',function (){
    return view ('research_assistant');
});

Route::get('/leave_message',function (){
    return view ('leave_message');
});

Route::get('/general_enquiries',function (){
    return view ('general_enquiries');
});


Route::get('/knowledge_bite', [KnowledgeBitePublishingController::class, 'publicIndex']);
Route::get('/partner_with_us',function(){
    return view ('partner_with_us');
});

Route::get(
    '/admin/applications/{application}/cv',
    [AdminController::class, 'downloadCv']
);




Route::get('/intern', [InternController::class, 'create']);
Route::post('/intern', [InternController::class, 'store']);

Route::middleware(['auth', 'wasman.admin'])->group(function () {    // WASMaN Knowledge Bites publishing: authenticated administrators only.
    Route::get('/admin/knowledge-bites', [KnowledgeBitePublishingController::class, 'adminIndex'])->name('admin.knowledge-bites.index');
    Route::post('/admin/knowledge-bites', [KnowledgeBitePublishingController::class, 'store'])->name('admin.knowledge-bites.store');
    Route::patch('/admin/knowledge-bites/{bite}/status', [KnowledgeBitePublishingController::class, 'setStatus'])->name('admin.knowledge-bites.status');
    Route::delete('/admin/knowledge-bites/{bite}', [KnowledgeBitePublishingController::class, 'destroy'])->name('admin.knowledge-bites.destroy');


    // Route::get('/admin', [AdminController::class, 'index'])
    //     ->name('admin.dashboard');


// ADMIN OVERVIEW CONTROLLER
Route::get(
    '/admin',
    [AdminOverviewController::class, 'index']
)->name('admin.dashboard');


Route::get(
    '/admin/internships',
    [AdminController::class, 'index']
)->name('admin.internships');

// INTERNSHIP CONTROLLER

    Route::get(
        '/admin/applications/{application}/edit',
        [AdminController::class, 'edit']
    )->name('applications.edit');

    Route::put(
        '/admin/applications/{application}',
        [AdminController::class, 'update']
    )->name('applications.update');

    Route::delete(
        '/admin/applications/{application}',
        [AdminController::class, 'destroy']
    )->name('applications.destroy');

    Route::get(
        '/admin/applications/{application}/cv',
        [AdminController::class, 'downloadCv']
    )->name('applications.cv');

    // HOME PAGE RESEARCH SPOTLIGHT PUBLISHING (separate from Research Spotlight applications)
    Route::get('/admin/homepage-spotlights', [HomepageSpotlightController::class, 'index'])->name('admin.homepage-spotlights.index');
    Route::post('/admin/homepage-spotlights', [HomepageSpotlightController::class, 'store'])->name('admin.homepage-spotlights.store');
    Route::patch('/admin/homepage-spotlights/{spotlight}/feature', [HomepageSpotlightController::class, 'feature'])->name('admin.homepage-spotlights.feature');
    Route::delete('/admin/homepage-spotlights/{spotlight}', [HomepageSpotlightController::class, 'destroy'])->name('admin.homepage-spotlights.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

  
    /*
|--------------------------------------------------------------------------
| VOLUNTEER ADMIN ROUTES
|--------------------------------------------------------------------------
*/


    Route::get(
        '/admin/volunteers',
        [AdminController::class, 'volunteers']
    )->name('admin.volunteers');


    Route::get(
        '/admin/volunteers/{volunteer}/edit',
        [AdminController::class, 'editVolunteer']
    )->name('volunteers.edit');


    Route::put(
        '/admin/volunteers/{volunteer}',
        [AdminController::class, 'updateVolunteer']
    )->name('volunteers.update');


    Route::delete(
        '/admin/volunteers/{volunteer}',
        [AdminController::class, 'destroyVolunteer']
    )->name('volunteers.destroy');


    // RESEARCH CONTROLLER
Route::get(
    '/admin/research-assistants',
    [AdminController::class, 'researchAssistants']
)->name('admin.research-assistants');


Route::get(
    '/admin/research-assistants/{application}/document',
    [AdminController::class, 'downloadResearchDocument']
)->name('research-assistants.document');


Route::get(
    '/admin/research-assistants/{application}/edit',
    [AdminController::class, 'editResearchAssistant']
)->name('research-assistants.edit');


Route::put(
    '/admin/research-assistants/{application}',
    [AdminController::class, 'updateResearchAssistant']
)->name('research-assistants.update');


Route::delete(
    '/admin/research-assistants/{application}',
    [AdminController::class, 'destroyResearchAssistant']
)->name('research-assistants.destroy');

// PARTNER WITH US
Route::get(
    '/admin/partners',
    [AdminController::class, 'partners']
)->name('admin.partners');


Route::get(
    '/admin/partners/{partner}/edit',
    [AdminController::class, 'editPartner']
)->name('partners.edit');


Route::put(
    '/admin/partners/{partner}',
    [AdminController::class, 'updatePartner']
)->name('partners.update');


Route::delete(
    '/admin/partners/{partner}',
    [AdminController::class, 'destroyPartner']
)->name('partners.destroy');

/*
|--------------------------------------------------------------------------
| Messages
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/messages',
    [AdminController::class, 'messages']
)->name('admin.messages');


Route::get(
    '/admin/messages/{message}',
    [AdminController::class, 'showMessage']
)->name('messages.show');


Route::get(
    '/admin/messages/{message}/attachment',
    [AdminController::class, 'downloadMessageAttachment']
)->name('messages.attachment');


Route::delete(
    '/admin/messages/{message}',
    [AdminController::class, 'destroyMessage']
)->name('messages.destroy');

/*
|--------------------------------------------------------------------------
| General Enquiries
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/general-enquiries',
    [AdminController::class, 'generalEnquiries']
)->name('admin.general-enquiries');


Route::get(
    '/admin/general-enquiries/{enquiry}',
    [AdminController::class, 'showGeneralEnquiry']
)->name('general-enquiries.show');


Route::delete(
    '/admin/general-enquiries/{enquiry}',
    [AdminController::class, 'destroyGeneralEnquiry']
)->name('general-enquiries.destroy');

// add here

// MEMBERSHIP ROUTES

Route::get('/admin/memberships', [AdminController::class, 'memberships'])
    ->name('admin.memberships');

Route::get('/admin/memberships/{membership}', [AdminController::class, 'showMembership'])
    ->name('admin.memberships.show');

Route::patch('/admin/memberships/{membership}/status', [AdminController::class, 'updateMembershipStatus'])
    ->name('admin.memberships.status');

Route::delete('/admin/memberships/{membership}', [AdminController::class, 'destroyMembership'])
    ->name('admin.memberships.destroy');
    
// research spotlight routes

Route::get('/admin/research-spotlight', [ResearchSpotlightController::class, 'adminIndex'])->name('admin.research-spotlight.index');
Route::get('/admin/research-spotlight/{application}', [ResearchSpotlightController::class, 'adminShow'])->name('admin.research-spotlight.show');
Route::patch('/admin/research-spotlight/{application}/status', [ResearchSpotlightController::class, 'updateStatus'])->name('admin.research-spotlight.status');
Route::get('/admin/research-spotlight/{application}/photo', [ResearchSpotlightController::class, 'photo'])->name('admin.research-spotlight.photo');
Route::delete('/admin/research-spotlight/{application}', [ResearchSpotlightController::class, 'destroy'])->name('admin.research-spotlight.destroy');

    

    // ==========================================
    // PUBLICATIONS ADMINISTRATOR ROUTES
    // ==========================================

    Route::get(
        '/admin/publications',
        [PublicationPublishingController::class, 'adminIndex']
    )->name('admin.publications.index');

    Route::post(
        '/admin/publications',
        [PublicationPublishingController::class, 'store']
    )->name('admin.publications.store');

    Route::patch(
        '/admin/publications/{publication}/status',
        [PublicationPublishingController::class, 'setStatus']
    )->name('admin.publications.status');

    Route::patch(
        '/admin/publications/{publication}/feature',
        [PublicationPublishingController::class, 'feature']
    )->name('admin.publications.feature');

    Route::delete(
        '/admin/publications/{publication}',
        [PublicationPublishingController::class, 'destroy']
    )->name('admin.publications.destroy');


});

// INTERN


Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);



// VOLUNTEER
Route::get('/volunteer', function () {
    return view('volunteer');
});

Route::post(
    '/volunteer',
    [VolunteerController::class, 'store']
)->name('volunteer.store');


// RESEARCH ASSISTANT

Route::get('/research_assistant', function () {
    return view('research_assistant');
})->name('research-assistant');


Route::post(
    '/research_assistant',
    [ResearchAssistantController::class, 'store']
)->name('research-assistant.store');

// PARTNER WITH US
Route::get('/partner_with_us', function () {

    return view('partner_with_us');

})->name('partner-with-us');


Route::post(
    '/partner_with_us',
    [PartnerController::class, 'store']
)->name('partner.store');

// LEAVE MESSAGE
Route::get('/leave_message', function () {
    return view('leave_message');
})->name('leave-message');

Route::post(
    '/leave_message',
    [ContactMessageController::class, 'store']
)->name('messages.store');

// GENERAL ENQUIRIES
Route::get('/general_enquiries', function () {
    return view('general_enquiries');
})->name('general-enquiries');

Route::post(
    '/general_enquiries',
    [GeneralEnquiryController::class, 'store']
)->name('general-enquiries.store');

Route::get('/knowledge-bites/{slug}/read', [KnowledgeBiteController::class, 'read'])
    ->name('knowledge-bites.read');

Route::get('/knowledge-bites/{slug}/download', [KnowledgeBiteController::class, 'download'])
    ->name('knowledge-bites.download');

Route::get('/homepage-spotlights/{spotlight}/flyer', [HomepageSpotlightController::class, 'flyer'])->name('home-spotlights.flyer');
Route::get('/homepage-spotlights/{spotlight}/article', [HomepageSpotlightController::class, 'article'])->name('home-spotlights.article');

// =============================================
// WHAT WE DO - DETAIL PAGES
// =============================================

Route::view(
    '/what-we-do/research-scientific-innovation',
    'what-we-do.research'
)->name('what-we-do.research');

Route::view(
    '/what-we-do/capacity-building-mentorship',
    'what-we-do.capacity'
)->name('what-we-do.capacity');

Route::view(
    '/what-we-do/policy-advocacy',
    'what-we-do.policy'
)->name('what-we-do.policy');

Route::view(
    '/what-we-do/collaboration-network',
    'what-we-do.collaboration'
)->name('what-we-do.collaboration');

Route::post('/become_member', [MembershipController::class, 'store'])
    ->name('membership.store');

    // donate
    Route::view('/donate', 'donate')->name('donate');
    // Route::view('/donate', 'donate')->name('donate');

    // RESEARCH SPOTLIGHT ROUTES
Route::get('/research-spotlight', [HomepageSpotlightController::class, 'publicResearchPage'])->name('research-spotlight.index');

Route::post('/research-spotlight', [ResearchSpotlightController::class, 'store'])->name('research-spotlight.store');



// Public routes for new uploaded publications; legacy PDF routes above remain unchanged.
Route::get('/knowledge-bites/published/{bite}/cover', [KnowledgeBitePublishingController::class, 'cover'])->name('knowledge-bites.published.cover');
Route::get('/knowledge-bites/published/{bite}/read', [KnowledgeBitePublishingController::class, 'read'])->name('knowledge-bites.published.read');
Route::get('/knowledge-bites/published/{bite}/download', [KnowledgeBitePublishingController::class, 'download'])->name('knowledge-bites.published.download');


// ==========================================
// PUBLICATIONS PUBLIC FILE ROUTES
// ==========================================

Route::get(
    '/publications/{publication}/cover',
    [PublicationPublishingController::class, 'cover']
)->name('publications.cover');

Route::get(
    '/publications/{publication}/read',
    [PublicationPublishingController::class, 'read']
)->name('publications.read');

Route::get(
    '/publications/{publication}/download',
    [PublicationPublishingController::class, 'download']
)->name('publications.download');

// WASMaN additional publishing modules
require __DIR__.'/wasman_publishing.php';

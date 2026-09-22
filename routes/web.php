<?php

use App\Http\Controllers\KnowledgeBiteController;

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


use App\Http\Controllers\VolunteerController;

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/publications',function (){
    return view ('publications');
});

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


Route::get('/knowledge_bite',function(){
    return view ('knowledge_bite');
});
Route::get('/partner_with_us',function(){
    return view ('partner_with_us');
});

Route::get(
    '/admin/applications/{application}/cv',
    [AdminController::class, 'downloadCv']
);




Route::get('/intern', [InternController::class, 'create']);
Route::post('/intern', [InternController::class, 'store']);

Route::middleware('auth')->group(function () {

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
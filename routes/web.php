<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\InternController;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', [AdminController::class, 'index']);
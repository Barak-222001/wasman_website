<?php
// Included at the end of routes/web.php by INSTALL.ps1.
use App\Http\Controllers\SectionPublishingController;
use Illuminate\Support\Facades\Route;

$wasmanSections = [
    'reports'=>'reports','news'=>'news','events'=>'events',
    'ongoing-projects'=>'ongoing_projects','completed-projects'=>'completed_projects',
    'photos-videos'=>'photos_videos',
];
foreach ($wasmanSections as $key=>$path) {
    // The existing static GET route is superseded by this controller route.
    Route::get('/'.$path, [SectionPublishingController::class,'publicIndex'])->defaults('section',$key)->name('wasman.publish.public.'.$key);
}
Route::get('/wasman-content/{section}/{item}/{kind}',[SectionPublishingController::class,'file'])->where('kind','cover|read|download')->name('wasman.publish.file');
Route::middleware(['auth','wasman.admin'])->prefix('admin/publishing')->group(function () {
    Route::get('/{section}',[SectionPublishingController::class,'adminIndex'])->name('wasman.publish.admin');
    Route::post('/{section}',[SectionPublishingController::class,'store'])->name('wasman.publish.store');
    Route::put('/{section}/{item}',[SectionPublishingController::class,'update'])->name('wasman.publish.update');
    Route::patch('/{section}/{item}/status',[SectionPublishingController::class,'status'])->name('wasman.publish.status');
    Route::delete('/{section}/{item}',[SectionPublishingController::class,'destroy'])->name('wasman.publish.destroy');
});

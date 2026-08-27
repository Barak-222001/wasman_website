<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\InternApplication;


use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index()
    {
        $applications = InternApplication::all();

        return view('admin', [
            'applications' => $applications
        ]);
    }

    public function downloadCv(InternApplication $application)
    {
        // route model binding
        
        return Storage::disk('public')
            ->download($application->document);
    }

}

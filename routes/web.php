<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/job-listings', function () {
    $jobs = JobListing::with('employer')->get();
    return view('job-listings', ['jobs' => $jobs]);
});

Route::get('/job-listings/{id}', function ($id) {
    $job = JobListing::find($id);
    return view('job-listing', ['job' => $job]);
});

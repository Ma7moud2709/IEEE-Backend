<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    // $jobs = Job::with('Employer')->get(); // To Solve N+1 Problem
    $jobs = Job::with('Employer')->latest()->paginate(3); /*Number of items to load in page => ?page=n to see the others*/
    //  $jobs = Job::with('employer')->simplePaginate(3); //Hide total number of pages Only Next and Previous
    return view('jobs.index',  [
        'jobs' => $jobs,
    ]);
});

Route::get('jobs/create', function () {

    return view('jobs.create');
});

Route::get('jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function(){
    Job::create([
        'title' => request('jobTitle'),
        'salary' => request('jobSalary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});

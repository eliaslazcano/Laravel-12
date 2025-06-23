<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/jobs', fn() => view('jobs', ['jobs' => Job::all()]));
Route::get('/jobs/{id}', fn(int $id) => view('job', ['job' => Job::find($id)]));
Route::get('/contact', fn() => view('contact'));

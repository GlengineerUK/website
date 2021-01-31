<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/', function () {
    $projects = App\Models\Project::published()->get();
    return view('welcome', ['projects' => $projects]);
})->name('welcome');

Route::resource('projects', ProjectController::class);
Route::get('/projects/{project}/publish', [ProjectController::class, 'publish'])->name('projects.publish');
Route::get('/projects/{project}/unpublish', [ProjectController::class, 'unpublish'])->name('projects.unpublish');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $projects = App\Models\Project::all();
    return view('dashboard', ['projects' => $projects]);
})->name('dashboard');

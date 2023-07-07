<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/candidates', [CandidatesController::class, 'index'])->name('candidates');

Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');

//authentication
// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//only logged in users to access
Route::group(['middleware' => 'auth'], function(){
    Route::post('/job/add', [JobsController::class, 'store'])->name('storeJob');
    Route::get('/jobs/manage', [JobsController::class, 'manageJobs'])->name('manageJobs');
    Route::get('/jobs/new', [JobsController::class, 'newJob'])->name('newJob');
    Route::get('/jobs/application', [ApplicationController::class, 'index'])->name('application');
    Route::get('jobs/apply/{id}', [ApplicationController::class, 'showapplicationForm'])->name('apply');
    

    Route::get('/candidates/dashboard', [CandidatesController::class, 'candidateDashbaord'])->name('candidateDashbaord');
    //candidate details
    Route::get('/candidate-details/{id}', [CandidatesController::class, 'candidateDetails'])->name('candidateDetails');

    //show profile form
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

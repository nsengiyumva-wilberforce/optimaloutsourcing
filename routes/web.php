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
use App\Http\Controllers\SettingsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

//route for cv generator
Route::get('/cv-generator', [ProfileController::class, 'cvGenerator'])->name('cvGenerator');

//authentication
// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Registration routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

//email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/profile');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//about us route
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');

//contact us route
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');

//faqs route
Route::get('/faqs', [HomeController::class, 'faq'])->name('faq');

//get jobs by location or keyword
Route::post('/jobs/search', [JobsController::class, 'search'])->name('search');

//contact us form
Route::post('/contact-us', [HomeController::class, 'submitContactForm'])->name('contact.submit');

//only logged in users to access
Route::group(['middleware' => 'auth'], function () {
    Route::post('/job/add', [JobsController::class, 'store'])->name('storeJob')->middleware('verified');
    Route::get('/jobs/manage', [JobsController::class, 'manageJobs'])->name('manageJobs')->middleware('verified');
    Route::get('/jobs/new', [JobsController::class, 'newJob'])->name('newJob')->middleware('verified');
    Route::get('/jobs/application', [ApplicationController::class, 'index'])->name('application')->middleware('verified');
    Route::get('jobs/apply/{id}', [ApplicationController::class, 'showapplicationForm'])->name('apply')->middleware('verified');


    Route::get('/candidates/dashboard', [CandidatesController::class, 'candidateDashbaord'])->name('candidateDashbaord')->middleware('verified');
    //candidate details
    Route::get('/candidate-details/{id}', [CandidatesController::class, 'candidateDetails'])->name('candidateDetails')->middleware('verified');

    //show profile form
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('verified');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('verified');

    //create-cv
    Route::get('/create-cv', [ProfileController::class, 'createCv'])->name('createCv')->middleware('verified');

    //update-cv
    Route::post('/update-cv', [ProfileController::class, 'updateCv'])->name('updateCv');

    //cv-editor
    route::get('cv-generator/edit-cv', [ProfileController::class, 'editCv'])->name('edit-cv')->middleware('verified');

    //define settings route
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

    //settings routes
    Route::post('/settings/employment-type', [SettingsController::class, 'createEmploymentType'])->name('createEmploymentType');
    Route::post('/settings/experience-level', [SettingsController::class, 'createExperienceLevel'])->name('createExperienceLevel');
    Route::post('/settings/salary-range', [SettingsController::class, 'createSalaryRange'])->name('createSalaryRange');
    Route::post('/settings/job-category', [SettingsController::class, 'createJobCategory'])->name('createJobCategory');
});

<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CompanyHistoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ApplyNowController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUs;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\IndustrialServicesController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\MarineServices;
use App\Http\Controllers\MarineServicesController;
use App\Http\Controllers\OurFounderController;
use App\Http\Controllers\OurPeopleController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\SustainabilityController;
use App\Models\JobsOpeningsModel;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomePageController::class, 'render'])->name('homepage');
Route::get('/about-us', [AboutUsController::class, 'render'])->name('about-us');
Route::get('/our-founder', [OurFounderController::class, 'render'])->name('our-founder');
Route::get('/our-story', [StoryController::class, 'render'])->name('our-story');
Route::get('/sustainability', [SustainabilityController::class, 'render'])->name('sustainability');
Route::get('/marine-support', [MarineServicesController::class, 'render'])->name('marine-support');
Route::get('/industrial-catering', [IndustrialServicesController::class, 'render'])->name('industrial-catering');
Route::get('/our-people', [OurPeopleController::class, 'render'])->name('our-people');
Route::get('/contact-us', [ContactUsController::class, 'render'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'send'])->name('contactUs');
Route::get('/apply-now', [ApplyNowController::class, 'render'])->name('apply-now');
Route::post('/apply-now', [ApplyNowController::class, 'send'])->name('applyNow');
Route::get('/blog-details/{slug}', [BlogController::class, "show"])->name('blog-details');
Route::get("/policies/{slug}", [LegalController::class, 'render'])->name('policies');
Route::get('/job-details/{slug}', [JobDetailsController::class, "show"])->name('job-details');
Route::get('/company-history', [CompanyHistoryController::class, 'render'])->name('company-history');

Route::get('/company-assets', function () {
    return view('pages.company-assets');
})->name('company-assets');
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');
Route::get('/job-openings', function () {
    return view('pages.job-openings');
})->name('job-openings');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('blogs');


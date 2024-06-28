<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegitrationController;
use App\Http\Controllers\PaymentGatwayController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/activities', [HomeController::class, 'activity']);
Route::post('/activities/filterByMonth', [HomeController::class, 'filterByMonth'])->name('filterByMonth');
Route::get('/blogdetail/{id}', [HomeController::class, 'blogdetail'])->name('blogdetail');
Route::get('/about', [HomeController::class, 'about']);
Route::get('/founder', [HomeController::class, 'founder']);
Route::get('/volunteering', [HomeController::class, 'volunteering']);
Route::get('/activitydetail/{id}', [HomeController::class, 'activitydetail'])->name('activitydetail');
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/campaign/{id}', [HomeController::class, 'campaign']);
Route::get('/allcamp/{id}', [HomeController::class, 'allcamp']);
Route::get('/privacy', [HomeController::class, 'privacy']);
Route::get('/condition', [HomeController::class, 'condition']);
Route::get('/act', [HomeController::class, 'condition']);
Route::get('/workdetail/{subcategory_id}', [HomeController::class, 'workdetail'])->name('workdetail');
Route::get('/worksubcat/{subcategory_id}', [HomeController::class, 'worksubcat'])->name('worksubcat');

Route::get("/gallery-album", [HomeController::class, 'gallery']);
Route::get("/donateconform", [HomeController::class, 'donateconform']);

Route::get('/donate', [HomeController::class, 'donate']);
Route::get('/gallery/{id}/{type}', [HomeController::class, 'ngogalary']);

Route::post("/akino/contactus/form", [HomeController::class, 'contactusForm']);

Route::post("/donation/create", [HomeController::class, "createDonation"]);

Route::get("/payment/razorpay/{payment_id}/{donation_id}/{success}", [HomeController::class, "paymentSuccess"]);



Route::get("/payment/confirmation/success/{donation_id}", [HomeController::class, "paymentConfirmationSuccess"]);
Route::get("/donation/{status}/{razorpay_payment_id}", [HomeController::class, "confirmDonation"]);

Route::get("/payment/phonepe", [PaymentGatwayController::class, "phonepePaymentProcees"]);
Route::post("/donation/payment/init", [PaymentGatwayController::class, "phonepePaymentInit"]);
Route::post("/redirect-url", [PaymentGatwayController::class, "redirectUrlPhonepe"]);


Route::get('/pdf/80g/certificate/{id}', [PdfController::class, 'download80GCertificatePdf']);

// For Volunteer
Route::get("/volunteer/donation", [HomeController::class, "volunteerDonation"]);
Route::post("/volunteer/donation/create", [HomeController::class, "createDonationForVolunteer"]);

Route::get('/mailtest', [PaymentGatwayController::class, 'sendMail']);
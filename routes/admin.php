<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegitrationController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Admin\Users;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\Activity;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\WorkDetail;
use App\Http\Controllers\Admin\VolunteerdetailController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\CompaignCategories;
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


Route::get('/login', [AuthController::class, 'signin'])->name('login');

Route::post("/authentication", [AuthController::class,'login']);

Route::get("/logout", [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    });

    
    Route::get('/faqs', [FAQController::class, "index"]);
    Route::get('/faqs/{id}', [FAQController::class, "view"]);
    Route::get('/faqs/{status}/{id}', [FAQController::class, "changeStatus"]);
    Route::get("/faq/create", [FAQController::class, 'create']);
    Route::post("/faq/store", [FAQController::class, 'store']);

    Route::get('/categories', [Category::class, 'index']);
    Route::get('/categories/create', [Category::class, 'createCategory']);
    Route::get('/categories/edit/{id}', [Category::class, 'edit']);
    Route::post('/categories/update', [Category::class, 'update']);
    Route::post('/categories/store', [Category::class, 'store']);

    Route::get("/testimonial", [TestimonialController::class, 'index']);
    Route::get("/testimonial/edit/{id}", [TestimonialController::class, 'view']);
    Route::get("/testimonial/create", [TestimonialController::class, 'create']);
    Route::post("/testimonial/store", [TestimonialController::class, 'store']);

    Route::get("/volunteer", [VolunteerdetailController::class, 'index']);
    // Route::get("/testimonial/edit/{id}", [TestimonialController::class, 'view']);
    // Route::get("/testimonial/create", [TestimonialController::class, 'create']);
    // Route::post("/testimonial/store", [TestimonialController::class, 'store']);

    Route::get("/activity", [Activity::class, 'index']);
    Route::get("/activity/edit/{id}", [Activity::class, 'view']);
    Route::get('/activity/view/{id}', [Activity::class, 'viewpage'])->name('activity.view');
    Route::get("/activity/create", [Activity::class, 'create']);
    Route::post("/activity/store", [Activity::class, 'store']);
    Route::get('/activity/{status}/{id}', [Activity::class, "changeStatus"]);
    Route::delete('/admin/deleteactivity/{id}', [Activity::class, 'deleteactivity'])->name('admin.activity.deleteactivity');

    Route::get("/blog", [BlogController::class, 'index']);
    Route::get("/blog/edit/{id}", [BlogController::class, 'view']);
    Route::get("/blog/create", [BlogController::class, 'create']);
    Route::post("/blog/store", [BlogController::class, 'store']);
    Route::get('/blog/{status}/{id}', [BlogController::class, "changeStatus"]);
    Route::delete('/admin/delete/{id}', [BlogController::class, 'deleteblog'])->name('admin.blog.delete');
    
    Route::get("/ourwork", [WorkDetail::class, 'index']);
    Route::get("/ourwork/edit/{id}", [WorkDetail::class, 'view']);
    Route::get("/ourwork/create", [WorkDetail::class, 'create']);
    Route::post("/ourwork/store", [WorkDetail::class, 'store']);
    Route::get('/ourwork/{status}/{id}', [WorkDetail::class, "changeStatus"]);
    // Route::delete('/admin/ourworkdelete/{id}', [WorkDetail::class, 'deleteourwork'])->name('admin.ourwork.delete');
    
    Route::get('/campagiancategory', [CompaignCategories::class, 'index']);
    Route::get('/campagiancategory/create', [CompaignCategories::class, 'createCategory']);
    Route::get('/campagiancategory/edit/{id}', [CompaignCategories::class, 'edit']);
    Route::post('/campagiancategory/update', [CompaignCategories::class, 'update']);
    Route::post('/campagiancategory/store', [CompaignCategories::class, 'store']);
    Route::delete('/campagiancategory/delete/{id}', [CompaignCategories::class, 'delete'])->name('admin.campagiancategory.delete');


    Route::get("/subsubcategory", [SubcategoryController::class, 'index']);
    Route::get("/subsubcategory/edit/{id}", [SubcategoryController::class, 'view']);
    Route::get("/subsubcategory/create", [SubcategoryController::class, 'create']);
    Route::post("/subsubcategory/store", [SubcategoryController::class, 'store']);
    Route::get('/subsubcategory/{status}/{id}', [SubcategoryController::class, "changeStatus"]);

    Route::get("/impact", [TestimonialController::class, 'impactIndex']);
    Route::get("/impact/edit/{id}", [TestimonialController::class, 'impactView']);
    Route::get("/impact/create", [TestimonialController::class, 'impactCreate']);
    Route::post("/impact/store", [TestimonialController::class, 'impactStore']);

    Route::get("/blogs", [TestimonialController::class, 'blogsIndex']);
    Route::get("/blogs/edit/{id}", [TestimonialController::class, 'blogsView']);
    Route::get("/blogs/create", [TestimonialController::class, 'blogsCreate']);
    Route::post("/blogs/store", [TestimonialController::class, 'blogsStore']);

    Route::get("/gallery", [GalleryController::class, 'index']);
    Route::get("/album/create", [GalleryController::class, 'createAlbum']);
    Route::get("/album/edit/{id}", [GalleryController::class, 'editAlbum']);
    Route::post("/album/store", [GalleryController::class, 'storeAlbum']);
    Route::get("/gallery/view/{id}", [GalleryController::class, 'showGallery']);
    Route::get("/gallery/create/{id}", [GalleryController::class, 'create']);
    Route::post("/gallery/store", [GalleryController::class, 'store']);
    Route::get("/gallary/delete/{id}", [GalleryController::class, "deleteGallary"]);

    Route::get("/campaign/create", [CampaignController::class, 'create']);
    Route::get("/campaign/edit/{id}", [CampaignController::class, 'edit']);
    Route::post("/campaign/store", [CampaignController::class, 'store']);
    Route::post("/campaign/update", [CampaignController::class, 'update']);
    Route::get("/campaign/document/create/{id}", [CampaignController::class, 'documentCreate']);
    Route::get("/campaign/document/view/{id}", [CampaignController::class, 'documentView']);
    Route::get("/campaign/document/delete/{id}", [CampaignController::class, 'documentDelete']);
    Route::post("/campaign/document/store", [CampaignController::class, 'documentStore']);
    Route::get("/campaign/view", [CampaignController::class, 'index']);


});



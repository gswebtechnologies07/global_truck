<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Common Routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about');
Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact');
Route::get('contact#scroll', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact#scroll');
Route::post('add-contact', [App\Http\Controllers\ContactUsController::class, 'storeContacts'])->name('add-contact');
Route::post('enroll', [App\Http\Controllers\EnrollController::class, 'add_enroll'])->name('enroll');
Route::get('cms/{slug}', [App\Http\Controllers\CmsController::class, 'getPage'])->name('cms');
Route::get('policies', [App\Http\Controllers\HomeController::class, 'policies'])->name('policies');
Route::get('programs', [App\Http\Controllers\HomeController::class, 'programs'])->name('programs');
Route::get('air-brake', [App\Http\Controllers\HomeController::class, 'air_brake'])->name('air-brake');
Route::get('dz-license-course', [App\Http\Controllers\HomeController::class, 'dz_license_course'])->name('dz-license-course');
Route::get('az-license-course', [App\Http\Controllers\HomeController::class, 'az_license_course'])->name('az-license-course');

// Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminLogin'])->name('admin');
// Route::post('adminLoginStore', [App\Http\Controllers\HomeController::class, 'adminLoginStore'])->name('adminLoginStore');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [\App\Http\Controllers\admin\IndexController::class, 'index'])->name('dashboard');

    Route::get('sexual-harassment-policy', [\App\Http\Controllers\admin\CMSController::class, 'sexualPolicyEdit'])->name('sexual-harassment-policy');
    Route::post('sexual-harassment-policy', [\App\Http\Controllers\admin\CMSController::class, 'sexualPolicyUpdate']);
    
    Route::get('student-expulsion-policy', [\App\Http\Controllers\admin\CMSController::class, 'expulsionPolicyEdit'])->name('student-expulsion-policy');
    Route::post('student-expulsion-policy', [\App\Http\Controllers\admin\CMSController::class, 'expulsionPolicyUpdate']);
    
    Route::get('fee-refund-policy', [\App\Http\Controllers\admin\CMSController::class, 'feePolicyEdit'])->name('fee-refund-policy');
    Route::post('fee-refund-policy', [\App\Http\Controllers\admin\CMSController::class, 'feePolicyUpdate']);
    
    Route::get('student-complaint-procedure', [\App\Http\Controllers\admin\CMSController::class, 'stuComProEdit'])->name('student-complaint-procedure');
    Route::post('student-complaint-procedure', [\App\Http\Controllers\admin\CMSController::class, 'stuComProUpdate']);
    
    Route::get('about-us', [\App\Http\Controllers\admin\CMSController::class, 'aboutEdit'])->name('about-us');
    
    Route::get('settings', [\App\Http\Controllers\admin\CMSController::class, 'settingsEdit'])->name('settings');
    Route::patch('settings-update', [App\Http\Controllers\admin\CMSController::class, 'settingsUpdate'])->name('settings-update');
    
    //admin profile
    Route::get('admin-profile/{id}', [App\Http\Controllers\admin\ProfileController::class, 'admin_profile'])->name('admin-profile');
    Route::patch('admin-profile-update', [App\Http\Controllers\admin\ProfileController::class, 'admin_profile_update'])->name('admin-profile-update');
    
    //password reset
    Route::get('reset-password', [\App\Http\Controllers\admin\ProfileController::class, 'reset_password'])->name('reset-password');
    Route::patch('password-update', [\App\Http\Controllers\admin\ProfileController::class, 'password_update'])->name('password-update');
    
    //Contact Details
    Route::get('delete-contact-details/{id}', [App\Http\Controllers\admin\ContactController::class, 'delete'])->name('delete-contact-details');
    Route::get('edit-contact-details/{id}', [App\Http\Controllers\admin\ContactController::class, 'edit_contact_details'])->name('edit-contact-details');
    Route::get('contact-list', [\App\Http\Controllers\admin\ContactController::class, 'contact_details_list'])->name('contact-list');
    Route::patch('update-contact-details', [App\Http\Controllers\admin\ContactController::class, 'update_contact_details'])->name('update-contact-details');
    
    //Enquiries
    Route::get('/enquiry-list', [App\Http\Controllers\admin\ContactController::class, 'enquiry_list'])->name('enquiry-list');
    Route::get('/enquiry-modal/{id}', [App\Http\Controllers\admin\ContactController::class, 'enquiry_modal'])->name('enquiry-modal');
    Route::get('/modal-data', [App\Http\Controllers\admin\ContactController::class, 'modal_data'])->name('modal-data');
    
    
    //Bannners
    Route::get('/banner-list', [App\Http\Controllers\admin\BannerController::class, 'banner_list'])->name('banner-list');
    Route::get('/add-banner', [App\Http\Controllers\admin\BannerController::class, 'addBanner'])->name('add-banner');
    Route::POST('/store-banner', [App\Http\Controllers\admin\BannerController::class, 'storeBanner'])->name('store-banner');
    Route::get('banner-edit/{id}', [App\Http\Controllers\admin\BannerController::class, 'banner_edit'])->name('banner-edit');
    Route::patch('banner-update', [App\Http\Controllers\admin\BannerController::class, 'banner_update'])->name('banner-update');
    Route::get('banner-delete/{id}', [App\Http\Controllers\admin\BannerController::class, 'delete'])->name('banner-delete');
    
     //CMS
     Route::get('/cms-list', [App\Http\Controllers\admin\CMSController::class, 'cmsList'])->name('cms-list');
     Route::post('/cms-status', [App\Http\Controllers\admin\CMSController::class, 'updateCmsStatus'])->name('cms-status');
     Route::get('/add-cms', [App\Http\Controllers\admin\CMSController::class, 'addCms'])->name('add-cms');
     Route::POST('/store-cms', [App\Http\Controllers\admin\CMSController::class, 'store_cms'])->name('store-cms');
     Route::get('/edit-cms/{id}', [App\Http\Controllers\admin\CMSController::class, 'edit_cms'])->name('edit-cms');
     Route::patch('update-cms', [App\Http\Controllers\admin\CMSController::class, 'update_cms'])->name('update-cms');
     Route::get('cms-delete/{id}', [App\Http\Controllers\admin\CMSController::class, 'delete'])->name('cms-delete');
    
   
     //About Us
     Route::get('/about-us-edit', [App\Http\Controllers\admin\AboutController::class, 'about_edit'])->name('about-us-edit');
     Route::post('/about-update', [App\Http\Controllers\admin\AboutController::class, 'about_update'])->name('about-update');
     Route::get('/gallery-list', [App\Http\Controllers\admin\AboutController::class, 'gallery_list'])->name('gallery-list');
     Route::get('/add-gallery', [App\Http\Controllers\admin\AboutController::class, 'add_gallery'])->name('add-gallery');
     Route::POST('/store-gallery', [App\Http\Controllers\admin\AboutController::class, 'store_gallery'])->name('store-gallery');
     Route::get('/edit-gallery/{id}', [App\Http\Controllers\admin\AboutController::class, 'edit_gallery'])->name('edit-gallery');
     Route::post('update-gallery', [App\Http\Controllers\admin\AboutController::class, 'update_gallery'])->name('update-gallery');
     Route::get('gallery-delete/{id}', [App\Http\Controllers\admin\AboutController::class, 'delete'])->name('gallery-delete');
     
     
     //Training Startegies
     Route::get('/training-strategies', [App\Http\Controllers\admin\TrainingController::class, 'index'])->name('training-strategies');
     Route::post('/training-update', [App\Http\Controllers\admin\TrainingController::class, 'training_update'])->name('training-update');
     
     
     //Programs
    Route::get('/program-list', [App\Http\Controllers\admin\ProgramController::class, 'program_list'])->name('program-list');
    Route::get('/add-program', [App\Http\Controllers\admin\ProgramController::class, 'add_program'])->name('add-program');
    Route::POST('/store-program', [App\Http\Controllers\admin\ProgramController::class, 'store_program'])->name('store-program');
    Route::get('/edit-programs/{id}', [App\Http\Controllers\admin\ProgramController::class, 'edit_programs'])->name('edit-programs');
    Route::post('/update-programs', [App\Http\Controllers\admin\ProgramController::class, 'update_programs'])->name('update-programs');
    Route::post('/program-status', [App\Http\Controllers\admin\ProgramController::class, 'updateProgramStatus'])->name('program-status');
    Route::get('program-delete/{id}', [App\Http\Controllers\admin\ProgramController::class, 'delete'])->name('program-delete');
    
    
    //Blogs
    Route::get('/blog-list', [App\Http\Controllers\admin\BlogController::class, 'blog_list'])->name('blog-list');
    Route::get('/add-blog', [App\Http\Controllers\admin\BlogController::class, 'add_blog'])->name('add-blog');
    Route::POST('/store-blog', [App\Http\Controllers\admin\BlogController::class, 'store_blog'])->name('store-blog');
    Route::get('/edit-blog/{id}', [App\Http\Controllers\admin\BlogController::class, 'edit_blog'])->name('edit-blog');
    Route::get('blog-delete/{id}', [App\Http\Controllers\admin\BlogController::class, 'delete'])->name('blog-delete');
    Route::post('/update-blog-status', [App\Http\Controllers\admin\BlogController::class, 'updateBlogStatus'])->name('update-blog-status');
    
    
    //Category
    Route::get('/add-category', [App\Http\Controllers\admin\CategoryController::class, 'add_category'])->name('add-category');
    Route::POST('/store-category', [App\Http\Controllers\admin\CategoryController::class, 'store_category'])->name('store-category');
    Route::get('/category-list', [App\Http\Controllers\admin\CategoryController::class, 'category_list'])->name('category-list');
    Route::get('/edit-category/{id}', [App\Http\Controllers\admin\CategoryController::class, 'edit_category'])->name('edit-category');
    Route::post('/update-category', [App\Http\Controllers\admin\CategoryController::class, 'update_category'])->name('update-category');
    Route::get('category-delete/{id}', [App\Http\Controllers\admin\CategoryController::class, 'delete'])->name('category-delete');
   
     
   
});



require __DIR__.'/auth.php';

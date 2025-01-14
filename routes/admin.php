<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\EditorImageController;
use App\Http\Controllers\Admin\Setting\AboutmeSettingController;
use App\Http\Controllers\Admin\Setting\ChatSectionController;
use App\Http\Controllers\Admin\Setting\ContactSettingController;
use App\Http\Controllers\Admin\Setting\SiteSettingController;
use App\Http\Controllers\Admin\Setting\SocialmediaSettingController;
use App\Http\Controllers\Admin\Setting\WebsiteSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role', RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('blog', BlogController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('role', RoleController::class);
    Route::resource('category',   CategoryController::class);
    Route::resource('doctor',      DoctorController::class);
    Route::resource('user',       UserController::class);

    Route::get('profile/', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::put('profile/update/{id}', [AdminProfileController::class, 'UpdateAdminProfile'])->name('admin.profile.update');
    Route::get('profile/resetpassword/{id}', [AdminProfileController::class, 'resetpasswordAdminProfile'])->name('admin.profile.resetpassword');
    Route::put('profile/changepassword/{id}', [AdminProfileController::class, 'changepasswordProfile'])->name('admin.profile.changepassword');
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settingpage');
        Route::get('/site-setting', [SiteSettingController::class, 'sitesetting'])->name('sitesetting')->middleware('can:websitesetting');

        Route::get('/website-setting', [WebsiteSettingController::class, 'websitesetting'])->name('website.setting');
        Route::post('/website-setting/store', [WebsiteSettingController::class, 'websitestoresetting'])->name('website.setting.store');
        Route::get('/social-media', [SocialmediaSettingController::class, 'socialmedia'])->name('socialmedia.setting');
        Route::post('/social-media/store', [SocialmediaSettingController::class, 'socialmediastore'])->name('socialmedia.setting.store');
        Route::get('/contact-setting', [ContactSettingController::class, 'contactsetting'])->name('contact.setting');
        Route::post('/contact-setting/store', [ContactSettingController::class, 'contactsettingstore'])->name('contact.setting.store');
    });
    Route::post('editor/image/store', [EditorImageController::class, 'store'])->name('editorimagestore');
});

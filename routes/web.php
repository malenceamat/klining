<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdvantagesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::prefix('admin')->group(function(){

        Route::get('/contact_index', [ContactController::class, 'index'])->name('contact_index');
        Route::post('/contact_create', [ContactController::class, 'create'])->name('contact_create');

        Route::get('/banner', [BannerController::class, 'index'])->name('banner');
        Route::post('/banner_create', [BannerController::class, 'create'])->name('banner_create');

        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::post('/about_create', [AboutController::class, 'create'])->name('about_create');

        Route::get('/statistics/{id?}', [StatisticController::class, 'index'])->name('statistics');
        Route::post('/statistics_create', [StatisticController::class, 'create'])->name('statistics_create');
        Route::get('/statistics_show', [StatisticController::class, 'show'])->name('statistics_show');
        Route::post('/statistics_edit', [StatisticController::class, 'update'])->name('statistics_edit');
        Route::delete('/statistics_delete/{id}', [StatisticController::class, 'delete'])->name('delete_statistics');

        Route::get('/advantages/{id?}', [AdvantagesController::class, 'index'])->name('advantages');
        Route::post('/advantages_create', [AdvantagesController::class, 'create'])->name('advantages_create');
        Route::get('/advantages_show', [AdvantagesController::class, 'show'])->name('advantages_show');
        Route::post('/advantages_edit', [AdvantagesController::class, 'update'])->name('advantages_edit');
        Route::delete('/advantages_delete/{id}', [AdvantagesController::class, 'delete'])->name('delete_advantages');

        Route::get('/skills/{id?}', [SkillsController::class, 'index'])->name('skills');
        Route::post('/skills_create', [SkillsController::class, 'create'])->name('skills_create');
        Route::get('/skills_show', [SkillsController::class, 'show'])->name('skills_show');
        Route::post('/skills_edit', [SkillsController::class, 'update'])->name('skills_edit');
        Route::delete('/skills_delete/{id}', [SkillsController::class, 'delete'])->name('delete_skills');

        Route::get('/services/{id?}', [ServicesController::class, 'index'])->name('services');
        Route::post('/services_create', [ServicesController::class, 'create'])->name('services_create');
        Route::get('/services_show', [ServicesController::class, 'show'])->name('services_show');
        Route::post('/services_edit', [ServicesController::class, 'update'])->name('services_edit');
        Route::delete('/services_delete/{id}', [ServicesController::class, 'delete'])->name('delete_services');

        Route::get('/gallery/{id?}', [GalleryController::class, 'index'])->name('gallery');
        Route::post('/gallery_create', [GalleryController::class, 'create'])->name('gallery_create');
        Route::get('/gallery_show', [GalleryController::class, 'show'])->name('gallery_show');
        Route::post('/gallery_edit', [GalleryController::class, 'update'])->name('gallery_edit');
        Route::delete('/gallery_delete/{id}', [GalleryController::class, 'delete'])->name('delete_gallery');
    });
});
require __DIR__.'/auth.php';

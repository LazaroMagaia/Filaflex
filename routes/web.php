<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPagesController;


Route::get('/', [FrontPagesController::class, 'home'])->name('frontend.home');

Route::get('/about', [FrontPagesController::class, 'about'])->name('frontend.about');

Route::get('/service', [FrontPagesController::class, 'service'])->name('frontend.service');

Route::get('/career', [FrontPagesController::class, 'career'])->name('frontend.career');

Route::get('/contact', [FrontPagesController::class, 'contact'])->name('frontend.contact');

Route::get('/schedule_service', [FrontPagesController::class, 'schedule_service'])->name('frontend.schedule_service');


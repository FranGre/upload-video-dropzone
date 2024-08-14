<?php

use App\Http\Controllers\UploadVideoController;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class)->name('welcome');
Route::post('/', UploadVideoController::class)->name('upload.video');

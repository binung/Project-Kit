<?php

use App\Livewire\Pages\Dashboard\Analytics;
use App\Livewire\Pages\Dashboard\ProjectAdd;
use App\Livewire\Pages\Dashboard\ProjectManage;
use App\Livewire\Pages\Dashboard\Projects;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', Analytics::class)->name('dashboard');
    Route::get('/projects', Projects::class)->name('projects');
    Route::get('/project_manage', ProjectManage::class)->name('project_manage');
    Route::get('/project_create', ProjectAdd::class)->name('project_create');
});



Route::view('profile', 'profile')->middleware(['auth'])->name('profile');


require __DIR__.'/auth.php';
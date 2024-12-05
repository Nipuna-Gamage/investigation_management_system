<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ReceivingTypeController;
use App\Http\Controllers\CommonIssueController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/my-cases', [CaseController::class, 'index'])->name('my-cases');
    Route::get('/investigations/create', [InvestigationController::class, 'create'])->name('investigations.create');
    Route::get('/search-person', [PersonController::class, 'search'])->name('search-person');
    Route::get('/reports', [ReportController::class, 'index'])->name('reports');
    
    // Settings routes
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/officers/create', [OfficerController::class, 'create'])->name('officers.create');
        Route::get('/officers/edit', [OfficerController::class, 'edit'])->name('officers.edit');
        Route::get('/receiving-types', [ReceivingTypeController::class, 'index'])->name('receiving-types');
        Route::get('/common-issues', [CommonIssueController::class, 'index'])->name('common-issues');
    });
    
    Route::get('/accounts', [AccountController::class, 'index'])->name('accounts');
    Route::get('/help', [HelpController::class, 'index'])->name('help');
});

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
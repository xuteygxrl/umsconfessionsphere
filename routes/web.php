<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageNavigation;
use App\Http\Controllers\ConfessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\Admin\AdminBanController;
use App\Http\Controllers\Admin\AdminUserManagementController;
use App\Http\Controllers\Admin\ConfessionManagementController;

// Public routes


// Routes without authentication middleware
Route::get('admin', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'login']);

// Grouped routes that require admin authentication
Route::middleware('auth:admin')->group(function () {
    Route::get('admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('admin/report', [AdminReportController::class, 'reportView'])->name('admin.report');
    Route::post('/admin/report/resolve/{id}', [AdminReportController::class, 'resolveReport'])->name('admin.resolveReport');

    Route::get('admin/ban-user', [AdminBanController::class, 'banUser'])->name('admin.banUser');
    Route::get('admin/user-management', [AdminUserManagementController::class, 'userManagement'])->name('admin.userManagement');
    Route::get('admin/confession-management', [ConfessionManagementController::class, 'confessionManagement'])->name('admin.confessionManagement');

    Route::post('admin/confession/approve/{id}', [ConfessionController::class, 'approve'])->name('admin.confession.approve');
    Route::post('admin/confession/reject/{id}', [ConfessionController::class, 'reject'])->name('admin.confession.reject');


});

// Protected routes (Require authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [PageNavigation::class, 'home'])->name('home');
    Route::get('/crushing-list', [PageNavigation::class, 'crushing'])->name('crushing');
    Route::get('/general-list', [PageNavigation::class, 'general'])->name('general');
    Route::get('/university-life-list', [PageNavigation::class, 'universityLife'])->name('university-life');
    Route::get('/confession/{confessionId}', [PageNavigation::class, 'confession'])->name('confession');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.changePassword');

    Route::post('/comment/store', [ConfessionController::class, 'storeComment'])->name('comment.store');
    Route::post('/submit-confession', [ConfessionController::class, 'store'])->name('submit.confession');
    Route::post('/report/store', [ReportController::class, 'store'])->name('report.store');
    
});

require __DIR__.'/auth.php';

<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SkippingRecordController;
use App\Http\Controllers\FitnessGoalController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\HealthImpactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

// Auth routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// User profile routes
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');

// Skipping record routes
Route::get('/', [SkippingRecordController::class, 'index'])->name('skipping.index');
Route::get('/skipping/create', [SkippingRecordController::class, 'create'])->name('skipping.create');
Route::post('/skipping', [SkippingRecordController::class, 'store'])->name('skipping.store');
Route::get('/skipping/{id}', [SkippingRecordController::class, 'show'])->name('skipping.show');
Route::get('/skipping/{id}/edit', [SkippingRecordController::class, 'edit'])->name('skipping.edit');
Route::put('/skipping/{id}', [SkippingRecordController::class, 'update'])->name('skipping.update');
Route::delete('/skipping/{id}', [SkippingRecordController::class, 'destroy'])->name('skipping.destroy');

// Fitness goal routes
Route::get('/goals', [FitnessGoalController::class, 'index'])->name('goals.index');
Route::get('/goals/create', [FitnessGoalController::class, 'create'])->name('goals.create');
Route::post('/goals', [FitnessGoalController::class, 'store'])->name('goals.store');
Route::get('/goals/{id}', [FitnessGoalController::class, 'show'])->name('goals.show');
Route::get('/goals/{id}/edit', [FitnessGoalController::class, 'edit'])->name('goals.edit');
Route::put('/goals/{id}', [FitnessGoalController::class, 'update'])->name('goals.update');
Route::delete('/goals/{id}', [FitnessGoalController::class, 'destroy'])->name('goals.destroy');

// Achievement routes
Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements.index');
Route::get('/achievements/create', [AchievementController::class, 'create'])->name('achievements.create');
Route::post('/achievements', [AchievementController::class, 'store'])->name('achievements.store');
Route::get('/achievements/{id}', [AchievementController::class, 'show'])->name('achievements.show');
Route::get('/achievements/{id}/edit', [AchievementController::class, 'edit'])->name('achievements.edit');
Route::put('/achievements/{id}', [AchievementController::class, 'update'])->name('achievements.update');
Route::delete('/achievements/{id}', [AchievementController::class, 'destroy'])->name('achievements.destroy');

// Health impact routes
Route::get('/health-impacts', [HealthImpactController::class, 'index'])->name('health-impacts.index');
Route::get('/health-impacts/create', [HealthImpactController::class, 'create'])->name('health-impacts.create');
Route::post('/health-impacts', [HealthImpactController::class, 'store'])->name('health-impacts.store');
Route::get('/health-impacts/{id}', [HealthImpactController::class, 'show'])->name('health-impacts.show');
Route::get('/health-impacts/{id}/edit', [HealthImpactController::class, 'edit'])->name('health-impacts.edit');
Route::put('/health-impacts/{id}', [HealthImpactController::class, 'update'])->name('health-impacts.update');
Route::delete('/health-impacts/{id}', [HealthImpactController::class, 'destroy'])->name('health-impacts.destroy');

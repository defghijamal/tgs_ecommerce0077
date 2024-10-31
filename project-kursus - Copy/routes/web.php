<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Http\Controllers\PaymentController;
use App\Notifications\VerifyEmail;

// Route landing page
Route::get('/', function () {
    $courses = Course::all(); // Ambil semua data kursus
    return view('welcome', compact('courses')); // Kirim data kursus ke view
});

// Route untuk detail kursus
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// Middleware untuk tamu (guest)
Route::middleware(['guest'])->group(function () {
    // Route auth
    Route::get('auth', [AuthController::class, 'auth'])->name('auth');
    
    // Route register
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    
    // Route login
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('loginshow');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
// Route logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Middleware untuk pengguna yang sudah terautentikasi (auth)
Route::middleware(['auth'])->group(function() {
    // User fitur
    Route::get('sew', [UserController::class, 'sew'])->name('sew');
    Route::get('cake', [UserController::class, 'cake'])->name('cake');
    Route::post('create', [UserController::class, 'create'])->name('create');
    Route::get('jadwal', [UserController::class, 'jadwal'])->name('jadwal');
    Route::get('laporan', [UserController::class, 'laporan'])->name('laporan');
    Route::post('generate-laporan', [UserController::class, 'generateLaporanPdf'])->name('generateLaporanPdf');

    // Admin fitur
    Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('role:admin');
    Route::get('/admin/courses', [AdminController::class, 'showCourses'])->name('admin.courses');
    Route::get('admin/tambah-kursus', [CourseController::class, 'create'])->name('addCourse');
    Route::post('admin/simpan-kursus', [CourseController::class, 'store'])->name('storeCourse');
    Route::get('/admin/courses/{id}/edit', [AdminController::class, 'editCourse'])->name('editCourse');
    Route::post('/admin/courses/{id}/update', [AdminController::class, 'updateCourse'])->name('updateCourse');
    Route::delete('/admin/courses/{id}', [AdminController::class, 'destroyCourse'])->name('destroyCourse');

    // Rute lainnya untuk admin dan user
    Route::get('control-sew', [AdminController::class, 'controlSew'])->name('sewadmin');
    Route::get('control-cake', [AdminController::class, 'controlCake'])->name('cakeadmin');
    Route::get('laporan-admin', [AdminController::class, 'laporanAdmin'])->name('laporanadmin');
    Route::get('control-user', [AdminController::class, 'controlUser'])->name('users');
    Route::get('jadwal-sew', [AdminController::class, 'jadwalSew'])->name('jadwalsew');
    Route::get('jadwal-cake', [AdminController::class, 'jadwalCake'])->name('jadwalcake');
    Route::post('admin/update-berita', [AdminController::class, 'updateBerita'])->name('admin.updateBerita');
    Route::post('admin/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
    Route::post('admin/reject/{id}', [AdminController::class, 'reject'])->name('admin.reject');
    Route::post('admin/jadwal', [AdminController::class, 'storeJadwal'])->name('storeJadwal');
    Route::post('admin/jadwal/{id}', [AdminController::class, 'updatejadwal'])->name('updatejadwal');
    Route::delete('admin/jadwal/{id}', [AdminController::class, 'destroyJadwal'])->name('destroyJadwal');
    Route::get('admin/jadwal/{id}/edit', [AdminController::class, 'edit']);
    Route::post('generate-laporan-admin', [AdminController::class, 'generateLaporanAdminPdf'])->name('generateLaporanAdminPdf');
});

    // Route untuk dashboard pengguna
    Route::get('user', [UserController::class, 'index'])->name('user')->middleware('role:user');
    
    // Route untuk dashboard admin
    // Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('role:admin');



// Route verifikasi email
Route::get('email/verify/{id}/{hash}', [AuthController::class, 'verify'])->name('verification.verify');

// Payment routes
Route::get('/payment/{courseId}', [PaymentController::class, 'showPaymentPage'])->name('payment');
Route::post('/payment/{courseId}', [PaymentController::class, 'processPayment'])->name('payment.process');

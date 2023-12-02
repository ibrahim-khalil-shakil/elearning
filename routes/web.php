<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Setting\AuthenticationController as auth;
use App\Http\Controllers\Backend\Setting\UserController as user;
use App\Http\Controllers\Backend\Setting\DashboardController as dashboard;
use App\Http\Controllers\Backend\Setting\RoleController as role;
use App\Http\Controllers\Backend\Setting\PermissionController as permission;
use App\Http\Controllers\Backend\Students\StudentController as student;
use App\Http\Controllers\Backend\Instructors\InstructorController as instructor;
use App\Http\Controllers\Backend\Courses\CourseCategoryController as courseCategory;
use App\Http\Controllers\Backend\Courses\CourseController as course;
use App\Http\Controllers\Backend\Courses\MaterialController as material;
use App\Http\Controllers\Backend\Quizzes\QuizController as quiz;
use App\Http\Controllers\Backend\Quizzes\QuestionController as question;
use App\Http\Controllers\Backend\Quizzes\OptionController as option;
use App\Http\Controllers\Backend\Quizzes\AnswerController as answer;
use App\Http\Controllers\Backend\Reviews\ReviewController as review;
use App\Http\Controllers\Backend\Communication\DiscussionController as discussion;
use App\Http\Controllers\Backend\Communication\MessageController as message;

/* students */
use App\Http\Controllers\Students\AuthController as sauth;
use App\Http\Controllers\Students\DashboardController as studashboard;
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

Route::get('/register', [auth::class, 'signUpForm'])->name('register');
Route::post('/register', [auth::class, 'signUpStore'])->name('register.store');
Route::get('/login', [auth::class, 'signInForm'])->name('login');
Route::post('/login', [auth::class, 'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class, 'signOut'])->name('logOut');


Route::middleware(['checkauth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
Route::get('userProfile', [auth::class, 'show'])->name('userProfile');
});

Route::middleware(['checkrole'])->prefix('admin')->group(function () {
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::resource('student', student::class);
    Route::resource('instructor', instructor::class);
    Route::resource('courseCategory', courseCategory::class);
    Route::resource('course', course::class);
    Route::resource('material', material::class);
    Route::resource('quiz', quiz::class);
    Route::resource('question', question::class);
    Route::resource('option', option::class);
    Route::resource('answer', answer::class);
    Route::resource('review', review::class);
    Route::resource('discussion', discussion::class);
    Route::resource('message', message::class);
    Route::get('permission/{role}', [permission::class, 'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class, 'save'])->name('permission.save');
});


/* students controllers */
Route::get('/student/register', [sauth::class, 'signUpForm'])->name('studentRegister');
Route::post('/student/register', [sauth::class, 'signUpStore'])->name('studentRegister.store');
Route::get('/student/login', [sauth::class, 'signInForm'])->name('studentLogin');
Route::post('/student/login', [sauth::class, 'signInCheck'])->name('studentLogin.check');
Route::get('/student/logout', [sauth::class, 'signOut'])->name('studentlogOut');

Route::middleware(['checkstudent'])->prefix('students')->group(function () {
    Route::get('/dashboard', [studashboard::class, 'index'])->name('studentdashboard');
});


Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/home', function () {
    return view('frontend.home');
})->name('home');

Route::get('/searchCourse', function () {
    return view('frontend.searchCourse');
})->name('searchCourse');

Route::get('/courseDetails', function () {
    return view('frontend.courseDetails');
})->name('courseDetails');

Route::get('/watchCourse', function () {
    return view('frontend.watchCourse');
})->name('watchCourse');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/studentProfile', function () {
    return view('frontend.studentProfile');
})->name('studentProfile');

Route::get('/instructorProfile', function () {
    return view('frontend.instructorProfile');
})->name('instructorProfile');

Route::get('/courseDetails', function () {
    return view('frontend.courseDetails');
})->name('courseDetails');


Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

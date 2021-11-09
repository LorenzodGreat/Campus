<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [MainController::class, 'home_page']);

//Start Of Login Routes
Route::get('/register', [StudentController::class, 'register'])->name('register');
Route::post('signup', [StudentController::class, 'student_sign'])->name('signup');
Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::post('log_in', [StudentController::class, 'log_in'])->name('log_in');
Route::get('/admin-portal', [AdminLoginController::class, 'loginpage']);
Route::post('adminlogin', [AdminLoginController::class, 'signin'])->name('adminlogin');
//End Of Login Routes

//Here you will see all the routes for the students that are registered on the website
Route::group(['middleware' => 'Student'], function () {
    Route::get('/student-profile', [StudentController::class, 'student_profile'])->name('student.profile');
    Route::get('/student-courses', [StudentController::class, 'student_course'])->name('student.courses');
    Route::get('/courses/apply/{id}', [MainController::class, 'apply_course'])->name('courses.apply');
    Route::post('/courses/apply/submit/{id}', [MainController::class, 'apply_update'])->name('courses.applying');
    Route::get('/student-payment', [StudentController::class, 'student_payment'])->name('student.payment');
    Route::get('/student-pay', [StudentController::class, 'pay'])->name('student.pay');
    Route::post('/student/pay/now', [StudentController::class, 'pay_now'])->name('student.pay.now');
    Route::get('/student/payments/{id}', [StudentController::class, 'student_payment'])->name('student.payments');
    Route::get('/student-settings', [StudentController::class, 'student_settings'])->name('student.settings');
    Route::get('/student-logout', [StudentController::class, 'Logout_student'])->name('student-logout');
    Route::get('/courses/view', [MainController::class, 'courses_view'])->name('courses.view');
});

Route::group(['middleware' => 'Admin'], function () {
    //This route logs out the admin
    Route::get('/admin-logout', [AdminLoginController::class, 'Logoutadmin'])->name('admin-logout');
    //This route returns the admin profile
    Route::get('admin/profile', [AdminLoginController::class, 'profile'])->name('admin.profile');
    //This route returns admin courses play with all courses added
    Route::get('admin/courses', [CoursesController::class, 'course'])->name('admin.courses');
    //This route adds courses by admin
    Route::get('admin/courses/add', [CoursesController::class, 'add_course'])->name('admin.courses.add');
    //This route adds a subject 
    Route::post('adding-subject', [SubjectController::class, 'AddSubject'])->name('adding-subject');
    // This route delets subject
    Route::get('/admin/subject/delete/{id}', [SubjectController::class, 'DeleteSubject'])->name('subject.delete');
    // This route edits subject
    Route::get('/admin/subject/edit/{id}', [SubjectController::class, 'EditSubject'])->name('subject.editer');
    //This route upadtes a subject thats edited
    Route::post('/admin/subject/update/{id}', [SubjectController::class, 'UpdateSubject'])->name('subject.update');
    //This route adds a course by admin
    Route::post('adding-course', [CoursesController::class, 'AddCourse'])->name('adding-course');
    //This route deletes courses
    Route::get('/admin/courses/delete/{id}', [CoursesController::class, 'Deletecourse'])->name('courses.delete');
    // This route edits courses
    Route::get('/admin/courses/edit/{id}', [CoursesController::class, 'Editcourse'])->name('courses.edit');
    //This route updates edited courses
    Route::post('/admin/courses/update/{id}', [CoursesController::class, 'Updatecourse'])->name('course.update');
    //This route returns applications
    Route::get('admin/applicants', [ApplicantsController::class, 'appli'])->name('admin.applicants');
    //This route updates applicant status
    Route::post('admin/application/update/{id}', [ApplicantsController::class, 'update_status'])->name('admin.application.update');
    // This route returns all application logs
    Route::get('admin/log', [LogController::class, 'admin_log'])->name('admin.log');
    // This route returns media page
    Route::get('admin/media', [MediaController::class, 'mess'])->name('admin.media');
    //This route returns media file page
    Route::get('admin/media/add', [MediaController::class, 'add_media'])->name('admin.media.add');
    //This route add media files and displays it on the gallery section of the main index page
    Route::post('admin/media/upload', [MediaController::class, 'upload_media'])->name('admin.media.upload');
    //This downloads xml of a specific student
    Route::get('admin/application/download/{id}', [ApplicantsController::class, 'download'])->name('admin.application.download');
    //This route deletes media
    Route::get('/admin/media/delete/{id}', [MediaController::class, 'delete_media'])->name('media.delete');
});

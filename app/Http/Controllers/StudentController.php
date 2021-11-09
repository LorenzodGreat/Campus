<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function login()
    {
        return view('student-login');
    }

    function register()
    {
        return view('student-register');
    }

    function student_sign(Request $req)
    {

        $student = new Student();
        $student->email = $req->email;
        $student->password = $req->password;
        $student->save();
        session()->put('student', 'student');
        // session()->put('id')
        return redirect('student-profile')->with('in', 'in');
    }

    function log_in(Request $req)
    {

        $student = new Student;
        $eml = $req->email;
        $pass = $req->password;
        $data = DB::table('students')
            ->where('email', '=', $eml)
            ->where('password', $req->password)
            ->count();
        if ($data == 1) {
            $current_user = Student::where('email', $eml)->first();
            $req->session()->put('student', $current_user->email);
            $req->session()->put('id', $current_user->id);
            session()->put('login', 1);
            return redirect('student-profile')->with('in', 'in');
        } else {
            return redirect('login')->with('wrong', 'wrong');
        }
    }

    function Logout_student()
    {
        if (session()->has('student')) {
            session()->flush();
            session()->regenerateToken();
        }
        return view('student-login');
    }

    function student_profile()
    {
        return view('student-profile')->with('in', 'in');
    }

    function student_course()
    {
        $course = DB::table('courses')
            ->join('applications as app', 'courses.id', '=', 'app.course_id')
            ->where('student_id', '=', session('id'))
            ->get();

        return view('student-courses')->with('collection', $course);
    }

    function pay()
    {
        $pays = DB::table('students')
            ->join('applications as app', 'students.id', '=', 'app.student_id')
            ->join('payments as pay', 'app.id', '=', 'pay.application_id')
            ->where('students.id', '=', session('id'))
            ->get();
        $pays = Payment::where('student_id', '=', session('id'));
        return view('student-payment')->with('collection', $pays);
    }

    function student_payment($id)
    {
        $info = Application::find($id);
        return view('student-paying')->with('in', $info);
    }

    function pay_now(Request $req)
    {
        $paye = new Payment();
        $paye->student_id = session('id');
        $paye->application_id = $req->application_id;
        $paye->card_holder = $req->card_holder;
        $paye->card_number = $req->number;
        $paye->exp_date = $req->date;
        $paye->card_type = $req->type;
        $paye->card_holder = $req->card_holder;
        $paye->save();
        return redirect('student-courses')->with('paid');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    //
    function admin_log(){
        $log  = DB::table('students')
        ->join('applications as app', 'students.id', '=', 'app.student_id')
        ->join('courses', 'app.course_id', '=', 'courses.id')
        ->paginate(5);
            return view('admin-log')->with('collection', $log);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Course;
use App\Models\Log;
use App\Models\Media;
use App\Models\Subject;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    function home_page()
    {
        $main = Media::paginate(3);
        return view('index')->with('collection',$main);
    }

    function courses_view()
    {
        $suc = Course::paginate(3);
        return view('our-courses')->with('cess', $suc);
    }


    function apply_course($id)
    {
        $info = Course::find($id);
        $sub = Subject::get();
        return  view('apply-courses', ['in' => $info])->with('subs', $sub);
    }

    function apply_update(Request $req, $id)
    {
        $cvv = str_replace(' ', '', $req->name) . '.' . $req->file->extension();
        $req->file('file')->storeAS('/public/doc', $cvv);
        $admin = new Application;
        $admin->First_name = $req->first_name;
        $admin->middle_name = $req->middle_name;
        $admin->Last_name = $req->Last_name;
        $admin->date_of_birth = $req->date_of_birth;
        $admin->email =$req->email;
        $admin->street = $req-> street;
        $admin->parish = $req-> parish;
        $admin->tel = $req->tel;
        $admin->trn = $req->trn;
        $admin->qualification1 = $req->qualification1;
        $admin->qualification2 = $req->qualification2;
        $admin->qualification3 = $req->qualification3;
        $admin->qualification4 = $req->qualification4;
        $admin->qualification5 = $req->qualification5;
        $admin->gender = $req->gender;
        $admin->student_id = session('id');
        $admin->course_id = $id;
        $admin->status = 'Pending';
        $admin->cvv = $cvv;
        $admin->save();
        $log = new Log();
        
        $log->student_id = session('id');
        $log->upd_typ = 'Applied For Course';
        $log->save();
        return redirect()->route('student.courses')->with('yes', 'yes');
    }
}

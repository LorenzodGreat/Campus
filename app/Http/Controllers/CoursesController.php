<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Log;
use App\Models\Subject;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function add_course()
    {
        $sub = Subject::get();
        return view('admin-courses-add')->with('subs', $sub);
    }
    function course()
    {
        $suc = Course::paginate(3);
        return view('admin-courses')->with('cess', $suc);
    }

    function AddCourse(Request $req)
    {

        $pic_name = str_replace(' ', '', $req->name) . '.' . $req->pic->extension();
        $req->file('pic')->storeAS('/public/images', $pic_name);
        $admin = new Course();
        $admin->name = $req->name;
        $admin->sub_id = $req->sub_id;
        $admin->description = $req->description;
        $admin->cost = $req->cost;
        $admin->image = $pic_name;
        $admin->start_date = $req->start_date;
        $admin->end_date = $req->end_date;
        $admin->save();
        return redirect()->route('admin.courses')->with('add', 'add');
    }


    function Editcourse($id)
    {
        $info = Course::find($id);
         $sub = Subject::get();
        return  view('admin-edit-course', ['in' => $info])->with('subs', $sub);
    }


    function Updatecourse(Request $req, $id)
    {
        $pic_name = str_replace(' ', '', $req->name) . '.' . $req->pic->extension();
        $req->file('pic')->storeAS('/public/images', $pic_name);
        $admin = Course::find($id);
        $admin->name = $req->name;
        $admin->sub_id = $req->sub_id;
        $admin->description = $req->description;
        $admin->cost = $req->cost;
        $admin->image = $pic_name;
        $admin->start_date = $req->start_date;
        $admin->end_date = $req->end_date;
        $admin->save();
        return redirect()->route('admin.courses')->with('update', 'update');
    }

    function Deletecourse($id)
    {
        $data = Course::find($id);
        $data->delete();
        return redirect()->route('admin.courses')->with('removed', 'removed');
    }
}


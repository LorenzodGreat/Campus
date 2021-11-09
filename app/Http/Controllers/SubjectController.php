<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function subjecting(){
        $sub =Subject::get();
        return view('subject')->with('cess' ,$sub);
    }

    function AddSubject(Request $req)
    {
        $sub = new Subject();
        $sub->name = $req->subject;
        $sub->save();
        return redirect('admin/courses/add')->with('subject', 'subject');
    }
    
    function DeleteSubject($id)
    {
        $data = Subject::find($id);
        $data->delete();
        return redirect('admin/courses/add')->with('deleted', 'deleted');
    }

    function EditSubject($id)
    {
        $info = Subject::find($id);
        return  view('admin-edit-subject', ['in' => $info]);
    }


    function UpdateSubject(Request $req, $id)
    {
        $admin = Subject::find($id);
        $admin->name = $req->subject;
        $admin->save();
        return redirect('admin/courses/add')->with('up','up');
    }


}

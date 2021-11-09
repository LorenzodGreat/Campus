<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Course;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleXMLElement;

class ApplicantsController extends Controller
{
     // Returns the Applicants view where you can see all applicants and there status info
     function appli()
     {
         $pending = DB::table('students')
             ->join('applications as app', 'students.id', '=', 'app.student_id')
             ->join('courses', 'app.course_id', '=', 'courses.id')
             ->where('status', '=', 'pending')
             ->paginate(6);
 
         $accepted  = DB::table('students')
             ->join('applications as app', 'students.id', '=', 'app.student_id')
             ->join('courses', 'app.course_id', '=', 'courses.id')
             ->where('status', '=', 'accepted')
             ->paginate(6);
 
         $rejected  = DB::table('students')
             ->join('applications as app', 'students.id', '=', 'app.student_id')
             ->join('courses', 'app.course_id', '=', 'courses.id')
             ->where('status', '=', 'rejected')
             ->paginate(6);
 
         return view('admin-applicants')->with('collection', $pending)->with('in', $accepted)->with('opps', $rejected);
     }
 
     // Update the status of an applicant
     function update_status(Request $req, $id)
     {
     Application::where('student_id', $id)->update([
             'status' => $req->status
         ]);
         return redirect('admin/applicants');
     }



       function download ($id){
           $sql = Application::where('id', '=', $id)->get();
    
           $xml = "<Approved>";
    
           foreach ($sql as $application) {
               $xml .= '<appllicant display_name="' . $application["First_name"] . '" email="' . $application["email"] . '" trn="' . $application["trn"] . '" Last_Name="' . $application["Last_name"] . '" First_Name="' . $application["First_name"] . '" />';
           }
           $xml .= "</Approved>";
    
           $sxe = new SimpleXMLElement($xml);
           $dom = new DOMDocument('1,0');
           $dom->preserveWhiteSpace = false;
           $dom->formatOutput = true;
           $dom->loadXML($sxe->asXML());
    
           echo $dom->saveXML();
    
           $dom->save('heartapplicant.xml');
           return response()->download(public_path('heartapplicant.xml'));

        }


  


        


}

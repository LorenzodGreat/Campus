<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    //
    function mess(){
        $admin = Media::paginate(3);
        return view('admin-media')->with('media_uploaded', $admin);
            }

    function add_media(){
        
        return view('admin-media-add');
    }

    function upload_media(Request $req){

        $pic_name = str_replace(' ', '', $req->title) . '.' . $req->pic->extension();
        $req->file('pic')->storeAS('/public/images', $pic_name);
        $admin = new Media();
        $admin->pic= $pic_name;
        $admin->title= $req->title;
        $admin->description= $req->description;
        $admin->save();
        return redirect('admin/media')->with('media_uploaded', 'media_uploaded');
    }

    function delete_media($id)
    {
        $data = Media::find($id);
        $data->delete();
        return redirect()->route('admin.media')->with('media_deleted', 'media_deleted');
    }
}

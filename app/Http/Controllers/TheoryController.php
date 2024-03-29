<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Theory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class TheoryController extends Controller
{
    public function createForm(){
        return view('createTheoryFileForm');
    }

    public function fileUpload(Request $request){

        $request->validate([
            'file' => 'required|max:2048',
            'name' => 'required',
            /*'description' => 'required',*/
           /* 'slug' => 'required',*/
            'material_type_id' => 'required',
            'course_id' => 'required',
            /*'visible' => 'required',
            'active' => 'required',*/
        ]);

        //dd($request->hasFile('file'));
        $name = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->store('public/files');


        /* Store $fileName name in DATABASE from HERE */
        $user = Auth::user();

        $theory = Theory::create([
            'name' => $name,
            'user_id' => $user->id,
            'description' => $request->description,
            'slug' => $request->slug,
            'course_id' => $request->course_id,
            'file_path' => $path,
            'material_type_id' => $request->material_type_id,
            'visible' => !! $request->visible,
            'active' => !! $request->active,
        ]);

        return back()
            ->with('success','You have successfully file uplaod.')
            ->with('file', $name);

    }

    public function fileDownload(Theory $theory)
    {
        return Storage::download($theory->file_path);

    }

}

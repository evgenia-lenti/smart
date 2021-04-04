<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Theory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    public function createForm(){

        return view('createAssignmentFileForm');

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

        $assignment = Assignment::create([
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

    public function fileDownload(Assignment $assignment)
    {
        return Storage::download($assignment->file_path);

    }
}

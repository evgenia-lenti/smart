<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('courses.index',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $course = new Course();

        $course->name = request('name');
        $course->description = request('description');
        $course->slug = request('name');
        $course->user_id = Auth::id();
        $course->visible = request('visible')==1;
        $course->active = request('active')==1;

        $course->save();

        return redirect('/')->with('message','Το Μάθημα καταχωρήθηκε!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.show',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        if($course->active) {
            $active = "checked";
        } else {
            $active = "unchecked";
        }

        if($course->visible) {
            $visible = "checked";
        } else {
            $visible = "unchecked";
        }
        return view('editcourse',['course'=>$course,'active'=>$active,'visible'=>$visible]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $course->name = request('name');
        $course->description = request('description');
        $course->slug = request('name');
        $course->user_id = Auth::id();
        $course->visible = request('visible')==1;
        $course->active = request('active')==1;

        $course->update();

        return redirect('/')->with('message','H τάξη καταχωρήθηκε!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}

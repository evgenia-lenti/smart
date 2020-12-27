<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ClassroomController extends Controller
{


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::all();
        return view('allclassrooms',['classrooms'=>$classrooms]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Classroom
     */
    public function create()
    {
        $courses = Course::all();
        return view('addclassroom',['courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $classroom = new Classroom();

        $classroom->name = request('name');
        $classroom->description = request('description');
        $classroom->slug = request('name');
        $classroom->user_id = Auth::id();
        $classroom->visible = request('visible')==1;
        $classroom->active = request('active')==1;

        $classroom->save();

        for($i = 0;$i<sizeof(request('courses'));$i++){
            $course = Course::find(request('courses')[$i]);
            $course->classrooms()->attach($classroom->id);
        }

        return redirect('/')->with('message','H τάξη καταχωρήθηκε!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('classrooms.show',['classroom'=>$classroom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        $courses = Course::all();
        $selectedCourses = $classroom->courses;

        if($classroom->active) {
            $active = "checked";
        } else {
            $active = "unchecked";
        }

        if($classroom->visible) {
            $visible = "checked";
        } else {
            $visible = "unchecked";
        }

        return view('editclassroom',['classroom'=>$classroom,'courses'=>$courses,'selectedcourses'=>$selectedCourses,'active'=>$active,'visible'=>$visible]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);

        $classroom->name = request('name');
        $classroom->description = request('description');
        $classroom->slug = request('name');
        $classroom->user_id = Auth::id();
        $classroom->visible = request('visible')==1;
        $classroom->active = request('active')==1;

        $classroom->update();

        $classroom->courses()->detach();

        if($request->has('courses')) {
            for($i = 0;$i<sizeof(request('courses'));$i++){
                $course = Course::find(request('courses')[$i]);
                $course->classrooms()->attach($classroom->id);
            }
        }


        return redirect('/')->with('message','H τάξη καταχωρήθηκε!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}

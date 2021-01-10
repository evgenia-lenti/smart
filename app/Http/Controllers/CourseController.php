<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Theory;
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

        return view('courses.index', ['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/*        $course = new Course();

        $course->name = request('name');
        $course->description = request('description');
        $course->slug = request('name');
        $course->user_id = Auth::id();
        $course->visible = request('visible')==1;
        $course->active = request('active')==1;

        $course->save();

        return redirect('/')->with('message','Το Μάθημα καταχωρήθηκε!');*/

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required',
            /*'visible' => 'required',
            'active' => 'required',*/
        ]);

        $user = Auth::user();

        $course = Course::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'visible' => !! $request->visible,
            'active' => !! $request->active,
        ]);

        return redirect()->back()->with('success', 'Το μάθημα καταχωρήθηκε με επιτυχία.')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $user = Auth::user();

        return view('courses.show', ['course' => $course, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {

        return view('courses.edit', [
            'course' => $course
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required',
            /*'visible' => 'required',
            'active' => 'required',*/
        ]);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->slug = $request->slug;
        $course->user_id = Auth::id();
        $course->visible = !! $request->visible;
        $course->active = !! $request->active;

        $course->update();

        return redirect()->back()->with('success', 'Το μάθημα ενημερώθηκε με επιτυχία.')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect(route('courses.index'));
    }
}

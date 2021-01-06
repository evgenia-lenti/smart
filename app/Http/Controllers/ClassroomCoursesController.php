<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomCoursesController extends Controller
{
    public function create(Classroom $classroom, $id)
    {
        //$classrooms = Classroom::all();
        //$classroom = Classroom::findOrFail($classroom);
        dd($classroom, $id);
        try {

            if (!$classroom->courses->contains('id', $id)) {
                $classroom->courses()->attach($id);
            }

        } catch(\Exception $e) {

        }
    }

    public function destroy(Classroom $classroom, Course $course)
    {
        try {

            $classroom->courses()->detach($course->id);

        } catch (\Exception $e) {

        }
    }
}

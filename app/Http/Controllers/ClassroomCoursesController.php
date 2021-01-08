<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomCoursesController extends Controller
{
    public function create(Request $request)
    {
        try {

            $classroom = Classroom::find($request->classroom_id);
            $course = Course::find($request->course_id);

            if ($classroom && $course) {
                $classroom->courses()->attach($course->id);

                return ['status' => true, 'message' => 'Το μάθημα προστέθηκε με επιτυχία.'];
            }

            return ['status' => false, 'message' => 'Το μάθημα ή η τάξη δε βρέθηκε.'];

        } catch(\Exception $e) {

            return ['status' => false, 'message' => 'Κάτι πήγε στραβά.'];
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

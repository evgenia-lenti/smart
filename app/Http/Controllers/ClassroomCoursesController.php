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

            if (($classroom && $course) && !($classroom->courses->contains($course->id))) {

                $classroom->courses()->attach($course->id);

                return ['status' => true, 'message' => 'Το μάθημα προστέθηκε με επιτυχία.'];
            }

            return ['status' => false, 'message' => 'Το μάθημα ή η τάξη δε βρέθηκε ή το μάθημα υπάρχει ήδη στην τάξη.'];

        } catch(\Exception $e) {

            return ['status' => false, 'message' => 'Κάτι πήγε στραβά.'];
        }
    }

    public function destroy(Classroom $classroom, Course $course)
    {
        try {

            $classroom->courses()->detach($course->id);

            return ['status' => true, 'message' => 'Το μάθημα διαγράφτηκε.'];

        } catch (\Exception $e) {

            return ['status' => false, 'message' => 'Κάτι πήγε στραβά.'];
        }
    }
}

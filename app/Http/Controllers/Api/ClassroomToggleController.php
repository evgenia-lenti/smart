<?php

namespace App\Http\Controllers\Api;

use App\Course;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomToggleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param Classroom $classroom
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Classroom $classroom)
    {
        try {

            //$classroom = Classroom::findOfFail($classroom);

            if ($classroom->active == true) {
                $classroom->active = 1;
            }
            else {
                $classroom->active = 0;
            }

            $classroom->save();

            return ['status' => true];

        } catch(\Exception $e) {
            return ['status' => false];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = Auth::user();
            $user->courses()->detach($course->id);

            return [
                'status' => true,
                'message' => 'Έχεις διαγράψει την ενότητα ' . $course->title . ' με επιτυχία!'
            ];

        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => 'Ούπς!! Προέκυψε κάποιο σφάλμα. Προσπάθησε αργότερα.'
            ];
        }
    }

}

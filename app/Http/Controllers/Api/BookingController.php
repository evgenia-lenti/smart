<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingFormRequest;
use App\Models\Period;
use App\Models\Ticket;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(BookingFormRequest $request)
    {
        $validated = $request->validated();
        $form = $validated['form'];
        $user_id = $request->user['id'];
        $course_id = $request->selected_course;

        $period = Period::where('course_id', $course_id)->first();
        $period_id = $period->id;

        $ticket = Ticket::create([
            'first_name' => $form['first_name'],
            'last_name' => $form['last_name'],
            'telephone' => $form['telephone'],
            'email' => $form['email'],
            'course_id' => $course_id,
            'user_id' => $user_id,
            'paid' => true,
            'period_id' => $period_id
        ]);

        return [
            'ticket' => $ticket,
            'status' => true
        ];
    }

}

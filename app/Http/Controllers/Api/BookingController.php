<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingFormRequest;
use App\Mail\CourseBooking;
use App\Models\Period;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(BookingFormRequest $request)
    {
        try {
            DB::beginTransaction();

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

            DB::commit();


        } catch (Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => false,
                'message' => 'Παρουσιάστηκε κάποιο πρόβλημα. Ξανά δοκίμασε σε λίγο.',
                'error' => $e->getMessage()
            ]);
        }

        try {

            Mail::to(request('form.email'))->send(new CourseBooking($ticket));

        } catch (Exception $e) {

            return response()->json([
                'status' => false,
                'message' => 'Η κράτησή σου έχει καταχωρηθεί με επιτυχία, αλλά δεν καταφέραμε να σου στείλουμε το email με την
                                επιβεβαίωσή της.',
                'order' => $ticket,
                'error' => $e->getMessage()
            ]);

        }

        return [
            'ticket' => $ticket,
            'status' => true
        ];

    }

}

<?php

namespace App\Mail;

use App\Models\Classroom;
use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $ticket;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->ticket = $ticket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //$classroom = Classroom::where('classroom_type_id', 2)->with('courses')->get();
        //$ticket_course = $this->ticket->course_id;
        //$users_course = $classroom->where('id', $this->ticket->course_id)->first();

        //dd($users_course);

        $url = '/classrooms/online';

        return $this->markdown('emails.course.booking', [
        'url' => $url,
        ])
            ->subject('Επιβεβαίωση κράτησης');
    }
}

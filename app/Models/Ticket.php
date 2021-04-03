<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class,'classroom_course');
    }

    public function course()
    {
        return $this->belongsTo(Course::class,'classroom_course');
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public static function getPrevTickets(){
        return self::where('user_id',Auth::user()->id)
                    ->get();
    }

    public static function getCurrentTickets(){
        return self::where('user_id',Auth::user()->id)
                    ->get();
    }

    public static function getNextTickets(){
        return self::where('user_id',Auth::user()->id)
                    ->get();
    }
}

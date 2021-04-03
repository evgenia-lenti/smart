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
    protected $with=['course','period'];

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
        return $this->belongsTo(Course::class);
    }

    public function period()
    {
        return $this->belongsTo(Period::class);
    }

    public static function getPrevTickets(){
        $now=Carbon::now();

        return self::where('user_id',Auth::user()->id)
                     ->leftJoin('periods','tickets.period_id','=','periods.id')
                     ->where('periods.ends','<',$now)
                     ->get();
    }

    public static function getCurrentTickets(){
        $now=Carbon::now();

        return self::where('user_id',Auth::user()->id)
                     ->leftJoin('periods','tickets.period_id','=','periods.id')
                     ->where('periods.starts','<=',$now)
                     ->where('periods.ends','>=',$now)
                     ->get();
    }

    public static function getNextTickets(){
        $now=Carbon::now();

        return self::where('user_id',Auth::user()->id)
                     ->leftJoin('periods','tickets.period_id','=','periods.id')
                     ->where('periods.starts','>',$now)
                     ->get();
    }
}

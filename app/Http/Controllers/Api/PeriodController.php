<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        $periods = [];
        $periods = Period::all()->toArray();

        dd($periods);

        /*foreach ($periods as $period)
            return $periods->push($period);*/

    }

    public function show($selectedDate)
    {
        dd($selectedDate);
        /*$period = Period::where('starts_at', $selectedDate)->first();

        dd($period);
        $periods->load('courses');*/



        return $period;
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function show($selectedDate)
    {
        $period = Period::where('starts_at', $selectedDate)->first();

        dd($period);
        $periods->load('courses');



        return $period;
    }

    public function index()
    {
        $periods = Period::all();

        return $periods;

    }
}

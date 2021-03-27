<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periods')->insert([
            'name' => 'Ημερήσιο',
            'course_id' => 1,
            'starts' => Carbon::createFromDate(2021, 03, 28),
            'ends' => Carbon::createFromDate(2021, 03, 28),
        ]);

        DB::table('periods')->insert([
            'name' => 'Ημερήσιο',
            'course_id' => 3,
            'starts' => Carbon::createFromDate(),
            'ends' => Carbon::createFromDate(),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εβδομαδιαίο',
            'course_id' => 2,
            'starts' => Carbon::createFromDate(2021, 03, 22),
            'ends' => Carbon::createFromDate(2021, 03, 26),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εξαμηνιαίο',
            'course_id' => 5,
            'starts' => Carbon::createFromDate(2021, 01, 01),
            'ends' => Carbon::createFromDate(2021, 06, 01),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εξαμηνιαίο',
            'course_id' => 4,
            'starts' => Carbon::createFromDate(2021, 01, 16),
            'ends' => Carbon::createFromDate(2021, 06, 15),
        ]);
    }
}

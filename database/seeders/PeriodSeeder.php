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
            'course_id' => 2,
            'starts' => Carbon::createFromDate(2021, 03, 29, ),
            'ends' => Carbon::createFromDate(2021, 03, 29),
        ]);

        DB::table('periods')->insert([
            'name' => 'Ημερήσιο',
            'course_id' => 5,
            'starts' => Carbon::createFromDate(2021, 03, 30),
            'ends' => Carbon::createFromDate(2021, 03, 30),
        ]);

        DB::table('periods')->insert([
        'name' => 'Εβδομαδιαίο',
        'course_id' => 3,
        'starts' => Carbon::createFromDate(2021, 03, 31),
        'ends' => Carbon::createFromDate(2021, 04, 05),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εβδομαδιαίο',
            'course_id' => 4,
            'starts' => Carbon::createFromDate(2021, 04, 06),
            'ends' => Carbon::createFromDate(2021, 04, 12),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εξαμηνιαίο',
            'course_id' => 1,
            'starts' => Carbon::createFromDate(2021, 04, 13),
            'ends' => Carbon::createFromDate(2021, 10, 10),
        ]);

        /*DB::table('periods')->insert([
            'name' => 'Εξαμηνιαίο',
            'course_id' => 2,
            'starts' => Carbon::createFromDate(2021, 01, 16),
            'ends' => Carbon::createFromDate(2021, 06, 15),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εξαμηνιαίο',
            'course_id' => 3,
            'starts' => Carbon::createFromDate(2021, 01, 16),
            'ends' => Carbon::createFromDate(2021, 06, 15),
        ]);

        DB::table('periods')->insert([
            'name' => 'Εξαμηνιαίο',
            'course_id' => 4,
            'starts' => Carbon::createFromDate(2021, 01, 16),
            'ends' => Carbon::createFromDate(2021, 06, 15),
        ]);*/
    }
}

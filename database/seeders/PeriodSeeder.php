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
            'name' => 'day',
            'course_id' => 1,
            'starts_at' => Carbon::tomorrow(),
            'ends_at' => Carbon::tomorrow(),
        ]);

        DB::table('periods')->insert([
            'name' => 'day',
            'course_id' => 3,
            'starts_at' => Carbon::createFromDate(),
            'ends_at' => Carbon::createFromDate(),
        ]);

        DB::table('periods')->insert([
            'name' => 'week',
            'course_id' => 2,
            'starts_at' => Carbon::tomorrow(),
            'ends_at' => Carbon::tomorrow(),
        ]);

        DB::table('periods')->insert([
            'name' => 'semester',
            'course_id' => 5,
            'starts_at' => Carbon::createFromDate(2021, 10, 01),
            'ends_at' => Carbon::createFromDate(2022, 02, 01),
        ]);

        DB::table('periods')->insert([
            'name' => 'semester',
            'course_id' => 4,
            'starts_at' => Carbon::createFromDate(2021, 10, 01),
            'ends_at' => Carbon::createFromDate(2022, 02, 01),
        ]);
    }
}

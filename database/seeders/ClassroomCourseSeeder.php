<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 1,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 2,
            'course_id' => 1,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 3,
            'course_id' => 2,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 4,
            'course_id' => 2,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 5,
            'course_id' => 1,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 6,
            'course_id' => 2,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 4,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 7,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 2,
            'course_id' => 4,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 3,
            'course_id' => 3,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 5,
            'course_id' => 8,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 4,
            'course_id' => 4,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 4,
            'course_id' => 6,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 5,
            'course_id' => 1,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 2,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 3,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 5,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 6,
        ]);

        DB::table('classroom_course')->insert([
            'classroom_id' => 1,
            'course_id' => 8,
        ]);
    }
}

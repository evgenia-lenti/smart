<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classroom_types')->insert([
            'id' => 1,
            'name' => 'teaching'
        ]);

        DB::table('classroom_types')->insert([
            'id' => 2,
            'name' => 'lecture'
        ]);
    }
}

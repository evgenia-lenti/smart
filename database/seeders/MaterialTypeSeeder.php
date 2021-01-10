<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material_types')->insert([
            'id' => 1,
            'name' => 'video'
        ]);

        DB::table('material_types')->insert([
            'id' => 2,
            'name' => 'pdf'
        ]);

        DB::table('material_types')->insert([
            'id' => 3,
            'name' => 'word'
        ]);

        DB::table('material_types')->insert([
            'id' => 4,
            'name' => 'powerpoint'
        ]);
    }
}

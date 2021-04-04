<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => Role::ADMINISTRATOR,
            'name' => 'administrator'
        ]);

        DB::table('roles')->insert([
            'id' => Role::EDUCATOR,
            'name' => 'educator'
        ]);

        DB::table('roles')->insert([
            'id' => Role::STUDENT,
            'name' => 'student'
        ]);
    }
}

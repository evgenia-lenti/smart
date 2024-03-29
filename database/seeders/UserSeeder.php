<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'first_name' => 'Ευγενία',
            'last_name' => 'Λεντή',
            'email' => 'ducksoup50@hotmail.com',
            'telephone' => 6980950121,
            'address' => 'Περιστέρας 1 πειραιάς',
            'password' => bcrypt('12345678'),
            'role_id' => Role::ADMINISTRATOR,
            'active' => true,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'first_name' => 'Δημήτρης',
            'last_name' => 'Σιούλας',
            'email' => 'sioulasdimitris@gmail.com',
            'telephone' => 6945939802,
            'address' => 'Θεμιστοκλέους 7 Άγιος Παντελεήμωνας',
            'password' => bcrypt('12345678'),
            'role_id' => Role::EDUCATOR,
            'active' => true,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
            'email' => 'evgn@outlook.com.gr',
            'telephone' => 6980950121,
            'address' => 'Αγίων Πάντων 36 Αθήνα',
            'password' => bcrypt('12345678'),
            'role_id' => Role::STUDENT,
            'active' => true,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
    }
}

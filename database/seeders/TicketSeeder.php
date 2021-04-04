<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tickets')->insert([
    		'user_id' => 1, 	
    		'first_name' => 'teo',
    		'last_name' => 'katsigiannis',
    		'telephone' => '111111111',
    		'email' => 'tkatsigiannis@gmail.com',
    		'period_id' => 1,
    		'paid'=>1,
    		'created_at' =>Carbon::now(),
    		'updated_at'=>Carbon::now(),
    	]);

    	DB::table('tickets')->insert([
    		'user_id' => 1, 	
    		'first_name' => 'engenia',
    		'last_name' => 'lenti',
    		'telephone' => '111111111',
    		'email' => 'test@gmail.com',
    		'period_id' => 1,
    		'paid'=>1,
    		'created_at' =>Carbon::now(),
    		'updated_at'=>Carbon::now(),
    	]);

    }
}

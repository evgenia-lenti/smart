<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'id' => 1,
            'name' => 'Γεωμετρία Α Γυμνασίου',
            'description' => 'Γεωμετρία για παιδιά α γυμνασίου',
            'slug' => 'gewmetria-a-gymnasiou',
            'path' => 'https://www.youtube.com/embed/u-Q0eMizPsI',
            'user_id' => 1,
            'visible' => true,
            'active' => true,
            /*'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()*/
        ]);

        /*DB::table('courses')->insert([
            'id' => 2,
            'name' => 'Άλγεβρα Α Γυμνασίου',
            'description' => 'Άλγεβρα για παιδιά α γυμνασίου',
            'slug' => 'algevra-a-gymnasiou',
            'user_id' => 1,
            'visible' => true,
            'active' => true,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('courses')->insert([
            'id' => 3,
            'name' => 'Αρχαία Β Γυμνασίου',
            'description' => 'Αρχαία για παιδιά β γυμνασίου',
            'slug' => 'arxaia-b-gymnasiou',
            'user_id' => 2,
            'visible' => true,
            'active' => true,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        DB::table('courses')->insert([
            'id' => 4,
            'name' => 'Βιολογία Γ Λυκείου',
            'description' => 'Βιολογία για παιδιά γ λυκείου',
            'slug' => 'biologia-g-lykeiou',
            'user_id' => 2,
            'visible' => true,
            'active' => true,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);*/

        DB::table('courses')->insert([
            'id' => 2,
            'name' => 'Αρχαία Πολυτονικό Σύστημα',
            'description' => 'Webinar για το πολυτονικό σύστημα',
            'slug' => 'arxaia-polytoniko-systhma',
            'path' => 'https://www.youtube.com/embed/MaN668Rtyqs',
            'user_id' => 1,
            'visible' => true,
            'active' => true,
            /*'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()*/
        ]);

        DB::table('courses')->insert([
            'id' => 3,
            'name' => 'Αλγόριθμοι',
            'description' => 'Σεμινάριο αλγορίθμων αρχαρίων',
            'slug' => 'algorithmoi',
            'path' => 'https://www.youtube.com/embed/uymnKkbUPLM',
            'user_id' => 1,
            'visible' => true,
            'active' => true,
            /*'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()*/
        ]);

        DB::table('courses')->insert([
            'id' => 4,
            'name' => 'Βάσεις Δεδομένων',
            'description' => 'Βάσεις δεδομένων για αρχάριους',
            'slug' => 'baseis-dedomenwn',
            'path' => 'https://www.youtube.com/embed/Rkc7EDkcIkc',
            'user_id' => 2,
            'visible' => true,
            'active' => true,
            /*'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()*/
        ]);

        DB::table('courses')->insert([
            'id' => 5,
            'name' => 'Υπερθέρμανση του πλανήτη',
            'description' => 'Σεμινάριο για την υπερθέρμανση του πλανήτη',
            'slug' => 'yperthermansh-toy-planhth',
            'path' => 'https://www.youtube.com/embed/PZgtOnuHJWE',
            'user_id' => 1,
            'visible' => true,
            'active' => true,
            /*'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()*/
        ]);
    }
}

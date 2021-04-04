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
            'path' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/CDl1D5cj4V0" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>',
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
            'path' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/MaN668Rtyqs" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
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
            'path' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/uymnKkbUPLM" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
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
            'path' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/Rkc7EDkcIkc" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
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
            'path' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/PZgtOnuHJWE" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'user_id' => 1,
            'visible' => true,
            'active' => true,
            /*'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()*/
        ]);
    }
}

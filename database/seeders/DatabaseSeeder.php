<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ClassroomSeeder::class,
            CourseSeeder::class,
            ClassroomUserSeeder::class,
            ClassroomCourseSeeder::class,
            MaterialTypeSeeder::class,
            //TheorySeeder::class,
            //AssignmentSeeder::class
        ]);
    }
}

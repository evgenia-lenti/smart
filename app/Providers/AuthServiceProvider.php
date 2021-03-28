<?php

namespace App\Providers;

use App\Models\Assignment;
use App\Models\Classroom;
use App\Models\Course;
use App\Models\Theory;
use App\Policies\AssignmentPolicy;
use App\Policies\ClassroomPolicy;
use App\Policies\CoursePolicy;
use App\Policies\TheoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Classroom::class => ClassroomPolicy::class,
        Course::class => CoursePolicy::class,
        Theory::class => TheoryPolicy::class,
        Assignment::class => AssignmentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

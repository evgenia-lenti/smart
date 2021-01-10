<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $appends = ['path'];

    protected $fillable = ['name', 'description', 'slug', 'user_id', 'visible', 'active'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class,'classroom_course');
    }

    public function theory()
    {
        return $this->hasMany(Theory::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPathAttribute()
    {
        return route('courses.show', [
            'course' => $this->slug
        ]);
    }
}

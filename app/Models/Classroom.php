<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'description', 'slug', 'user_id', 'visible', 'active'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class,'class_course');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;
use App\Models\User;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'user_id', 'visible', 'active'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class,'class_course');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

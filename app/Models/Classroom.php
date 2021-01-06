<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $appends = ['path'];

    protected $fillable = ['id','name', 'description', 'slug', 'user_id', 'visible', 'active'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class,'classroom_course');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPathAttribute()
    {
        return route('classrooms.show', [
            'classroom' => $this->slug
        ]);
    }

    public function getEditPathAttribute() {

        return "{$this->path}/edit";
    }

}

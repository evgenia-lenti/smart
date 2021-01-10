<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'user_id', 'file_path', 'visible', 'active'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}

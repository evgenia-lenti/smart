<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassroomType extends Model
{
    use HasFactory;

    const TEACHING = 1;
    const LECTURE = 2;
}

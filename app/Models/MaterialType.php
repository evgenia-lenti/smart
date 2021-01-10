<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    use HasFactory;

    const VIDEO = 0;
    const PDF = 1;
    const WORD = 2;
    const POWERPOINT = 3;
}

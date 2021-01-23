<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    use HasFactory;

    const VIDEO = 1;
    const PDF = 2;
    const WORD = 3;
    const POWERPOINT = 4;
    const ONLINE = 5;
}

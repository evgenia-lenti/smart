<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'starts' => 'datetime:Y-m-d',
        'ends' => 'datetime:Y-m-d',
    ];

    public function course()
    {
        return $this->hasMany(Course::class);
    }

}

<?php

namespace Modules\Teacher\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'image',
        'exp',
        'description'
    ];
}

<?php

namespace Modules\Courses\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'teacher_id',
        'code',
        'price',
        'sale_price',
        'is_document',
        'status',
        'supports',
        'detail',
        'thumbnail',
    ];
}

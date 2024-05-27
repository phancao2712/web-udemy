<?php

namespace Modules\Lessons\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'video_id',
        'document_id',
        'parent_id',
        'is_trial',
        'view',
        'position',
        'duration',
        'description',
        'course_id'
    ];
}

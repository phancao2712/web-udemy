<?php

namespace Modules\Video\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Lessons\src\Models\Lesson;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'name',
        'size'
    ];

    protected $attributes = [
        'size' => 0
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'video_id', 'id');
    }
}

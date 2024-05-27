<?php

namespace Modules\Lessons\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Document\src\Models\Document;
use Modules\Video\src\Models\Video;

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

    protected $with = [
        'video',
        'document'
    ];

    public function children()
    {
        return $this->hasMany(Lesson::class, 'parent_id');
    }

    public function subLessons()
    {
        return $this->children()->with('subLessons');
    }

    public function video(){
        return $this->belongsTo(Video::class,'video_id');
    }

    public function document(){
        return $this->belongsTo(Document::class,'document_id');
    }
}

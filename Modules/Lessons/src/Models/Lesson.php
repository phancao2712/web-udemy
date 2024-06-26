<?php

namespace Modules\Lessons\src\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\src\Models\Course;
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
        'course_id',
        'status'
    ];

    protected $with = [
        'video',
        'document',
    ];

    public function children()
    {
        return $this->hasMany(Lesson::class, 'parent_id');
    }

    public function subLessons()
    {
        return $this->children()->orderBy('position', 'asc')->with('subLessons');
    }

    public function video()
    {
        return $this->belongsTo(Video::class, 'video_id');
    }

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function scopeActive(Builder $query): void
    {
        queryActive($query);
    }

    public function scopePosition(Builder $query): void
    {
        queryPosition($query);
    }

}

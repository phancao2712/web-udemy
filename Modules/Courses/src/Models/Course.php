<?php

namespace Modules\Courses\src\Models;

use App\Models\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\src\Models\Category;
use Modules\Lessons\src\Models\Lesson;
use Modules\Teacher\src\Models\Teacher;

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
        'categories',
        'durations'
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new ActiveScope);
    }

    protected $with = [
        'teacher',
        'lessons'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'course_categories');
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id','id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class,'course_id','id');
    }
}

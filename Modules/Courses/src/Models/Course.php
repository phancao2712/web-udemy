<?php

namespace Modules\Courses\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Categories\src\Models\Category;

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
        'categories'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'course_categories');
    }
}

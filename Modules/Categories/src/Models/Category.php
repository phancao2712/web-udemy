<?php

namespace Modules\Categories\src\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Courses\src\Models\CourseCategory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];

    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function subCategories() {
        return $this->children()->with('subCategories');
    }

    public function courses() {
        return $this->belongsToMany(CourseCategory::class,'course_categories');
    }

}

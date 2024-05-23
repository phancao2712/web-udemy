<?php

namespace Modules\Courses\src\Repositories;

use App\Repositories\BaseRepository;
use Modules\Courses\src\Models\Course;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;

class CoursesRepository extends BaseRepository implements CoursesRepositoryInterface
{
    public function getModel()
    {
        return Course::class;
    }

    public function createCourseCategories($course, $data = []){
        return $course->categories()->attach($data);
    }

    public function getCategoriesIds($course){
        return $course->categories()->allRelatedIds()->toArray();
    }

    public function updateCourseCategories($course, $data = []){
        return $course->categories()->sync($data);
    }
}

<?php

namespace Modules\Courses\src\Repositories;

use App\Models\Scopes\ActiveScope;
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

    public function deleteCourseCategories($course){
        return $course->categories()->detach();
    }

    public function getAllCourses(){
        return $this->model->withoutGlobalScope(ActiveScope::class)->select(['id', 'name', 'price', 'status', 'sale_price', 'created_at'])->latest();
    }

    public function getCourse(string $id){
        return $this->model->withoutGlobalScope(ActiveScope::class)->find($id);
    }

    public function updateCourse(string $id, $data = []){
        $course = $this->model->withoutGlobalScope(ActiveScope::class)->find($id);
        if($course){
            $course->update($data);
        }
        return false;
    }

    public function deleteCourse(string $id){
        $course = $this->model->withoutGlobalScope(ActiveScope::class)->find($id);

        if($course){
            $course->delete($id);
        }
    }

    public function getCourseDetail($slug) {
        return $this->model->whereSlug($slug)->firstOrFail();
    }

}

<?php

namespace Modules\Courses\src\Repositories;

use App\Repositories\RepositoryInterface;

interface CoursesRepositoryInterface extends RepositoryInterface
{
    public function getAllCourses();
    public function getCategoriesIds($course);
    public function updateCourseCategories($course, $data = []);
    public function getCourse(string $id);
    public function updateCourse(string $id, $data = []);
    public function deleteCourse(string $id);

}

<?php

namespace Modules\Lessons\src\Repositories;

use App\Repositories\RepositoryInterface;

interface LessonsRepositoryInterface extends RepositoryInterface
{
    public function getPosition($id);

    public function getLessons($id, $column = '*');

    public function getAllLesson($id);

    public function getLessonCount($course);

    public function getModulePosition($course);
    public function getLessonPosition($course, $moduleId = null);

    public function getLessonDetail($slug);
}

<?php

namespace Modules\Lessons\src\Repositories;

use App\Repositories\RepositoryInterface;

interface LessonsRepositoryInterface extends RepositoryInterface
{
    public function getPosition($id);

    public function getLessons($id, $column = '*');

    public function getAllLesson($id);
}

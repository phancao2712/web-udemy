<?php

namespace Modules\Lessons\src\Repositories;

use App\Repositories\BaseRepository;
use Modules\Lessons\src\Models\Lesson;
use Modules\Lessons\src\Repositories\LessonsRepositoryInterface;

class LessonsRepository extends BaseRepository implements LessonsRepositoryInterface
{
    public function getModel()
    {
        return Lesson::class;
    }

    public function getPosition($id){
        $position = $this->model->where('course_id', $id)->count();
        return $position + 1;
    }

    public function getLesson($id){
        return $this->model->where('course_id', $id)->get();
    }

    public function getAllLesson(){
        return $this->getAll();
    }
}

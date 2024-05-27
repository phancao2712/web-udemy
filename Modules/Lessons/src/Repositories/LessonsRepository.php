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

    public function getLessons($id){
        return $this->model->with('subLessons')
                            ->whereCourseId($id)
                            ->whereNull('parent_id')
                            ->orderBy('position', 'asc')->get();
    }

    public function getAllLesson(){
        return $this->getAll();
    }
}

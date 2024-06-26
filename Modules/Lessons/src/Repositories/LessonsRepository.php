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

    public function getPosition($id)
    {
        $position = $this->model->where('course_id', $id)->count();
        return $position + 1;
    }

    public function getLessons($id, $column = '*')
    {
        return $this->model->with('subLessons')
            ->select($column)
            ->whereCourseId($id)
            ->whereNull('parent_id')
            ->position();
    }

    public function getAllLesson($id)
    {
        return $this->model->where('course_id', $id)->get();
    }

    public function getLessonCount($course)
    {
        return (object) [
            'module' => $course->lessons->whereNull('parent_id')->count(),
            'lesson' => $course->lessons->whereNotNull('parent_id')->count()
        ];
    }

    public function getModulePosition($course)
    {
        return $course->lessons()->whereNull('parent_id')->position()->get();
    }

    public function getLessonPosition($course, $moduleId = null)
    {
        $lesson = $course->lessons()->active();

        if ($moduleId) {
            $lesson->where('parent_id', $moduleId);
        } else {
            $lesson->whereNotNull('parent_id');
        }
        return $lesson->position()->get();
    }

    public function getLessonDetail($slug)
    {
        return $this->model->whereSlug($slug)->active()->firstOrFail();
    }
}

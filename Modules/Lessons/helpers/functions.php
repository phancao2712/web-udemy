<?php
use Modules\Lessons\src\Repositories\LessonsRepositoryInterface;
function getLessons($lessons, $old = '', $parentId = 0, $char = '')
{
    $id = request()->route()->lessonId;
    if ($lessons) {
        foreach ($lessons as $key => $lesson) {

            if ($lesson->parent_id == $parentId && $id != $lesson->id) {
                echo '<option value="' . $lesson->id . '"';
                if ($old == $lesson->id) {
                    echo ' selected';
                }
                echo '>' . $char . $lesson->name . '</option>';
                unset($lessons[$key]);
                getLessons($lessons, $old, $lesson->id, $char . ' |- ');
            }
        }
    }
}

function getTime($seconds) {
    $min = floor($seconds / 60);
    $second = floor($seconds - $min * 60);

    ($min < 10) ? $min = '0' . $min : $min;
    ($second < 10) ? $second = '0' . $second : $second;
    return $min . ':' . $second;
}

function getCountLesson($course){
    $lessonsRepository = app(LessonsRepositoryInterface::class);
    return $lessonsRepository->getLessonCount($course);
}

function getPositionCourse($course){
    $lessonsRepository = app(LessonsRepositoryInterface::class);
    return $lessonsRepository->getCoursePosition($course);
}

function getPositionLesson($course, $moduleId) {
    $lessonsRepository = app(LessonsRepositoryInterface::class);
    return $lessonsRepository->getLessonPosition($course, $moduleId);
}

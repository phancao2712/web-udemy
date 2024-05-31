<?php
namespace Modules\Lessons\src\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Iman\Streamer\VideoStreamer;
use Modules\Courses\src\Repositories\CoursesRepositoryInterface;
use Modules\Lessons\src\Repositories\LessonsRepositoryInterface;


class LessonController extends Controller
{
    protected $courseRepository;
    protected $lessonRepository;
    public function __construct(
        CoursesRepositoryInterface $courseRepository,
        LessonsRepositoryInterface $lessonRepository
    ) {
        $this->courseRepository = $courseRepository;
        $this->lessonRepository = $lessonRepository;
    }

    public function detail(string $slug) {
        $lesson = $this->lessonRepository->getLessonDetail($slug);
        $video = $lesson->video->url;
        if (!$lesson) {
            abort(404);
        }
        $index = 0;
        $course = $lesson->course;
        $lessons = $this->lessonRepository->getLessonPosition($course);
        $currentIndex = 0;
        foreach ($lessons as $key => $item) {
            if($item->id == $lesson->id ){
                $currentIndex = $key;
                break;
            }
        }
        $prevIndex = null;
        $nextIndex = null;
        if(isset($lessons[$currentIndex + 1])){
            $nextIndex = $lessons[$currentIndex + 1];
        }

        if(isset($lessons[$currentIndex - 1])){
            $prevIndex = $lessons[$currentIndex - 1];
        }

        $titlePage = $lesson->name;

        return view('lessons::clients.detail', compact(
            'titlePage',
            'lesson',
            'video',
            'course',
            'index',
            'nextIndex',
            'prevIndex'
        ));
    }

    public function getTrial(string $id) {
        $lesson = $this->lessonRepository->find($id);
        if(!$lesson){
            return ['success' => false,'message' => 'Không tìm thấy khóa học'];
        }
        return ['success' => true,'lesson' => $lesson];
    }

    public function stream(Request $request){
        $video = public_path($request->url);
        VideoStreamer::streamFile($video);
    }
}

?>

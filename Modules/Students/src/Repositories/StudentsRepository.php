<?php

namespace Modules\Students\src\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Modules\Students\src\Models\Student;
use Modules\Students\src\Repositories\StudentsRepositoryInterface;

class StudentsRepository extends BaseRepository implements StudentsRepositoryInterface
{
    public function getModel()
    {
        return Student::class;
    }

    public function setPassword($password, $id)
    {
        return $this->update($id, ['password' => Hash::make($password)]);
    }

    public function getCourse($studentId, $filters = [])
    {
        extract($filters);
        $query = $this->find($studentId)->courses();
        if (!empty($teacher_id)) {
            $query->where('teacher_id', $teacher_id);
        }
        if (!empty($keyword)) {
            $query->where(function ($builder) use ($keyword) {
                $builder->where('name', 'like', '%' . $keyword . '%')
                    ->orWhere('detail', 'like', '%' . $keyword . '%');
            });
        }
        return $query->paginate(1);
    }
}

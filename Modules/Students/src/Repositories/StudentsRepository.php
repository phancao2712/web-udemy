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
}

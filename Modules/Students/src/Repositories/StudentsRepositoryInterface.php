<?php

namespace Modules\Students\src\Repositories;

use App\Repositories\RepositoryInterface;

interface StudentsRepositoryInterface extends RepositoryInterface
{
    public function setPassword($password, $id);
    public function getCourse($studentId, $filters = []);
}

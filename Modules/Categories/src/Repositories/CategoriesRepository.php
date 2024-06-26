<?php

namespace Modules\Categories\src\Repositories;

use App\Repositories\BaseRepository;
use Modules\Categories\src\Models\Category;
use Modules\Categories\src\Repositories\CategoriesRepositoryInterface;


class CategoriesRepository extends BaseRepository implements CategoriesRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    public function getTreeCategories(){
        return $this->model->with('subCategories')->whereParentId(0)->latest()->get();
    }
}

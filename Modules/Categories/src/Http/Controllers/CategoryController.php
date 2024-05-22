<?php

namespace Modules\Categories\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Categories\Requests\CategoryRequest;
use Modules\Categories\src\Repositories\CategoriesRepositoryInterface;

use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoriesRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $titlePage = "Danh sách danh mục";
        $categories = $this->categoryRepository->getTreeCategories()->toArray();

        return view('categories::index', compact(
            'titlePage'
        ));
    }

    public function create()
    {
        $titlePage = "Thêm danh mục";

        $categories = $this->categoryRepository->getAll(['id','name','slug','parent_id']);

        return view('categories::create', compact(
            'titlePage',
            'categories'
        ));
    }

    public function data()
    {
        $listCategory = $this->categoryRepository->getTreeCategories(['id', 'name', 'slug', 'created_at']);
        $listCategory = DataTables::of($listCategory)->toArray();

        $listCategory['data'] = $this->getDataTable($listCategory['data']);
        return $listCategory;
    }

    public function getDataTable($categories, $char='', &$result = []){
        if($categories){
            foreach ($categories as $key => $category) {
                $row = $category;
                $row['name'] = $char.$row['name'];
                $row['edit'] = '<a href="' . route('admin.categories.edit', $category['id']) . '" class="btn btn-warning">Sửa</a>';
                $row['delete'] = '<a href="' . route('admin.categories.destroy', $category['id']) . '" class="btn btn-danger delete-btn">Xóa</a>';
                $row['link'] = '<a href="" class="btn btn-primary">Xem</a>';
                $row['created_at'] = Carbon::parse($category['created_at'])->format('d/m/Y H:i:s');
                unset($row['sub_categories']);
                unset($row['updated_at']);
                $result[] = $row;
                if(!empty($category['sub_categories'])){
                    $this->getDataTable($category['sub_categories'], $char.'--', $result);
                }
            }
        }

        return $result;
    }

    public function store(CategoryRequest $request)
    {
        $status = $this->categoryRepository->create(
            [
                'name' => $request->name,
                'slug' => $request->slug,
                'parent_id' => $request->parent_id,
            ]
        );
        return to_route('admin.categories.index')->with('success', __('categories::message.create.success'));
    }

    public function edit(string $id)
    {
        $titlePage = 'Cập nhật Người dùng';;
        $category = $this->categoryRepository->find($id);
        $categories = $this->categoryRepository->getAll(['id','name','slug','parent_id']);

        if ($category) {
            return view('categories::edit', compact(
                'titlePage',
                'category',
                'categories'
            ));
        } else {
            abort(404);
        }
    }

    public function update(CategoryRequest $request,string $id)
    {
        $data = $request->except(['_token', 'password', '_method']);
        $status = $this->categoryRepository->update($id, $data);

        return to_route('admin.categories.index')->with('success', __('categories::message.update.success'));
    }

    public function destroy(string $id)
    {
        $status = $this->categoryRepository->delete($id);
        return response(['message' =>  __('categories::message.delete.success'), 500]);
    }
}

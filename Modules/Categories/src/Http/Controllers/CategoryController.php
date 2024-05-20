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
        return view('categories::index', compact(
            'titlePage'
        ));
    }

    public function create()
    {
        $titlePage = "Thêm danh mục";
        return view('categories::create', compact(
            'titlePage'
        ));
    }

    public function data()
    {
        $listCategory = $this->categoryRepository->getAll(['id', 'name', 'slug', 'created_at']);
        return DataTables::of($listCategory)
            ->addColumn('edit', function ($category) {
                return '<a href="' . route('admin.categories.edit', $category->id) . '" class="btn btn-warning">Sửa</a>';
            })
            ->addColumn('delete', function ($category) {
                return '<a href="' . route('admin.categories.destroy', $category->id) . '" class="btn btn-danger delete-btn">Xóa</a>';
            })
            ->addColumn('link', function ($category) {
                return '<a href="" class="btn btn-primary">Xem</a>';
            })
            ->editColumn('created_at', function ($category) {
                return Carbon::parse($category->created_at)->format('d/m/Y H:i:s');
            })
            ->rawColumns(['edit', 'delete', 'link'])
            ->toJson();
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

        if ($category) {
            return view('categories::edit', compact(
                'titlePage',
                'category'
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

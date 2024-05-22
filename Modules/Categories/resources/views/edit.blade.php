@extends('layouts.backend')
@section('content')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @method('PUT')
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" class="form-control title {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                        placeholder="Tên..." value="{{ old('name', $category?->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slug</label>
                    <input type="text" class="form-control slug {{ $errors->has('slug') ? 'is-invalid' : '' }}"
                        name="slug" placeholder="Slug..." value="{{ old('slug', $category?->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cha</label>
                    <select name="parent_id" id=""
                        class="form-control {{ $errors->has('parent_id') ? 'is-invalid' : '' }}">
                        <option value="0">Không</option>
                        {{ getCategories($categories, old('parent_id', $category?->parent_id)) }}
                    </select>
                    @error('parent_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-danger">Hủy</a>
        @csrf
    </form>
@endsection

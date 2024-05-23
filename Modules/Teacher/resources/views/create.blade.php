@extends('layouts.backend')
@section('content')
    <form action="{{ route('admin.teachers.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="">Tên</label>
                    <input type="text" name="name"
                        class="form-control title {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Tên..."
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug"
                        class="form-control slug {{ $errors->has('slug') ? 'is-invalid' : '' }}" placeholder="Slug..."
                        value="{{ old('slug') }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="">Số năm kinh nghiệm</label>
                    <input type="text" name="exp" class="form-control {{ $errors->has('exp') ? 'is-invalid' : '' }}"
                        placeholder="Số năm kinh nghiệm..." id="" value="{{ old('exp') }}">
                    @error('exp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="">Mô tả</label>
                    <textarea name="description" id="" class="form-control ckeditor  {{ $errors->has('description') ? 'is-invalid' : '' }}"
                        placeholder="Nội dung...">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="row {{ $errors->has('image') ? 'align-items-center' : 'align-items-end' }}">
                        <div class="col-7">
                            <label for="">Ảnh đại diện</label>
                            <input type="text" name="image"
                                class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                placeholder="Ảnh đại diện..." id="image" value="{{ old('image') }}">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-2 d-grid">
                            <button type="button" class="btn btn-primary" id="lfm" data-input="image"
                                data-preview="holder">
                                Chọn ảnh
                            </button>
                        </div>
                        <div class="col-3">
                            <div id="holder">
                                @if (old('image'))
                                    <img style="height: 5rem" src="{{ old('image') }}" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Lưu lại</button>
                <a href="{{ route('admin.courses.index') }}" class="btn btn-danger">Hủy</a>
            </div>
        </div>

    </form>
@endsection

@section('style')
    <style>
        img {
            max-width: 100%;
            height: auto !important;
        }

        #holder img {
            width: 100% !important;
        }

        .list-categories {
            max-height: 250px;
            overflow: auto;
        }
    </style>
@endsection


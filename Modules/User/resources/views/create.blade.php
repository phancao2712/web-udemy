@extends('layouts.backend')
@section('content')
    <form action="{{ route('admin.user.store') }}" method="POST">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                        placeholder="Tên..." value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        name="email" placeholder="Email..." value="{{ old('email') }}">
                    @error('email')
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
                    <label for="exampleInputEmail1" class="form-label">Nhóm</label>
                    <select name="group_id" id=""
                        class="form-control {{ $errors->has('group_id') ? 'is-invalid' : '' }}">
                        <option value="">Chọn nhóm</option>
                        <option value="1">Admin</option>
                    </select>
                    @error('group_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                        name="password" placeholder="Mật khẩu...">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        <a href="{{ route('admin.user.index') }}" class="btn btn-danger">Hủy</a>
        @csrf
    </form>
@endsection

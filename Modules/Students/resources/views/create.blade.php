@extends('layouts.backend')
@section('content')
    <form action="{{ route('admin.students.store') }}" method="POST">
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
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                    name="address" placeholder="Địa chỉ...">
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                        name="phone" placeholder="Số điện thoại...">
                    @error('phone')
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
                    <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                    <select name="status" id="" class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}">
                        <option value="0">Chưa kích hoạt</option>
                        <option value="1">Kích hoạt</option>
                    </select>
                    @error('status')
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
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('admin.students.index') }}" class="btn btn-danger">Hủy</a>
        @csrf
    </form>
@endsection

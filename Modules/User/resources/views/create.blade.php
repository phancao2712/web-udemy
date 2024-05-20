@extends('layouts.backend')
@section('content')
    <form>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Tên...">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nhóm</label>
                    <select name="group_id" id="" class="form-control">
                        <option value="">Chọn nhóm</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu...">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Lưu lại</button>
        <a href="{{ route('admin.user.index') }}" class="btn btn-danger">Hủy</a>
    </form>
@endsection

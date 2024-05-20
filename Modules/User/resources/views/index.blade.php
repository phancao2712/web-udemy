@extends('layouts.backend')
@section('content')
<p><a href="{{ route('admin.user.create') }}" class="btn btn-primary">Thêm</a></p>
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Nhóm</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>
                    <a href="" class="btn btn-warning">Sửa</a>
                    <button class="btn btn-danger">Xóa</button>
                </th>
            </tr>
        </tbody>
    </table>
@endsection

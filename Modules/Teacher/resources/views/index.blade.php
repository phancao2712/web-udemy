@extends('layouts.backend')
@section('content')
    <p><a href="{{ route('admin.users.create') }}" class="btn btn-primary">Thêm</a></p>
    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Kinh nghiệm</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Kinh nghiệm</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </tfoot>
    </table>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
    $("#datatable").DataTable({
        autoWidth: false,
        processing: true,
        serverSide: true,
        ajax: "{{route('admin.teachers.data')}}",
        columns: [
            {
                data: 'image',
            },
            {
                data: 'name',
            },
            {
                data: 'exp',
            },
            {
                data: 'created_at',
            },
            {
                data: 'edit',
            },
            {
                data: 'delete',
            }
        ]
    });
});
</script>
@endsection

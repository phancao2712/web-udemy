@extends('layouts.backend')
@section('content')
    <p><a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Thêm</a></p>
    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Tên khóa học</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Tên khóa học</th>
                <th>Giá</th>
                <th>Trạng thái</th>
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
        ajax: "{{route('admin.courses.data')}}",
        columns: [
            {
                data: 'name',
            },
            {
                data: 'price',
            },
            {
                data: 'status',
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

@extends('layouts.backend')
@section('content')
    <p><a href="{{ route('admin.students.create') }}" class="btn btn-primary">Thêm</a></p>
    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Trạng Thái</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Trạng Thái</th>
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
        ajax: "{{route('admin.students.data')}}",
        columns: [
            {
                data: 'name',
            },
            {
                data: 'email',
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

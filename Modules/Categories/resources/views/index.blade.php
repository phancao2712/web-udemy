@extends('layouts.backend')
@section('content')
    <p><a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Thêm</a></p>
    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Tên Danh Mục</th>
                <th>Link</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Tên Danh Mục</th>
                <th>Link</th>
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
        pageLength: 2,
        autoWidth: false,
        processing: true,
        serverSide: true,
        ajax: "{{route('admin.categories.data')}}",
        columns: [
            {
                data: 'name',
            },
            {
                data: 'link',
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

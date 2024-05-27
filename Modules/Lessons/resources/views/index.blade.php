@extends('layouts.backend')
@section('content')
    <p>
        <a href="{{ route('admin.lessons.create', $course->id) }}" class="btn btn-primary">Thêm</a>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-info text-white">Quay lại khóa học</a>
    </p>
    <table id="datatable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Tên </th>
                <th>Học thử</th>
                <th>Lượt xem</th>
                <th>Thời lượng</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Tên </th>
                <th>Học thử</th>
                <th>Thời lượng</th>
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
        ajax: "{{ route('admin.lessons.data', $id) }}",
        columns: [
            {
                data: 'name',
            },
            {
                data: 'is_trial',
            },
            {
                data: 'view',
            },
            {
                data: 'duration',
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

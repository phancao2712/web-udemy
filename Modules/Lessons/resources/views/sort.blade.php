@extends('layouts.backend')
@section('content')
    <form action="" method="post">
        <div class="row">
            <div id="items-1" class="list-group col">
                @foreach ($modules as $module)
                    <div id="item-{{ $module->id }}" data-id="{{ $module->id }}" class="list-group-item title">
                        {{ $module->name }} <input type="hidden" name="lesson[]" value="{{ $module->id }}"></div>

                    @if ($module->children)
                        @php
                            $lessons = $module->children()->orderBy('position', 'asc')->get();
                        @endphp
                        @foreach ($lessons as $lesson)
                            <div id="item-{{ $lesson->id }}" data-id="{{ $lesson->id }}" class="list-group-item lesson">
                                {{ $lesson->name }} <input type="hidden" name="lesson[]" value="{{ $lesson->id }}"></div>

                        @endforeach
                    @endif
                @endforeach
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Lưu lại</button>
                <a href="{{ route('admin.lessons.index', $id) }}" class="btn btn-danger">Hủy</a>
            </div>
        </div>
        @csrf
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#items-1').sortable();
        });
    </script>
@endsection

@section('style')
    <style>
        .list-group {
            margin: 20px;
        }

        .title {
            font-weight: bold;
        }

        .lesson {
            padding-left: 30px;
        }
    </style>
@endsection

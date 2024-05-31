<div class="tabs__pane -tab-item-1 is-active">
    <h3 class="text-20 fw-500">Thông tin khóa học</h3>
    <div class="mt-40">
        {!! $course?->detail !!}
    </div>
</div>

@section('style')
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            line-height: 1.2;
            font-weight: 700;
            margin: 0;
            color: #140342;
        }

        h4 {
            margin-bottom: 30px !important;
            font-size: var(--text-20) !important;
        }
        #my-video {
           width: 100% !important;
           height: 500px;
       }
    </style>
@endsection

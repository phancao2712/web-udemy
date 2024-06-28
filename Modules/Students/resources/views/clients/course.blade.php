@extends('layouts.client')

@section('content')
    <div class="content-wrapper js-content-wrapper">
        <div class="dashboard -home-9 js-dashboard-home-9">
            @include('students::clients.sidebar')
            <div class="dashboard__main" style="padding-left: 0 !important; padding-top: 10px !important">
                <div class="dashboard__content bg-light-4">
                    <div class="row pb-50 mb-10">
                        <div class="col-auto">
                            <h1 class="text-30 lh-12 fw-700">{{ $titlePage }}</h1>
                        </div>
                    </div>
                    <div class="row y-gap-30">
                        <div class="col-12">
                            <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                                <div class="tabs -active-purple-2 js-tabs pt-0">
                                    <div class="tabs__content py-30 px-30 js-tabs-content">
                                        <div class="tabs__pane -tab-item-1 is-active">
                                            <div class="row y-gap-10 justify-between">
                                                <form class="contact-form d-flex" action="">
                                                    <select class="setup-select2 bg-white h-50" style="width: 20%; display:none;" name="teacher_id"
                                                        id="">
                                                        <option value="">Tất cả giảng viên</option>
                                                        @foreach ($teachers as $teacher)
                                                            <option @selected(request('teacher_id') == $teacher->id)
                                                                value="{{ $teacher->id }}">{{ $teacher->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <input class="w-50 h-50 ml-10" type="text"
                                                        placeholder="Tìm kiếm khóa học..." name="keyword"
                                                        value="{{ request('keyword') }}">
                                                    <button type="submit"
                                                        class="button h-50 -md -purple-1 text-white ml-10">Tìm
                                                        kiếm</button>
                                                </form>
                                            </div>
                                            <div class="row y-gap-30 pt-30">
                                                @forelse ($courses as $course)
                                                    <div class="w-1/4 xl:w-1/3 lg:w-1/2 sm:w-1/1">
                                                        <div class="relative">
                                                            <a href="{{ route('courses.detail', $course->slug) }}"><img
                                                                    class="rounded-8 w-1/1"
                                                                    src="{{ asset($course?->thumbnail) }}" alt="image"
                                                                    style="height: 125px;"></a>
                                                            @if ($course->pivot->status)
                                                                <div class="absolute-button"><span
                                                                        class="badge bg-success text-10 fw-500 px-10 py-5 rounded-8">Đang
                                                                        hoạt động</span></div>
                                                            @else
                                                                <div class="absolute-button"> <span
                                                                        class="badge bg-red-1 text-10 fw-500 px-10 py-5 rounded-8">Bị
                                                                        khóa</span></div>
                                                            @endif
                                                        </div>

                                                        <div class="pt-15">
                                                            <div class="d-flex y-gap-10 justify-between items-center">
                                                                <div class="text-14 lh-1">{{ $course->teacher?->name }}
                                                                </div>
                                                            </div>

                                                            <a href="{{ route('courses.detail', $course->slug) }}">
                                                                <h3 class="text-16 fw-500 lh-15 mt-10">{{ $course->name }}
                                                                </h3>
                                                            </a>

                                                            <div class="progress-bar mt-10">
                                                                <div class="progress-bar__bg bg-light-3"></div>
                                                                <div class="progress-bar__bar bg-purple-1 w-1/5"></div>
                                                            </div>

                                                            <div class="d-flex y-gap-10 justify-between items-center mt-10">
                                                                <div class="text-dark-1">% 20 Completed</div>
                                                                <div>25%</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="text-16 fw-500 text-center">Không có khóa học nào!</div>
                                                @endforelse
                                            </div>

                                            {{ $courses->links('students::clients.paginations.boostrap') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

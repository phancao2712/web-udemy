<div class="tabs__pane -tab-item-3">
    <h2 class="text-20 fw-500">Giảng viên</h2>

    <div class="mt-30">
        <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
            <div class="size-120">
                <img class="object-cover "
                    style="width: 100px; height:100px; border-radius: 50%"
                    src="{{ $course->teacher->image }}" alt="image">
            </div>

            <div class="">
                <h5 class="text-17 lh-14 fw-500">{{ $course->teacher->name }}</h5>
                <p class="mt-5">{{ $course->teacher->exp }} năm kinh nghiệm</p>

                <div class="d-flex x-gap-20 y-gap-10 flex-wrap items-center pt-10">
                    <div class="d-flex items-center">
                        <div class="d-flex items-center mr-8">
                            <div class="icon-star text-11 text-yellow-1"></div>
                            <div class="text-14 lh-12 text-yellow-1 ml-5">4.5</div>
                        </div>
                        <div class="text-13 lh-1">Instructor Rating</div>
                    </div>

                    <div class="d-flex items-center text-light-1">
                        <div class="icon-comment text-13 mr-8"></div>
                        <div class="text-13 lh-1">23,987 Reviews</div>
                    </div>

                    <div class="d-flex items-center text-light-1">
                        <div class="icon-person-3 text-13 mr-8"></div>
                        <div class="text-13 lh-1">692 Students</div>
                    </div>

                    <div class="d-flex items-center text-light-1">
                        <div class="icon-wall-clock text-13 mr-8"></div>
                        <div class="text-13 lh-1">15 Course</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-30">
            {!! $course->teacher->description !!}
        </div>
    </div>
</div>

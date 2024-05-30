<div class="tabs__pane -tab-item-2">
    <h2 class="text-20 fw-500">Nội dung khóa học</h2>

    <div class="d-flex justify-between items-center mt-30">
        <div class="">{{ getCountLesson($course)->module }} phần • {{ getCountLesson($course)->lesson }} bài học
        </div>
        <a href="#" class="underline text-purple-1">Expand All Sections</a>
    </div>

    <div class="mt-10">
        <div class="accordion -block-2 text-left js-accordion">
            @php
                        $index = 0;
                    @endphp
            @foreach (getPositionCourse($course) as $key => $module)
                <div class="accordion__item {{ $key == 0 ? 'is-active' : '' }}">
                    <div class="accordion__button py-20 px-30 bg-light-4">
                        <div class="d-flex items-center">
                            <div class="accordion__icon">
                                <div class="icon" data-feather="chevron-down"></div>
                                <div class="icon" data-feather="chevron-up"></div>
                            </div>
                            <span class="text-17 fw-500 text-dark-1">{{ $module->name }}</span>
                        </div>


                        <div>{{ getCountLesson($course)->lesson }} bài học</div>
                    </div>

                    <div class="accordion__content" style="{{ $key == 0 ? 'max-height: 1000px;' : '' }}">
                        <div class="accordion__content__inner px-30 py-30">
                            <div class="y-gap-20">

                                @foreach (getPositionLesson($course, $module->id) as $lesson)
                                    <div class="d-flex justify-between">
                                        <div class="d-flex items-center">
                                            <div
                                                class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                <div class="icon-play text-9"></div>
                                            </div>
                                            <div>Bài {{ ++$index }}: {{ $lesson->name }}
                                            </div>
                                        </div>

                                        <div class="d-flex x-gap-20 items-center">
                                            @if ($lesson->is_trial)
                                                <a href="#" class="text-14 lh-1 text-purple-1 underline">Học
                                                    thử</a>
                                            @endif
                                            <a href="#"
                                                class="text-14 lh-1 text-purple-1 underline">{{ getTime($lesson->duration) }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

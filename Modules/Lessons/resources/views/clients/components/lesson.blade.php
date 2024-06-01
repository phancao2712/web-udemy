<aside class="lesson-sidebar bg-light-3">
    <div class="px-30 sm:px-20">
        <form class="lesson-sidebar-search" action="https://creativelayers.net/themes/educrat-html/post">
            <input type="text" placeholder="Search">
            <button class="" type="submit">
                <i class="icon-search text-20"></i>
            </button>
        </form>

        <div class="accordion -block-2 text-left js-accordion mt-30">
            @foreach (getPositionModule($course) as $key => $module)
                <div class="accordion__item  {{ $module->id == $lesson->parent_id ? 'is-active' : '' }}">
                    <div class="accordion__button py-20 px-30 bg-light-4">
                        <div class="d-flex items-center">
                            <div class="accordion__icon">
                                <div class="icon" data-feather="chevron-down"></div>
                                <div class="icon" data-feather="chevron-up"></div>
                            </div>
                            <span class="text-17 fw-500 text-dark-1">{{ $module->name }}</span>
                        </div>
                    </div>

                    <div class="accordion__content"
                        style="{{ $module->id == $lesson->parent_id ? 'max-height: 1000px;' : '' }}">
                        <div class="accordion__content__inner px-30 py-30">
                            <div class="y-gap-30">
                                @foreach (getPositionLesson($course, $module->id) as $item)
                                    <div class="border_bottom">
                                        <div class="d-flex justify-between">
                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center size-30 rounded-full bg-purple-3 mr-10">
                                                    <div class="icon-play text-9 {{ $item->id == $lesson->id ? 'text-purple-1' : '' }}"></div>
                                                </div>
                                                <div><a href="{{ route('lessons.detail', $item->slug) }}"
                                                        class="{{ $item->id == $lesson->id ? 'text-purple-1' : '' }}">Bài
                                                        {{ ++$index }}: {{ $item->name }}</a>
                                                </div>
                                            </div>

                                            <div class="d-flex x-gap-20 items-center">
                                                <div class="px-12 rounded-200 bg-purple-2">
                                                    <span
                                                        class="text-11 lh-1 fw-600 text-purple-1 ">{{ getTime($item->duration) }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @if ($item->document_id != null)
                                        <div class="d-flex justify-between mt-2">
                                            <div class="d-flex items-center">
                                                <div
                                                    class="d-flex justify-center items-center size-30 rounded-full bg-orange-3 mr-10">
                                                    <i class="fa-regular fa-file-lines" style="font-size: 12px; {{ $item->id == $lesson->id ? 'color: #E8543E;' : '' }}"></i>
                                                </div>
                                                <div><a href="{{ $item->document->url }}" target="_blank">
                                                        Tài liệu</a>
                                                </div>
                                            </div>

                                            <div class="d-flex x-gap-20 items-center">
                                                <div class="px-12 rounded-200 bg-orange-2">
                                                    <span
                                                        class="text-11 lh-1 fw-600 text-orange-1 ">{{ getSize($item->document->size) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</aside>

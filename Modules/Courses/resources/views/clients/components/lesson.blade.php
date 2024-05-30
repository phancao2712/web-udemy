<div class="tabs__pane -tab-item-2">
    <h2 class="text-20 fw-500">Nội dung khóa học</h2>

    <div class="d-flex justify-between items-center mt-30">
        <div class="">{{ getCountLesson($course)->module }} phần • {{ getCountLesson($course)->lesson }} bài học
        </div>
        <a href="#" class="underline text-purple-1">Expand All Sections</a>
    </div>

    <div class="mt-10">
        <div class="accordion-block-2 text-left js-accordion">
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
                                                <button data-id="{{ $lesson->id }}" class="btn_trial">
                                                    <div class="px-12 rounded-200 bg-red-2">
                                                        <span class="text-11 lh-1 fw-600 text-orange-1 ">Học
                                                            thử</span>
                                                    </div>
                                                </button>
                                            @endif
                                            <div class="px-12 rounded-200 bg-purple-2">
                                                <span
                                                    class="text-11 lh-1 fw-600 text-purple-1 ">{{ getTime($lesson->duration) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script>
        $(document).ready(function() {
            $('.btn_trial').on('click', function(e) {
                e.preventDefault();
                const buttonElement = $(this).find('span');
                buttonElement.text('Đang mở...')
                $(this).prop('disabled', false);

                const id = $(this).data('id');
                const modalEl = $('#modal');
                const modal = new bootstrap.Modal(modalEl);
                const route = "{{ route('courses.data.trial', ':id') }}";
                const url = route.replace(':id', id);


                $.get(url, function(data) {
                    if (!data.success) {
                        FuiToast.error("Bài học không tồn tại.");
                        return;
                    }

                    if (data.lesson.is_trial == 0) {
                        FuiToast.error("Không được xem thử.");
                        return;
                    }

                    const title = data.lesson.name;
                    const video = data.lesson.video.url;

                    modalEl.modal('show');
                    $('.modal-title').text(title);
                    $('.modal-body').html('<iframe width="100%" height="315" src="' + video +
                        '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
                    );
                    buttonElement.text('Học thử')
                    $(this).prop('disabled', true);
                });
            })

            $('.modal-title').text('');
            $('.modal-body').html('');
        });
    </script>
@endsection

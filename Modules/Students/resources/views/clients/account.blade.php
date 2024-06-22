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
                                        <button class="button h-50 px-30 -purple-1 text-white mb-30 js-btn">Cập nhật thông
                                            tin</button>
                                        <div class="js-table">
                                            <div class="px-30 py-20 bg-light-7 rounded-8">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Họ và tên</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">{{ $student->name }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Email</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">{{ $student->email }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Số điện thoại</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">{{ $student->phone }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Địa chỉ</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">
                                                            {{ $student->address ? $student->address : 'Chưa cập nhật' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Trạng thái</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">
                                                            {{ $student->status ? 'Đã kích hoạt' : 'Chưa kích hoạt' }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Thời gian kích hoạt</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">
                                                            {{ Carbon\Carbon::parse($student->email_verified_at)->format('d-m-Y H:i:s') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Thời gian đăng kí</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">
                                                            {{ Carbon\Carbon::parse($student->created_at)->format('d-m-Y H:i:s') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="contact-form js-form" action="" style="display: none;">
                                            <div class="px-30 py-20 bg-light-7 rounded-8">
                                                <div class="row x-gap-10" style="align-items: center;">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Họ và tên</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input class="bg-white" name="name" type="text"
                                                            value="{{ $student->name }}">
                                                        <span class="text-danger error-name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10 ">
                                                <div class="row x-gap-10" style="align-items: center;">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Email</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input class="bg-white" type="text" name="email"
                                                            value="{{ $student->email }}">
                                                        <span class="text-danger error-email"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10 ">
                                                <div class="row x-gap-10" style="align-items: center;">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Số điện thoại</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input class="bg-white" class="bg-white" type="text"
                                                            name="phone" value="{{ $student?->phone }}">
                                                        <span class="text-danger error-phone"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-30 py-20 bg-light-7 rounded-8 mt-10">
                                                <div class="row x-gap-10 " style="align-items: center;">
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">Địa chỉ</div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="text-purple-1">
                                                            <input class="bg-white" type="text" name="address"
                                                                value="{{ $student?->address }}">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" style="float: right;"
                                                class="button h-50 px-30 -dark-1 text-white mt-30 mb-30">Cập nhật</button>
                                        </form>
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

@section('script')
    <script>
        $(document).ready(function() {
            let status = 'table';

            function renderBtn() {
                if (status === 'table') {
                    $('.js-btn').text('Cập nhật thông tin');
                    $('.js-btn').addClass('-purple-1');
                    $('.js-btn').removeClass('-red-1');
                } else {
                    $('.js-btn').text('Hủy');
                    $('.js-btn').addClass('-red-1');
                    $('.js-btn').removeClass('-purple-1');
                }
            }

            function renderForm() {
                if (status === 'table') {
                    $('.js-table').css({
                        'display': 'block'
                    });
                    $('.js-form').css({
                        'display': 'none'
                    });
                } else {
                    $('.js-form').css({
                        'display': 'block'
                    });
                    $('.js-table').css({
                        'display': 'none'
                    });
                }
            }

            $('.js-btn').on("click", function(e) {
                e.preventDefault();
                status = status === 'table' ? 'form' : 'table';
                renderBtn();
                renderForm();
            })

            $('.js-form').on('submit', function(e) {
                e.preventDefault();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                const data = $(this).serializeArray();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '',
                    data: data,
                    success: function(response) {
                        if(response.status === 'success'){
                            FuiToast.success("Cập nhật thành công.");
                        } else {
                            FuiToast.success("Cập nhật thành công.");
                        }
                    },
                    error: function(response) {
                        const error = $.parseJSON(response.responseText);
                        $.each(error.errors, function(key, value) {
                            $(`.error-${key}`).text(value);
                        });
                    }
                });
            })
        });
    </script>
@endsection

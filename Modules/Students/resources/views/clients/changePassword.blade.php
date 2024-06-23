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
                                        <form action="" class="contact-form row y-gap-30" method="POST">
                                            @csrf
                                            <div class="col-md-12">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mật khẩu cũ</label>
                                                <input type="password" name="old_password" placeholder="Nhập mật khẩu cũ...">
                                                @error('old_password')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mật khẩu mới</label>
                                                <input type="password" name="password" placeholder="Nhập mật khẩu mới...">
                                                @error('password')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nhập lại mật khẩu
                                                    mới</label>
                                                <input type="password" name="confirm_password"
                                                    placeholder="Nhập lại mật khẩu...">
                                                @error('confirm_password')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="button -md -purple-1 text-white">Cập
                                                    nhật</button>
                                            </div>
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

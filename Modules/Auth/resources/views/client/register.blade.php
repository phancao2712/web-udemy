@extends('layouts.auth-client')

@section('content')
    <div class="form-page__content lg:py-50">
        <div class="container">
            <div class="row justify-center items-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                        <h3 class="text-30 lh-13">{{ $titlePage }}</h3>
                        <p class="mt-10">Bạn đã có tài khoản? <a href="{{ route('client.login') }}" class="text-purple-1">Đăng
                                nhập</a></p>

                        <form class="contact-form respondForm__form row y-gap-20 pt-30" action="" method="post">
                            @csrf

                            <div class="col-lg-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Họ và tên *</label>
                                <input type="text" name="name" placeholder="Nguyễn Văn A" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Số điện thoại *</label>
                                <input type="text" name="phone" placeholder="(+84)" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email *</label>
                                <input type="text" name="email" placeholder="abc@gmai.com" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mật khẩu *</label>
                                <input type="password" name="password" placeholder="*******">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nhập lại mật *</label>
                                <input type="password" name="confirm_password" placeholder="*******">
                                @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" id="submit"
                                    class="button -md -green-1 text-white fw-600 w-1/1">
                                    Đăng kí
                                </button>
                            </div>
                        </form>

                        <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Hoặc đăng kí bằng</div>

                        <div class="d-flex x-gap-20 items-center justify-between pt-20">
                            <div><button
                                    class="button -sm px-24 py-20 -outline-blue-3 text-blue-3 text-14">Facebook</button>
                            </div>
                            <div><button class="button -sm px-24 py-20 -outline-red-3 text-red-3 text-14">Google+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

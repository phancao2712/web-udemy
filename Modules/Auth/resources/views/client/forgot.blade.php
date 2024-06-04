@extends('layouts.auth-client')

@section('content')
    <div class="form-page__content lg:py-50">
        <div class="container">
            <div class="row justify-center items-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                        <h3 class="text-30 lh-13">{{ $titlePage }}</h3>
                        <p class="mt-10">Bạn đã nhớ mật khẩu? <a href="{{ route('client.login') }}" class="text-purple-1">Đăng
                                nhập</a></p>

                        <div class="alert alert-primary mt-10" style="margin-bottom: 0;" role="alert">
                            Hãy nhập Email của bạn để lấy lại mật khẩu!
                        </div>
                        <form class="contact-form respondForm__form row y-gap-20 pt-30" action="" method="POST">
                            @csrf
                            <div class="col-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                                <input type="text" name="email" placeholder="abc@gmail.com"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" id="submit" class="button -md -green-1 text-white fw-600 w-1/1">
                                    Gửi
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

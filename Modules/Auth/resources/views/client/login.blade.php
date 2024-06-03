@extends('layouts.auth-client')

@section('content')
    <div class="form-page__content lg:py-50">
        <div class="container">
            <div class="row justify-center items-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                        <h3 class="text-30 lh-13">{{ $titlePage }}</h3>
                        <p class="mt-10">Bạn chưa có tài khoản? <a href="{{ route('client.register') }}"
                                class="text-purple-1">Đăng kí miễn phí</a></p>

                        <form class="contact-form respondForm__form row y-gap-20 pt-30" action="" method="POST">
                            @csrf
                            <div class="col-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                                <input type="text" name="email" placeholder="abc@gmail.com">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mật khẩu</label>
                                <input type="password" name="password" placeholder="*******">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ghi nhớ tài khoản
                                </label>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="submit" class="button -md -green-1 text-white fw-600 w-1/1">
                                    Đăng nhập
                                </button>
                            </div>
                        </form>

                        <div class="lh-12 text-dark-1 fw-500 text-center mt-20">Hoặc đăng nhập bằng</div>

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

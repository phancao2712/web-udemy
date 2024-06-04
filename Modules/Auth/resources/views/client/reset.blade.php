@extends('layouts.auth-client')

@section('content')
    <div class="form-page__content lg:py-50">
        <div class="container">
            <div class="row justify-center items-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
                        <h3 class="text-30 lh-13">{{ $titlePage }}</h3>

                        <form class="contact-form respondForm__form row y-gap-20 pt-30" action="{{ route('password.update') }}" method="post">
                            @csrf
                            <div class="col-lg-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mật khẩu *</label>
                                <input type="password" name="password" placeholder="*******">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nhập lại mật khẩu*</label>
                                <input type="password" name="confirm_password" placeholder="*******">
                                @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="email" value="{{ request()->email }}">
                            <input type="hidden" name="token" value="{{ request()->token }}">
                            <div class="col-12">
                                <button type="submit" id="submit" class="button -md -green-1 text-white fw-600 w-1/1">
                                    Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

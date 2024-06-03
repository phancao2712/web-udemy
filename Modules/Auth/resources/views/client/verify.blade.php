@extends('layouts.client')
@section('content')
<section class="no-page layout-pt-lg layout-pb-lg bg-beige-1">
    <div class="container">
      <div class="row y-gap-50 justify-between items-center">
        <div class="col-lg-6">
          <div class="no-page__img">
            <img src="{{ asset('client/img/404/1.svg') }}" alt="image">
          </div>
        </div>

        <div class="col-xl-5 col-lg-6">
          <div class="no-page__content">
            <h2 class="text-35 lh-12 mt-5">{{ $titlePage }}.</h2>
            <div class="mt-10">Kiểm tra email để xác thực tài khoản.</div>
            <a href="{{ url('/') }}" class="button -md -purple-1 text-white mt-20">Gửi email lại</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

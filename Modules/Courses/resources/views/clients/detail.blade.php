@extends('layouts.client')

@section('content')
    @include('components.client.breadcrumb')
    <div class="js-pin-container">
        <section class="page-header -type-5">
            <div class="page-header__bg">
                <div class="bg-image js-lazy" data-bg="{{ asset('client/img/event-single/bg.png') }}"></div>
            </div>

            <div class="container">
                <div class="page-header__content pt-50">
                    <div class="row relative">
                        <div class="col-xl-7 col-lg-8">
                            <div class="d-flex x-gap-15 y-gap-10 pb-20">
                                <div>
                                    <div class="badge px-15 py-8 text-11 bg-green-1 text-dark-1 fw-400">BEST SELLER</div>
                                </div>
                                <div>
                                    <div class="badge px-15 py-8 text-11 bg-orange-1 text-white fw-400">NEW</div>
                                </div>
                                <div>
                                    <div class="badge px-15 py-8 text-11 bg-purple-1 text-white fw-400">POPULAR</div>
                                </div>
                            </div>

                            <div data-anim="slide-up delay-1">
                                <h1 class="text-30 lh-14 pr-60 lg:pr-0">{{ $course->name }}</h1>
                            </div>

                            <div class="d-flex x-gap-30 y-gap-10 items-center flex-wrap pt-20">
                                <div class="d-flex items-center text-light-1">
                                    <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                    <div class="d-flex x-gap-10 items-center">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-14 lh-1 ml-10">(1991)</div>
                                </div>


                                <div class="d-flex items-center text-light-1">
                                    <div class="icon icon-person-3 text-13"></div>
                                    <div class="text-14 ml-8">853 enrolled on this course</div>
                                </div>

                                <div class="d-flex items-center text-light-1">
                                    <div class="icon icon-wall-clock text-13"></div>
                                    <div class="text-14 ml-8">Cập nhật {{ $course->updated_at->diffForHumans() }}</div>
                                </div>

                            </div>

                            <div class="d-flex items-center pt-20">
                                <div class="bg-image size-30 rounded-full js-lazy" data-bg="{{ $course->teacher?->image }}">
                                </div>
                                <div class="text-14 lh-1 ml-10">{{ $course->teacher?->name }}</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="relative pt-40">
                                <img class="w-1/1" style="border-radius: 10px;" src="{{ $course?->thumbnail }}"
                                    alt="image">

                            </div>
                        </div>

                        <div class="courses-single-info js-pin-content">
                            <div
                                class="courses-single-info__content scroll-bar-1 bg-white shadow-2 rounded-8 border-light py-30 px-30">
                                <div class="d-flex justify-between items-center mb-30">
                                    @if ($course->sale_price > 0 && $course->price > $course->sale_price)
                                        <div class="text-24 lh-1 text-dark-1 fw-600">{{ money($course->sale_price) }}</div>
                                        <div class="lh-1 line-through">{{ money($course->price) }}</div>
                                    @else
                                        <div class="text-24 lh-1 text-dark-1 fw-500">{{ money($course->price) }}</div>
                                    @endif
                                </div>

                                <button class="button -md -purple-1 text-white w-1/1">Thêm giỏ hàng</button>
                                <button class="button -md -outline-dark-1 text-dark-1 w-1/1 mt-10">Mua ngay</button>

                                <div class="mt-25">
                                    <div class="d-flex justify-between py-8">
                                        <div class="d-flex items-center text-dark-1">
                                            <div class="icon-badge"></div>
                                            <div class="ml-10">Mã khóa học</div>
                                        </div>
                                        <div>
                                            {{ $course->code }}
                                        </div>
                                    </div>
                                    <div class="d-flex justify-between py-8 border-top-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <div class="icon-video-file"></div>
                                            <div class="ml-10">Bài giảng</div>
                                        </div>
                                        <div>{{ getCountLesson($course)->lesson }}</div>
                                    </div>

                                    <div class="d-flex justify-between py-8 border-top-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <div class="icon-puzzle"></div>
                                            <div class="ml-10">Chương</div>
                                        </div>
                                        <div>{{ getCountLesson($course)->module }}</div>
                                    </div>

                                    <div class="d-flex justify-between py-8 border-top-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <div class="icon-clock-2"></div>
                                            <div class="ml-10">Thời lượng</div>
                                        </div>
                                        <div>{{ getHour($course->duration) }}</div>
                                    </div>

                                    <div class="d-flex justify-between py-8 border-top-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <i class="fa-regular fa-file-lines"></i>
                                            <div class="ml-10">Tài liệu</div>
                                        </div>
                                        <div>
                                            @if ($course->is_document)
                                                Có
                                            @else
                                                Không
                                            @endif
                                        </div>
                                    </div>

                                    <div class="d-flex justify-between py-8 border-top-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <i class="fa-solid fa-headset"></i>
                                            <div class="ml-10">Hỗ trợ</div>
                                        </div>
                                        <div>{!! $course->supports !!}</div>
                                    </div>

                                    <div class="d-flex justify-between py-8 border-top-light">
                                        <div class="d-flex items-center text-dark-1">
                                            <div class="icon-infinity"></div>
                                            <div class="ml-10">Truy cập trọn đời</div>
                                        </div>
                                        <div>Có</div>
                                    </div>
                                </div>

                                <div class="d-flex justify-center pt-15">

                                    <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                        <i class="fa fa-facebook"></i>
                                    </a>

                                    <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                        <i class="fa fa-twitter"></i>
                                    </a>

                                    <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                        <i class="fa fa-instagram"></i>
                                    </a>

                                    <a href="#" class="d-flex justify-center items-center size-40 rounded-full">
                                        <i class="fa fa-linkedin"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-30 layout-pb-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="pt-25 pb-30 px-30 bg-white shadow-2 rounded-8 border-light">
                            <div class="tabs -active-purple-2 js-tabs pt-0">
                                <div class="tabs__controls d-flex js-tabs-controls">
                                    <button class="tabs__button js-tabs-button js-update-pin-scene is-active"
                                        data-tab-target=".-tab-item-1" type="button">
                                        Thông tin
                                    </button>
                                    <button class="tabs__button js-tabs-button js-update-pin-scene ml-30"
                                        data-tab-target=".-tab-item-2" type="button">
                                        Nội dung
                                    </button>
                                    <button class="tabs__button js-tabs-button js-update-pin-scene ml-30"
                                        data-tab-target=".-tab-item-3" type="button">
                                        Giảng viên
                                    </button>
                                    <button class="tabs__button js-tabs-button js-update-pin-scene ml-30"
                                        data-tab-target=".-tab-item-4" type="button">
                                        Đánh giá
                                    </button>
                                </div>

                                <div class="tabs__content pt-30 lg:pt-40 js-tabs-content">

                                    @include('courses::clients.components.info')

                                    @include('courses::clients.components.lesson')

                                    @include('courses::clients.components.teacher')

                                    @include('courses::clients.components.review')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <section class="layout-pt-md layout-pb-lg">
        <div data-anim-wrap class="container">
            <div class="row">
                <div class="col-auto">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">You May Like</h2>

                        <p class="sectionTitle__text ">10,000+ unique online course list designs</p>

                    </div>

                </div>
            </div>

            <div class="relative pt-60 lg:pt-50">
                <div class="overflow-hidden js-section-slider" data-gap="30" data-loop data-pagination
                    data-nav-prev="js-courses-prev" data-nav-next="js-courses-next" data-slider-cols="xl-4 lg-3 md-2">
                    <div class="swiper-wrapper">

                        <div data-anim-child="slide-up delay-1" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/1.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Learn Figma - UI/UX Design
                                        Essential Training</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-2" class="swiper-slide">
                            <video id="my-video" class="video-js" controls preload="auto" width="640"
                                height="264" data-setup="{}">
                                <source src="/data/stream?url=${video}" type="video/mp4" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript
                                </p>
                            </video>
                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/2.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                        <div>
                                            <div class="px-15 rounded-200 bg-purple-1">
                                                <span class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="px-15 rounded-200 bg-green-1">
                                                <span class="text-11 lh-1 uppercase fw-500 text-dark-1">Best sellers</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Python Bootcamp From Zero
                                        to Hero in Python</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-3" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/3.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Angular - The Complete Guide (2022
                                        Edition)</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-4" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/4.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Ultimate Drawing Course
                                        Beginner to Advanced</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-5" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/5.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Photography Masterclass: A Complete
                                        Guide to Photography</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-6" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/6.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Instagram Marketing 2021: Complete
                                        Guide To Instagram Growth</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-7" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/7.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">Complete Blender Creator: Learn 3D
                                        Modelling for Beginners</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div data-anim-child="slide-up delay-8" class="swiper-slide">

                            <a href="courses-single-1.html" class="coursesCard -type-1 ">
                                <div class="relative">
                                    <div class="coursesCard__image overflow-hidden rounded-8">
                                        <img class="w-1/1" src="img/coursesCards/8.png" alt="image">
                                        <div class="coursesCard__image_overlay rounded-8"></div>
                                    </div>
                                    <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                    </div>
                                </div>

                                <div class="h-100 pt-15">
                                    <div class="d-flex items-center">
                                        <div class="text-14 lh-1 text-yellow-1 mr-10">4.5</div>
                                        <div class="d-flex x-gap-5 items-center">
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                            <div class="icon-star text-9 text-yellow-1"></div>
                                        </div>
                                        <div class="text-13 lh-1 ml-10">(1991)</div>
                                    </div>

                                    <div class="text-17 lh-15 fw-500 text-dark-1 mt-10">The Complete Financial Analyst
                                        Training &amp; Investing Course</div>

                                    <div class="d-flex x-gap-10 items-center pt-10">

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/1.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">6 lesson</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">3h 56m</div>
                                        </div>

                                        <div class="d-flex items-center">
                                            <div class="mr-8">
                                                <img src="img/coursesCards/icons/3.svg" alt="icon">
                                            </div>
                                            <div class="text-14 lh-1">Beginner</div>
                                        </div>

                                    </div>

                                    <div class="coursesCard-footer">
                                        <div class="coursesCard-footer__author">
                                            <img src="img/general/avatar-1.png" alt="image">
                                            <div>Ali Tufan</div>
                                        </div>

                                        <div class="coursesCard-footer__price">
                                            <div>$179</div>
                                            <div>$79</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>


                <button
                    class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-prev">
                    <i class="icon icon-arrow-left text-24"></i>
                </button>

                <button
                    class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-courses-next">
                    <i class="icon icon-arrow-right text-24"></i>
                </button>

            </div>
        </div>
    </section>
@endsection

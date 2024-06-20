@extends('layouts.client')

@section('content')
    <section data-anim-wrap class="masthead -type-7 js-mouse-move-container">
        <div class="masthead__bg bg-purple-1 rounded-16">
            <img src="{{ asset('client/img/home-9/hero/bg.png') }}" alt="image">
        </div>

        <div class="container">
            <div class="row y-gap-20 justify-between items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="masthead__content">
                        <h1 data-anim-child="slide-up delay-3"
                            class="masthead__title text-white">
                            Find a perfect Online Course
                        </h1>
                        <p data-anim-child="slide-up delay-4"
                            class="masthead__text text-16 lh-2 text-white pt-10">
                            You can access 7900+ different courses from 600<br
                                class="lg:d-none"> professional trainers for free
                        </p>

                        <div data-anim-child="slide-up delay-5">
                            <div class="masthead-form bg-white rounded-16 mt-30 px-10 py-10">
                                <form class=" d-flex x-gap-30 y-gap-10 items-center flex-wrap">
                                    <div class="masthead-form__item">
                                        <div class="d-flex items-center">
                                            <i class="icon-search mr-10 ml-15"></i>
                                            <input type="text" placeholder="Your Search">
                                        </div>
                                    </div>


                                    <div class="masthead-form__item">
                                        <div class="dropdown js-dropdown w-1/1 bg-white">
                                            <div
                                                class="d-flex items-center justify-between text-dark-1 -dark-text-dark-1">
                                                <div class="d-flex items-center">
                                                    <i class="icon-basket mr-10"></i>
                                                    <span
                                                        class="js-dropdown-title">Category</span>
                                                </div>
                                                <i
                                                    class="icon text-9 icon-chevron-down ml-10"></i>
                                            </div>

                                            <div class="dropdown__item shadow-1">
                                                <div class="y-gap-15 js-dropdown-list">
                                                    <div><a href="#"
                                                            class="d-block js-dropdown-link">Category
                                                            1</a></div>
                                                    <div><a href="#"
                                                            class="d-block js-dropdown-link">Category
                                                            2</a></div>
                                                    <div><a href="#"
                                                            class="d-block js-dropdown-link">Category
                                                            3</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="masthead-form__item">
                                        <div class="dropdown js-dropdown w-1/1 bg-white">
                                            <div
                                                class="d-flex items-center justify-between text-dark-1 -dark-text-dark-1">
                                                <div class="d-flex items-center">
                                                    <i class="icon-basket mr-10"></i>
                                                    <span
                                                        class="js-dropdown-title">Category</span>
                                                </div>
                                                <i
                                                    class="icon text-9 icon-chevron-down ml-10"></i>
                                            </div>

                                            <div class="dropdown__item shadow-1">
                                                <div class="y-gap-15 js-dropdown-list">
                                                    <div><a href="#"
                                                            class="d-block js-dropdown-link">Category
                                                            1</a></div>
                                                    <div><a href="#"
                                                            class="d-block js-dropdown-link">Category
                                                            2</a></div>
                                                    <div><a href="#"
                                                            class="d-block js-dropdown-link">Category
                                                            3</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="masthead-form__button">
                                        <button
                                            class="button -dark-1 text-white -dark-button-dark-1">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div data-anim-child="slide-up delay-6">
                            <div class="text-white mt-20">Trending Search: Development,
                                Business, Design, Merketing</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="masthead-image">
                        <div class="masthead-image__img1">
                            <img data-move="20" class="js-mouse-move"
                                src="{{ asset('client/img/home-9/hero/1.png') }}" alt="image">
                        </div>

                        <div class="-el-1"><img class="js-mouse-move" data-move="40"
                                src="{{ asset('client/img/home-9/hero/2.png') }}" alt="icon"></div>
                        <div class="-el-2"><img class="js-mouse-move" data-move="40"
                                src="{{ asset('client/img/home-9/hero/3.png') }}" alt="icon"></div>
                        <div class="-el-3"><img class="js-mouse-move" data-move="40"
                                src="{{ asset('client/img/home-9/hero/4.png') }}" alt="icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="layout-pt-lg layout-pb-md">
        <div data-anim-wrap class="container">
            <div class="row y-gap-20 justify-between items-center">
                <div class="col-auto">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Top Categories</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur.
                        </p>

                    </div>

                </div>

                <div class="col-auto">

                    <div class="d-flex x-gap-15 items-center justify-center">
                        <div class="col-auto">
                            <button
                                class="d-flex items-center text-24 arrow-left-hover js-cat-slider-prev">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <div class="pagination -arrows js-cat-slider-pag"></div>
                        </div>
                        <div class="col-auto">
                            <button
                                class="d-flex items-center text-24 arrow-right-hover js-cat-slider-next">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="overflow-hidden pt-50 js-section-slider" data-gap="30" data-loop
                data-slider-cols="xl-6 lg-4 md-3 sm-2" data-pagination="js-cat-slider-pag"
                data-nav-prev="js-cat-slider-prev" data-nav-next="js-cat-slider-next">
                <div class="swiper-wrapper">

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-2">
                            <div class="featureCard -type-1 -featureCard-hover-3">
                                <div class="featureCard__content">
                                    <div class="featureCard__icon">
                                        <img src="img/featureCards/1.svg" alt="icon">
                                    </div>
                                    <div class="featureCard__title">Design Creative</div>
                                    <div class="featureCard__text">573+ Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-3">
                            <div class="featureCard -type-1 -featureCard-hover-3">
                                <div class="featureCard__content">
                                    <div class="featureCard__icon">
                                        <img src="img/featureCards/2.svg" alt="icon">
                                    </div>
                                    <div class="featureCard__title">Sales Marketing</div>
                                    <div class="featureCard__text">565+ Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-4">
                            <div class="featureCard -type-1 -featureCard-hover-3">
                                <div class="featureCard__content">
                                    <div class="featureCard__icon">
                                        <img src="img/featureCards/3.svg" alt="icon">
                                    </div>
                                    <div class="featureCard__title">Development IT</div>
                                    <div class="featureCard__text">126+ Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-5">
                            <div class="featureCard -type-1 -featureCard-hover-3">
                                <div class="featureCard__content">
                                    <div class="featureCard__icon">
                                        <img src="img/featureCards/4.svg" alt="icon">
                                    </div>
                                    <div class="featureCard__title">Engineering Architecture
                                    </div>
                                    <div class="featureCard__text">35+ Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-6">
                            <div class="featureCard -type-1 -featureCard-hover-3">
                                <div class="featureCard__content">
                                    <div class="featureCard__icon">
                                        <img src="img/featureCards/5.svg" alt="icon">
                                    </div>
                                    <div class="featureCard__title">Personal Development</div>
                                    <div class="featureCard__text">908+ Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide h-100">
                        <div data-anim-child="slide-left delay-7">
                            <div class="featureCard -type-1 -featureCard-hover-3">
                                <div class="featureCard__content">
                                    <div class="featureCard__icon">
                                        <img src="img/featureCards/6.svg" alt="icon">
                                    </div>
                                    <div class="featureCard__title">Finance Accounting</div>
                                    <div class="featureCard__text">129+ Courses</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div data-anim-wrap class="container">
            <div class="tabs -pills js-tabs">
                <div class="row y-gap-20 justify-between items-end">
                    <div class="col-auto">

                        <div class="sectionTitle ">

                            <h2 class="sectionTitle__title ">Explore Featured Courses</h2>

                            <p class="sectionTitle__text ">10,000+ unique online course list
                                designs</p>

                        </div>

                    </div>

                    <div class="col-auto">
                        <div
                            class="tabs__controls d-flex justify-center x-gap-10 js-tabs-controls">

                            <div>
                                <button
                                    class="tabs__button px-20 py-8 rounded-200 -dark-text-white js-tabs-button is-active"
                                    data-tab-target=".-tab-item-1" type="button">All</button>
                            </div>

                            <div>
                                <button
                                    class="tabs__button px-20 py-8 rounded-200 -dark-text-white js-tabs-button "
                                    data-tab-target=".-tab-item-2"
                                    type="button">Trending</button>
                            </div>

                            <div>
                                <button
                                    class="tabs__button px-20 py-8 rounded-200 -dark-text-white js-tabs-button "
                                    data-tab-target=".-tab-item-3"
                                    type="button">Popular</button>
                            </div>

                            <div>
                                <button
                                    class="tabs__button px-20 py-8 rounded-200 -dark-text-white js-tabs-button "
                                    data-tab-target=".-tab-item-4"
                                    type="button">Fetured</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tabs__content pt-60 lg:pt-50 js-tabs-content">

                    <div class="tabs__pane -tab-item-1 is-active">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/1.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Learn Figma - UI/UX Design Essential
                                                    Training</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/2.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-green-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Python Bootcamp From Zero to Hero
                                                    in Python</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/3.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Angular - The Complete Guide (2022 Edition)
                                                </div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/4.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Ultimate Drawing Course Beginner to
                                                    Advanced</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/5.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Photography Masterclass: A Complete Guide to
                                                    Photography</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/6.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Instagram Marketing 2021: Complete Guide To
                                                    Instagram</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/7.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Blender Creator: Learn 3D Modelling
                                                    for Beginners</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/8.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Complete Financial Analyst Training
                                                    &amp; Investing Course</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-2 ">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/1.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Learn Figma - UI/UX Design Essential
                                                    Training</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/2.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-green-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Python Bootcamp From Zero to Hero
                                                    in Python</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/3.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Angular - The Complete Guide (2022 Edition)
                                                </div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/4.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Ultimate Drawing Course Beginner to
                                                    Advanced</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/5.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Photography Masterclass: A Complete Guide to
                                                    Photography</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/6.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Instagram Marketing 2021: Complete Guide To
                                                    Instagram</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/7.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Blender Creator: Learn 3D Modelling
                                                    for Beginners</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/8.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Complete Financial Analyst Training
                                                    &amp; Investing Course</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-3 ">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/1.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Learn Figma - UI/UX Design Essential
                                                    Training</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/2.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-green-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Python Bootcamp From Zero to Hero
                                                    in Python</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/3.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Angular - The Complete Guide (2022 Edition)
                                                </div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/4.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Ultimate Drawing Course Beginner to
                                                    Advanced</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/5.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Photography Masterclass: A Complete Guide to
                                                    Photography</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/6.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Instagram Marketing 2021: Complete Guide To
                                                    Instagram</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/7.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Blender Creator: Learn 3D Modelling
                                                    for Beginners</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/8.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Complete Financial Analyst Training
                                                    &amp; Investing Course</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                    <div class="tabs__pane -tab-item-4 ">
                        <div class="overflow-hidden js-section-slider" data-gap="30"
                            data-slider-cols="xl-4 lg-3 md-2 sm-2">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-1">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/1.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Learn Figma - UI/UX Design Essential
                                                    Training</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-2">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/2.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-purple-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-white">Popular</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div
                                                            class="px-15 rounded-200 bg-green-1">
                                                            <span
                                                                class="text-11 lh-1 uppercase fw-500 text-dark-1">Best
                                                                sellers</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Python Bootcamp From Zero to Hero
                                                    in Python</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-3">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/3.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Angular - The Complete Guide (2022 Edition)
                                                </div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-4">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/4.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Ultimate Drawing Course Beginner to
                                                    Advanced</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-5">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/5.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Photography Masterclass: A Complete Guide to
                                                    Photography</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-6">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/6.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Instagram Marketing 2021: Complete Guide To
                                                    Instagram</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-7">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/7.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    Complete Blender Creator: Learn 3D Modelling
                                                    for Beginners</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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

                                <div class="swiper-slide">
                                    <div data-anim-child="slide-up delay-8">

                                        <a href="courses-single-1.html"
                                            class="coursesCard -type-1 ">
                                            <div class="relative">
                                                <div
                                                    class="coursesCard__image overflow-hidden rounded-8">
                                                    <img class="w-1/1"
                                                        src="img/coursesCards/8.png"
                                                        alt="image">
                                                    <div
                                                        class="coursesCard__image_overlay rounded-8">
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                                                </div>
                                            </div>

                                            <div class="h-100 pt-15">
                                                <div class="d-flex items-center">
                                                    <div
                                                        class="text-14 lh-1 text-yellow-1 mr-10">
                                                        4.5</div>
                                                    <div class="d-flex x-gap-5 items-center">
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                        <div
                                                            class="icon-star text-9 text-yellow-1">
                                                        </div>
                                                    </div>
                                                    <div class="text-13 lh-1 ml-10">(1991)
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-17 lh-15 fw-500 text-dark-1 mt-10">
                                                    The Complete Financial Analyst Training
                                                    &amp; Investing Course</div>

                                                <div
                                                    class="d-flex x-gap-10 items-center pt-10">

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/1.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">6 lesson
                                                        </div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/2.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">3h 56m</div>
                                                    </div>

                                                    <div class="d-flex items-center">
                                                        <div class="mr-8">
                                                            <img src="img/coursesCards/icons/3.svg"
                                                                alt="icon">
                                                        </div>
                                                        <div class="text-14 lh-1">Beginner
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="coursesCard-footer">
                                                    <div class="coursesCard-footer__author">
                                                        <img src="img/general/avatar-1.png"
                                                            alt="image">
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
                                class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                                <i class="icon icon-arrow-left text-24"></i>
                            </button>

                            <button
                                class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                                <i class="icon icon-arrow-right text-24"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row y-gap-20 justify-center text-center">
                <div class="col-auto">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">How it works?</h2>

                        <p class="sectionTitle__text ">10,000+ unique online course list
                            designs</p>

                    </div>

                </div>
            </div>

            <div class="row y-gap-30 justify-between pt-60 lg:pt-40">

                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="d-flex flex-column items-center text-center">
                        <div
                            class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
                            <img src="img/home-3/works/1.svg" alt="image">
                            <div class="side-badge">
                                <div
                                    class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                                    <span class="text-14 fw-500 text-white">01</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-17 fw-500 text-dark-1 mt-30">Browse courses from our
                            expert contributors.</div>
                    </div>
                </div>


                <div class="col-auto xl:d-none">
                    <div class="pt-30">
                        <img src="img/misc/lines/1.svg" alt="icon">
                    </div>
                </div>


                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="d-flex flex-column items-center text-center">
                        <div
                            class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
                            <img src="img/home-3/works/2.svg" alt="image">
                            <div class="side-badge">
                                <div
                                    class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                                    <span class="text-14 fw-500 text-white">02</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-17 fw-500 text-dark-1 mt-30">Purchase quickly and
                            securely.</div>
                    </div>
                </div>


                <div class="col-auto xl:d-none">
                    <div class="pt-30">
                        <img src="img/misc/lines/2.svg" alt="icon">
                    </div>
                </div>


                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="d-flex flex-column items-center text-center">
                        <div
                            class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
                            <img src="img/home-3/works/3.svg" alt="image">
                            <div class="side-badge">
                                <div
                                    class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                                    <span class="text-14 fw-500 text-white">03</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-17 fw-500 text-dark-1 mt-30">That’s it! Start
                            learning right away.</div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1"
                class="row y-gap-20 justify-between items-center">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Learn from the best instructors</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet,
                            consectetur.</p>

                    </div>

                </div>

                <div class="col-auto">

                    <a href="instructors-list-1.html"
                        class="button -icon -purple-3 text-purple-1">
                        View All Instructors
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                    </a>

                </div>
            </div>

            <div class="row y-gap-30 pt-50">

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-2"
                        class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="img/team/1.png" alt="image">
                            <div class="teamCard__socials">
                                <div
                                    class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                    <a href="#"><i
                                            class="icon-facebook text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-twitter text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-instagram text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Floyd Miles</h4>
                            <p class="teamCard__text">President of Sales</p>

                            <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div
                                            class="icon-online-learning text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-3"
                        class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="img/team/2.png" alt="image">
                            <div class="teamCard__socials">
                                <div
                                    class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                    <a href="#"><i
                                            class="icon-facebook text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-twitter text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-instagram text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Cameron Williamson</h4>
                            <p class="teamCard__text">Web Designer</p>

                            <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div
                                            class="icon-online-learning text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-4"
                        class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="img/team/3.png" alt="image">
                            <div class="teamCard__socials">
                                <div
                                    class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                    <a href="#"><i
                                            class="icon-facebook text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-twitter text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-instagram text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Brooklyn Simmons</h4>
                            <p class="teamCard__text">Dog Trainer</p>

                            <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div
                                            class="icon-online-learning text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div data-anim-child="slide-left delay-5"
                        class="teamCard -type-1 -teamCard-hover">
                        <div class="teamCard__image">
                            <img src="img/team/4.png" alt="image">
                            <div class="teamCard__socials">
                                <div
                                    class="d-flex x-gap-20 y-gap-10 justify-center items-center h-100">
                                    <a href="#"><i
                                            class="icon-facebook text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-twitter text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-instagram text-white"></i></a>
                                    <a href="#"><i
                                            class="icon-linkedin text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">Wade Warren</h4>
                            <p class="teamCard__text">Marketing Coordinator</p>

                            <div class="row items-center y-gap-10 x-gap-10 pt-10">
                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-star text-yellow-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12 text-yellow-1 fw-500">4.5
                                        </div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div
                                            class="icon-online-learning text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">692 Students</div>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="d-flex items-center">
                                        <div class="icon-play text-light-1 text-11 mr-5">
                                        </div>
                                        <div class="text-14 lh-12">15 Course</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-center text-center pt-60 lg:pt-40">
                <div class="col-auto">
                    <p class="lh-1">Want to help people learn, grow and achieve more in
                        life? <a class="text-purple-1 underline"
                            href="instructors-become.html">Become an instructor</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1"
                class="row y-gap-20 justify-between items-center">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Latest Books</h2>

                        <p class="sectionTitle__text ">10,000+ unique online course list
                            designs</p>

                    </div>

                </div>

                <div class="col-auto">

                    <a href="#" class="button -icon -purple-3 text-purple-1">
                        All Courses
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                    </a>

                </div>
            </div>

            <div class="pt-60 lg:pt-40">
                <div class="overflow-hidden js-section-slider" data-loop data-gap="30"
                    data-pagination data-slider-cols="xl-6 lg-6 md-4 sm-3 base-2">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="img/books/1.png" alt="book">
                                <h5 class="text-17 fw-500 mt-15">HTML 5 Maker</h5>

                                <div class="d-flex items-center mt-10">
                                    <div class="d-flex x-gap-5">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                </div>

                                <div class="d-flex items-center pt-15">
                                    <div class="text-15 lh-1 line-through">$179</div>
                                    <div class="text-18 lh-1 text-purple-1 fw-500 ml-10">$79
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="img/books/2.png" alt="book">
                                <h5 class="text-17 fw-500 mt-15">CSS Master</h5>

                                <div class="d-flex items-center mt-10">
                                    <div class="d-flex x-gap-5">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                </div>

                                <div class="d-flex items-center pt-15">
                                    <div class="text-15 lh-1 line-through">$179</div>
                                    <div class="text-18 lh-1 text-purple-1 fw-500 ml-10">$79
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="img/books/3.png" alt="book">
                                <h5 class="text-17 fw-500 mt-15">Vue JS</h5>

                                <div class="d-flex items-center mt-10">
                                    <div class="d-flex x-gap-5">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                </div>

                                <div class="d-flex items-center pt-15">
                                    <div class="text-15 lh-1 line-through">$179</div>
                                    <div class="text-18 lh-1 text-purple-1 fw-500 ml-10">$79
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="img/books/4.png" alt="book">
                                <h5 class="text-17 fw-500 mt-15">HTML 5 &amp; CSS3</h5>

                                <div class="d-flex items-center mt-10">
                                    <div class="d-flex x-gap-5">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                </div>

                                <div class="d-flex items-center pt-15">
                                    <div class="text-15 lh-1 line-through">$179</div>
                                    <div class="text-18 lh-1 text-purple-1 fw-500 ml-10">$79
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="img/books/5.png" alt="book">
                                <h5 class="text-17 fw-500 mt-15">CSS Developer</h5>

                                <div class="d-flex items-center mt-10">
                                    <div class="d-flex x-gap-5">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                </div>

                                <div class="d-flex items-center pt-15">
                                    <div class="text-15 lh-1 line-through">$179</div>
                                    <div class="text-18 lh-1 text-purple-1 fw-500 ml-10">$79
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="img/books/6.png" alt="book">
                                <h5 class="text-17 fw-500 mt-15">HTML 5 Maker</h5>

                                <div class="d-flex items-center mt-10">
                                    <div class="d-flex x-gap-5">
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                        <div class="icon-star text-9 text-yellow-1"></div>
                                    </div>
                                    <div class="text-13 lh-1 ml-10">(1991)</div>
                                </div>

                                <div class="d-flex items-center pt-15">
                                    <div class="text-15 lh-1 line-through">$179</div>
                                    <div class="text-18 lh-1 text-purple-1 fw-500 ml-10">$79
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="d-flex x-gap-15 items-center justify-center pt-60 lg:pt-40">
                        <div class="col-auto">
                            <button
                                class="d-flex items-center text-24 arrow-left-hover js-prev">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <div class="pagination -arrows js-pagination"></div>
                        </div>
                        <div class="col-auto">
                            <button
                                class="d-flex items-center text-24 arrow-right-hover js-next">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
        <div data-anim-wrap class="container">
            <div data-anim-child="slide-left delay-1"
                class="row y-gap-20 justify-between items-center">
                <div class="col-lg-6">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Live Streams</h2>

                        <p class="sectionTitle__text ">10,000+ unique online course list
                            designs</p>

                    </div>

                </div>

                <div class="col-auto">

                    <a href="#" class="button -icon -purple-3 text-purple-1">
                        See All
                        <i class="icon-arrow-top-right text-13 ml-10"></i>
                    </a>

                </div>
            </div>

            <div class="row y-gap-30 pt-60 lg:pt-40">

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex flex-column items-center">
                        <div>
                            <img src="img/streams/1.png" alt="image">
                        </div>
                        <h5 class="text-17 fw-500 mt-20">Floyd Miles</h5>
                        <a href="#" class="text-light-1 mt-5">miles@gmail.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex flex-column items-center">
                        <div>
                            <img src="img/streams/2.png" alt="image">
                        </div>
                        <h5 class="text-17 fw-500 mt-20">Jacob Jones</h5>
                        <a href="#" class="text-light-1 mt-5">miles@gmail.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex flex-column items-center">
                        <div>
                            <img src="img/streams/3.png" alt="image">
                        </div>
                        <h5 class="text-17 fw-500 mt-20">Cody Fisher</h5>
                        <a href="#" class="text-light-1 mt-5">miles@gmail.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex flex-column items-center">
                        <div>
                            <img src="img/streams/4.png" alt="image">
                        </div>
                        <h5 class="text-17 fw-500 mt-20">Jane Cooper</h5>
                        <a href="#" class="text-light-1 mt-5">miles@gmail.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex flex-column items-center">
                        <div>
                            <img src="img/streams/5.png" alt="image">
                        </div>
                        <h5 class="text-17 fw-500 mt-20">Annette Black</h5>
                        <a href="#" class="text-light-1 mt-5">miles@gmail.com</a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="d-flex flex-column items-center">
                        <div>
                            <img src="img/streams/6.png" alt="image">
                        </div>
                        <h5 class="text-17 fw-500 mt-20">Robert Fox</h5>
                        <a href="#" class="text-light-1 mt-5">miles@gmail.com</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-20 justify-center text-center">
                <div class="col-auto">

                    <div class="sectionTitle ">

                        <h2 class="sectionTitle__title ">Testimonials</h2>

                        <p class="sectionTitle__text ">10,000+ unique online course list
                            designs</p>

                    </div>

                </div>
            </div>

            <div class="row justify-center pt-60">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="overflow-hidden js-testimonials-slider">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide h-100">
                                <div data-anim="slide-up"
                                    class="testimonials -type-2 text-center">
                                    <div class="testimonials__icon">
                                        <img src="img/misc/quote.svg" alt="quote">
                                    </div>
                                    <div
                                        class="testimonials__text md:text-20 fw-500 text-dark-1">
                                        It is no exaggeration to say this Educrat experience was
                                        transformative–both professionally and personally. This
                                        workshop will long remain a high point of my life.</div>
                                    <div class="testimonials__author">
                                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                        <div class="mt-5">Product Manager, Apple Inc</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide h-100">
                                <div data-anim="slide-up"
                                    class="testimonials -type-2 text-center">
                                    <div class="testimonials__icon">
                                        <img src="img/misc/quote.svg" alt="quote">
                                    </div>
                                    <div
                                        class="testimonials__text md:text-20 fw-500 text-dark-1">
                                        It is no exaggeration to say this Educrat experience was
                                        transformative–both professionally and personally. This
                                        workshop will long remain a high point of my life.</div>
                                    <div class="testimonials__author">
                                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                        <div class="mt-5">Product Manager, Apple Inc</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide h-100">
                                <div data-anim="slide-up"
                                    class="testimonials -type-2 text-center">
                                    <div class="testimonials__icon">
                                        <img src="img/misc/quote.svg" alt="quote">
                                    </div>
                                    <div
                                        class="testimonials__text md:text-20 fw-500 text-dark-1">
                                        It is no exaggeration to say this Educrat experience was
                                        transformative–both professionally and personally. This
                                        workshop will long remain a high point of my life.</div>
                                    <div class="testimonials__author">
                                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                        <div class="mt-5">Product Manager, Apple Inc</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide h-100">
                                <div data-anim="slide-up"
                                    class="testimonials -type-2 text-center">
                                    <div class="testimonials__icon">
                                        <img src="img/misc/quote.svg" alt="quote">
                                    </div>
                                    <div
                                        class="testimonials__text md:text-20 fw-500 text-dark-1">
                                        It is no exaggeration to say this Educrat experience was
                                        transformative–both professionally and personally. This
                                        workshop will long remain a high point of my life.</div>
                                    <div class="testimonials__author">
                                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                        <div class="mt-5">Product Manager, Apple Inc</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide h-100">
                                <div data-anim="slide-up"
                                    class="testimonials -type-2 text-center">
                                    <div class="testimonials__icon">
                                        <img src="img/misc/quote.svg" alt="quote">
                                    </div>
                                    <div
                                        class="testimonials__text md:text-20 fw-500 text-dark-1">
                                        It is no exaggeration to say this Educrat experience was
                                        transformative–both professionally and personally. This
                                        workshop will long remain a high point of my life.</div>
                                    <div class="testimonials__author">
                                        <h5 class="text-17 lh-15 fw-500">Ali Tufan</h5>
                                        <div class="mt-5">Product Manager, Apple Inc</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="pt-60 lg:pt-40">
                            <div
                                class="pagination -avatars row x-gap-40 y-gap-20 justify-center js-testimonials-pagination">

                                <div class="col-auto">
                                    <div class="pagination__item is-active">
                                        <img src="img/home-3/testimonials/1.png"
                                            alt="image">
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="pagination__item ">
                                        <img src="img/home-3/testimonials/2.png"
                                            alt="image">
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="pagination__item ">
                                        <img src="img/home-3/testimonials/3.png"
                                            alt="image">
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="pagination__item ">
                                        <img src="img/home-3/testimonials/4.png"
                                            alt="image">
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <div class="pagination__item ">
                                        <img src="img/home-3/testimonials/5.png"
                                            alt="image">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg section-bg">
        <div class="section-bg__item">
            <img class="img-full rounded-16" src="img/home-9/cta/bg.png" alt="image">
        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-5 col-lg-6 col-md-11">

                    <div class="sectionTitle -light">

                        <h2 class="sectionTitle__title ">Subscribe our Newsletter &</h2>

                        <p class="sectionTitle__text ">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.</p>

                    </div>

                </div>
            </div>

            <div class="row mt-30 justify-center">
                <div class="col-lg-6">
                    <form class="form-single-field -help"
                        action="https://creativelayers.net/themes/educrat-html/post">
                        <input type="text" placeholder="Your Email...">
                        <button class="button -purple-1 text-white" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg">
        <div class="container">
            <div class="row justify-center">
                <div class="col text-center">
                    <p class="text-lg text-dark-1">Trusted by the world’s best</p>
                </div>
            </div>

            <div
                class="row y-gap-30 justify-between sm:justify-start items-center pt-60 md:pt-50">

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/1.svg" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/2.svg" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/3.svg" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/4.svg" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/5.svg" alt="clients image">
                    </div>
                </div>

                <div class="col-lg-auto col-md-2 col-sm-3 col-4">
                    <div class="d-flex justify-center items-center px-4">
                        <img class="w-1/1" src="img/clients/6.svg" alt="clients image">
                    </div>
                </div>

            </div>
        </div>
    </section> --}}

@endsection

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/educrat-html/lesson-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 03:29:13 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/choices.js/public/assets/styles/base.min.css" />
    <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

    <script src="https://kit.fontawesome.com/c9111ed195.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('client/css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/main.css') }}">
    <style>
        #my-video {
            width: 100% !important;
            height: 500px !important;
        }
    </style>

    <title>{{ $titlePage }} - Educrat</title>
</head>

<body class="preloader-visible" data-barba="wrapper">
    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->


    <main class="main-content  ">

        <header data-anim="fade" data-add-bg="" class="header -type-1 js-header">
            <div class="header__container">
                <div class="row justify-between items-center">

                    <div class="col-auto">
                        <div class="header-left">
                            <div class="header__logo">
                                <a data-barba href="index.html">
                                    <img src="{{ asset('client/img/general/logo.svg') }}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-auto lg:d-none">
                        <div class="text-20 lh-1 text-white fw-500">{{ $titlePage }}</div>
                    </div>


                    <div class="col-auto">
                        <div class="header-right d-flex items-center">
                            <div class="header-right__buttons">
                                <a href="#" class="button -sm -rounded -white text-dark-1">Trở về khóa học</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="content-wrapper  js-content-wrapper">

            @include('lessons::clients.components.lesson')

            <section class="layout-pt-lg layout-pb-lg lg:pt-40">
                <div class="container">
                    <div class="row justify-end">
                        <div class="col-xxl-8 col-xl-7 col-lg-8">
                            <div class="relative pt-40">
                                <video id="my-video" class="video-js rounded-16" controls preload="auto" width="100%"
                                    height="500" data-setup="{}">
                                    <source src="/data/stream?url={{ $video }}" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript
                                    </p>
                                </video>
                            </div>
                            <div class="d-flex mt-20 justify-between">
                                <div>
                                    @if ($prevIndex)
                                        <a href="{{ route('lessons.detail', $prevIndex->slug) }}"
                                            class="button -icon -purple-3 text-purple-1 text-15">
                                            <i class="fa-solid fa-backward text-14 mr-10"></i> Bài trước
                                        </a>
                    
                                    @endif
                                    
                                </div>
                                <div>
                                    @if ($nextIndex)
                                        <a href="{{ route('lessons.detail', $nextIndex->slug) }}"
                                            class="button -icon -purple-3 text-purple-1 text-15">
                                            Bài tiếp theo
                                            <i class="fa-solid fa-forward text-14 ml-10"></i>
                                        </a>
                        
                                    @endif

                                </div>
                            </div>
                            {{-- <div class="mt-60 lg:mt-40">
                                <div class="blogPost -comments">
                                    <div class="blogPost__content">
                                        <h2 class="text-20 fw-500">
                                            Học viên đánh giá
                                        </h2>

                                        <ul class="comments__list mt-30">
                                            <li class="comments__item">
                                                <div class="comments__item-inner md:direction-column">
                                                    <div class="comments__img mr-20">
                                                        <div class="bg-image rounded-full js-lazy"
                                                            data-bg="img/avatars/1.png"></div>
                                                    </div>

                                                    <div class="comments__body md:mt-15">
                                                        <div class="comments__header">
                                                            <h4 class="text-17 fw-500 lh-15">
                                                                Ali Tufan
                                                                <span class="text-13 text-light-1 fw-400">3 Days
                                                                    ago</span>
                                                            </h4>

                                                            <div class="stars"></div>
                                                        </div>

                                                        <h5 class="text-15 fw-500 mt-15">The best LMS Design</h5>
                                                        <div class="comments__text mt-10">
                                                            <p>This course is a very applicable. Professor Ng explains
                                                                precisely each algorithm and even tries to give an
                                                                intuition for mathematical and statistic concepts behind
                                                                each algorithm. Thank you very much.</p>
                                                        </div>

                                                        <div class="comments__helpful mt-20">
                                                            <span class="text-13 text-purple-1">Was this review
                                                                helpful?</span>
                                                            <button
                                                                class="button text-13 -sm -purple-1 text-white">Yes</button>
                                                            <button
                                                                class="button text-13 -sm -light-7 text-purple-1">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="comments__item">
                                                <div class="comments__item-inner md:direction-column">
                                                    <div class="comments__img mr-20">
                                                        <div class="bg-image rounded-full js-lazy"
                                                            data-bg="img/avatars/1.png"></div>
                                                    </div>

                                                    <div class="comments__body md:mt-15">
                                                        <div class="comments__header">
                                                            <h4 class="text-17 fw-500 lh-15">
                                                                Ali Tufan
                                                                <span class="text-13 text-light-1 fw-400">3 Days
                                                                    ago</span>
                                                            </h4>

                                                            <div class="stars"></div>
                                                        </div>

                                                        <h5 class="text-15 fw-500 mt-15">The best LMS Design</h5>
                                                        <div class="comments__text mt-10">
                                                            <p>This course is a very applicable. Professor Ng explains
                                                                precisely each algorithm and even tries to give an
                                                                intuition for mathematical and statistic concepts behind
                                                                each algorithm. Thank you very much.</p>
                                                        </div>

                                                        <div class="comments__helpful mt-20">
                                                            <span class="text-13 text-purple-1">Was this review
                                                                helpful?</span>
                                                            <button
                                                                class="button text-13 -sm -purple-1 text-white">Yes</button>
                                                            <button
                                                                class="button text-13 -sm -light-7 text-purple-1">No</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="respondForm pt-30">
                                    <h3 class="text-20 fw-500">
                                        Write a Review
                                    </h3>

                                    <div class="mt-30">
                                        <h4 class="text-16 fw-500">What is it like to Course?</h4>
                                        <div class="d-flex x-gap-10 pt-10">
                                            <div class="icon-star text-14 text-yellow-1"></div>
                                            <div class="icon-star text-14 text-yellow-1"></div>
                                            <div class="icon-star text-14 text-yellow-1"></div>
                                            <div class="icon-star text-14 text-yellow-1"></div>
                                            <div class="icon-star text-14 text-yellow-1"></div>
                                        </div>
                                    </div>

                                    <form class="contact-form respondForm__form row y-gap-30 pt-30" action="#">
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Review Title</label>
                                            <input type="text" name="title" placeholder="Great Courses">
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Review Content</label>
                                            <textarea name="comment" placeholder="Message" rows="8"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" id="submit"
                                                class="button -md -purple-1 text-white">
                                                Submit Review
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </main>

    <!-- JavaScript -->
    <script src="../../../unpkg.com/leaflet%401.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <script src="{{ asset('client/js/vendors.js') }}"></script>
    <script src="{{ asset('client/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            videojs($('#my-video'), {
                controls: true,
            });
        });
    </script>
</body>


<!-- Mirrored from creativelayers.net/themes/educrat-html/lesson-single-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 03:29:13 GMT -->

</html>

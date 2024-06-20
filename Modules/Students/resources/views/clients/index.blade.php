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
                                        <div class="tabs__pane -tab-item-1 is-active">
                                            <div class="row y-gap-20 x-gap-20 items-center">
                                                <div class="col-auto">
                                                    <img class="size-100" src="img/dashboard/edit/1.png" alt="image">
                                                </div>

                                                <div class="col-auto">
                                                    <div class="text-16 fw-500 text-dark-1">Your avatar</div>
                                                    <div class="text-14 lh-1 mt-10">PNG or JPG no bigger than 800px wide and
                                                        tall.</div>

                                                    <div class="d-flex x-gap-10 y-gap-10 flex-wrap pt-15">
                                                        <div>
                                                            <div
                                                                class="d-flex justify-center items-center size-40 rounded-8 bg-light-3">
                                                                <div class="icon-cloud text-16"></div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div
                                                                class="d-flex justify-center items-center size-40 rounded-8 bg-light-3">
                                                                <div class="icon-bin text-16"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-top-light pt-30 mt-30">
                                                <form action="#" class="contact-form row y-gap-30">

                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">First
                                                            Name</label>

                                                        <input type="text" placeholder="First Name">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Last
                                                            Name</label>

                                                        <input type="text" placeholder="Last Name">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone</label>

                                                        <input type="text" placeholder="Phone">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label
                                                            class="text-16 lh-1 fw-500 text-dark-1 mb-10">Birthday</label>

                                                        <input type="text" placeholder="Birthday">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address Line
                                                            1</label>

                                                        <input type="text" placeholder="Address Line 1">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Address Line
                                                            2</label>

                                                        <input type="text" placeholder="Address Line 2">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">State</label>

                                                        <input type="text" placeholder="State">
                                                    </div>


                                                    <div class="col-md-6">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Country</label>

                                                        <input type="text" placeholder="Country">
                                                    </div>


                                                    <div class="col-12">

                                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Personal
                                                            info</label>

                                                        <textarea placeholder="Text..." rows="7"></textarea>
                                                    </div>


                                                    <div class="col-12">
                                                        <button class="button -md -purple-1 text-white">Update
                                                            Profile</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tabs__pane -tab-item-2">
                                            <form action="#" class="contact-form row y-gap-30">

                                                <div class="col-md-7">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Current
                                                        password</label>

                                                    <input type="text" placeholder="Current password">
                                                </div>


                                                <div class="col-md-7">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">New
                                                        password</label>

                                                    <input type="text" placeholder="New password">
                                                </div>


                                                <div class="col-md-7">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm New
                                                        Password</label>

                                                    <input type="text" placeholder="Confirm New Password">
                                                </div>

                                                <div class="col-12">
                                                    <button class="button -md -purple-1 text-white">Save Password</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tabs__pane -tab-item-3">
                                            <form action="#" class="contact-form row y-gap-30">

                                                <div class="col-md-6">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Twitter</label>

                                                    <input type="text" placeholder="Twitter Profile">
                                                </div>


                                                <div class="col-md-6">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Facebook</label>

                                                    <input type="text" placeholder="Facebook Profile">
                                                </div>


                                                <div class="col-md-6">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Instagram</label>

                                                    <input type="text" placeholder="Instagram Profile">
                                                </div>


                                                <div class="col-md-6">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">LinkedIn Profile
                                                        URL</label>

                                                    <input type="text" placeholder="LinkedIn Profile">
                                                </div>

                                                <div class="col-12">
                                                    <button class="button -md -purple-1 text-white">Save Social
                                                        Profile</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tabs__pane -tab-item-4">
                                            <form action="#" class="contact-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="text-16 fw-500 text-dark-1">Notifications - Choose when
                                                            and how to be notified</div>
                                                        <p class="text-14 lh-13 mt-5">Select push and email notifications
                                                            you'd like to receive</p>
                                                    </div>
                                                </div>

                                                <div class="pt-60">
                                                    <div class="row y-gap-20 justify-between">
                                                        <div class="col-auto">
                                                            <div class="text-16 fw-500 text-dark-1">Choose when and how to
                                                                be notified</div>
                                                        </div>
                                                    </div>


                                                    <div class="pt-30">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Subscriptions</div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="border-top-light pt-20 mt-20">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Recommended Courses
                                                                </div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="border-top-light pt-20 mt-20">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Replies to my
                                                                    comments</div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="border-top-light pt-20 mt-20">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Activity on my
                                                                    comments</div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="pt-60">
                                                    <div class="row y-gap-20 justify-between">
                                                        <div class="col-auto">
                                                            <div class="text-16 fw-500 text-dark-1">Email notifications
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="pt-30">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Send me emails
                                                                    about my Cursus activity and updates I requested</div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="border-top-light pt-20 mt-20">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Promotions, course
                                                                    recommendations, and helpful resources from Cursus.
                                                                </div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="border-top-light pt-20 mt-20">

                                                        <div class="row y-gap-20 justify-between">
                                                            <div class="col-auto">
                                                                <div class="text-16 fw-500 text-dark-1">Announcements from
                                                                    instructors whose course(s) I’m enrolled in.</div>
                                                                <p class="text-14 lh-13 mt-5">Notify me about activity from
                                                                    the profiles I'm subscribed to</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-switch">
                                                                    <div class="switch" data-switch=".js-switch-content">
                                                                        <input type="checkbox">
                                                                        <span class="switch__slider"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row pt-30">
                                                    <div class="col-12">
                                                        <button class="button -md -purple-1 text-white">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tabs__pane -tab-item-5">
                                            <form action="#" class="contact-form row y-gap-30">
                                                <div class="col-12">
                                                    <div class="text-16 fw-500 text-dark-1">Close account</div>
                                                    <p class="mt-10">Warning: If you close your account, you will be
                                                        unsubscribed from all your 5 courses, and will lose access forever.
                                                    </p>
                                                </div>


                                                <div class="col-md-7">

                                                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Enter
                                                        Password</label>

                                                    <input type="text" placeholder="Enter Password">
                                                </div>


                                                <div class="col-12">
                                                    <button class="button -md -purple-1 text-white">Close Account</button>
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
    </div>
@endsection

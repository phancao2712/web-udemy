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
                                        <h5>Thông tin đơn hàng</h5>
                                        <table class="table w-1/1">
                                            <tbody>
                                                <tr>
                                                    <td >Mã đơn hàng</td>
                                                    <td>{{ $order->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tổng tiền</td>
                                                    <td>{{ money($order->total) }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Thời gian đặt</td>
                                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                                                </tr>
                                                <tr style="border-bottom: 0px;">
                                                    <td style="border-bottom: 0px;">Trạng thái</td>
                                                    <td style="border-bottom: 0px;"><span
                                                        class="badge bg-{{ $order->status->color }}">{{ $order->status->name }}</span></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h5 class="mb-10">Chi tiết đơn hàng</h5>
                                        <table class="table w-1/1">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên khóa học</th>
                                                    <th>Giá</th>
                                                    <th>Giảng viên</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->detail as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->course->name }}</td>
                                                    <td>{{ money($item->course->price) }}</td>
                                                    <td>{{ $item->course->teacher->name }}</td>
                                                    <td><span class="badge bg-{{ $item->course->status ? "success" : "danger" }}">{{ $item->course->status ? "Đang hoạt động" : "Dừng hoạt động" }}</span></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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

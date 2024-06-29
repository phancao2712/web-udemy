@extends('layouts.client')

@section('style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endsection
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
                                        <form class="contact-form d-flex mb-10" action="">
                                            <select class="setup-select2 bg-white h-50" style="width: 20%; display:none;"
                                                name="status_id" id="">
                                                <option value="">Chọn trạng thái</option>
                                                @foreach ($orderStatus as $item)
                                                    <option @selected(request('status_id') == $item->id) value="{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <input style="width: 20%;" type="text" class="datepicker ml-10"
                                                placeholder="Từ ngày..." name="start_date"
                                                value="{{ request('start_date') }}">
                                            <input style="width: 20%;" type="text" class="datepicker ml-10"
                                                placeholder="Đến ngày..." name="end_date" value="{{ request('end_date') }}">
                                            <input style="width: 20%;" type="number" class="ml-10" name="total"
                                                value="{{ request('total') }}" placeholder="Tổng tiền...">
                                            <button style="width: 20%;" type="submit"
                                                class="button h-50 -md -purple-1 text-white ml-10">Tìm
                                                kiếm</button>
                                        </form>
                                        <table class="table w-1/1">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thời gian</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td><a href="" class="text-purple-1">#{{ $item->id }}</a>
                                                        </td>
                                                        <td>{{ money($item->total) }}</td>
                                                        <td><span
                                                                class="badge bg-{{ $item->status->color }}">{{ $item->status->name }}</span>
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s') }}
                                                        </td>
                                                        <td><button class="button -sm -outline-purple-1 text-purple-1">Chi
                                                                tiết</button></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{ $orders->links('students::clients.paginations.boostrap') }}
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
@section('script')
    <script>
        $(function() {
            $(".datepicker").datepicker();
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
@endsection

<div class="dashboard__sidebar scroll-bar-1">
    <div class="sidebar -dashboard">
        @php
            $menu = [
                [
                    'icon' => 'icon-discovery',
                    'route' => 'students.accounts.index',
                    'label' => 'Tổng quan',
                ],
                [
                    'icon' => 'icon-play-button',
                    'route' => 'students.accounts.account',
                    'label' => 'Thông tin tài khoản',
                ],
                [
                    'icon' => 'icon-play-button',
                    'route' => 'students.accounts.course',
                    'label' => 'Khóa học của tôi',
                ],
                [
                    'icon' => 'icon-message',
                    'route' => 'students.accounts.order',
                    'label' => ' Đơn hàng',
                ],
                [
                    'icon' => 'icon-list',
                    'route' => 'students.accounts.changePassword',
                    'label' => 'Đổi mật khẩu',
                ],
            ];
        @endphp

        @foreach ($menu as $item)
            <div class="sidebar__item {{ request()->routeIs($item['route']) ? '-is-active -dark-bg-dark-2' : '' }}">
                <a href="{{ route($item['route']) }}" class="d-flex items-center text-17 lh-1 fw-500 ">
                    <i class="text-20 {{ $item['icon'] }} mr-15"></i>
                    {{ $item['label'] }}
                </a>
            </div>
        @endforeach
    </div>
</div>

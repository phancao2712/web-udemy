<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            @include('components.backend.menu_item', [
                'title' => 'Chuyên mục',
                'name' => 'categories',
            ])

            @include('components.backend.menu_item', [
                'title' => 'Khóa học',
                'name' => 'courses',
            ])

            @include('components.backend.menu_item', [
                'title' => 'Giảng viên',
                'name' => 'teacher',
            ])

            @include('components.backend.menu_item', [
                'title' => 'Người dùng',
                'name' => 'users',
            ])
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Đăng nhập:</div>
        {{ auth()->user()->name }}
    </div>
</nav>

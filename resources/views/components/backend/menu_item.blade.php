<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse{{ $name }}"
    aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    {{ $title }}
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>


<div class="collapse @if (!empty($sidebar)) {{ setSideBarActive($sidebar) }} @endif"
    id="collapse{{ $name }}" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link {{ setMenuActive(['admin.' . $name . '.index', 'admin.' . $name . '.edit']) }}" href="{{ route('admin.' . $name . '.index') }}">Danh sách {{ $title }}</a>
        <a class="nav-link {{ setMenuActive(['admin.' . $name . '.create']) }}" href="{{ route('admin.' . $name . '.create') }}">Thêm {{ $title }}</a>
    </nav>
</div>

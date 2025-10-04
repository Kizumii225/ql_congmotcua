<!-- Header chính -->
<header class="main-header1 navbar navbar-expand navbar-white navbar-light shadow-sm">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <!-- Logo và tên trường -->
        <div class="d-flex align-items-center">
            <a href="{{ route('home.index') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('images/logo3.jpg') }}" alt="Logo" class="brand-image img-circle elevation-3 me-2" style="height: 40px;">
                <div class="school-name">
                    <p class="mb-0 fw-bold text-primary">TRƯỜNG ĐẠI HỌC</p>
                    <p class="mb-0 fw-bold text-primary">KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</p>
                    <p class="mb-0 text-secondary small">MÃ TRƯỜNG: KCC</p>
                </div>
            </a>
        </div>

        <!-- Thanh tìm kiếm -->
        <div class="search-box d-none d-md-block position-relative w-25">
            <input id="searchInput" type="text" class="form-control search-input" placeholder="Tìm kiếm sản phẩm...">
            <span class="search-icon">
                <i class="fas fa-search"></i>
            </span>
            <div id="searchResults" class="dropdown-menu shadow"></div>
        </div>

        <div class="d-flex gap-3 align-items-center">
            <a href="" class="text-secondary small d-flex align-items-center" title="Trang chủ">
                <i class="bi bi-house"></i>
                <span>Trang chủ</span>
            </a>
            <a href="" class="text-secondary small d-flex align-items-center" title="Tin tức">
                <i class="bi bi-bell"></i>
                <span>Tin tức</span>
            </a>
        </div>


        <!-- Thông tin người dùng -->
        <div class="user-account dropdown">
            <div class="d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                <img src="{{ Auth::user()->avatar ?? asset('images/avt/default.jpg') }}"
                    class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover;">
                <span class="fw-bold text-dark">{{ Auth::user()->name ?? 'Người dùng' }}</span>
                <i class="fa fa-caret-down ms-1"></i>
            </div>

            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i class="fa fa-user me-2"></i>Thông tin cá nhân</a></li>
                <li><a class="dropdown-item" href="#" onclick="popupDoiMatKhau()"><i class="fa fa-key me-2"></i>Đổi mật khẩu</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="fa fa-sign-out me-2"></i>Đăng xuất</a></li>
            </ul>
        </div>
    </div>
</header>

<!-- Mini Sidebar -->
<aside class="mini-sidebar">
    <!-- Nút mở/đóng sidebar -->
    <div class="mini-sidebar-toggle" id="toggleSidebar">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Menu sidebar -->
    <nav class="mini-sidebar-menu" id="sidebarMenu">
        <ul>
            <li><a href="{{ route('uniforms.store') }}"><i class="fas fa-shopping-bag"></i> Cửa hàng</a></li>
            <li><a href="#"><i class="fa-solid fa-comment"></i> Chat</a></li>
            <li><a href="{{ route('home.index') }}"><i class="fas fa-home"></i> Trang chủ</a></li>
            <li><a href="{{ route('orders.cart') }}"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a></li>
            <li><a href="{{ route('user.profile') }}"><i class="fas fa-user"></i> Hồ sơ</a></li>
            <li><a href="{{ route('logout') }}" class="text-danger"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
        </ul>
    </nav>
</aside>
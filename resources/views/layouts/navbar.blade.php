<!-- Header chính -->
<header class="main-header1 navbar navbar-expand navbar-white navbar-light shadow-sm">
    <div class="container-fluid d-flex justify-content-around align-items-center">

        <!-- Logo và tên trường -->
        <div class="d-none d-md-flex align-items-center" id="logo-name-school">
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
        <div class="search-box d-block d-md-block position-relative w-50" style="max-width: 500px;">
            <input id="searchInput" type="text" class="form-control search-input" placeholder="Tìm kiếm sản phẩm...">
            <span class="search-icon position-absolute top-50 end-0 translate-middle-y pe-2 text-secondary">
                <i class="fas fa-search"></i>
            </span>
            <div id="searchResults" class="dropdown-menu shadow w-100"></div>
        </div>

        <div class="menu-header d-none d-md-flex gap-3 align-items-center justify-content-between">
            <a href="{{ route('orders.cart') }}" class="text-secondary small d-flex align-items-center" title="Giỏ hàng">
                <span><i class="fa-solid fa-bag-shopping"></i> Giỏ hàng</span>
            </a>
            <a href="" class="text-secondary small d-flex align-items-center" title="Tin tức">
                <span><i class="fa-solid fa-bell"></i> Tin tức</span>
            </a>
            <a href="" class="text-secondary small d-flex align-items-center" title="Chat">
                <span><i class="fa-solid fa-comments"></i> Chat</span>
            </a>
        </div>

        <!-- Thông tin người dùng -->
        <div class="user-account dropdown">
            @if(Auth::check())
                <div class="d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                    <img src="{{ Auth::user()->avatar ?? asset('images/avt/default.jpg') }}"
                        class="rounded-circle me-2" style="width: 35px; height: 35px; object-fit: cover;">
                    <span class="fw-bold text-dark">{{ Auth::user()->name ?? 'Username' }}</span>
                    <i class="fa fa-caret-down ms-1"></i>
                </div>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                    <li><a class="dropdown-item" href="{{ route('user.profile') }}"><i class="fa fa-user me-2"></i>Thông tin cá nhân</a></li>
                    <li><a class="dropdown-item" href="#" onclick="popupDoiMatKhau()"><i class="fa fa-key me-2"></i>Đổi mật khẩu</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fa fa-sign-out me-2"></i> Đăng xuất
                            </button>
                        </form>
                    </li>
                </ul>
            @else
                <a href="{{ route('login.form') }}" class="text-info d-flex align-items-center" title="Đăng nhập">
                    <span><i class="fa-solid fa-right-to-bracket"></i> Đăng nhập</span>
                </a>
            @endif
        </div>
    </div>
</header>

<!-- Mini Sidebar -->
<!-- <aside class="mini-sidebar">

    <div class="mini-sidebar-toggle" id="toggleSidebar">
        <i class="fas fa-bars"></i>
    </div>


    <nav class="mini-sidebar-menu p-3" id="sidebarMenu">
        <ul class="list-unstyled">

            <li>
                <a href="{{ route('home.index') }}"><i class="fas fa-home me-1"></i> Trang chủ</a>
            </li>


            <li>
                <a class="d-flex justify-content-between align-items-center" 
                data-bs-toggle="collapse" href="#collapseProducts" role="button" aria-expanded="false" aria-controls="collapseProducts">
                    <span><i class="fas fa-shopping-bag me-1"></i> Sản phẩm</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="collapse ps-3 mt-1" id="collapseProducts">
                    <ul class="list-unstyled">
                        <li><a href="">Quần</a></li>
                        <li><a href="">Áo</a></li>
                        <li><a href="">Giày</a></li>
                        <li><a href="">Dép</a></li>
                    </ul>
                </div>
            </li>


            <li>
                <a class="d-flex justify-content-between align-items-center" 
                data-bs-toggle="collapse" href="#collapseSupport" role="button" aria-expanded="false" aria-controls="collapseSupport">
                    <span><i class="fas fa-headset me-1"></i> Hỗ trợ</span>
                    <i class="fas fa-chevron-down"></i>
                </a>
                <div class="collapse ps-3 mt-1" id="collapseSupport">
                    <ul class="list-unstyled">
                        <li><a href="">Chính sách đổi trả</a></li>
                        <li><a href="">Chính sách giao hàng</a></li>
                        <li><a href="">Liên hệ hỗ trợ</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</aside> -->

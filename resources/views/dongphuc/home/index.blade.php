@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
    <!-- Body -->
    <div class="body container p-3" style="min-height: 600px;">
        <div class="row">
            <!-- Sidebar trái -->
            <div class="col-md-2">
                <aside class="sidebar p-3 rounded-3 shadow-sm" style="height: 100%; background-color: #FFFFFF;">
                    <nav class="sidebar-menu mt-4 mb-4">
                        <ul class="list-unstyled">
                            <!-- Trang chủ -->
                            <li class="mb-3">
                                <a href="{{ route('home.index') }}" 
                                class="d-flex align-items-center text-decoration-none text-dark sidebar-item">
                                    <i class="fas fa-home me-2"></i> Trang chủ
                                </a>
                            </li>

                            <!-- Sản phẩm -->
                            <li class="mb-3">
                                <a class="d-flex justify-content-between align-items-center text-dark fw-bold sidebar-item" 
                                data-bs-toggle="collapse" href="#collapseProducts" role="button" aria-expanded="false" aria-controls="collapseProducts">
                                    <span><i class="fas fa-shopping-bag me-2"></i> Sản phẩm</span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="list-unstyled ps-3 collapse" id="collapseProducts">
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Quần</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Áo</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Giày</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Dép</a></li>
                                </ul>
                            </li>

                            <!-- Hỗ trợ -->
                            <li class="mb-3">
                                <a class="d-flex justify-content-between align-items-center text-dark fw-bold sidebar-item" 
                                data-bs-toggle="collapse" href="#collapseSupport" role="button" aria-expanded="false" aria-controls="collapseSupport">
                                    <span><i class="fas fa-headset me-2"></i> Hỗ trợ</span>
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="list-unstyled ps-3 collapse" id="collapseSupport">
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Chính sách đổi trả</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Chính sách giao hàng</a></li>
                                    <li><a href="#" class="text-dark text-decoration-none d-block py-1 sidebar-subitem">Liên hệ hỗ trợ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </aside>
            </div>

            <!-- Nội dung chính -->
            <div class="col-md-10">
                <div class="title text-center mt-5">
                    <img src="{{ asset('images/logo3.jpg') }}" alt="logo" style="max-height: 15vh;" class="rounded-circle"><br>
                    <b class="fs-1">ĐỒNG PHỤC SINH VIÊN CTUT</b>
                    <p class="fs-3">HỆ THỐNG ĐẶT MUA ĐỒNG PHỤC NHANH CHÓNG VÀ TIỆN LỢI</p>
                </div>
        
                <!-- Slider -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="slider-img carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/slider1.jpg') }}" class="d-block w-100" alt="slider1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider3.jpg') }}" class="d-block w-100" alt="slider3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/slider2.jpg') }}" class="d-block w-100" alt="slider2">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <i class="fa-solid fa-circle-chevron-left fs-2 fw-bold text-white"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <i class="fa-solid fa-circle-chevron-right fs-2 text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="suggest mt-4 d-flex justify-content-between align-items-center">
            <span class="fw-bold fst-italic fs-4">Gợi ý cho bạn</span>
            <a class="text-warning fst-italic fw-bold text-decoration-none" href="{{ route('uniforms.store') }}">
                Xem thêm <i class="fa-solid fa-angles-right"></i>
            </a>
        </div>

        <!-- Product -->
        <div class="product row mt-2">
            <div class="row d-flex">
                @foreach($sanphams as $sp)
                    <div class="col-6 col-md-3 mt-4 d-flex">
                        <a href="{{ route('uniforms.show_detail', $sp->id_loai) }}" class="text-decoration-none text-dark w-100">
                            <div class="card h-100 shadow-sm border-0 product-card">
                                <img src="{{  $sp->anhsanpham }}" class="card-img-top" alt="{{ $sp->loai }}" style="height: 200px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-truncate">{{ $sp->loai }}</h5>
                                    <p class="card-text text-truncate small">{{ $sp->mota }}</p>
                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                        <p class="fs-5 fw-bold text-danger mb-0">
                                            {{ number_format($sp->gia, 0, ',', '.') }} ₫
                                            
                                        </p>
                                        
                                        <p class="fs-6 text-muted mb-0">Đã bán: {{ $sp->slphat ?? 0 }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection



<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Đăng nhập bằng Google</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>


  <style>
    body {
      background: linear-gradient(135deg, #007bff 30%, #ff7b00 90%);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background: #ffffff;
      border-radius: 25px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      padding: 40px 30px;
      text-align: center;
      max-width: 420px;
      width: 100%;
      animation: fadeIn 0.6s ease;
    }

    .login-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid #007bff;
    }

    .login-card h2 {
      font-size: 1.4rem;
      margin-bottom: 25px;
      color: #333;
      font-weight: 600;
    }

    /* Nút Google */
    .google-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      border: none;
      padding: 12px 16px;
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      border-radius: 8px;
      width: 100%;
      transition: all 0.3s ease;
      text-decoration: none;
    }

    .google-btn img {
      width: 24px;
      height: 24px;
      background: #fff;
      border-radius: 50%;
      padding: 2px;
    }

    /* Nút Đăng nhập */
    .google-login {
      background: #007bff;
      box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
    }

    .google-login:hover {
      background: #0069d9;
    }

    /* Nút Đăng ký */
    .google-register {
      background: #ff7b00;
      box-shadow: 0 4px 10px rgba(255, 123, 0, 0.3);
    }

    .google-register:hover {
      background: #e96b00;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-15px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .footer-text {
      margin-top: 25px;
      font-size: 15px;
      color: #444;
    }

    .footer-text a {
      text-decoration: none;
      color: #007bff;
      transition: color 0.3s;
    }

    .footer-text a:hover {
      color: #0056b3;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <img src="{{ asset('images/logo3.jpg') }}" alt="Logo CTUT">

    <h2>Chào mừng bạn đến với trang mua sắm đồng phục sinh viên CTUT</h2>

    <div class="d-flex flex-column gap-3">
      <a href="{{ route('google.redirect', ['action' => 'login']) }}" class="google-btn google-login">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Logo">
        <span>Đăng nhập bằng Google</span>
      </a>

      <!-- <a href="{{ route('google.redirect', ['action' => 'register']) }}" class="google-btn google-register">
        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google Logo">
        <span>Đăng ký bằng Google</span>
      </a> -->
    </div>

    <div class="footer-text mt-4">
      <a href="{{ route('home.index') }}">
        <i class="fa-solid fa-chevron-left"></i> Quay lại trang chủ
      </a>
    </div>
  </div>




















  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
      // Test thủ công
      // toastr.success("Toastr đã hoạt động!");

      @if (session('success'))
          toastr.success(@json(session('success')));
      @endif

      @if (session('error'))
          toastr.error(@json(session('error')));
      @endif
    });
  </script>
</body>
</html>

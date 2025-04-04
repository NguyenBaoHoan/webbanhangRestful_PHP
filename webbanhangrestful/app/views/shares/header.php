<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUBIES - Thời trang nữ</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Custom CSS */
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .rubies-logo {
            color: #8B2323;
            font-weight: bold;
            font-size: 28px;
            line-height: 1;
        }

        .est-year {
            color: #8B2323;
            font-size: 12px;
            display: block;
            text-align: center;
        }

        .top-header {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .contact-icon {
            width: 24px;
            height: 24px;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
            font-size: 12px;
        }

        .contact-text {
            font-size: 14px;
            font-weight: 600;
        }

        .search-box {
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 8px 15px;
            border-radius: 20px;
            border: none;
            background-color: #f5f5f5;
            font-size: 14px;
        }

        .search-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
        }

        .icon-badge {
            position: relative;
            display: inline-block;
            margin-left: 15px;
        }

        .badge-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-nav {
            padding: 10px 0;
        }

        .main-nav .nav-item {
            margin: 0 15px;
        }

        .main-nav .nav-link {
            font-size: 14px;
            font-weight: 600;
            color: #000;
            text-transform: uppercase;
            padding: 5px 0;
        }

        .main-nav .active .nav-link {
            border-bottom: 2px solid #000;
        }

        .dropdown-toggle::after {
            vertical-align: middle;
        }

        .promo-link {
            color: #e74c3c !important;
        }

        .promo-icon {
            background-color: #e74c3c;
            color: #fff;
            padding: 2px 4px;
            margin-right: 5px;
            font-size: 12px;
        }

        .hero-banner {
            width: 100%;
            height: 500px;
            background: url('/webbanhang/uploads/slider_1.jpg') no-repeat center;
            background-size: cover;
            background-position: center;
        }

        .features-section {
            padding: 30px 0;
        }

        .feature-box {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 15px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .feature-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .feature-subtitle {
            font-size: 12px;
            color: #666;
        }

        /* Login Form Styles */
        .auth-container {
            max-width: 400px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .auth-title {
            color: #8B2323;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .auth-form .form-control {
            border-radius: 20px;
            padding: 10px 15px;
            margin-bottom: 15px;
        }

        .auth-btn {
            background-color: #8B2323;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 15px;
            width: 100%;
            font-weight: 600;
            margin-top: 10px;
        }

        .auth-btn:hover {
            background-color: #6d1a1a;
        }

        .auth-links {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .auth-links a {
            color: #8B2323;
            text-decoration: none;
        }

        .auth-links a:hover {
            text-decoration: underline;
        }

        @media (max-width: 992px) {

            .contact-section,
            .search-box {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Top Header -->
    <div class="container top-header">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-3 col-6">
                <a href="/webbanhang/Product/" class="d-block text-decoration-none">
                    <div class="rubies-logo">RUBIES</div>
                </a>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 contact-section">
                <div class="d-flex align-items-center mb-2">
                    <span class="contact-icon"><i class="fas fa-phone-alt"></i></span>
                    <span class="contact-text">HOTLINE: 070 347 0938</span>
                </div>
                <div class="d-flex align-items-center">
                    <span class="contact-icon"><i class="fas fa-store"></i></span>
                    <span class="contact-text">HỆ THỐNG CỬA HÀNG</span>
                </div>
            </div>

            <!-- Search -->
            <div class="col-md-3 search-box">
                <input type="text" class="search-input" placeholder="Tìm sản phẩm...">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>

            <!-- User Actions -->
            <div class="col-md-2 col-6 text-right">
                <div class="d-inline-block">
                    <div class="icon-badge">
                        <i class="far fa-heart fa-lg"></i>
                        <span class="badge-count">0</span>
                    </div>
                    <div class="icon-badge">
                        <?php
                        if (SessionHelper::isLoggedIn()) {
                            echo '<a href="/webbanhang/account/profile" class="text-dark"><i class="fas fa-user fa-lg"></i></a>';
                        } else {
                            echo '<a href="/webbanhang/account/login" class="text-dark"><i class="far fa-user fa-lg"></i></a>';
                        }
                        ?>
                    </div>
                    <a href="cart">
                        <div class="icon-badge">
                            <i class="fas fa-shopping-bag fa-lg"></i>
                            <?php
                            // Kiểm tra xem giỏ hàng có tồn tại trong session không
                            if (isset($_SESSION['cart'])) {
                                $totalQuantity = 0;

                                // Duyệt qua tất cả sản phẩm trong giỏ hàng
                                foreach ($_SESSION['cart'] as $item) {
                                    // Cộng dồn số lượng sản phẩm
                                    $totalQuantity += $item['quantity'];
                                }

                                echo "<span class='badge-count'>" . htmlspecialchars($totalQuantity) . "</span>";
                            } else {
                                echo "<span class='badge-count'>0</span>";
                            }
                            ?>
                            <!-- <span class="badge-count">0</span> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white main-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="fashionDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            THỜI TRANG NỮ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="fashionDropdown">
                            <a class="dropdown-item" href="#">Áo</a>
                            <a class="dropdown-item" href="#">Váy</a>
                            <a class="dropdown-item" href="#">Quần</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="collectionDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BỘ SƯU TẬP
                        </a>
                        <div class="dropdown-menu" aria-labelledby="collectionDropdown">
                            <a class="dropdown-item" href="#">Mùa Xuân 2023</a>
                            <a class="dropdown-item" href="#">Mùa Hè 2023</a>
                            <a class="dropdown-item" href="#">Mùa Thu 2023</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="newsDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TIN TỨC THỜI TRANG
                        </a>
                        <div class="dropdown-menu" aria-labelledby="newsDropdown">
                            <a class="dropdown-item" href="#">Xu hướng</a>
                            <a class="dropdown-item" href="#">Sự kiện</a>
                            <a class="dropdown-item" href="#">Blog</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="helpDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TRỢ GIÚP
                        </a>
                        <div class="dropdown-menu" aria-labelledby="helpDropdown">
                            <a class="dropdown-item" href="#">Hướng dẫn mua hàng</a>
                            <a class="dropdown-item" href="#">Chính sách đổi trả</a>
                            <a class="dropdown-item" href="#">Liên hệ</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link promo-link" href="#"><span class="promo-icon"><i class="fas fa-gift"></i></span>KHUYẾN MÃI</a>
                    </li>
                    <!-- User Authentication Links -->

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Banner -->
    <!-- <div class="hero-banner" style="background-image : url ('/uploads/slider_1.jpg')'></div> -->
    <div class="hero-banner"></div>

    <!-- Features Section -->
    <div class=" container features-section">
        <div class="row">
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast fa-2x"></i>
                    </div>
                    <div>
                        <div class="feature-title">Vận chuyển MIỄN PHÍ</div>
                        <div class="feature-subtitle">Trong khu vực TP.HCM</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-id-card fa-2x"></i>
                    </div>
                    <div>
                        <div class="feature-title">Tích điểm Năng hạng</div>
                        <div class="feature-subtitle">THẺ THÀNH VIÊN</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-credit-card fa-2x"></i>
                    </div>
                    <div>
                        <div class="feature-title">Tiến hành THANH TOÁN</div>
                        <div class="feature-subtitle">Với nhiều PHƯƠNG THỨC</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="fas fa-undo fa-2x"></i>
                    </div>
                    <div>
                        <div class="feature-title">100% HOÀN TIỀN</div>
                        <div class="feature-subtitle">nếu sản phẩm lỗi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container mt-4">
        <!-- Product Management Section -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Quản lý sản phẩm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/webbanhangrestful/Product/">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/webbanhangrestful/Product/add">Thêm sản phẩm</a>
                    </li>
                    <li class="nav-item" id="nav-login">
                        <a class="nav-link" href="/webbanhangrestful /account/login">Login</a>
                    </li>
                    <li class="nav-item" id="nav-logout" style="display: none;">
                        <a class="nav-link" href="#" onclick="logout()">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Authentication Script -->
    <script>
        function logout() {
            localStorage.removeItem('jwtToken');
            location.href = '/webbanhangrestful/account/login';
        }

        document.addEventListener("DOMContentLoaded", function() {
            const token = localStorage.getItem('jwtToken');
            if (token) {
                document.getElementById('nav-login').style.display = 'none';
                document.getElementById('nav-logout').style.display = 'block';
            } else {
                document.getElementById('nav-login').style.display = 'block';
                document.getElementById('nav-logout').style.display = 'none';
            }
        });
    </script>
</body>

</html>
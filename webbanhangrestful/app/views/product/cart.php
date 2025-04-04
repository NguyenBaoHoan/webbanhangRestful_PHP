<?php include 'app/views/shares/header.php'; ?>

<div class="container my-5">
    <div class="cart-header mb-4">
        <h1 class="cart-title">Giỏ hàng của bạn</h1>
        <p class="cart-subtitle">Xem lại sản phẩm và tiến hành thanh toán</p>
    </div>

    <?php if (!empty($cart)): ?>
        <div class="card cart-container">
            <div class="card-header bg-white">
                <div class="row cart-header-row d-none d-md-flex">
                    <div class="col-md-6">
                        <h5 class="mb-0">Sản phẩm</h5>

                    </div>
                    <div class="col-md-2 text-center">
                        <h5 class="mb-0">Giá</h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <h5 class="mb-0">Số lượng</h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <h5 class="mb-0">Tổng</h5>
                    </div>
                </div>
            </div>

            <div class="card-body p-0">
                <?php
                $totalAmount = 0;
                foreach ($cart as $id => $item):
                    $itemTotal = $item['price'] * $item['quantity'];
                    $totalAmount += $itemTotal;
                ?>
                    <div class="cart-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="cart-item-image">
                                        <?php if ($item['image']): ?>
                                            <img src="/webbanhangrestful/<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>">
                                        <?php else: ?>
                                            <img src="/webbanhangrestful/public/images/placeholder.jpg" alt="Placeholder">
                                        <?php endif; ?>
                                    </div>
                                    <div class="cart-item-details">
                                        <h3 class="cart-item-title"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                        <p class="cart-item-category mb-0">Danh mục: <?php echo isset($item['category_name']) ? htmlspecialchars($item['category_name'], ENT_QUOTES, 'UTF-8') : 'Không có'; ?></p>
                                        <a href="/webbanhangrestful/Product/removeFromCart/<?php echo $id; ?>" class="cart-item-remove">
                                            <i class="fas fa-trash-alt"></i> Xóa
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="cart-item-price">
                                    <?php echo number_format($item['price'], 0, ',', '.'); ?>đ
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="cart-item-quantity">
                                    <div class="quantity-control">
                                        <a href="/webbanhangrestful/Product/decreaseQuantity/<?php echo $id; ?>" class="quantity-btn minus">
                                            <i class="fas fa-minus"></i>
                                        </a>
                                        <input type="text" value="<?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?>" class="quantity-input" readonly>
                                        <a href="/webbanhangrestful/Product/increaseQuantity/<?php echo $id; ?>" class="quantity-btn plus">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <div class="cart-item-total">
                                    <?php echo number_format($itemTotal, 0, ',', '.'); ?>đ
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="card-footer bg-white">
                <div class="row">
                    <div class="col-md-6">
                        <div class="coupon-section">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Mã giảm giá">
                                <button class="btn btn-outline-primary" type="button">Áp dụng</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-summary">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Tạm tính:</span>
                                <span><?php echo number_format($totalAmount, 0, ',', '.'); ?>đ</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Phí vận chuyển:</span>
                                <span>Miễn phí</span>
                            </div>
                            <div class="d-flex justify-content-between cart-total">
                                <span>Tổng cộng:</span>
                                <span><?php echo number_format($totalAmount, 0, ',', '.'); ?>đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart-actions mt-4">
            <div class="row">
                <div class="col-md-6">
                    <a href="/webbanhangrestful/Product" class="btn btn-continue">
                        <i class="fas fa-arrow-left me-2"></i>Tiếp tục mua sắm
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <a href="/webbanhangrestful/Product/checkout" class="btn btn-checkout">
                        Thanh toán<i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="empty-cart">
            <div class="empty-cart-icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <h2>Giỏ hàng của bạn đang trống</h2>
            <p>Hãy thêm sản phẩm vào giỏ hàng để tiến hành mua sắm</p>
            <a href="/webbanhangrestful/Product" class="btn btn-start-shopping mt-3">
                <i class="fas fa-store me-2"></i>Bắt đầu mua sắm
            </a>
        </div>
    <?php endif; ?>
</div>

<style>
    /* Cart Page Styles */
    .cart-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #333;
    }

    .cart-subtitle {
        color: #6c757d;
        margin-bottom: 25px;
    }

    .cart-container {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: none;
    }

    .cart-header-row {
        padding: 15px 0;
    }

    .cart-item {
        padding: 20px;
        border-bottom: 1px solid #f1f1f1;
    }

    .cart-item:last-child {
        border-bottom: none;
    }

    .cart-item-image {
        width: 80px;
        height: 80px;
        overflow: hidden;
        border-radius: 8px;
        margin-right: 15px;
        background-color: #f9f9f9;
    }

    .cart-item-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-item-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .cart-item-category {
        font-size: 13px;
        color: #6c757d;
    }

    .cart-item-remove {
        color: #dc3545;
        font-size: 13px;
        text-decoration: none;
        display: inline-block;
        margin-top: 5px;
        transition: all 0.3s ease;
    }

    .cart-item-remove:hover {
        color: #bd2130;
    }

    .cart-item-price,
    .cart-item-total {
        font-weight: 600;
        color: #333;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
        width: 120px;
        margin: 0 auto;
    }

    .quantity-btn {
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .quantity-btn:hover {
        background-color: #e9ecef;
    }

    .quantity-input {
        width: 60px;
        height: 30px;
        border: none;
        text-align: center;
        font-weight: 600;
    }

    .cart-summary {
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }

    .cart-total {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        padding-top: 10px;
        border-top: 1px solid #ddd;
    }

    .btn-continue {
        background-color: #fff;
        color: #333;
        border: 1px solid #ddd;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-continue:hover {
        background-color: #f8f9fa;
        border-color: #c8c8c8;
    }

    .btn-checkout {
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-checkout:hover {
        background: linear-gradient(135deg, #0056b3, #003d80);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 86, 179, 0.3);
    }

    .empty-cart {
        text-align: center;
        padding: 50px 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .empty-cart-icon {
        font-size: 60px;
        color: #ddd;
        margin-bottom: 20px;
    }

    .btn-start-shopping {
        background: linear-gradient(135deg, #28a745, #1e7e34);
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 5px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-start-shopping:hover {
        background: linear-gradient(135deg, #1e7e34, #145523);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(30, 126, 52, 0.3);
        color: white;
    }

    @media (max-width: 768px) {
        .cart-item {
            padding: 15px;
        }

        .cart-item-image {
            width: 60px;
            height: 60px;
        }

        .cart-item-title {
            font-size: 14px;
        }

        .quantity-control {
            width: 100px;
        }

        .cart-actions .btn {
            width: 100%;
            margin-bottom: 10px;
            text-align: center;
        }

        .col-md-6.text-end {
            text-align: left !important;
        }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<?php include 'app/views/shares/footer.php'; ?>
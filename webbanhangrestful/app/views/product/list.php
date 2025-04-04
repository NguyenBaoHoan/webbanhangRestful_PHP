<!DOCTYPE
    html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --secondary: #0ea5e9;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --gray-light: #e2e8f0;
        }

        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark);
            padding-bottom: 3rem;
        }

        .header {
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            margin-bottom: 2rem;
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
            border-bottom: 2px solid var(--gray-light);
        }

        .btn-add-product {
            background-color: var(--success);
            border-color: var(--success);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-add-product:hover {
            background-color: #0d9488;
            border-color: #0d9488;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background-color: white;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid var(--gray-light);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 300px;
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.08);
        }

        .product-content {
            padding: 1.25rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--dark);
            line-height: 1.3;
        }

        .product-title a {
            color: inherit;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .product-title a:hover {
            color: var(--primary);
        }

        .product-description {
            color: var(--gray);
            margin-bottom: 1rem;
            font-size: 0.95rem;
            line-height: 1.5;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .product-price {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--primary);
        }

        .product-category {
            background-color: var(--gray-light);
            color: var(--gray);
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-weight: 500;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .product-actions .btn {
            flex: 1;
            min-width: 0;
            padding: 0.5rem;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-edit {
            background-color: var(--warning);
            border-color: var(--warning);
            color: white;
            flex: 1;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .btn-edit:hover {
            background-color: #d97706;
            border-color: #d97706;
            color: white;
        }

        .btn-delete {
            background-color: var(--danger);
            border-color: var(--danger);
            color: white;
            flex: 1;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .btn-delete:hover {
            background-color: #dc2626;
            border-color: #dc2626;
        }

        .loading-spinner {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top: 4px solid var(--primary);
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            background-color: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .empty-state-icon {
            font-size: 3rem;
            color: var(--gray);
            margin-bottom: 1rem;
        }

        .empty-state-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .empty-state-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        .toast-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .toast {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            padding: 1rem;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            min-width: 300px;
            transform: translateX(100%);
            animation: slideIn 0.3s forwards;
        }

        .toast.success {
            border-left: 4px solid var(--success);
        }

        .toast.error {
            border-left: 4px solid var(--danger);
        }

        .toast-icon {
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }

        .toast-icon.success {
            color: var(--success);
        }

        .toast-icon.error {
            color: var(--danger);
        }

        .toast-content {
            flex-grow: 1;
        }

        .toast-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: var(--dark);
        }

        .toast-message {
            color: var(--gray);
            font-size: 0.875rem;
        }

        .toast-close {
            color: var(--gray);
            background: none;
            border: none;
            font-size: 1.25rem;
            cursor: pointer;
            padding: 0;
            margin-left: 0.75rem;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 576px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .btn-add-product {
                margin-top: 1rem;
            }
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
            flex: 1;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
            color: white;
        }
    </style>
</head>

<body>
    <?php include 'app/views/shares/header.php'; ?>

    <!-- Top Header -->
    <div class="container top-header">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-3 col-6">
                <a href="/webbanhangrestful/product/" class="d-block text-decoration-none">
                </a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h1 class="mb-4">Danh sách sản phẩm</h1>

        <div class="mb-4">
            <form method="GET" action="/webbanhangrestful/product/search" class="row g-2">
                <div class="col-md-4">
                    <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm sản phẩm..." value="<?php echo isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                </div>
                <div class="col-md-3">
                    <select name="category" class="form-select">
                        <option value="">Tất cả danh mục</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>" <?php echo (isset($_GET['category']) && $_GET['category'] == $category->id) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($category->name); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Lọc sản phẩm</button>
                </div>
            </form>
        </div>


        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0">Danh sách sản phẩm</h2>
                <a href="/webbanhangrestful/Product/add" class="btn btn-add-product">
                    <i class="fas fa-plus"></i> Thêm sản phẩm mới
                </a>
            </div>

            <div id="loading-spinner" class="loading-spinner">
                <div class="spinner"></div>
            </div>

            <div id="product-container" class="product-grid" style="display: none;">
                <!-- Products will be loaded here -->
            </div>

            <div id="empty-state" class="empty-state" style="display: none;">
                <div class="empty-state-icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <h3 class="empty-state-title">Không có sản phẩm nào</h3>
                <p class="empty-state-description">Hãy thêm sản phẩm mới để bắt đầu.</p>
                <a href="/webbanhangrestful/Product/add" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i> Thêm sản phẩm mới
                </a>
            </div>
        </div>

        <div id="toast-container" class="toast-container"></div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const token = localStorage.getItem('jwtToken');
                if (!token) {
                    alert('Vui lòng đăng nhập');
                    location.href = '/webbanhangrestful/account/login'; // Điều hướng đến trang đăng nhập
                    return;
                }

                const loadingSpinner = document.getElementById('loading-spinner');
                const productContainer = document.getElementById('product-container');
                const emptyState = document.getElementById('empty-state');

                // Function to format currency
                function formatCurrency(amount) {
                    return new Intl.NumberFormat('vi-VN', {
                        style: 'currency',
                        currency: 'VND',
                        minimumFractionDigits: 0
                    }).format(amount);
                }

                // Function to show toast notification
                function showToast(message, type = 'success') {
                    const toastContainer = document.getElementById('toast-container');
                    const toast = document.createElement('div');
                    toast.className = `toast ${type}`;

                    const title = type === 'success' ? 'Thành công' : 'Lỗi';
                    const icon = type === 'success' ? 'check-circle' : 'exclamation-circle';

                    toast.innerHTML = `
                    <div class="toast-icon ${type}">
                        <i class="fas fa-${icon}"></i>
                    </div>
                    <div class="toast-content">
                        <div class="toast-title">${title}</div>
                        <div class="toast-message">${message}</div>
                    </div>
                    <button class="toast-close">&times;</button>
                `;

                    toastContainer.appendChild(toast);

                    // Add event listener to close button
                    toast.querySelector('.toast-close').addEventListener('click', function() {
                        toast.remove();
                    });

                    // Auto remove after 5 seconds
                    setTimeout(() => {
                        toast.remove();
                    }, 5000);
                }

                // Function to delete a product
                function deleteProduct(id) {
                    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')) {
                        fetch(`/webbanhangrestful/api/product/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Authorization': 'Bearer ' + token
                                }
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.message === 'Product deleted successfully') {
                                    showToast('Sản phẩm đã được xóa thành công');
                                    // Remove the product from the DOM
                                    const productElement = document.getElementById(`product-${id}`);
                                    if (productElement) {
                                        productElement.remove();
                                    }

                                    // Check if there are no more products
                                    if (productContainer.children.length === 0) {
                                        productContainer.style.display = 'none';
                                        emptyState.style.display = 'block';
                                    }
                                } else {
                                    showToast('Xóa sản phẩm thất bại', 'error');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                showToast('Đã xảy ra lỗi khi xóa sản phẩm', 'error');
                            });
                    }
                }

                // Function to add product to cart
                function addToCart(id, name, price) {
                    // Get existing cart from localStorage or initialize empty array
                    let cart = JSON.parse(localStorage.getItem('cart')) || [];

                    // Check if product already exists in cart
                    const existingProductIndex = cart.findIndex(item => item.id === id);

                    if (existingProductIndex !== -1) {
                        // If product exists, increment quantity
                        cart[existingProductIndex].quantity += 1;
                    } else {
                        // If product doesn't exist, add it with quantity 1
                        cart.push({
                            id: id,
                            name: name,
                            price: price,
                            quantity: 1
                        });
                    }

                    // Save updated cart to localStorage
                    localStorage.setItem('cart', JSON.stringify(cart));

                    // Show success message
                    showToast(`Đã thêm "${name}" vào giỏ hàng`);
                }

                // Fetch products from API with JWT authentication
                fetch('/webbanhangrestful/api/product', {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Hide loading spinner
                        loadingSpinner.style.display = 'none';

                        if (data.length === 0) {
                            // Show empty state if no products
                            emptyState.style.display = 'block';
                        } else {
                            // Show product container and populate with products
                            productContainer.style.display = 'grid';

                            data.forEach(product => {
                                const productCard = document.createElement('div');
                                productCard.className = 'product-card';
                                productCard.id = `product-${product.id}`;

                                // Use a placeholder image if no image is available
                                const imageSrc = product.image ?
                                    `/webbanhangrestful/${product.image}` :
                                    'https://via.placeholder.com/300x200?text=No+Image';

                                productCard.innerHTML = `
                                <div class="product-image">
                                    <img src="${imageSrc}" alt="${product.name}">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title">
                                        <a href="/webbanhangrestful/Product/show/${product.id}">${product.name}</a>
                                    </h3>
                                    <p class="product-description">${product.description}</p>
                                    <div class="product-meta">
                                        <div class="product-price">${formatCurrency(product.price)}</div>
                                        <div class="product-category">${product.category_name}</div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="/webbanhangrestful/Product/edit/${product.id}" class="btn btn-edit">
                                            <i class="fas fa-edit me-1"></i> Sửa
                                        </a>
                                        <button class="btn btn-delete" onclick="deleteProduct(${product.id})">
                                            <i class="fas fa-trash me-1"></i> Xóa
                                        </button>
                                    </div>
                                    <div class="mt-2">
                                        <button href="/webbanhangrestful/product/addToCart/${product.id}" class="btn btn-primary w-100">
                                            <i class="fas fa-shopping-cart me-1"></i> Thêm vào giỏ
                                        </button>
                                    </div>
                                </div>
                            `;

                                productContainer.appendChild(productCard);
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        loadingSpinner.style.display = 'none';
                        showToast('Đã xảy ra lỗi khi tải danh sách sản phẩm', 'error');
                    });

                // Make deleteProduct function available globally
                window.deleteProduct = deleteProduct;
                window.addToCart = addToCart;
            });
        </script>

        <?php include 'app/views/shares/footer.php'; ?>
</body>

</html>
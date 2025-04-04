<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-white border-bottom border-3" style="border-color: #e75e8d !important;">
                    <h1 class="text-center my-3" style="color: #e75e8d;">Thêm sản phẩm mới</h1>
                </div>
                <div class="card-body p-4">
                    <form id="add-product-form">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-4">
                                    <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-lg border-0 shadow-sm" placeholder="Nhập tên sản phẩm">
                                </div>

                                <div class="form-group mb-4">
                                    <label for="description" class="form-label fw-bold">Mô tả:</label>
                                    <textarea id="description" name="description" class="form-control border-0 shadow-sm" rows="5" placeholder="Nhập mô tả sản phẩm"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="price" class="form-label fw-bold">Giá:</label>
                                            <div class="input-group">
                                                <span class="input-group-text border-0 bg-light">₫</span>
                                                <input type="number" id="price" name="price" class="form-control border-0 shadow-sm" step="0.01" placeholder="Nhập giá sản phẩm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="category_id" class="form-label fw-bold">Danh mục:</label>
                                            <select id="category_id" name="category_id" class="form-select border-0 shadow-sm">
                                                <option value="" selected disabled>Chọn danh mục</option>
                                                <!-- Các danh mục sẽ được tải từ API và hiển thị tại đây -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label for="image" class="form-label fw-bold">Hình ảnh:</label>
                                    <div class="image-upload-container text-center">
                                        <div class="image-preview mb-3" id="imagePreview">
                                            <img src="/webbanhangrestful/public/images/placeholder-image.jpg" alt="Preview" id="preview-image" class="img-fluid rounded shadow-sm" style="max-height: 200px; width: auto;">
                                        </div>
                                        <div class="upload-btn-wrapper">
                                            <button class="btn btn-outline-secondary mb-2" type="button" onclick="document.getElementById('image').click()">Chọn hình ảnh</button>
                                            <input type="file" id="image" name="image" class="form-control d-none" accept="image/*" onchange="previewImage(this);">
                                        </div>
                                        <small class="text-muted d-block">Hỗ trợ định dạng: JPG, PNG, GIF.<br>Kích thước tối đa: 2MB</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="/webbanhangrestful/Product/list" class="btn btn-light shadow-sm px-4">
                                <i class="bi bi-arrow-left me-2"></i>Quay lại
                            </a>
                            <button type="submit" class="btn px-4 text-white shadow-sm" style="background-color: #e75e8d;">
                                <i class="bi bi-plus-circle me-2"></i>Thêm sản phẩm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>

<style>
    body {
        background-color: #f8f9fa;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #e75e8d;
        box-shadow: 0 0 0 0.25rem rgba(231, 94, 141, 0.25);
    }

    .btn:hover {
        opacity: 0.9;
    }

    .image-upload-container {
        border: 2px dashed #dee2e6;
        padding: 20px;
        border-radius: 8px;
        background-color: #f8f9fa;
        transition: all 0.3s;
    }

    .image-upload-container:hover {
        border-color: #e75e8d;
    }

    label.form-label {
        color: #444;
        margin-bottom: 8px;
    }

    .card {
        overflow: hidden;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy danh sách danh mục từ API và hiển thị trong dropdown
        fetch('/webbanhangrestful/api/category')
            .then(response => response.json())
            .then(data => {
                const categorySelect = document.getElementById('category_id');
                data.forEach(category => {
                    const option = document.createElement('option');
                    option.value = category.id;
                    option.textContent = category.name;
                    categorySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error loading categories:', error);
            });

        // Thêm hàm xem trước hình ảnh
        window.previewImage = function(input) {
            const preview = document.getElementById('preview-image');
            const container = document.querySelector('.image-upload-container');

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    container.style.borderColor = '#e75e8d';
                }
                reader.readAsDataURL(input.files[0]);
            }
        };

        // Xử lý sự kiện submit form thêm sản phẩm
        document.getElementById('add-product-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Hiển thị loading
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Đang xử lý...';
            submitBtn.disabled = true;

            // Sử dụng FormData trực tiếp để gửi dữ liệu form bao gồm file
            const formData = new FormData(this);

            // Gửi formData trực tiếp, không chuyển đổi thành JSON
            fetch('/webbanhangrestful/api/product', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Raw response:', data);
                    if (data.message === 'Product created successfully') {
                        // Hiển thị thông báo thành công
                        showToast('Thêm sản phẩm thành công!', 'success');
                        setTimeout(() => {
                            location.href = '/webbanhangrestful/Product';
                        }, 1500);
                    } else {
                        showToast('Thêm sản phẩm thất bại: ' + (data.errors ? JSON.stringify(data.errors) : ''), 'error');
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showToast('Lỗi: Không thể kết nối đến máy chủ hoặc xử lý phản hồi.', 'error');
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                });
        });

        // Hàm hiển thị thông báo
        function showToast(message, type = 'info') {
            // Kiểm tra xem đã có toast container chưa
            let toastContainer = document.querySelector('.toast-container');
            if (!toastContainer) {
                toastContainer = document.createElement('div');
                toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
                document.body.appendChild(toastContainer);
            }

            // Tạo toast
            const toastEl = document.createElement('div');
            toastEl.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : type === 'error' ? 'danger' : 'info'} border-0`;
            toastEl.setAttribute('role', 'alert');
            toastEl.setAttribute('aria-live', 'assertive');
            toastEl.setAttribute('aria-atomic', 'true');

            toastEl.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            `;

            toastContainer.appendChild(toastEl);

            // Hiển thị toast
            const toast = new bootstrap.Toast(toastEl, {
                delay: 5000
            });
            toast.show();

            // Xóa toast sau khi ẩn
            toastEl.addEventListener('hidden.bs.toast', function() {
                toastEl.remove();
            });
        }
    });
</script>
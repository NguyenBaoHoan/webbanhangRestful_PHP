<?php include 'app/views/shares/header.php'; ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-header bg-white border-bottom border-3" style="border-color: #e75e8d !important;">
                    <h1 class="text-center my-3" style="color: #e75e8d;">Sửa sản phẩm</h1>
                </div>
                <div class="card-body p-4">
                    <form id="edit-product-form">
                        <input type="hidden" id="id" name="id">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-4">
                                    <label for="name" class="form-label fw-bold">Tên sản phẩm:</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-lg border-0 shadow-sm" placeholder="Nhập tên sản phẩm" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="description" class="form-label fw-bold">Mô tả:</label>
                                    <textarea id="description" name="description" class="form-control border-0 shadow-sm" rows="5" placeholder="Nhập mô tả sản phẩm" required></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="price" class="form-label fw-bold">Giá:</label>
                                            <div class="input-group">
                                                <span class="input-group-text border-0 bg-light">₫</span>
                                                <input type="number" id="price" name="price" class="form-control border-0 shadow-sm" step="0.01" placeholder="Nhập giá sản phẩm" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="category_id" class="form-label fw-bold">Danh mục:</label>
                                            <select id="category_id" name="category_id" class="form-select border-0 shadow-sm" required>
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
                            <a href="/webbanhangrestful/Product" class="btn btn-light shadow-sm px-4">
                                <i class="bi bi-arrow-left me-2"></i>Quay lại
                            </a>
                            <button type="submit" class="btn px-4 text-white shadow-sm" style="background-color: #e75e8d;">
                                <i class="bi bi-save me-2"></i>Lưu thay đổi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>

<script>
    // Hàm xem trước ảnh khi chọn file mới
    window.previewImage = function(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy ID sản phẩm từ URL thay vì dựa vào biến PHP không tồn tại
        let productId;

        // Phương pháp 1: Lấy từ URL hiện tại
        const urlPaths = window.location.pathname.split('/');
        const editIndex = urlPaths.findIndex(path => path.toLowerCase() === 'edit');
        if (editIndex !== -1 && editIndex + 1 < urlPaths.length) {
            productId = parseInt(urlPaths[editIndex + 1]);
        }

        // Phương pháp 2: Fallback - lấy từ query string
        if (!productId || isNaN(productId)) {
            const urlParams = new URLSearchParams(window.location.search);
            const idParam = urlParams.get('id');
            if (idParam) {
                productId = parseInt(idParam);
            }
        }

        // Kiểm tra nếu không có ID hợp lệ
        if (!productId || isNaN(productId)) {
            console.error('Không tìm thấy ID sản phẩm');
            alert('Không thể xác định sản phẩm cần chỉnh sửa. Vui lòng quay lại trang danh sách.');
            window.location.href = '/webbanhangrestful/Product/list';
            return;
        }

        const baseUrl = '/webbanhangrestful';
        console.log(`Đang tải thông tin sản phẩm ID: ${productId}`);

        // Lấy thông tin sản phẩm
        fetch(`${baseUrl}/api/product/${productId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`API error: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Dữ liệu sản phẩm:', data);

                // Điền thông tin vào form
                document.getElementById('id').value = data.id;
                document.getElementById('name').value = data.name;
                document.getElementById('description').value = data.description;
                document.getElementById('price').value = data.price;

                // Cập nhật hình ảnh sản phẩm
                if (data.image) {
                    document.getElementById('preview-image').src = `${baseUrl}/${data.image}`;
                }

                // Lưu category_id để chọn sau khi load danh sách
                const categoryId = data.category_id;

                // Tải danh sách danh mục
                return fetch(`${baseUrl}/api/category`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Không thể tải danh sách danh mục');
                        }
                        return response.json();
                    })
                    .then(categories => {
                        const categorySelect = document.getElementById('category_id');

                        // Xóa tất cả option cũ trừ option mặc định đầu tiên
                        while (categorySelect.options.length > 1) {
                            categorySelect.remove(1);
                        }

                        // Thêm các option mới
                        categories.forEach(category => {
                            const option = document.createElement('option');
                            option.value = category.id;
                            option.textContent = category.name;
                            categorySelect.appendChild(option);
                        });

                        // Chọn đúng danh mục của sản phẩm
                        if (categoryId) {
                            categorySelect.value = categoryId;
                        }
                    });
            })
            .catch(error => {
                console.error('Lỗi:', error);
                alert(`Không thể tải thông tin sản phẩm: ${error.message}`);
            });


        // Xử lý khi submit form
        document.getElementById('edit-product-form').addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(this);
                const productId = formData.get('id');
                const imageFile = document.getElementById('image').files[0];

                // Kiểm tra xem có file ảnh mới được chọn không
                if (imageFile) {
                    // Có file ảnh mới - Sử dụng FormData để gửi dữ liệu dạng multipart/form-data
                    fetch(`${baseUrl}/api/product/${productId}`, {
                            method: 'POST', // Đảm bảo server xử lý đúng phương thức
                            body: formData
                        })
                        .then(handleResponse)
                        .catch(handleError);
                } else {
                    // Không có file ảnh mới - Sử dụng JSON để gửi dữ liệu
                    const jsonData = {
                        name: formData.get('name'),
                        description: formData.get('description'),
                        price: formData.get('price'),
                        category_id: formData.get('category_id')
                    };

                    fetch(`${baseUrl}/api/product/${productId}`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(jsonData)
                        })
                        .then(handleResponse)
                        .catch(handleError);
                }

                function handleResponse(response) {
                    if (!response.ok) {
                        return response.json().then(err => Promise.reject(err));
                    }
                    return response.json();
                }

                function handleError(error) {
                    console.error('Lỗi cập nhật:', error);
                    alert(`Cập nhật sản phẩm thất bại: ${error.message || 'Có lỗi xảy ra, vui lòng thử lại'}`);
                }
            })
            .then(data => {
                if (data && data.message === 'Product updated successfully') {
                    alert('Cập nhật sản phẩm thành công!');
                    window.location.href = `${baseUrl}/Product`;
                } else {
                    alert(`Cập nhật thất bại: ${data ? data.message : 'Lỗi không xác định'}`);
                }
            });
    });
</script>
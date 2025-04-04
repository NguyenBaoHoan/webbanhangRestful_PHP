<?php include 'app/views/shares/header.php'; ?> 

<div class="container mt-5">
    <h2 class="text-center mb-4">Đăng ký tài khoản</h2>

    <?php if (isset($errors) && !empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $err): ?>
                    <li><?php echo htmlspecialchars($err, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="card shadow-lg p-4">
        <form action="/webbanhangrestful/account/save" method="post">
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nhập username">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="fullname">Họ và tên</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập fullname">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Nhập password">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="confirmpassword">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Nhập lại mật khẩu">
                </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary px-5 py-2">Đăng ký</button>
            </div>
        </form>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?> 

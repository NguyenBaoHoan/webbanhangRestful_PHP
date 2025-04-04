<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý sản phẩm</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
    }

    /* Testimonial Section */
    .testimonial-section {
      padding: 60px 0;
      text-align: center;
    }

    .testimonial-section h2 {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 40px;
      color: #333;
    }

    .testimonial-card {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin: 0 auto;
      max-width: 900px;
      position: relative;
      text-align: left;
    }

    .testimonial-name {
      color: #e75e8d;
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .testimonial-subtitle {
      color: #999;
      font-size: 14px;
      margin-bottom: 15px;
    }

    .testimonial-text {
      color: #333;
      line-height: 1.6;
    }

    .testimonial-quote {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 36px;
      color: #333;
    }

    .testimonial-nav {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      background-color: #e75e8d;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .testimonial-nav:hover {
      background-color: #d44d7c;
    }

    .testimonial-prev {
      left: -25px;
    }

    .testimonial-next {
      right: -25px;
    }

    /* Footer Section */
    .footer {
      background-color: #2a2a2a;
      color: #fff;
      padding: 60px 0 20px;
    }

    .footer h4 {
      color: #fff;
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 25px;
    }

    .footer p {
      color: #ccc;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    .footer-social {
      text-align: center;
      margin-bottom: 40px;
    }

    .footer-social a {
      display: inline-block;
      margin: 0 10px;
      color: #fff;
      font-size: 20px;
      transition: all 0.3s ease;
    }

    .footer-social a:hover {
      color: #e75e8d;
    }

    .footer-input {
      width: 100%;
      padding: 10px 15px;
      border: none;
      margin-bottom: 15px;
    }

    .footer-btn {
      background-color: #e75e8d;
      color: white;
      border: none;
      padding: 10px 20px;
      width: 100%;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .footer-btn:hover {
      background-color: #d44d7c;
    }

    .footer-contact i {
      margin-right: 10px;
      color: #e75e8d;
    }

    .footer-divider {
      height: 1px;
      background-color: #444;
      margin: 30px 0;
    }

    .footer-copyright {
      text-align: center;
      color: #ccc;
      font-size: 14px;
      padding: 15px 0;
    }

    /* Improved Styles */
    .btn-primary {
      background-color: #e75e8d;
      border-color: #e75e8d;
    }

    .btn-primary:hover {
      background-color: #d44d7c;
      border-color: #d44d7c;
    }

    .text-primary {
      color: #e75e8d !important;
    }

    .btn-outline-primary {
      color: #e75e8d;
      border-color: #e75e8d;
    }

    .btn-outline-primary:hover {
      background-color: #e75e8d;
      border-color: #e75e8d;
    }
  </style>
</head>

<body>
  <!-- Testimonial Section -->
  <section class="testimonial-section" id="testimonial">
    <div class="container">
      <h2>ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
      <div class="testimonial-card">
        <div class="testimonial-name">Nguyễn Văn An</div>
        <div class="testimonial-subtitle">Khách hàng thân thiết</div>
        <p class="testimonial-text">
          Tôi rất hài lòng với dịch vụ và sản phẩm của cửa hàng. Nhân viên phục vụ nhiệt tình, chu đáo và sản phẩm có chất lượng tuyệt vời. 
          Không gian cửa hàng thoáng mát, sạch sẽ và trang trí rất đẹp. Tôi sẽ quay lại và giới thiệu cho bạn bè của mình. 
          Đây thực sự là một trải nghiệm tuyệt vời mà tôi đã có khi đến đây.
        </p>
        <div class="testimonial-quote">
          <i class="fas fa-quote-right"></i>
        </div>
        <div class="testimonial-nav testimonial-prev">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="testimonial-nav testimonial-next">
          <i class="fas fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Start -->
  <div class="container-fluid pt-5" id="contact">
    <div class="container">
      <div class="section-title">
        <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Liên Hệ</h4>
        <h1 class="display-4">Hãy Liên Hệ Với Chúng Tôi</h1>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-5">
          <div class="contact-form">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="form-row">
                <div class="control-group col-sm-6">
                  <input type="text" class="form-control p-4" id="name" placeholder="Họ và tên" required="required" data-validation-required-message="Vui lòng nhập tên của bạn" />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group col-sm-6">
                  <input type="email" class="form-control p-4" id="email" placeholder="Email của bạn" required="required" data-validation-required-message="Vui lòng nhập email của bạn" />
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <input type="text" class="form-control p-4" id="subject" placeholder="Tiêu đề" required="required" data-validation-required-message="Vui lòng nhập tiêu đề" />
                <p class="help-block text-danger"></p>
              </div>
              <div class="control-group">
                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Nội dung tin nhắn" required="required" data-validation-required-message="Vui lòng nhập nội dung tin nhắn"></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div>
                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Gửi Tin Nhắn</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 mb-5">
          <p><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Đường Lê Lợi, Quận 1, TP. Hồ Chí Minh</p>
          <p><i class="fa fa-phone-alt text-primary mr-3"></i>+84 123 456 789</p>
          <p><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
          <div class="d-flex justify-content-start mt-4">
            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <div class="container mt-4">
    <!-- Your content goes here -->
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <!-- Social Media Icons -->
      <div class="footer-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>

      <div class="row">
        <!-- About Us Column -->
        <div class="col-md-3 col-sm-6 mb-4">
          <h4>VỀ CHÚNG TÔI</h4>
          <p>Chúng tôi là một cửa hàng chuyên cung cấp các sản phẩm chất lượng cao với giá cả hợp lý. Với hơn 10 năm kinh nghiệm, chúng tôi cam kết mang đến cho khách hàng những trải nghiệm mua sắm tuyệt vời nhất.</p>
        </div>

        <!-- Newsletter Column -->
        <div class="col-md-3 col-sm-6 mb-4">
          <h4>Đăng Ký Nhận Tin</h4>
          <input type="email" class="footer-input" placeholder="Nhập email của bạn">
          <button class="footer-btn">ĐĂNG KÝ</button>
        </div>

        <!-- Need Help Column -->
        <div class="col-md-3 col-sm-6 mb-4">
          <h4>HỖ TRỢ</h4>
          <p>Nếu bạn cần hỗ trợ hoặc có bất kỳ thắc mắc nào, vui lòng liên hệ với chúng tôi qua số điện thoại hoặc email được cung cấp. Đội ngũ nhân viên của chúng tôi luôn sẵn sàng phục vụ bạn.</p>
        </div>

        <!-- Contact Us Column -->
        <div class="col-md-3 col-sm-6 mb-4">
          <h4>LIÊN HỆ</h4>
          <p><i class="fas fa-map-marker-alt"></i> 123 Đường Lê Lợi, Quận 1, TP. Hồ Chí Minh</p>
          <p><i class="fas fa-phone-alt"></i> +84 123 456 789</p>
          <p><i class="fas fa-envelope"></i> info@example.com</p>
        </div>
      </div>

      <div class="footer-divider"></div>

      <!-- Copyright -->
      <div class="footer-copyright">
        © 2025 Bản quyền thuộc về Cửa hàng của chúng tôi
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Simple testimonial slider functionality
    $(document).ready(function() {
      // Dữ liệu đánh giá mẫu
      const testimonials = [
        {
          name: "Nguyễn Văn An",
          subtitle: "Khách hàng thân thiết",
          text: "Tôi rất hài lòng với dịch vụ và sản phẩm của cửa hàng. Nhân viên phục vụ nhiệt tình, chu đáo và sản phẩm có chất lượng tuyệt vời. Không gian cửa hàng thoáng mát, sạch sẽ và trang trí rất đẹp. Tôi sẽ quay lại và giới thiệu cho bạn bè của mình."
        },
        {
          name: "Trần Thị Bình",
          subtitle: "Khách hàng mới",
          text: "Đây là lần đầu tiên tôi đến cửa hàng và tôi thực sự ấn tượng với chất lượng sản phẩm và dịch vụ. Nhân viên rất thân thiện và nhiệt tình giúp đỡ. Tôi chắc chắn sẽ quay lại trong tương lai."
        },
        {
          name: "Lê Văn Cường",
          subtitle: "Khách hàng VIP",
          text: "Tôi đã là khách hàng của cửa hàng trong nhiều năm và luôn hài lòng với trải nghiệm mua sắm tại đây. Sản phẩm luôn đảm bảo chất lượng và dịch vụ khách hàng thì tuyệt vời. Đây là nơi tôi tin tưởng nhất để mua sắm."
        }
      ];
      
      let currentIndex = 0;
      
      function updateTestimonial() {
        const current = testimonials[currentIndex];
        $('.testimonial-name').text(current.name);
        $('.testimonial-subtitle').text(current.subtitle);
        $('.testimonial-text').text(current.text);
      }
      
      $('.testimonial-next').click(function() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial();
      });
      
      $('.testimonial-prev').click(function() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
      });
    });
  </script>
</body>

</html>
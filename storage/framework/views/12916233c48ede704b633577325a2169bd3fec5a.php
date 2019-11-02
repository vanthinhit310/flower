<div class="container inner2">
  <div class="thin">
    <div class="section-title text-center bm20">
      <h3>Liên hệ với chúng tôi</h3>
    </div>
    <p class="text-center"><?php echo e(config('general.contact_des'), false); ?></p>
    <ul class="contact-info text-center">
      <li><i class="icon-location"></i><?php echo e(config('general.address'), false); ?></li>
      <li><i class="icon-phone"></i><?php echo e(config('general.phone'), false); ?></li>
      <li><i class="icon-mail"></i><a href="<?php echo e(config('general.email'), false); ?>"><?php echo e(config('general.email'), false); ?></a></li>
    </ul>
    <div class="divide30"></div>
    <div class="form-container">
      <form action="" method="post" class="vanilla vanilla-form" novalidate="novalidate">
        <?php echo csrf_field(); ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-field">
              <label>
                <input type="text" name="name" placeholder="Tên của bạn" required="required">
              </label>
            </div>
            <!--/.form-field -->
          </div>
          <!--/column -->
          <div class="col-sm-6">
            <div class="form-field">
              <label>
                <input type="email" name="email" placeholder="Email" required="required">
              </label>
            </div>
            <!--/.form-field -->
          </div>
          <!--/column -->
          <div class="col-sm-6">
            <div class="form-field">
              <label>
                <input type="tel" name="tel" placeholder="Số điện thoại">
              </label>
            </div>
            <!--/.form-field -->
          </div>

          <div class="col-sm-12">
            <textarea name="message" placeholder="Nhập nội dung bạn muốn gửi tại đây..." required="required"></textarea>
            <input type="submit" class="btn" value="Gửi" data-error="Bạn chưa nhập đủ thông tin" data-processing="Sending..." data-success="Thank you!">
            <footer class="notification-box"></footer>
          </div>
          <!--/column -->

        </div>
        <!--/.row -->

      </form>
      <!--/.vanilla-form -->
    </div>
    <!--/.form-container -->

  </div>
  <!--/.thin -->
</div>
<?php /**PATH C:\xampp\htdocs\flower\resources\views/page/partials/contact.blade.php ENDPATH**/ ?>
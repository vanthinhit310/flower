<footer class="footer inverse-wrapper">
  <div class="container inner2">
    <div class="row">
      <div class="col-sm-4">
        <div class="widget"><img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt=""/>
          <div class="divide20"></div>
          <p>Cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi. Đối với chúng tôi niềm vui của khách hàng là động lực giúp chúng tôi ngày càng phát triển hơn.</p>
          <ul class="social naked">
            <li><a href="#"><i class="icon-s-rss"></i></a></li>
            <li><a href="#"><i class="icon-s-twitter"></i></a></li>
            <li><a href="#"><i class="icon-s-facebook"></i></a></li>
            <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
            <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-s-forrst"></i></a></li>
          </ul>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /column -->

      <div class="col-sm-4">
        <div class="widget">
          <h4 class="widget-title">Thông tin liên hệ</h4>
          <address>
            <strong><?php echo e(config('general.site_name'), false); ?></strong><br>
            <?php echo e(config('general.address'), false); ?><br>
            <abbr title="Phone">Phone:</abbr> <?php echo e(config('general.phone'), false); ?> <br>
            <abbr title="Email">Email:</abbr> <a href="mailto:<?php echo e(config('general.email'), false); ?>"><?php echo e(config('general.email'), false); ?></a>
          </address>
        </div>
      </div>
      <!-- /column -->

      <div class="col-sm-4">

        <!-- /.widget -->
        <div class="widget">
          <h4 class="widget-title">Đăng kí nhận thông tin</h4>
          <div class="newsletter-wrapper">
            <div id="mc_embed_signup2" class="newsletter-form">
              <form action="" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                <?php echo csrf_field(); ?>
                <input type="email" value="" name="email" class="email" id="mce-EMAIL2" placeholder="Nhập email của bạn" required="">
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;">
                  <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" value="">
                </div>
                <div class="clear">
                  <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn">
                </div>
              </form>
            </div>
            <!-- /#mc_embed_signup2 -->
          </div>
          <!-- /.newsletter-wrapper -->
        </div>
        <!-- /.widget -->

      </div>
      <!-- /column -->


    </div>
    <!-- /.row -->

  </div>
</footer>
<?php /**PATH C:\xampp\htdocs\flower\resources\views/page/partials/footer.blade.php ENDPATH**/ ?>
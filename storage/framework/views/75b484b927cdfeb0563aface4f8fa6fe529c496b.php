<?php for($i = 0; $i < 10; $i++): ?>
  <?php if($i%2 == 0): ?>
    <div class="container inner2">
      <div class="row">
        <aside class="col-md-4 sidebar">
          <h2 class="post-title bm10">Featured Post</h2>
          <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <ul class="item-details">
            <li><strong>Date:</strong> 02 May 2013</li>
            <li><strong>Categories:</strong> Illustration, Branding</li>
            <li><strong>Client:</strong> Sit Commodo Sollicitudin</li>
          </ul>
          <a href="#" class="btn">See Project</a></aside>
        <div class="col-md-8">
          <div class="post-gallery bm0">
            <div class="basic-slider">
              <div class="item"><img src="style/images/art/pp2-1.jpg" alt=""/></div>
              <div class="item"><img src="style/images/art/pp2-2.jpg" alt=""/></div>
              <div class="item"><img src="style/images/art/pp2-3.jpg" alt=""/></div>
            </div>
            <!-- /.basic-slider -->
          </div>
          <!-- /.post-gallery -->

        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="container inner2">
      <div class="row">
        <div class="col-md-8">
          <div class="post-gallery bm0">
            <div class="basic-slider">
              <div class="item"><img src="style/images/art/pp2-1.jpg" alt=""/></div>
              <div class="item"><img src="style/images/art/pp2-2.jpg" alt=""/></div>
              <div class="item"><img src="style/images/art/pp2-3.jpg" alt=""/></div>
            </div>
            <!-- /.basic-slider -->
          </div>
          <!-- /.post-gallery -->

        </div>
        <!-- /column -->
        <aside class="col-md-4 sidebar">
          <h2 class="post-title bm10">Featured Post</h2>
          <p>Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <ul class="item-details">
            <li><strong>Date:</strong> 02 May 2013</li>
            <li><strong>Categories:</strong> Illustration, Branding</li>
            <li><strong>Client:</strong> Sit Commodo Sollicitudin</li>
          </ul>
          <a href="#" class="btn">See Project</a></aside>
        <!-- /.sidebar -->
      </div>
      <!-- /.row -->
    </div>
  <?php endif; ?>
<?php endfor; ?>
<?php /**PATH C:\xampp\htdocs\flower\resources\views/page/partials/product.blade.php ENDPATH**/ ?>
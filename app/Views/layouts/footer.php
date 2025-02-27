  <div class="position-relative">
    <div class="shape overflow-hidden bg-footer">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>

  <!-- start footer -->
  <footer class="footer">
    <div class="container">

      <!-- end row -->
    </div>
    <!-- end container -->
  </footer>
  <!-- end footer -->

  <!-- start footer alter -->
  <div class="footer-alt">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>
            &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            Created By <i class="las la-heart text-danger"></i> by
            Vishwas Shivsamb
          </p>
        </div>

      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end footer alter -->

  <!-- Style switcher -->
  <div id="style-switcher" onclick="toggleSwitcher()">
    <div>
      <h3 class="fw-medium mb-0">Select Your Choice</h3>
      <hr class="hr-dashed my-3" />
      <ul class="pattern">
        <li>
          <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
        </li>
        <li>
          <a class="color2" href="javascript: void(0);" onclick="setColor('info')"></a>
        </li>
        <li>
          <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
        </li>
        <li>
          <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
        </li>
        <li>
          <a class="color5" href="javascript: void(0);" onclick="setColor('purple')"></a>
        </li>
        <li>
          <a class="color6" href="javascript: void(0);" onclick="setColor('success')"></a>
        </li>
      </ul>
    </div>
    <div class="bottom">
      <a href="javascript: void(0);" class="settings rounded-end"><i class="las la-paint-brush fs-22"></i></a>
    </div>
  </div>
  <!-- end Style switcher -->
  <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>

  <!-- feather icon -->
  <script src="<?= base_url('assets/') ?>js/feather.js"></script>
  <script src="<?= base_url('assets/') ?>js/shuffle.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/projects.init.js"></script>
  <script src="<?= base_url('assets/') ?>js/typed.js"></script>

  <script src="<?= base_url('assets/') ?>js/app.js"></script>\
  <!-- Iconify CDN -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  </body>

  <!-- end body -->


  </html>
  <!-- end html -->
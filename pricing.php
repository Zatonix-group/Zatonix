<!DOCTYPE HTML>
<html lang="en-US">

<?php include 'includes/head.php' ?>

<body>


    <!-- header start -->
    <?php include 'includes/header.php' ?>
    <!-- header end  -->

    <div class="container body py-5 my-5">
    <div class="content">
      <h2 class="pricing-heading">Pricing</h2>
      <p class="pricing-para" >Use our easy tool to add your sales numbers and see how much return on investment (ROI)
        you can get with Zatonix. Our pricing is fair and helps your business grow the best way possible.</p>
    </div>
    <div class="input-section">
      <div class="row">
        <div class="col-md-6 my-5">
          <div class="input-group mb-4">
            <label for="appointments">How many sales appointments do you need per month?</label>
            <input type="range" class="form-range" id="appointments" min="5" max="20" value="6"
              oninput="calculateOutput()">
            <span class="value-display" id="appointments-value">6</span>
          </div>
        </div>
      <div class="col-md-6 my-5">
        <div class="input-group mb-4">
          <label for="conversion-rate">What is your average conversion rate from appointment to paying client?</label>
          <input class="form-range" type="range" id="conversion-rate" min="5" max="50" value="7"
            oninput="calculateOutput()">
          <span class="value-display" id="conversion-rate-value">7%</span>
        </div>
      </div>
    <div class="col-md-6 my-5">
      <div class="input-group mb-4">
        <label for="contract-value">What is your average annual contract value?</label>
        <input class="form-range" type="range" id="contract-value" min="1000" max="200000" value="39000"
          oninput="calculateOutput()">
        <span class="value-display" id="contract-value-value">$39,000</span>
      </div>
    </div>
    <div class="col-md-6 my-5">
      <div class="input-group mb-4">
        <label for="sales-cycle">What is your average sales cycle length?</label>
        <input class="form-range" type="range" id="sales-cycle" min="1" max="9" value="2" oninput="calculateOutput()">
        <span class="value-display" id="sales-cycle-value">2 mo</span>
      </div>
    </div>

  <div class="output-section result-display">
    <p>With <span id="output-appointments">6</span> appointments per month, you will close <span
        id="output-deals">0</span> deal per month, and create <span id="output-revenue">$140,000</span> in annual
      revenue.</p>
    <p>The average sales cycle length is <span id="output-sales-cycle">2 months</span>.</p>
    <p>Partnering with Martal Group will help you achieve <span id="output-roi">190%</span> ROI during the first 12
      months.</p>
  </div>
  </div>
  </div>
  <div class="book-btn">
    <div class="content">
      <p class="pricing-para">Discover how we arrived at these figures in detail and receive tailored suggestions just
        for you.</p>
    </div>
    <div class="btn">Book a Call</div>
  </div>


    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/wow.js"></script>

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="venobox/venobox.js"></script>

    <script src="assets/js/animated-text.js"></script>

    <script src="venobox/venobox.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/jquery.meanmenu.js"></script>

    <script src="assets/js/jquery.scrollUp.js"></script>

    <script src="assets/js/jquery.barfiller.js"></script>

    <script src="assets/js/dark-lite.js"></script>

    <script src="assets/js/scrollCue.min.js"></script>

    <script src="assets/js/theme.js"></script>

    <script src="assets/js/pricing.js"></script>

</body>

</html>
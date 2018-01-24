<footer>
  <div class="footer-row">
    <div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-about">
        <div class="logo">
          <a href="blog-detail-regular2.html">
            <img src="{{asset('images\logo\kampusfundlogowhite.png')}}">
          </a>
        </div>
        <div class="about-us">
          <p>
            Kampus Fund adalah platform peer to peer investasi atau crowdfunding untuk pengembangan usaha untuk kalangan wirausaha mahasiswa.
            Kampus Fund mempertemukan Investor yang mencari peluang usaha mahasiswa dan wirausaha mahasiswa yang mencari
            modal usaha berbasis syariah.
            <p>


        </div>


      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-link">

        <h3 class="under-line">
          HELP
          <div class="line"></div>
        </h3>
        <ul>
          <li>
            <a href="#">Support center</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
        </ul>
        <ul>
          <li>
            <a href="#">Careers</a>
          </li>
          <li>
            <a href="#">Become an Ambassador</a>
          </li>
          <li>
            <a href="#">Join a Developers</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-link">

        <h3 class="under-line">
          LEGALS
          <div class="line"></div>
        </h3>
        <ul>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
          <li>
            <a href="#">Terms & Conditions</a>
          </li>
          <li>
            <a href="#">© Commerzial 2017</a>
          </li>
        </ul>


      </div>
    </div>
  </div>
  <div class="footer-under">
    <div class="container">
      KampusFund © 2018. All Right Reserved.
      <br> Dibuat dengan
      <i class="fa fa-heart" style="font-size:14px;color:#c0392b;"></i> di Semarang
    </div>
  </div>
</footer>



<a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip"
  data-placement="left">
  <span class="glyphicon glyphicon-chevron-up"></span>
</a>

<!-- End of footer -->


<!-- Bootstrap core JavaScript
    ================================================== -->


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('libs/bootstrap.min.js')}}"></script>


<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>

<script src="{{asset('js/common.js')}}"></script>

<script>
  $(document).ready(function () {
    backToTop();
    checkNavbarScroll("home-2");
  });
</script>
<script type="text/javascript">
  var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 1000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) {
      delta /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function () {
      that.tick();
    }, delta);
  };

  window.onload = function () {
    var elements = document.getElementsByClassName('typewrite');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff;color:#fff;}";
    document.body.appendChild(css);
  };
</script>
</body>

</html>
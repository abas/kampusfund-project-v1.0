<aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="panel panel-default panel-noborder widget-features">
    <div class="panel-heading">
      Total Dana Usaha
    </div>
    <div class="panel-body">
      <ul>
        <li class="bigger">
          <div class="media">
            <div class="media-body">
              <h3 class="media-heading">
                <p>Rp 5.000.000,-</p>
              </h3>
              <div class="date">
                <i class="fa fa-clock-o"></i>  <a href="">5 hari lagi</a>
                <div class="repayment" ><i class="fa fa-calendar"></i>  <warna style="color:#007e6c;">Repayment Estimated </warna>12 Bulan</div>
              </div>
              <div style="padding-bottom:10px;"></div>
              <div class="progress" style="margin-bottom:0px !important;">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                  40% Complete (Funded)
                </div>
              </div>
              <div class="date">
                Raised Rp 2000.000,-
                <div class="repayment" > <warna style="color:#007e6c;">Still needs</warna> Rp 3.000.000</div>
              </div>
              <div style="padding-bottom:10px;"></div>
              <form id="form" method="post" action="">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input id="amount" name="amount" type="text" maxlength="15"class="form-control currency"  />
                </div>
              </form>
              <div style="padding-bottom:20px;"></div>
              <a href="" class="button-default">Danai</a>
              <a href="" class="button-default">Danai Sisa Usaha</a>
              <div style="padding-bottom:10px;"></div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="panel panel-default panel-noborder widget-features">
    <div class="panel-heading">
      Enterpreneur
    </div>
    <div class="panel-body">
      <ul>
        <li class="bigger">
          <div class="media">
            <div class="media-body">
              <div class="avatar">
                <img class="img-circle" src="assets/images/teams/team1.jpg">
              </div>
              <div style="padding-bottom:10px;"></div>
              <div class="description">
                <h4 class="location-name">Husein Indra Kusuma </h4>
                <h5 class="location-name">S1 Teknik Informatika </h5>
              </div>
              <div style="padding-bottom:10px;"></div>
              <div style="padding-bottom:20px;"></div>
              <a href="" class="button-default" style="margin:0px 30px;">Ajukan Unduh Proposal Bisnis</a>
              <div style="padding-bottom:10px;"></div>
              <div id="social-links" class=" col-lg-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-4 social-btn-holder">
                                    <a title="Instagram" class="btn btn-social btn-block btn-instagram" target="_BLANK" href="http://plus.google.com/+You/">
                                        <i class="fa fa-instagram"></i> +You
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-4  social-btn-holder">
                                    <a title="Linkedin" class="btn btn-social btn-block btn-linkedin" target="_BLANK" href="http://stackoverflow.com/users/youruserid/yourid">
                                        <i class="fa fa-linkedin"></i> /yourid
                                    </a>
                                </div>
                            </div>
                        </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</aside>
<script type="text/javascript">
(function($, undefined) {

  "use strict";

  // When ready.
  $(function() {

    var $form = $( "#form" );
    var $input = $form.find( "input" );

    $input.on( "keyup", function( event ) {


      // When user select text in the document, also abort.
      var selection = window.getSelection().toString();
      if ( selection !== '' ) {
        return;
      }

      // When the arrow keys are pressed, abort.
      if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
        return;
      }


      var $this = $( this );

      // Get the value.
      var input = $this.val();

      var input = input.replace(/[\D\s\._\-]+/g, "");
      input = input ? parseInt( input, 10 ) : 0;

      $this.val( function() {
        return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
      } );
    } );

    /**
    * ==================================
    * When Form Submitted
    * ==================================
    */
    $form.on( "submit", function( event ) {

      var $this = $( this );
      var arr = $this.serializeArray();

      for (var i = 0; i < arr.length; i++) {
        arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
      };

      console.log( arr );

      event.preventDefault();
    });

  });
})(jQuery);
</script>

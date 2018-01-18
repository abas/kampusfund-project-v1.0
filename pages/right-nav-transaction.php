<aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="panel panel-default panel-noborder widget-features">
    <div class="panel-heading">
      Informasi Transaksi
    </div>
    <div class="panel-body">
      <ul>
        <li class="bigger">
          <div class="media">
            <div class="media-body">
              <table class="table">
                <tbody>
                <tr>
                  <td>No. Transaksi :</td>
                  <td><strong>Kode Unik Gerated</strong></td>
                </tr>
                <tr>
                  <td>Tanggal Transaksi :</td>
                  <td><strong>15 Januari 2018 20.00</strong></td>
                </tr>
                <tr>
                  <td> Nama Investor :</td>
                  <td><strong>Husein Indra Kusuma</strong></td>
                </tr>
              </tbody>
              </table>

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

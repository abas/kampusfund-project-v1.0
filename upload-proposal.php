<?php
require 'pages/header.php'
?>
<script type="text/javascript" src="assets/ckeditor5/ckeditor.js"></script>

<div class="detail-header detail-header-blogs-detail">
  <div class="container">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Dashboard Kampanye</a></li>
      <li class="breadcrumb-item"><a href="#">Buat Kampanye Usaha</a></li>
    </ol>
  </div>
  <div class="background"></div>
</div>
<div class="background"></div>
</div>

</header>
<!-- End of Header -->
<main>
  <div class="container">
    <article class="col-lg-9 col-md-9 col-sm-9 col-xs-12 blogs-content blogs-content-detail" style="float:right;">
      <h3>Upload Proposal Usaha</h3>
      <form>
        <fieldset>

          <div class="form-group">
            <label for="exampleInputEmail1">Judul Proposal Usaha</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Proposal</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Proposal diwajibkan berformat pdf. Contoh proposal yang baik dan benar <a href="#" style="color:$007e6c;">klik disini</a>            </small>
          </div>


          <button type="submit" class="btn btn-primary">Upload Proposal</button>
          <div style="margin-bottom:30px;"></div>
        </fieldset>
      </form>
      <!-- End of related posted -->
    </article>
    <?php
    require 'pages/right-nav-dashboard.php'
    ?>
  </div>
  <script>
  InlineEditor
  .create( document.querySelector( '#editor' ) )
  .catch( error => {
    console.error( error );
  } );
  </script>
</main>
<?php
require 'pages/footer.php'
?>

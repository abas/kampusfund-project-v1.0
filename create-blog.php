<?php
require 'pages/header.php'
?>
<script type="text/javascript" src="assets/ckeditor5/ckeditor.js"></script>

<div class="detail-header detail-header-blogs-detail">
  <div class="container">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Dashboard Blog</a></li>
      <li class="breadcrumb-item"><a href="#">Buat Tulisan Baru</a></li>
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
      <h3> Buat Tulisan Baru</h3>
      <form>
        <fieldset>

          <div class="form-group">
            <label for="exampleInputEmail1">Judul Blog</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Buat judul semenarik mungkin</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Gambar Utama</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Gambar ini digunakan sebagai gambar pembuka pada blog</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kategori</label>
            <select class="form-control select2" name="category">
                  <option value="">Pilih kategori</option>

                  <option value="award">Award</option>
                  <option value="news">News</option>
                  <option value="profiles">Profiles</option>
                  <option value="tips">Tips</option>
                  <option value="community">Community</option>
                </select>
          </div>

          <fieldset class="form-group">
            <label>Deskripsi Blog</label>
            <div class="form-check" style="border:1px solid #ccc;">
                <div id="editor" style="height:200px;"></div>
            </div>

          </fieldset>

          <button type="submit" class="btn btn-primary">Publikasikan</button>
          <button type="submit" class="btn btn-primary">Simpan Draft</button>
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

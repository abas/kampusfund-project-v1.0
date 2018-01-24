<?php
require 'pages/header.php'
?>
<div class="detail-header detail-header-blogs-detail">
  <div class="container">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Member Dashboard</a></li>
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
      <h3> Edit Profile Studentpreneur</h3>
      <form>
        <fieldset>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor Induk Mahasiswa</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Universitas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Universitas">
            <small id="fileHelp" class="form-text text-muted">Nama universitas tidak boleh disingkat, contoh : Universitas Dian Nuswantoro</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">No. handphone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Sekarang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
            <small id="fileHelp" class="form-text text-muted">Alamat anda sekarang jika sebagai anak rantau dan/atau alamat rumah sama dengan alamat asal</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat Asal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
              <small id="fileHelp" class="form-text text-muted">Alamat rumah anda</small>
          </div>
          <label for="exampleInputEmail1">Alamat Sosial Media</label>
          <div class="form-group">
            <label for="exampleInputEmail1">Instagram</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
              <small id="fileHelp" class="form-text text-muted">Alamat instagram anda atau bisnis anda untuk menambah kepercayaan investor</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Linkedin</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
              <small id="fileHelp" class="form-text text-muted">Masukan alamat profile linkedin anda untuk menambah kepercayaan investor</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Foto Profile</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Kartu Tanda Penduduk</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload KTP dengan gambar yang jelas</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Kartu Tanda Mahasiswa</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload KTM dengan gambar yang jelas</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Surat Keterangan Aktif Mahasiswa</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload SKAM yang didapat dari Universtias berkaitan</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Foto Kesanggupan</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload foto dengan kertas bertuliskan "Saya sanggup dan bertanggung jawab atas wirausaha yang saya jalani"</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Surat Pernyataan Kesanggupan</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Surat Pernyataan Kesanggupan didapat <a href="#" style="color:#007e6c">disini</a> </small>
          </div>
          <fieldset class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" value="" checked="">
                Saya bersedia mengikuti aturan yang ditetapkan oleh Kampus Fund <a href="#" style="color:#007e6c">(Term of Service)</a>
              </label>
            </div>

          </fieldset>

          <button type="submit" class="btn btn-primary">Simpan</button>
          <div style="margin-bottom:40px;"></div>
        </fieldset>
      </form>
      <!-- End of related posted -->
    </article>
    <?php
    require 'pages/right-nav-dashboard.php'
    ?>
  </div>

</main>
<?php
require 'pages/footer.php'
?>

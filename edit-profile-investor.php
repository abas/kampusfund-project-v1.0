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
    <article class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blogs-content blogs-content-detail" style="float:right;">
      <h3> Edit Profile Studentpreneur</h3>
      <form>
        <fieldset>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Kartu Tanda Penduduk</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
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
            <label for="exampleInputEmail1">No. handphone</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Min. Investasi</label>
            <div class="input-group"  id="form">
              <span class="input-group-addon">Rp</span>
              <input id="amount" name="amount" type="text" maxlength="15" class="form-control currency"   placeholder="100.000,-"/>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Max. Investasi</label>
            <div class="input-group"  id="form">
              <span class="input-group-addon">Rp</span>
              <input id="amount" name="amount" type="text" maxlength="15" class="form-control currency"   placeholder="1000.000,-"/>
            </div>
          </div>
          <fieldset class="form-group">
            <label for="exampleInputEmail1">Preferensi Investor</label>
                <input class="form-check-input" type="checkbox" value="" >
                Kuliner
                <input class="form-check-input" type="checkbox" value="" >
                Jasa
                <input class="form-check-input" type="checkbox" value="" >
                Teknologi
                <input class="form-check-input" type="checkbox" value="">
                Produk
          </fieldset>
          <div class="form-group">
            <label for="exampleInputPassword1">Tipe Investor</label>
            <select class="form-control select2" name="category" id="status" >
              <option value="0">Pilih Tipe</option>
              <option value="1">Personal Investor</option>
              <option value="2">Corporate Investor</option>
            </select>
          </div>
          <div class="form-group" id="hidden0" style="display: none;" >
            <label for="exampleInputEmail1">Status</label>
            <select class="form-control select2" name="category" >
              <option value="0">Pilih Status</option>
              <option value="1">Mahasiswa</option>
              <option value="2">Alumni</option>
            </select>
          </div>
          <div class="form-group" id="hidden1" style="display: none;" >
            <label for="exampleInputEmail1">Universitas</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Masukan Universitas">
            <small id="fileHelp" class="form-text text-muted">Nama universitas tidak boleh disingkat, contoh : Universitas Dian Nuswantoro</small>
          </div>
          <div class="form-group" id="hidden2" style="display: none;" >
            <label for="exampleInputEmail1">Alamat Sekarang</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
            <small id="fileHelp" class="form-text text-muted">Alamat anda sekarang jika sebagai anak rantau dan/atau alamat rumah sama dengan alamat asal</small>
          </div>
          <div class="form-group" id="hidden3" style="display: none;" >
            <label for="exampleInputEmail1">Alamat Asal</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
            <small id="fileHelp" class="form-text text-muted">Alamat rumah anda</small>
          </div>
          <div class="form-group" id="hidden4"  style="display: none;" >
            <label for="exampleInputEmail1">Alamat Perusahaan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nomor Hp">
            <small id="fileHelp" class="form-text text-muted">Alamat anda sekarang jika sebagai anak rantau dan/atau alamat rumah sama dengan alamat asal</small>
          </div>
          <div class="form-group" id="hidden5"  style="display: none;" >
            <label for="exampleInputEmail1">NPWP Perusahaan</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload NPWP dengan gambar yang jelas</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File Foto Profile</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          </div>
          <div class="form-group" >
            <label for="exampleInputFile">File Kartu Tanda Penduduk</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Upload KTP dengan gambar yang jelas</small>
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

<script>
    document.getElementById('status').addEventListener('change', function () {

    var style1 = this.value == 1 ? 'block' : 'none';
    var style2 = this.value == 2 ? 'block' : 'none';
    if (this.value == 1) {
      document.getElementById('hidden0').style.display =style1;
      document.getElementById('hidden1').style.display =style1;
      document.getElementById('hidden2').style.display = style1;
      document.getElementById('hidden3').style.display = style1;
      document.getElementById('hidden4').style.display = 'none';
      document.getElementById('hidden5').style.display = 'none';
    }
    else if (style2) {
      document.getElementById('hidden0').style.display ='none';
      document.getElementById('hidden1').style.display ='none';
      document.getElementById('hidden2').style.display = 'none';
      document.getElementById('hidden3').style.display = 'none';
      document.getElementById('hidden4').style.display = style2;
      document.getElementById('hidden5').style.display = style2;
    }


    });
  </script>
  <?php
  require 'pages/footer.php'
  ?>

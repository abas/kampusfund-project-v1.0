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
      <h3> Buat Kampanye Usaha</h3>
      <form>
        <fieldset>

          <div class="form-group">
            <label for="exampleInputEmail1">Judul Kampanye Usaha</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
            <small id="emailHelp" class="form-text text-muted">Buat judul semenarik mungkin</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Gambar Utama</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Gambar ini digunakan sebagai gambar pembuka pada usaha</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Link Youtube</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter link youtube">
            <small id="fileHelp" class="form-text text-muted">Gunakan video teaser tentang usaha anda untuk menarik investor</small>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Asal Universitas</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Origin University" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Goal Dana Usaha</label>
            <div class="input-group"  id="form">
              <span class="input-group-addon">Rp</span>
              <input id="amount" name="amount" type="text" maxlength="15" class="form-control currency"  placeholder="2000.000,-"/>
              </div>
              <small id="fileHelp" class="form-text text-muted">Pengajuan dana disarankan disesuaikan dengan saran oleh sistem berdasarkan proposal bisnis</small>

          </div>
          <div class="form-group">
            <label for="exampleInputFile">Tanggal Pengajuan</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Tanggal Target Dana Tercapai</label>
            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="fileHelp" class="form-text text-muted">Maksimal pengajuan 20 hari, dan bisa diperpanjang 10 hari.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pengembalian Dana</label>
            <select class="form-control select2" name="category">
              <option value="">Pilih Jangka Waktu</option>
              <option value="6">6 Bulan</option>
              <option value="12">12 Bulan</option>
              <option value="18">18 Bulan</option>
              <option value="24">24 Bulan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Bagi Hasil</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contoh : 10%, 20%, 30%" >
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Lama Bagi Hasil</label>
            <select class="form-control select2" name="category">
              <option value="">Pilih Jangka Waktu</option>
              <option value="3">3 Bulan</option>
              <option value="4">4 Bulan</option>
              <option value="5">5 Bulan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kategori</label>
            <select class="form-control select2" name="category">
              <option value="">Pilih kategori</option>

              <option value="Kuliner">Kuliner</option>
              <option value="Jasa">Jasa</option>
              <option value="Teknologi">Teknologi</option>
              <option value="Produk">Produk</option>
            </select>
          </div>

          <fieldset class="form-group">
            <label>Deskripsi Blog</label>
            <div class="form-check" style="border:1px solid #ccc;">
              <div id="editor" style="height:200px;">
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;"><strong>Ringkasan singkat</strong></span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Tuliskan ide yang kamu rancang dan buatlah mereka percaya akan idemu. Hal yang harus dilakukan di bagian ini:</span></p>
                <ul>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Perkenalkan diri dan latar belakang Anda.</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jelaskan secara singkat kampanye Anda dan mengapa hal ini penting bagi Anda.</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Ungkapkan jumlah kontributor yang akan membantu Anda mencapainya.</span></li>
                </ul>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Ingat, tetap ringkas, tapi pribadi. Tanyakan pada diri sendiri: jika seseorang berhenti membaca di sini apakah mereka akan siap memberikan kontribusi?</span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;"><strong>Apa yang Kita Butuhkan &amp; Apa yang Anda Dapatkan</strong></span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jelaskan kepada orang-orang secara lebih rinci:</span></p>
                <ul>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jelaskan berapa banyak dana yang Anda butuhkan dan kemana arahnya. Jadilah transparan dan spesifik,orang perlu percaya Anda untuk mendanai kampanye Anda.</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Beritahu orang tentang keistimewaan produk Anda. Buatlah mereka bersemangat</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jelaskan di mana dana pergi jika Anda tidak mencapai keseluruhan tujuan Anda.</span></li>
                </ul>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;"><strong>Dampak</strong></span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jangan ragu untuk menjelaskan lebih banyak tentang kampanye Anda dan biarkan orang tahu perbedaan kampanye yang telah anda buat:</span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jangan ragu untuk menjelaskan kampanye Anda dengan baik dan biarkan orang-orang tahu perbedaan kontribusi apa untuk mereka</span></p>
                <ul>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jelaskan mengapa proyek Anda berharga bagi kontributor dan Indonesia.</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Tunjukkan rekam jejak sukses Anda dengan proyek seperti ini (jika Anda memilikinya).</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jadikan itu nyata bagi orang dan membangun kepercayaan.</span></li>
                </ul>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;"><strong>Resiko &amp; Tantangan</strong></span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Orang menghargai keterbukaan Anda. Terbuka dengan memberikan wawasan tentang risiko dan hambatan yang mungkin Anda hadapi dalam mencapai tujuan Anda.</span></p>
                <ul>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Bagikan apa yang memenuhi syarat untuk mengatasi tantangan ini.</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Jelaskan rencana Anda untuk memecahkan tantangan ini.</span></li>
                </ul>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;"><strong>Cara Lain yang Dapat Anda Bantuan</strong></span></p>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Beberapa orang tidak dapat berkontribusi, tapi itu tidak berarti mereka tidak dapat membantu:</span></p>
                <ul>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Mintalah ke &nbsp;orang-orang untuk mengeluarkan kata-kata dan membuat beberapa pernyataan tentang kampanye Anda.</span></li>
                  <li><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">Ingatkan mereka untuk menggunakan&nbsp; Kampus Fund !</span></li>
                </ul>
                <p><span style="font-family: 'trebuchet ms', geneva; font-size: medium;">&nbsp;</span></p>
              </div>
            </div>

          </fieldset>

          <button type="submit" class="btn btn-primary">Terbitkan Usaha</button>
          <button type="submit" class="btn btn-primary">Simpan Draft</button>
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

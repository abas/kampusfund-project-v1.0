@extends('fun_layout.lay-app') @section('content')
<div class="slider">
  <div class="">

    <div class="carousel-inner">
      <div class="item active">
        <div class="slide-image" style="background: url({{asset('/images/slides/slide0.jpeg')}})">
        </div>


        <div class="welcome">
          <div class="col-lg-12" style="padding: 0% 10%;">
            <h3 class="title animated fadeInDown">
              Mewujudkan Enterpreneur Mahasiswa yang Dimulai dari Kampus
            </h3>
            <div class="subtitle animated fadeInDown animation-delay-1">
              <p class="caption-text animated typewrite" data-period="1000" data-type='[ "Do what you love .","Kampus are full of great ideas .", " Discover and engage your business ." ]'>
            </div>
              <button class="btn btn-primary btn-sm" style="padding:5px 20px;font-size:18px;">
              <a href="#" style="color:#fff;">Mulai Investasi</a>
            </button>
          </div>

        </div>
      </div>

    </div>
  </div>


</div>
<!-- end of slider -->

</header>
<!-- End of Header -->


<main>
  <div class="home-why">

    <div class="container">
      <h3>Cara Kerja</h3>
      <div class="subtitle">
        <p style="margin:0% 20%;font-size:18px;">KampusFund akan mengumpulkan, menyaring dan memberikan pilihan investasi wirausaha mahasiswa yang layak kepada setiap
          investor dan menghadirkannya dalam platform Kampusfund.com</p>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item middlemandude">
        <a href="#">
          <div class="media">
            <div class="media-left media-top">
              <img src="{{asset('/images/logo/growth.png')}}">
            </div>
            <div class="media-body">
              <h4 class="media-heading">Mencari Peluang Investasi</h4>
              <div class="description">
                <p>Telusuri berbagai usaha yang sedang berjalan. Pelajari usaha mahasiswa dan peluang investasi yang ditawarkan.</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item middlemandude">
        <a href="#">
          <div class="media">
            <div class="media-left media-top">
              <img src="{{asset('/images/logo/exchange.png')}}">
            </div>
            <div class="media-body">
              <h4 class="media-heading">Akad Bagi Hasil</h4>
              <div class="description">
                Struktur akad Bagi-Hasil atau Mudharabah adalah bentuk kerjasama dimana investor menyertakan modalnya dalam usaha yang dijalankan
                pengelola usaha (wirausaha mahasiswa).
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item middlemandude">
        <a href="#">
          <div class="media">
            <div class="media-left media-top">
              <img src="{{asset('/images/logo/analytics.png')}}">
            </div>
            <div class="media-body">
              <h4 class="media-heading">Cari Modal Usaha</h4>
              <div class="description">
                Daftar dan buat profil usaha yang anda jalankan. Lengkapi dengan data-data pendukung seperti identitas anda, laporan keuangan
                dsb.
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item middlemandude">
        <a href="#">
          <div class="media">
            <div class="media-left media-top">
              <img src="{{asset('/images/logo/handshake.png')}}">
            </div>
            <div class="media-body">
              <h4 class="media-heading">Akad Jual Beli</h4>
              <div class="description">
                Struktur akad Jual Beli atau Mudharabah adalah bentuk kerja sama antara dua atau lebih pihak di mana pemilik modal (shahibul
                amal) mempercayakan sejumlah modal kepada pengelola (mudharib) dengan suatu perjanjian di awal.
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- End of Home Why choose us -->
  <div class="container">
    <h3 class="under-line">
      <a href="">Usaha Terbaru</a>
      <div class="line"></div>
    </h3>
    <div class="row">



      <article class="blogs-content blogs-content-3cols">

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="blog-item ">
            <div class="photo">
              <a href="">
                <img src="{{asset('/images/porfolios/2.jpg')}}">
              </a>
            </div>
            <h3>
              <a href="">Usaha Roti Bakar Banana Zips</a>
            </h3>
            <div class="info">
              <a href="">
                <i class="fa fa-graduation-cap "></i> Universitas Dian Nuswantoro</a>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                style="width:40%">
                40% Complete (success)
              </div>
            </div>
            <div class="box-campaign-summery">
              <ul class="modemode">
                <li>
                  <strong>Rp 4000.000 </strong> Target Modal</li>
                <li>
                  <strong>10 %</strong> Bagi Hasil</li>
                <li>
                  <strong>5</strong> Hari Tersisa</li>
              </ul>
            </div>
            <div class="description">
              <p> Deskripsi singkat 150 karakter</p>
              <p></p>
              <p></p>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>
        <ul class="pagination pagination-lg pagination-lazyload">
          <li>
            <a href="#">Lihat Lebih Banyak</a>
          </li>

        </ul>

      </article>
    </div>


  </div>
  <div class="home-partners">
    <h3>Partners</h3>
    <div class="container">
      <div class="partner" style="background: url({{asset('/upload/partner/logo1.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo2.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo3.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo4.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo5.jpg')}})">
      </div>

    </div>
  </div>
  <!-- End of Home Partners -->
  <div class="home-partners">
    <h3>Diliput oleh</h3>
    <div class="container">
      <div class="partner" style="background: url({{asset('/upload/partner/logo1.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo2.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo3.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo4.jpg')}})">
      </div>
      <div class="partner" style="background: url({{asset('/upload/partner/logo5.jpg')}})">
      </div>

    </div>
  </div>
  <!-- End of Home Partners -->
  <div class="home-subcribe">
    <h3>Tertarik untuk mendapatkan ide-ide baru ?</h3>
    <div class="subtitle">Baca sebuah tips,ide atau tulis yang kamu suka.
      <br>
      <br>
      <a href="blog.php">
        <button class="btn btn-primary btn-lg">
          Read Blog
        </button>
      </a>
    </div>
    <div class="content">

    </div>

    <div class="background"></div>
  </div>
  <!-- End of Home Subcribe -->
</main>
@endsection
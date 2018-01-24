@extends('fun_layout.lay-app')
@section('content');
</header>
<main>
  <div class="clearfix"></div>
  <div class="blogs-feature" style="padding-top:80px;">
    <div class="blogs-feature-slider">
      <div id="carousel-blogs-feature-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="slide-image gradient-force" style="background: url({{asset('images/blogs/blog2.jpg')}});height:250px;">
              <section class="post-content-section">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">
                      <h1 class="text-center">Campus Station Blog</h1>
                      <ul class="list-inline text-center">
                        <li><a href="">Awards</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">Profiles</a></li>
                        <li><a href="">Tips</a></li>
                        <li><a href="">Community</a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- /container -->
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End if blogs-feature -->
  <div class="container">
    <h3 class="under-line">
      <a href="">Blog Terbaru</a>
      <div class="line"></div>
    </h3>
    <div class="row">
      <article class="blogs-content blogs-content-3cols">

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="blog-item">
            <div class="photo">
              <iframe class="media-video" width="100%" src="https://www.youtube.com/embed/r3ebOxltJ1w" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <h3><a href="">Qrhoncus risus eget, sodales ex. In malesuada urna magna. Vestibulum ante…</a></h3>
            <div class="info">
              <span class="date">Husein Indra Kusuma</span>
              <br>
              January 1, 2017.
            </div>
            <div class="description">
              <a href="">  Universitas Dian Nuswantoro</a>
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
</main>
@endsection
@extends('fun_layout.lay-app') @section('content')
<script type="text/javascript" src="assets/ckeditor5/ckeditor.js"></script>

<div class="detail-header detail-header-blogs-detail">
  <div class="container">

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="#">Dashboard Kampanye</a>
      </li>
      <li class="breadcrumb-item">
        <a href="#">Buat Kampanye Usaha</a>
      </li>
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
      <h3> Update Informasi Usaha</h3>
      <form>
        <fieldset>

          <div class="form-group">
            <label for="exampleInputEmail1">Judul Update Usaha </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
            <small id="emailHelp" class="form-text text-muted">Buat judul semenarik mungkin</small>
          </div>

          <fieldset class="form-group">
            <label>Update Informasi Usaha</label>
            <div class="form-check" style="border:1px solid #ccc;">
              <div id="editor" style="height:200px;">
                <p>Berikan informasi tentang keberlangsungan usahamu atau ucapan terimakasih kepada investor</p>
              </div>
            </div>

          </fieldset>

          <button type="submit" class="btn btn-primary">Update Informasi</button>
          <div style="margin-bottom:30px;"></div>
        </fieldset>
      </form>
      <!-- End of related posted -->
    </article>
    @include('dashboard.right-nav-dashboard')
  </div>
  <script>
    InlineEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
        console.error(error);
      });
  </script>
</main>
@endsection
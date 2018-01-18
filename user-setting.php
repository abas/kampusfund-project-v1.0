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
    <article class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blogs-content blogs-content-detail" style="float:right;">
      <h3>Pengaturan </h3>
      <div class="panel with-nav-tabs panel-default panel-noborder widget-tab-popular">
              <div class="panel-heading">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="false"> Notifikasi</a></li>
                  <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false"> Sandi </a></li>
                </ul>
              </div>
              <div class="panel-body">
                <div class="tab-content">
                  <div class="tab-pane fade active in" id="tab1default">
                    <ul>
                      <li>
                        <div class="media border-update">
                          <div class="info">
                            <div class="description">
                              <div class="table-responsive">
                                <table class="table">

                                  <tbody>
                                    <tr>
                                      <td> <strong>Verifikasi</strong> </td>
                                      <td> </td>
                                    </tr>
                                    <tr>
                                      <td>OTP Email</td>
                                      <td><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                                    </tr>
                                    <tr>
                                      <td> <strong>Event & berita</strong> </td>
                                      <td> </td>
                                    </tr>
                                    <tr>
                                      <td>Newsletter</td>
                                      <td><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                                    </tr>
                                    <tr>
                                      <td>Info Event</td>
                                      <td><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                                    </tr>
                                    <tr>
                                      <td>Promosi</td>
                                      <td><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                                    </tr>
                                    <tr>
                                      <td> <strong>Pengumuman</strong> </td>
                                      <td> </td>
                                    </tr>
                                    <tr>
                                      <td>Update Perusahaan</td>
                                      <td><input type="checkbox" checked data-toggle="toggle" data-size="mini"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>

                  <div class="tab-pane fade" id="tab3default">
                    <ul>
                      <li>
                        <form>
                          <fieldset>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email</label>
                              <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Current Password</label>
                              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">New Password</label>
                              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">New Password Confirmation</label>
                              <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <div style="margin-bottom:40px;"></div>
                          </fieldset>
                        </form>
                      </li>
                    </ul>
                  </div>

                </div>
              </div>
            </div>
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

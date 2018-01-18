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
      <div class="row" >
          <div class="col-sm-6">
            <a class="block block-link-hover3 text-center" href="#">
              <div class="block-content block-content-full">
                <div class="h1 font-w700"><i class="fa fa-newspaper-o"></i></div>
              </div>
              <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Buat Kampanye Usaha</div>
            </a>
          </div>
          <div class="col-sm-6">
            <a class="block block-link-hover3 text-center" href="#">
              <div class="block-content block-content-full">
                <div class="h1 font-w700"><i class="fa fa-list-ul"></i></div>
              </div>
              <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Update Kampanye Usaha</div>
            </a>
          </div>
      </div>
      <div class="row" >
          <div class="col-sm-6">
            <a class="block block-link-hover3 text-center" href="#">
              <div class="block-content block-content-full">
                <div class="h1 font-w700"><i class="fa fa-list-alt"></i></div>
              </div>
              <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Upload Proposal Bisnis</div>
            </a>
          </div>
          <div class="col-sm-6">
            <a class="block block-link-hover3 text-center" href="#">
              <div class="block-content block-content-full">
                <div class="h1 font-w700"><i class="fa fa-bar-chart-o"></i></div>
              </div>
              <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Skema Cashflow</div>
            </a>
          </div>
      </div>

      <div class="panel with-nav-tabs panel-default panel-noborder widget-tab-popular">
        <div class="panel-heading">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="false"> List Usaha</a></li>
            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="true"> Proposal Usaha</a></li>
            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false"> Draft </a></li>
            <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false"> Blocked Usaha </a></li>
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
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Usaha</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Viewer</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Apalah arti</td>
                                <td>Profile</td>
                                <td>900</td>
                                <td>
                                  <button type="button" class="btn btn-secondary" title="Edit"><i class="fa fa-eye"></i></button>
                                  <button type="button" class="btn btn-secondary" title="Delete"><i class="fa fa-times"></i></button>
                                </td>
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
            <div class="tab-pane fade " id="tab2default">
              <ul>
                <li>
                  <div class="media border-update">
                    <div class="info">
                      <div class="description">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Pemohon</th>
                                <th scope="col">Judul Proposal</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Permintaan Proposal</th>

                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Dalban Kurap</td>
                                <td>Apalah arti</td>
                                <td>Profile</td>
                                <td>
                                  <button type="button" class="btn btn-success" >Sukses</button>
                                  <button type="button" class="btn btn-warning">Pending</i></button>
                                </td>
                                <td>

                                  <button type="button" class="btn btn-secondary" title="Accept"><i class="fa fa-check"></i></button>
                                  <button type="button" class="btn btn-secondary" title="View"><i class="fa fa-eye"></i></button>
                                  <button type="button" class="btn btn-secondary" title="Refuse"><i class="fa fa-user-times"></i></button>
                                </td>
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
                  <div class="media border-update">
                    <div class="info">
                      <div class="description">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Usaha</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Apalah arti</td>
                                <td>Profile</td>
                                <td>
                                  <button type="button" class="btn btn-success" >Sukses</button>
                                  <button type="button" class="btn btn-warning">Pending</i></button>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-secondary" title="Publikasikan"><i class="fa fa-check"></i></button>
                                  <button type="button" class="btn btn-secondary" title="Edit"><i class="fa fa-times"></i></button>
                                  <button type="button" class="btn btn-secondary" title="Delete"><i class="fa fa-times"></i></button>
                                </td>
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

            <div class="tab-pane fade" id="tab4default">
              <ul>
                <li>
                  <div class="media border-update">
                    <div class="info">
                      <div class="description">
                        <div class="table-responsive">
                          <table class="table ">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Usaha</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Apalah arti</td>
                                <td>Profile</td>
                                <td>
                                  <button type="button" class="btn btn-success" >Terpublish</button>
                                  <button type="button" class="btn btn-warning">Blocked</i></button>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-secondary" title="Accept Campaign"><i class="fa fa-check"></i></button>
                                  <button type="button" class="btn btn-secondary" title="Refuse Campaign"><i class="fa fa-user-times"></i></button>
                                  <button type="button" class="btn btn-secondary" title="Delete Campaign"><i class="fa fa-times"></i></button>
                                </td>
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

          </div>
        </div>
      </div>
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

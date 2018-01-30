@extends('fun_layout.lay-app') @section('content')
<div class="detail-header detail-header-blogs-detail">
  <div class="container">

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="#">Member Dashboard</a>
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
      <div class="row">
        <div class="col-sm-6">
          <a class="block block-link-hover3 text-center" href="#">
            <div class="block-content block-content-full">
              <div class="h1 font-w700">
                <i class="fa fa-newspaper-o"></i>
              </div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Buat Kampanye Usaha</div>
          </a>
        </div>
        <div class="col-sm-6">
          <a class="block block-link-hover3 text-center" href="#">
            <div class="block-content block-content-full">
              <div class="h1 font-w700">
                <i class="fa fa-list-ul"></i>
              </div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Update Kampanye Usaha</div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <a class="block block-link-hover3 text-center" href="#">
            <div class="block-content block-content-full">
              <div class="h1 font-w700">
                <i class="fa fa-list-alt"></i>
              </div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Upload Proposal Bisnis</div>
          </a>
        </div>
        <div class="col-sm-6">
          <a class="block block-link-hover3 text-center" href="#">
            <div class="block-content block-content-full">
              <div class="h1 font-w700">
                <i class="fa fa-bar-chart-o"></i>
              </div>
            </div>
            <div class="block-content block-content-full block-content-mini bg-gray-lighter text-muted font-w600">Skema Cashflow</div>
          </a>
        </div>
      </div>

      <div class="panel with-nav-tabs panel-default panel-noborder widget-tab-popular">
        <div class="panel-heading">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#tab1default" data-toggle="tab" aria-expanded="false"> List Usaha</a>
            </li>
            <li class="">
              <a href="#tab2default" data-toggle="tab" aria-expanded="true"> Proposal Usaha</a>
            </li>
            <!-- Pada proposal usaha cara kerjanya untuk user , yaitu untuk menerima request dari investor apakah di ijinkan untuk memberikan porposal bisnisnya-->
            <li class="">
              <a href="#tab3default" data-toggle="tab" aria-expanded="false"> Draft </a>
            </li>
            <!-- Pada draft user tidak bisa mengakses button delete-->
            <li class="">
              <a href="#tab4default" data-toggle="tab" aria-expanded="false"> Blocked Usaha </a>
            </li>
            <!-- Pada blokced Usaha hanya dimiliki oleh admin-->
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
                                  <button type="button" class="btn btn-secondary" title="Edit">
                                    <i class="fa fa-eye"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Delete">
                                    <i class="fa fa-times"></i>
                                  </button>
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
                                  <button type="button" class="btn btn-success">Sukses</button>
                                  <button type="button" class="btn btn-warning">Pending</i>
                                  </button>
                                </td>
                                <td>

                                  <button type="button" class="btn btn-secondary" title="Accept">
                                    <i class="fa fa-check"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="View">
                                    <i class="fa fa-eye"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Refuse">
                                    <i class="fa fa-user-times"></i>
                                  </button>
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
                                  <button type="button" class="btn btn-success">Sukses</button>
                                  <button type="button" class="btn btn-warning">Pending</i>
                                  </button>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-secondary" title="Publikasikan">
                                    <i class="fa fa-check"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Edit">
                                    <i class="fa fa-eye"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Delete">
                                    <i class="fa fa-times"></i>
                                  </button>
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
                                  <button type="button" class="btn btn-success">Terpublish</button>
                                  <button type="button" class="btn btn-warning">Blocked</i>
                                  </button>
                                </td>
                                <td>
                                  <button type="button" class="btn btn-secondary" title="Accept Campaign">
                                    <i class="fa fa-check"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Refuse Campaign">
                                    <i class="fa fa-user-times"></i>
                                  </button>
                                  <button type="button" class="btn btn-secondary" title="Delete Campaign">
                                    <i class="fa fa-times"></i>
                                  </button>
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

        <!-- Chatting Start -->

        <div class="row">
          <div class="col-lg-3">
            <div class="btn-panel btn-panel-conversation">
              <a href="" class="btn  col-lg-9  send-message-btn" role="button"><i class="fa fa-plus"></i> New Message</a>
            </div>
          </div>

        </div>
        <div class="row">

          <div class="conversation-wrap col-lg-3">


            <div class="media conversation">
              <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
              </a>
              <div class="media-body">
                <h5 class="media-heading">Husein Indra Kusuma</h5>
                <small>Hello</small>
              </div>
            </div>
          </div>



          <div class="message-wrap col-lg-9">
            <div class="msg-wrap">


              <div class="media msg ">
                <a class="pull-left" href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                </a>
                <div class="media-body">
                  <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                  <h5 class="media-heading">Husein Indra Kusuma</h5>
                  <small class="col-lg-10">asdasdjabdajsdajdbajsdbaskdasdaskjdaisdjhaksdaksdbaskdhasd
                    jabdjassbdjasd</small>
                  </div>
                </div>
                <div class="alert alert-info msg-date">
                  <strong>Today</strong>
                </div>
                <div class="media msg">
                  <a class="pull-left" href="#">
                    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 32px; height: 32px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACqUlEQVR4Xu2Y60tiURTFl48STFJMwkQjUTDtixq+Av93P6iBJFTgg1JL8QWBGT4QfDX7gDIyNE3nEBO6D0Rh9+5z9rprr19dTa/XW2KHl4YFYAfwCHAG7HAGgkOQKcAUYAowBZgCO6wAY5AxyBhkDDIGdxgC/M8QY5AxyBhkDDIGGYM7rIAyBgeDAYrFIkajEYxGIwKBAA4PDzckpd+322243W54PJ5P5f6Omh9tqiTAfD5HNpuFVqvFyckJms0m9vf3EY/H1/u9vb0hn89jsVj8kwDfUfNviisJ8PLygru7O4TDYVgsFtDh9Xo9NBrNes9cLgeTybThgKenJ1SrVXGf1WoVDup2u4jFYhiPx1I1P7XVBxcoCVCr1UBfTqcTrVYLe3t7OD8/x/HxsdiOPqNGo9Eo0un02gHkBhJmuVzC7/fj5uYGXq8XZ2dnop5Mzf8iwMPDAxqNBmw2GxwOBx4fHzGdTpFMJkVzNB7UGAmSSqU2RoDmnETQ6XQiOyKRiHCOSk0ZEZQcUKlU8Pz8LA5vNptRr9eFCJQBFHq//szG5eWlGA1ywOnpqQhBapoWPfl+vw+fzweXyyU+U635VRGUBOh0OigUCggGg8IFK/teXV3h/v4ew+Hwj/OQU4gUq/w4ODgQrkkkEmKEVGp+tXm6XkkAOngmk4HBYBAjQA6gEKRmyOL05GnR99vbW9jtdjEGdP319bUIR8oA+pnG5OLiQoghU5OElFlKAtCGr6+vKJfLmEwm64aosd/XbDbbyIBSqSSeNKU+HXzlnFAohKOjI6maMs0rO0B20590n7IDflIzMmdhAfiNEL8R4jdC/EZIJj235R6mAFOAKcAUYApsS6LL9MEUYAowBZgCTAGZ9NyWe5gCTAGmAFOAKbAtiS7TB1Ng1ynwDkxRe58vH3FfAAAAAElFTkSuQmCC">
                  </a>
                  <div class="media-body">
                    <small class="pull-right time"><i class="fa fa-clock-o"></i> 12:10am</small>
                    <h5 class="media-heading">Husein Indra Kusuma</h5>
                    <small class="col-lg-10">asdasdjabdajsdajdbajsdbaskdasdaskjdaisdjhaksdaksdbaskdhasd
                      jabdjassbdjasd</small>
                    </div>
                  </div>


                </div>

                <div class="send-wrap ">

                  <textarea class="form-control send-message" rows="3" placeholder="Write a reply..."></textarea>


                </div>
                <div class="btn-panel">

                  <a href="" class=" col-lg-4 text-right btn   send-message-btn pull-right" role="button"><i class="fa fa-paper-plane"></i> Send Message</a>
                </div>
              </div>
            </div>

        </article>
        <!-- End Chatting -->
        @include('dashboard.right-nav-dashboard')
      </div>

    </main>
    @endsection

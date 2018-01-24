@extends('fun_layout.lay-app')
@section('content')
<div class="detail-header detail-header-blogs-detail">
            <div class="container">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Review Kampanye Pilihan Anda</a></li>
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
    <div class="detail-topinfo col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="detail-title">
        <h1>Review Kampanye Pilihan Anda</h1>
      </div>
    </div>

    <article class="col-lg-9 col-md-9 col-sm-9 col-xs-12 blogs-content blogs-content-detail" style="float:right;">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Detail</th>
            <th scope="col">Tipe Pendanaan</th>
            <th scope="col" style="width: 15%;"></th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td><div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="{{asset('images/pages/welcome6.jpg')}}" alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="">Nama Usaha Nama Usaha</a>
                    </h4>
                    <div class="info">
                      <div class="description">
                        Nama Enterpreneur
                      </div>
                      <div class="date">
                        Universitas
                      </div>
                    </div>
                  </div>
                </div></td>
            <td>Investasi</td>
            <td>
              <a href="" class="button-default"><i class="fa fa-pencil"></i></a>
              <br>
              <div style="padding-bottom:15px;"></div>
              <a href="" class="button-default"><i class="fa fa-trash"></i></a>
            </td>
            <td>
              <form id="form" method="post" action="">
                <div class="input-group">
                  <span class="input-group-addon">Rp</span>
                  <input id="amount" name="amount" type="text" maxlength="15" class="form-control currency">
                </div>
              </form>
            </td>
          </tr>

        </tbody>
      </table>
      <div class="row">
        <div class="col-md-6">
            <div class="funkyradio">
              <h3>Metode Pemabayaran</h3>
                <div class="funkyradio-default">
                    <input type="radio" name="radio" id="radio1" checked/>
                    <label for="radio1">Internet Banking by Flip Id</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <table class="table table-margin">
            <tbody>
              <tr>
                <td scope="row"><strong>Total Pendanaan</strong></td>
                <td scope="row">Rp 2000.000,- </td>
              </tr>
              <tr>
                <td><strong>Amin (incl. payment gateway)</strong></td>
                <td>Rp 170.0000</td>
              </tr>
              <tr>
                <td><strong>Subtotal Pendanaan</strong> </td>
                <td>Rp 170.0000</td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <a href="" class="button-default">Pilih Usaha Lain</a>
        </div>
        <div class="col-md-6">
          <a href="" class="button-default">Danai Usaha Ini</a>
        </div>
        <div style="padding-bottom:70px;"></div>
      </div>
    <!-- End of related posted -->
  </article>
  @include('dashboard.right-nav-transaction')
</div>

</main>
@endsection
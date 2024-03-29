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
      <table class="table">
        <tbody>

          <tr>
            <td>
              <div class="middle-box-dashboard">
                <h4>Saldo Anda</h4>
                <h5>IDR</h5>
                <h3>Rp 0,-</h3>
              </div>
            </td>
            <td>
              <div class="middle-box-dashboard">
                <h4>Studentpreneur Terdanai</h4>
                <h5>Jumlah</h5>
                <h3>0 Studentpreneur</h3>
              </div>
            </td>
            <td>
              <div class="middle-box-dashboard">
                <h4>Dana Terkumpul</h4>
                <h5>IDR</h5>
                <h3>Rp 0,-</h3>
              </div>
            </td>

          </tr>

        </tbody>
      </table>
      <table class="table">
        <tbody>
          <tr>
            <td>
              <div class="middle-box-dashboard">
                <h4>Kampanye Tertunda</h4>
                <h3>0</h3>
              </div>
            </td>
            <td>
              <div class="middle-box-dashboard">
                <h4>Kampanye Aktif</h4>
                <h3>0 </h3>
              </div>
            </td>
            <td>
              <div class="middle-box-dashboard">
                <h4>Kampanye Diblokir</h4>
                <h3>0</h3>
              </div>
            </td>
            <td>
              <div class="middle-box-dashboard">
                <h4>Total Pengguna</h4>
                <h3>1420</h3>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Invoice</sub>
            </th>
            <th scope="col">Total</th>
            <th scope="col">Bagi Keuntungan</th>
            <th scope="col">Tanggal Mendanai</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>Rp 170.0000</td>
            <td>Rp 178.0000</td>
            <td>10%</td>
            <td>20 Januari 2018</td>
          </tr>


        </tbody>
      </table>
      <!-- End of related posted -->
    </article>
    @include('dashboard.right-nav-dashboard')
  </div>

</main>
@endsection
@extends('fun_layout.lay-app') @section('content')
<div class="detail-header detail-header-aboutus">
  <div class="container">
    <h1>Create new account</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Home</a>
      </li>
      <li class="breadcrumb-item active">Buat Akun Baru</li>
    </ol>
  </div>
  <div class="background"></div>
</div>
</header>
<main>
  <div class="container">
    <article>
      <div class="detail-signin">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="model-l">
            <h3 class="under-line">
              Buat Akun Baru
              <div class="line"></div>
            </h3>
            <form method="post" id="userRegisterFrm" class="signin-form" name="userRegisterFrm">
              <div class="form-group">
                <label for="exampleInputEmail1">Status Pengguna</label>
                <select class="form-control select2" name="category">
                  <option value="0">Pilih Status</option>
                  <option value="1">Studentpreneur</option>
                  <option value="2">Investor</option>
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Nama Lengkap</label>
                <input type="text" placeholder="Husein Indra Kusuma" name="fName" class="form-control" required="">
              </div>

              <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" placeholder="youremail@domain.com" name="emailId" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" placeholder="* * * * * *" id="password" name="password" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="pwd">Konfirmasi Password</label>
                <input type="password" placeholder="* * * * * *" name="repassword" class="form-control" required="">
              </div>
              <div class="form-group">
                <button type="submit" name="userRegBtn" class="btn btn-lg btn-primary">Buat Akun</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-explain">
          <h3>What's new account?</h3>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <p>
            </p>
            <ol class="big-numbers">
              <li>
                <span>01</span>
                <p>In locavore voluptate assumenda. Non raw denim sapiente aute small batch fap. Raw denim cliche lo-fi umami
                  cray incididunt sunt before they sold out. </p>
              </li>
              <li>
                <span>02</span>
                <p>Raw denim cliche lo-fi umami cray incididunt sunt before they sold out. In locavore voluptate assumenda.
                  Non raw denim sapiente aute small batch fap. Viral mollit flexitarian locavore, beard readymade eiusmod
                  anim.
                </p>
              </li>
              <li>
                <span>03</span>
                <p>Non raw denim sapiente aute small batch fap. Raw denim cliche lo-fi umami cray incididunt sunt before they
                  sold out. Viral mollit flexitarian locavore, beard readymade eiusmod anim.
                </p>
              </li>
            </ol>
            <p></p>
            <p>Amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam..
            </p>
          </div>
          <p>
            <a href="{{route('login')}}" class="btn btn-lg btn-primary">Login</a>
            <a href="" class="btn btn-lg btn-default">See more..</a>
          </p>
        </div>
        <div class="clearfix"></div>
      </div>
    </article>
  </div>
</main>
@endsection
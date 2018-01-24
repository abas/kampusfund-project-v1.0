@extends('fun_layout.lay-app') @section('content')
<div class="detail-header detail-header-aboutus">
  <div class="container">
    <!-- Tambahkan sebuah uAuth FB dan Google-->
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
              Login
              <div class="line"></div>
            </h3>
            <form method="post" class="signin-form">
              <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" placeholder="Your user email id" id="userName" name="userName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" placeholder="* * * * * *" id="password" name="password" class="form-control" required="">
              </div>
              <div class="form-group">
                <button type="submit" name="userRegBtn" class="btn btn-lg btn-primary">Login</button>
                <a class="for-got" onclick="ayantoggle();" href="javascript:;">Lupa Password?</a>
              </div>

            </form>
            <div class="clearfix"></div>
            <form method="post" class="signin-form">

              <div class="forgot">

                <div class="form-group">
                  <label for="usr">Masukan alamat email yang akan untuk reset password</label>
                  <input type="text" placeholder="Your user email id" id="userName" name="userName" class="form-control" required="">
                </div>
                <div class="form-group">
                  <button type="submit" name="userRegBtn" class="btn btn-lg btn-default">Send Mail</button>
                </div>

              </div>

            </form>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-explain">
          <h3>What's login?</h3>
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
                  anim.</p>
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
            <a href="page-register.html" class="btn btn-lg btn-primary">Create new account</a>
            <a href="" class="btn btn-lg btn-default">See more..</a>
          </p>
        </div>

        <div class="clearfix"></div>
      </div>

    </article>
  </div>
  <div style="margin-bottom:50px;"></div>
</main>
@endsection
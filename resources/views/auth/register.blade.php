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
            <form role="form" method="POST" action="{{route('register')}}" class="signin-form" >
              {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputEmail1">Status Pengguna</label>
                <select class="form-control select2" name="level">
                  <option >Pilih Status</option>
                  <option value="student">Studentpreneur</option>
                  <option value="investor">Investor</option>
                </select>
              </div>
              <div class="form-group">
                <label for="usr">Nama Lengkap</label>
                <input type="text" placeholder="Husein Indra Kusuma" name="name" class="form-control" required="">
              </div>

              <div class="form-group">
                <label for="usr">Email:</label>
                <input type="text" placeholder="youremail@domain.com" name="email" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" placeholder="* * * * * *" id="password" name="password" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="pwd">Konfirmasi Password</label>
                <input type="password" placeholder="* * * * * *" name="password_confirmation" class="form-control" required="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary">Buat Akun</button>
              </div>
            </form>
            <!-- <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                  <input placeholder="Your Display Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                    autofocus> @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                  <input placeholder="Enter Your Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                    required> @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                  <input placeholder="Your Password" id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                  <input placeholder="Re-Type Your Password" id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
                </div>
              </div>
            </form> -->
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
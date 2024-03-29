<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">


  <title>Kampus Fund | Together We Achieve</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('libs/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


  <!-- Setting only -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Germania+One|Lobster|Yanone+Kaffeesatz:200,300,400,700"
    rel="stylesheet">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <!-- CSS libraries -->
  <link href="{{asset('libs/animate.css')}}" rel="stylesheet">
  <link href="{{asset('libs/hover-min')}}.css" rel="stylesheet">
  <link href="{{asset('libs/lightbox.min')}}.css" rel="stylesheet">
  <link href="{{asset('libs/font-awesome')}}.min.css" rel="stylesheet">

  <!-- Main styles -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/mobile.css')}}" rel="stylesheet">

  <!-- Custom style for other home page guides -->
  <link href="{{asset('css/customize.css')}}" rel="stylesheet">

  <!--Freshchat   -->
  <script src="https://wchat.freshchat.com/js/widget.js"></script>

</head>

<body class="home-2">
  <header>
    <!-- Pada header fungsi button profile dan alert hanya terlihat ketika sudah login-->
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
              aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="logo">
              <a href="{{url('/')}}" class="navbar-logo">
                <img src="{{asset('images/logo/kampusfundlogo.png')}}">
              </a>
            </div>

            <div class="mobile-alert visible-xs">
              <ul class="nav navbar-nav navbar-right">

              </ul>
            </div>
          </div>
          <div id="navbar" class="navbar-collapse nav-main collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="{{url('/')}}">Beranda</a>
              </li>
              <li>
                <a href="#">Cara Kerja</a>
              </li>
              <li class="dropdown dropdown-not-auto mega-dropdown menu-alert">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell-o" aria-hidden="true"></i>
                  <span class="badge">4</span>
                </a>

                <div class="dropdown-menu mega-dropdown-menu">
                  <div class="widget-features">
                    <ul class="menu-alert-message">
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="page-alerts-detail.html">
                              <img class="media-object img-circle" src="" alt="...">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading">
                              <a href="page-alerts-detail.html">Cras sit amet nibh libero, in gravida nulla</a>
                            </h4>
                            <div class="info">
                              <div class="date">
                                March 9, 2017
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="showalls">
                        <a href="page-alerts.html">Show all messages
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
              </li>
              <li class="li-signin">
                @if(Auth::guest())
                <a href="{{route('login')}}">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i> Sign in</a>
                @else
                <a href="#">
                  <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{Auth::user()->name}}
                </a>
                @endif
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                  <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    <input type="hidden" name="remember_token" value="">
                    {{ csrf_field() }}
                  </form>
                </ul>
              </li>

            </ul>

          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
      <!--/.container -->


    </nav>
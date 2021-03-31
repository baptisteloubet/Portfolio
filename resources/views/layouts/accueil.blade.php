<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Le portolio de Baptiste Loubet">
  <meta name="author" content="Baptiste Loubet">

  <title>Baptiste Loubet - Portfolio</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('css/stylish-portfolio.min.css')}}" rel="stylesheet">

   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-RTLWGLVXDX"></script>
   <script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());

   gtag('config', 'G-RTLWGLVXDX');
   </script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="/#page-top">Acceuil</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="/#about">A propos de moi</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="/#services">Mes compétences </a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="/#portfolio">Mes projets</a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="/#contact">Contact</a>
      </li>
      @guest
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="{{route('login')}}">Connexion <i class="fas fa-user-circle"></i></a>
      </li>
      @else
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="{{route('profile.edit', auth()->id())}}">Mon compte <i class="fas fa-user-circle"></i></a>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="{{route('logout')}}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Déconnexion <i class="fas fa-sign-out-alt"></i></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>
      @endguest
      <li class="sidebar-nav-item">
        @can('is_admin')
          <a class="js-scroll-trigger" href="{{route('dashboard.index')}}">Dashboard <i class="fas fa-tachometer-alt"></i></a>
        @endcan
      </li>
    </ul>
  </nav>

  @yield('content')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('js/stylish-portfolio.min.js')}}"></script>

</body>

</html>

       

       
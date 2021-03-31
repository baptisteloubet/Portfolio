<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="{{asset('css/dashboard_style.css')}}" rel="stylesheet" />
        <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet" />
        <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('accueil.index')}}">Acceuil</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{route('dashboard.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('dashboard.main')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Accueil
                            </a>
                            <a class="nav-link" href="{{route('dashboard.me')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-male"></i></div>
                                A propos de moi
                            </a>
                            <a class="nav-link" href="{{route('dashboard.project')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                Projets
                            </a>
                            <a class="nav-link" href="{{route('dashboard.skill')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Compétences
                            </a>
                            <a class="nav-link" href="{{route('dashboard.contact')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                Contact
                            </a>
                            <a class="nav-link" href="{{route('admin.users.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Liste des utilisateurs
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tant que:</div>
                        {{$user->name}}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content"> 
                @yield('content')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/dashboard_js.js')}}"></script>
    </body>
</html>

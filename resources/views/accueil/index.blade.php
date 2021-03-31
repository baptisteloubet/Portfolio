@extends('layouts.accueil')

@section('content')
    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
        <h1 class="mb-1">{{$main->title}}</h1>
        <h3 class="mb-5">
            <em>{{$main->description}}</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">{{$me->title}}</a>
        </div>
        <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
        <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
            <h2>{{$me->title}}</h2>
            <p class="lead mb-5">{{$me->description}}</p>
            <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">Mes compétences</a>
            </div>
        </div>
        </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container">
        <div class="content-section-heading">
            <h2 class="mb-5">Mes compétences</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
                <i class="icon-screen-smartphone"></i>
            </span>
            <h4>
                <strong>{{$skill->title1}}</strong>
            </h4>
            <p class="text-faded mb-0">{{$skill->description1}}</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
                <i class="icon-pencil"></i>
            </span>
            <h4>
                <strong>{{$skill->title2}}</strong>
            </h4>
            <p class="text-faded mb-0">{{$skill->description2}}</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <span class="service-icon rounded-circle mx-auto mb-3">
                <i class="icon-like"></i>
            </span>
            <h4>
                <strong>{{$skill->title3}}</strong>
            </h4>
            <p class="text-faded mb-0">{{$skill->description3}}</p>
            </div>
            <div class="col-lg-3 col-md-6">
            <span class="service-icon rounded-circle mx-auto mb-3">
                <i class="icon-mustache"></i>
            </span>
            <h4>
                <strong>{{$skill->title4}}</strong>
            </h4>
            <p class="text-faded mb-0">{{$skill->description4}}</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Callout -->
    <section class="callout">
        <div class="container text-center">
        <h2 class="mx-auto mb-5">Découvrez mes projets !</h2>
        <a class="btn btn-primary btn-xl" href="#portfolio">Mes projets</a>
        </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
        <div class="container">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Mes projets</h2>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                <div class="caption-content">
                    <div class="h2">{{$project->title1}}</div>
                    <p class="mb-0">{{$project->description1}}</p>
                </div>
                </div>
                <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
            </a>
            </div>
            <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                <div class="caption-content">
                    <div class="h2">{{$project->title2}}</div>
                    <p class="mb-0">{{$project->description2}}</p>
                </div>
                </div>
                <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
            </a>
            </div>
            <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                <div class="caption-content">
                    <div class="h2">{{$project->title3}}</div>
                    <p class="mb-0">{{$project->description3}}</p>
                </div>
                </div>
                <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
            </a>
            </div>
            <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                <div class="caption-content">
                    <div class="h2">{{$project->title4}}</div>
                    <p class="mb-0">{{$project->description4}}</p>
                </div>
                </div>
                <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
            </a>
            </div>
        </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="contact" class="content-section bg-primary text-white">
        <div class="container text-center">
        <h2 class="mb-4">{{$contact->title}}</h2>
        <a href="assets/pdf/CV.pdf" download="CV-Baptiste-Loubet" class="btn btn-xl btn-dark">{{$contact->description}}</a>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt fa-3x text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Adresse</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="https://www.google.com/maps/place/103+Route+de+Genas,+69100+Villeurbanne/@45.7544682,4.8821167,17z/data=!3m1!4b1!4m5!3m4!1s0x47f4c1cf008b4069:0xe6ba387354c8220a!8m2!3d45.7544682!4d4.8843054">103 Route de Genas, Villeurbanne</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope fa-3x text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="mailto:baptiste.loubet@outlook.com">baptiste.loubet@outlook.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt fa-3x text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Téléphone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="tel:06 59 59 64 33">06 59 59 64 33</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="https://www.linkedin.com/in/baptiste-loubet-778b031a2/">
                <i class="fab fa-linkedin"></i>
            </a>
            </li>
            <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="https://github.com/baptisteloubet">
                <i class="icon-social-github"></i>
            </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Baptiste Loubet - Mon Portfolio 2021</p>
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection    

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dog>Care">
    <meta name="author" content="DogCare">
    <title>DogCare</title>
    <!-- Favicon -->
    <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>

<body>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        @if(\Auth::user()->tipo_usuario == 'Propietario')
            <a class="navbar-brand pt-0" href="../home">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
            <a class="navbar-brand pt-0" href="../homeCuidador">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
    @endif
    <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">DogCare</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>Mi perfil</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-paw"></i>
                        <span>Mascotas</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Servicio</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../home">
                            <img src="../assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../cuidador">
                        <i class="ni ni-pin-3 text-purple"></i> Cuidador
                    </a>
                </li>
                <li class="nav-item">
                    @if(Auth::user()->tipo_usuario == 'Propietario')
                        <a class="nav-link" href="../home">
                            <i class="ni ni-single-02 text-blue"></i> Perfil
                        </a>
                    @elseif(Auth::user()->tipo_usuario == 'Cuidador')
                        <a class="nav-link" href="../homeCuidador">
                            <i class="ni ni-single-02 text-blue"></i> Perfil
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            @if(Auth::user()->tipo_usuario == 'Propietario')
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../home">Perfil</a>
            @elseif(Auth::user()->tipo_usuario == 'Cuidador')
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../homeCuidador">Perfil</a>
        @endif
        <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ url('/imagePerfil/'.Auth::user()->image) }}">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">DogCare</h6>
                        </div>
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Mi perfil</span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-paw"></i>
                            <span>Mascotas</span>
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Servicio</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Cuidadores</h1>
                    <p class="text-white mt-0 mb-5"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card card-profile shadow mt--30">
                    <div class="px-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="{{ url('/imagePerfil/'.$user->image) }}" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                <div class="card-profile-actions py-4 mt-lg-0">
                                    <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                                    <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Friends</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Photos</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <h3>{{$user->name}}
                                <span class="font-weight-light">, {{ Carbon::parse($user->nacimiento)->age }}</span>
                            </h3>
                            <div class="h4 font-weight-300"><i class="ni location_pin mr-2"></i>{{ $user->departamento }}, {{ $user->zona }}</div>
                            <div><i class="ni education_hat mr-2"></i>{{ $user->descripcion }}</div>
                        </div>
                        <div class="mt-5 py-5 border-top text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Paseo')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->precio_paseo }} Bs. por hora</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                                                    <i class="fas fa-walking"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Alojamiento')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->precio_alojamiento }} Bs. por dia</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                                                    <i class="fas fa-building"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Tipo de Casa')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->tipo_casa }}</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                                                    <i class="fas fa-home"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Jardin')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->jardin }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Balcon')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->balcon }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-12">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Terraza')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->terraza }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            aca debe ir comentarios y puntuacion
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row justify-content-center">
                                        <div class="text-center">
                                            <div class="d-flex justify-content-between">
                                                <h3 class="mb-0">DISPONIBILIDAD</h3>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <form>
                                                    @csrf
                                                    {!! $calendar_details->calendar() !!}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2018
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.0.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar_details->script() !!}

</body>

</html>



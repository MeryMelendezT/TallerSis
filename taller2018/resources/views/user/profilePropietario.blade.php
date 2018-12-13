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
            <a class="navbar-brand pt-0" href="{{ url('/profilePropietario/'.Auth::user()->id) }}">
                <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
            <a class="navbar-brand pt-0" href="{{ url('/profileCuidador/'.Auth::user()->id) }}">
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
                <img alt="Image placeholder" src="{{ url('/imagePerfil/'.Auth::user()->image) }}">
              </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">DogCare</h6>
                    </div>
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a href="{{ url('/profilePropietario/'.Auth::user()->id) }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Mi perfil</span>
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a href="{{ url('/profileCuidador/'.Auth::user()->id) }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>Mi perfil</span>
                        </a>
                    @endif
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a href="/servicio" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Servicios</span>
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a href="/servicioCuidador" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Servicios</span>
                        </a>
                    @endif
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a href="/home" class="dropdown-item">
                            <i class="fas fa-id-card"></i>
                            <span>Mi Cuenta</span>
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a href="/homeCuidador" class="dropdown-item">
                            <i class="fas fa-id-card"></i>
                            <span>Mi Cuenta</span>
                        </a>
                    @endif
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
                        @if(\Auth::user()->tipo_usuario == 'Propietario')
                            <a href="{{ url('/profilePropietario/'.Auth::user()->id) }}" class="dropdown-item">
                                <img src="../assets/img/brand/blue.png">
                            </a>
                        @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                            <a href="{{ url('/profileCuidador/'.Auth::user()->id) }}" class="dropdown-item">
                                <img src="../assets/img/brand/blue.png">
                            </a>
                        @endif
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
                    <a class="nav-link" href="../cuidador">
                        <i class="ni ni-pin-3 text-purple"></i> Cuidador
                    </a>
                </li>
                <li class="nav-item">
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a class="nav-link active" href="{{ url('/profilePropietario/'.Auth::user()->id) }}" class="dropdown-item">
                            <i class="ni ni-single-02 text-blue"></i> Perfil
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a class="nav-link active" href="{{ url('/profileCuidador/'.Auth::user()->id) }}" class="dropdown-item">
                            <i class="ni ni-single-02 text-blue"></i> Perfil
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a href="/servicio" class="nav-link">
                            <i class="fas fa-list-alt text-teal"></i>
                            <span>Servicios</span>
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a href="/servicioCuidador" class="nav-link">
                            <i class="fas fa-list-alt text-teal"></i>
                            <span>Servicios</span>
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a class="nav-link" href="/home" class="dropdown-item">
                            <i class="fas fa-id-card text-indigo"></i> Mi Cuenta
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a class="nav-link" href="/homeCuidador" class="dropdown-item">
                            <i class="fas fa-id-card text-indigo"></i> Mi Cuenta
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
            @if(\Auth::user()->tipo_usuario == 'Propietario')
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ url('/profilePropietario/'.Auth::user()->id) }}">Perfil</a>

            @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ url('/profileCuidador/'.Auth::user()->id) }}">Perfil</a>
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
                        @if(\Auth::user()->tipo_usuario == 'Propietario')
                            <a href="{{ url('/profilePropietario/'.Auth::user()->id) }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Mi perfil</span>
                            </a>
                        @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                            <a href="{{ url('/profileCuidador/'.Auth::user()->id) }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Mi perfil</span>
                            </a>
                        @endif
                        @if(\Auth::user()->tipo_usuario == 'Propietario')
                            <a href="/servicio" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Servicios</span>
                            </a>
                        @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                            <a href="/servicioCuidador" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Servicios</span>
                            </a>
                        @endif
                        @if(\Auth::user()->tipo_usuario == 'Propietario')
                            <a href="/home" class="dropdown-item">
                                <i class="fas fa-id-card"></i>
                                <span>Mi Cuenta</span>
                            </a>
                        @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                            <a href="/homeCuidador" class="dropdown-item">
                                <i class="fas fa-id-card"></i>
                                <span>Mi Cuenta</span>
                            </a>
                        @endif
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
                    <h1 class="display-2 text-white">Propietarios</h1>
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
                                @if(\Auth::user()->id == $user->id)
                                    <a href="/editarUsuario" class="btn btn-sm btn-info mr-4">Editar Perfil</a>
                                    <a href="/crearCanino" class="btn btn-sm btn-default float-right">Agregar Mascota</a>
                                    <br/>
                                @elseif(\Auth::user()->id != $user->id)
                                    <br/><br/>
                                @endif
                                </div>
                            </div>
                            <div class="col-lg-4 order-lg-1">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">{{$count}}</span>
                                        <span class="description">Mascotas</span>
                                    </div>
                                    <div>
                                        <span class="heading">{{$countServicioP}}</span>
                                        <span class="description">Servicio Solicitados</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <h3>{{$user->name}}
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
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Departamento')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->departamento }}</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                                                    <i class="fas fa-map-marked-alt"></i>
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
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Zona')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->zona }}</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                                                    <i class="fas fa-route"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="card card-stats mb-4 mb-xl-0">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h5 class="card-title text-uppercase text-muted mb-0">{{__('Telefono')}}</h5>
                                                                <span class="h2 font-weight-bold mb-0">{{ $user->telefono }}</span>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                                                                    <i class="fas fa-mobile-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table align-items-center table-flush">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Nombre</th>
                                                        <th scope="col">Comentario</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($comentarios as $comentario)
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="media align-items-center">
                                                                    <div class="media-body">
                                                                        <span class="mb-0 text-sm">{{$comentario->usuario_id}}, {{ \FormatTime::LongTimeFilter($comentario->created_at)}}</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                {{$comentario->comentario}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <div class="card-footer py-4">
                                                    <nav aria-label="...">
                                                        <ul class="pagination justify-content-end mb-0">
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row justify-content-center">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-header border-0">
                                                    <h3 class="mb-0">Listado Mascotas</h3>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Raza</th>
                                                            <th scope="col">Fecha de Nacimiento</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($caninos as $canino)
                                                            @if($user->id == $canino->user->id)
                                                                <tr>
                                                                    <th scope="row">
                                                                        <div class="media align-items-center">
                                                                            <a href="{{ url('/profileMascota/'.$canino->id) }}" class="avatar rounded-circle mr-3">
                                                                                @if(Storage::disk('images')->has($canino->image))
                                                                                    <img alt="Image placeholder" src="{{ url('/image/'.$canino->image) }}">
                                                                                @endif
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <span class="mb-0 text-sm">{{$canino->nombre}}</span>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <td>
                                                                        {{$canino->raza}}
                                                                    </td>
                                                                    <td>
                                                                        {{$canino->nacimiento}}
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <div class="dropdown">
                                                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                                <a class="dropdown-item" href="{{ url('/profileMascota/'.$canino->id) }}">Ver</a>
                                                                                @if(Auth::check() && Auth::user()->id == $canino->user->id)
                                                                                    <a class="dropdown-item" href="{{ url('/editarCanino/'.$canino->id) }}">Editar</a>
                                                                                    <a id="#modal{{$canino->id}}" class="dropdown-item" href="{{ url( '/eliminarCanino/'.$canino->id) }}">Eliminar</a>

                                                                                    <div id="modal{{$canino->id}}" class="modal fade">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                                    <h4 class="modal-title">¿Estás seguro?</h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <p>¿Seguro que quieres borrar este video?</p>
                                                                                                    <p class="text-warning"><small>{{$canino->nombre}}</small></p>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                                                    <a href="{{ url('/eliminarCanino/'.$canino->id) }}" type="button" class="btn btn-danger">Eliminar</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="card-footer py-4">
                                                    <nav aria-label="...">
                                                        <ul class="pagination justify-content-end mb-0">
                                                            {{$caninos->links()}}
                                                        </ul>
                                                    </nav>
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

</body>

</html>



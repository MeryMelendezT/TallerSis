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
    <link type="text/css" href="./assets2/css/docs.min.css" rel="stylesheet">

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
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Servicios</span>
                    </a>
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
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Servicios</span>
                        </a>
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
                    <h1 class="display-2 text-white">Solicitar Servicio</h1>
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
                                        <a href="/editarCuidador" class="btn btn-sm btn-info mr-4">Editar Perfil</a>
                                        <a href="/crearEvent" class="btn btn-sm btn-default float-right">Editar Disponibilidad</a>
                                        <br/>
                                    @elseif(\Auth::user()->id != $user->id)
                                        <br/><br/>
                                    @endif
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
                                        @if($user->paseo == 'Si' && $user->alojamiento == 'Si')
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
                                        @elseif($user->paseo == 'Si' && $user->alojamiento == 'No')
                                            <div class="col-lg-12">
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
                                        @elseif($user->paseo == 'No' && $user->alojamiento == 'Si')
                                            <div class="col-lg-12">
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
                                        @endif
                                        <div class="col-lg-12">
                                            <!-- Tabs with icons -->
                                            <div class="nav-wrapper">
                                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-walking"></i> Paseo</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-building"></i> Alojamiento</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" role="tabpanel" id="tabs-icons-text-1" aria-labelledby="tabs-icons-text-1-tab">
                                                            <div class="card-body">
                                                                <form method="POST" action="{{ route('savePropietario') }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <h4 class="text-muted mb-4">Perfil Propietario</h4>
                                                                    <div class="pl-lg-4">
                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="user_id">{{ __('Propietario') }}</label>
                                                                                    <input type="text" id="user_id" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{ Auth::user()->id }}" placeholder="Propietario" pattern="[0-9 ]+" required autofocus disabled>
                                                                                    @if ($errors->has('user_id'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('user_id') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="user_id_1">{{ __('Cuidador') }}</label>
                                                                                    <input type="text" id="user_id_1" class="form-control{{ $errors->has('user_id_1') ? ' is-invalid' : '' }}" name="user_id_1" value="{{ $user->id}}" pattern="[0-9 ]+" placeholder="Cuidador" required disabled>
                                                                                    @if ($errors->has('user_id_1'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('user_id_1') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="tipo_servicio">{{ __('Tipo de Servicio') }}</label>
                                                                                    <input type="text" id="tipo_servicio" class="form-control{{ $errors->has('tipo_servicio') ? ' is-invalid' : '' }}" name="tipo_servicio" value="Paseo" pattern="[a-zA-Z ]+" placeholder="Paseo" required disabled>
                                                                                    @if ($errors->has('tipo_servicio'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('tipo_servicio') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="precio">{{ __('Precio de Paseo Bs (Por hora).') }}</label>
                                                                                    <input type="text" id="precio" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" name="precio" value="{{ $user->precio_paseo }}" placeholder="precio" required disabled>
                                                                                    @if ($errors->has('precio'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('precio') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="tipo_servicio">Tipo de Servicio</label>
                                                                                    <input type="text" id="tipo_servicio" class="form-control form-control-alternative" value="Paseo" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <div class="input-datetimerange datepicker row align-items-center">
                                                                                        <div class="col">
                                                                                            <div class="form-group">
                                                                                                <label class="form-control-label" for="fecha_inicio">{{ __('Inicio de servicio') }}</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                                                    </div>
                                                                                                    <input class="form-control" placeholder="Fecha de Inicio" type="datetime-local" id="fecha_inicio" name="fecha_inicio">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="form-group">
                                                                                                <label class="form-control-label" for="fecha_fin">{{ __('Final de servicio') }}</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                                                    </div>
                                                                                                    <input class="form-control" placeholder="Fecha de final" type="datetime-local" id="fecha_fin" name="fecha_fin" >
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="my-4" />
                                                                        <h6 class="heading-small text-muted mb-4">Direccion</h6>


                                                                    </div>
                                                                    <div class="form-group row mb-0">
                                                                        <div class="col-md-12 offset-md-5">
                                                                            <button type="submit" class="btn btn-primary">
                                                                                {{ __('Registrarse') }}
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" role="tabpanel" id="tabs-icons-text-2" aria-labelledby="tabs-icons-text-2-tab">
                                                            <div class="card-body">
                                                                <form method="POST" action="{{ route('savePropietario') }}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <h4 class="text-muted mb-4">Perfil Propietario</h4>
                                                                    <div class="pl-lg-4">
                                                                        <div class="row">
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="user_id">{{ __('Propietario') }}</label>
                                                                                    <input type="text" id="user_id" class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" value="{{ Auth::user()->id }}" placeholder="Propietario" pattern="[0-9 ]+" required autofocus disabled>
                                                                                    @if ($errors->has('user_id'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('user_id') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="user_id_1">{{ __('Cuidador') }}</label>
                                                                                    <input type="text" id="user_id_1" class="form-control{{ $errors->has('user_id_1') ? ' is-invalid' : '' }}" name="user_id_1" value="{{ $user->id}}" pattern="[0-9 ]+" placeholder="Cuidador" required disabled>
                                                                                    @if ($errors->has('user_id_1'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('user_id_1') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="tipo_servicio">{{ __('Tipo de Servicio') }}</label>
                                                                                    <input type="text" id="tipo_servicio" class="form-control{{ $errors->has('tipo_servicio') ? ' is-invalid' : '' }}" name="tipo_servicio" value="Paseo" pattern="[a-zA-Z ]+" placeholder="Paseo" required disabled>
                                                                                    @if ($errors->has('tipo_servicio'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('tipo_servicio') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="precio">{{ __('Precio de Paseo Bs.') }}</label>
                                                                                    <input type="text" id="precio" class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}" name="precio" value="{{ $user->precio_paseo }}" placeholder="precio" required disabled>
                                                                                    @if ($errors->has('precio'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('precio') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="tipo_servicio">Tipo de Servicio</label>
                                                                                    <input type="text" id="tipo_servicio" class="form-control form-control-alternative" value="Paseo" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <div class="input-datetimerange datepicker row align-items-center">
                                                                                        <div class="col">
                                                                                            <div class="form-group">
                                                                                                <label class="form-control-label" for="fecha_inicio">{{ __('Inicio de servicio') }}</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                                                    </div>
                                                                                                    <input class="form-control" placeholder="Fecha de Inicio" type="datetime-local" id="fecha_inicio" name="fecha_inicio">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col">
                                                                                            <div class="form-group">
                                                                                                <label class="form-control-label" for="fecha_fin">{{ __('Final de servicio') }}</label>
                                                                                                <div class="input-group">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                                                                    </div>
                                                                                                    <input class="form-control" placeholder="Fecha de final" type="datetime-local" id="fecha_fin" name="fecha_fin">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="precio_empresa">{{ __('Precio de Impuestos y otros Bs.') }}</label>
                                                                                    <input type="text" id="precio_empresa" class="form-control{{ $errors->has('precio_empresa') ? ' is-invalid' : '' }}" name="precio_empresa" value="{{ ($user->precio_paseo)*0.26 }}" placeholder="Precio impuestos y otros" required disabled>
                                                                                    @if ($errors->has('precio_empresa'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('precio_empresa') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-control-label" for="precio_total">{{ __('Precio Total a Pagar Bs.') }}</label>
                                                                                    <input type="text" id="precio_total" class="form-control{{ $errors->has('precio_total') ? ' is-invalid' : '' }}" name="precio_total" value="{{ $user->precio_paseo+($user->precio_paseo)*0.26 }}" placeholder="Precio total" required disabled>
                                                                                    @if ($errors->has('precio_empresa'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('precio_empresa') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="my-4" />
                                                                        <h6 class="heading-small text-muted mb-4">Direccion</h6>


                                                                    </div>
                                                                    <div class="form-group row mb-0">
                                                                        <div class="col-md-12 offset-md-5">
                                                                            <button type="submit" class="btn btn-primary">
                                                                                {{ __('Registrarse') }}
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
<script src="../assets2/vendor/bootstrap/bootstrap.min.js"></script>

<script src="./assets2/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.0.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar_details->script() !!}

<script type="text/javascript">

    $('.date').datepicker({
        format: 'yyyy-mm-dd HH:mm',
        language: 'es',
        autoclose: true

    });

</script>



</body>

</html>



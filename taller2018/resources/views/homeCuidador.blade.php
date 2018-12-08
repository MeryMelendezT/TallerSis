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
                        <a class="nav-link" href="{{ url('/profilePropietario/'.Auth::user()->id) }}" class="dropdown-item">
                            <i class="ni ni-single-02 text-blue"></i> Perfil
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a class="nav-link" href="{{ url('/profileCuidador/'.Auth::user()->id) }}" class="dropdown-item">
                            <i class="ni ni-single-02 text-blue"></i> Perfil
                        </a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(\Auth::user()->tipo_usuario == 'Propietario')
                        <a class="nav-link active" href="/home" class="dropdown-item">
                            <i class="fas fa-id-card text-indigo"></i> Mi Cuenta
                        </a>
                    @elseif(\Auth::user()->tipo_usuario == 'Cuidador')
                        <a class="nav-link active" href="/homeCuidador" class="dropdown-item">
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
                    <h1 class="display-2 text-white">Hola {{ Auth::user()->name }} {{ Auth::user()->apellido }} </h1>
                    <p class="text-white mt-0 mb-5"></p>>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-6 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{ url('/imagePerfil/'.Auth::user()->image) }}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">DATOS PERSONALES</h3>
                            <a href="/editarCuidador" class="btn btn-sm btn-default float-right">Editar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            @csrf
                            <h4 class="text-muted mb-4">Perfil Propietario</h4>
                            <h6 class="heading-small text-muted mb-4">Informacion de usuario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">{{ __('Nombres') }}</label>
                                            <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" placeholder="Nombres" pattern="[a-zA-Z ]+" required autofocus disabled>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="apellido">{{ __('Apellidos') }}</label>
                                            <input type="text" id="apellido" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ Auth::user()->apellido }}" pattern="[a-zA-Z ]+" placeholder="Apellidos" required disabled>
                                            @if ($errors->has('apellido'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('apellido') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Correo electronico</label>
                                            <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" placeholder="jesse@example.com" required disabled>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="departamento">{{ __('Departamento') }}</label>
                                            <input type="text" id="departamento" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{ Auth::user()->departamento }}" pattern="[a-zA-Z ]+" placeholder="Departamento" required disabled>
                                            @if ($errors->has('departamento'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('departamento') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="zona">{{ __('Zona') }}</label>
                                            <input type="text" id="zona" class="form-control{{ $errors->has('zona') ? ' is-invalid' : '' }}" name="zona" value="{{ Auth::user()->zona }}" placeholder="Zona" pattern="[a-zA-Z0-9 ]+" required disabled>
                                            @if ($errors->has('zona'))
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('zona') }}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="calle">{{ __('Calle') }}</label>
                                            <input type="text" id="calle" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ Auth::user()->calle }}" placeholder="Calle" pattern="[a-zA-Z0-9 ]+" required disabled>
                                            @if ($errors->has('calle'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('calle') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label" for="numero_puerta">{{ __('Numero de puerta') }}</label>
                                            <input type="text" id="numero_puerta" class="form-control{{ $errors->has('numero_puerta') ? ' is-invalid' : '' }}" name="numero_puerta" value="{{ Auth::user()->numero_puerta }}" placeholder="Numero de Puerta" pattern="[a-zA-Z0-9 ]+" required disabled>
                                            @if ($errors->has('numero_puerta'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('numero_puerta') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="direccion">{{ __('Direccion') }}</label>
                                            <input type="text" id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ Auth::user()->direccion }}" placeholder="Direccion" pattern="[a-zA-Z0-9., ]+" required disabled>
                                            @if ($errors->has('direccion'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('direccion') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="telefono">{{ __('Telefono') }}</label>
                                            <input type="number" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ Auth::user()->telefono }}" placeholder="Telefono" pattern="[0-9]+" required disabled>
                                            @if ($errors->has('telefono'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('telefono') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ci">{{ __('Carnet de Identidad') }}</label>
                                            <input type="text" id="ci" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ Auth::user()->ci }}" placeholder="Carnet de Identidad" pattern="[a-zA-Z0-9., ]+" required disabled>
                                            @if ($errors->has('ci'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('ci') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="direccion">{{ __('¿Cuantos perros tiene en casa?') }}</label>
                                            <input type="number" id="numero_canes" class="form-control{{ $errors->has('numero_canes') ? ' is-invalid' : '' }}" name="numero_canes" value="{{ Auth::user()->numero_canes }}" placeholder="¿Cuantos perros tiene en casa?" pattern="[0-9 ]+" required disabled>
                                            @if ($errors->has('numero_canes'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('numero_canes') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="nacimiento">{{ __('Fecha de Nacimiento') }}</label>
                                            <input type="date" id="nacimiento" class="form-control" name="nacimiento" placeholder="Seleccionar fecha de nacimiento" value="{{ Auth::user()->nacimiento }}" required disabled>
                                            @if ($errors->has('nacimiento'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('nacimiento') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Descripcion</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="descripcion">{{ __('Ingrese descripcion del servicio') }}</label>
                                            <textarea id="descripcion" name="descripcion" rows="1" class="form-control" placeholder="Ingrese referencias laborales" disabled>{{ Auth::user()->descripcion }}</textarea>
                                            @if ($errors->has('descripcion'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="trabajo">{{ __('Ingrese referencias laborales') }}</label>
                                            <textarea id="trabajo" name="trabajo" rows="1" class="form-control" placeholder="Ingrese referencias laborales" disabled>{{ Auth::user()->trabajo }}</textarea>
                                            @if ($errors->has('trabajo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('trabajo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="col-md-12">
                                            <div class="col-lg-6">
                                                <small class="text-uppercase font-weight-bold">{{ __('Jardin') }}</small>
                                            </div>
                                            @if(Auth::user()->jardin == 'Si')
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="jardin" class="custom-control-input" id="jardines" checked type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="jardines">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="jardin" class="custom-control-input" id="jardin_no" type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="jardin_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            @elseif(Auth::user()->jardin == 'No')
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="jardin" class="custom-control-input" id="jardines" type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="jardines">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="jardin" class="custom-control-input" id="jardin_no" checked  type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="jardin_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-md-12">
                                            <div class="col-lg-6">
                                                <small class="text-uppercase font-weight-bold">{{ __('Terraza') }}</small>
                                            </div>
                                            @if(Auth::user()->terraza == 'Si')
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="terraza" class="custom-control-input" id="terraza" checked type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="terraza">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="terraza" class="custom-control-input" id="terraza_no" type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="terraza_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            @elseif(Auth::user()->terraza == 'No')
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="terraza" class="custom-control-input" id="terraza" type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="terraza">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="terraza" class="custom-control-input" id="terraza_no" checked type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="terraza_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-md-12">
                                            <div class="col-lg-6">
                                                <small class="text-uppercase font-weight-bold">{{ __('Balcon') }}</small>
                                            </div>
                                            @if(Auth::user()->balcon == 'Si')
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="balcon" class="custom-control-input" id="balcon" checked type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="balcon">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="balcon" class="custom-control-input" id="balcon_no" type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="balcon_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            @elseif(Auth::user()->balcon == 'No')
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="balcon" class="custom-control-input" id="balcon" type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="balcon">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="balcon" class="custom-control-input" id="balcon_no" checked type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="balcon_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="row" align="center">
                                <div class="col-lg-12">
                                    <div class="col-md-12">
                                        <div class="col-lg-12">
                                            <small class="text-uppercase font-weight-bold">{{ __('Tipo de Casa') }}</small>
                                        </div>
                                        @if(Auth::user()->tipo_casa == 'Casa Patio')
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Patio" checked type="radio" value="Casa Patio" disabled>
                                                <label class="custom-control-label" for="Patio">
                                                    <span>Casa Patio</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Apartamento" type="radio" value="Apartamento" disabled>
                                                <label class="custom-control-label" for="Apartamento">
                                                    <span>Apartamento</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Duplex" type="radio" value="Duplex" disabled>
                                                <label class="custom-control-label" for="Duplex">
                                                    <span>Duplex</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Chalet" type="radio" value="Chalet" disabled>
                                                <label class="custom-control-label" for="Chalet">
                                                    <span>Chalet</span>
                                                </label>
                                            </div>
                                        @elseif(Auth::user()->tipo_casa == 'Apartamento')
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Patio" type="radio" value="Casa Patio" disabled>
                                                <label class="custom-control-label" for="Patio">
                                                    <span>Casa Patio</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Apartamento" checked type="radio" value="Apartamento" disabled>
                                                <label class="custom-control-label" for="Apartamento">
                                                    <span>Apartamento</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Duplex" type="radio" value="Duplex" disabled>
                                                <label class="custom-control-label" for="Duplex">
                                                    <span>Duplex</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Chalet" type="radio" value="Chalet" disabled>
                                                <label class="custom-control-label" for="Chalet">
                                                    <span>Chalet</span>
                                                </label>
                                            </div>
                                        @elseif(Auth::user()->tipo_casa == 'Duplex')
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Patio" type="radio" value="Casa Patio" disabled>
                                                <label class="custom-control-label" for="Patio">
                                                    <span>Casa Patio</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Apartamento" type="radio" value="Apartamento" disabled>
                                                <label class="custom-control-label" for="Apartamento">
                                                    <span>Apartamento</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Duplex" checked type="radio" value="Duplex" disabled>
                                                <label class="custom-control-label" for="Duplex">
                                                    <span>Duplex</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Chalet" type="radio" value="Chalet" disabled>
                                                <label class="custom-control-label" for="Chalet">
                                                    <span>Chalet</span>
                                                </label>
                                            </div>
                                        @elseif(Auth::user()->tipo_casa == 'Chalet')
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Patio" type="radio" value="Casa Patio" disabled>
                                                <label class="custom-control-label" for="Patio">
                                                    <span>Casa Patio</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Apartamento" type="radio" value="Apartamento" disabled>
                                                <label class="custom-control-label" for="Apartamento">
                                                    <span>Apartamento</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Duplex" type="radio" value="Duplex" disabled>
                                                <label class="custom-control-label" for="Duplex">
                                                    <span>Duplex</span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                <input name="tipo_casa" class="custom-control-input" id="Chalet" checked type="radio" value="Chalet" disabled>
                                                <label class="custom-control-label" for="Chalet">
                                                    <span>Chalet</span>
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <h4 class="text-muted mb-4">Servicios</h4>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12">
                                            <small class="text-uppercase font-weight-bold">{{ __('Alojamiento') }}</small>
                                        </div>
                                        @if(Auth::user()->alojamiento == 'Si')
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="alojamiento" class="custom-control-input" id="alojamiento" checked type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="alojamiento">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="alojamiento" class="custom-control-input" id="alojamiento_no" type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="alojamiento_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        @elseif(Auth::user()->alojamiento == 'No')
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="alojamiento" class="custom-control-input" id="alojamiento" type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="alojamiento">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="alojamiento" class="custom-control-input" id="alojamiento_no" checked type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="alojamiento_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">{{ __('Precio Por Dia') }}</label>
                                            <input type="number" id="precio_alojamiento" class="form-control{{ $errors->has('precio_alojamiento') ? ' is-invalid' : '' }}" name="precio_alojamiento" value="{{ Auth::user()->precio_alojamiento }}" placeholder="Precio Por Dia" pattern="[0-9 ]+" required autofocus disabled>
                                            @if ($errors->has('precio_alojamiento'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('precio_alojamiento') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">{{ __('Precio Adicional de Entrega o Recogida') }}</label>
                                            <input type="number" id="precio_adicional_alojamiento" class="form-control{{ $errors->has('precio_adicional_alojamiento') ? ' is-invalid' : '' }}" name="precio_adicional_alojamiento" value="{{ Auth::user()->precio_adicional_alojamiento }}" placeholder="Precio Por Dia" pattern="[0-9 ]+" required autofocus disabled>
                                            @if ($errors->has('precio_adicional_alojamiento'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('precio_adicional_alojamiento') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="direccion_recogida">{{ __('Direccion de Recogida') }}</label>
                                            <input type="text" id="direccion_recogida" class="form-control{{ $errors->has('direccion_recogida') ? ' is-invalid' : '' }}" name="direccion_recogida" value="{{ Auth::user()->direccion_recogida }}" placeholder="Direccion de Entrega" required disabled>
                                            @if ($errors->has('direccion_recogida'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('direccion_recogida') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12">
                                            <small class="text-uppercase font-weight-bold">{{ __('Paseo') }}</small>
                                        </div>
                                        @if(Auth::user()->paseo == 'Si')
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="paseo" class="custom-control-input" id="paseo" checked type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="paseo">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="paseo" class="custom-control-input" id="paseo_no" type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="paseo_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        @elseif(Auth::user()->paseo == 'No')
                                            <div class="col-lg-12">
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="paseo" class="custom-control-input" id="paseo" type="radio" value="Si" disabled>
                                                    <label class="custom-control-label" for="paseo">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio mb-3">
                                                    <input name="paseo" class="custom-control-input" id="paseo_no" checked type="radio" value="No" disabled>
                                                    <label class="custom-control-label" for="paseo_no">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">{{ __('Precio Por Dia') }}</label>
                                            <input type="number" id="precio_paseo" class="form-control{{ $errors->has('precio_paseo') ? ' is-invalid' : '' }}" name="precio_paseo" value="{{ Auth::user()->precio_paseo }}" placeholder="Precio Por Hora" pattern="[0-9 ]+" required autofocus disabled>
                                            @if ($errors->has('precio_paseo'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('precio_paseo') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="direccion_recogida_paseo">{{ __('Direccion de Recogida') }}</label>
                                            <input type="text" id="direccion_recogida_paseo" class="form-control{{ $errors->has('direccion_recogida_paseo') ? ' is-invalid' : '' }}" name="direccion_recogida_paseo" value="{{ Auth::user()->direccion_recogida_paseo }}" placeholder="Direccion de Entrega" required disabled>
                                            @if ($errors->has('direccion_recogida_paseo'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('direccion_recogida_paseo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">DISPONIBILIDAD</h3>
                            <a href="crearEvent" class="btn btn-sm btn-default float-right">Editar</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="card-body">
                            <hr class="my-4" />
                            <div class="row">
                                <form>
                                    @csrf
                                    <h4 class="text-muted mb-4">Servicios</h4>
                                    {!! $calendar_details->calendar() !!}
                                </form>
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
<script src="./assets2/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">

    $('.date').datepicker({
        format: 'yyyy-mm-dd',
        language: 'es',
        autoclose: true

    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar_details->script() !!}

<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>



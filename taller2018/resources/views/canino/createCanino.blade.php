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
    <link href="../assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
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
        <a class="navbar-brand pt-0" href="../home">
            <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
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
                    <a class="nav-link" href="../home">
                        <i class="ni ni-pin-3 text-purple"></i> Cuidador
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../home">
                        <i class="ni ni-single-02 text-blue"></i> Perfil
                    </a>
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
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../home">Perfil</a>
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
                  <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
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
                    <h1 class="display-2 text-white">Hola {{ Auth::user()->name }} {{ Auth::user()->apellido }}</h1>
                    <p class="text-white mt-0 mb-5"></p>
                    <a href="./crearCanino" class="btn btn-info">Mascotas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-6 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">MASCOTAS</h3>
                            <a href="crearCanino" class="btn btn-sm btn-default float-right">Agregar</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('saveCanino') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Description -->
                                    <h4 class="text-muted mb-4">Perfil Mascota</h4>
                                    <h6 class="heading-small text-muted mb-4">Informacion de la mascota</h6>
                                    <div class="pl-lg-4" id="mascota">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nombre">Nombres</label>
                                                    <input type="text" id="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre"  value="{{ old('nombre') }}" placeholder="Nombre" pattern="[a-zA-Z ]+" required>
                                                    @if ($errors->has('nombre'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nombre') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="image">Subir foto de la mascota</label>
                                                    <input type="file" id="image" class="form-control" name="image" accept="image/*" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="raza">Raza</label>
                                                    <input type="text" id="raza" class="form-control{{ $errors->has('raza') ? ' is-invalid' : '' }}" name="raza" value="{{ old('raza') }}" placeholder="Raza" pattern="[a-zA-Z ]+" required>
                                                    @if ($errors->has('raza'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('raza') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="nacimiento">Fecha de Nacimiento</label>
                                                    <input type="date" id="nacimiento" class="form-control" name="nacimiento" placeholder="Seleccionar fecha de nacimiento" value="2018/11/10" required>
                                                    @if ($errors->has('nacimiento'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nacimiento') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <small class="text-uppercase font-weight-bold">Genero</small>
                                                </div>
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="genero" class="custom-control-input" id="Macho" checked type="radio" value="Macho">
                                                    <label class="custom-control-label" for="Macho">
                                                        <span>Macho</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="genero" class="custom-control-input" id="Hembra" type="radio" value="Hembra">
                                                    <label class="custom-control-label" for="Hembra">
                                                        <span>Hembra</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-12">
                                                    <small class="text-uppercase font-weight-bold">Agresivo</small>
                                                </div>
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="agresivo" class="custom-control-input" id="Si" checked type="radio" value="Si">
                                                    <label class="custom-control-label" for="Si">
                                                        <span>Si</span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="agresivo" class="custom-control-input" id="No" type="radio" value="No">
                                                    <label class="custom-control-label" for="No">
                                                        <span>No</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="peso">Peso</label>
                                                    <input type="text" id="peso" class="form-control{{ $errors->has('peso') ? ' is-invalid' : '' }}" name="peso" value="{{ old('peso') }}" placeholder="Peso de la mascota" pattern="[0-9.,]+" required>
                                                    @if ($errors->has('peso'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('peso') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="tipo_comida">Detalles de su comida</label>
                                                    <textarea id="tipo_comida" name="tipo_comida" rows="4" class="form-control" placeholder="Ingrese el tipo de comida y los horarios correspondientes de su mascota..."></textarea>
                                                    @if ($errors->has('tipo_comida'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('tipo_comida') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="extras">Extras</label>
                                                    <textarea id="extras" name="extras" rows="4" class="form-control" placeholder="Ingrese problemas medicos, alergias, miedos entre otros..."></textarea>
                                                    @if ($errors->has('extras'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('extras') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                    <div class="col-md-12 offset-md-5">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrar') }}
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="../assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <h3 class="mb-0">DATOS PERSONALES</h3>
                            <a href="/editarUsuario" class="btn btn-sm btn-default float-right">Editar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <h4 class="text-muted mb-4">Perfil Propietario</h4>
                            <h6 class="heading-small text-muted mb-4">Informacion de usuario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="name">{{ __('Nombres') }}</label>
                                            <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" placeholder="Nombres" pattern="[a-zA-Z ]+" disabled required autofocus>
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
                                            <input type="text" id="apellido" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ Auth::user()->apellido }}" pattern="[a-zA-Z ]+" disabled placeholder="Apellidos" required>
                                            @if ($errors->has('apellido'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('apellido') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Correo electronico</label>
                                            <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" placeholder="jesse@example.com" disabled required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="tipo_usuario">Tipo de usuario</label>
                                            <input type="text" id="tipo_usuario" class="form-control form-control-alternative" value="Propietario" disabled>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="departamento">{{ __('Departamento') }}</label>
                                                <input type="text" id="departamento" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{ Auth::user()->departamento }}" pattern="[a-zA-Z ]+" placeholder="Apellidos" required disabled>
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
                                                <input type="text" id="zona" class="form-control{{ $errors->has('zona') ? ' is-invalid' : '' }}" name="zona" value="{{ Auth::user()->zona }}" placeholder="Zona" pattern="[a-zA-Z0-9 ]+" disabled required>
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
                                                <input type="text" id="calle" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ Auth::user()->calle }}" placeholder="Calle" pattern="[a-zA-Z0-9 ]+" disabled required>
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
                                                <input type="text" id="numero_puerta" class="form-control{{ $errors->has('numero_puerta') ? ' is-invalid' : '' }}" name="numero_puerta" value="{{ Auth::user()->numero_puerta }}" placeholder="Numero de Puerta" pattern="[a-zA-Z0-9 ]+" disabled required>
                                                @if ($errors->has('numero_puerta'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('numero_puerta') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="direccion">{{ __('Direccion') }}</label>
                                                <input type="text" id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ Auth::user()->direccion }}" placeholder="Direccion" pattern="[a-zA-Z0-9., ]+" disabled required>
                                                @if ($errors->has('direccion'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('direccion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="telefono">{{ __('Telefono') }}</label>
                                                <input type="number" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ Auth::user()->telefono }}" placeholder="Telefono" pattern="[0-9]+" disabled required>
                                                @if ($errors->has('telefono'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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


<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.0.0"></script>

</body>

</html>

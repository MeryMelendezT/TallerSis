<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dog>Care">
    <meta name="author" content="DogCare">
    <title>DogCare</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../assets2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="./assets2/css/docs.min.css" rel="stylesheet">
</head>

<body class="bg-default">
<div class="main-content">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="./">
                <img src="../assets/img/brand/white.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
                                <img src="../assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="./register">
                            <i class="ni ni-circle-08"></i>
                            <span class="nav-link-inner--text">Registrar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="./login">
                            <i class="ni ni-key-25"></i>
                            <span class="nav-link-inner--text">Iniciar Sesion</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href=".">
                            <i class="ni ni-single-02"></i>
                            <span class="nav-link-inner--text">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Registrarse</h1>
                        <p class="text-lead text-light">Por favor, seleecione la cuenta que quiere registrar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <section class="section section-components">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Tabs with icons -->
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-user-circle"></i>Propietario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-user-circle"></i>Cuidador</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <h4 class="text-muted mb-4">Perfil Propietario</h4>
                                            <h6 class="heading-small text-muted mb-4">Informacion de usuario</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="name">{{ __('Nombres') }}</label>
                                                            <input type="text" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombres" pattern="[a-zA-Z ]+" required autofocus>
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
                                                            <input type="text" id="apellido" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellid') }}" pattern="[a-zA-Z ]+" placeholder="Apellidos" required>
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
                                                            <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="jesse@example.com" required>
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

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="password">{{ __('Contraseña') }}</label>
                                                            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                                            @if ($errors->has('password'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="password-confirm">{{ __('Confirme la contraseña') }}</label>
                                                            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Contraseña" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            <!-- Address -->
                                            <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="departamento">{{ __('Departamento') }}</label>
                                                            <input type="text" id="departamento" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="{{ old('departamento') }}" placeholder="Departamento" pattern="[a-zA-Z ]+" required>
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
                                                            <input type="text" id="zona" class="form-control{{ $errors->has('zona') ? ' is-invalid' : '' }}" name="{{ old('zona') }}" placeholder="Zona" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="calle" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="{{ old('calle') }}" placeholder="Calle" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="numero_puerta" class="form-control{{ $errors->has('numero_puerta') ? ' is-invalid' : '' }}" name="{{ old('numero_puerta') }}" placeholder="Numero de Puerta" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="{{ old('direccion') }}" placeholder="Direccion" pattern="[a-zA-Z0-9., ]+" required>
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
                                                            <input type="number" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="{{ old('telefono') }}" placeholder="Telefono" pattern="[0-9]+" required>
                                                            @if ($errors->has('telefono'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('telefono') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Description -->
                                            <hr class="my-4" />
                                            <h4 class="text-muted mb-4">Perfil Mascota</h4>
                                            <h6 class="heading-small text-muted mb-4">Informacion de la mascota</h6>
                                            <div class="pl-lg-4" id="mascota">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="nombre">Nombres</label>
                                                            <input type="text" id="nombre" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="{{ old('nombre') }}" placeholder="Nombre" pattern="[a-zA-Z ]+" required>
                                                            @if ($errors->has('nombre'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('nombre') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="foto">Subir foto de la mascota</label>
                                                            <input type="file" id="foto" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="{{ old('foto') }}" placeholder="Foto" accept="image/*" required>
                                                            @if ($errors->has('foto'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('foto') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="raza">Raza</label>
                                                            <input type="text" id="raza" class="form-control{{ $errors->has('raza') ? ' is-invalid' : '' }}" name="{{ old('raza') }}" placeholder="Raza" pattern="[a-zA-Z ]+" required>
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
                                                            <input class="form-control datepicker" placeholder="Seleccionar fecha de nacimiento" type="text" value="11/10/2018" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="ni ni-calendar-grid-58"></i>
                                                            </span>
                                                                    <input class="form-control datepicker" placeholder="Fechaaa" type="text" value="06/20/2018">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <small class="text-uppercase font-weight-bold">Genero</small>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio1" checked type="radio" value="1">
                                                            <label class="custom-control-label" for="customRadio1">
                                                                <span>Macho</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input name="custom-radio-1" class="custom-control-input" id="customRadio2" type="radio" value="2">
                                                            <label class="custom-control-label" for="customRadio2">
                                                                <span>Hembra</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-12">
                                                            <small class="text-uppercase font-weight-bold">Agresivo</small>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input name="custom-radio-2" class="custom-control-input" id="customRadio3" checked type="radio" value="1">
                                                            <label class="custom-control-label" for="customRadio3">
                                                                <span>Si</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-3">
                                                            <input name="custom-radio-2" class="custom-control-input" id="customRadio4" type="radio" value="2">
                                                            <label class="custom-control-label" for="customRadio4">
                                                                <span>No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="peso">Peso</label>
                                                            <input type="text" id="peso" class="form-control{{ $errors->has('peso') ? ' is-invalid' : '' }}" name="{{ old('peso') }}" placeholder="Peso de la mascota" pattern="[0-9.,]+" required>
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
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="extras">Extras</label>
                                                            <textarea id="extras" name="extras" rows="4" class="form-control" placeholder="Ingrese problemas medicos, alergias, miedos entre otros..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="well">
                                                    <button id="adicional" name="adicional" class="btn btn-lg btn-block btn-default" type="button">Agregar +</button>
                                                </div>
                                            </div>
                                            </br>
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
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="card-body">
                                        <form>
                                            <h6 class="heading-small text-muted mb-4">Informacion de usuario</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="nombre">Nombre</label>
                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nombre">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="apellido">Apellidos</label>
                                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Apellido">
                                                        </div>
                                                </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="correo">Correo electronico</label>
                                                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="correo@ejemplo.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="password">Contraseña</label>
                                                            <input type="password" id="password" class="form-control form-control-alternative" placeholder="Contraseña">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tipo_usuario">Tipo de usuario</label>
                                                            <input type="text" id="tipo_usuario" class="form-control form-control-alternative" value="Cuidador" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            <!-- Address -->
                                            <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="departamento">Departamento</label>
                                                            <input type="text" id="departamento" class="form-control form-control-alternative" placeholder="Departamento">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="zona">Zona</label>
                                                            <input type="text" id="zona" class="form-control form-control-alternative" placeholder="Zona">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="calle">Calle</label>
                                                            <input type="text" id="calle" class="form-control form-control-alternative" placeholder="Calle">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="numero_puerta">Numero de puerta</label>
                                                            <input type="text" id="numero_puerta" class="form-control form-control-alternative" placeholder="#">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="direccion">Direccion</label>
                                                            <input id="input-address" class="form-control form-control-alternative" placeholder="Direccion" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="telefono">Telefono</label>
                                                            <input id="input-address" class="form-control form-control-alternative" placeholder="Telefono" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="estadodecuenta">Estado de Cuenta</label>
                                                            <input type="text" id="tipo_usuario" class="form-control form-control-alternative" value="Solicitando" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            <!-- Address -->
                                            <h6 class="heading-small text-muted mb-4">Experiencias</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="aniosdetrabajo">Años de Trabajo</label>
                                                            <input type="text" id="departamento" class="form-control form-control-alternative" placeholder="#">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="referencias">Referencias Laborales</label>
                                                            <input type="text" id="zona" class="form-control form-control-alternative" placeholder="Referencias Laborales">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="aniosdetrabajo">Años de Trabajo</label>
                                                        <input type="text" id="departamento" class="form-control form-control-alternative" placeholder="#">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="referencias">Referencias Laborales</label>
                                                        <input type="text" id="zona" class="form-control form-control-alternative" placeholder="Referencias Laborales">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Registrarse') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Footer -->
<footer class="py-5">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2018
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets2/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.0.0"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>


</body>

</html>



<!--@section('content')-->
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection-->

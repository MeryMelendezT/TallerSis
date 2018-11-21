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
                                <div class="tab-pane fade show active" role="tabpanel" id="tabs-icons-text-1" aria-labelledby="tabs-icons-text-1-tab">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('savePropietario') }}">
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
                                                            <input type="text" id="apellido" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" pattern="[a-zA-Z ]+" placeholder="Apellidos" required>
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
                                                <hr class="my-4" />
                                                <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="departamento">{{ __('Departamento') }}</label>
                                                            <input type="text" id="departamento" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{ old('departamento') }}" pattern="[a-zA-Z ]+" placeholder="Departamento" required>

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
                                                            <input type="text" id="zona" class="form-control{{ $errors->has('zona') ? ' is-invalid' : '' }}" name="zona" value="{{ old('zona') }}" placeholder="Zona" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="calle" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ old('calle') }}" placeholder="Calle" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="numero_puerta" class="form-control{{ $errors->has('numero_puerta') ? ' is-invalid' : '' }}" name="numero_puerta" value="{{ old('numero_puerta') }}" placeholder="Numero de Puerta" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" placeholder="Direccion" pattern="[a-zA-Z0-9., ]+" required>
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
                                                            <input type="number" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" placeholder="Telefono" pattern="[0-9]+" required>
                                                            @if ($errors->has('telefono'))
                                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
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
                                        <form method="POST" action="{{ route('saveCuidador') }}">
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
                                                            <input type="text" id="apellido" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" pattern="[a-zA-Z ]+" placeholder="Apellidos" required>
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
                                                            <input type="text" id="tipo_usuario" class="form-control form-control-alternative" value="Cuidador" disabled>
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
                                                <hr class="my-4" />
                                                <h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
                                                <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="departamento">{{ __('Departamento') }}</label>
                                                                <input type="text" id="departamento" class="form-control{{ $errors->has('departamento') ? ' is-invalid' : '' }}" name="departamento" value="{{ old('departamento') }}" pattern="[a-zA-Z ]+" placeholder="Departamento" required>
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
                                                                <input type="text" id="zona" class="form-control{{ $errors->has('zona') ? ' is-invalid' : '' }}" name="zona" value="{{ old('zona') }}" placeholder="Zona" pattern="[a-zA-Z0-9 ]+" required>
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
                                                                <input type="text" id="calle" class="form-control{{ $errors->has('calle') ? ' is-invalid' : '' }}" name="calle" value="{{ old('calle') }}" placeholder="Calle" pattern="[a-zA-Z0-9 ]+" required>
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
                                                                <input type="text" id="numero_puerta" class="form-control{{ $errors->has('numero_puerta') ? ' is-invalid' : '' }}" name="numero_puerta" value="{{ old('numero_puerta') }}" placeholder="Numero de Puerta" pattern="[a-zA-Z0-9 ]+" required>
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
                                                            <input type="text" id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" name="direccion" value="{{ old('direccion') }}" placeholder="Direccion" pattern="[a-zA-Z0-9., ]+" required>
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
                                                            <input type="number" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" placeholder="Telefono" pattern="[0-9]+" required>
                                                            @if ($errors->has('telefono'))
                                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                                    </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="foto">Subir foto personal</label>
                                                            <input type="file" id="foto" class="form-control" name="foto" accept="image/*"/>
                                                        </div>
                                                    </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="ci">{{ __('Carnet de Identidad') }}</label>
                                                            <input type="text" id="ci" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ old('ci') }}" placeholder="Carnet de Identidad" pattern="[a-zA-Z0-9., ]+" required>
                                                            @if ($errors->has('ci'))
                                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $errors->first('ci') }}</strong>
                                                                    </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="foto_ci_anverso">Subir foto carnet (Anverso)</label>
                                                            <input type="file" id="foto_ci_anverso" class="form-control" name="foto_ci_anverso" accept="image/*"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="foto_ci_reverso">Subir foto carnet (Reverso)</label>
                                                            <input type="file" id="foto_ci_reverso" class="form-control" name="foto_ci_reverso" accept="image/*"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="numero_canes">{{ __('¿Cuantos perros tiene en casa?') }}</label>
                                                            <input type="number" id="numero_canes" class="form-control{{ $errors->has('numero_canes') ? ' is-invalid' : '' }}" name="numero_canes" value="{{ old('numero_canes') }}" placeholder="¿Cuantos perros tiene en casa?" pattern="[0-9 ]+" required>
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
                                                            <input type="date" id="nacimiento" class="form-control" name="nacimiento" placeholder="Seleccionar fecha de nacimiento" value="2018/11/10" required>
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
                                                            <textarea id="descripcion" name="descripcion" rows="1" class="form-control" placeholder="Ingrese referencias laborales"></textarea>
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
                                                            <textarea id="trabajo" name="trabajo" rows="1" class="form-control" placeholder="Ingrese referencias laborales"></textarea>
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
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="jardin" class="custom-control-input" id="jardines" checked type="radio" value="Si">
                                                                <label class="custom-control-label" for="jardines">
                                                                    <span>Si</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="jardin" class="custom-control-input" id="jardin_no" type="radio" value="No">
                                                                <label class="custom-control-label" for="jardin_no">
                                                                    <span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="col-md-12">
                                                            <div class="col-lg-6">
                                                                <small class="text-uppercase font-weight-bold">{{ __('Terraza') }}</small>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="terraza" class="custom-control-input" id="terraza" checked type="radio" value="Si">
                                                                <label class="custom-control-label" for="terraza">
                                                                    <span>Si</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="terraza" class="custom-control-input" id="terraza_no" type="radio" value="No">
                                                                <label class="custom-control-label" for="terraza_no">
                                                                    <span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="col-md-12">
                                                            <div class="col-lg-6">
                                                                <small class="text-uppercase font-weight-bold">{{ __('Balcon') }}</small>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="balcon" class="custom-control-input" id="balcon" checked type="radio" value="Si">
                                                                <label class="custom-control-label" for="balcon">
                                                                    <span>Si</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="balcon" class="custom-control-input" id="balcon_no" type="radio" value="No">
                                                                <label class="custom-control-label" for="balcon_no">
                                                                    <span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row" align="center">
                                                <div class="col-lg-12">
                                                    <div class="col-md-12">
                                                        <div class="col-lg-12">
                                                            <small class="text-uppercase font-weight-bold">{{ __('Tipo de Casa') }}</small>
                                                        </div>
                                                        <div class="custom-control custom-control-inline custom-radio mb-3">
                                                            <input name="tipo_casa" class="custom-control-input" id="Patio" checked type="radio" value="Casa Patio">
                                                            <label class="custom-control-label" for="Patio">
                                                                <span>Casa Patio</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-control-inline custom-radio mb-3">
                                                            <input name="tipo_casa" class="custom-control-input" id="Apartamento" type="radio" value="Apartamento">
                                                            <label class="custom-control-label" for="Apartamento">
                                                                <span>Apartamento</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-control-inline custom-radio mb-3">
                                                            <input name="tipo_casa" class="custom-control-input" id="Duplex" type="radio" value="Duplex">
                                                            <label class="custom-control-label" for="Duplex">
                                                                <span>Duplex</span>
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-control-inline custom-radio mb-3">
                                                            <input name="tipo_casa" class="custom-control-input" id="Chalet" type="radio" value="Chalet">
                                                            <label class="custom-control-label" for="Chalet">
                                                                <span>Chalet</span>
                                                            </label>
                                                        </div>
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
                                                        <div class="col-lg-12">
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="alojamiento" class="custom-control-input" id="alojamiento" checked type="radio" value="Si">
                                                                <label class="custom-control-label" for="alojamiento">
                                                                    <span>Si</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="alojamiento" class="custom-control-input" id="alojamiento_no" type="radio" value="No">
                                                                <label class="custom-control-label" for="alojamiento_no">
                                                                    <span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="name">{{ __('Precio Por Dia') }}</label>
                                                            <input type="number" id="precio_alojamiento" class="form-control{{ $errors->has('precio_alojamiento') ? ' is-invalid' : '' }}" name="precio_alojamiento" value="{{ old('precio_alojamiento') }}" placeholder="Precio Por Dia" pattern="[0-9 ]+">
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
                                                            <input type="number" id="precio_adicional_alojamiento" class="form-control{{ $errors->has('precio_adicional_alojamiento') ? ' is-invalid' : '' }}" name="precio_adicional_alojamiento" value="{{ old('precio_adicional_alojamiento') }}" placeholder="Precio Por Dia" pattern="[0-9 ]+">
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
                                                            <input type="text" id="direccion_recogida" class="form-control{{ $errors->has('direccion_recogida') ? ' is-invalid' : '' }}" name="direccion_recogida" value="{{ old('direccion_recogida') }}" placeholder="Direccion de Entrega">
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
                                                        <div class="col-lg-12">
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="paseo" class="custom-control-input" id="paseo" checked type="radio" value="Si">
                                                                <label class="custom-control-label" for="paseo">
                                                                    <span>Si</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-control custom-control-inline custom-radio mb-3">
                                                                <input name="paseo" class="custom-control-input" id="paseo_no" type="radio" value="No">
                                                                <label class="custom-control-label" for="paseo_no">
                                                                    <span>No</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="name">{{ __('Precio Por Dia') }}</label>
                                                            <input type="number" id="precio_paseo" class="form-control{{ $errors->has('precio_paseo') ? ' is-invalid' : '' }}" name="precio_paseo" value="{{ old('precio_paseo') }}" placeholder="Precio Por Hora" pattern="[0-9 ]+">
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
                                                            <input type="text" id="direccion_recogida_paseo" class="form-control{{ $errors->has('direccion_recogida_paseo') ? ' is-invalid' : '' }}" name="direccion_recogida_paseo" value="{{ old('direccion_recogida_paseo') }}" placeholder="Direccion de Entrega">
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
                            <!--<div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Registrarse') }}</button>
                            </div>-->
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

<script type="text/javascript">

    $('.date').datepicker({
        format: 'yyyy-mm-dd',
        language: 'es',
        autoclose: true

    });

</script>

<!-- Argon JS -->
<script src="../assets/js/argon.js?v=1.0.0"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3PjUqq81lIOfBPYXrQGWwK5T4ystZjA"></script>

</body>

</html>

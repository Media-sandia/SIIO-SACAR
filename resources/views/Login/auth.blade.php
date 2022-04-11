<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login | SCM </title>
    <!-- Favicon -->
    <link href="{{ asset('/img/Logo-icon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- custom-styles -->
    <link href="{{ asset('/custom-styles/custom-styles.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
</head>

<body class="bg-auht">
    <div class="main-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="main-content">
            <!-- Navbar -->
            <!-- Header -->
            <div class="header  py-7 py-lg-7">
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card  shadow border-0">
                        <div class="card-header  pb-3">
                            <div class="text-title text-center mt-2 mb-3">Sistema Integral Informacion Operativa</div>
                            <div class="btn-wrapper text-center">
                                <img src="{{ asset('img/sacarlift.png') }}" width="80px" alt="">
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-3">
                            <div class="text-center text-title mb-4">
                                Ingresa Tus Credenciales
                            </div>

                            @if ($errors->first('Invalidate'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error!</strong> {{ $errors->first('Invalidate') }}
                                </div>
                            @endif
                            <form role="form" method="POST" action="{{ route('login') }}" accept-charset="UTF-8"
                                role="form">
                                {{ csrf_field() }}

                                <div class="form-group mb-3 {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control border" placeholder="Correo" autofocus type="email"
                                            id="username" name="email" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group row ml-1"> {!! $errors->first('email', '<small class=" text-danger">:message</small>') !!}</div>
                                </div>

                                <div class="form-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control border" placeholder="Contraseña" type="password"
                                            name="password" id="password">
                                    </div>
                                    <div class=" form-group row ml-1"> {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}</div>
                                </div>

                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Recordarme</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-sacar my-4">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('/assets/js/argon.js?v=1.0.0') }}"></script>
    <!--script internals-->
    <script>
        $(".preloader").fadeOut(700);

        /**var xhr = new XMLHttpRequest();
        xhr.open('GET', 'https://frasedeldia.azurewebsites.net/api/phrase');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            } else {
                console.log('Error');
            }
        };
        xhr.send();**/
    </script>

</body>

</html>

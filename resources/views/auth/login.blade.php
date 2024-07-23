<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gimnasio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('../../assets/images/favicon.ico') }}" />
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('../../assets/css/core/libs.min.css') }}" />
    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet"
        href="{{ asset('../../assets/css/hope-ui.min.css?v=1.1.0') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet"
        href="{{ asset('../../assets/css/custom.min.css?v=1.1.0') }}" />
    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('../../assets/css/dark.min.css') }}" />
    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('../../assets/css/rtl.min.css') }}" />
</head>

<body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                <div class="card-body">
                                    <a href="{{ route('login') }}"
                                        class="navbar-brand d-flex align-items-center mb-3">
                                        <!--Logo start-->
                                        <svg width="46px" height="46px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#314ac6"><path d="M15 7C16.1046 7 17 6.10457 17 5C17 3.89543 16.1046 3 15 3C13.8954 3 13 3.89543 13 5C13 6.10457 13.8954 7 15 7Z" stroke="#314ac6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12.6133 8.26691L9.30505 12.4021L13.4403 16.5374L11.3727 21.0861" stroke="#314ac6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.4104 9.5075L9.79728 6.19931L12.6132 8.26692L15.508 11.5752H19.2297" stroke="#314ac6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.89152 15.7103L7.65095 16.5374H4.34277" stroke="#314ac6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                        <!--logo End-->
                                        <h4 class="logo-title ms-3">Gimnasio</h4>
                                    </a>
                                    <h2 class="mb-2 text-center">Iniciar Sesión</h2>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email"
                                                        aria-describedby="email" placeholder="example@example.com">
                                                    @if ($errors->has('email'))
                                                        <span class="text-danger">
                                                            <small><em>{{ $errors->first('email') }}</em></small>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                    required id="password" aria-describedby="password" placeholder=" ">
                                                    @if ($errors->has('password'))
                                                        <span class="text-danger">
                                                            <small><em>{{ $errors->first('password') }}</em></small>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12 d-flex justify-content-between">
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1"
                                                    name="remember">
                                                    <label class="form-check-label" for="customCheck1">Recuerdame</label>
                                                </div>
                                                <a href="#">Olvidé Contraseña?</a>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sign-bg">
                        <svg width="280" height="230" viewBox="0 0 431 398" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.05">
                                <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF" />
                                <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF" />
                                <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857"
                                    transform="rotate(45 61.9355 138.545)" fill="#3B8AFF" />
                                <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857"
                                    transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                    <img src="{{ asset('../../assets/images/auth/login.png') }}" class="img-fluid gradient-main animated-scaleX"
                        alt="images">
                </div>
            </div>
        </section>
    </div>

    <!-- Library Bundle Script -->
    <script src="{{ asset('../../assets/js/core/libs.min.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('../../assets/js/core/external.min.js') }}"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('../../assets/js/charts/widgetcharts.js') }}"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('../../assets/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('../../assets/js/charts/dashboard.js') }}" defer></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('../../assets/js/plugins/fslightbox.js') }}"></script>

    <!-- Settings Script -->
    <script src="{{ asset('../../assets/js/plugins/setting.js') }}"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('../../assets/js/plugins/form-wizard.js') }}"></script>

    <!-- AOS Animation Plugin-->

    <!-- App Script -->
    <script src="{{ asset('../../assets/js/hope-ui.js') }}" defer></script>
</body>

</html>


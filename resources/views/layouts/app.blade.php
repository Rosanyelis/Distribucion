<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Titulo -->
        <title>{{ config('app.name', 'GMC') }}</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.ico') }}" />
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{ asset('../assets/css/core/libs.min.css') }}" />
        <!-- Aos Animation Css -->
        <link rel="stylesheet" href="{{ asset('../assets/vendor/aos/dist/aos.css') }}" />
        <!-- Hope Ui Design System Css -->
        <link rel="stylesheet" href="{{ asset('../assets/css/hope-ui.css?v=1.1.0') }}" />
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('../assets/css/custom.min.css?v=1.1.0') }}" />
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{ asset('../assets/css/dark.min.css') }}"/>
        <!-- RTL Css -->
        <link rel="stylesheet" href="{{ asset('../assets/css/rtl.min.css') }}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css">
    </head>
    <body>
        <!-- loader Start -->
        <div id="loading">
            <div class="loader simple-loader">
                <div class="loader-body"></div>
            </div>
        </div>
        <!-- loader END -->

        @include('layouts.navigation')

        <main class="main-content">
            <div class="position-relative">
                @include('layouts.header')

                <!-- Nav Header Component Start -->
                @yield('banner-inicio')
                <!-- Nav Header Component End -->
            </div>

            <div class="container-fluid content-inner mt-n5 py-0">
                @yield('content')
            </div>

            <!-- Footer Section Start -->
            <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                        <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                    <div class="right-panel">
                        ©<script>document.write(new Date().getFullYear())</script> GMC, sistema desarrollador por
                        <a href="#">Ross Digital</a>.
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->
        </main>

        <!-- Library Bundle Script -->
        <script src="{{ asset('../assets/js/core/libs.min.js') }}"></script>
        <!-- External Library Bundle Script -->
        <script src="{{ asset('../assets/js/core/external.min.js') }}"></script>
        <!-- Widgetchart Script -->
        <script src="{{ asset('../assets/js/charts/widgetcharts.js') }}"></script>
        <!-- mapchart Script -->
        <script src="{{ asset('../assets/js/charts/vectore-chart.js') }}"></script>
        <script src="{{ asset('../assets/js/charts/dashboard.js') }}" defer></script>
        <!-- fslightbox Script -->
        <script src="{{ asset('../assets/js/plugins/fslightbox.js') }}"></script>
        <!-- Settings Script -->
        <script src="{{ asset('../assets/js/plugins/setting.js') }}"></script>
        <!-- Form Wizard Script -->
        <script src="{{ asset('../assets/js/plugins/form-wizard.js') }}"></script>
        <!-- AOS Animation Plugin-->
        <script src="{{ asset('../assets/vendor/aos/dist/aos.js') }}"></script>
        <!-- App Script -->
        <script src="{{ asset('../assets/js/hope-ui.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            @include('layouts.alerts')
        </script>
        @yield('scripts')
    </body>
</html>

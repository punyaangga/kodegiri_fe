<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="Kodegiri Test">
    <meta name="keywords"
        content="Kodegiri Test, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Kodegiri Test </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="/assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <!-- Stepper CSS -->
    <link href="/assets/css/addons-pro/bs-stepper.css" rel="stylesheet">
    <!-- Stepper CSS - minified-->
    <link href="/assets/css/addons-pro/bs-stepper.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper" id="app">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-12 col-xl-10 mx-auto">
                        <div class="card">
                            <div class="row">

                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper" style="background:red;">

                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">Kodegiri<span>
                                                Test</span></a>

                                        <h5 class="text-muted fw-normal mb-4">Untuk melakukan login silakan isi email
                                            dan password</h5>

                                        <form method="POST" action="{{ route('login') }}" class="forms-sample">
                                            @csrf
                                            <div class="mb-3">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Email</label>
                                                        <input type="email" id="email" name="email"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label>Password</label>
                                                        <input type="password" id="password" name="password"
                                                            class="form-control" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0"
                                                    style="float: right">
                                                    <i class="btn-icon-prepend" data-feather="arrow-right"></i> Login
                                                </button>
                                                <br>
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
    </div>

    <!-- core:js -->
    <script src="/assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="/assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard-light.js"></script>
    <script src="/assets/js/datepicker.js"></script>
    <!-- End custom js for this page -->

    <!-- Stepper JavaScript -->
    <script type="text/javascript" src="/assets/js/addons-pro/bs-stepper.js"></script>
    <!-- Stepper JavaScript - minified -->
    <script type="text/javascript" src="/assets/js/addons-pro/bs-stepper.min.js"></script>

</body>

</html>

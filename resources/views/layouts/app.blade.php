<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | IAM System</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/assets/img/monitoring.png">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="/assets/css/styles.css?v={{ time() }}" rel="stylesheet">
</head>

<body class="">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-ggrey" id="sidebar-wrapper">
            <a href="/dashboard">
                <div class="sidebar-heading bg-ggrey text-dark">
                    <img src="/assets/img/monitoring.png" style="height: 24px" alt=""> IAM System
                </div>
            </a>
            <div id="sidebar-menu" class="list-group list-group-flush p-3">
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/monitoring-pdp"><i class="bi bi-speedometer me-2"></i> Monitoring PDP</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/kartu-pdp"><i class="bi bi-file-earmark-medical me-2"></i> Kartu PDP</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/cj70"><i class="bi bi-file-earmark-ruled me-2"></i> CJ70</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/lampiran-2f3"><i class="bi bi-file-spreadsheet me-2"></i> Lampiran 2F3</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/monitoring-pfk"><i class="bi bi-eyeglasses me-2"></i> Monitoring PFK</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/material"><i class="bi bi-wrench-adjustable-circle me-2"></i> Material</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/admin"><i class="bi bi-people me-2"></i> Admin</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2" href="/profile"><i class="bi bi-person-circle me-2"></i> Profil Saya</a>
                <a class="list-group-item list-group-item-action list-group-item-light px-3 py-2 text-danger" href="/logout"><i class="bi bi-power me-2"></i> Logout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <span role="button" class="text-primary" id="sidebarToggle"><i class="bi bi-list"></i></span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid p-4">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="/assets/vendors/jquery@3.6.3/jquery.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js?v={{ time() }}"></script>
    @yield('js')
</body>

</html>
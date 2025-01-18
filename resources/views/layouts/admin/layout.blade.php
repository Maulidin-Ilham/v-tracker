<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>Admin</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- END GA -->

    {{-- css datatbles --}}
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css">


</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a>
                        </li>

                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1" />
                            <div class="d-sm-none d-lg-inline-block">
                                Hi, {{ Auth::user()->name }}!
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <button style="cursor: pointer"
                                    class="dropdown-item text-danger d-flex align-items-center ">
                                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                </button>

                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('admin.dashboard') }}">V-Tracker</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">V-T</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="dropdown">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Kendaraan</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>
                                    Kendaraan</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="{{ route('admin.kendaraan') }}">Data Kendaraan</a>
                                </li>

                            </ul>
                        </li>


                        <li class="menu-header">Pemesanan</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>
                                    Pemesanan</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="{{ route('admin.pemesanan') }}">Data Pemesanan</a>
                                </li>

                            </ul>
                        </li>

                        <li class="menu-header">Persetujuan</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>
                                    Persetujuan</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="index-0.html">Data Persetujuan</a>
                                </li>

                            </ul>
                        </li>

                        <li class="menu-header">Log Aktivitas</li>
                        <li class="dropdown">
                            <a href="#" class="nav-link "><i class="fas fa-fire"></i><span>
                                    Log Aktivitas</span></a>
                        </li>

                    </ul>

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>


            <footer class="main-footer">
                <div class="footer-left">

                </div>
                <div class="footer-right"></div>
            </footer>
        </div>
    </div>

    @stack('modal')

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('assets/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('assets/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/library/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>


    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>



    @stack('scripts')
</body>

</html>

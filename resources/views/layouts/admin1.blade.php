<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">

    @stack('addon-style')
</head>

<body class="bg-light">
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class=" p-3 bg-light " id="sidebar-wrapper">
                <div class="sidebar-heading d-flex align-items-center">
                    <img src="/images/logo-dashboard.jpeg" alt="" class="my-4 width-logo" />
                    <p class="ml-1 my-0 title-dashboard">Dashboard</p>


                </div>
                <div class="list-group list-group-flush">

                    <a href="{{ route('admin-dashboard') }}"
                        class="mt-3 list-group-item list-group-item-action {{ request()->is('admin') ? 'active' : 'bg-light' }}"
                        style="border-radius: 10px;">

                        Dashboard
                    </a>
                    <a href="{{ route('client.index') }}"
                        class="mt-3 list-group-item list-group-item-action {{ request()->is('admin/client*') ? 'active' : 'bg-light' }} "
                        style="border-radius: 10px;">

                        Client
                    </a>

                    {{-- <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        class="mt-3 list-group-item list-group-item-action">
                        Sign Out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}

                </div>

                <div class="list-group list-group-flush" style="margin-top: 45vh;">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        class="mt-3 list-group-item list-group-item-action bg-light" style="border-radius: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <style>
                                svg {
                                    fill: #c5c7c9
                                }
                            </style>
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg>
                        Sign Out

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper" class="bg-light ml-4">
                <!-- Add your responsive navigation bar here (if needed) -->
                <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
                    <button class="btn btn-light d-md-none mr-auto mr-2" id="menu-toggle">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </nav>

                <!-- Content -->
                @yield('content')
            </div>
            <!-- /#page-content-wrapper -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>

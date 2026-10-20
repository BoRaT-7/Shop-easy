
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') | Vendomart</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        /* Fixed Header */
        .top-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 56px;
            z-index: 1100;
            display: flex;
            flex-wrap: nowrap;
        }

        .brand {
            width: 225px;
            min-width: 225px;
            padding-left: 16px;
            font-weight: bold;
        }

        /* Fixed Sidebar */
        .sb-sidenav {
            position: fixed;
            top: 56px;
            left: 0;
            bottom: 0;
            width: 225px;
            background-color: #212529;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: auto;
            z-index: 1050;
            transition: transform .25s ease;
        }

        .sb-sidenav .nav-link {
            color: rgba(255, 255, 255, .65);
            padding: 12px 16px;
            font-size: 14px;
        }

        .sb-sidenav .nav-link:hover,
        .sb-sidenav .nav-link.active {
            color: #fff;
            background-color: #343a40;
        }

        .sb-sidenav .nav-link i {
            width: 22px;
            font-size: 13px;
        }

        .sb-sidenav-footer {
            background-color: #343a40;
            color: #fff;
            padding: 12px 16px;
            font-size: 13px;
        }

        /* Main content starts after header and sidebar */
        #layoutContent {
            margin-left: 225px;
            padding-top: 56px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: margin-left .25s ease;
        }

        #pageContent {
            flex: 1;
            padding: 24px;
            min-width: 0;
        }

        /* Footer */
        .footer-bar {
            background-color: #fff;
            border-top: 1px solid #dee2e6;
            padding: 16px 24px;
            font-size: 13px;
            color: #6c757d;
        }

        /* Desktop sidebar toggle */
        body.sidebar-collapsed .sb-sidenav {
            transform: translateX(-100%);
        }

        body.sidebar-collapsed #layoutContent {
            margin-left: 0;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .brand {
                width: auto;
                min-width: 0;
                padding-right: 12px;
            }

            .sb-sidenav {
                width: 225px;
                transform: translateX(-100%);
                box-shadow: 3px 0 12px rgba(0, 0, 0, .2);
            }

            body.mobile-sidebar-open .sb-sidenav {
                transform: translateX(0);
            }

            #layoutContent {
                margin-left: 0;
            }

            body.sidebar-collapsed #layoutContent {
                margin-left: 0;
            }

            #pageContent {
                padding: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- ================= HEADER ================= -->
    <nav class="navbar navbar-dark bg-dark top-navbar">

         <a href="{{ route('vendor.dashboard') }}"
               class="flex h-16 items-center border-b border-white/10 px-6 text-xl font-extrabold tracking-wide text-white">
                🛍️ SHOP<span class="text-indigo-400">EASE</span>
            </a>

        <button class="btn btn-link text-white me-2"
                id="sidebarToggle"
                type="button"
                aria-label="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>

        <div class="ms-auto d-flex align-items-center pe-3">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle text-white"
                   href="#"
                   role="button"
                   data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <i class="fas fa-user-circle me-1"></i>
                    {{ Auth::user()->name ?? 'Admin' }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <span class="dropdown-item-text">
                            {{ Auth::user()->email ?? 'Admin Account' }}
                        </span>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <form method="POST" action="{{ url('/logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <!-- ================= SIDEBAR ================= -->
    <aside class="sb-sidenav" id="sidenav">

        <ul class="nav flex-column mt-2">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                   href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>

            <!-- Manage Category -->
            <li class="nav-item">

                <a class="nav-link d-flex align-items-center"
                   data-bs-toggle="collapse"
                   href="#categoryMenu"
                   role="button"
                   aria-controls="categoryMenu"
                   aria-expanded="{{ request()->routeIs('admin.categories.*') ? 'true' : 'false' }}">

                    <span>
                        <i class="fas fa-layer-group"></i>
                        Manage Category
                    </span>

                    <i class="fas fa-caret-down ms-auto"></i>
                </a>

                <div class="collapse {{ request()->routeIs('admin.categories.*') ? 'show' : '' }}"
                     id="categoryMenu">

                    <ul class="nav flex-column ms-3">

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}"
                               href="{{ url('/admin/categories') }}">
                                <i class="fas fa-list"></i>
                                All Categories
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.categories.create') ? 'active' : '' }}"
                               href="{{ route('admin.categories.create') }}">
                                <i class="fas fa-plus-circle"></i>
                                Add Category
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Other menus -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/users') }}">
                    <i class="fas fa-users"></i>
                    Manage Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/vendors') }}">
                    <i class="fas fa-id-card"></i>
                    Manage Vendors
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/orders') }}">
                    <i class="fas fa-shopping-cart"></i>
                    Manage Orders
                </a>
            </li>

        </ul>

        <div class="sb-sidenav-footer">
            <div class="small text-white-50">Logged in as:</div>
            <div class="fw-semibold">
                {{ Auth::user()->name ?? 'Admin' }}
            </div>
        </div>

    </aside>

    <!-- ================= PAGE CONTENT ================= -->
    <div id="layoutContent">

        <main id="pageContent">
            @yield('content')
        </main>

        <footer class="footer-bar">
            Copyright &copy; Vendomart {{ date('Y') }}.
            Developed by Your Name
        </footer>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sidebar toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.getElementById('sidebarToggle');

            toggle.addEventListener('click', function () {
                if (window.innerWidth <= 768) {
                    document.body.classList.toggle('mobile-sidebar-open');
                } else {
                    document.body.classList.toggle('sidebar-collapsed');
                }
            });
        });
    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.partial.head')
<body class="adminBody">
    <!-- Top Navbar -->
    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-none d-md-block sidebar px-0">
                <div class="position-sticky pt-3">
                    <div class="text-center mt-4">
                        <p class="text-white mt-2">{{ $admin->name }}</p>
                        <p class="text-white">ID Number: {{ $admin->id }}</p>
                    </div>
                    <hr>
                    <ul class="nav flex-column mt-4">
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->is('dashboard') ? 'active' : '' }}" href="{{route('admin.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->is('user-management') ? 'active' : '' }}" href="{{route('admin.userManagement')}}">User Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->is('confession-management') ? 'active' : '' }}" href="{{route('admin.confessionManagement')}}">Confession Management</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->is('ban-user') ? 'active' : '' }}" href="{{route('admin.banUser')}}">Ban User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->is('report-list') ? 'active' : '' }}" href="{{route('admin.report')}}">Report List</a>
                            </li>
                    </ul>

                </div>
            </nav>
            <div class="col-md-10 px-0 {{ str_replace('.', '-', Route::currentRouteName()) }}" id="contentContainer">
                <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                    <div class="container-fluid">
                        <div class="col d-flex justify-content-center">
                            <a class="navbar-brand" href="/{{ str_replace('.', '/', Route::currentRouteName()) }}">{{ strtoupper(str_replace(['-', '.'], ' ', Route::currentRouteName())) }}</a>
                        </div>

                        <div class="justify-content-end">
                            <div class="mt-auto text-left mt-5">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="text-black logout-button" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container position-relative admin-view">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- Page content goes here -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
@include('layouts.partial.footer')
</html>

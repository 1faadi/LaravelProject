<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('img/logo/logo.png')}}" rel="icon">
    <title>Dashboard</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
            <div class="sidebar-brand-icon">
                <img src="img/logo/logo2.png">
            </div>
            <div class="sidebar-brand-text mx-3">RuangAdmin</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Features
        </div>
{{--        @if (auth()->user()->id == '1')--}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
               aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Create/View Users</span>
            </a>
            <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Create/View Users</h6>
                    <a class="collapse-item" href="{{ url('/view') }}">View</a>
                    <a class="collapse-item" href="{{ url('/create-from') }} ">Create</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap1"
               aria-expanded="true" aria-controls="collapseBootstrap1">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Company</span>
            </a>
            <div id="collapseBootstrap1" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Company</h6>
                    <a class="collapse-item" href="{{url('/index')}}">Main Page</a>
                    <a class="collapse-item" href="">About</a>
                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap2"
               aria-expanded="true" aria-controls="collapseBootstrap2">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Sliders</span>
            </a>
            <div id="collapseBootstrap2" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Sliders</h6>
                    <a class="collapse-item" href="{{url('/slider-table')}}">View</a>
                    <a class="collapse-item" href="{{url('/slider-form')}}">Create</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap3"
               aria-expanded="true" aria-controls="collapseBootstrap3">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>About Us</span>
            </a>
            <div id="collapseBootstrap3" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">About Us</h6>
                    <a class="collapse-item" href="{{url('/about-table')}}">View About</a>
                    <a class="collapse-item" href="{{url('/about-form')}}">Create About</a>
                </div>
            </div>
        </li>
{{--        @else(auth()->user()->email=='snake000@gmail.com')--}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap4"
               aria-expanded="true" aria-controls="collapseBootstrap4">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Files</span>
            </a>
            <div id="collapseBootstrap4" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Files</h6>
                    <a class="collapse-item" href="{{url('/files-table')}}">View Files</a>
                    <a class="collapse-item" href="{{url('/files-form')}}">Create Files</a>


                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"
               aria-expanded="true" aria-controls="collapseBootstrap5">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Cards</span>
            </a>
            <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Cards</h6>
                    <a class="collapse-item" href="{{url('card-table')}}">View Cards</a>
                    <a class="collapse-item" href="{{url('/card-form')}}">Create Cards</a>
                </div>
            </div>
        </li>
{{--        @endif--}}

{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap5"--}}
{{--               aria-expanded="true" aria-controls="collapseBootstrap5">--}}
{{--                <i class="far fa-fw fa-window-maximize"></i>--}}
{{--                <span>Cards</span>--}}
{{--            </a>--}}
{{--            <div id="collapseBootstrap5" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Cards</h6>--}}
{{--                    <a class="collapse-item" href="{{url('card-table')}}">View Cards</a>--}}
{{--                    <a class="collapse-item" href="{{url('/card-form')}}">Create Cards</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}


        <hr class="sidebar-divider">
        <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
            <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                                           aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                            <span class="ml-2 d-none d-lg-inline text-white small">{{auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            @yield('content')
        </div>
    </div>
</div>


            <!-- Topbar -->

            <!-- Container Fluid -->









<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/ruang-admin.min.js')}}"></script>
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
        toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>
</body>

</html>

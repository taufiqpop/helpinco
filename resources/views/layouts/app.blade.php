<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? config('app.name') }} | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Helpin.id" name="description" />
    <meta content="Taufiq Pop" name="author" />
    <meta content="{{ url('/') }}/" name="base_url" />
    <meta content="{{ config('app.theme') }}" name="asset_url">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicons --}}
    <link rel="shortcut icon" href="{{ config('app.theme') }}assets/images/favicons.ico">

    @include('layouts.component._style')
    @stack('styles')
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/" class="logo logo-light" target="_blank">
                            <span class="logo-sm">
                                <img src="{{ config('app.theme') }}assets/images/logo/Helpinid.jpeg" alt=""
                                    height="15">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ config('app.theme') }}assets/images/logo/Helpinid.jpeg" alt=""
                                    height="50">
                            </span>
                        </a>
                    </div>
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect">
                        {{ Str::ucfirst(session('role_name')) }}
                    </button>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-xl-inline-block ml-1" key="t-henry">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item change-profile" href="javascript:void(0)"><i
                                    class="bx bx-user font-size-16 align-middle mr-1"></i> <span
                                    key="t-change-profile">Ganti Profile</span></a>
                            <a class="dropdown-item change-password" href="javascript:void(0)"><i
                                    class="bx bx-key font-size-16 align-middle mr-1"></i> <span
                                    key="t-change-password">Ganti Kata Sandi</span></a>
                            @if (session('multi_role'))
                                <a class="dropdown-item" href="{{ route('choose-role') }}"><i
                                        class="bx bx-lock-open font-size-16 align-middle mr-1"></i> <span
                                        key="t-lock-screen">Ganti Otoritas</span></a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i
                                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> <span
                                    key="t-logout">Logout</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{-- Sidebar --}}
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu"></ul>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">{{ config('app.name') }} |
                                    {{ $title ?? 'Selamat Datang' }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    @yield('contents', View::make('default'))
                </div>
            </div>

            @include('layouts.component._change_profile')
            @include('layouts.component._change_password')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © TAUFIQ POP.
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @include('layouts.component._script')
    @stack('scripts')
</body>

</html>

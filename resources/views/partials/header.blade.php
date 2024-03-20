{{--@extends('layout.main')--}}
{{--@section('header')--}}
{{--<nav class="main-header navbar navbar-expand navbar-white navbar-light">--}}
{{--    <!-- Left navbar links -->--}}
{{--    <ul class="navbar-nav">--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" data-widget="pushmenu" href="#" role="button"--}}
{{--            ><i class="fas fa-bars"></i--}}
{{--                ></a>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--    <!-- Right navbar links -->--}}
{{--    <ul class="navbar-nav ml-auto">--}}
{{--        <!-- Website Button -->--}}
{{--        <li class="nav-item px-4">--}}
{{--            <button type="button" class="btn btn-block btn-info">--}}
{{--                Visit Website--}}
{{--            </button>--}}
{{--        </li>--}}

{{--        <!-- Image Profile -->--}}
{{--        <li style="border-left: 1px solid #4b545c">--}}
{{--            <div class="user-panel d-flex px-2">--}}
{{--                <div class="info">--}}
{{--                    <h6 class="d-block">Alexander Pierce</h6>--}}
{{--                </div>--}}
{{--                <div class="image">--}}
{{--                    <img--}}
{{--                        src="dist/img/user2-160x160.jpg"--}}
{{--                        class="img-circle elevation-2"--}}
{{--                        alt="User Image"--}}
{{--                    />--}}
{{--                </div>--}}
{{--                <div></div>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}
{{--@endsection--}}

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <ul class="navbar-nav">
        <li class="nav-item">
            <a
                class="nav-link"
                data-widget="pushmenu"
                href="#"
                role="button"
            >
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
        <!-- Website Button -->

        <li class="nav-item px-4">
            <button
                type="button"
                class="btn btn-block btn-info"
            >Visit Website</button>
        </li>

        <!-- Image Profile -->

        <li
            class="nav-item dropdown"
            style="border-left: 1px solid #4b545c"
        >
            <div class="d-flex px-2">
                <div
                    class="info px-2"
                    style="display: flex; align-items: center;"
                >
                    <h6 class="d-block">Alexander Pierce</h6>
                </div>

                <div
                    class="image"
                    data-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                >
                    <img
                        src="dist/img/user2-160x160.jpg"
                        class="img-circle elevation-2"
                        alt="User Image"
                        style="height: 40px;"
                    >
                </div>

                <div
                    class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-muted"
                    style="left: inherit; right: 0px;"
                >
                    <a
                        href="#"
                        class="dropdown-item"
                    >
                        <i class="fas fa-user mx-2 text-muted"></i>
                        Change Profile
                    </a>

                    <div class="dropdown-divider"></div>

                    <a
                        href="#"
                        class="dropdown-item"
                    >
                        <i class="fas fa-lock mx-2 text-muted"></i>
                        Change Password
                    </a>

                    <div class="dropdown-divider"></div>

                    <a
                        href="#"
                        class="dropdown-item"
                    >
                        <i class="fas fa-image mx-2 text-muted"></i>
                        Change Photo
                    </a>

                    <div class="dropdown-divider"></div>

                    <a
                        href="#"
                        class="dropdown-item"
                    >
                        <i class="fas fa-image mx-2 text-muted"></i>
                        Change Banner
                    </a>

                    <div class="dropdown-divider"></div>

                    <a
                        href="#"
                        class="dropdown-item dropdown-footer"
                    >
                        <i class="fas fa-sign-out-alt text-muted"></i>
                        Logout
                    </a>
                </div>
            </div>
        </li>
    </ul>
</nav>

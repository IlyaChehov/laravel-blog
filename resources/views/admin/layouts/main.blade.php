<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AdminLTE v4 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
          content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
          content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
          integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
          integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
          integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.css') }}">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
                                class="bi bi-list"></i> </a></li>
                <li class="nav-item d-none d-md-block"><a href="{{ route('admin.index') }}" class="nav-link">Главная</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i
                                class="bi bi-search"></i> </a></li>
                <li class="nav-item dropdown"><a class="nav-link" data-bs-toggle="dropdown" href="#"> <i
                                class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"><a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img src="{{ asset('assets/admin/img/user1-128x128.jpg') }}"
                                                                alt="User Avatar"
                                                                class="img-size-50 rounded-circle me-3"></div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                    </h3>
                                    <p class="fs-7">Call me whenever you can...</p>
                                    <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img src="{{ asset('assets/admin/img/user8-128x128.jpg') }}"
                                                                alt="User Avatar"
                                                                class="img-size-50 rounded-circle me-3"></div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-end fs-7 text-secondary"> <i
                                                    class="bi bi-star-fill"></i> </span>
                                    </h3>
                                    <p class="fs-7">I got your message bro</p>
                                    <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img src="{{ asset('assets/admin/img/user3-128x128.jpg') }}"
                                                                alt="User Avatar"
                                                                class="img-size-50 rounded-circle me-3"></div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-end fs-7 text-warning"> <i
                                                    class="bi bi-star-fill"></i> </span>
                                    </h3>
                                    <p class="fs-7">The subject goes here</p>
                                    <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link" data-bs-toggle="dropdown" href="#"> <i
                                class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"><span
                                class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                            <span class="float-end text-secondary fs-7">3 mins</span> </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                            <span class="float-end text-secondary fs-7">12 hours</span> </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                            <span class="float-end text-secondary fs-7">2 days</span> </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">
                            See All Notifications
                        </a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i
                                data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i
                                data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a>
                </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                <li class="nav-item dropdown user-menu"><a href="#" class="nav-link dropdown-toggle"
                                                           data-bs-toggle="dropdown"> <img
                                src="{{ asset('assets/admin/img/user2-160x160.jpg') }}"
                                class="user-image rounded-circle shadow" alt="User Image"> <span
                                class="d-none d-md-inline">Alexander Pierce</span> </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <li class="user-header text-bg-primary"><img
                                    src="{{ asset('assets/admin/img/user2-160x160.jpg') }}"
                                    class="rounded-circle shadow" alt="User Image">
                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2023</small>
                            </p>
                        </li> <!--end::User Image--> <!--begin::Menu Body-->
                        <li class="user-body"> <!--begin::Row-->
                            <div class="row">
                                <div class="col-4 text-center"><a href="#">Followers</a></div>
                                <div class="col-4 text-center"><a href="#">Sales</a></div>
                                <div class="col-4 text-center"><a href="#">Friends</a></div>
                            </div> <!--end::Row-->
                        </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                        <li class="user-footer"><a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#"
                                                                                                            class="btn btn-default btn-flat float-end">Sign
                                out</a></li> <!--end::Menu Footer-->
                    </ul>
                </li> <!--end::User Menu Dropdown-->
            </ul> <!--end::End Navbar Links-->
        </div>
    </nav>
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
        <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
                <!--begin::Brand Image--> <img src="{{ asset('assets/admin/img/AdminLTELogo.png') }}"
                                               alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
                <!--end::Brand Image--> <!--begin::Brand Text--> <span class="brand-text fw-light">AdminLTE 4</span>
                <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open"><a href="#" class="nav-link">
                            <i class="nav-icon bi bi-list-check"></i>
                            <p>
                                <strong>Категории</strong>
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="box-sizing: border-box; display: block;">
                            <li class="nav-item">
                                <a href="{{ route('admin.category.create') }}" class="nav-link">
                                    <i class="nav-icon bi bi-plus-lg"></i>
                                    <p>Добавить категорию</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.category.index') }}" class="nav-link">
                                    <i class="nav-icon bi bi-list-stars"></i>
                                    <p>Список категорий</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item menu-open"><a href="#" class="nav-link">
                            <i class="nav-icon bi bi-stickies"></i>
                            <p>
                                <strong>Посты</strong>
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview" style="box-sizing: border-box; display: block;">
                            <li class="nav-item">
                                <a href="{{ route('admin.post.create') }}" class="nav-link">
                                    <i class="nav-icon bi bi-plus-lg"></i>
                                    <p>Добавить пост</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.post.index') }}" class="nav-link">
                                    <i class="nav-icon bi bi-list-stars"></i>
                                    <p>Список постов</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div> <!--end::Sidebar Wrapper-->
    </aside> <!--end::Sidebar--> <!--begin::App Main-->
    <main class="app-main"> <!--begin::App Content Header-->
        @yield('content')
    </main>
    <footer class="app-footer text-center">
        <strong>
            Copyright &copy; {{ date('Y') }}&nbsp;
        </strong>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/admin/js/adminlte.js') }}"></script>
<script src="{{ asset('assets/admin/js/overlayScrollbar.js') }}"></script>
</body>

</html>
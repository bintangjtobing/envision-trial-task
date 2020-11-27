<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard | mineCARE</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{!!asset('css/index.css')!!}" rel="stylesheet">
    {{-- <link href="{!!asset('css/main.css')!!}" rel="stylesheet"> --}}
    <link href="{{mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <script src="{{mix('js/app.js') }}" type="text/javascript" defer></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle"
                                                src="{!!url('https://media-exp1.licdn.com/dms/image/C5603AQGpHbCM1oEMyw/profile-displayphoto-shrink_200_200/0?e=1609977600&v=beta&t=5tHarqsAiOt-yAEri0TTrH0s8NwHDG9cDwiqcwICKHI')!!}"
                                                alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a href="/sign-out" type="button" tabindex="0" class="dropdown-item">Sign
                                                Out</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{session()->get('name')}}
                                    </div>
                                    <div class="widget-subheading">
                                        Administrator
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="App">
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                    data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <router-link to="/" active-class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </router-link>
                                </li>
                                <li class="app-sidebar__heading">App</li>
                                <li>
                                    <router-link to="/user-managements" active-class="mm-active">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        User Managements
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/new-file" active-class="mm-active">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Create new file
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/chemical-data-lists" active-class="mm-active">
                                        <i class="metismenu-icon pe-7s-drop"></i>
                                        Chemical Data List
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/data-results" active-class="mm-active">
                                        <i class="metismenu-icon pe-7s-folder"></i>
                                        Data Results
                                    </router-link>
                                </li>
                                <li>
                                    <router-link to="/user-guides" active-class="mm-active">
                                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                                        User Guides
                                    </router-link>
                                </li>
                                <li>
                                    <a href="/sign-out">
                                        <i class="metismenu-icon pe-7s-power"></i>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <router-view></router-view>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            &copy; Copyright 2020 - Envision AU | mineCARE<sup>tm</sup> - All
                                            right
                                            reserved
                                            by BintangTobing
                                        </li>

                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}
        </div>
    </div>
    <script type="text/javascript" src="{!!asset('assets/scripts/main.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('assets/scripts/index.js')!!}"></script>
</body>

</body>

</html>

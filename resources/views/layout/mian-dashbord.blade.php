<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('application_header')}}</title>


    @if(App::getLocale() === 'english')
        <link rel="stylesheet" href="{{ asset('dist2/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('dist2/css/app-dark.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('dist2/css/app.rtl.css') }}">
        <link rel="stylesheet" href="{{ asset('dist2/css/app-dark.rtl.css') }}">
    @endif
    <link rel="stylesheet" href="{{@asset('dist2/css/style.css')}}">
    <link rel="shortcut icon" href="{{@asset('./dist2/css/svg/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{@asset('dist2/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/font-awsome.css')}}">
    @yield('styles')
</head>
<body  dir="{{ App::getLocale() === 'english' ? 'ltr' : 'rtl' }}">
<script src="{{@asset('dist2/js/initTheme.js')}}"></script>
<div id="app">
    <div id="sidebar">
        <div class="sidebar-wrapper active">
                <div class="d-flex justify-content-between align-items-center mt-0 mb-0">
                    <div class="theme-toggle d-flex  gap-4 align-items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                             role="img" class="iconify iconify--system-uicons" width="20" height="15"
                             preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                            <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                               stroke-linejoin="round">
                            </g>
                        </svg>
                        <div class="dropdown" style="width: 20px;">
                            <i class="bi bi-bell-fill fs-5" id="notificationDropdown"
                               data-bs-toggle="dropdown" aria-expanded="false" style="color: #bb5454"></i>
                            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" aria-labelledby="notificationDropdown">
                                <li><span class="dropdown-item dropdown-header">15 Notifications</span></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a href="#" class="dropdown-item">
                                     8 friend requests
                                    </a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li><a href="#" class="dropdown-item dropdown-footer">See All Notifications</a></li>
                                <li><div class="dropdown-divider"></div></li>
                            </ul>
                        </div>
                        <button class="btn btn-outline-primary btn-sm mt-0 dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                               {{__('Language')}}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="{{url('language/pashto')}}" data-lang="en">پښتو</a></li>
                            <li><a class="dropdown-item" href="{{url('language/dari')}}" data-lang="es">فارسی</a></li>
                            <li><a class="dropdown-item" href="{{url('language/english')}}" data-lang="fr">English</a></li>
                            <!-- Add more languages as needed -->
                        </ul>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                            <label class="form-check-label"></label>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                            </path>
                        </svg>
                    </div>
                </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title mt-0 mb-0" style="user-select: none; margin-top: -10px" >
                        <div class="logo">
                            <h5><a href="{{route('home')}}">{{ucfirst(strtolower(Auth::user()->name))}}</a></h5>
                        </div>
                    </li>

                    {{-- <li class="sidebar-title mt-2 mb-3" style="user-select: none;" >{{__('management_system')}} </li> --}}
                    <li
                        class="sidebar-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{url('/')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>{{__('Dashboard')}}</span>
                        </a>
                    </li>
                    @if(Gate::any(['admin', 'super_admin']))
                    <li
                        class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>{{__('part_of_system')}}</span>
                        </a>
                        <ul class="submenu {{ Route::currentRouteName() == 'crimnal' ? 'active' : '' }}">
                            <li class="submenu-item  {{ Route::currentRouteName() == 'crimnal' ? 'active' : '' }}">
                                <a href="{{route('crimnal')}}" class="submenu-link ">{{__('crime_part')}}</a>
                            </li>
                            <li class="submenu-item  {{ Route::currentRouteName() == 'all_list' ? 'active' : '' }}">
                                <a href="{{route('all_list')}}" class="submenu-link"> {{__('All_suspect_list')}}</a>
                            </li>
                            <li class="submenu-item  {{ Route::currentRouteName() == 'list_people' ? 'active' : '' }} ">
                                <a href="{{route('list_people')}}" class="submenu-link"> {{__('All_complaint_list')}} </a>
                            </li>
                            <li class="submenu-item  {{ Route::currentRouteName() == 'list_cases' ? 'active' : '' }}">
                                <a href="{{route('list_cases')}}" class="submenu-link">{{__('Cases')}}</a>
                            </li>
                        </ul>
                    </li>
                        @can('super_admin')
                     <li
                            class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-shield-lock"></i>
                                <span>{{__('admin_part')}}</span>
                            </a>
                            <ul class="submenu {{ Route::currentRouteName() == 'crimnal' ? 'active' : '' }}">
                                    <li
                                        class="sidebar-item  {{ Route::currentRouteName() == 'register' ? 'active' : '' }} ">
                                        <a href="{{route('register')}}" class='sidebar-link'>
                                            <i class="bi bi-people-fill"></i>
                                            <span>{{__('users')}}  </span>
                                        </a>
                                    </li>
                                    <li
                                        class="sidebar-item  {{ Route::currentRouteName() == 'province_account' ? 'active' : '' }} ">
                                        <a href="{{route('province_account')}}" class='sidebar-link'>
                                            <i class="bi bi-people-fill"></i>
                                            <span>{{__('province_account')}}</span>
                                        </a>
                                    </li>
                            </ul>
                        </li>
                        @endcan
                        <li
                            class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-search"></i>
                                <span>{{__('Search')}}</span>
                            </a>
                            <ul class="submenu">
                                <li
                                    class="sidebar-item   {{ Route::currentRouteName() == 'search' ? 'active' : '' }}">
                                    <a href="{{route('search')}}" class='sidebar-link'>
                                        <span>{{__('public_search')}}</span>
                                    </a>
                                </li>
                                <li
                                    class="sidebar-item {{ Route::currentRouteName() == 'bio_search' ? 'active' : '' }} ">
                                    <a href="{{route('bio_search')}}" class='sidebar-link '>
                                        <span>{{__('biemitrec_search')}} </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-clipboard-check"></i>
                                <span>{{__('complint_part')}}</span>
                            </a>
                            <ul class="submenu {{ Route::currentRouteName() == 'crimnal' ? 'active' : '' }}">
                                <li
                                    class="sidebar-item  {{ Route::currentRouteName() == 'people' ? 'active' : '' }} ">
                                    <a href="{{route('people')}}" class='sidebar-link'>
                                        <span>{{__('complinte_list')}} </span>
                                    </a>
                                </li>
                                <li
                                    class="sidebar-item  {{ Route::currentRouteName() == 'people_form' ? 'active' : '' }} ">
                                    <a href="{{route('people_form')}}" class='sidebar-link'>
                                        <span>{{__('save_complent')}} </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <li
                        class="sidebar-item   {{ Route::currentRouteName() == 'mian_case' ? 'active' : '' }}">
                        <a href="{{route('mian_case')}}" class='sidebar-link'>
                            <i class="bi bi-briefcase"></i>
                            <span>{{__('mian_case')}} </span>
                        </a>
                        </li>
                        <li
                            class="sidebar-item   {{ Route::currentRouteName() == 'Report' ? 'active' : '' }}">
                            <a href="{{route('Report')}}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-text"></i>
                                <span>{{__('Report')}} </span>
                            </a>
                        </li>
                    @endif
                    @can('moder')
                        <li
                            class="sidebar-item {{ Route::currentRouteName() == 'province_list' ? 'active' : '' }} ">
                            <a href="{{route('province_list')}}" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>{{__('save_compelint')}} </span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item {{ Route::currentRouteName() == 'province_criminal' ? 'active' : '' }} ">
                            <a href="{{route('province_criminal')}}" class='sidebar-link'>
                                <i class="bi bi-emoji-sunglasses"></i>
                                <span>{{__('Criminal_part')}} </span>
                            </a>
                        </li>
                    @endcan
                    <li
                        class="sidebar-item {{ Route::currentRouteName() == 'profile_info' ? 'active' : '' }} ">
                        <a href="{{route('profile_info')}}" class='sidebar-link'>
                            <i class="bi bi-person-fill"></i>
                            <span>{{__('my_profile')}} </span>
                        </a>
                    </li>
                    <li
                        class="sidebar-item mb-0">
                        <a href="" class="sidebar-link "  data-bs-toggle="modal" data-bs-target="#logoutModal">
                          <button class="btn"  style="background-color: #6c3b3b; color: #ffffff">{{__('logout')}}</button>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- start modal  -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">{{__('Confirm_delete')}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{__('Logout_description')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('Cancel')}}</button>
                    <form action="{{route('logout')}}" method="post">
                                                @csrf
                            <button class="btn " style="background-color: #6c3b3b; color: #ffffff" type="submit">{{__('logout')}}</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
      @yield('content')
    </div>
</div>



<script src="{{@asset('dist2/js/component/dark.js')}}"></script>
<script src="{{@asset('dist2/static/component/perfect-scrollbar.min.js')}}"></script>
<script src="{{@asset('dist2/js/app.js')}}"></script>
<script src="{{@asset('dist2/js/apexcharts.min.js')}}"></script>
<script src="{{@asset('dist2/js/dashboard.js')}}"></script>
   @yield('scripts')
    @stack('scripts')
</body>
</html>




<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route("admin.panel")}}">
            <div class="sidebar-brand-text">Afiş Arşivi Panel</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if(Request::segment(2)=='panel') active @endif">
            <a class="nav-link" href="{{route("admin.panel")}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Panel</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            İçerik Yönetimi
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link @if(Request::segment(2)=='posterler') in @else collapsed @endif" href="#"
               data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-edit"></i>
                <span>Afişler</span>
            </a>
            <div id="collapseTwo" class="collapse @if(Request::segment(2)=='posterler') show @endif"
                 aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Afiş İşlemleri:</h6>
                    <a class="collapse-item @if(Request::segment(2)=='posterler' and !Request::segment(3)) active @endif"
                       href="{{route("poster.index")}}">Tüm Afişler</a>
                    <a class="collapse-item @if(Request::segment(2)=='posterler' and Request::segment(3)=='create') active @endif"
                       href="{{route("poster.create.index")}}">Afiş Yükle</a>
                </div>
            </div>
        </li>

    @if(isset($user_admin)&&!is_null($user_admin))
        <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" @if(Request::segment(2)=="kategoriler") style="color:white !important;"
                   @endif href="{{route("category.index")}}">
                    <i @if(Request::segment(2)=="kategoriler") style="color:white !important;"
                       @endif class="fas fa-fw fa-list"></i>
                    <span>Kategoriler</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link" @if(Request::segment(2)=="hakkımızda") style="color:white !important;"
                   @endif href="{{route("about.update.index")}}">
                    <i @if(Request::segment(2)=="hakkımızda") style="color:white !important;"
                       @endif class="fas fa-fw fa-edit"></i>
                    <span>Hakkımızda Sayfası</span>
                </a>

            </li>

        <li class="nav-item">
            <a class="nav-link" @if(Request::segment(2)=="iletisim") style="color:white !important;"
               @endif href="{{route("panel.contact.index")}}">
                <i @if(Request::segment(2)=="iletisim") style="color:white !important;"
                   @endif class="fas fa-fw fa-edit"></i>
                <span>İletişim Sayfası</span>
            </a>

        </li>

            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2)=='kullanıcılar') in @else collapsed @endif" href="#"
                   data-toggle="collapse" data-target="#collapsePage"
                   aria-expanded="true" aria-controls="collapsePage">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Kullanıcılar</span>
                </a>
                <div id="collapsePage" class="collapse @if(Request::segment(2)=='kullanıcılar') show @endif"
                     aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sayfa İşlemleri:</h6>
                        <a class="collapse-item @if(Request::segment(2)=='kullanıcılar' and !Request::segment(3)) active @endif"
                           href="{{route("users.index")}}">Tüm Kullanıcılar</a>
                        {{--                    <a class="collapse-item @if(Request::segment(2)=='sayfalar' and Request::segment(3)=='create') active @endif"  href="#"></a>--}}
                    </div>
                </div>
            </li>
    <!-- Divider -->
        <hr class="sidebar-divider">
        @endif


        @if(isset($user_admin)&&!is_null($user_admin))
            <div class="sidebar-heading">
                Site Ayarları
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('config.index')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ayarlar</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
    @endif
    <!-- Heading -->

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- cizgi -->
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(isset($user)&&!is_null($user))
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">{{$user->name}}</span>
                            @endif
                            @if(isset($user_admin)&&!is_null($user_admin))
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">{{$user_admin->name}}</span>
                            @endif
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route("user.settings.index")}}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil Ayarları
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Çıkış Yap
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                    @if(isset($user->country_id))
                        @if($user->country_id)
                            <a href="{{route( "front.home")}}" target="_blank"
                               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-globe fa-sm text-white-50"></i> Siteyi Görüntüle</a>
                        @else
                            <span style="color: red; font-size: larger;">Lütfen bilgilerinizi güncelleyiniz!</span>
                        @endif
                    @endif
                    @if(isset($user_admin->country_id))
                        @if($user_admin->country_id)
                            <a href="{{route( "front.home")}}" target="_blank"
                               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-globe fa-sm text-white-50"></i> Siteyi Görüntüle</a>
                        @else
                            <span style="color: red; font-size: larger;">Lütfen bilgilerinizi güncelleyiniz!</span>
                        @endif
                    @endif
                </div>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('font-awesome/css/all.css')}}"/>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <script src="{{asset('jquery/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('jquery/wow.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap4.min.js')}}"></script>
    <title>Afiş Arşivi</title>
</head>

<body>
<div class="header">
    <div class="title">
        <a href="{{route("front.home")}}">
            <img src="{{asset('./images/afislogo2.png')}}" style="width: 357px; height: 55px;" alt="">
        </a>
    </div>
    <div class="right-header">
        <div class="profile">
            <a href="{{route("designer.index")}}" style="color:black">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
        <div class="archive ">
            <a href="{{route('poster.archive')}}"  style="color:black;">
                <i class="fa-solid fa-box-archive"></i>
            </a>
        </div>
        <div class="menu ml-2">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{route("about.index")}}">Hakkımızda</a>
                <a href="{{route('poster.advertisement')}}">Reklam Arşivi</a>
                <a href="{{route('poster.social')}}">Sosyal Arşiv</a>
                <a href="{{route('poster.culture')}}">Kültürel Arşiv</a>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route("logout")}}">Çıkış Yap</a>
                    <a href="{{route("admin.panel")}}" target="_blank">Panel</a>
                @else()
                <a href="{{route("login.index")}}">Giriş Yap</a>
                <a href="{{route("register.index")}}">Kayıt ol</a>
                @endif

            </div>
            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>
        </div>

    </div>
</div>

@yield("content")

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-img col-12 col-lg-6" >
                <img src="{{asset('./images/afisfooterimg.png')}}" style="width: 400px; height: 80px;" alt="">
            </div>
            @if(isset($config)&&!is_null($config))
            <div class="icons col-12 col-lg-6" style="display: flex;
            align-items: center;">
                <a href=""><i class="fa-brands fa-twitter">{{$config->twitter}}</i></a>
                <a href=""><i class="fa-brands fa-facebook">{{$config->facebook}}</i></a>
                <a href=""><i class="fa-brands fa-instagram">{{$config->instagram}}</i></a>
                <a href=""><i class="fa-brands fa-linkedin">{{$config->linkedin}}</i></a>
            </div>
            @endif
        </div>
    </div>
</div>



<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySidenav").style.right = 0;
        document.getElementById("mySidenav").style.left = 'auto';
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
</body>
</html>

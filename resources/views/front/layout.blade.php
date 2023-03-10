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
    <link rel="stylesheet" href="https://use.typekit.net/ogc7bca.css">
    <script src="{{asset('jquery/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('jquery/wow.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap4.min.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('./images/faviconafis2.png')}}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz@6..96&display=swap" rel="stylesheet">
    <title>Afiş Arşivi</title>
</head>

<body style="background-color: #f2f2f2">
<div class="header">
    <div class="title">
        <a href="{{route("front.home")}}">
            <img class="header-img" src="{{asset('./images/afislogo2.png')}}"  alt="">
        </a>
    </div>

    <div class="right-header">
        <form method="GET" action="{{route('index')}}">
        <div class="search-button">
        <div class="input-group rounded mr-2">
            <input type="text" name="search_query"  class="form-control rounded" placeholder="Tasarımcı Ara" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                        <a type="submit"><i class="far fa-search"></i></a>
  </span>
        </div>
        </div>
        </form>

        <div class="profile">
            <a href="{{route("designer.index")}}" style="color: #000000;">
                <i class="fa-solid fa-users"></i>
            </a>
        </div>
        <div class="archive " style="margin:0 0 0 5px;">
            <a href="{{route('poster.archive')}}"  style="color: #000000;">
{{--                <i class="fa-sharp fa-solid fa-suitcase"></i>--}}
                <img src="{{asset('../images/fileicon.png')}}" alt="">
            </a>
        </div>
        <div class="menu ml-2">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="{{route("about.index")}}">Hakkımızda</a>
                <a href="{{route("contact.index")}}">İletişim</a>
                <a href="{{route('poster.advertisement')}}">Reklam Afişleri</a>
                <a href="{{route('poster.social')}}">Sosyal Afişler</a>
                <a href="{{route('poster.culture')}}">Kültürel Afişler</a>
                <a href="{{route('poster.tipografi')}}">Tipografik Afişler</a>
                <a href="{{route('poster.other')}}">Diğer Afişler</a>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <a href="{{route("logout")}}">Çıkış Yap</a>
                    <a href="{{route("admin.panel")}}" target="_blank">Panel</a>
                @else()
                <a href="{{route("login.index")}}">Giriş Yap</a>
                <a href="{{route("register.index")}}">Kayıt ol</a>
                @endif

            </div>
            <div id="main">
                <span style="color: #000000;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>
        </div>

    </div>
</div>


@yield("content")

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-img col-12 col-lg-4" >
                <img src="{{asset('./images/afisfooterimg.png')}}" style="width: 400px; height: 80px;" alt="">
            </div>

            <div class="col-12 col-lg-8" style=" margin-top: 4vh;">
                <p>Bu web sitesi <strong> “Dijital Arşiv: Erişime Açık Afiş” </strong> isimli sanatta yeterlik tezi kapsamında tasarlanmıştır.</p>
            </div>
{{--            @if(isset($config)&&!is_null($config))--}}
{{--            <div class="icons col-12 col-lg-6" style="display: flex;--}}
{{--            align-items: center;">--}}
{{--                <a href=""><i class="fa-brands fa-twitter"></i></a>--}}
{{--                <a href=""><i class="fa-brands fa-facebook"></i></a>--}}
{{--                <a href=""><i class="fa-brands fa-instagram"></i></a>--}}
{{--                <a href=""><i class="fa-brands fa-linkedin"></i></a>--}}
{{--            </div>--}}
{{--            @endif--}}
        </div>
    </div>
</div>



<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySidenav").style.right = 0;
        document.getElementById("mySidenav").style.left = 'auto';
        document.getElementById("mySidenav").style.backgroundColor = "#d5d5d5";

    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<script>
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
        e.preventDefault();
        e.target.elements.name.value = '';
        e.target.elements.email.value = '';
        e.target.elements.message.value = '';
    });

</script>
</body>
</html>

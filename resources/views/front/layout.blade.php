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


    <title>Poster</title>
</head>
<style>

</style>
<body>
<div class="header">
    <div class="title">
        <a href="">
            <h4>typo/graphic posters</h4>
        </a>
    </div>
    <div class="right-header">
        <div class="profile">
            <a href="" style="color:black">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
        <div class="menu">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Hakkında</a>
                <a href="#">Poster Arşivi</a>
                <a href="#">Yazarlar</a>
            </div>

            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </div>
        </div>

    </div>
</div>

@yield("content")

<div class="footer">
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
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
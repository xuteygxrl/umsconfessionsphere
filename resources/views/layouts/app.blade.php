@extends('layouts.partial.head')
<body style="background-color: black">
    <header class="header">
        <a  onclick='location.href="#"'  class="logo">UMS Confession Sphere</a>
        <input type="checkbox" name="a" id="check">
        <label for="check" class="icons">
            <i class="bx bx-menu bx-tada-hover" id="menu-icon"></i>
            <i class="bx bx-x bx-tada-hover" id="close-icon"></i>
        </label>
        <nav class="navbar" id="navigation">
            <a class="url active" id="hmnav"   onclick='location.href="#Home"' style="--i:0;">Home</a>
            <a class="url"  onclick='location.href="#Confessions"' style="--i:1;">Confessions</a>
            <a class="url"  onclick='location.href="#Feedback"' style="--i:3;">Feedback/Report</a>
            <a class="url"  onclick='location.href="login.html"' style="--i:1;">Login</a>
        </nav>
    </header>

    <div class="d-none d-sm-block">
        <div id="container"></div>
        <div id="cursor"></div>
    </div>

    @yield('content')

    <script src="{{asset('script/script.js')}}"></script>
</body>
</html>

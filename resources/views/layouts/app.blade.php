@include('layouts.partial.head')
<body style="background-color: black">

    <div class="d-none d-sm-block">
        <div id="container"></div>
        <div id="cursor"></div>
    </div>

    @yield('content')
    
    <script src="{{asset('script/script.js')}}"></script>
</body>
</html>
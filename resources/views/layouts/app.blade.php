@extends('layouts.partial.head')
<body style="background-color: black">

    <div class="d-none d-sm-block">
        <div id="container"></div>
        <div id="cursor"></div>
    </div>

    @yield('content')

    <!-- Context menu -->
    <div id="context-menu">
        <div onclick='location.href="#top"' class="item">Go to top</div>
        <div onclick='window.location.reload()' class="item">Reload</div>
        <hr class="ctmhr">
        <div onclick='location.href="#Home"' class="item">Home</div>
        <div onclick='location.href="#Skills"' class="item">Skills</div>
        <div onclick='location.href="#Feedback"' class="item">Feedback/Report</div>
        <hr class="ctmhr">
        <div onclick='window.open("https://github.com/Saviru/Saviru.github.io")' class="item">Get source code</div>
        <div id="urlcopy" class="item">Copy link address&nbsp;&nbsp;&nbsp;<span class="donect">Copied !</span></div> 
    </div>

    <script src="{{asset('script/script.js')}}"></script>
</body>
</html>

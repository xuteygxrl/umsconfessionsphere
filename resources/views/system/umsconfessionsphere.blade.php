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

    <section id="Home">
        <div id="mytext">
            <h1 id="names">
                <span style="--i:0;" data-text="UMS">UMS</span>
                <span style="--i:1;" data-text="SPHERE">SPHERE</span>
                <span style="--i:2;" data-text="CONFESSION">CONFESSION</span>
            </h1>
        </div>
        <div class="aboutunder">
            <h2 class="ranlets" data-value="Share your confessions anonymously!">Share your confessions anonymously!</h2><br>
            <p id="childtext">Hi there, UMS Confession Sphere is a platform for students at the University of Malaysia Sabah to share their confessions, stories, and thoughts anonymously.</p>
        </div>
        <div class="codesmooth">
            <div class="window glassbox"></div>
            <div class="codename" id="rotXY">
                <span class="codearea"></span>
                <span id="python">
                    <p><b class="nuberings">&nbsp;1 </b><span class="greencode">#About me</span></p>
                    <p><b class="nuberings">&nbsp;2 </b><span class="bluecode">name</span> = <span class="orangecode">"UMS CONFESSION SPHERE"</span></p>
                    <p><b class="nuberings">&nbsp;3 </b><span class="bluecode">job</span> = <span class="orangecode">"Software engineering student"</span></p>
                    <p><b class="nuberings">&nbsp;4 </b><span class="bluecode">hobby</span> = <span class="orangecode">"Programming"</span></p>
                    <p><b class="nuberings">&nbsp;5 </b><span class="bluecode">fav_lang</span> = <span class="orangecode">"Python"</span></p>
                    <p><b class="nuberings">&nbsp;6 </b></p>
                    <p><b class="nuberings">&nbsp;7 </b><span class="yellowcodeL">print</span><span class="yellowcode">(</span><span class="bluecodeD">f</span><span class="orangecode">"Hi there ! I'm </span><span class="pinkcode">{<span class="bluecode">name</span>}</span><span class="orangecode">.</span><span class="orangecode"> I'm a </span></p>
                    <p><b class="nuberings">&nbsp;8 </b>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<span class="pinkcode">{<span class="bluecode">job</span>}</span><span class="orangecode"> who </span><span class="pinkcode">{<span class="bluecode">hobby</span>} </span><span class="orangecode">as a hobby</span></p>
                    <p><b class="nuberings">&nbsp;9 </b>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<span class="orangecode">with my favourite language</p>
                    <p><b class="nuberings">10 </b>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span><span class="pinkcode">{<span class="bluecode">fav_lang</span>}</span><span class="orangecode">"</span><span class="yellowcode">)</span></p>
                    <p><b class="nuberings">11 </b></p>
                    <p><b class="currnum">12 </b><b id="blinkcur">|</b></p>
                </span>
            </div>
        </div>
    </section>
    <section class="smoothtransform" id="Skills">
        <div class="titles">
            <h1 class="glitch">
                <span aria-hidden="true">Category</span>
                Category
                <span aria-hidden="true">Category</span>
            </h1>
            <hr id="hr0">
        </div>
	<a  onclick='window.open("crushing.html")'>
        <div class="skillcontainer smoothtransform" id="skillsec">
            <div class="skillbox" style="--b:100%;--clr:rgb(179, 5, 179);" id="scpp">
                <div class="skillcircle">
                    <div class="skillcircle2">
                        <h2 class="skillpre"><small></small></h2>
		            </a>
                    </div>
                </div>
		            <a  onclick='window.open("crushing.html")'>
                <h3 class="skilltx">Crushing</h3>
		</div>
		<a  onclick='window.open("universitylife.html")'>
            <div class="skillbox" style="--b:100%;--clr:rgb(60, 128, 155);" id="scdes">
                <div class="skillcircle">
                    <div class="skillcircle2">
                        <h2 class="skillpre"><small></small></h2>
			
                    </div>
                </div>
		<a  onclick='window.open("universitylife.html")'>
                <h3 class="skilltx">University Life</h3>
		
            </div>
		<a  onclick='window.open("general.html")'>
	        <div class="skillbox" style="--b:100%;--clr:white;" id="sjs">
                <div class="skillcircle">
                    <div class="skillcircle2">
                        <h2 class="skillpre"><small></small></h2>
			
                    </div>
                </div>
		<a onclick='window.open("general.html")'>
                <h3 class="skilltx">General</h3>
		
        </div>
    </section>
    <br><br><br>
    

    <a onclick='location.href="#"' class="to-top">
        <i class='bx bx-chevron-up'></i>
    </a>

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

    <div class="toastnt">
        <div class="ntcont">
            <i class='bx ntcheck'></i>
        
            <div class="ntmsg">
                <span id="alttil" class="nttxt nttxt1">Alert</span>
                <span id="altmsg" class="nttxt nttxt2">Message</span>
            </div>
            <i class='bx bx-x-circle ntclose'></i>
            <div class="ntprog"></div>
        </div>
    </div>

    <script src="{{asset('script/script.js')}}"></script>
</body>
</html>

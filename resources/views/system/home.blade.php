<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="UMS Confession Sphere">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to UMS Confession Sphere. This is a platform for University of Malaysia Sabah students to share their confessions.">
    <meta name="application-name" content="UMS Confession Sphere">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='./boxicons-2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>UMS Confession Sphere</title>
</head>
<body>
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
            </a>
		</div>
		<a  onclick='window.open("universitylife.html")'>
            <div class="skillbox" style="--b:100%;--clr:rgb(60, 128, 155);" id="scdes">
                <div class="skillcircle">
                    <div class="skillcircle2">
                        <h2 class="skillpre"><small></small></h2>
			</a>
                    </div>
                </div>
		<a  onclick='window.open("universitylife.html")'>
                <h3 class="skilltx">University Life</h3>
		</a>
            </div>
		<a  onclick='window.open("general.html")'>
	    <div class="skillbox" style="--b:100%;--clr:white;" id="sjs">
                <div class="skillcircle">
                    <div class="skillcircle2">
                        <h2 class="skillpre"><small></small></h2>
			</a>
                    </div>
                </div>
		<a  onclick='window.open("general.html")'>
                <h3 class="skilltx">General</h3>
		</a>
            </div>
        </div><br><br><br>

                <div id="Confessions">
            <div class="titles">
                <h1 class="glitch">
                    <span aria-hidden="true">Confessions</span>
                    Confessions
                    <span aria-hidden="true">Confessions</span>
                </h1>
                <hr id="hr0">
            </div>
            <br>
            <div class="prjs">
                <div class="pjglbox">
                    <a  onclick='window.open("D:\KK24603 WEB ENGINEERING\XAMPP\htdocs\umsconfessionsphere\crusing.html")' class="pjbox" style="--pj:1">
                        <img class="pjimg" src="./assets/UMS-Logo-with-Logotype-01.png" alt="GitHub">
                        <h1 class="pjtext smoothtransform">Visit Confessions</h1>
                        <p class="pjsmtext smoothtransform">Make a confessions here. This platform can bring you joy! CHEERS!</p>
                    </a>
                    <!--<a href="D:\KK24603 WEB ENGINEERING\XAMPP\htdocs\umsconfessionsphere\crusing.html" target="_blank" class="pjbox" style="--pj:2">
                        <img class="pjimg" src="./assets/UMS-Logo-with-Logotype-01.png" alt="GitHub">
                        <h1 class="pjtext smoothtransform">Visit Confessions</h1>
                        <p class="pjsmtext smoothtransform">Make a confessions here. This platform can bring you joy! CHEERS!</p>
                    </a>
                    <a href="D:\KK24603 WEB ENGINEERING\XAMPP\htdocs\umsconfessionsphere\crusing.html" target="_blank" class="pjbox" style="--pj:3">
                        <img class="pjimg" src="./assets/UMS-Logo-with-Logotype-01.png" alt="GitHub">
                        <h1 class="pjtext smoothtransform">Visit GitHub</h1>
                        <p class="pjsmtext smoothtransform">See all projecs. Only special projecs are displayed here !</p>
                    </a>
                    <a href="D:\KK24603 WEB ENGINEERING\XAMPP\htdocs\umsconfessionsphere\crusing.html" target="_blank" class="pjbox" style="--pj:4">
                        <img class="pjimg" src="./assets/UMS-Logo-with-Logotype-01.png" alt="GitHub">
                        <h1 class="pjtext smoothtransform">Visit GitHub</h1>
                        <p class="pjsmtext smoothtransform">See all projecs. Only special projecs are displayed here !</p>
                    </a>
                    <a href="https://github.com/Saviru" target="_blank" class="pjbox" style="--pj:5">
                        <img class="pjimg" src="./assets/UMS-Logo-with-Logotype-01.png" alt="GitHub">
                        <h1 class="pjtext smoothtransform">Visit GitHub</h1>
                        <p class="pjsmtext smoothtransform">See all projecs. Only special projecs are displayed here !</p>
                    </a>-->
                </div>    
            </div>
            <br><br><br><br>
        </div>
        <div class="Feedback" id="Feedback">
            <div class="titles">
                <h1 class="glitch">
                    <span aria-hidden="true">Feedback/Report</span>
                    Feedback/Report
                    <span aria-hidden="true">Feedback/Report</span>
                </h1>
                <hr id="hr0">
                <br><br><br><br>
                <div class="contmediv">
                    <div class="contactmail">
                        <div class="contactgroup">
                            <input type="text" class="inputcont" id="name" required>
                            <label class="contlabel">Your&nbsp;name:</label>
                        </div>
                        <div class="contactgroup">
                            <input type="email" class="inputcont" id="email" required>
                            <label class="contlabel" for="">Your&nbsp;Email:</label>
                        </div>
                        <div class="contactgroup">
                            <input type="text" class="inputcont" id="subject" required>
                            <label class="contlabel inprmailvalid" for="">Subject:</label>
                        </div>
                        <div class="contactgroup">
                            <textarea type="text" class="inputcont" id="message" required></textarea>
                            <label class="contlabel" for="">Your&nbsp;messege:</label>
                        </div>
                        <br>
                        <div class="lastcont">
                            <a style="font-weight: bolder;"  onclick="sendMessage();" id="ctmbutton"><span id="ctme">Send</span></a>
                        </div>
                        <br>
                    </div>
                </div>
                <hr style="height: 10rem; border: 0;"><br><br><br>

                <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
            </div>
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

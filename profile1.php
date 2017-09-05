<!DOCTYPE html>
<html>
<head>
    <title>ParinJA</title>
    <link rel="stylesheet" type="text/css" href="omg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="navbar" id="box1">
                <li class="navbar-nav bd-navbar-nav flex-row text-center" id="tab-top">
                    <ul class="nav-item col-2 mt-4"><a target="blank" href="http://localhost/web1/htmlfile/profile1.php"><p><b>HOME</b></p></a></ul>
                    <ul class="nav-item col-2 mt-4" style="right:10px;"><a target="blank" href="http://localhost/web1/htmlfile/index.php"><p><b>PROFILE</b></p></a></ul>
                    <ul class="nav-item col-3 mt-4" style="right:15px;"><a target="blank" href="https://mail.google.com/mail/u/0/#inbox"><p><b>GMAIL IT KMITL</b></p></a></ul>
                    <ul class="nav-item col-3 mt-4" style="right:25px;"><a target="blank" href="https://www.facebook.com/parin.sittigulp"><p><b>MY FACEBOOK</b></p></a></ul>
                    <ul class="nav-item col-3 mt-4 text-left" style="right:25px;"></ul>
                    <ul class="nav-item col-4 mt-4 text-left" style="right:25px;"></ul>
                    <ul class="nav-item col-5 mt-4 text-center" style="border-radius: 15px;color: #ffffff;font-size: 20px;right: 50px;border-left-style: dotted;border-left-width: 5px;border-left-color: #ffffff;border-right-style: dotted;border-right-width: 5px;border-right-color: #ffffff;">
                        <img src="img/it1.png">
                        Welcome&nbsp;&nbsp;<?php
                            $conn = mysqli_connect("localhost","root","","login");
                            mysqli_set_charset($conn,"utf8");
                            $query = mysqli_query($conn, "SELECT * FROM users");
                            while($result = mysqli_fetch_assoc($query)) {
                                echo $result['username'];
                            }
                        ?>
                    </ul>
                </li>
            </div>
        </div>
        <div class="row">
            <div class="box container" id="box2">
                <div class="box container" id="box21">
                    <ol class="navbar-nav bd-navbar-nav flex-row text-center" id="tab-top2">
                        <li class="nav-item col-4 mt-2 text-left"><img src="img/dump1.png"></li>
                        <li class="nav-item col-4 mt-5 text-center" id="topbest"><p>PROFILE</p></li>
                        <li class="nav-item col-4 mt-2 text-left" id="img2"><img src="img/dump2.png"></li>
                    </ol>
                </div>
            </div>
            <div class="box container" id="box3">
                <div class="box container" id="box31">
                    <ol class="navbar-nav bd-navbar-nav flex-row text-center" id="tab-top3">
                        <li class="nav-item col-4 mt-2 text-left"><img src="img/re2.png"></li>
                        <li class="nav-item col-4 mt-5 text-center" id="topbest"><p>OF</p></li>
                        <li class="nav-item col-4 mt-2 text-left" id="img2"><img src="img/re3.png"></li>
                    </ol>
                </div>
            </div>
            <div class="box container" id="box4">
                <div class="box container" id="box41">
                    <ol class="navbar-nav bd-navbar-nav flex-row text-center" id="tab-top4">
                        <li class="nav-item col-4 mt-2 text-left"><img src="img/re4.png"></li>
                        <li class="nav-item col-4 mt-4 text-center" id="topbest"><p>PARIN SITTIGUL</p></li>
                        <li class="nav-item col-4 mt-2 text-left" id="img2"><img src="img/re6.png"></li>
                    </ol>
                </div>
            </div>
            <div class="box container" id="box5">
                <div class="box container" id="box51">
                    <ol class="navbar-nav bd-navbar-nav flex-row text-center" id="tab-top5">
                        <li class="nav-item col-4 mt-2 text-left"><img src="img/re5.png"></li>
                        <li class="nav-item col-4 mt-4" id="topbest"><img src="img/it.png"></li>
                        <li class="nav-item col-4 mt-2 text-left" id="img2"><img src="img/re1.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="big1">
        <div class="row">
            <div class="student col-9">
                <div class="container" id="dump1">
                    <p class="panel-title mt-4">Profile Of Me</p>
                </div>
                <div class="panel-body" id="dump2">
                    <div class="text" id="body1">
                        <div class="textbody text-center container" id="body11">
                            <img src="img/lad2.png">
                            <p></p>
                            <h2>Profile</h2>
                            <p>
                                My name is Parin Sittigul.My age is 18.Now I'm study in it faculty of Ladkrabung Univercity
                                My name is parin sittigul.My nickname is dump and my age is 18.I was interest in technology and computer science I’m young.I have a  first computer when I was ten years old.But first time I use it to play game because I don’t know how computer work.However when I was fourteen years old I started to interest in computer function.I have learn C language.Fist time
                                I write C language for create calculater.Later that I learn python language in mattayom six and
                                I found myself that I want to be a programmer who develop website.So I study in IT faculty because it have course that I want to learn and like it.So I have to                            hard learn in order to finished my dream.
                                I expect that I have more skill in math and economic and I can take them for future.I can work by my knowledge about math with economic and IT.
                                I have a dream that I want to be a programmer and work in famous company and have a skill about IT that I can use it for help communicate and develop my country.I want
                                to be a good programming skill and teach anyone who want to learn.
                            </p>
                        </div>
                        <div class="social-wrap container text-center">
                            <img src="img/re7.png">
                            <img src="img/facebook.svg" alt="Facebook">
                            <img src="img/google.svg" alt="Facebook">
                            <img src="img/youtube.svg" alt="Facebook">
                            <img src="img/twitter.svg" alt="Facebook">
                        </div>
                    </div>
                </div>
            </div>
            <div class="student2 col-3">
                <div class="container" id="dump3">
                    <p class="panel-title mt-4">Web Profile</p>
                </div>
                <div class="panel-body" id="dump4">
                    <iframe src="http://localhost/web1/htmlfile/index.php" style="border:none; width:100%; height:290px;" ></iframe>
                </div>
                <div class="mt-4">
                    <div class="container panel-title mt-4" id="city">
                        <p class="panel-title">My Idol Web</p>
                    </div>
                    <div id="dump5">
                        <img class="take1" src="img/pig1.png">
                    </div>
                    <div id="dump6">
                        <a target="blank" href="https://www.facebook.com/memory.se"><button style="width:100%;height:35px" type="button">Facebook</button></a>
                        <a target="blank" href="http://neko-miku.com/index.html"><button style="width:100%;height:35px" type="button">NekoMiku</button></a>
                        <a target="blank" href="http://www.webtoons.com/th/"><button style="width:100%;height:35px" type="button">Linewebtoon</button></a>
                        <a target="blank" href="http://www.anime-sugoi.com/index.html"><button style="width:100%;height:35px" type="button">Anime-sugoi</button></a>
                        <a target="blank" href="http://www.comico.in.th/"><button style="width:100%;height:35px" type="button">Comico</button></a>
                        <a target="blank" href="https://www.w3schools.com/"><button style="width:100%;height:35px" type="button">W3school</button></a>
                        <a target="blank" href="https://www.linkedin.com/in/%E0%B8%99%E0%B8%B2%E0%B8%A2%E0%B8%9B%E0%B8%A3%E0%B8%B4%E0%B8%8D-%E0%B8%AA%E0%B8%B4%E0%B8%97%E0%B8%98%E0%B8%B4%E0%B8%81%E0%B8%B8%E0%B8%A5-983771149/"><button style="width:100%;height:35px" type="button">Linkedin</button></a>
                        <a target="blank" href="http://xn--code-3jovd.plus.in.th/"><button style="width:100%;height:35px" type="button">Color Code</button></a>
                        <a target="blank" href="http://getbootstrap.com/"><button style="width:100%;height:35px" type="button">Bootstrap</button></a>
                        <a target="blank" href="https://github.com/"><button style="width:100%;height:35px" type="button">Github</button></a>
                        <a target="blank" href="https://outlook.live.com/owa/?path=/mail/inbox/rp&mkt=th-th"><button style="width:100%;height:40px" type="button">Hotmail</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
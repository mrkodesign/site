
<html>
    <head>
        <title>Ω | global html5 project</title>
        <link href="https://fonts.googleapis.com/css?family=Poiret+One|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel='stylesheet' id='style-css'  href='/webkit.css' type='text/css' media='all' />
<link rel="shortcut icon" href="https://hobba.at/web/favicon.ico">
<style>
@import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap');


::selection {
    background: #0000004f;
    opacity: 0.4;
}
body {
    background-color: #1d1d1d;
    font-family: 'Barlow Condensed', sans-serif;
    color: #fff;
    font-size: 1.2rem;
    font-weight: 300;
    margin: 0;
    padding: 0;
}
#clearfix {
    clear: both;
}
.icons {
    display: block;
    background-image: url('http://2020.habborigins.com/content/themes/assets/img/navig_icon.png');
    width: 44px;
    height: 44px;
    image-rendering: pixelated;
}
.icons.home {
    display: block;
    background-image: url(http://2020.habborigins.com/content/themes/assets/img/navig_icon.png);
    background-position: 0px 0px;
    width: 34px;
    height: 51px;
}
.icons.community {
    display: block;
    background-image: url(http://2020.habborigins.com/content/themes/assets/img/navig_icon.png);
    background-position: -37px -3px;
    width: 40px;
    height: 57px;
}
.icons.hoh {
    display: block;
    background-image: url(http://2020.habborigins.com/content/themes/assets/img/navig_icon.png);
    background-position: -80px -8px;
    width: 45px;
    height: 57px;
}
.icons.shop {
    display: block;
    background-image: url(http://2020.habborigins.com/content/themes/assets/img/navig_icon.png);
    background-position: -125px -2px;
    width: 42px;
    height: 58px;
}
navig {
    position: fixed;
    height: 100%;
    width: 20%;
    background-color: #151515;
    overflow: scroll;
    overflow-x: hidden;
}
navig::-webkit-scrollbar-track {
    //-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: transparent;
}
navig::-webkit-scrollbar {
    border-radius: 12px;
    width: 0px;
    background-color: transparent;
}
navig::-webkit-scrollbar-thumb {
    border-radius: 10px;
    //-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: rgba(0,0,0,0.3);
}
navig .navig_button {
    //margin-top: 40%;
}
navig .navig_button a {
    display: block;
    position: relative;
    background-color: #1e1e1e;
    height: 20%;
    text-align: center;
    text-decoration: none;
    color: #fff;
    transition: 0.2s;
}
navig .navig_button a .icons {
    position: absolute;
    left: 0;
    right: 0;
    top: 20px;
    margin: auto auto auto auto;
    opacity: 0.7;
    transition: 0.4s;
}
navig .navig_button a:hover {
    background-color: #292929;
    transition: 0.2s;
    border-left: 4px solid rgba(255,255,255,0.1);
}
navig .navig_button a:hover .icons {
    opacity: 1;
    transition: 0.4s;
}
navig .navig_button a.selected {
    background-color: #292929;
    border-left: 4px solid #fff;
}
navig .navig_button a.selected .icons {
    opacity: 1;
}
navig .navig_button a p {
    position: absolute;
    height: 20%;
    left: 0;
    right: 0;
    top: 45px;
    bottom: 0;
    margin: auto auto auto auto;
    font-weight: 500;
    text-shadow: 1px 2px #0000004a;
}
header {
    position: relative;
    height: 206px;
    width: 80%;
    background-image: url(/bg.png);
    background-position: -420px 240px;;
    float: right;
}
header #logo {
    position: absolute;
    left: 20px;
    top: 50px;
    height: 70px;
    image-rendering: auto;
}
.container {
    position: absolute;
    top: 230px;
    left: 22%;
    width: 76%;
    font-size: 22px;
    letter-spacing: 0.3pt;
}
h1 {
    font-family: Poiret One,sans-serif;
    letter-spacing: 1pt;
    font-weight: 10;
}
header #headlogo {
    position: absolute;
    left: 40px;
    top: 50px;
    image-rendering: auto;

}
.siyahlik {
    background: #0000004f;
    width: 500px;
    height: 86px;
    margin-top: 40px;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 0px 0px 14px #00000029;
    margin-left: 26px;
}
#headbutton {
    z-index: 9239;
    position: absolute;
    outline: none;
    width: 150px;
    height: 40px;
    margin-top: -33px;
    background: #1d1d1d;
    color: white;
    border: 1px solid #ffffff0f;
    border-radius: 3px;
    margin-left: 420px;
    transition: 0.4s;
}
#headbutton:hover {
    background: #212121;
    transition: 0.4s;
}
.btngiris {
    display: inline-block;
    margin-left: 1400px;
    margin-top: -180px;
    position: absolute;
    font-weight: 300;
    line-height: 1.5;
    background: linear-gradient(0deg,#51c452 50%,#66cd67 0);
    border: 4px solid #51c452;
    color: #fff!important;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    border-radius: .25rem;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    padding: 4px 0px 8px 28px;
    font-size: 21px;
    padding-right: 3rem!important;
    padding-left: 3rem!important;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.btnnedir {
    display: inline-block;
    margin-left: 1620px;
    margin-top: -180px;
    position: absolute;
    font-weight: 300;
    line-height: 1.5;
    background: linear-gradient(0deg,#5183c4 50%,#6692cd 0);
    border: 4px solid #5173c4;
    color: #fff!important;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    border-radius: .25rem;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    padding: 4px 0px 8px 28px;
    font-size: 21px;
    padding-right: 3rem!important;
    padding-left: 3rem!important;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
i {
    font-size: 46px;
    margin-top: 41px;
}
a {
    color: white;
    opacity: 0.8;
    transition: 0.2s;
}
a:hover {
    color: white;
    opacity: 1;
    transition: 0.2s;
}
#leftrightcontent {
    position: absolute;
    left: 0px;
    top: 0px;
    bottom: 0px;
    right: 0px;
    background-image: url(/habbo-hotel-png-5.png);
    background-position: right bottom, left bottom;
    background-repeat: no-repeat;
    opacity: 0.2;
    z-index: -1239123912931293921;
}
</style>
    </head>
    <body>
        <navig>
            <div class="navig_button">
                <a href="/">
                <i class="fas fa-home"></i>
                    <p>#ana-sayfa</p>
                </a>
                <a href="/about-html5.php" class="selected">
                <i class="fab fa-html5"></i>
                    <p>#about-html5</p>
                </a>
                <a href="/photos-movies.php">
                <i class="fas fa-images"></i>
                    <p>#photos-movies</p>
                </a>
                <a href="/developer-team.php">
                <i class="fas fa-users"></i>
                    <p>#developer-team</p>
                </a>
                <a href="/download.php">
                <i class="fas fa-download"></i>
                    <p>#download-files</p>
                </a>
                <a href="">
                <i class="fab fa-discord"></i>
                    <p>#discord</p>
                </a>
            </div>
        </navig>
        <header>


        <div class="siyahlik" style="position: absolute; width: 390px;"></div>
        <img src="/h.png" id="headlogo"></img>
<h1 style="margin-left: 86px; margin-top: 70px; position: absolute;">tml<span style="font-weight: 100;color: #f99d4a;font-size: 44px;position: absolute;margin-left: 2px;margin-top: -5px;border-right: 2px solid #f198482e;width: 51px;padding: 0px 1px 0px 0px;">5</span></h1>
<h1 style="
    z-index: 92139213912939123;
    position: absolute;
    font-size: 23px;
    margin-left: 212px;
    margin-top: 74px;
    color: #ffffff;
">≡ Ωmega project</h1>
        </header>
        <div id="clearfix"></div>
        <div class="container" style="margin-top: -50px; font-size: 30px; opacity: 0.2;">
        <i class="fas fa-hashtag" style="font-size: 26px;"></i> html5-hakkında 🇹🇷
        </div>
        <div class="container" style="margin-top: 30px; margin-left: 2px; position: absolute; z-index: 9129321939213;">html5 nedir? html5 web sayfalarını oluşturmak için kullanılan metin & görsel işleme dilidir. Flash yakın zaman sonra kaldırılacağından dolayı, retrolar için html5 tek çözümdür.<br>  Uygulama ne yazık ki bir çözüm değildir çünkü uygulama webview ile yapılır, ve webview veriyi direkt olarak tarayıcıdan çeker. Yani site görüntüsünü sadece uygulamaya döker. Yani<br> kısacası uygulama kullanılamaz. Şuanki oyun deneyiminizi sizlere tabii ki bir anda sunamayız, ama elimizden geldiği kadar şuanki oyuna dönüştürmeye çalışıyoruz. Zaman geçtikçe oyuna bir çok eklenti eklenicektir. Bunun için gece gündüz demeden çalıştığımıza emin olabilirsiniz! Yakın zamanda html5 projesi, şuanki oyun deneyiminizi (belki daha fazlasını) sizlere sunacağından şüpheniz olmasın.<br><br>Daha fazla bilgi almak için, <a href="discord">Discord</a> sunucumuzu ziyaret et!
       </div><hr style="
    margin-top: 326px;
    margin-left:233px;
    width: 70%;
    background: #2b2b2b;
    border: none;
    height: 1px;
">

        <div class="container" style="margin-top: -50px; font-size: 30px; opacity: 0.2;">
        <i class="fas fa-hashtag" style="font-size: 26px; margin-top: 405px;"></i> about-html5 🇺🇸
        </div>
        <div class="container" style="margin-top: 397px; margin-left: 2px;">What is html5? html5 is a text & visual processing language used to create web pages. Since Flash will be removed soon, html5 for retro is the only solution.
The application is unfortunately not a solution because the application is made with webview, and the webview pulls the data directly from the browser. So it just dumps the site image into the application. So
in short, the application cannot be used. Of course, we cannot present your current game experience to you at once, but we are trying to turn it into the current game as much as we can. As time passes, many add-ons will be added to the game. You can be sure that we work day and night for this! Make sure that the html5 project in the near future will offer you your current gaming experience (maybe more)<br><br>Visit our <a href="discord">Discord</a> server for more information!</div>


<div id="leftrightcontent"></div>
<iframe type="text/html" src="https://www.youtube.com/embed/wxWKBduiQj4&t?autoplay=1" frameborder="0" allow="autoplay"></iframe>
    </body>
</html>
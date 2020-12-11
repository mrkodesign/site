
<html>
    <head>
        <title>Ω | global html5 project</title>
        <link href="https://fonts.googleapis.com/css?family=Poiret+One|Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel='stylesheet' id='style-css'  href='/webkit.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='/style.css' type='text/css' media='all' />
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
                <a href="/about-html5.php">
                <i class="fab fa-html5"></i>
                    <p>#about-html5</p>
                </a>
                <a href="/photos-movies.php">
                <i class="fas fa-images"></i>
                    <p>#photos-movies</p>
                </a>
                <a href="/developer-team.php" class="selected">
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
<h1 style="margin-left: 86px; margin-top: 64px; position: absolute;">tml<span style="font-weight: 100;color: #f99d4a;font-size: 44px;position: absolute;margin-left: 2px;margin-top: -5px;border-right: 2px solid #f198482e;width: 51px;padding: 0px 1px 0px 0px; height: 50px;">5</span></h1>
<h1 style="
    z-index: 92139213912939123;
    position: absolute;
    font-size: 23px;
    margin-left: 212px;
    margin-top: 71px;
    color: #ffffff;
">≡ Ωmega project</h1>
        </header>
        <div id="clearfix"></div>
        <div class="container" style="margin-top: -50px; font-size: 30px; opacity: 0.2;">
        <i class="fas fa-hashtag" style="font-size: 26px;"></i> developer-team  
        </div>
        <section>
	<div class="container">
	
			<div class="row">
			
			

				<div class="col-md-2"style="margin-left: -4px; margin-top: 40px;">
				   <div class="section-topic">
							<div class="side" style="
    border: 3px solid #ffffff0a;
">
								<div class="">
								
								</div>

								<div class="infos">
									<h5 class="mb-md-3 mb-1" style="margin-top: -10px; font-weight: 10;">mrko</h5>

									<div class="avatar pixel xl d-none d-md-block" style="margin-top: -40px;">
										<img src="https://habbo.city/habbo-imaging/avatarimage?figure=hd-208-3.hr-679-61.ha-1016-110.ch-806-73.lg-270-110.sh-305-62&amp;action=std&amp;direction=2&amp;head_direction=3&amp;img_format=png&amp;gesture=sml&amp;headonly=0&amp;size=l" alt="">
									</div>
						
                        <div class="rank" style="background-color: #f37930; margin-top: 40px;">Developer<div class="nv0" style="background: #faa151;"></div></div>
                        <h5 style="position: absolute; font-weight: 10; font-size: 15px; opacity: 0.1; margin-top: -44px; margin-left: 160px;"><i class="fab fa-discord" style="font-size: 13px;"></i> devMrko#1999</h5>

								</div>
							</div>
						</div>
				</div></div>
			


				<div class="col-md-2"style="margin-left: 294px; margin-top: -350px;">
				   <div class="section-topic">
							<div class="side" style="
    border: 3px solid #ffffff0a;
">
								<div class="">
								
								</div>

								<div class="infos">
									<h5 class="mb-md-3 mb-1" style="margin-top: -10px; font-weight: 10;">phi</h5>

									<div class="avatar pixel xl d-none d-md-block" style="margin-top: -40px;">
										<img src="https://habbo.city/habbo-imaging/avatarimage?figure=lg-285-92.ch-245-63.he-990000314-92.hd-205-7.fa-201407-96.sh-905-92.hr-3163-1035&action=std&direction=2&head_direction=3&img_format=png&gesture=sml&headonly=0&size=l" alt="">
									</div>
						
                        <div class="rank" style="background-color: #f37930; margin-top: 40px;">Developer<div class="nv0" style="background: #faa151;"></div></div>
                        <h5 style="position: absolute; font-weight: 10; font-size: 15px; opacity: 0.1; margin-top: -44px; margin-left: 180px;"><i class="fab fa-discord" style="font-size: 13px;"></i> Phi#3640</h5>

								</div>
							</div>
						</div>
				</div>
        
                <div class="col-md-2"style="margin-left: 600px; margin-top: -350px;">
				   <div class="section-topic">
							<div class="side" style="
    border: 3px solid #ffffff0a;
">
								<div class="">
								
								</div>

								<div class="infos">
									<h5 class="mb-md-3 mb-1" style="margin-top: -10px; font-weight: 10;">matchaks</h5>

									<div class="avatar pixel xl d-none d-md-block" style="margin-top: -40px;">
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAADcCAYAAAC4cqlHAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAKI0lEQVR4nO2dP4gUaRrGn9ZhglFEPF1ERlc8uT/BLCYDe2sgCiaCeLCgJ8gZ7MVO4gbLBjLBYrAmGp+Bi+BOICwIJgsOBnccmMgZHHuIeDoMcs7JITqBqHNB72NfvdPffFVdPV3fV+/zy3q6uqoG3uf3vd9X1dWdFaxA+GVD0ycgmkUF4BwVgHNUAM5RAThHBeAcFYBzVADOUQE4RwXgHBWAc1QAzlEBOEcF4BwVgHNUAM5RAThHBeAcFYBzVADOUQE4RwXgHBWAc1QAzlEBOEcF4BwVgHNUAM5RAThHBeAcFYBzVADOUQE4RwXgHBWAc1QAzlEBOEcF4BwVgHNUAM5RAThHBeAcFYBzVADOUQE4Z6zpE2iKDjprPiZ9BSudUZ1Lk8gAznFnACZ/+/btfd8fHx/vbrfY3a7tJpABnNNp6y+GxMb4urTFDDKAc1rTA9jE79q1q/D+2Fi9f/Xt27fF4y0Wj5erEWQA52TbA8QST+om32JNQBYXFwuvczGCDOCc7AzA5IcSbxmVASw0QuomkAGcowJwjgrAOdn0AFXHfsuw1wHKknovIAM4J7uVwDdv3gDoXbUri01wzAiDJp7wPFNHBnBOdgYgZU0QSuKgCR30eKkiAzgn+VlA7A4ewmSGEjgxMVHrPJaXlwc6LllaWgKQ3mxABnBOtj2AxSawbuItdn80Qm5jvkUGcE72Bgh15ZzH2/n+kydPKu1/z549ffcbOm5uRpABnJOtAcquBNrE7927FwDw+PHjwt//dvmLvp//dOZq4XXsWkTZWUEqyADOSXYdwN7zx3WAssnnVbiqiQ9R1QSEJuA6AEllPUAGcE42BqhL1cTHsEaoigwgkiAbA+zYsQMAsGnTJgDA69evC6/rjvGDQhOw1whhz08GEEmQjQGYMCafPH/+HMDoEh8iZgIZQCRJ8gbg2M+kW5pOviU0O7DrETKASILkrwUw+XNff174+6lvbvbdfv7v/yi138Of/HbN9+vuh2b617//CyB8vk0jAzgnWQPYMbLzTbcnsCYgocR+dfWvhdcXv/issL1NsN1P6PN2e7sfm/xUxnyLDOCcZGcBITg7CHX/TOS5Kz8C6K0UEq4jXDl3FEDYAIN+nnA2kGryiQzgnOwMQGImmPrTFQDAgz+fG+pxY/vNJflEBnBOsrOAugw7+eu936aQAZzjtgB+WljCTwtLpf/eVtwWgOiS7SyAxGYDMezVu7r7yaX7JzKAc1o7CyhLavcTjBoZwDluCuDTmasD3cs/6OdywU0BiP5kOwsIfXMoNqZXTXPZ/XG73GYDMoBzspsFMPmHDx8u/H1+fr7U55nU2GrfryfXfipZDGuoVI0gAzgnmx6AiTp58iSA8PcEaALeO/jxR1uHeh72Xj/bI7AHoKGsmVIzgQzgnOQNYMf8nTt3AgDevXsHANi4cSMA4NmzZ4XP2eQNaoTQff226yf2PHleqZpABnBOsgYIJd9S1QSDEku8hef7/v17AMCGDd2s3bhxA4AMIBIhewOQqiYY9ClhNvF2rLfnaQ1AUjGBDOCc5FYCqyafMPk0gU2mTW7ZawIhU8SSnwsygHOSM8CwsUklse6d29MU09PTfd/PNflEBnBO6w1AQsmNvWby7927BwDYvHlz4f3ckQGc48YApKoJyMGDBwH01hNOnz5d6nh2BbDs50aFDOAcdwYgdgyPvWaCq/Lw4cOBPjcqZADntMYA9rp71ZXEGGXH7tQTb5EBnNMaA6xX8mPEEs/fHeQ6QmrIAM7J3gB2vm7/PmwTlE08sb9bOOhsYr2QAZyTvQFi1DVB3cRbQvcWNoUM4JzWG6Bq8oedeM0CRNK03gCxHmC9El92+6aRAZzTegPY5HtPvEUGcE5yBuA3ZTrz3e8H1L2Dhj3Aq1ev+r6/3onXLEAkTXIGsNi185gRXrx4AaB3L97YWPFfHFXiy27fNDKAc5I3wHdf/h4A8KvJXwCovobO+/i3bdsGQIm3yADOSd4AFvtt3X8u/AcA8MdvfwDQSzph969ZQH9kAOdkZ4AYdhbAJ3SMj48DGP0s4ObN/s8TTAUZwDmtM4Bl//79hdejSjz56g/d7xTap4qnggzgnNYZwM4CePWPPYBl2Im3HPhl2s8RkAGc0zoD2FmATf56JX7Lli2F1y9fvgSw+qnifPZwKsgAzmmdASx1rwWUTfzExAQAYHl5ue/29qnjTT8hlMgAzkneALwKWJa61wKGlXhLasknMoBzkjMAnxV87csTA32+6rWAWOKZdGITb9+3pJZ4iwzgnOQMQOr+bh+x1wKqJp7Y3oKvFxYWAACTk5OF97kOkDoygHOSNUBZ7CzBJtUm3iadY7pNPvfDniJErAdIHRnAOckbwF5H5z2ANvm87n7x++JvA4USb4klPmaCXJEBnJOsAZh0C+/+tUY48bvfAAAufv8XAL1vBYfm7bZXsDDxoR6BxPaTOjKAc5IzwIdvB3/bKfygYVkjxGCiyyaX8/ncu/0QMoBzkjMAsWvoMSNwtvDgwQMAwNGjRwGsTm5ovu8VGcA5yRrA8qE3+PlqIcd+fnuYr0OUXdnzhgzgnGwMYOEKH5Nf9omg6zXm0yx8JlHq9wEQGcA52RqA2K5/VNheIrfkExnAOdkboClCv1SSGzKAc2SAktjE2+/68b7/3JABnCMD/Eyoq0/tiR7DRgZwTnYG+HBN4GXx6mBZQtcC7Bg/9/Xna+4nlV/9qosM4JzsDEA+mGCqnAlCYzxh4mPdPJN/584dAMCRI0cAABcuXAAAdGa755PLiqAM4JxsDUDsfQJTU1OlPme7+6rP7mHyczeBDOCc7A1g4Vj+8Udbh7pfjv3Hjh0r/D13E8gAzmmdAaoSms/b2QCTPz09DQA4dOhQ4X1rgkuXLgEArl27BgDonE3TBDKAczorGGhBLRnY/TOht2/fBhBfw4/N52dnZ/H/+7XJ5/ZM+KNHjwD0fhnk+vXrAIAzZ84AAM6fP1/4XComkAGc05oegAmlAco+nz/WxdME3L9N/u7duwEAx48fBwDcv38fQC/5NMGtW7cKx+kcSaMnkAGc05oewCby7t27AHoJttj5PM0RMwFfsxc4cODAmudHI9jt+PemewIZwDnZGoDJJ0z0qVOnAPRMQKwRmPSnT58CAObm5gCsNgHn89zv2bNnC8ezs4OYEYgMIJIg+1mATWIooTb51gjsIbg9k2/n87ZHsHC/+/bt6/u+XS9oGhnAOdn2ACTWC8SMYGcPHMM5RjPRMzMzAIDLly8DWL0iaI9LuF/2GoQm4HmoBxCNkL0BLGWNsF7z+apoJVA0SvazAMuqp4vd7hqB83sagV06u332BhzrLSFDsEcIHT91ZADntK4HiGF7BPYCNAJXBAnNQLidnc/TMDKAyIrW9QAxVvUIs/2NQJh4O5+3K300QG7IAM5x1wPEsD1CWXIb+4kM4BwZwDkygHNUAM5RATjnf77JwCqfWwJbAAAAAElFTkSuQmCC" alt="">
									</div>
						
                        <div class="rank" style="background-color: #f37930; margin-top: 40px;">Developer<div class="nv0" style="background: #faa151;"></div></div>
                        <h5 style="position: absolute; font-weight: 10; font-size: 15px; opacity: 0.1; margin-top: -44px; margin-left: 150px;"><i class="fab fa-discord" style="font-size: 13px;"></i> Matchaks#0333</h5>

								</div>
							</div>
						</div>
                </div>
</div>
<hr style="
    margin-top: 392px;
    margin-left:233px;
    width: 70%;
    background: #2b2b2b;
    border: none;
    height: 1px;
">
<br>
<div class="container" style="margin-top: 420px;">🇹🇷 Bu projeyi geliştiren ekibimiz yukarıda yer almaktadır. Eğer proje hakkında bi sorunuz varsa onlara Discord hesaplarından ulaşabilirsiniz.<br><br>🇺🇸 Our team that developed this project is listed above. If you have any questions about the project, you can reach them on their Discord account.</div>
<div id="leftrightcontent"></div>

</header>
<iframe type="text/html" src="/music.mp3" frameborder="0" allow="autoplay"></iframe>
    </body>
</html>
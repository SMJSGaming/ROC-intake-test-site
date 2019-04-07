<?php
error_reporting(0);
session_start();
?>
<head>
	<title>GD Programming</title>
	<?php if ($_SESSION["css"] != "Disable"){ ?>
	<style>
	<?php if ($_SESSION["adblock"] != "Disable"){ ?>
	/*
		ad blocker for blocking forced ads from the 7m.pl webhost
	*/
	
	html body iframe{
		display: none !important;
		box-sizing: border-box !important;
		margin: 0px !important;
		padding: 0px !important;
		height: 0px !important;
		position: absolute !important;
		align: right !important;
	}
	#ads{
		display: none !important;
		box-sizing: border-box !important;
		margin: 0px !important;
		padding: 0px !important;
		height: 0px !important;
		position: absolute !important;
		align: right !important;
	}
	#ads_bottom_static{
		display: none !important;
		box-sizing: border-box !important;
		margin: 0px !important;
		padding: 0px !important;
		height: 0px !important;
		position: absolute !important;
		align: right !important;
	}
	ins{
		display: none !important;
		box-sizing: border-box !important;
		margin: 0px !important;
		padding: 0px !important;
		height: 0px !important;
		position: absolute !important;
		align: right !important;
	}
	.adsbygoogle{
		display: none !important;
		box-sizing: border-box !important;
		margin: 0px !important;
		padding: 0px !important;
		height: 0px !important;
		position: absolute !important;
		align: right !important;
	}
	<?php } ?>
	
	
	/*
		default body css
	*/
	
	body{
		background-color: #36393e;
		color: #a7a8aa;
		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
		padding: 0px 0px 50px !important;
		text-align: center;
	}
	p{
		text-align: center;
		margin-left: 3%;
		margin-right: 3%;
	}
	hr{
		border: 0;
		clear: both;
		display:block;
		width: 100%;
		background-color:#484C54;
		height: 1px;
	}
	#line{
		float: center;
		width: 90%;
	}
	#mainh{
		text-align: center;
		display: block;
		width: 100%;
		height: 4%;
		margin: auto;
	}
	
	
	/*
		navigation bar
	*/
	
	.li1{
		float: left;
	}
	.li2{
		float: right;
	}
	.navli{
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	#navul{
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #1e2124;
		margin-top: -8px;
		position: relative;
		margin-left: -0.4%;
		margin-right: -0.4%;
	}
	.navli:hover{
		background-color: #0e1114;
	}
	.navhighlight{
		background-color: #2e3134;
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	
	
	/*
		extra
	*/
	
	#button{
		width: 30%;
		background-color: #484C54;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: block;
		font-size: 16px;
		border-radius: 15px;
		margin-left: auto;
		margin-right: auto;
	}
	#button:hover{
		background-color: #383C44;
		transform:scale(1.1,1.1);
		-webkit-transform:scale(1.1,1.1);
		-moz-transform:scale(1.1,1.1);
		-ms-transform:scale(1.1,1.1);
		transition: transform 0.3s ease-in-out;
		-webkit-transition: transform 0.3s ease-in-out;
		-moz-transition:transform 0.3s ease-in-out;
		-ms-transition:transform 0.3s ease-in-out;
	}
	#button:active{
		background-color: #484C54;
		transform:scale(1,1);
		-webkit-transform:scale(1,1);
		-moz-transform:scale(1,1);
		-ms-transform:scale(1,1);
		transition: transform 0.3s ease-in-out;
		-webkit-transition: transform 0.1s ease-in-out;
		-moz-transition:transform 0.1s ease-in-out;
		-ms-transition:transform 0.1s ease-in-out;
	}
	</style>
	<?php } ?>
	<link rel="icon" href="incl/icon/icon.ico" type="image/vnd.microsoft.icon">
</head>
<body>
	<!--
		navigation bar
	-->
	<ul id="navul">
		<li class="li1 navli"><a class="navli" href="Homepage.php">MainPage</a></li>
		<li class="li1 navli"><a class="navli" href="Projects.php">Projects</a></li>
		<li class="li1 navhighlight"><a class="navhighlight" href="Contact.php">Contact</a></li>
		<li class="li2 navli"><a class="navli" href="Misc.php">Misc</a></li>
	</ul>
	<br>
	<h1 id="mainh">CONTACT INFO</h1>
	<br>
	<hr id="line">
	<br>
	<br>
	<a id="button" href="https://www.instagram.com/rs_smjs/" target="_blank">Instagram</a>
	<br>
	<a id="button" href="https://www.youtube.com/channel/UCwEsWDs9kGN2vvoiNTJKdaQ" target="_blank">YouTube Channel</a>
	<br>
	<p>
	Discord Tag: [RS] SMJS#3044
	<br>
	<br>
	Email: smjsgaming@gmail.com or sjoerd.t@live.nl
	<br>
	<br>
	Phone number: +31 6 55550071
	</p>
</body>
<!--
	ad blocker for blocking forced ads from the 7m.pl webhost
-->
<?php if ($_SESSION["js"] != "Disable"){ ?>
<?php if ($_SESSION["adblock"] != "Disable"){ ?>
<script>
	var ads = document.getElementsByTagName("iframe");
	for(var i = 0; i<ads.length; i++){
		ads[i].sandbox = "";
		ads[i].remove();
		ads[i].parentNode.removeChild(ads[i]);
	}
	var ads = document.getElementsByTagName("ins");
	for(var i = 0; i<ads.length; i++){
		ads[i].sandbox = "";
		ads[i].remove();
		ads[i].parentNode.removeChild(ads[i]);
	}
</script>
<?php } ?>
<?php } ?>
<!--
	just don't
-->
<?php
if ($_SESSION["justdont"] == "Just Don't"){ 
?>
	<audio controls loop autoplay hidden>
		<source src="incl/toldya.mp3" type="audio/mpeg">
		Your browser does not support the audio element.
	</audio>
<?php } ?>
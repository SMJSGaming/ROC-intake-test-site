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
		2.2 logo
	*/
	
	#logo1{
		width: 100%;
		border-radius: 20px;
	}
	#imgc{
		width: 40%;
		height: auto;
		display: block;
		margin-left: auto;
		margin-right: auto;
		background-color: #484C54;
		border: 10px solid #484C54;
		border-radius: 15px;
		max-width: 1200px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	
	
	/*
		extra
	*/
	
	#button{
		width: 15%;
		background-color: #484C54;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		border-radius: 15px;
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
		<li class="li1 navhighlight"><a class="navhighlight" href="Projects.php">Projects</a></li>
		<li class="li1 navli"><a class="navli" href="Contact.php">Contact</a></li>
		<li class="li2 navli"><a class="navli" href="Misc.php">Misc</a></li>
	</ul>
	<br>
	<h1 id="mainh">PROJECTS</h1>
	<br>
	<hr id="line">
	<br>
	<h3>GEOMETRY DASH 2.2 UNLOCKED</h3>
	<br>
	<p>Geometry Dash 2.2 Unlocked is a huge collaboration project between server programmers, asset devs, and assembly programmers from the Geometry Dash community. The goal of this project is to recreate the long awaited 2.2 update by taking the pre release of the update and hooking an alternative server and a mod loader to it.</p>
	<br>
	<div id="imgc">
		<img id="logo1" src="incl/projectlogo1.png" alt="the logo" onclick="window.open('https://www.youtube.com/watch?v=EDJmyHsYDSk')">
	</div>
	<br>
	<p id="textli">Extra info</p>
	<br>
	<p>Owner: SMJS (me)</p>
	<p>Update: 2.2.0.7</p>
	<p>Compatibility: Android operating system</p>
	<p>Devs: 8</p>
	<p>Users: 107k</p>
	<a id="button" href="https://www.youtube.com/watch?v=GvjNbuPcJCE" target="_blank">Latest update video</a>
	<br>
	<br>
	<a id="button" href="https://discord.gg/x2gXAWV" target="_blank">Discord support server</a>
	<br>
	<br>
	<br>
	<hr id="line">
	<br>
	<h3>MORE COMING SOON</h3>
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
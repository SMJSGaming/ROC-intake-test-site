<?php
error_reporting(0);
session_start();
if ($_POST["justdont"] == "Disable" OR $_POST["justdont"] == "Just Don't"){
	$_SESSION["justdont"] = $_POST["justdont"];
}
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
		image slight show galary
	*/
	
	#maini{
		width: 100%;
		border-radius: 15px;
	}
	#imgc{
		width: 80%;
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
	#imgc2{
		margin-left: auto;
		margin-right: auto;
		width: 100%;
		height: auto;
		display: block;
		text-align: center;
	}
	#next{
		margin-top: 1%;
		max-width: 100px;
	}
	#back{
		margin-top: 1%;
		max-width: 100px;
	}
	
	
	/*
		slideshow button animation
	*/
	
	#next:hover{
		transform:scale(1.1,1.1);
		-webkit-transform:scale(1.1,1.1);
		-moz-transform:scale(1.1,1.1);
		-ms-transform:scale(1.1,1.1);
		transition: transform 0.1s ease-in-out;
		-webkit-transition: transform 0.1s ease-in-out;
		-moz-transition:transform 0.1s ease-in-out;
		-ms-transition:transform 0.1s ease-in-out;
	}
	#back:hover{
		transform:scale(1.1,1.1);
		-webkit-transform:scale(1.1,1.1);
		-moz-transform:scale(1.1,1.1);
		-ms-transform:scale(1.1,1.1);
		transition: transform 0.3s ease-in-out;
		-webkit-transition: transform 0.3s ease-in-out;
		-moz-transition:transform 0.3s ease-in-out;
		-ms-transition:transform 0.3s ease-in-out;
	}
	#next:active{
		transform:scale(1,1);
		-webkit-transform:scale(1,1);
		-moz-transform:scale(1,1);
		-ms-transform:scale(1,1);
		transition: transform 0.3s ease-in-out;
		-webkit-transition: transform 0.1s ease-in-out;
		-moz-transition:transform 0.1s ease-in-out;
		-ms-transition:transform 0.1s ease-in-out;
	}
	#back:active{
		transform:scale(1,1);
		-webkit-transform:scale(1,1);
		-moz-transform:scale(1,1);
		-ms-transform:scale(1,1);
		transition: transform 0.1s ease-in-out;
		-webkit-transition: transform 0.1s ease-in-out;
		-moz-transition:transform 0.1s ease-in-out;
		-ms-transition:transform 0.1s ease-in-out;
	}
	</style>
	<?php } ?>
	<?php if ($_SESSION["js"] != "Disable"){ ?>
	<script>
		var image = "1";
		function back(){
			switch(image) {
				case "1":
					image = "3";
					document.getElementById("maini").src = "incl/picture3.png";
					break;
				case "2":
					image = "1";
					document.getElementById("maini").src = "incl/picture1.png";
					break;
				case "3":
					image = "2";
					document.getElementById("maini").src = "incl/picture2.png";
					break;
				default:
					break;
			}
		}
		function next(){
			switch(image) {
				case "1":
					image = "2";
					document.getElementById("maini").src = "incl/picture2.png";
					break;
				case "2":
					image = "3";
					document.getElementById("maini").src = "incl/picture3.png";
					break;
				case "3":
					image = "1";
					document.getElementById("maini").src = "incl/picture1.png";
					break;
				default:
					break;
			}
		}
	</script>
	<?php } ?>
	<link rel="icon" href="incl/icon/icon.ico" type="image/vnd.microsoft.icon">
</head>
<body>
	<!--
		navigation bar
	-->
	<ul id="navul">
		<li class="li1 navhighlight"><a class="navhighlight" href="Homepage.php">MainPage</a></li>
		<li class="li1 navli"><a class="navli" href="Projects.php">Projects</a></li>
		<li class="li1 navli"><a class="navli" href="Contact.php">Contact</a></li>
		<li class="li2 navli"><a class="navli" href="Misc.php">Misc</a></li>
	</ul>
	<br>
	<h1 id="mainh">GEOMETRY DASH PROGRAMMING</h1>
	<br>
	<hr id="line">
	<br>
	<br>
	<p>This page is made so Geometry Dash programmers can work together and share their work to the community more easily and more reliable.</p>
	<br>
	<!--
		image slight show galary
	-->
	<div id="imgc">
		<img id="maini" src="incl/picture1.png" alt="Some Geometry Dash pictures regarding programming" onclick="next()">
		<div id="imgc2">
			<img id="back" src="incl/back.png" alt="back" onclick="back()">
			<img id="next" src="incl/next.png" alt="next" onclick="next()">
		</div>
	</div>
	<br>
	<hr id="line">
	<br>
	<p>Make sure to visit the Contact page for any questions regarding the website and/or the projects.</p>
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
	<?php if ($_SESSION["js"] != "Disable"){ ?>
	<script>
		var i = 1;    
		function myLoop () {    
			setTimeout(function () { 
				next();  
				i++;  
				if (true) {   
					myLoop();        
				}
			}, 10)
		}
		myLoop(); 
	</script>
	<?php } ?>
<?php } ?>
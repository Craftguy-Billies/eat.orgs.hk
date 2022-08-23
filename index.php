<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<title>Craftguy&trade; Eats</title>
	<style>
		
		body{
			background-color: #fff;
		}
		
.only-words{
	text-align:center;
	font-size:3vw;
	text-decoration:underline;
	font-weight: 550;
	color: #000;
		}

		holin{
			font-size:3.5vw;
		}

		.holinization{
			font-size: 4.5vw;
		}

		.holiner{
			color: blue;
		}

		.design{
			font-size:30px;
			text-align:center;
			animation-name:hoi;
			animation-iteration-count:infinite;
			animation-fill-mode:both;
			animation-duration:3s;
		}

		@keyframes hoi{
			0%{
				color:blue;
			}
			50%{
				color:red;
			}
			100%{
				color:blue;
			}
		}

		.border{
			width:100%;
			height:200px;
			border:1.2px solid #000;
		}

		.cross{
			float:right;
			font-size:25px;
		}

	</style>
</head>

<body onload="holinization()">
	<div class="only-words">
<holin>Powered by Craftguy&trade;. Official website: <a>https://craftguy.eu.org</a></holin>
	</div>

	<form method="post">
		<div class="words">Type a number between 1-10:<input type="text" name="submitting"><input type="submit"></div>
	</form>

	<div class="border">
		<div class="cross" id="trial">X</div>
	</div>

	<script type="text/javascript" lang="javascript">

		var y = document.getElementById("trial");
		y.addEventListener("click",close);

		console.log(y);

		function close(){
			var x = document.getElementsByClassName("border")[0];
			x.style.display = 'none';
			console.log("done");
		}

	</script>

	<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_REQUEST['submitting'];
		if (empty($name)){
			echo 'You didn\'t type in any numbers!';
		}
		elseif($name<=0 || $name>10){
			echo 'Please type a valid number!';
		}
		elseif ($name == 2){
			echo 'Bingo!';
			echo '<div class="design" onmouseover="holiner()" onmouseout="revholiner()">I love u! :)</div>';
		}
		else{
			echo 'Try again!';
		}
	}

	?>

	<script type="text/javascript" lang="javascript">

		function holinization(){
		document.getElementsByTagName("a")[0].setAttribute("class","holiner")
		}

		function holiner(){
			document.getElementsByClassName("design")[0].style.fontSize = "45px";
		}

		function  revholiner(){
			document.getElementsByClassName("design")[0].style.fontSize = "30px";
		}

	</script>


</body>
</html>

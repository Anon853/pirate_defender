<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>TEST</title>
</head>
<body>

<br>
<br>
<br>
<!-- TOP NAV-->
	<nav id="nav1">
		<ul>
			<li>Resources</li>
			<li id="resource_wood">0</li>
			<li><img src="images/wood_icon.jpg"></li>
			<li id="resource_stone">0</td></li>
			<li><img src="images/stone_icon.jpg"></td></li>
			<li id="resource_iron">0</li>
			<li><img src="images/metal_icon.jpg"></li>
		</ul>
	</nav>


<!-- BUILDINGS-->
<div id="buildingsNav">
	<nav id="buildings">
		<ul>
			<li>Buildings</li>
			<li><img id="woodCutter_icon" src="images/woodcutter_icon.jpg"></li>
			<li><p id="woodPara">0</p></li>
			<li><img id="stoneCutter_icon" src="images/stonecutter_icon.jpg"></li>
			<li><p id="stonePara">0</p></li>
			<li><img id="ironSmelter_icon" src="images/smelter_
			icon.jpg"></li>
			<li><p id="ironPara">0</p></li>
		</ul>
	</nav>
</div>

<!--MAIN MENU RIGHT -->
<div id="menu">
	<ul>
		<li>Buildings</li>
		<li>Resources</li>
		<li>Facilities</li>
		<li>Research</li>
		<li>Defence</li>
		<li>Map</li>
		<li>Shipyard</li>
		<li>Fleet</li>
	</ul>
</div>


<script src="game_logic.js">
</script>	


<?php
include 'query.php';
?> 

</body>
</html>
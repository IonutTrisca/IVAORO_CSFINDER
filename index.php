<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width = device-width, initial-scale = 1"/>
		<title>Callsign Finder</title>
		<link href="./mainStyle.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="./favicon.png">
	</head>

	<body>
		<nav class="top_menu">
			<div class="textlogo">
				<h1><a href="./index.php">Callsign Finder</a></h1>
			</div>
		</nav>

		<form action="./search.php" method="get">
			<input placeholder="ICAO or IATA Code" type="text" name="code" class="code" autocomplete="off">
			<button class="sub_button">Search</button>
		</form>

		<img class="logo" src="https://ivao.aero/images/svg_logos/ro.svg"/>

		<footer>
			<big class="padded">
				&copy; Copyright <script>document.write(new Date().getFullYear())</script>,
				<a href="https://ro.ivao.aero" target="_blank"> IVAO Romania</a>
			</big>
		</footer>
	</body>
</html>

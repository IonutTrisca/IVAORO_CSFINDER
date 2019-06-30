<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width = device-width, initial-scale = 1"/>
		<title>Airline Callsign Finder</title>
		<link href="./mainStyle.css" rel="stylesheet" type="text/css">
		<link rel="icon" href="https://i.imgur.com/73BPpQi.png">
	</head>

	<body>
		<nav class="top_menu">
			<div class="textlogo">
				<h1><a href="index.php">Callsign Finder</a></h1>
			</div>
		</nav>

		<?php

		require_once 'connection.php'; //connect to database

		$found = 0; //var that checks if the code was found

		if (isset($_GET['code'])) {

			//get the code from the url
			$code = $dbc -> escape_string($_GET['code']);

			//check code empty
			if($code != '') {

				//interrogate database
				$query = $dbc -> query("
					SELECT callsign, airline FROM airlines
					WHERE icao like UPPER('{$code}')
				");

				//check if the code was found
				if ($query->num_rows) {
					$r = $query->fetch_object();
					$found = 1;
				}
			}
		}

		//display result
		if($found) { ?>
			<center>
				<div class="resdiv">
					<p class="result">
						<b>Callsign:</b> <?php echo $r->callsign?><br><br>
						<b>Airline:</b> <?php echo $r->airline?> <br><br>
						<b>Code:</b> "<?php echo strtoupper($code) ?>"
					</p>
				</div>
			</center>

		<?php
		} else { ?>
			<center>
				<div class="resdiv">
					<p class="result">Code not found.</p>
				</div>
			</center>
		<?php
		}
		?>

		<br>
		<a href="index.php" ><button class="sub_button">Back</button></a>
		<br>

		<a href="https://ro.ivao.aero/" target="_blank"><img class="logo" src="https://ivao.aero/images/svg_logos/ro.svg"/></a>

		<footer>
			<big class="padded">
				&copy; Copyright <script>document.write(new Date().getFullYear())</script>,
				<a href="https://ro.ivao.aero" target="_blank"> IVAO Romania</a>
			</big>
		</footer>
	</body>
</html>

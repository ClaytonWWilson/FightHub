<html>
<head>
    <title>FightHub - Upload</title>
    <link rel="stylesheet" href="main.css">
    <script src="scripts/main.js"></script>
</head>

<body>
	<?php
	$servername = "localhost";
	$username = "fighthubuser";
	$password = "cC33dC8W";

	$conn = new mysqli($servername, $username, $password);

	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$url = $_GET['url'];
	$name = $_GET['name'];
	$username = $_GET['username'];
	$description = $_GET['description'];
	$event_date = $_GET['date'];
	$length = $_GET['length'];
	$characters = $_GET['characters'];
	$players = $_GET['players'];
	$game = $_GET['game'];
	$stage = $_GET['stage'];
	echo"<h2>hello</h2>";	
	echo $game;
	?>
</body>
</html>

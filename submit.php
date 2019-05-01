<?php
$servername = "localhost";
$username = "fighthubuser";
$password = "cC33dC8W";
$database = "fighthubdata";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
	//echo "it dead<br>i";
	die("Connection failed: " . $conn->connect_error);
}

$url = $_GET['url'];
$title = $_GET['title'];
$username = $_GET['username'];
$description = $_GET['description'];
$event_date = $_GET['video-date'];
$length = $_GET['length'];
$characters = $_GET['characters'];
$players = $_GET['players'];
$game = $_GET['game'];
$stage = $_GET['stage'];
$date = date('Y\-m\-d');
//echo "here<br>";

$url = mysqli_real_escape_string($conn, $url);
//echo "done<br>";
$title = mysqli_real_escape_string($conn, $title);
$username = mysqli_real_escape_string($conn, $username);
$description = mysqli_real_escape_string($conn, $description);
$event_date = mysqli_real_escape_string($conn, $event_date);
$length = mysqli_real_escape_string($conn, $length);
$characters = mysqli_real_escape_string($conn, $characters);
$players = mysqli_real_escape_string($conn, $players);
$game = mysqli_real_escape_string($conn, $game);
$stage = mysqli_real_escape_string($conn, $stage);
$date = mysqli_real_escape_string($conn, $date);
//echo "there boi<br>";
//echo "<script type='text/javascript'>alert('".$stage."');</script>";

$sql = "INSERT INTO video (video_url, video_name, username, date_upload, date_video, video_length, description, characters, players, game, stage, approved) VALUES ('$url', '$title', '$username', '$date', '$event_date', '$length', '$description', '$characters', '$players', '$game', '$stage', TRUE)";

//echo "<script type='text/javascript'>alert($sql);</script>";
//echo $sql;

if($conn->query($sql) === TRUE){
	echo "New record created successfully";
}
else {
	echo "Error";
	echo  $conn->error;
}
$conn->close()

//echo "<script type='text/javascript'>window.location.href = 'index.php';</script>"

//header("Location: http://ec2-18-217-5-198.us-east-2.compute.amazonaws.com/index.php");

//exit;
?>

<script>
	location.replace("http://ec2-13-58-8-152.us-east-2.compute.amazonaws.com/index.php");
</script>


<html lang="en">
<head>
    <title>FightHub - Search</title>
    <link rel="stylesheet" href="main.css">
</head>
	<body>
    	<!-- Titlebar -->
    	<form class="search" action="search.php">
        	<a href="/"><h1 class="title-text">FightHub</h1></a>
        	<input type="text" name="query" class="search" placeholder="Search..">
        	<input type="submit" name="submit" class="submit" value="Search">
        	<a href="upload.php"><img src="images/upload.png" class="upload" alt="upload"></a>
		</form>
	
	<!-- code for connecting to mysql -->
	
	<?php
function writeEntryforIndex() {

	$servername = "localhost";
    	$username = "fighthubuser";
    	$password = "cC33dC8W";
	$database = "fighthubdata";

	 // Create MySQL connection
	 $conn = mysqli_connect($servername, $username, $password, "fighthubdata");
	
	 // Check connection - if it fails, output will include the error message
	if (!$conn) {
		echo 'death';	
	 	die('<p>Connection failed: <p>' . mysql_error());
	 }
	 
	 //echo '<font color="#FF3D5"><p>Connect1ed successfully</p></font>';

	// $sql = 'SELECT video_id, video_url, video_name, username, date_upload, date_video, video_length, description, characters, players, game, stage, approved FROM video';
		
	 //$sql = 'select * from video';
  	// mysqli_select_db('fighthubdata');
	 //echo 'hello'; 	 
	 $search = $_GET['query'];
	 //echo $search;

	 $retval = mysqli_query( $conn, "select * from video where characters like '%$search%' OR players like '%$search%' OR description like '%$search%' OR game like '%$search%'  OR stage like '%$search%' OR video_name like '%$search%'");
	//echo 'test';	
	 if(!$retval ) {
		 //echo '<p>death</p>'
		 die('Could not get data: ' . mysqli_error()); 
		 
	 }
	 //echo '<font color="blue">not death</font>';
	
	 
	// $i = 9;
	echo "<div class=\"video-list-container\"> ";
	 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

	//	 if($i > 9){
	//		break;
	//	 }
		
		 //Format for video_url
		 //Get substring from url after '='
		 $split = explode("=", $row['video_url']);
		 $splitChar = explode(",", $row['characters']);
	 	 $splitPlay = explode(",", $row['players']);	 
	

		 
		 echo	"<!-- Entry 1 -->" . 
			"<div id=\"video-item\">" .
				"<iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/$split[1]\" frameborder=\"0\"" .
					"allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"" .
					"allowfullscreen>" .
				"</iframe>" .
		

				"<a href=\"{$row['video_url']}\">{$row['video_name']}</a>" .


		
		"<div id=\"players-characters\">" .
			"<table>" .
		        	"<tr>" .
			        	"<td class=\"header\">Players</td>" .
				        "<td class=\"header\">Characters</td>" .
				"</tr>" .

				
				"<tr>" .
		                	"<td class=\"data\" id=\"table-border\">$splitPlay[0]</td>" .
					"<td class=\"data\" id=\"table-border\">$splitChar[0]</td>" .
				"</tr>" .


		
				"<tr>" .
					"<td class=\"data\" id=\"table-border\">$splitPlay[1]</td>" .
				        "<td class=\"data\" id=\"table-border\">$splitChar[1]</td>" .
				"</tr>" .


			"</table>" .
		"</div>" .

	
		
		"<div id=\"game-stage\">" .
	              	"<p>{$row['game']}</p>" .
		      	"<p>{$row['stage']}</p>" .
		"</div>" .		

		
		"<div id=\"description\">" .
		        "<p>{$row['description']}</p>".
		"</div>" .

	
	"</div> ";
 			
		/*
		echo "<font color='#FF3D53'> VIDEO ID :{$row['video_id']}  <br> ".
		"VIDEO URL : {$row['video_url']} <br> ".
		"VIDEO NAME : {$row['video_name']} <br> ".
		"USERNAME : {$row['username']} <br> ".
		"DATE UPLOAD : {$row['date_upload']} <br> ".
		"DATE VIDEO : {$row['date_video']} <br> ".
		"VIDEO LENGTH : {$row['video_length']} <br> ".
		"DESCRIPTION : {$row['description']} <br> ".
		"CHARACTERS : {$row['characters']} <br> ".
		"PLAYERS : {$row['players']} <br> ".
		"GAME : {$row['game']} <br> ".
		"STAGE : {$row['stage']} <br> ".
		"APPROVED : {$row['approved']} <br> ".
		"--------------------------------<br></font>";


		 echo "<font color='#FF3D53'>Fetched data successfully\n</font>";

		 */ 
		mysqli_close($conn);
		$i++;
	 }
	 echo "</div>";
}
		
	writeEntryforIndex();
	
	
	//<!-- This is where php code for loading preview videos below the titlebar will go -->


	?>

	</body>
</html>

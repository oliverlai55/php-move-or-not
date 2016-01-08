<?php

include('inc/db_connect.php');

//     Select statement ... get a random match from
//     basketball.
//     Check to see if they have voted on it.
//     If they have, get a different one (go back to 
//         step one).
//     If they haven't use it.

//     Once they click on the vote button, we need to 
//     make an AJAX call, to update the database...
//     INSERT statement ... that will add their voteto the 
//     vote table. We will need the MID and the team.

//     We will need to set a session variable for that game

//     We then need to make an AJAX call to get all votes
//     for that MID, do the math. Replace the content in that
//     div.

// 	Next button... start over.

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="title col-sm-12">
				<h2>Win or Not</h2>
			</div>
		</div>
		<div class="row">
			<div class="images col-sm-12">
				<div class="col-sm-2"></div>
				<img class="img1 col-sm-4" src="img/Duke-Blue-Devils.jpg">
				<img class="img2 col-sm-4" src="img/uk-wildcats.png">
				<div class="col-sm-2"></div>
			</div>
		</div>
		<div class="row">
			<div id="btn1" class="btn btn-primary">Vote
			</div>
			<div id="btn2" class="btn btn-primary">Vote
			</div>
		</div>
		<div class="row">
		<div id="poll-btn" class="btn btn-success">Poll Results</div>
		</div>
		
	</div>
</body>
</html>
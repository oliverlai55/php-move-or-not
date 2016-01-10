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

	$query = "SELECT * FROM basketball";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
		$rows[] = $row;
	}
	$rand = rand ( 0, count($rows)-1 );
// print "<pre>";
// print_r($rand);
// print_r($rows); 
	$match_id = $rows[$rand]['id'];
	$team1 = $rows[$rand]['team1'];
	$team2 = $rows[$rand]['team2'];
	$team_pic1 = $rows[$rand]['team1_pic'];
	$team_pic2 = $rows[$rand]['team2_pic'];

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
				<img class="img1 col-sm-4" src=<?php print $team_pic1; ?>>
				<img class="img2 col-sm-4" src=<?php print $team_pic2; ?>>
				<div class="col-sm-2"></div>
			</div>
		</div>
		<div class="row">
			<div class="teamnames col-sm-12">
				<div class="col-sm-2"></div>
				<div class="team1 col-sm-4"><?php print $team1; ?></div>
				<div class="team2 col-sm-4"><?php print $team2; ?></div>
				<div class="col-sm-2"></div>
			</div>
		</div>
		<div class="row">
			<div id="btn1" class="btn btn-primary" mid="<?php print $match_id; ?>" team="<?php print $team1; ?>" opp="<?php print $team2; ?>">Vote
			</div>
			<div id="btn2" class="btn btn-primary" mid="<?php print $match_id; ?>" team="<?php print $team2; ?>" opp="<?php print $team1; ?>">Vote
			</div>
		</div>
		<div class="row">
			<a id="next-vote" class="btn btn-success" href="/php-poll/">Next</a>
			
		</div>
		
	</div>
</body>
</html>
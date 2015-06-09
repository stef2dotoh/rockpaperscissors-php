<?php
	require_once('inc/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 /">
    <meta name="description" content="Simple rock, paper, scissors game." />
    <meta name="keywords" content="rock, paper, scissors, game" />
	<title>Rock, Paper, Scissors</title>
	<link rel="stylesheet" type="text/css" href="inc/styles.css">
</head>

<body>
	<div class="container">
		<h1 class="title">Rock, Paper, Scissors</h1>
		<div class="main_content">
			<h2 id="header">Make your choice!</h2>
			<form id="game_board" action="index.php" method="POST">
				<div class="tokens">
					<input type="image" src="img/rock.png" id="rock" name="choice" value="rock">
					<input type="image" src="img/paper.png" id="paper" name="choice" value="paper">
					<input type="image" src="img/scissors.png" id="scissors" name="choice" value="scissors"></div>
				</div><!-- End tokens -->
			</form>
			
		</div> <!-- End main_content -->
	</div><!-- End container -->
</body>
</html>

<?php
	if (isset($_POST['choice']))
		compareChoice(); // Compare choicess and display results and scores
?>
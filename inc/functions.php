<?php
	session_start(); 

	function getComputerChoice() 
	{
		// Generate random number
		$randNum = rand(1, 3);

		// Translate number to choice
		if ($randNum == 1)
			return "rock";
		else if ($randNum == 2)
			return "paper";
		else
			return "scissors";
	}

	// Compare user choice to computer choice
	function compareChoice() 
	{
		// Get computer choice
		$computerChoice = getComputerChoice();

		// Get user's selection
		$userChoice = $_POST['choice'];


		if ($userChoice == "rock") 
		{
			switch ($computerChoice) 
			{
				case "rock":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. It's a tie!</p>
				<?php
					break;
				case "paper":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. Paper covers rock.  You lose!</p>
				<?php
					break;
				case "scissors":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. Rock smashes scissors.  You win!</p>
				<?php
					break;
			}
		}

		else if ($userChoice == "paper") 
		{
			switch ($computerChoice) 
			{
				case "rock":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. Paper covers rock.  You win!</p>
				<?php
					break;
				case "paper":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. It's a tie!</p>
				<?php
					break;
				case "scissors":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. Scissors cut paper.  You lose!</p>
				<?php
					break;
			}
		}

		else
		{
			switch ($computerChoice) 
			{
				case "rock":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. Rock smashes scissors.  You lose!</p>
				<?php
					break;
				case "paper":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. Scissors cut paper.  You win!</p>
				<?php
					break;
				case "scissors":
				?>
					<p class="results">The computer chose <?php echo $computerChoice; ?>. It's a tie!</p>
				<?php
					break;
			}
		}
	}
?>
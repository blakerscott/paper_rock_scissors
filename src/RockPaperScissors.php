<?php
	 class RockPaperScissors
		{

			function playGame($first_input, $second_input){

			if ($first_input == "rock" && $second_input == "scissors" || $first_input == "paper" && $second_input == "rock" || $first_input == "scissors" && $second_input == "paper")
			{
					return "Player 1";
			}
			elseif ($first_input == "rock" && $second_input == "paper" || $first_input == "paper" && $second_input == "scissors" || $first_input == "scissors" && $second_input == "rock")
			{
					return "Player 2";
			}
			else
			{
					return "Nobody :(";
			}

		}
	}
 ?>

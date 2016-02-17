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

			function playComputer($human_input){
				$options = array("rock","paper","scissors");
				$computer_input = array_rand($options);

				if ($human_input == "rock" && $computer_input == 2 || $human_input == "paper" && $computer_input == 0 || $human_input == "scissors" && $computer_input == 1)
				{
						return "Your $human_input wins! The computer played $options[$computer_input], like a fool.";
				}
				elseif ($human_input == "rock" && $computer_input == 1 || $human_input == "paper" && $computer_input == 2 || $human_input == "scissors" && $computer_input == 0)
				{

						return "Computer's $options[$computer_input] wins; it bested your $human_input. Better luck next time...";
				}
				else
				{
						return "Nobody wins, because the computer also played $options[$computer_input]";
				}
			}

	}
 ?>

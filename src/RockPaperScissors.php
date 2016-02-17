<?php
	 class RockPaperScissors
		{

			function playGame($first_input, $second_input){

			if ($first_input == "rock" && $second_input == "scissors")
			{
					return "Player 1";
			}
			elseif ($first_input == "rock" && $second_input == "paper")
			{
					return "Player 2";
			}
			elseif ($first_input == "paper" && $second_input == "rock")
			{
					return "Player 1";
			}
			elseif ($first_input == "paper" && $second_input == "scissors")
			{
					return "Player 2";
			}
			elseif ($first_input == "scissors" && $second_input == "rock")
			{
					return "Player 2";
			}
			elseif ($first_input == "scissors" && $second_input == "paper")
			{
					return "Player 1";
			}
			elseif ($first_input == "rock" && $second_input == "rock")
			{
					return "Draw";
			}
			elseif ($first_input == "scissors" && $second_input == "scissors")
			{
					return "Draw";
			}
			elseif ($first_input == "paper" && $second_input == "paper")
			{
					return "Draw";
			}

		}
	}
 ?>

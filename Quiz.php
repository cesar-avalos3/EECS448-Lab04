<?php 
	$score = 0;
	
	$correct = 0;

	$answerq1 = $_POST["answerq1"];
	$answerq2 = $_POST["answerq2"];
	$answerq3 = $_POST["answerq3"];
	$answerq4 = $_POST["answerq4"];
	$answerq5 = $_POST["answerq5"];

	if(isset($answerq1) && $answerq1 == "Buenos Aires")
	{ 
		$score++;
		$correct = 1;
	}
			echo "Question 1: What is the capital city of Argentina?</br>";
			echo "You answered: " . $answerq1 ."</br>";
		if($correct == 1)
		{
			echo "THIS IS CORRECT!1!1!!!! </br>";
		}
		else
		{
			echo "HORRRIBELE WRONG!11!@3213 </br>";
			echo "The actual answer is Buenos Aires</b>";
		}
		$correct = 0;
		echo "</br></br>";

	if(isset($answerq2) && $answerq2 == "Paris")
	{
		$score++;
		$correct = 1;
	}
	echo "Question 2: What is the capital city of Tahiti?</br>";
		echo "You answered:". $answerq2 ."</br>";
		if($correct == 1)
		{
			echo "THIS IS CORRECT!1!1!!!! </br>";
		}
		else
		{
			echo "HORRRIBELE WRONG!11!@3213 </br>";
			echo "The actual answer is Paris, this technically an overseas territory </b>";
		}
		$correct = 0;
		echo "</br></br>";

	if(isset($answerq3) && $answerq3 == "Porto Novo")
	{
		$score++;
		$correct = 1;
	}
		echo "Question 3: What is the capital city of Benin></br>";
		echo "You answered:". $answerq3 ."</br>";
		if($correct == 1)
		{
			echo "THIS IS CORRECT!1!1!!!! </br>";
		}
		else
		{
			echo "HORRRIBELE WRONG!11!@3213 </br>";
			echo "The actual answer is Paris, this technically an overseas territory </b>";
		}
		$correct = 0;
		echo "</br></br>";

	if(isset($answerq4) && $answerq4 == "Tbilis")
	{
		$score++;
		$correct = 1;
	}
		echo "Question 4: What is the capital city of Georgia?</br>";
		echo "You answered:" . $answerq4."</br>";
		if($correct == 1)
		{
			echo "THIS IS CORRECT!1!1!!!! </br>";
		}
		else
		{
			echo "HORRRIBELE WRONG!11!@3213 </br>";
			echo "The actual answer is Tbilis, the country not the states </b>";
		}
		$correct = 0;
		echo "</br></br>";

	if(isset($answerq5) && $answerq5 == "Atlanta")
	{	
		$score++;
		$correct = 1;
	}
		echo "Question 5: What is the capital city of Georgia?</br>";
		echo "You answered:" . $answerq4 ."</br>";
		if($correct == 1)
		{
			echo "THIS IS CORRECT!1!1!!!! </br>";
		}
		else
		{
			echo "HORRRIBELE WRONG!11!@3213 </br>";
			echo "The actual answer is Atlanta, now this is the state </b>";
		}
		$correct = 0;

		echo "</br></br>";

	echo "The final tally is " .($score / 5) * 100 . "%";

 ?>
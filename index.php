

<!DOCTYPE html>

<html>

	<head>

		<title>Josemari Feliciano</title>

		<meta charset="utf-8">

		<link href='css/css.css' rel='stylesheet'>

	</head>


	<body>

	<div class="container">

		<h1>Josemari Feliciano</h1>

		<img src='images/cat.jpg' alt='Photo of Josemari with his cat'>

		<h2>About Me:</h2>
		<p>
			Instead of the typical self-introduction, I will let our president speak for me:  "I, the greatest, President Donald J. Trump. Believe me, I've been in some of the best HTML pages. And trust me, this HTML page is the best! Josemari is just fantastic - bigly talented! The others? They're lightweight like Jeb!
		</p>

		<h2>Random Quote:</h2>
		
		<?php // my code works by shuffling then picking the last index of the array
		$zeldaQuote = "\"HYAHHHHHHH!!!!!!\"\n\n-Link, Legend of Zelda";
		$catQuote = "\"I hate my human.\"\n\n-My cat";
		$gotQuote = "\"I am Daenerys Stormborn of House Targaryen, the Unburnt, Mother of Dragons, khaleesi to Drogo's riders, and queen of the Seven Kingdoms of Westeros.\"\n\n-Future Queen of Westeros";

		$quotesArray = array($zeldaQuote, $catQuote, $gotQuote);
		shuffle($quotesArray);
		echo $quotesArray[2];
		?> 


	</div>

	

	</body>
	
</html>
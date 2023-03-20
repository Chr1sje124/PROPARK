<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <?php include "nav.php" ?>

  <h1>Welkom bij de quiz!</h1>

	<!--Vragen plus opties opzetten.-->
  <form action="quiz.php" method="post">
		<p>1. Heb je moeite om je te concentreren?</p>
		<input type="radio" name="question1" value="a"> Ja<br>
		<input type="radio" name="question1" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>2. Ben je vaak vergeetachtig?</p>
		<input type="radio" name="question2" value="a"> Ja<br>
		<input type="radio" name="question2" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>3. Ben je impulsief?</p>
		<input type="radio" name="question3" value="a"> Ja<br>
		<input type="radio" name="question3" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>4. Heb je moeite om taken af te maken?</p>
		<input type="radio" name="question4" value="a"> Ja<br>
		<input type="radio" name="question4" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>5. Ben je snel afgeleid?</p>
		<input type="radio" name="question5" value="a"> Ja<br>
		<input type="radio" name="question5" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>6. Ben je rusteloos of hyperactief?</p>
		<input type="radio" name="question6" value="a"> Ja<br>
		<input type="radio" name="question6" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>7. Heb je moeite om stil te zitten?</p>
		<input type="radio" name="question7" value="a"> Ja<br>
		<input type="radio" name="question7" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>8. Ben je vaak ongeorganiseerd?</p>
		<input type="radio" name="question8" value="a"> Ja<br>
		<input type="radio" name="question8" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>9. Heb je vaak problemen om een complexe taak goed te organiseren?</p>
		<input type="radio" name="question9" value="a"> Ja<br>
		<input type="radio" name="question9" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<p>10. Ben je vaak ongeduldig?</p>
		<input type="radio" name="question10" value="a"> Ja<br>
		<input type="radio" name="question10" value="b"> Nee<br>
		<input type="radio" name="question1" value="c"> Soms<br>
		<br>
		<label>
   			<input type="checkbox" name="email" value="yes">
    		Ik wil mijn score per e-mail ontvangen
		</label>
		<br>
		<label for="email">E-mailadres:</label>
		<input type="email" name="email" id="email">
		<br><br>
		<input type="submit" value="Bereken Score">
	</form>

  <?php include "footer.php" ?>
  
</body>

</html>
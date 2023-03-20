<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<?php
// Definieer de vragen en antwoorden.
$questions = array(
	"question1" => "a",
	"question2" => "a",
	"question3" => "a",
	"question4" => "a",
	"question5" => "a",
	"question6" => "a",
	"question7" => "a",
	"question8" => "a",
	"question9" => "a",
	"question10" => "a"
);

$score = 0;

// Verwerk de antwoorden en bereken de score.
foreach ($questions as $question => $answer) {
	if (isset($_POST[$question]) && $_POST[$question] == $answer) {
		$score += 5;
	}
}

// Sla de score op in de database / Verbinden met de database.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adhdquiz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO scores (score) VALUES ('$score')";

if ($conn->query($sql) === FALSE) {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// if (isset($_POST["email"])) {
// 	$email = $_POST["email"];
// }

// // Stuur de score via e-mail, als de gebruiker dat wil.
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 	echo "Het opgegeven e-mailadres is ongeldig.";
//   } else {
// 	$subject = "ADHD Quiz Score";
// 	$message = "Je score voor de ADHD Quiz is: $score";

// 	mail($email, $subject, $message);
// }

// Toon de score aan de gebruiker
include "nav.php";
echo "<h1>Uw score is: " . $score . "</h1>";
include "footer.php"
?>
</body>
</html>

<html>
<head>
<title>Match Details Entry</title>
</head>
<body>
	


<?php
include 'connect.php'; 

$playerName = $_POST['playerName'];


$playerName = mysql_real_escape_string($playerName);


mysqli_query ($conn, "INSERT INTO players(playerName) VALUES ('$playerName'); ");
$id = mysqli_insert_id($conn);
echo '<br/>';
?>
entry succesful
</br>
</body>
</html>
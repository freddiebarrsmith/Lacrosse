<html>
<?php
?>
<head>
<title>Roster Data Entry</title>
</head>

<body>
	Which Match?
	<form action="rosterdataentry2.php" method="post">
<?php
include 'connect.php'; 
$result = mysqli_query($conn, "SELECT matchID, location FROM scheduleResults");

?> <select name="matchID"> <?php
while ($row = mysqli_fetch_array($result)) {
	echo $row;
    echo '<option value="' . $row['matchID'] . '">' . $row['location'] . '</option>';
}
echo "</select>";
?>
<input type="submit">
</form>
</body>
</html>
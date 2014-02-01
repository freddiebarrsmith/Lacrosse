<html>
<head>
<title>Results Details Entry</title>
</head>

<body>

<form action="resultsdataentry2.php" method="post">
Please select the Match you wish to enter scores for 


<?php
include 'connect.php'; 
$result = mysqli_query($conn, "SELECT location FROM scheduleResults ORDER BY matchDateTime DESC;");

?> <select name="location"> <?php
while ($row = mysqli_fetch_array($result)) {
	echo $row;
    echo '<option value="' . $row['location'] . '">' . $row['location'] . '</option>';
}
echo "</select>";
?>

<input type="submit">







</form>


</br>
</body>
</html>0
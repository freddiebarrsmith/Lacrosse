<html>
<head>
<title>Match Details Entry</title>
</head>

<body>


<body>
<form action="matchdetailsentry2.php" method="post">
Please enter the Match Location <input type="text" name="location"><br>
Please enter the Opposing Team's Name <input type="text" name="uniName2"><br>
or select from dropdown list:

<?php
include 'connect.php'; 
$result = mysqli_query($conn, "SELECT uniName FROM Universities");

?> <select name="uniName"> <?php
while ($row = mysqli_fetch_array($result)) {
	echo $row;
    echo '<option value="' . $row['uniName'] . '">' . $row['uniName'] . '</option>';
}
echo "</select>";
?>

<input type="submit">







</form>


</br>
</body>
</html>
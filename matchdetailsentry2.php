<html>
<head>
<title>Match Details Entry</title>
</head>
<body>
	


<?php
include 'connect.php'; 

if (!isset($_POST['uniName'] )&&!isset($_POST['uniName2'] )){
    echo "This var is set so I will print.";
}

$location = $_POST['location'];
$uniName = (isset($_POST['uniName2'])) ? $_POST['uniName2'] : $_POST['uniName'];
$location = mysql_real_escape_string($location);
$uniName  = mysql_real_escape_string($uniName);

mysqli_query ($conn, "INSERT INTO scheduleResults(location) VALUES ('$location'); ");
$id = mysqli_insert_id($conn);
mysqli_query ($conn, "INSERT INTO Universities(uniName) VALUES ('$uniName'); ");
$id = mysqli_insert_id($conn);

echo '<br/>';
?>


entry succesful
</br>
</body>
</html>
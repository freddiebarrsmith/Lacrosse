<html>
<head>
<title>News Entry</title>
</head>
<body>
	


<?php
include 'connect.php'; 
$newsHeadline = $_POST['newsHeadline'];
$newsStory = $_POST['newsStory'];

$newsHeadline = mysql_real_escape_string($newsHeadline);
$newsStory = mysql_real_escape_string($newsStory);

mysqli_query ($conn, "INSERT INTO News(newsHeadline, newsStory) VALUES ('$newsHeadline', '$newsStory'); ");
echo mysqli_error($conn);
$id = mysqli_insert_id($conn);

echo '<br/>';
?>
entry succesful
</br>
</body>
</html>
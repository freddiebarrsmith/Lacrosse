<html>
<head>
<link rel="stylesheet" type="text/css" href="nottslacrosse.css">

<title>Nottingham University Men's Lacrosse Team</title>
</head>

<body>

<div id="content">
<div class="module wide50">

<?php
include 'header.php'; 
include 'connect.php';
$result = mysqli_query($conn,"SELECT newsHeadline, newsStory from News");

if (!empty($result)) {      

    if (mysqli_num_rows($result) > 0) {

		while($row = mysqli_fetch_assoc($result)){
			echo $row['newsHeadline'];
			echo $row['newsStory'];
		}
	} else {
       echo "a";
   }
} else {
	echo "b";
}
?>










				</div>

	</div>
	<?php
	include 'footer.php';
	?>
	</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<title></title>
</head>
<body>


<?php
$fname = $_POST['firstname'];
$sname = $_POST['lastname'];
//echo 'my name is'.htmlspecialchars($fname, ENT_QUOTES, 'UTF-8').htmlspecialchars($sname, ENT_QUOTES, 'UTF-8');

echo $fname.''.$sname;
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Download <?=$_GET['url']?> HD</title>
</head>
<body>

<?php

$str = $_SERVER['REQUEST_URI'];
$yt = file_get_contents('https://apidl.herokuapp.com/dl/?url='.$_GET['url'].'');
echo $yt;
?>

</body>
</html>
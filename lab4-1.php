<html>
<head><title>การกำหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $y;
$muti = $y * $z;
$message = "Hello World";
echo $x; echo "<br />";
echo $y; echo "<br />";
echo $z; echo "<br />";
echo "ผลบวก ".$x." + ".$y."=".$add; echo"<br />";
echo "ผลลบ ".$z." - ".$y."=".$sub; echo"<br />";
echo "ผลคูณ ".$y." x ".$z."=".$muti; echo"<br />";
$sum = $muti/$z;
echo "ผลหาร ".$muti." / ".$z."=".$sum; echo"<br />";
echo $message; echo "<br />";
?>
</body>
</html>
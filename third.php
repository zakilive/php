<!DOCTYPE html>
<html>
<body>

<?php
$x=5;//global scope
$y=10;
function myTest()
{
global $x,$y;
$y=$x+$y;
}
myTest();

echo "<p>y= $y</p>";
?>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
$x=5;//global scope

function myTest()
{
echo "<p>Variable x= $x</p>";
}
myTest();

echo "<p>Variable x= $x</p>";
?>
</body>
</html>
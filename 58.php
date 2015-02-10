<?php

$servername="localhost";
$username="root";
$password="";
$dbname="myDB"
//create connection
$connection = new mysqli($servername, $username, $password, $dbname);
//check conenction
if($connection->connection_error)
{
die("Connection failed:".$connection->connection_error);
}

$sql="SELECT id,firstname,lastname FROM MYGuests";
$result=$connection->query($sql);


if($result->num_rows>0)
{
while($row=$result->fetch_assoc()){
echo "id: " .$row["id"]. " - Name:" .$row["firstname"]."" .
$row["lastname"]. "<br>";
}
}
else
{
echo "0 results";
}
$connection->close();
?>
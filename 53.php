
<php
$servername="localhost";
$username="root";
$password="352060";

//create connection
$connection=new mysqli($servername,$username,$password);

//check connection
if($connection->connect_error)
{
die("connection failed: ".$connection->connect_error);
}
echo "Connected Successfully";

?>
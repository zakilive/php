<html>
<body>
<?php
$name=$email=$gender=$comment=$website="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=test_input($_post["name"]);
$email=test_input($_post["email"]);
$website=test_input($_POST["website"]);
$comment=test_input($_POST["comment"]);
$gender=test_input($_POST["gender"]);
}

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$htmlspecialchars($data);
return $data;

}
?>
</body>
</html>
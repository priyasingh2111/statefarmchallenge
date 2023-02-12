<?php
// database connection code
if(isset($_POST['name1']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','statefarm');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comname = $_POST['comname'];
$description = $_POST['description'];

// database insert SQL code
$sql = "INSERT INTO 'new_com' ('name', 'comname', 'email', 'phone', 'des') VALUES ('$name', '$comname','$email', '$phone', '$description')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
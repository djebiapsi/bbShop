<?php
include('bdconnect.php');
if(isset($_POST)) {
    $name = $_POST["name"];
	$email = $_POST["email"];
    $content = $_POST["message"]; 
//var_dump($_POST);
	mysqli_query($bdd, "INSERT INTO tblcontact (user_name, user_email,content) VALUES ('$name', '$email','$content')");
	//$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
header('Location: contact.php');
?>
<?php 
include('../includes/connection.php');

$username = "admin";
$firstname = "kriss";
$lastname = "williams";
$email = "kriss@foundationgaming.com";
$password = md5("Nihil13789108!1");
$query = "INSERT INTO user (`user_username`, `user_firstname`, `user_lastname`, `user_email`, `user_password`) VALUES ($username, $firstname, $lastname, $email, $password);";
if ($db->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $db->error;
}
?>
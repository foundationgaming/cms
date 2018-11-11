<?php 

$error='';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="js/main.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Mono|Ubuntu">
</head>
<body>
<form action="actions/login.php" method="POST" class="cms-login-form">
    <h3>To gain access contact <a href="mailto:help@foundationgaming.com">help@foundationgaming.com</a></h3>
    <input type="text" name="uname" placeholder="Username">
    <input type="password" name="pswd" placeholder="Password">
    <input type="submit">
    <span><?php echo $error; ?></span>
</form>
<?php include('../includes/footer.php'); ?>
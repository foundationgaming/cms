<?php 
SESSION_START();
$error = '';
$db = mysqli_connect('localhost','root','', 'cms') or Die("Error connecting to database.");

if (isset($_POST['submit'])){
    if (empty($_POST['uname']) || empty($_POST['pswd'])) {
        $error = "Username or password invalid.";
    } else {
        mysql_select_db('cms', $db);
        $username = mysql_real_escape_string($_POST['uname']);
        $password = md5(mysql_real_escape_string($_POST['pswd']));
        $query = "SELECT * FROM user WHERE user_username='$username' || user_email='$username';";
        if(mysql_num_rows($query) > 0) {
            $row = mysql_fetch_array($query);
            if($password == $row['user_password']) {
            SESSION_START();
            $_SESSION['login_user'] = "1";
            $_SESSION['userid'] = $row['user_id'];
            $_SESSION['firstname'] = $row['user_firstname'];
            $error = "Success!";
            header("location: ../templates/home.php");
            } else {
                $error = "Username or password incorrect.";
            }
        }
    }
}
?>
<?php
session_start();
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'phpdata');
if (isset($_GET['password']))
{
   $username = $_GET['username'];
   $password = $_GET['password'];
   $user_check_query = "SELECT * FROM users WHERE username='$username' OR password='$password' LIMIT 1";
   $result = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($result);
   if ($user['password'] != $password)
   {
    array_push($errors, "input correct detail");
   }else {
    $query = "Delete from users where password = $password ";
        mysqli_query($db, $query);
      //   echo $password;
   }
}
if ($result->num_rows > 0)
{
   header('location: register.php');
}else {
   header('location: home.php');
}

?>
   
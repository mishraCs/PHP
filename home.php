<?php
 $db = mysqli_connect('localhost', 'root', '', 'phpdata');
$query = "SELECT * FROM `users`";
$result = $db->query($query);
if ($result->num_rows < 1)
{
   header('location: register.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Welcome!!</h1>
        <h4>You are here</h4>
        <a href="logOut.php">LogOut</a>
    </body>
    </html>

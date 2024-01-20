<?php 
$conn =   mysqli_connect("localhost","root","","phpdata");
if(isset($_POST["login_user"]))
{
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $query1 = "select *from users where username = '$username' && password = '$password'";
        $result = mysqli_query($conn,$query1);
        $rows = mysqli_num_rows($result);
        print_r($rows);
        if ($rows>0)
        {
                echo "found";
        }
        else
        {
                echo "not found";
        }
        $query = "SELECT * FROM `users`";

$result = $conn->query($query);
if ($result->num_rows > 0) {  
  echo "<table><tr><th>username</th><th>email</th><th>password</th></tr>";
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["password"]."</td></tr>";
    
  }
  echo "</table>";

} else {
  echo "0 results";
}


}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Login</h2>
  </div>
         
  <form method="post" action="database.php">
   
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="register.php">Registration</a>
        </p>
  </form>
</body>
</html>
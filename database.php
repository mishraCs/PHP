<?php
$db = mysqli_connect('localhost', 'root', '', 'phpdata');
$query = "SELECT * FROM `users`";
$result = $db->query($query);
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="home.php">Home</a>

</body>
</html>

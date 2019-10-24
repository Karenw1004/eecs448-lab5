<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<h1>ViewUsers.php</h1>";
    echo "<table class='centerContent' border= \'1\' style='border-collapse: collapse'>";
    echo "<tr><td>Users</td></tr>";

    $servername = "mysql.eecs.ku.edu";
    $username = "karenws";
    $password = "Eeb3eith";
    $dbname = "karenws";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
      while ($row = $result->fetch_assoc()) {
        echo " <tr><td> " .$row['user_id']. " </td></tr>";
    }
  }
    echo "</table>";
     ?>

  </body>
</html>

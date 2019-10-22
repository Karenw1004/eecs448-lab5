<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CreateUser.php</title>
  </head>
  <body>
    <?php
    echo "<h1> Create User.php </h1>";
    $servername = "mysql.eecs.ku.edu";
    $username = "karenws";
    $password = "Eeb3eith";
    $dbname = "karenws";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
      echo "<p>Connect Successfully</p>";
    }

    $sql = "INSERT INTO Users (user_id) VALUES (" .$_POST['username']. ")";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Add " .$_POST['username']. " successfully</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error. "</p>";
    }

    $conn->close();

     ?>
  </body>
</html>

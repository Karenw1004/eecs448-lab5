<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CreatePosts.php</title>
  </head>
  <body>
    <?php
    echo "<h1> Create Posts.php </h1>";
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

    $inputUsername = $_POST['username'];
    $inputContent = $_POST['content'];
    $query = "INSERT INTO Users (user_id) VALUES ('$inputUsername')";

    //At table Users, if can insert, then it is not inside the table
    if ($conn->query($query) === FALSE) {
      echo "<p> Username found !</p>";
      $query = "SELECT * from Posts WHERE author_id='$inputUsername' && content= '$inputContent'";
      //if they return empty or 0 , there is no SAME post written by an existing user
      $result = $conn->query($query);
      if ($result->num_rows === 0) {
        $query = "INSERT INTO Posts (content, author_id) VALUES ('$inputContent', '$inputUsername') ";
        if ($conn->query($query) === TRUE){
          echo "<p> Add content successfully</p>";
        }

      }
      else {
        echo "<p> Duplicate post! </p>";
      }


    } else {
        echo "<p>Error: No username found ! </p>";
    }

    $conn->close();

     ?>
  </body>
</html>

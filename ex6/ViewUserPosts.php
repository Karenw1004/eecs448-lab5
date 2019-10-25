<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "<h1>Hi</h1>";
    $servername = "mysql.eecs.ku.edu";
    $username = "karenws";
    $password = "Eeb3eith";
    $dbname = "karenws";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $inputUsername = $_POST['dropdown'];
    $sql = "SELECT * FROM Posts WHERE author_id = '$inputUsername'";
    $result = $conn->query($sql);
    echo "<table class='centerContent' border= \'1\' style='border-collapse: collapse'>";
    if ($result->num_rows > 0){
      echo "<tr><td> Content </td></tr>";
      while ($row = $result->fetch_assoc()){
        echo "<tr><td>" .$row['content'] . "</td></tr>";
      }
    } else {
      echo "<tr><td> No data found </td></tr>";
    }
    echo "</table>";
     ?>
  </body>
</html>

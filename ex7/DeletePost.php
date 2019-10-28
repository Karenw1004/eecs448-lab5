<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>DeletePost.php</h1>
    <?php
    $servername = "mysql.eecs.ku.edu";
    $username = "karenws";
    $password = "Eeb3eith";
    $dbname = "karenws";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ( isset($_POST['Delete']) ){
      $checkArr = $_POST['check'];
      if (count($checkArr)  != 0){
        for ($i = 0; $i < count($checkArr); $i++ ){
          $del_post_id = $checkArr[$i];
          $sql = mysqli_query($conn,"DELETE FROM Posts WHERE post_id='".$del_post_id."'");
          echo "<p> Delete Success </p>";
        }
      }
      else {
          echo "<p> No Post delete because admin selected nothing </p>";
      }
    }
     ?>
  </body>
</html>

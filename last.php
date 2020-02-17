<?php include "connection.php"?>

<?php
    session_start();

    $uname = $_SESSION["uname"];

    $sql = "SELECT score FROM users WHERE uname = '" . $uname . "'" ;

    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();


?>
<html>
<script>
  function funset()
  {
    window.parent.document.getElementById('val').innerHTML="Over";
    window.parent.clkto();
  }
</script>
<body onload="funset()" style="margin-top:100px;">
  <center><h2 style="font-family:Century Gothic;">CONGRATULATIONS! YOU COMPLETED THE QUIZ</h2></center>
  <center><h3 style="font-family:Century Gothic;">Your score <?php print $row["score"] ?></h3></center>
</body>
<?php

    $sql = "SELECT score,uname FROM users ORDER BY score DESC";

    $result = $mysqli->query($sql);

    $count = 0;

    while($row = $result->fetch_assoc()):

    $count++;
    //if($row["uname"]==$_SESSION["uname"])
    //print "your position -> $count";

    endwhile;

    session_destroy();
?>
</html>

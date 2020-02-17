<?php include "connection.php"?>
<?php

  session_start();
  $score = $_SESSION["score"];
  //total number of qustions

  $sql = "SELECT * FROM question";

  $result = $mysqli->query($sql) or die($mysqli->error.__LINE__);

  $total = $result->num_rows;

  //get Question no.

  $number = (int) $_GET["n"];

  /*
  * get the Question
  */

  $sql = "select * from question WHERE quesno = $number";

  $result = $mysqli->query($sql) or die($mysqli->error.__line__);

  $question = $result->fetch_assoc();

  /*
  * get the Question
  */

  $sql = "select * from choices WHERE quesno = $number";

  $result2 = $mysqli->query($sql) or die($mysqli->error.__line__);

  $i=0;
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
    /* break back button */
    window.onload=function(){
      var val = "<?php echo $number?>"
      var total = "<?php echo $total?>"
      val = (val/total)*100;

      document.getElementById('bar').style.width= val + "%"

      var i=0; var previous_hash = window.location.hash;
      var x = setInterval(function(){
        i++; window.location.hash = "/noop/" + i;
        if (i==100){clearInterval(x);
          window.location.hash = previous_hash;}
      },10);
    }
    document.oncontextmenu = function(){return false;};
    </script>

    <link rel="stylesheet" href="css/start.css"/>
  </head>
  <body>
    <header>
      <div class="container">
      <br><h2><center>Score : <?php print $score ?></h2>
      <p><center>Question number : <?php print $number ?> of <?php print $total ?></p></center>
      <div class="progress">
        <div class="progress-bar" id="bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:0%">
        </div>
      </div>
    </div>
    </header>
    <main>
      <div class="container2">
        <h4><?php print $number ?>. <?php print $question["text"]; ?></h4>
          <form action="processstart.php" method="post">
            <?php while($row = $result2->fetch_assoc()): $i++; ?>
            <div class="rdi"><input type="radio" id="<?php print $i; ?>" name="opt" value="<?php print $row['id'] ?>"/>&nbsp &nbsp<label for="<?php print $i; ?>"><?php print $row["text"] ?></label></div>
            <?php endwhile; ?>
            <input type="submit" value="Next" class="but" style="top:600px;"/>
            <input type="hidden" value="<?php print $number ?>" name="number" />
          </form>
      </div>
    </main>
    <footer>
      <div class="containerf" >
      COPYRIGHT <b>©</b> 2019 - [TEAM WEBBER] Government Polytechnic, Pune - All Rights Reserved.
    </div>
   </footer>
  </body>
</html>

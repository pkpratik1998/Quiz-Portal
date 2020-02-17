<?php include "connection.php"?>
<?php
    session_start();

    $uname = $_SESSION["uname"];
    //total number of questions
    $sql = "SELECT * FROM question";

    $result = $mysqli->query($sql) or die($mysqli->error.__LINE__);

    $total = $result -> num_rows;

    //get inputs from user form
    if($_POST)
    {
      $number = $_POST["number"];
      $uopt = $_POST['opt'];
      $next = $number + 1;
    }

    $sql = "SELECT * FROM choices WHERE quesno = $number AND iscorrect = 1";

    $result = $mysqli->query($sql) or die($mysqli->error.__LINE__);

    $row = $result->fetch_assoc();

    $copt = $row["id"];


    //compare both options
    if($uopt == $copt)
    {
      $_SESSION["score"]++;
    }
    elseif ($uopt == null) {
    }
    else {
      $_SESSION["score"]--;
    }

    $score = $_SESSION["score"];

    $sql = "UPDATE users SET score = $score WHERE uname = '$uname'";

    //enter into database
    $result = $mysqli->query($sql);

    if($number == $total)
    {
      header("location:last.php");
    }
    else
    {
      header("location:start.php?n=". $next);
    }
?>

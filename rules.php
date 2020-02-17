<?php
  session_start();
  $tname = $_SESSION["tname"];
  $_SESSION["score"] = 0;
?>
<html>
<style>
    body
    {
      background: #f4f8ff;
      margin: 0px;
    }
    .dash
    {
      background: #09419e;
      width: 100%;
      margin-top: -20px;
      height: 40px;
      color: white;
    }
    .but
    {
      position: fixed;
      top:550px;
      left:230px;
      background: #063d95;
      color: #fff;
      border:solid 1px #ccc;
      padding: 10px;
      border-radius: 7px;
      transition: all 0.4s ease;
      width: 15%;
      font-size: 18px;
    }
    .but:hover
    {
      background: #669ef9;
    }

</style>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/start.css">
<body>
  <div class="dash">
    <h1>&nbsp WEBBER</h1>
  </div>
  <header style="height:10%;">
  <p style="font-size:30px;text-align:center;padding:10px;">Welcome <?php print $tname;  ?></p><br>
  </header>

    <div style="float:left;width:40%;margin-left:200px;margin-top:100px;">
    <p style="font-size:28px;"><b>Rules</b></p>
    <p style="">
    There are total 100 MCQs.<br>
    Time limit is 15 minutes.<br>
    +1 for correct answer.<br>
    -1 for wrong answer.<br>
    You can skip a question.<br>
    A question once skipped cannot be attempted again.<br>
    You cannot reattempt any question<br>
    At the end of first round top 20 participants will be qualifying for the next round.<br>
    </p>
    </div>

    <div style="float:left;width:40%;margin-top:100px;">
    <p style="font-size:28px;"><b>Instructions</b></p>
    <p style="">
      Select the desired option by clicking on it.<br>
      Time limit is 15 minutes.<br>
      Click on submit button to submit your option for that question.<br>
      Timer clock will be visible on the top of the screen showing the time left.<br>
      You can skip a question.<br>
      A question once skipped cannot be attempted again.<br>
      To skip a question click on submit button without selecting any choice.
    </div>


  <a href="timer.php"><button style="position:fixed;left:200px;top:450px;" class="but">Start Quiz</button></a>
</body>
</html>

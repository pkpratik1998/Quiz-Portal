<?php include "connection.php"?>

<?php

    function test($val)
    {
      $val = trim($val);
      $val = stripslashes($val);
      $val = htmlspecialchars($val);

      return $val;
    }

    $err2 = "";
    $uemail = "";
    $ucpass = "";

    //retrieve email and password from user
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $uemail = test($_POST["email"]);
      $ucpass = test($_POST["cpass"]);
      $phone = test($_POST["phone"]);
      $name = test($_POST["name"]);
    }
    else
    {
      $err2 = "signup failure try again";
      header("location:index.php?err2=".$err2);
    }

    $sql = "INSERT INTO users (uname, password, phone, name) VALUES ( '" . $uemail . "', '" . $ucpass . "'," . $phone . ", '" . $name . "')";

    //enter into database
    $result = $mysqli->query($sql);

    if ($result === true)
    {
        $err2 = "<span style='color:green'>Signed up successfully Please login and proceed for quiz</span>";
        $mysqli->close();
        header("location:index.php?err2=".$err2);
    }
    else
    {
        $err2 = "Error while signing up try again";
        header("location:index.php?err2=".$err2);
        $mysqli->close();
    }

?>

<?php include "connection.php"?>

<?php

    function test($val)
    {
      $val = trim($val);
      $val = stripslashes($val);
      $val = htmlspecialchars($val);

      return $val;
    }

    $err = "";
    $uuname = "";
    $upass = "";

    //retrieve uname and password from user
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $uuname = test($_POST["uname"]);
      $upass = test($_POST["password"]);
    }
    else
    {
      $err = "login failure try again";
      header("location:login2.php?err=".$err);
    }

    //$sql = "SELECT uname,password FROM users WHERE uname = '" . $uuname . "' AND password = '" . $upass ."'" ;
    $sql = "SELECT uname,password,name FROM users WHERE uname = '" . $uuname . "' AND password = '" . $upass ."'" ;

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0)
    {
        //Check the databasse to retrieve original uname and password
        if($row = $result->fetch_assoc())
        {
            $ouname = $row["uname"];
            $oupass = $row["password"];
            $tname = $row["name"];

            if($ouname && $oupass)
            {
              $mysqli->close();
              session_start();
              $_SESSION["tname"]=$tname;
              $_SESSION["uname"]=$ouname;
              header("location:rules.php");
            }
        }

    }
    else
    {
        $err = "Invalid user name or password";
        $mysqli->close();
        header("location:login2.php?err=".$err);
    }

?>

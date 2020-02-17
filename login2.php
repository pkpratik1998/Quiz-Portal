<html>

  <head>
		<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/js.js"></script>
    <script src="js/new.js"></script>
    <script>
      function validation()
      {
        var uname = document.getElementById("t1").value;
        var password = document.getElementById("t2").value;

        if(uname == "Username" && password == "password") return false;

        if(uname.length <= 4)
        {
          document.getElementById("valid").innerHTML = "please enter a valid username";
          return false;
        }

        if(password.length <= 4)
        {
          document.getElementById("valid").innerHTML = "please enter a valid password";
          return false;
        }

        return true;
      }

      function validation2()
      {
        var email = document.getElementById("t4").value;
        var cpass = document.getElementById("t5").value;
        var rpass = document.getElementById("t6").value;

        if(email == "Enter valid email" && cpass == "Choose password" && rpass == "Re-enter password") return false;

        if(email.indexOf('@') < 5 || email.indexOf('.') == -1 || email.indexOf('@') > email.indexOf('.'))
        {
          document.getElementById("valid2").innerHTML = "please enter a valid email address";
          return false;
        }

        if(cpass.length < 5)
        {
          document.getElementById("valid2").innerHTML = "password should be atleast 4 character long";
          return false;
        }

        if(rpass != cpass)
        {
          document.getElementById("valid2").innerHTML = "passwords do not match";
          return false;
        }
        return true;
      }
    </script>
	</head>

	<body onload="lfun()" style="background:url(images/web.jpg);background-size: 100% 100%;">
		<!--<img src="images/1.jpg" height="100%" width="100%" class="bd"/>-->

		<div class="container" id="cont">
		<div id="logind" class="logd">
		</div>
		<div id="signupd" class="logd">
		</div>

		<div id="lgin" style="transition: all 0.8s ease;">
		<img src="images/WEBBER_LOGO.png" id="logo"  onmouseover="this.src='images/WEBBER_LOGO2.png'" onmouseout="this.src='images/WEBBER_LOGO.png'">

    <form action="processlogin.php" method="post" onsubmit="return validation()">
		<i id="1" class="up fa fa-user-circle" style="top:260px;"></i>
		<input type="text" value="Username" name="uname" class="txt" id="t1" style="top:255px" onfocus="uf(this.value);" onblur="ub(this.value);"/>
		<i class="up1 fa fa-info-circle" style="top:260px;" title="Enter your username"></i>

		<i id="2" class="up fa fa-key" style="top:325px;"></i>
		<input type="password" value="password" name="password" class="txt" id="t2" style="top:320px;" onfocus="pf(this.value);" onblur="pb(this.value);"/>
		<i class="up1 fa fa-info-circle" style="top:325px;" title="forgot password? Click on the link below"></i>

		<p class="vld" id="valid"><?php if($_GET["err"]) print $_GET["err"]; else print "";?></p>
		</div>

    <input type="submit" class="logbut" id="lgbut" value="Sign in" onclick="fun2(),valid1()">
    </form>

		<div id="sgin" style="transition: all 0.8s ease; opacity:0;">

    <form action="processsignup.php" method="post" onsubmit="return validation2()">
      <i id="4" class="up fa fa-envelope-o" style="top:215px;"></i>
  		<input type="text" value="Enter valid email" name="email" class="txt" id="t4" style="top:215px;" onfocus="eef(this.value);" onblur="eeb(this.value);"/>
  		<i class="up1 fa fa-info-circle" style="top:215px;" title="Enter valid email id"></i>

  		<i id="5" class="up fa fa-key" style="top:270px;"></i>
  		<input type="text" value="Choose password" class="txt" name="cpass" id="t5" style="top:270px" onfocus="cpf(this.value);changeType();" onblur="cpb(this.value);"/>
  		<i class="up1 fa fa-info-circle" style="top:270px;" title="choose a password greater than 5 digits"></i>

  		<i id="6" class="up fa fa-key" style="top:330px;"></i>
  		<input type="text" value="Re-enter password" class="txt" id="t6" style="top:330px;" onfocus="rpf(this.value);changeType1();" onblur="rpb(this.value);"/>
  		<i class="up1 fa fa-info-circle" style="top:330px;" title="both passwords should match"></i>

      <i id="7" class="up fa fa-building-o" style="top:390px;"></i>
      <input type="text" value="Your college name" class="txt" id="t7" style="top:390px;" onfocus="colf(this.value);" onblur="colb(this.value);"/>
      <i class="up1 fa fa-info-circle" style="top:390px;" title="Enter your college name"></i>

      <i id="8" class="up fa fa-mobile" style="top:450px;font-size:36px;"></i>
      <input type="text" value="Your phone number" class="txt" id="t8" style="top:450px;" onfocus="phf(this.value);changeType2();" onblur="phb(this.value);"/>
      <i class="up1 fa fa-info-circle" style="top:450px;" title="Enter your phone number"></i>

		<p class="vld" id="valid2" style="top:475px"></p>
		</div>
    <input type="submit" value="Create Account" class="logbut2" id="lgbut2" onclick="fun()">
    </form>

		</div>
	</body>

</html>

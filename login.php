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

		<p class="vld" id="valid"></p>
		</div>

    <input type="submit" class="logbut" id="lgbut" value="Sign in" onclick="fun2(),valid1()">
    </form>

		<div id="sgin" style="transition: all 0.8s ease; opacity:0;">

    <form action="processsignup.php" method="post" onsubmit="return validation2()">
		<i id="4" class="up fa fa-envelope-o" style="top:255px;"></i>
		<input type="email" value="Enter valid email" name="email" class="txt" id="t4" style="top:250px;" onfocus="eef(this.value);" onblur="eeb(this.value);"/>
		<i class="up1 fa fa-info-circle" style="top:255px;" title="this will be helpful for password recovery"></i>

		<i id="5" class="up fa fa-key" style="top:315px;"></i>
		<input type="text" value="Choose password" class="txt" name="cpass" id="t5" style="top:310px" onfocus="cpf(this.value);" onblur="cpb(this.value);"/>
		<i class="up1 fa fa-info-circle" style="top:315px;" title="password rules"></i>

		<i id="6" class="up fa fa-key" style="top:375px;"></i>
		<input type="text" value="Re-enter password" class="txt" id="t6" style="top:370px;" onfocus="rpf(this.value);" onblur="rpb(this.value);"/>
		<i class="up1 fa fa-info-circle" style="top:375px;" title="both passwords should match"></i>

		<p class="vld" id="valid2" style="top:440px"></p>
		</div>
    <input type="submit" value="Create Account" class="logbut2" id="lgbut2" onclick="fun()">
    </form>

		</div>
	</body>
</html>

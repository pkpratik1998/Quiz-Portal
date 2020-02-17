<html>
	<head>
				<script>
		function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

		window.onkeydown = disableF5;
		document.oncontextmenu = function(){return false;};
			$(document).ready(function(){
				 $(document).on("keydown", disableF5);
			});
		</script>
		<style>
				@font-face
				{
					font-family: "digital";
					src: url("css/fonts/digital-7.ttf");
				}
				body
				{
					background: #f4f8ff;
				}
				#val
				{
					font-family: "digital";
					color: #fff;
					background: #00235e;
					font-size: 45px;
					text-align: center;
					width: 10%;
					margin: 0px auto 0px auto;
					margin-top: -30px;
					border-radius: 5px;
					border: solid #ccc;
					position: relative;
					z-index: 999;
				}
				#img1 img
				{
					background: #00235e;
					max-width: 13%;
					
					margin : -63px auto 0px 0px;
					//border: solid #ccc;
					position: relative;
				}
				
				.dash
				{
					background: #09419e;
					margin-top: -20px;
					height: 40px;
					color: white;
				}
				.progress
				{
					height:5px !important;
				}
		</style>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body onload="timer()" style="background: #f4f8ff;">
		<div class="progress">
			<div class="progress-bar" id="bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:10%;background-color:rgb(0,255,0) !important;">
			</div>
		</div>

		<div class="dash">
			

		<script>
			var a = 59;
			var b = 14;
			var stp = 1;
			var clk;
			var i = 0;
			var r=0;
			var g=255;

			function timer()
			{

				//progressbar
				i++;
				document.getElementById("bar").style.width= (i/(15*60))*100 + "%";

				if(g==255)r+=1;
				if(r>=255)g-=1;

				document.getElementById("bar").style.backgroundColor= "rgb(" + r + "," + g + ",0)" ;

				a--;
				if(a == 0)
				{
					b--;

					if(b != -1) a=59;
				}
				if(b < 0)
				{
					//clearTimeout(clk);
					//document.getElementById("myfrm").contentWindow.document.location.href="last.php";
					document.location.href="last.php";
				}

				if(b<10)
				document.getElementById("val").innerHTML = "0" + b + ":" + a;
				else
				document.getElementById("val").innerHTML = b + ":" + a;

				if(a<10)
				document.getElementById("val").innerHTML = b + ":" + "0" + a;

				if(a<10 && b<10)
				document.getElementById("val").innerHTML = "0" + b + ":" + "0" + a;

				if(stp == 1)
				clk = setTimeout(timer,1000);
			}

			function clkto()
			{
					clearTimeout(clk);
			}
		</script>
		<p id="val"></p>
		<p id="img1"><img src="images/WEBBER.jpg"></p>
	</div>
    <iframe src="start.php?n=1" height="720" style="margin-top:0px;" width="100%" frameborder="0" id="myfrm"></iframe>
	</body>
</html>

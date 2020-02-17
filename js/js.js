function lfun()
{
  document.getElementById('cont').style.opacity="1";
}


function uf(val)
{
  if(val.length != 0)
    document.getElementById('t1').value="";
    document.getElementById('1').style.color="#2b2c33";
}
function ub(val)
{
  if(val =='')
  document.getElementById('t1').value="Username";
  document.getElementById('1').style.color="#9296af";
}
function pf(val)
{
  if(val.length != 0)
  document.getElementById('t2').value="";
  document.getElementById('2').style.color="#2b2c33";
}
function pb(val)
{
  if(val =='')
  document.getElementById('t2').value="password";
  document.getElementById('2').style.color="#9296af";
}


function cuf(val)
{
  if(val.length != 0)
    document.getElementById('t3').value="";
    document.getElementById('3').style.color="#2b2c33";
}
function cub(val)
{
  if(val =='')
  document.getElementById('t3').value="Choose an Username";
  document.getElementById('3').style.color="#9296af";
}
function eef(val)
{
  if(val.length != 0)
  document.getElementById('t4').value="";
  document.getElementById('4').style.color="#2b2c33";
}
function eeb(val)
{
  if(val =='')
  document.getElementById('t4').value="Enter valid email";
  document.getElementById('4').style.color="#9296af";
}
function cpf(val)
{
  if(val.length != 0)
    document.getElementById('t5').value="";
    document.getElementById('5').style.color="#2b2c33";
}
function cpb(val)
{
  if(val =='')
  document.getElementById('t5').value="Choose password";
  document.getElementById('5').style.color="#9296af";
}
function rpf(val)
{
  if(val.length != 0)
  document.getElementById('t6').value="";
  document.getElementById('6').style.color="#2b2c33";
}
function rpb(val)
{
  if(val =='')
  document.getElementById('t6').value="Re-enter password";
  document.getElementById('6').style.color="#9296af";
}
function rpf(val)
{
  if(val.length != 0)
  document.getElementById('t6').value="";
  document.getElementById('6').style.color="#2b2c33";
}
function rpb(val)
{
  if(val =='')
  document.getElementById('t6').value="Re-enter password";
  document.getElementById('6').style.color="#9296af";
}
function fun()
{
  var obj1 = document.getElementById("logind");
  var obj2 = document.getElementById("signupd");
  var lgin = document.getElementById("lgin");
  var sgin = document.getElementById("sgin");
  var but1 = document.getElementById("lgbut");
  obj1.style.height="90px";
  obj2.style.height="380px";
  obj2.style.top="210px";
  lgin.style.opacity="0";
  sgin.style.opacity="1";
  but1.style.top="125px";
}

function fun2()
{
  var obj1 = document.getElementById("logind");
  var obj2 = document.getElementById("signupd");
  var lgin = document.getElementById("lgin");
  var sgin = document.getElementById("sgin");
  var but1 = document.getElementById("lgbut");
  obj1.style.height="380px";
  obj2.style.height="90px";
  obj2.style.top="500px";
  lgin.style.opacity="1";
  sgin.style.opacity="0";
  but1.style.top="415px";
}

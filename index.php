<?php
session_start();
require "include/mysql.php";
if (isset($_SESSION["userid"]) && isset($_SESSION["isadmin"]))
{
header("Location: main.php");
die();
}
if (isset($_POST["login"]) && isset($_POST["password"]) && strlen($_POST["login"])>0 && strlen($_POST["password"])>0){
$login=$_POST["login"];
$password=$_POST["password"];
$result=mysqli_query($link,"SELECT * FROM login WHERE login LIKE '$login' AND password LIKE MD5('$password')");
while ($data = mysqli_fetch_array($result))
{
$userid=$data['id'];
$isadmin=$data['isadmin'];
}
mysqli_free_result($result);
if (isset($userid)){
$_SESSION["userid"]=$userid;
$_SESSION["isadmin"]=$isadmin;
$_SESSION["login"]=$login;
header("Location: main.php");
die();
} else {
$error=1;
}
}
require "include/top.php";
?>



    <div class="container">

<?php
if ($error == 1){
?>
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Не правильный пароль
</div>
</div></div>
<?php
}
?>

<div class="row">
<div class="col-md-5 col-md-offset-4">

<form class="form-horizontal" action=index.php method=post>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="login" placeholder="Логин" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Пароль" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default">Вход</button>
    </div>
  </div>
</form>
</div>



<?php
require "include/bottom.php";
?>

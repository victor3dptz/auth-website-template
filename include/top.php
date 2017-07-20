<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



  </head>
  <body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="">ИОГВ</a>
    </div>



<?php
if (isset($_SESSION["userid"]) && isset($_SESSION["isadmin"]))
{
?>
  <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Выход: <?php echo $_SESSION["login"]; ?></a></li>
</ul>
<?php
}
?>
  </div><!-- /.container -->
</nav>


</div>

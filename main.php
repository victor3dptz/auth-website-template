<?php
session_start();
require "include/mysql.php";
if (!isset($_SESSION["userid"]) && !isset($_SESSION["isadmin"]))
{
header("Location: index.php");
die();
}
require "include/top.php";
?>



    <div class="container">


</div>



<?php
require "include/bottom.php";
?>

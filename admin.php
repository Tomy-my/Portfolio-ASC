<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: ../login/index.php');
    exit();
}
else
{
?>
 <a href="controller/logout.php">deco</a>


<?php 
}
?>
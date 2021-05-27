<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: ../login/index.php');
    exit();
}
else
{

    include("header_admin.php");

?>  
        <div class="container_dashboard_projet">
            <h1>Dashboard section : Projet</h1>
            <div class="edit_dashboard_projet">
                    
            </div>
        </div>


<?php 
}
?>
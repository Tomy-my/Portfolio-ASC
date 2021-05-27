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
            <div class="add_dashboard_projet">
                <a href="#">
                    <h1><i class="fas fa-plus-circle"></i> Add projet</h1>
                </a>
            </div>
            <div class="edit_dashboard_projet">
                <div class="int_dashboard_projet">
                    <div class="img_boucle">
                        <img src="img/projet1.png">
                    </div>
                    <div class="right_boucle">
                        <div class="petitText_boucle">
                            <h4>Département du Jura</h4>
                            <ul>
                                <li><span>Langage :</span> HTML - CSS - JS</li>
                                <li><span>Durée :</span> 1 semaine</li>
                                <li><span>Période :</span> 12/04/2021 au 22/04/2021</li>
                            </ul>
                        </div>
                        <div class="edit_boucle">
                            <button id="edit">Éditer</button>
                            <button id="delete">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
}
?>
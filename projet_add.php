<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login/index.php');
    exit();
}
else
{

    include("header_admin.php");

?>  
        <div class="container_form_projet">
            <h1>Formulaire d'ajout : Projet</h1>
            <hr id="sous_titre">
            <div class="form_projet">
                <form action="?" method="post">
                    <h3>Titre du projet :</h3>
                    <input class="titre_projet" type="text" placeholder="Titre"/>
                    <div class="checkbox_projet">
                        <h3>Langage(s) :</h3>
                        <input type="checkbox" name="html" checked>
                            <label for="html">Html</label>
                        <input type="checkbox" name="css">
                            <label for="css">Css</label>
                        <input type="checkbox" name="js">
                            <label for="js">Js</label>
                        <input type="checkbox" name="php">
                            <label for="php">Php</label>
                    </div>
                    <h3>Durée :</h3>
                    <input class="subject" type="text" placeholder="Exemple : 1 Jour/Semaine "/>
                    <h3>Période :</h3>
                    <input class="periode_project" type="date" name="periode_project"/>
                    <label for="periode_project">Au</label>
                    <input class="periode2_project" type="date" name="periode2_project"/>
                    <h3>L'image du projet :</h3>
                    <input class="file_project" type="file" name="file"/>
                    <textarea type="textarea" placeholder="Message"></textarea>
                </form>
                <div class="send">
                    <button class="send"> <i class="far fa-paper-plane"></i>&nbsp; &nbsp; Envoyer</button>
                </div>
            </div>
        </div>


<?php 
}
?>
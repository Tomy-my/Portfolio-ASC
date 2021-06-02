<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login/index.php');
    exit();
}
else
{
    include("controller/add_project.php");

    include("header_admin.php");

?>  
        <div class="container_form_projet">
            <h1>Formulaire d'ajout : Projet</h1>
            <hr id="sous_titre">
            <div class="form_projet">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <p>Titre du projet :</p>
                    <input class="titre_projet" type="text" name="titre_project" placeholder="Titre"/>

                    <p>URL du projet :</p>
                    <input class="titre_projet" type="text" name="url" placeholder="Si aucune url marquer #"/>
                    
                    <div class="checkbox_projet">
                        <p>Langage(s) utilisé(s):</p>
                        <input class="titre_projet" type="text" name="langage" placeholder="Si aucun, rien marquer"/>
                    </div>
                    
                    <p>Durée :</p>
                    <input class="duree_projet" type="text" name="duree_project" placeholder="Exemple : 1 Jour/Semaine "/>
                    
                    <p>Période :</p>
                    <input class="periode_project" type="date" name="periode_project"/>
                    <label for="periode_project">Au</label>
                    <input class="periode2_project" type="date" name="periode2_project"/>
                    
                    <p>L'image du projet :</p>
                    <input class="file_project" type="file" name="txt_file"/>
                    
                    <p>Description :</p>
                    <textarea class="description_projet" type="textarea" name="description_project" placeholder="Description du projet"></textarea>
                    
                    <div class="send">
                        <button class="send" name="btn_insert" value="Insert"> <i class="far fa-paper-plane"></i>&nbsp; &nbsp; Envoyer</button>
                    </div>
                </form>
                <?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>ATTENTION ! <?php echo $errorMsg; ?></strong>
            </div>
        <?php
		}
		?>
            </div>
        </div>

<?php 
}
?> 
<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login/index.php');
    exit();
}
else
{
    require_once "controller/config_bdd.php";

    if(isset($_REQUEST['update_id']))
    {
        try
        {
            $id = $_REQUEST['update_id']; 
            $select_stmt = $db->prepare('SELECT * FROM project WHERE id =:id'); 
            $select_stmt->bindParam(':id',$id);
            $select_stmt->execute(); 
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }
        
    }

    if(isset($_REQUEST['btn_update']))
{
	try
	{
        $titre_project			= $_REQUEST['titre_project'];	
		$langage				= $_REQUEST['langage'];	
		$duree_project			= $_REQUEST['duree_project'];	
		$periode_project		= $_REQUEST['periode_project'];	
		$periode2_project		= $_REQUEST['periode2_project'];	
		$description_project	= addslashes($_REQUEST['description_project']);
		
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];	
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
			
		$path="upload/".$image_file; 
		
		$directory="upload/";
		
		if($image_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
			{	
				if(!file_exists($path)) 
				{
					if($size < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp, "upload/" .$image_file);	
					}
					else
					{
						$errorMsg="Image trop grosse, maximum 5mb"; 
					}
				}
				else
				{	
					$errorMsg="Image déjà existante"; 
				}
			}
			else
			{
				$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
			}
		}
		else
		{
			$image_file=$row['image']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}
	
		if(!isset($errorMsg))
		{
			$update_stmt=$db->prepare('UPDATE project SET titre_project=:titre_project_up, langage=:langage_up, duree_project=:duree_project_up, periode_project=:periode_project_up, periode2_project=:periode2_project_up, description_project=:description_project_up, image=:file_up WHERE id=:id'); //sql update query
			$update_stmt->bindParam(':titre_project_up',$titre_project);
			$update_stmt->bindParam(':langage_up',$langage);
			$update_stmt->bindParam(':duree_project_up',$duree_project);
			$update_stmt->bindParam(':periode_project_up',$periode_project);
			$update_stmt->bindParam(':periode2_project_up',$periode2_project);
			$update_stmt->bindParam(':description_project_up',$description_project);
			$update_stmt->bindParam(':file_up',$image_file);
			$update_stmt->bindParam(':id',$id);
			 
			if($update_stmt->execute())
			{
				header("refresh:1;dashboard_projet.php");
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}

    include("header_admin.php");
?>       
<div class="container_form_projet">
            <h1>Formulaire d'ajout : Projet</h1>
            <hr id="sous_titre">
            <div class="form_projet">
                <form action="" method="post" enctype="multipart/form-data">
                    
                    <p>Titre du projet :</p>
                    <input class="titre_projet" type="text" name="titre_project" value="<?php echo $titre_project; ?>" />
                    
                    <div class="checkbox_projet">
                        <p>Langage(s) utilisé(s):</p>
                        <input class="titre_projet" type="text" name="langage" value="<?php echo $langage; ?>" />
                    </div>
                    
                    <p>Durée :</p>
                    <input class="duree_projet" type="text" name="duree_project" value="<?php echo $duree_project; ?>" />
                    
                    <p>Période :</p>
                    <input class="periode_project" type="date" name="periode_project" value="<?php echo $periode_project; ?>" />
                    <label for="periode_project">Au</label>
                    <input class="periode2_project" type="date" name="periode2_project" value="<?php echo $periode2_project; ?>" />
                    
                    <p>L'image du projet :</p>
                    <input class="file_project" type="file" name="txt_file" value="<?php echo $image; ?>"/>
                    <p><img src="upload/<?php echo $image; ?>" height="120" width="210" /></p>
                    
                    <p>Description :</p>
                    <textarea class="description_projet" type="textarea" name="description_project"><?php echo $description_project; ?></textarea>
                    
                    <div class="send">
                        <button class="send" name="btn_update" value="Update"> <i class="far fa-paper-plane"></i>&nbsp; &nbsp; Envoyer</button>
                    </div>
                </form>
                <?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		?>   
            </div>
        </div>
<?php 
}
?>
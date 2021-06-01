<?php 

require_once('config_bdd.php');

if(isset($_REQUEST['btn_insert']))
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
		
		if(empty($titre_project)){
			$errorMsg="Please Enter titre";
		}

		else if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
		{	
			if(!file_exists($path)) //Regarde si l'image existe dans /upload
			{
				if($size < 5000000) //Fichié maximum
				{
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
		
		if(!isset($errorMsg))
		{
			$insert_stmt=$db->prepare('INSERT INTO project(titre_project,image,langage,duree_project,periode_project,periode2_project,description_project) VALUES(:titre_project,:fimage,:langage,:duree_project,:periode_project,:periode2_project,:description_project)');				
			$insert_stmt->bindParam(':titre_project',$titre_project);	
			$insert_stmt->bindParam(':langage',$langage);	
			$insert_stmt->bindParam(':duree_project',$duree_project);	
			$insert_stmt->bindParam(':periode_project',$periode_project);	
			$insert_stmt->bindParam(':periode2_project',$periode2_project);	
			$insert_stmt->bindParam(':description_project',$description_project);	
			$insert_stmt->bindParam(':fimage',$image_file);	 
		
			if($insert_stmt->execute())
			{
				header("refresh:3;dashboard_projet.php"); 
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}
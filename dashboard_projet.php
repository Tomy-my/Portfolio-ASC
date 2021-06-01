<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login/index.php');
    exit();
}
else
{
    require_once("controller/config_bdd.php");
    
        if(isset($_REQUEST['delete_id']))
        {
            // select image from db to delete
            $id=$_REQUEST['delete_id'];	//get delete_id and store in $id variable
            
            $select_stmt= $db->prepare('SELECT * FROM project WHERE id =:id');	//sql select query
            $select_stmt->bindParam(':id',$id);
            $select_stmt->execute();
            $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
            unlink("upload/".$row['image']); //unlink function permanently remove your file
            
            //delete an orignal record from db
            $delete_stmt = $db->prepare('DELETE FROM project WHERE id =:id');
            $delete_stmt->bindParam(':id',$id);
            $delete_stmt->execute();
            
            header("Location:dashboard_projet.php");
        }

    include("header_admin.php");

?>       
        <div class="container_dashboard_projet">
            <h1>Dashboard section : Projet</h1>
            <div class="add_dashboard_projet">
                <a href="projet_add.php">
                    <h1><i class="fas fa-plus-circle"></i> Add projet</h1>
                </a>
            </div>
            <div class="edit_dashboard_projet">
            <?php
				$select_stmt=$db->prepare("SELECT * FROM project");
				$select_stmt->execute();
			    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			    {
			?>
                <div class="int_dashboard_projet">
                    <div class="img_boucle">
                        <img src="upload/<?php echo $row['image']; ?>">
                    </div>
                    <div class="right_boucle">
                        <div class="petitText_boucle">
                            <h4><?php echo $row['titre_project']; ?></h4>
                            <ul>
                                <li><span>Langage : </span><?php echo $row['langage']; ?></li>
                                <li><span>Durée : </span><?php echo $row['duree_project']; ?></li>
                                <li><span>Période : </span><?php echo $row['periode_project']; ?> au <?php echo $row['periode2_project']; ?></li>
                            </ul>
                        </div>
                        <div class="edit_boucle">
                            <button id="edit"><a href="edit_projet.php?update_id=<?php echo $row['id']; ?>">Éditer</a></button>
                            <button id="delete"><a href="?delete_id=<?php echo $row['id']; ?>">Supprimer</a></button>
                        </div>
                    </div>
                </div>
            <?php
				}
			?>
            </div>
        </div>
<?php 
}
?>
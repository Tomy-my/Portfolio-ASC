<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: login/index.php');
    exit();
}
else
{
    require_once("controller/config_bdd");
    
        // if(isset($_REQUEST['delete_id']))
        // {
        //     // select image from db to delete
        //     $id=$_REQUEST['delete_id'];	//get delete_id and store in $id variable
            
        //     $select_stmt= $db->prepare('SELECT * FROM tbl_file WHERE id =:id');	//sql select query
        //     $select_stmt->bindParam(':id',$id);
        //     $select_stmt->execute();
        //     $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
        //     unlink("upload/".$row['image']); //unlink function permanently remove your file
            
        //     //delete an orignal record from db
        //     $delete_stmt = $db->prepare('DELETE FROM tbl_file WHERE id =:id');
        //     $delete_stmt->bindParam(':id',$id);
        //     $delete_stmt->execute();
            
        //     header("Location:index.php");
        // }

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
				$select_stmt=$db->prepare("SELECT * FROM tbl_file");
				$select_stmt->execute();
			    while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
			    {
			?>
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
                            <button id="edit"><a href="projet_edit.php">Éditer</a></button>
                            <button id="delete">Supprimer</button>
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
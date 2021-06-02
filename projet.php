<?php
$titre = "Projets";

include('controller/config_bdd.php');

include('header.php');
?>

<div class="projet_container">
<?php
	$select_stmt=$db->prepare("SELECT * FROM project ORDER BY id DESC");
	$select_stmt->execute();
		while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
	{
?>
    <div class="container_projet1">
        <img src="upload/<?php echo $row['image']; ?>">
        <div class="text_projet">
            <h1><a href="#"><?php echo $row['titre_project']; ?></a></h1>
            <hr>
            <ul>
                <li><span>Langage :</span> <?php echo $row['langage']; ?></li>
                <li><span>Durée :</span> <?php echo $row['duree_project']; ?></li>
                <li id="last"><span>Période :</span> <?php echo $row['periode_project']; ?> au <?php echo $row['periode2_project']; ?></li>
            </ul>
            <p><?php echo $row['description_project']; ?></p>
        </div>
    </div>
<?php
	}
?>
</div>

<?php
include('footer.php');
?>
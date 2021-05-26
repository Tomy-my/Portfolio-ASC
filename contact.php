<?php
$titre = "Home";

include('header.php');
?>
<div class="contact_container">
    <h3>Formulaire de contact</h3>
    <hr id="titre">
    <form action="?" method="post">
		<div class="form">
			<div class="separator">
				<input class="name1" type="text" placeholder="Name"/>
				<hr>
				<input class="mail1" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" placeholder="Email"/>
				<hr>
				<input class="subject" type="text" placeholder="Subject"/>
				<hr>
			</div>
			<textarea type="textarea" placeholder="Message"></textarea>
		</div>
	</form>
    <div class="send">
        <button class="send"> <i class="far fa-paper-plane"></i>&nbsp; &nbsp; Envoyer</button>
    </div>
</div>

<?php
include('footer.php');
?>


<!-- <img src="img/svg/contact.svg" alt="Image de décoration"> -->
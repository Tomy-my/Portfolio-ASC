<?php
$titre = "Home";

include('header.php');
?>
<div class="contact_container">
    <h3>Formulaire de contact</h3>
    <hr id="titre">
    <form action="controller/contact_form.php" method="post">
		<div class="form">
			<div class="separator">
				<input class="name1" type="text" placeholder="Name" name="name"/>
				<hr>
				<input class="mail1" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" placeholder="Email"/>
				<hr>
				<input class="subject" type="text" name="subject" placeholder="Subject"/>
				<hr>
			</div>
			<textarea type="textarea" name="message" placeholder="Message"></textarea>
		</div>
		<div class="send">
        	<button	button class="send" name="envoi"> <i class="far fa-paper-plane"></i>&nbsp; &nbsp; Envoyer</button>
    	</div>
	</form>
</div>

<?php
include('footer.php');
?>

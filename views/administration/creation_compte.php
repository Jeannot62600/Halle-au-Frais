<h2> Création de compte </h2>
<p>
	<?php if(isset($message)) echo $message; ?>
</p>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/creation_compte">
		<h3>Informations de connexion :</h3> 
		<p>
			<label for="login">Login : </label>
			<input type="text" name="login" id="login"/>
		</p>
		<p>
			<label for="pass">Mot de passe : </label>
			<input type="password" name="pass" id="pass"/>
		</p>
		<p>
			<label for="conf">Confirmation : </label>
			<input type="password" name="conf" id="conf"/>
		</p>
		<h3>Informations personelles :</h3>
		<p>
			<label for="nom">Nom : </label>
			<input type="text" name="nom" id="nom"/>
		</p>
		<p>
			<label for="prenom">Prénom : </label>
			<input type="text" name="prenom" id="prenom"/>
		</p>
		<p>
			<input type="submit" value="Enregistrer">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>

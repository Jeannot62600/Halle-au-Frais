<h2> Suppression de commerce </h2>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/suppression_commerce">
		<h3>Choisir un commerce : </h2>
		<p>
			<select name="suppr_commerce" size="3">
				<?php foreach($commerces as $commerce):?> 
					<option value=<?php echo $commerce->id ?>><?php echo 'nom : ' . $commerce->nom . ' | ' . 'propriétaire : ' . $commerce->propriétaire ?></option>
				<?php endforeach; ?>
			</select>
		</p>
		<p>
			<input type="submit" value="Supprimer">
		</p>
	</form>
</p>
<p>
	<a class="home" href="http://localhost/Halle-au-Frais/admin">Retour au menu d'administration</a>
</p>
<h2> Suppression d'article </h2>
<p>
	<form method="post" action="http://localhost/Halle-au-Frais/suppression_article">
		<h3>Choisir un article : </h2>
		<p>
			<select name="suppr_article" size="3">
				<?php foreach($articles as $article):?> 
					<option value=<?php echo $article->id ?>><?php echo 'titre : ' . $article->titre . ' | ' . 'auteur : ' . $article->auteur . ' | ' . 'date : ' . $article->date ?></option>
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
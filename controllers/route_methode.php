<?php
	
	function accueil(){
		// $user = Model::factory('admin')->create();
		// $user->prenom = 'Amaury';
		// $user->nom = 'GELIN';
		// $user->mail = 'momo.test@gmail.com';
		// $user->pseudo = 'test_niggas';
		// $user->mdp = 'test';
		// $user->save();
		//$articles = Model::factory('Article')->find_many();
		$maneges = Model::factory('Manege')->find_many();
		Flight::render('accueil.php', array('images' => $maneges), 'body_content');
		Flight::render('layout.php', array('title' => 'Home Page'));
	}
	
	function news(){
		$articles = Model::factory('Article')->find_many();
		Flight::render('news.php', array('articles' => $articles), 'body_content');
		Flight::render('layout.php', array('title' => 'Nouveauté'));
	}
	
	function about(){
		$commerces = Model::factory('commerce')->find_many();
		Flight::render('about.php', array('commercant' => $commerces), 'body_content');
		Flight::render('layout.php', array('title' => 'A propos'));
	}
	
	function contact(){
		Flight::render('contact.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Contact'));
	}
	
	function connexion(){
		Flight::render('administration/connexion_admin.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Connexion Admin'));
	}
	
	function erreur_connexion(){
		Flight::render('administration/erreur_connexion.php', NULL, 'body_content');
		Flight::render('layout.php', array('title' => 'Erreur Connexion'));
	}
	
	function admin(){
		if (isset($_POST['login']) AND isset($_POST['pass']))
		{
			$login = $_POST['login'];
			$pass = $_POST['pass']; 
			
			$user = Model::factory('admin')
			->where('nom', $login)
			->where('mdp', $pass)
			->find_one();
			
			if ( isset($user->nom) AND isset($user->mdp) )
			{ 
				Flight::render('administration/menu_admin.php', NULL, 'body_content');
				Flight::render('layout.php', array('title' => 'Menu Admin'));
			}
			else
			{
				erreur_connexion();
			}
		}	
		else
		{
			erreur_connexion();
		} 
	}

?>

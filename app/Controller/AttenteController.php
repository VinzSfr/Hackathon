<?php
namespace App\Controller;

use \App;

class AttenteController extends AppController {
	public function __construct() {
		parent::__construct();

		//$this->loadModel('Post'); // permet de manipuler la table post
		//$this->loadModel('Category'); // permet de manipuler la table category
	}

	/**
	 * Affiche la page d'accueil qui permet d'encoder le n° de la borne et la suite de chiffre sur la carte de fidélité.
	 */
	public function index() {
		/*$posts = $this->Post->last(); // récupère tous les posts en partant des derniers
		$categories =  $this->Category->all(); // récupère toutes les catégories*/

		$alert = App::getInstance()->alert();

		/*$oldPosts = $posts;
		$pagin = $this->getPaginate();
		$posts = $pagin->paginate($oldPosts, $posts);*/
		//compact('posts', 'categories'); // donne ['posts' => $posts, 'categories' => $categories]
		$this->render('posts.index', compact('posts', 'categories', 'alert', 'pagin')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	/**
	 * Affiche traite la requête et notifie l'utilisateur de la prise en charge de sa demande
	 */
	public function confirmation() {
		$categorie = $this->Category->find($_GET['id']); // trouve la catégorie en fonction de l'id
		if($categorie === false) // Si la catégorie n'existe pas
			App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NOT_FOUND);


		$articles = $this->Post->lastByCategory($_GET['id']); // trouve les articles associés
		$categories = $this->Category->all(); // récupère les catégories

		$this->render('posts.category', compact('articles', 'categories', 'categorie'));
	}

	/**
	 * Vue qui permet d'encoder la suite de chiffre correspondant à un utilisateur qui quitte un magasin
	 */
	public function sortie() {
		$categorie = $this->Category->find($_GET['id']); // trouve la catégorie en fonction de l'id
		if($categorie === false) // Si la catégorie n'existe pas
			App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NOT_FOUND);


		$articles = $this->Post->lastByCategory($_GET['id']); // trouve les articles associés
		$categories = $this->Category->all(); // récupère les catégories

		$this->render('posts.category', compact('articles', 'categories', 'categorie'));
	}

	/**
	 * Vue qui permet de générer
	 */
	public function genererSimpleTicket() {
		$categorie = $this->Category->find($_GET['id']); // trouve la catégorie en fonction de l'id
		if($categorie === false) // Si la catégorie n'existe pas
			App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NOT_FOUND);


		$articles = $this->Post->lastByCategory($_GET['id']); // trouve les articles associés
		$categories = $this->Category->all(); // récupère les catégories

		$this->render('posts.category', compact('articles', 'categories', 'categorie'));
	}
}
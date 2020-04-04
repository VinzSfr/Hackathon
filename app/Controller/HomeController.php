<?php


namespace App\Controller;

use App;

class HomeController extends AppController
{
	public function __construct() {
		parent::__construct();

		$this->loadModel('Utilisateur'); // charge la table Utilisateur
	}

	public function index() {
		//$utilisateur = $this->Utilisateur->all(); // récupère la liste de tous les articles
		//App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NOT_FOUND);

		$alert = App::getInstance()->alert();

		$this->render('home.index', compact('alert')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function magasin() {
		//$utilisateur = $this->Utilisateur->all(); // récupère la liste de tous les articles
		//App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NOT_FOUND);

		$alert = App::getInstance()->alert();

		$this->render('home.magasin', compact('alert')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function fileAttente() {
		//$utilisateur = $this->Utilisateur->all(); // récupère la liste de tous les articles
		//App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NOT_FOUND);

		$alert = App::getInstance()->alert();

		$this->render('home.fileAttente', compact('alert')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}
}
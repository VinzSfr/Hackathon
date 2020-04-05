<?php


namespace App\Controller;

use App;

class HomeController extends AppController
{
	private $donneesPageCourante;

	public function __construct() {
		parent::__construct();

		$this->loadModel('CarteDeFidelite'); // permet de manipuler la table post
	}

	private function Hydrate($titre, $idMenu, $fond){
		$fond = "images/" . $fond . ".jpg";

		$this->donneesPageCourante = [
			"titre" => $titre,
			"idMenu" => $idMenu,
			"fond" => $fond
		];
	}

	public function index() {
		$this->Hydrate("Accueil", 0, "accueil");
		$donneesPageCourante = $this->donneesPageCourante;

		$this->render('home.index', compact('donneesPageCourante')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function magasin() {
		$this->Hydrate("Magasin", 1, "store");
		$donneesPageCourante = $this->donneesPageCourante;

		$this->render('home.magasin', compact('donneesPageCourante')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function fileAttente() {
		$this->Hydrate("File d'attente", 2, "wait");
		$donneesPageCourante = $this->donneesPageCourante;

		if(!empty($_POST)) { // Si on a demandé de modifier le contenu
			$this->checkInputForm();

			$result = $this->CarteDeFidelite->create([
				'numero' => $_POST['numero']
			]);
		}

		$this->render('home.fileAttente', compact('donneesPageCourante')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	private function checkInputForm(){
		$errors = NULL;

		if($_POST['numero'] == NULL)
			$errors .= '&numero=wrong';

		if($errors != NULL)
			header("Location: ?p=home.fileAttente");
	}
}
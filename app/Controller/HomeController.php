<?php


namespace App\Controller;

use App;

class HomeController extends AppController
{
	private $donneesPageCourante;

	public function __construct() {
		parent::__construct();
	}

	private function Hydrate($titre, $htmlMenu, $fond){
		$fond = "images/" . $fond . ".jpg";

		$this->donneesPageCourante = [
			"titre" => $titre,
			"htmlMenu" => $htmlMenu,
			"fond" => $fond
		];
	}

	public function index() {
		$this->Hydrate("Accueil", 0, "accueil");
		$donneesPageCourante = $this->donneesPageCourante;

		$this->render('home.index', compact('alert', 'donneesPageCourante')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function magasin() {
		$this->Hydrate("Magasin", 1, "store");
		$donneesPageCourante = $this->donneesPageCourante;

		$this->render('home.magasin', compact('alert', 'donneesPageCourante')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function fileAttente() {
		$this->Hydrate("File d'attente", 2, "wait");
		$donneesPageCourante = $this->donneesPageCourante;

		$this->render('home.fileAttente', compact('alert')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}
}
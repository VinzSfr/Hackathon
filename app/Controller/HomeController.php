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

		$results = $this->CallAPI('GET', 'http://bca5bf5c.ngrok.io/api/GetAllTickets', false);

        $this->render('home.fileAttente', compact('donneesPageCourante', 'results')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
	}

	public function inscriptionFile(){
        $this->Hydrate("Inscription", 3, "inscription");
        $donneesPageCourante = $this->donneesPageCourante;

        if(!empty($_POST)) { // Si on a demandé de modifier le contenu
            $this->checkInputForm();

            /*$result = $this->CarteDeFidelite->create([
                'numero' => $_POST['numero']
            ]);*/

            $NumeroTicket = $this->CallAPI('GET', 'http://bca5bf5c.ngrok.io/api/GetNewTicket', false);
            $this->render('home.inscriptionFile', compact('donneesPageCourante','NumeroTicket')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories*/

        }else{
            $this->render('home.inscriptionFile', compact('donneesPageCourante')); // prépare le rendu pour la vue en lui passant les articles et la liste des catégories
        }
    }

	private function checkInputForm(){
		$errors = NULL;

		if($_POST['numero'] == NULL)
			$errors .= '&numero=wrong';

		if($errors != NULL)
			header("Location: ?p=home.fileAttente");
	}
	/* Fonction d'appel GET POST PUT API */
    private function CallAPI($method, $url, $data = false)
    {
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);
        return $result;
    }
}
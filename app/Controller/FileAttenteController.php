<?php


namespace App\Controller;

use App;

class FileAttenteController extends AppController
{
	public function __construct() {
		parent::__construct();

		$this->loadModel('CarteDeFidelite'); // permet de manipuler la table post
	}

	public function add() {
		if(!empty($_POST)) { // Si on a demandé de modifier le contenu
			$this->checkInputForm('add');

			$result = $this->CarteDeFidelite->create([
				'numero' => $_POST['numero']
			]);

			if($result) // si l'insertion à la bdd s'est bien effectuée
				App::getInstance()->alert()->setAlert(App::getInstance()->alert()::NUM_ADD);
		}

		$this->render('attente.index');
	}

	private function checkInputForm($method){
		$errors = NULL;

		if($_POST['numero'] == NULL)
			$errors .= '&numero=wrong';

		if($errors != NULL)
			header("Location: ?p=fileAttente.$method&id=" . $_GET['id'] . $errors);
	}
}